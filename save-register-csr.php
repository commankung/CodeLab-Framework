<?php
ob_start();
session_start();
//header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');

$ip = $_SERVER["REMOTE_ADDR"];	
$comname = gethostbyaddr($ip);

$ipc=$comname.'-'.$ip;


 $EmpID = $_POST["Emp_ID"];
 $CourseID = 'CSR2018-01';
 $NameTh = iconv('UTF-8','TIS-620',$_POST["Full_Name_Thai"]);
 $NameEn = $_POST["Full_Name_En"];
 $Position_Emp = iconv('UTF-8','TIS-620',$_POST["Position_Emp"]);
 $Department_Emp = iconv('UTF-8','TIS-620',$_POST["Department_Emp"]);
 $AGR_COMPANY = strtoupper(str_replace(' ','',$_POST["AGR_COMPANY"]));
 //$emrg = str_replace(' ','',$_POST["emrg"]);
 $Mobile_Emp = str_replace(' ','',$_POST["Mobile_Emp"]);
 $Point_Car = iconv('UTF-8','TIS-620',$_POST["pcar"]);
 $Title_name = str_replace(' ','',$_POST["Title_name"]);
 $statusSubmit=str_replace(' ','',$_POST["statusSubmit"]);
 $Profile_ID=str_replace(' ','',$_POST["Profile_ID"]);
 //echo "statusSubmit=".$statusSubmit;

/*echo $EmpID."<br>".$NameTh."<br>".$NameEn."<br>".$Position_Emp."<br>".$Department_Emp."<br>".$AGR_COMPANY."<br>".$emrg."<br>".$Mobile_Emp."<br>".$Point_Car;

*/


if( $statusSubmit=="Register")
{

	$nquota=110;

	$scount=" SELECT COUNT(*) as cquota FROM TBL_CSR_REGISTER where CourseID='".$CourseID."'";
	$qcount = mssql_query($scount);
	$rcount=mssql_fetch_array($qcount);
	if(intval($rcount['cquota'])==$nquota)
	{
		//mssql_query("update TBL_TRAINING set S_STATUS='OFF' where CID='$CourseID' ");
		echo "-1"; 
	}else{

		$sra = "SELECT * FROM TBL_CSR_REGISTER where CourseID='".$CourseID."' and EmpID='".$EmpID."'";
		$qra = mssql_query($sra);
		$rgsc=intval(mssql_num_rows($qra));
		if($rgsc==0)
		{
			$sql = "insert into TBL_CSR_REGISTER(EmpID,Name_TH,Name_EN,Position,Department,Company,Mobile,CourseID,Reg_Date,Reg_Status,Email_Mrg,Point_Car,Title_Name,Reg_Time,IP)values('$EmpID','$NameTh','$NameEn','$Position_Emp','$Department_Emp','$AGR_COMPANY','$Mobile_Emp','$CourseID','".date('m-d-Y')."','Waiting','$emrg','$Point_Car','$Title_name','".date('H:i:s')."','$ipc')";
			mssql_query($sql);


			$srax1 = "SELECT * FROM TBL_TRAINING_PROFILE_USER where EmpID='".$EmpID."'";
			$qrax1 = mssql_query($srax1);
			$rgscx1=intval(mssql_num_rows($qrax1));			
			if($rgscx1==0)
			{
				$sql_insert = "insert into TBL_TRAINING_PROFILE_USER(EmpID,Name_TH,Name_EN,Position,Department,Company,Mobile,Email_Mrg,Point_Car,Title_Name)values('$EmpID','$NameTh','$NameEn','$Position_Emp','$Department_Emp','$AGR_COMPANY','$Mobile_Emp','$emrg','$Point_Car','$Title_name')";
				mssql_query($sql_insert);
			}
			else 
			{
				$sql_update = "update TBL_TRAINING_PROFILE_USER  set Mobile='$Mobile_Emp',Point_Car='$Point_Car' where EmpID='".$EmpID."'";
				mssql_query($sql_update);
			}
	
			$scount=" SELECT COUNT(*) as cquota FROM TBL_CSR_REGISTER where CourseID='".$CourseID."'";
			$qcount = mssql_query($scount);
			$rcount=mssql_fetch_array($qcount);
			/*if(intval($rcount['cquota'])==$nquota)
			{
				mssql_query("update TBL_TRAINING set S_STATUS='OFF' where CID='$CourseID' ");
			}*/
				
				//require ("phpmailer/send-mail.php");
				echo "1";
			}
			else{
				echo "0";
			}
		}
}


//case Edit
if( $statusSubmit=="Edit")
{
			$srax1 = "SELECT * FROM TBL_TRAINING_PROFILE_USER where ID='".$Profile_ID."'";
			$qrax1 = mssql_query($srax1);
			$rgscx1=intval(mssql_num_rows($qrax1));			
			if($rgscx1>0)
			{
				$sql = "update TBL_TRAINING_PROFILE_USER  set EmpID='$EmpID',Name_TH='$NameTh',Name_EN='$NameEn',Position='$Position_Emp',Department='$Department_Emp',Company='$AGR_COMPANY',Mobile='$Mobile_Emp',Email_Mrg='$emrg',Point_Car='$Point_Car',Title_Name='$Title_name' where ID='$Profile_ID'";
				mssql_query($sql);
				
				
				$sqlREGISTER = "SELECT * FROM TBL_CSR_REGISTER where EmpID='".$EmpID."' AND CourseID='".$CourseID."'"; 
				$qREGISTER = mssql_query($sqlREGISTER);
				$rowREGISTER=intval(mssql_num_rows($qREGISTER));			
				if($rowREGISTER>0)
				{
					$sqlUpdateReg = "update TBL_CSR_REGISTER  set EmpID='$EmpID',Name_TH='$NameTh',Name_EN='$NameEn',Position='$Position_Emp',Department='$Department_Emp',Company='$AGR_COMPANY',Mobile='$Mobile_Emp',Email_Mrg='$emrg',Point_Car='$Point_Car',Title_Name='$Title_name' where CourseID='$CourseID' AND EmpID='$EmpID'";
					mssql_query($sqlUpdateReg);
				}
				
				
				echo "3";
			}else
			{
				echo "2";
			}
}
?>