<?php
session_start();

$strFile ="select DISTINCT FILE_NAME FROM TBL_APR_856_FORD_NON ";
$queryFile = mssql_query($strFile);
$resultFile = mssql_fetch_array($queryFile);


// Company

$Company = $_SESSION['CMP'];
$File_Namex=explode(",",$File_Name);
foreach($File_Namex as $FN) {
	$fileNameMul.=$FN."; ";
}

// Variable
$from = 'APR_Ford_MMOG@aapico.com';
$fromname = 'APR Ford MMOG System : Non Sequence Order ';
$subject = 'APR Ford Non Sequence Attach file ASN Confirm : '.$fileNameMul;
$message = '<dt>Dear All,</dt> </br>';
$message .= '     Attach confirm data file 856 : <br/>'.$fileNameMul;
// Main code
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->IsHTML(true); //&agrave;&cedil;&laquo;&agrave;&cedil;&sup2;&agrave;&cedil;Â&agrave;&cedil;&ordf;&agrave;&sup1;&#710;&agrave;&cedil;&#8225;&agrave;&sup1;&#402;&agrave;&cedil;&#8482;&agrave;&cedil;&pound;&agrave;&cedil;&sup1;&agrave;&cedil;&#8250;&agrave;&sup1;Â&agrave;&cedil;&#353;&agrave;&cedil;&#353; html &agrave;&cedil;â€“&agrave;&sup1;&#8240;&agrave;&cedil;&sup2;&agrave;&cedil;&ordf;&agrave;&sup1;&#710;&agrave;&cedil;&#8225;&agrave;&sup1;â‚¬&agrave;&cedil;&#8250;&agrave;&sup1;&#8225;&agrave;&cedil;&#8482; text &agrave;&cedil;Â&agrave;&sup1;&#8225;&agrave;&cedil;&yen;&agrave;&cedil;&#353;&agrave;&cedil;&#353;&agrave;&cedil;&pound;&agrave;&cedil;&pound;&agrave;&cedil;â€”&agrave;&cedil;&plusmn;&agrave;&cedil;â€&agrave;&cedil;&#8482;&agrave;&cedil;&micro;&agrave;&sup1;&#8240;&agrave;&cedil;&shy;&agrave;&cedil;&shy;&agrave;&cedil;Â&agrave;&sup1;&#8222;&agrave;&cedil;â€&agrave;&sup1;&#8240;
$mail->CharSet = "utf-8"; //&agrave;&cedil;Â&agrave;&cedil;&sup3;&agrave;&cedil;&laquo;&agrave;&cedil;&#8482;&agrave;&cedil;â€ charset &agrave;&cedil;&#8218;&agrave;&cedil;&shy;&agrave;&cedil;&#8225;&agrave;&cedil;Â &agrave;&cedil;&sup2;&agrave;&cedil;&copy;&agrave;&cedil;&sup2;&agrave;&sup1;&#402;&agrave;&cedil;&#8482;&agrave;&sup1;â‚¬&agrave;&cedil;&iexcl;&agrave;&cedil;&yen;&agrave;&sup1;&#338;&agrave;&sup1;&#402;&agrave;&cedil;&laquo;&agrave;&sup1;&#8240;&agrave;&cedil;â€“&agrave;&cedil;&sup1;&agrave;&cedil;Â&agrave;&cedil;â€¢&agrave;&sup1;&#8240;&agrave;&cedil;&shy;&agrave;&cedil;&#8225; &agrave;&sup1;â‚¬&agrave;&cedil;&#352;&agrave;&sup1;&#710;&agrave;&cedil;&#8482; tis-620 &agrave;&cedil;&laquo;&agrave;&cedil;&pound;&agrave;&cedil;&middot;&agrave;&cedil;&shy; utf-8
$mail->Host = "ahmail.aapico.com"; // SMTP server
$mail->SMTPAuth = "true";
$mail->Username = "it_request@aapico.com"; // &agrave;&cedil;&#352;&agrave;&cedil;&middot;&agrave;&sup1;&#710;&agrave;&cedil;&shy; emil &agrave;&cedil;â€”&agrave;&cedil;&micro;&agrave;&sup1;&#710;&agrave;&cedil;â€”&agrave;&sup1;&#710;&agrave;&cedil;&sup2;&agrave;&cedil;&#8482;&agrave;&sup1;&#402;&agrave;&cedil;&#352;&agrave;&sup1;&#8240; login &agrave;&cedil;&#8222;&agrave;&cedil;&sect;&agrave;&cedil;&pound;&agrave;&cedil;&ordf;&agrave;&cedil;&pound;&agrave;&sup1;&#8240;&agrave;&cedil;&sup2;&agrave;&cedil;&#8225; email user &agrave;&sup1;Â&agrave;&cedil;&cent;&agrave;&cedil;Â&agrave;&cedil;â€¢&agrave;&sup1;&#710;&agrave;&cedil;&sup2;&agrave;&cedil;&#8225;&agrave;&cedil;&laquo;&agrave;&cedil;&sup2;&agrave;&cedil;Â&agrave;&sup1;â‚¬&agrave;&cedil;&#382;&agrave;&cedil;&middot;&agrave;&sup1;&#710;&agrave;&cedil;&shy;&agrave;&sup1;&#402;&agrave;&cedil;&#352;&agrave;&sup1;&#8240;&agrave;&cedil;&ordf;&agrave;&sup1;&#710;&agrave;&cedil;&#8225;&agrave;&sup1;â‚¬&agrave;&cedil;&iexcl;&agrave;&cedil;&yen;&agrave;&sup1;&#338;&agrave;&cedil;&#710;&agrave;&cedil;&sup2;&agrave;&cedil;Â&agrave;&sup1;â‚¬&agrave;&cedil;&sect;&agrave;&sup1;&#8225;&agrave;&cedil;&#353;&agrave;&sup1;&#8218;&agrave;&cedil;â€&agrave;&cedil;&cent;&agrave;&sup1;â‚¬&agrave;&cedil;&#8240;&agrave;&cedil;&#382;&agrave;&cedil;&sup2;&agrave;&cedil;&deg;&agrave;&sup1;â‚¬&agrave;&cedil;&#382;&agrave;&cedil;&middot;&agrave;&sup1;&#710;&agrave;&cedil;&shy;&agrave;&sup1;&#402;&agrave;&cedil;&laquo;&agrave;&sup1;&#8240;&agrave;&cedil;â€¢&agrave;&cedil;&pound;&agrave;&cedil;&sect;&agrave;&cedil;&#710;&agrave;&cedil;&ordf;&agrave;&cedil;&shy;&agrave;&cedil;&#353;&agrave;&sup1;&#8222;&agrave;&cedil;â€&agrave;&sup1;&#8240;&agrave;&cedil;&#8225;&agrave;&sup1;&#710;&agrave;&cedil;&sup2;&agrave;&cedil;&cent;
$mail->Password = "123456"; // &agrave;&cedil;&pound;&agrave;&cedil;&laquo;&agrave;&cedil;&plusmn;&agrave;&cedil;&ordf;&agrave;&cedil;&#339;&agrave;&sup1;&#710;&agrave;&cedil;&sup2;&agrave;&cedil;&#8482;&agrave;&cedil;&#8218;&agrave;&cedil;&shy;&agrave;&cedil;&#8225; email &agrave;&cedil;â€”&agrave;&cedil;&micro;&agrave;&sup1;&#710;&agrave;&cedil;&pound;&agrave;&cedil;&deg;&agrave;&cedil;&#353;&agrave;&cedil;&cedil;&agrave;&cedil;â€&agrave;&sup1;&#8240;&agrave;&cedil;&sup2;&agrave;&cedil;&#8482;&agrave;&cedil;&#353;&agrave;&cedil;&#8482;
$mail->Port = 25; // set the SMTP port for the GMAIL server

