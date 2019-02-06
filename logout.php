<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
	session_start();
	
?>
</head>
<body>

<?php

		$_SESSION['sqsTrn']='';
		$_SESSION['sespasswd']='';
		$_SESSION['sesusertrn']='';
		
		unset($_SESSION["sqsTrn"]);
		unset($_SESSION["sespasswd"]);
		unset($_SESSION["sesusertrn"]);
 		session_destroy();
		session_unset();
	 //echo "<META HTTP-EQUIV=refresh CONTENT=\"0; URL='index.php?MenuItem=Resources-System'\">";
	 header("location:index.php");
	 //echo $_SESSION["admin"];

?>
</body>
</html>
