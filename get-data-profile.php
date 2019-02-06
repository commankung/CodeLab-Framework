<?php
session_start();
header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

$EMP_ID	=	str_replace(" ","",$_POST['EmpID']);
$courseID_S = str_replace(" ","",$_POST['courseID_S']);

include('DB_Configuration.php');
mssql_query("SET collection_connection='tis620_thai_ci'");

		$STR_REGISTER	=	"select * from TBL_TRAINING_REGISTER where EmpID = '".$EMP_ID."' AND CourseID='".$courseID_S."'";  //AND  course   row>0 session
		$QUERY_REGISTER	=	mssql_query($STR_REGISTER);
		$ROW_REGISTER	=	mssql_num_rows($QUERY_REGISTER);
		$RESULT_REGISTER=	mssql_fetch_array($QUERY_REGISTER);
		
		if($ROW_REGISTER>0)
		{
			$_SESSION['TUserSearch'] = "1";
		}
		else if($ROW_REGISTER==0)
		{
			$_SESSION['TUserSearch'] = "";
		}


//Search from Ldap
function Idap_Detail($user,$pwd,$empId)
{
	$ldaphost = "ahdomain.aapico.com";
	$ldapport = 389;		
	$ds = ldap_connect($ldaphost, $ldapport)or die("Could not connect to $ldaphost<p>");
	if ($ds)
		{
			$ldapbind = @ldap_bind($ds, $user."@aapico.com",$pwd);	//��Ǩ�ͺ���ʼ�ҹ
			if ($ldapbind) 
				{
					$company =array("AH","AHP","AHR","APR","AITS","AS","Showroom","AF","AP","AR","AA","AL","ASP","AHT","AHD","AERP","APD","APC"); // ou in company
					foreach ($company as $comp)
						{
							$dn = "ou=".$comp.",dc=aapico,dc=com";
							//$filter = "(description=".$empId.")";
							$filter = "(sAMAccountName=".$empId.")";
							$fields = array("cn", "mail","description","company","department","mobile","title");
							$sr = ldap_search($ds, $dn, $filter, $fields);
							$info = ldap_get_entries($ds, $sr);
							for ($i=0; $i<$info["count"]; $i++)
							{								
								return array($info[$i]["cn"][0],$info[$i]["mail"][0],$info[$i]["description"][0],$info[$i]["company"][0],$info[$i]["department"][0],$info[$i]["mobile"][0],$info[$i]["title"][0]);
							}
						}
				}
		}
@ldap_close($ds); 
}


$STR_PROFILE		=	"select TOP 1 * from TBL_TRAINING_PROFILE_USER where EmpID like '".$EMP_ID."%' order by ID desc";
$QUERY_PROFILE		=	mssql_query($STR_PROFILE);
$RESULT_PROFILE		=	mssql_fetch_array($QUERY_PROFILE);

if(intval(mssql_num_rows($QUERY_PROFILE))==0)
{

	list ($nameldap,$email,$empId,$companyldap,$deptldap,$mobileldap,$positionldap) = Idap_Detail("itsupport","support",$EMP_ID);

	if(str_replace(' ','',$companyldap=="AHD"))
	{
		$companyldap="AHT";
	}

	if(is_numeric($empId)==true)
	{
		$v_empid=$empId;
	}else
	{
		$v_empid="";
	}

	$RE_PROFILE[]		=	$v_empid;
	$RE_PROFILE[]		=	$companyldap;
	$RE_PROFILE[]		=   $nameldap;
	$RE_PROFILE[]		=   $positionldap;
	$RE_PROFILE[]		=   $deptldap;
	$RE_PROFILE[]		=   $mobileldap;
	$RE_PROFILE[]		=   "";//name thai
	$RE_PROFILE[]		=   "";//supervisor email
	$RE_PROFILE[]		=   "";//point car
	$RE_PROFILE[]		=   "-";//title name
	$RE_PROFILE[]		=   "";//profile_id
	if(str_replace(' ','',$nameldap)=="")
	{
		$RE_PROFILE[]		=   "0";
	}else
	{
		$RE_PROFILE[]		=   "1";
	}
	
}else{ 
	//$RESULT_REGISTER
	$RE_PROFILE[]		=	$RESULT_PROFILE['EmpID'];
	$RE_PROFILE[]		=	$RESULT_PROFILE['Company'];
	$RE_PROFILE[]		=   $RESULT_PROFILE['Name_EN'];
	$RE_PROFILE[]		=	iconv("tis-620","utf-8",$RESULT_PROFILE['Position']);
	$RE_PROFILE[]		=	iconv("tis-620","utf-8",$RESULT_PROFILE['Department']);	
	$RE_PROFILE[]		=	$RESULT_PROFILE['Mobile'];
	$RE_PROFILE[]		=	iconv("tis-620","utf-8",$RESULT_PROFILE['Name_TH']);
	$RE_PROFILE[]		=	$RESULT_PROFILE['Email_Mrg'];
	$RE_PROFILE[]		=	iconv("tis-620","utf-8",$RESULT_PROFILE['Point_Car']);
	$RE_PROFILE[]		=   $RESULT_PROFILE['Title_Name'];//title name
	$RE_PROFILE[]		=   $RESULT_PROFILE['ID'];//profile_id
	$RE_PROFILE[]		=   "1";

}

echo json_encode($RE_PROFILE);

?>