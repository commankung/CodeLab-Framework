<?php
$dbh1 = mssql_connect("agrdb01","dev","dev@agrdb01") or die("Error Connect to Database1");
mssql_select_db("INTRANET");
mysql_query("SET NAMES TIS620");
require("phpmailer/class.phpmailer.php");

function DashboardDateCompFilter(DashBBegin,DashBEnd){
		
		console.log("************reservation1************");
		console.log("************DashboardDateCompFilter************");
		var CompSearch=$("#rCompany-Select").val();
		console.log("************"+CompSearch+"************");
		console.log("************Begin*************");						
		$.post("../Controller/OvertimeManage/OTManageController.php",
		{
			emrg	: 	"",
			courseName	: 	"",
			t_date: "",
			t_time: "",
			t_location: "",
			EmpID: "",
			Title_name: "",
			NameEn: "",
			AGR_COMPANY: "",		
			CourseID: ""					
		},
		function(SessReturn, status){
									
			console.log("***SessReturn****"+SessReturn);	
			EmployeDataReq.ajax.reload();
		});
		
		console.log("************End*************");
				
		
	}


	$from = 'ahtraining@aapico.com';
	$fromname = 'AAPICO Training Center';
	$to = $_POST['emrg'];
	$to2 = 'watthana.m@aapico.com';
	$to_o = 'watthana.m@aapico.com';
	$subject = 'training program '.iconv('tis-620','utf-8',$_POST['courseName']);
	
	$message = '<h2 style="color:blue">Dear  Manager and Management, เรียน ผู้จัดการ และท่านผู้บริหาร</h2><br>';
	$message .= '<h3>Your subordinate have been registered for the training program, '.iconv('tis-620','utf-8',$courseName).'</h3>';
	$message .= '<h3>(พนักงานในหน่วยงานของท่านได้ลงทะเบียนขอเข้าอบรมหลักสูตร  '.iconv('tis-620','utf-8',$courseName).')</h3>';
	$message .= '<h3 style="color:blue;">Date: '.$t_date.'</h3>';
	$message .= '<h3 style="color:blue;">Time: '.$t_time.'</h3>';
	$message .= '<h3 style="color:blue;">Location: '.$t_location.'</h3><br>';
	$message .= '<h3>To approve his/ her training, please kindly click the link below.</h3>';
	$message .= '<h3>(กรุณาคลิ๊กที่ลิ้งค์ด้านล่างเพื่ออนุมัติการเข้าอบรม )</h3>';
	$message .= '<table width="550" border="1" bordercolor="blue" cellpadding="0" cellspacing="0">';
	$message .= '<tr>';
	$message .= '<td height="30" style="background:#FFCC99"><div align="center"><font>EmpID</font></div></td>';
	$message .= '<td height="30" style="background:#FFCC99"><div align="center"><font>Name</font></div></td>';
	$message .= '<td height="30" colspan="2" style="background:#FFCC99"><div align="center">Please click</div></td>';
	$message .= '</tr>';
	$message .= '<tr>';
	$message .= '<td height="40"><font><div align="center">'.$EmpID.'</font></div></td>';
	$message .= '<td height="40"><font><div align="center">'.$Title_name.' '.$NameEn.'</font></div></td>';
	$message .= '<td height="40"><div align="center"><a href="http://intranet.aapico.com/TrainingApp/get-email.php?Status=Approve&EmpID='.$EmpID.'&CourseID='.$CourseID.'&supEmail='.$emrg.'&company='.$AGR_COMPANY.'"><font color="green">  Approved  </font></a></div></td>';
	$message .= '<td height="40"><div align="center"><a href="http://intranet.aapico.com/TrainingApp/get-email.php?Status=NotApprove&EmpID='.$EmpID.'&CourseID='.$CourseID.'&supEmail='.$emrg.'&company='.$AGR_COMPANY.'"><font color="red">Not Approve</font></a></div></td>';
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
	//$mail->AddAddress($to);
	$mail->AddBCC($to2);
	
	if($to=="sattha.p@aapico.com"){
		$mail->AddBCC("phongsakorn.m@aapico.com");
	}
	$mail->AddBCC("phongsakorn.m@aapico.com");
	//$mail->AddBCC($to_o); 
	/*supervisor*/
	
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->Send();
?>