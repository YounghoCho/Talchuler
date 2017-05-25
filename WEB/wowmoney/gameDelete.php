<?
include('./include.php');

//요청디비지우고
$sql="delete from gameAsk where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//이미지 지우기전에 filename불러오기
$sql="select filename from gameImageAsk where g_idx='".$_GET['g_idx']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//요청이미지디비지우고
$sql="delete from gameImageAsk where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//게임시간요청지우고
$sql="delete from game_timeAsk where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//이미지지우고
rename("../manager/gameImageAsk/".$data[0].".jpg", "../manager/albumTrash/".$data[0].".jpg");



//메일보내기 S
//메일파트너정보sql
$findsql="select p_id from gameAsk where g_idx='".$_GET['g_idx']."'";
$findq=mysql_query($findsql);
$find=mysql_fetch_array($findq);

$partnersql="select p_email, p_shopName, p_localName from partner where p_id='".$find['p_id']."'";
$partnerq=mysql_query($partnersql);
$partner=mysql_fetch_array($partnerq);

$string='';
if($_GET['reject1']=='on'){
	$string .='<br>할인정보가 홈페이지와 달라 반려되었습니다.';
}
if($_GET['reject2']=='on'){
	$string .='<br>탈출러 판매가격이 잘못 기재되었습니다.';
}
if($_GET['reject3']=='on'){
	$string .='<br>잘못된 게임정보 이미지가 등록되었습니다.';
}
if($_GET['reject4']=='on'){
	$string .='<br>잘못된 게임정보가 기재되었습니다.';
}
if($_GET['reason']!=''){
	$string .='<br>';
	$string .=$_GET['reason'];
}
$to = $partner[0]; // note the comma
$subject = '탈출러 거절메세지';
// Message
$message='<table style="width:100%;text-align:center">
<tr><td colspan="2"><img src="http://www.talchuler.com/wowmoney/images/common/mail_logo.png"></td><td style="text-align:center;vertical-align:bottom;">게임정보 거절 안내&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="3" style="height:20px;"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bar.png"/></td></tr>
<tr><td colspan="3"><br><b>'.$partner['p_shopName'].' '.$partner['p_localName'].'</b><br>게임정보 등록(수정)이 반려되었습니다<br>아래 사유를 확인하시고 재등록 해주세요</td></tr>
<tr><td colspan="3" style="text-align:center"><br><b>거절사유</b><font color="red">'.$string.'</font><br></td></tr>
<tr><td colspan="3" style="text-align:center"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bottom1.png"/></td></tr>
</table>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: 탈출러 <talchul_er@naver.com>';

//mail($to, $subject, $message, implode("\r\n", $headers));
//메일보내기 S
?>

<script>
location.href="./gameinfo.php??refresh=1";
</script>