<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>Training Application</title>

<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

<!-- ace styles -->
<!-- page specific plugin styles -->
<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
<link rel="stylesheet" href="assets/css/chosen.min.css" />
<link rel="stylesheet" href="assets/css/datepicker.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" href="assets/css/colorpicker.min.css" />

<!-- ace styles -->
<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.2.1.1.min.js"></script>

<script src="../../TrainingApp/alert/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="../../TrainingApp/alert/dist/sweetalert.min.js">
<link rel="stylesheet" href="../../TrainingApp/alert/dist/sweetalert.css">

<!--pagination-->
<link rel="stylesheet" href="assets/css/pagination.css">

<!-- ace settings handler -->
<script src="assets/js/ace-extra.min.js"></script>
</head>
<body>

<?php
$dbh1 = mssql_connect("agrdb01","dev","dev@agrdb01") or die("Error Connect to Database1");
mssql_select_db("INTRANET");
mssql_query("SET NAMES TIS620");

$Status = str_replace(' ','',$_GET["Status"]);
$EmpID = str_replace(' ','',$_GET["EmpID"]);
$CourseID = str_replace(' ','',$_GET["CourseID"]);
$supEmail = str_replace(' ','',$_GET['supEmail']);
$company = str_replace(' ','',$_GET['company']);

$sqlCourse = "SELECT * FROM TBL_TRAINING WHERE CID = '".$CourseID."'";
$qCourse = mssql_query($sqlCourse);
$reCourse = mssql_fetch_array($qCourse);

$sqlEmp = "SELECT * FROM TBL_TRAINING_REGISTER WHERE EmpID = '".$EmpID."' and CourseID='".$CourseID."'";
$qEmp = mssql_query($sqlEmp);
$reEmp = mssql_fetch_array($qEmp);

$CourseName= $reCourse['TITLE'];
$empTitleName = $reEmp['Title_Name'];
$empName = $reEmp['Name_EN'];
$Reg_Status = $reEmp['Reg_Status'];


///echo $Reg_Status."  ".$EmpID;

//$sqlIDTCourse  = "SELECT * FROM TBL_TRAINING WHERE TITLE ='".$CourseName."'"; //edit 29-05-2017
$sqlIDTCourse  = "SELECT * FROM TBL_TRAINING WHERE CID ='".$CourseID."'";
$qIDTCourse = mssql_query($sqlIDTCourse);
$reIDTCourse = mssql_fetch_array($qIDTCourse);

$IDTCourse = $reIDTCourse['ID'];

$d1=str_replace(' ','',$reIDTCourse['TDATE']);
$d2=explode('-',$d1);
//$d3=DateTime::createFromFormat('m/d/Y', $d2[0]);
if($d2[0]==$d2[1])
{
	$t_date=date("d/m/Y", strtotime($d2[0]));
	$t_time=$reIDTCourse['S_TIME']."-".$reIDTCourse['E_TIME'];			
}else
{
	$t_date=date("d/m/Y", strtotime($d2[0]))."-".date("d/m/Y", strtotime($d2[1]));
	$t_time=$reIDTCourse['S_TIME']."-".$reIDTCourse['E_TIME'];
}

if(iconv("tis-620", "utf-8",$reIDTCourse['BRANCH'])=="OTHER")
{
	if(iconv("tis-620", "utf-8",$reIDTCourse['Other'])=="-")
	{
		$t_location=iconv("tis-620", "utf-8",$reIDTCourse['ROOM']);
	}else{
		$t_location=iconv("tis-620", "utf-8",$reIDTCourse['ROOM'])." @ ".$reIDTCourse['Other'];				
	}
}else{
	$t_location=iconv("tis-620", "utf-8",$reIDTCourse['ROOM'])." @ ".iconv("tis-620", "utf-8",$reIDTCourse['BRANCH']);
}

if($Status !="" && $Reg_Status=="Waiting")
{
	require ("phpmailer/send-email-training.php");
}
if($Reg_Status=="Approved"){
?>
<div class="col-xs-6 col-sm-2">
</div>
<div class="col-xs-6 col-sm-8">
	<div class="well well-lg" style="margin-top:300px; margin-bottom:300px;">
		<div align="right">
			<button class="btn btn-xs btn-danger" onclick="funcClose();">
				<i class="ace-icon fa fa-times white"></i>
			</button>
		</div>
		<div>
			<h4 class="green">Approved</h4>
			<h6>Course : <?php echo iconv('tis-620','utf-8',$CourseName); ?> ได้เคยผ่านการอนุมัติมาแล้ว</h6>
		</div>
	</div>
</div>
<?php 
}else if($Reg_Status=="NotApproved"){
?>
<div class="col-xs-6 col-sm-2">
</div>
<div class="col-xs-6 col-sm-8">
	<div class="well well-lg" style="margin-top:300px; margin-bottom:300px;">
		<div align="right">
			<button class="btn btn-xs btn-danger" onclick="funcClose();">
				<i class="ace-icon fa fa-times white"></i>
			</button>
		</div>
		<div>
			<h4 class="red">Not Approved</h4>
			<h6>Course : <?php echo iconv('tis-620','utf-8',$CourseName); ?> ได้เคยผ่านการไม่อนุมัติมาแล้ว</h6>
		</div>
	</div>
</div>
<?php } ?>

<?php

//echo $Status."xxx ";

if($Status == "Approve"  && $Reg_Status=="Waiting")
{
?>

<div class="col-xs-6 col-sm-2">
</div>
<div class="col-xs-6 col-sm-8">
	<div class="well well-lg" style="margin-top:300px; margin-bottom:300px;">
		<div align="right">
			<button class="btn btn-xs btn-danger" onclick="funcClose();">
				<i class="ace-icon fa fa-times white"></i>
			</button>
		</div>
		<div>
			<h4 class="green">Approved</h4>
			<h6><?php echo iconv('tis-620','utf-8',$CourseName); ?> is <?php echo $Status; ?>d  (เสร็จสิ้นการอนุมัติ)</h6>
		</div>
	</div>
</div>

<?php	
}
else if($Status == "NotApprove"  && $Reg_Status=="Waiting")
{
?>

<div class="col-xs-6 col-sm-2">
</div>
<div class="col-xs-6 col-sm-8">
	<div class="well well-lg" style="margin-top:300px; margin-bottom:300px;">
		<div align="right">
			<button class="btn btn-xs btn-danger" onclick="funcClose();">
				<i class="ace-icon fa fa-times white"></i>
			</button>
		</div>
		<div>
			<h4 class="red">Not Approved</h4>
			<h6><?php echo iconv('tis-620','utf-8',$CourseName); ?> is <?php echo $Status; ?>d  (เสร็จสิ้นการอนุมัติ)</h6>
		</div>
	</div>
</div>

<?php	
}
?>

<script  type="text/JavaScript">
function funcClose()
{
	window.open('','_self',''); 
    window.close(); 
}
</script>
</body>
</html>