$mail->From = $from; // &agrave;&cedil;&#339;&agrave;&cedil;&sup1;&agrave;&sup1;&#8240;&agrave;&cedil;&pound;&agrave;&cedil;&plusmn;&agrave;&cedil;&#353;&agrave;&cedil;&#710;&agrave;&cedil;&deg;&agrave;&sup1;â‚¬&agrave;&cedil;&laquo;&agrave;&sup1;&#8225;&agrave;&cedil;&#8482;&agrave;&cedil;&shy;&agrave;&cedil;&micro;&agrave;&sup1;â‚¬&agrave;&cedil;&iexcl;&agrave;&cedil;&yen;&agrave;&sup1;&#338;&agrave;&cedil;&#8482;&agrave;&cedil;&micro;&agrave;&sup1;&#8240;&agrave;&sup1;â‚¬&agrave;&cedil;&#8250;&agrave;&sup1;&#8225;&agrave;&cedil;&#8482; &agrave;&cedil;&#339;&agrave;&cedil;&sup1;&agrave;&sup1;&#8240;&agrave;&cedil;&ordf;&agrave;&sup1;&#710;&agrave;&cedil;&#8225;&agrave;&sup1;â‚¬&agrave;&cedil;&iexcl;&agrave;&cedil;&yen;&agrave;&sup1;&#338;
$mail->FromName = $fromname; // &agrave;&cedil;&#339;&agrave;&cedil;&sup1;&agrave;&sup1;&#8240;&agrave;&cedil;&pound;&agrave;&cedil;&plusmn;&agrave;&cedil;&#353;&agrave;&cedil;&#710;&agrave;&cedil;&deg;&agrave;&sup1;â‚¬&agrave;&cedil;&laquo;&agrave;&sup1;&#8225;&agrave;&cedil;&#8482;&agrave;&cedil;&#352;&agrave;&cedil;&middot;&agrave;&sup1;&#710;&agrave;&cedil;&shy;&agrave;&cedil;&#8482;&agrave;&cedil;&micro;&agrave;&sup1;&#8240;&agrave;&sup1;â‚¬&agrave;&cedil;&#8250;&agrave;&sup1;&#8225;&agrave;&cedil;&#8482; &agrave;&cedil;&#352;&agrave;&cedil;&middot;&agrave;&sup1;&#710;&agrave;&cedil;&shy;&agrave;&cedil;&#339;&agrave;&cedil;&sup1;&agrave;&sup1;&#8240;&agrave;&cedil;&ordf;&agrave;&sup1;&#710;&agrave;&cedil;&#8225;


//Query Email To
//$mail->AddAddress("apr.shipping@aapico.com");
//$mail->AddAddress("wuttikrai.n@aapico.com");
//$mail->AddAddress("kanokwan.a@aapico.com");
//Query Email CC
//$mail->AddCC($resultEmailCC['Email'],"test");
//$mail->AddCC("panida.k@aapico.com","test");
//$mail->AddCC("wuttikrai.n@aapico.com","test");
//$mail->AddCC("witthaya.t@aapico.com","test");
//$mail->AddCC("wongkhon.s@aapico.com","test");
$mail->AddCC("watthana.m@aapico.com","test");
//$mail->AddCC("Thiprat.t@aapico.com","test");




$mail->Subject = $subject;
$mail->Body = $message;

foreach($File_Namex as $FN) {
	$pathFile ='File_856/'.$FN;
    $mail->AddAttachment($pathFile);
}

$mail->Send();

?>

