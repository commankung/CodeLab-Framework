<?php
session_start();
$_SESSION['PageMenu'] = '';

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');

$CID = str_replace(' ','',$_POST['CourseID']);

$ss = "SELECT * FROM TBL_TRAINING WHERE CID='$CID' ";
$qs = mssql_query($ss);
$rs= mssql_fetch_array($qs);
$userQuota=$rs['N_NUMBER'];
$Substitution=$rs['S_NUMBER'];


$sra = "SELECT * FROM View_Training_Register where CourseID='".$CID."' and Reg_Status='Approved'";
$qra = mssql_query($sra);
$rgsc=intval(mssql_num_rows($qra));

$srn = "SELECT * FROM View_Training_Register where CourseID='".$CID."' and Reg_Status='NotApproved'";
$qrn = mssql_query($srn);
$rgsn=intval(mssql_num_rows($qrn));


$srp = "SELECT * FROM View_Training_Register where CourseID='".$CID."' and Reg_Status='Waiting'";
$qrp = mssql_query($srp);
$rgsp=intval(mssql_num_rows($qrp));

$strDis="<font color='#0066FF'><i class='icon-bookmark'></i> Users Quota ( <font color='#669900'><b><i>$rgsc</i></b></font> of <font color='#669900'><b><i>$userQuota</i></b></font> ), <font color='#222222'>Pending ( <b><i>$rgsp</i></b> )</font>, <font color='red'>Not Approved ( <b><i>$rgsn</i></b> )</font></font>";


echo $strDis;
?>
