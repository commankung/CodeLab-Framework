<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
$Emp_ID	=	$_GET['empid'];
?>


<object id="REF_PDF" data="pdf-serach-it-requisition.php?empid1=<?php echo $Emp_ID; ?>"   type="application/pdf" style="width:100%; height:585px;"></object>
</body>

</html>
