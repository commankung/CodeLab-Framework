<?php
ob_start();
session_start();
//header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');



$StatusChk_trn = str_replace(' ','',$_GET["chktrn"]);
$EmpID = str_replace(' ','',$_GET["EmpID"]);
$CourseID = str_replace(' ','',$_GET["CID"]);

//echo $EmpID."  ".$CourseID."  ".$StatusChk_trn;
if($StatusChk_trn=="true")
{

mssql_query("update TBL_TRAINING_REGISTER set Trn_Status='ON',Log_Status_Active='".$_SESSION['sesusertrn']."',Log_date_active='".date('m-d-Y H:i:s')."' where CourseID='".$CourseID."' and EmpID='".$EmpID."'");
echo "ON";
}else
{
	mssql_query("update TBL_TRAINING_REGISTER set Trn_Status='OFF',Log_Status_Active='".$_SESSION['sesusertrn']."',Log_date_active='".date('m-d-Y H:i:s')."' where CourseID='".$CourseID."' and EmpID='".$EmpID."'");
	echo "OFF";
}
/*

if(str_replace(' ','',$_SESSION['sesusertrn'])=="")
{
	echo "0";
}else
{
if($Status=="Waiting")
{

	$sra = "update TBL_TRAINING_REGISTER set Trn_Status='OFF',Reg_Status='Approved',Approval='".$_SESSION['sesusertrn']."',DT_Approval='".date('m-d-Y H:i:s')."' where ID='".$ID."'";
	mssql_query($sra);

	$sray = "SELECT * FROM TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'";
	$qray = mssql_query($sray);
	if(intval(mssql_num_rows($qray))==0)
	{
		mssql_query("insert into TBL_TRAINING_LOG(EmpID,CourseID)values('$EmpID','$CourseID')");
	}
}

//Reject pedding
if($Status=="Approved")
{
	$sra = "update TBL_TRAINING_REGISTER set Trn_Status='',Reg_Status='Waiting',Approval='".$_SESSION['sesusertrn']."',DT_Approval='".date('m-d-Y H:i:s')."' where ID='".$ID."'";
	mssql_query($sra);

	$sray = "SELECT * FROM TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'";
	$qray = mssql_query($sray);
	if(intval(mssql_num_rows($qray))>0)
	{
		mssql_query("delete from TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'");
	}	
}


//not approve to approve
if($Status=="NotApproved")
{

	$sra = "update TBL_TRAINING_REGISTER set Trn_Status='OFF',Reg_Status='Approved',Approval='".$_SESSION['sesusertrn']."',DT_Approval='".date('m-d-Y H:i:s')."' where ID='".$ID."'";
	mssql_query($sra);

	$sray = "SELECT * FROM TBL_TRAINING_LOG where EmpID='".$EmpID."' and CourseID='".$CourseID."'";
	$qray = mssql_query($sray);
	if(intval(mssql_num_rows($qray))==0)
	{
		mssql_query("insert into TBL_TRAINING_LOG(EmpID,CourseID)values('$EmpID','$CourseID')");
	}
}
echo "1";
}
*/

?>


