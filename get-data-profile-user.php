<?php
header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

$User_AD	=	str_replace(" ","",$_POST['User_AD']);
/*$Connect_Host	=	mssql_connect("ahtime01","sa","it@101"); //AGRDB01
$Connect_DB		=	mssql_select_db("UNIS");
mssql_query("SET NAMES tis620");
mssql_query("SET collection_connection='tis620_thai_ci'");
*/
//Search from Ldap
function Idap_Detail($user,$pwd,$User_AD)
{
	$ldaphost = "ahdomain.aapico.com";
	$ldapport = 389;		
	$ds = ldap_connect($ldaphost, $ldapport)or die("Could not connect to $ldaphost<p>");
	if ($ds)
		{
			$ldapbind = @ldap_bind($ds, $user."@aapico.com",$pwd);	//��Ǩ�ͺ���ʼ�ҹ
			if ($ldapbind) 
				{
					$company =array("AH","AHP","AHR","APR","AITS","AS","Showroom","AF","AP","AR","AA","AL","ASP","AHT","AHD"); // ou in company
					foreach ($company as $comp)
						{
							$dn = "ou=".$comp.",dc=aapico,dc=com";
							$filter = "(sAMAccountName=".$User_AD.")";
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

list ($nameldap,$email,$empId,$companyldap,$deptldap,$mobileldap,$positionldap) = Idap_Detail("itsupport","support",$User_AD);

if(str_replace(' ','',$nameldap)!="")
{
	if(intval(str_replace(' ','',$empId))!=0 && strlen(intval(str_replace(' ','',$empId)))==8)
	{
		$RE_PROFILE[]		=	$empId;
	}else
	{
		$RE_PROFILE[]		=	"";
	}
	if(str_replace(' ','',$companyldap=="AHD"))
	{
		$companyldap="AHT";
	}
	$RE_PROFILE[]		=	$companyldap;
	$RE_PROFILE[]		=   $nameldap;
	$RE_PROFILE[]		=   $positionldap;
	$RE_PROFILE[]		=   $deptldap;
	$RE_PROFILE[]		=   $mobileldap;
	$RE_PROFILE[]		=   "";
	$RE_PROFILE[]		=   "";
	$RE_PROFILE[]		=   "";//point car
	$RE_PROFILE[]		=   "-";//title name
	$RE_PROFILE[]		=   "";//profile_id
	
}/*else{

$STR_PROFILE		=	"select TOP 1 * from v_data2intranet where L_UID='".$EMP_ID."' order by C_Date desc";
$QUERY_PROFILE		=	mssql_query($STR_PROFILE);
$RESULT_PROFILE		=	mssql_fetch_array($QUERY_PROFILE);

$RE_PROFILE[]		=	$EMP_ID;
$RE_PROFILE[]		=	$RESULT_PROFILE['Branch'];
$RE_PROFILE[]		=   iconv("tis-620","utf-8",$RESULT_PROFILE['C_Name']);
$RE_PROFILE[]		=	"";
if($RESULT_PROFILE['Position']=="Not Assigned")
{
	$RE_PROFILE[]		=	"";
}else
{
	$RE_PROFILE[]		=	iconv("tis-620","utf-8",$RESULT_PROFILE['Position']);	
}
$RE_PROFILE[]		=	iconv("tis-620","utf-8",$RESULT_PROFILE['Department']);
$RE_PROFILE[]		=	"";

}
*/
echo json_encode($RE_PROFILE);

?>