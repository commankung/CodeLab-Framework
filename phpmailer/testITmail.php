<?php
$dbh1 = mssql_connect("agrdb01","dev","dev@agrdb01") or die("Error Connect to Database1");
mssql_select_db("INTRANET");
mssql_query("SET NAMES TIS620");
require("phpmailer/class.phpmailer.php");

	$from = 'ahtraining@aapico.com';
	$fromname = 'TRAINING AH';
	
	
	// Main code
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->IsHTML(true);
	$mail->CharSet = "utf-8"; 
	$mail->Host = "ahmail.aapico.com";
	$mail->SMTPAuth = "true";
	$mail->Username = "it_request@aapico.com"; 
	$mail->Password = "123456"; 
	$mail->Port = 25; // set the SMTP port for the GMAIL server

	$mail->From = $from;   
	$mail->FromName = $fromname; 
	
	
	
	$mail->AddAddress("ah.it.dept@aapico.com");
	//$mail->AddAddress("phattharinya.s@aapico.com");
	$mail->AddAddress("atc@aapico.com");
	
	
	$mail->Subject = $subject;
	$mail->Body = "Test Mail System";
	$mail->Send();
?>