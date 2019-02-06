<html>
<script src="../../TrainingApp/alert/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="../../TrainingApp/alert/dist/sweetalert.min.js">
<link rel="stylesheet" href="../../TrainingApp/alert/dist/sweetalert.css">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.2.1.1.min.js"></script>

<?php
$dbh1 = mssql_connect("ahdb01","sa","it@101") or die("Error Connect to Database1");
mssql_select_db("INTRANET");
mssql_query("SET NAMES TIS620");

$Status = str_replace(' ','',$_GET["Status"]);
$EmpID = str_replace(' ','',$_GET["EmpID"]);
$CourseID = str_replace(' ','',$_GET["CourseID"]);
$supEmail = $_GET['supEmail'];
$company = $_GET['company'];

$sqlCourse = "SELECT * FROM TBL_TRAINING WHERE CID = '".$CourseID."'";
$qCourse = mssql_query($sqlCourse);
$reCourse = mssql_fetch_array($qCourse);

$sqlEmp = "SELECT * FROM TBL_TRAINING_REGISTER WHERE EmpID = '".$EmpID."'";
$qEmp = mssql_query($sqlEmp);
$reEmp = mssql_fetch_array($qEmp);

$CourseName= $reCourse['TITLE'];
$empTitleName = $reEmp['Title_Name'];
$empName = $reEmp['Name_EN'];

$sqlIDTCourse  = "SELECT * FROM TBL_TRAINING WHERE TITLE ='".$CourseName."'";
$qIDTCourse = mssql_query($sqlIDTCourse);
$reIDTCourse = mssql_fetch_array($qIDTCourse);

$IDTCourse = $reIDTCourse['ID'];

if($Status !="")
{
	require ("phpmailer/send-email-training.php");
}

?>


<?php
if($Status == "Approve")
{
?>
<body onLoad="funcClose('<?php echo $CourseName; ?>','<?php echo $Status; ?>');"></body>
<script  type="text/JavaScript">
function funcClose(Course,Status)
{
	swal({
		title: "Approved",
		text: Course+" is "+Status+"d",
		type: "success",
		//showCancelButton: true,
		confirmButtonColor: 'green',
		confirmButtonText: 'OK',
		cancelButtonText: "Cancle",
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(isConfirm){
			if (isConfirm){
			  window.close('', '_self', '');
			} else {
			  //swal("Cancelled", "", "error");
			  window.close('', '_self', '');
			}
		});
}
</script>
</head>
<?php	
}
else if($Status == "NotApprove")
{
?>
<body onLoad="funcClose('<?php echo $CourseName; ?>','<?php echo $Status; ?>');"></body>
<script  type="text/JavaScript">
function funcClose(Course,Status)
{
	swal({
		title: "Not Approved",
		text: Course+" is "+Status+"d",
		type: "error",
		//showCancelButton: true,
		confirmButtonColor: 'green',
		confirmButtonText: 'OK',
		cancelButtonText: "Cancle",
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(isConfirm){
			if (isConfirm){
			  window.close('', '_self', '');
			} else {
			  //swal("Cancelled", "", "error");
			  window.close('', '_self', '');
			}
		});
}
</script>
<?php	
}
?>
</html>