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
		$to1 = 'sasithorn.y@aapico.com';
		$to2 = 'hr_aa@aapico.com';
		//$to = 'phattharinya.s@aapico.com';
		$to_o = 'watthana.m@aapico.com';
	}
	else if($company == "AF" || $company == "APC" || $company == "af" || $company == "apc")              
	{ 
		$to1 = 'Panladar.K@aapico.com';
		$to2 = 'Raweewan.P@aapico.com';
		//$to = 'phattharinya.s@aapico.com';
		$to_o = 'watthana.m@aapico.com';
	}
	else if($company == "AP" || $company == "APR" || $company == "ap" || $company == "apr")       
	{ 
		$to1 = 'AP_Training@aapico.com';
		//$to = 'phattharinya.s@aapico.com';
		$to_o = 'watthana.m@aapico.com';
	}
	else
	{
		$to1 = 'lalana.k@aapico.com';
		$to2 = 'ahtraining@aapico.com';
		$to3 = 'astraining@asico.co.th';
		$to4 = 'prapassara.n@aapico.com';
		$toatc = 'atc@aapico.com';
		//$to = 'phattharinya.s@aapico.com';
		$to_o = 'watthana.m@aapico.com';
		
	}
	
	//$to = 'phattharinya.s@aapico.com';//del
	$subject = 'Status Course '.iconv('tis-620','utf-8',$CourseName);
	
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
	$message .= '<h3 style="color:blue;">Date: '.$t_date.'</h3>';
	$message .= '<h3 style="color:blue;">Time: '.$t_time.'</h3>';
	$message .= '<h3 style="color:blue;">Location: '.$t_location.'</h3>';	
	$message .= '<table width="500" border="1" bordercolor="black" cellpadding="0" cellspacing="0">';
	$message .= '<tr>';
	$message .= '<td height="30" style="background:#FFCC99"><div align="center">EMP ID</div></td>';
	$message .= '<td height="30" style="background:#FFCC99"><div align="center">NAME</div></td>';
	$message .= '</tr>';
	$message .= '<tr>';
	$message .= '<td height="30"><div align="center">'.$EmpID.'</div></td>';
	$message .= '<td height="30"><div align="center">'.$empTitleName.' '.$empName.' ('.$company.')</div></td>';
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
	
	
	if($company == "AA" || $company == "ASP" || $company == "aa" || $company == "asp")
	{ 
		$mail->AddAddress($to1);
		$mail->AddAddress($to2);
		//$mail->AddBCC($to);
		$mail->AddBCC($to_o); 
		
	}
	else if($company == "AF" || $company == "APC" || $company == "af" || $company == "apc")              
	{ 
		$mail->AddAddress($to1);
		$mail->AddAddress($to2);
		//$mail->AddBCC($to);
		$mail->AddBCC($to_o); 
		
	}
	else if($company == "AP" || $company == "APR" || $company == "ap" || $company == "apr")       
	{ 
		$mail->AddAddress($to1);
		//$mail->AddBCC($to);
		$mail->AddBCC($to_o); 
		
	}
	else
	{
		$mail->AddAddress($to1);
		$mail->AddAddress($to2);
		$mail->AddAddress($to3);
		$mail->AddAddress($to4);
		$mail->AddAddress($toatc);
		//$mail->AddBCC($to);
		$mail->AddBCC($to_o); 
		
	}
	
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->Send();
?>