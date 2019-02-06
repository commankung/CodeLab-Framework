<?php
$dbh1 = mssql_connect("ahdb01","sa","it@101") or die("Error Connect to Database1");
mssql_select_db("INTRANET");
mysql_query("SET NAMES TIS620");
require("phpmailer/class.phpmailer.php");

	$from = 'phattharinya.s@appico.com';
	$fromname = 'Lalana Kaswiboon (AH)';
	$to = $emrg;
	$subject = $CourseID.$to;
	$message = '<dt>Dear Manager and Management, เรียน ผู้จัดการ และท่านผู้บริหาร</dt> </br>';
	$message .= 'Your subordinate have been registered for the training program, '.$CourseID.'</br>';
	$message .= ' พนักงานในหน่วยงานของท่านได้ลงทะเบียนขอเข้าอบรมหลักสูตร '.$CourseID.'</br>';
	$message .= 'To approve his/ her training, please kindly click the link below. กรุณาคลิ๊กที่ลิ้งค์ด้านล่างเพื่ออนุมัติการเข้าอบรม </br>';
	$message .= 'Mr. Watthana Malalam   Approved   Not approve';
	$pathFile = 'TrainingApp/'.$CourseID;
	
	// Main code
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->IsHTML(true);
	$mail->CharSet = "utf-8"; // ในส่วนนี้ ถ้าระบบเราใช้ tis-620 หรือ windows-874 สามารถแก้ไขเปลี่ยน
	$mail->Host = "ahmail.aapico.com"; //mail server ของเรา
	$mail->SMTPAuth = "true"; //  เลือกการใช้งานส่งเมล์ แบบ SMTP
	$mail->Username = "it_request@aapico.com";  //  account e-mail ของเราที่ต้องการจะส่ง
	$mail->Password = "123456"; //  รหัสผ่าน e-mail ของเราที่ต้องการจะส่ง
	$mail->Port = 25; // set the SMTP port for the GMAIL server

	$mail->From = $from; //  account e-mail ของเราที่ใช้ในการส่งอีเมล
	$mail->FromName = $fromname; //  ชื่อผู้ส่งที่แสดง เมื่อผู้รับได้รับเมล์ของเรา
	//$mail->AddAddress($to);  // Email ปลายทางที่เราต้องการส่ง(ไม่ต้องแก้ไข)
	//$mail->AddAddress('phattharinya.s@aapico.com');
	$mail->AddAddress($to,"test");
	
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AddAttachment($pathFile);
	$mail->Send();
?>