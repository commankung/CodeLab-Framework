<?php
$dbh1 = mssql_connect("agrdb01","dev","dev@agrdb01") or die("Error Connect to Database1");
mssql_select_db("INTRANET");
mssql_query("SET NAMES TIS620");
require("phpmailer/class.phpmailer.php");

	$from = 'ahtraining@aapico.com';
	$fromname = 'TRAINING AH';
	$company = strtolower($company);
	
	if($company == "AA" || $company == "ASP" || $company == "aa" || $company == "asp")
	{ 
		$to = 'watthana.m@aapico.com';
	}
	else if($company == "AF" || $company == "APC" || $company == "af" || $company == "apc")              
	{ 
		
		$to = 'watthana.m@aapico.com';
	}
	else if($company == "AP" || $company == "APR" || $company == "ap" || $company == "apr")       
	{ 
		
		$to = 'watthana.m@aapico.com';
	}
	else
	{
		
		$to = 'watthana.m@aapico.com';
		//$to4 = 'watthana.m@aapico.com';
	}
	
	//$to = 'phattharinya.s@aapico.com';//del
	$subject = 'Status Course '.iconv('tis-620','utf-8',$CourseName."//".$company );
	
	if($Status == "Approve")
	{
		$StatusText = '<font color="green">Approved</font>';
	}
	else if($Status == "NotApprove")
	{
		$StatusText = '<font color="red">Not Approved</font>';
	}
	
	$message = '<h2 style="color:blue;">Acceptance</h2><br>';
	$message .= '<h3> "'.iconv('tis-620','utf-8',$CourseName).'" is '.$StatusText.' by '.$supEmail.'</h3>';
	$message .= '<table width="500" border="1" bordercolor="black" cellpadding="0" cellspacing="0">';
	$message .= '<tr>';
	$message .= '<td height="30" style="background:#FFCC99"><div align="center">EMP ID</div></td>';
	$message .= '<td height="30" style="background:#FFCC99"><div align="center">NAME</div></td>';
	$message .= '</tr>';
	$message .= '<tr>';
	$message .= '<td height="30"><div align="center">'.$EmpID.'</div></td>';
	$message .= '<td height="30"><div align="center">'.$empTitleName.' '.$empName.'</div></td>';
	$message .= '</tr>';
	$message .= '</table>';
	
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
	//$mail->AddAddress($to);//del
	
	/*$mail->AddAddress($to1);
	$mail->AddAddress($to2);
	$mail->AddAddress($to3);
	$mail->AddAddress($to4);
	$mail->AddAddress($to5);*/
	
	if($company == "AA" || $company == "ASP" || $company == "aa" || $company == "asp")
	{ 
		
		$mail->AddBCC($to);
		
	}
	else if($company == "AF" || $company == "APC" || $company == "af" || $company == "apc")              
	{ 
		
		$mail->AddBCC($to);
		
	}
	else if($company == "AP" || $company == "APR" || $company == "ap" || $company == "apr")       
	{ 
		
		$mail->AddBCC($to);
		
	}
	else
	{
		
		$mail->AddBCC($to);
		//$mail->AddAddress($to4);
	}
	
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->Send();
?>