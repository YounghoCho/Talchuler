<?
include('./include.php');
//앨범 업로드 요청을 지우고
$sql="delete from album where al_idx='".$_GET['al_idx']."';";
mysql_query($sql);

//partner의 앨범 요청 수도 줄인다
	//유저의 앨범 요청 수 조회
	$sql="select album_count from partner where p_id='".$_GET['p_id']."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);

$sql="update partner set album_count='".$data[0]."'-1 where p_id='".$_GET['p_id']."'";
mysql_query($sql);

//서버디렉토리에 파일도 지워야함	
echo(rename("../manager/albumAsk/".$_GET['filename'].".jpg", "../manager/albumTrash/".$_GET['filename'].".jpg"));

//메일보내기 S
//메일파트너정보sql
$partnersql="select p_email, p_shopName, p_localName from partner where p_id='".$_GET['p_id']."'";
$partnerq=mysql_query($partnersql);
$partner=mysql_fetch_array($partnerq);

$string='';
if($_GET['reject1']=='on'){
	$string .='<br>잘못 된 사진이 첨부되었으니 확인 후 재요청 부탁드립니다';
}
if($_GET['reason']!=''){
	$string .='<br>';
	$string .=$_GET['reason'];
}
$to = $partner[0]; // note the comma
$subject = '탈출러 거절메세지';
// Message
$message='<table style="width:100%;text-align:center">
<tr><td colspan="2"><img src="http://www.talchuler.com/wowmoney/images/common/mail_logo.png"></td><td style="text-align:center;vertical-align:bottom;">카페앨범 거절 안내&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="3" style="height:20px;"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bar.png"/></td></tr>
<tr><td colspan="3"><br><b>'.$partner['p_shopName'].' '.$partner['p_localName'].'</b><br>카페앨범 등록(수정)이 반려되었습니다<br>아래 사유를 확인하시고 재등록 해주세요</td></tr>
<tr><td colspan="3" style="text-align:center"><br><b>거절사유</b><font color="red">'.$string.'</font><br><br></td></tr>
<tr><td colspan="3" style="text-align:center"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bottom1.png"/></td></tr>
</table>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: 탈출러 <talchul_er@naver.com>';

mail($to, $subject, $message, implode("\r\n", $headers));
//메일보내기 S
?>
<script>
history.back();
</script>
