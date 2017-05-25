<?
	include('./include.php');	
	include ("../page/password_hide.php");
	//메일보내기 S
	$sql="select p_name, p_shopName from partner where p_email='".$_GET['email']."';";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);

	$password=rand(1000,9999);	

	$to = $_GET['email']; // note the comma
	$subject = '탈출러 비밀번호 찾기';
	// Message
	$message='<table style="width:100%;text-align:center">
	<tr><td colspan="2"><img src="http://www.talchuler.com/wowmoney/images/common/mail_logo.png"></td><td style="text-align:center;vertical-align:bottom;">비밀번호 변경 안내&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
	<tr><td colspan="3" style="height:20px;"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bar.png"/></td></tr>
	<tr><td colspan="3" style="height:190px;vertical-align:middle;"><br><b>'.$data['p_name'].'님('.$data['p_shopName'].')</b>의 비밀번호가 <b>'.$password.'</b>로 수정되었습니다.<br>로그인 후 <font color="red">반드시</font> 비밀번호를 수정해주세요</td></tr>
	<tr><td colspan="3" style="text-align:center"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bottom1.png"/></td></tr>
	</table>';

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';
	$headers[] = 'From: 탈출러 <talchul_er@naver.com>';

	mail($to, $subject, $message, implode("\r\n", $headers));
	
	//실제비밀번호 수정
	$sql="update partner set p_pw='".$password."' where p_email='".$_GET['email']."'";
	mysql_query($sql);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
alert('변경된 비밀번호가 이메일로 전송되었습니다.');
location.href='./index.php';
</script>

