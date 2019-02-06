<?php
ob_start();
session_start();
//header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');



$ID = str_replace(' ','',$_GET["ID"]);
$Status = str_replace(' ','',$_GET["Status"]);
$EmpID = str_replace(' ','',$_GET["EmpID"]);
$CourseID = str_replace(' ','',$_GET["CourseID"]);

if(str_replace(' ','',$_SESSION['sesusertrn'])=="")
{
	echo "0";
}else
{

	$sra = "update TBL_TRAINING_REGISTER set Reg_Status='NotApproved',Approval='".$_SESSION['sesusertrn']."',DT_Approval='".date('m-d-Y H:i:s')."' where ID='".$ID."'";
	mssql_query($sra);

	$sray = "SELECT * FROM TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'";
	$qray = mssql_query($sray);
	if(intval(mssql_num_rows($qray))>0)
	{
		mssql_query("delete from TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'");
	}
echo "1";	
}
?>


