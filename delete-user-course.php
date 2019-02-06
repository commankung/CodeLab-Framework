<?php
ob_start();
session_start();
//header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');
//$filename=date('Ymd-').time();



$ID = str_replace(' ','',$_GET["ID"]);
$Status = str_replace(' ','',$_GET["Status"]);
$EmpID = str_replace(' ','',$_GET["EmpID"]);
$CourseID = str_replace(' ','',$_GET["CourseID"]);

if(str_replace(' ','',$_SESSION['sesusertrn'])=="")
{
	echo "0";
}else
{
	$sray = "SELECT * FROM TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'";
	$qray = mssql_query($sray);
	if(intval(mssql_num_rows($qray))>0)
	{
		mssql_query("delete from TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'");
	}
	
		$sra = "delete from TBL_TRAINING_REGISTER where EmpID='".$EmpID."' and CourseID='".$CourseID."'";
		mssql_query($sra);
	
echo "1";	
}
?>


