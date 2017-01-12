<?
include('include.php');
include ("./password_hide.php");

$pass=rand(1001,9999);
$message="안녕하세요? 탈출러입니다.<br>임시 비밀번호는 ".$pass."입니다.<br>꼭 비밀번호를 변경 해주세요.";
$subject="[탈출러]임시비밀번호";

$mail_from="talchul_er@naver.com"; 
$headers = "From: 탈출러<$mail_from>\n";
$headers .= "X-Sender: <$mail_from>\n"; 
$headers .= "X-Mailer: PHP ".phpversion()."\n"; 
$headers .= "X-Priority: 1\n"; 
$headers .= "Return-Path: <...>\n"; 
$headers .= "Content-Type: text/html; "; 
$headers .= "charset=euc-kr\n"; 

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