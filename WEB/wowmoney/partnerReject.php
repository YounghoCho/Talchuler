<?
include('./include.php');
//partnerAsk의 절대 인덱스 p_idx를 받아와 지운다.
$sql="delete from partnerAsk where p_idx='".$_GET['p_idx']."'";
mysql_query($sql);

//서버디렉토리에 파일도 지워야함	
echo(rename("../manager/partnerAsk/".$_GET['p_id'].".jpg", "../manager/albumTrash/".$_GET['p_id'].".jpg"));

//이미지요청을 지운다
$sql="delete from partnerImageAsk where p_id='".$_GET['p_id']."'";
mysql_query($sql);

//메일보내기 S
//메일파트너정보sql
$partnersql="select p_email, p_shopName, p_localName from partner where p_id='".$_GET['p_id']."'";
$partnerq=mysql_query($partnersql);
$partner=mysql_fetch_array($partnerq);

$string='';
if($_GET['reject1']=='on'){
	$string .='<br>카페로고에 잘못 된 이미지가 첨부되었습니다.';
}
if($_GET['reason']!=''){
	$string .='<br>';
	$string .=$_GET['reason'];
}
$to = $partner[0]; // note the comma
$subject = '탈출러 거절메세지';
// Message
$message='<table style="width:100%;text-align:center">
<tr><td colspan="2"><img src="http://www.talchuler.com/wowmoney/images/common/mail_logo.png"></td><td style="text-align:center;vertical-align:bottom;">카페정보 거절 안내&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="3" style="height:20px;"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bar.png"/></td></tr>
<tr><td colspan="3"><br><b>'.$partner['p_shopName'].' '.$partner['p_localName'].'</b><br>카페정보 등록(수정)이 반려되었습니다<br>아래 사유를 확인하시고 재등록 해주세요</td></tr>
<tr><td colspan="3" style="text-align:center"><br><b>거절사유</b><font color="red">'.$string.'</font><br><br></td></tr>
<tr><td colspan="3" style="text-align:center"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bottom1.png"/></td></tr>
</table>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: 탈출러 <talchul_er@naver.com>';

//mail($to, $subject, $message, implode("\r\n", $headers));
//메일보내기 S
?>
<meta charset="utf-8"/>
<script>
location.href="./cafeinfo.php";
</script>
