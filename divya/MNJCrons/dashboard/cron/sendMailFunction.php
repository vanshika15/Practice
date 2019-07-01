<?php
include_once("class.phpmailer.php");
define('NEWSENDMAILCONST', 100);

function sendMailNew($email, $subject, $mailHTMLContent, $announce_from = "info@naukri.com", $announce_from_name = "Naukri.com Info") {
	//$email = "mailtovishalsaxena@gmail.com";
	$send_mail = new PHPMailer();
	$send_mail->Subject = $subject;
	$send_mail->Body = $mailHTMLContent;
	$announce_from = $announce_from ? $announce_from: "info@naukri.com";
	$send_mail->AddAddress($email, $email);
	$send_mail->From = $announce_from;
	$send_mail->Sender = $announce_from;
	$send_mail->FromName = $announce_from_name;
	$send_mail->ContentType = "text/html; charset=us-ascii";
	$send_mail->Encoding = "7bit";
	$send_mail->Host = "172.10.122.33";
	$send_mail->SMTPKeepAlive  =  true;
	$send_mail->IsSMTP();
	return $send_mail->Send();

	if(!$send_mail->Send()){
		file_put_contents("/tmp/Mailer.log",print_r($send_mail->ErrorInfo, 1), FILE_APPEND);
		$code = 1;
	} else {
		$code = 0;
	}
	return $code;
	//$send_mail->Send();
}

