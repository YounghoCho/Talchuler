<?
//메일보내기 S
//메일파트너정보sql

$to = 'talchul_er@naver.com'; // note the comma
$subject = '탈출러 파트너 가입 요청';
// Message
$message='<table style="width:100%;text-align:center">
<tr><td colspan="2"><img src="http://www.talchuler.com/wowmoney/images/common/mail_logo.png"></td><td style="text-align:center;vertical-align:bottom;">파트너 가입 요청 메일&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="3" style="height:20px;"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bar.png"/></td></tr>
<tr><td colspan="3" style="height:190px;vertical-align:middle;"><br>
업체명 : <b>'.$_POST['p_shopName'].'</b><br>
지점명 : <b>'.$_POST['p_localName'].'</b><br>
업체 전화번호 : <b>'.$_POST['p_tele'].'</b><br>
담당자 성함 : <b>'.$_POST['p_name'].'</b><br>
담당자 전화번호 : <b>'.$_POST['p_phone'].'</b><br> 
담당자 이메일 : <b>'.$_POST['p_email'].'</b><br>
<br></td></tr>
<tr><td colspan="3" style="text-align:center"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bottom1.png"/></td></tr>
</table>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: 탈출러 <talchul_er@naver.com>';

mail($to, $subject, $message, implode("\r\n", $headers));
//메일보내기 E

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
alert('파트너 신청이 완료되었습니다.\n해당 지역 업데이트가 되면 바로 알려드리겠습니다! :)');
location.href='../index.php';
</script>