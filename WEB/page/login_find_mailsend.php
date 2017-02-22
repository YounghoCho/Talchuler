<?
include('include.php');
include ("./password_hide.php");

$pass=rand(1001,9999);
$message="<div style=";
$message.="background-image:url('http://www.talchuler.com/images/contents/email.jpg');width:700px;height:350px;background-repeat:no-repeat";
$message.="><br><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;비밀번호 : <font style='font-size:20px;font-weight:bold'>".$pass."</font></div>
		  </div>";
$subject="[탈출러]임시비밀번호";

$mail_from="talchul_er@naver.com"; 
$headers = "From: 탈출러<$mail_from>\n";
$headers .= "X-Sender: <$mail_from>\n"; 
$headers .= "X-Mailer: PHP ".phpversion()."\n"; 
$headers .= "X-Priority: 1\n"; 
$headers .= "Return-Path: <...>\n"; 
$headers .= "Content-Type: text/html; "; 
$headers .= "charset=utf-8\n"; 

$to=$_GET['email'];
mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);

$hash= password_hash($pass, PASSWORD_DEFAULT);

$sql="update user set password='".$hash."' where email='".$to."'";
mysql_query($sql);
?>
<script>
alert("임시 비밀번호가 이메일로 전송되었습니다.")
location.href='./login.php';
</script>