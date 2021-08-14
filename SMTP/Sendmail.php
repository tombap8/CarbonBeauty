<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMTP</title>
</head>
<body>
    
<?php

$nm=$_POST["nm"];//이름
$email=$_POST["email"];//이메일
$title=$_POST["title"];//제목
$msg=$_POST["msg"];//내용


require 'PHPMailer/PHPMailerAutoload.php';  // php 코드 최상단에 추가합니다. (함수 외부)
/* 
 * $to : 받는 사람 메일 주소
 * $from : 보내는 사람 메일 주소
 * $from_name : 보내는 사람 이름
 * $subject : 메일 제목
 * $body : 메일 내용
 */
function sendMail($to, $from, $from_name, $subject, $body){
    $mail             = new PHPMailer();

    $mail->IsSMTP();                           // telling the class to use SMTP

    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                               // 0 = 아무것도 표시하지 않음
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->CharSet    = "utf-8";
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier (TLS는 tls 입력)
    $mail->Host       = "smtp.naver.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server (TLS는 587 입력)
    $mail->Username   = "tombap@naver.com";            // GMAIL username
    $mail->Password   = "356273parker";            // GMAIL password

    $mail->SetFrom($from, $from_name);

    $mail->AddReplyTo($from, $from_name);

    $mail->Subject   = $subject;

    $mail->MsgHTML($body);

    $address = $to;
    $mail->AddAddress($address);

    if(!$mail->Send()) {
      echo "발송 실패: " . $mail->ErrorInfo;
	  return false;
    } else {
      echo "ok";
	  return true;
    }
}

# 메일 보내기 함수 호출!!!
//sendMail($to, $from, $from_name, $subject, $body)
sendMail("tombap@naver.com","tombap@naver.com", $nm, $title,$msg);

?>


</body>
</html>