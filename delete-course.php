<?php
include('DB_Configuration.php');
	$sPe ="delete from TBL_TRAINING where CID='".str_replace(' ','',$_POST['courseIDt'])."'";
	mssql_query($sPe);
	
	$sPe1 ="delete from TBL_TRAINING_LOG where CourseID='".str_replace(' ','',$_POST['courseIDt'])."'";
	mssql_query($sPe1);
	
	$sPe2 ="delete from TBL_TRAINING_REGISTER where CourseID='".str_replace(' ','',$_POST['courseIDt'])."'";
	mssql_query($sPe2);

?>
	