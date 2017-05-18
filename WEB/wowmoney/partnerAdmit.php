<?
include('./include.php');

//넘어온걸로 partnerAsk를 조회하고
$sql="select * from partnerAsk where p_id='".$_GET['p_id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
//조회결과를 partner에 수정시킨다
$sql="update partner set 
p_shopName='".$data['p_shopName']."',
p_localName='".$data['p_localName']."',
p_tele='".$data['p_tele']."',
p_postNumber1='".$data['p_postNumber1']."',
p_location1='".$data['p_location1']."', p_location2='".$data['p_location2']."',
benefit1='".$data['benefit1']."', benefit2='".$data['benefit2']."', benefit3='".$data['benefit3']."', benefit4='".$data['benefit4']."',
rule='".$data['rule']."' 
where p_id='".$data['p_id']."'";
//mysql_query($sql);

//partnerAsk도 지운다
$sql="delete from partnerAsk where p_id='".$_GET['p_id']."'";
mysql_query($sql);

//사진도 디렉토리를 옮긴다.
rename("../manager/partnerAsk/".$_GET['p_id'].".jpg", "../manager/partnerpic/".$_GET['p_id'].".jpg");

//메일보내기 S
//메일파트너정보sql
$partnersql="select p_email from partner where p_id='".$_GET['p_id']."'";
$partnerq=mysql_query($partnersql);
$partner=mysql_fetch_array($partnerq);

$to = $partner[0]; // note the comma
$subject = '탈출러 승인메세지';
// Message
$message='<table style="width:100%;text-align:center">
<tr><td colspan="2"><img src="http://www.talchuler.com/wowmoney/images/common/mail_logo.png"></td><td style="text-align:center;vertical-align:bottom;">카페정보 승인 안내&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="3" style="height:20px;"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bar.png"/></td></tr>
<tr><td colspan="3" style="height:190px;vertical-align:middle;"><br><b>'.$partner['p_shopName'].' '.$partner['p_localName'].'</b><br>탈출러 카페정보 등록(수정)이 승인되었습니다.</td></tr>
<tr><td colspan="3" style="text-align:center"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bottom1.png"/></td></tr>
</table>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: 탈출러 <talchul_er@naver.com>';

mail($to, $subject, $message, implode("\r\n", $headers));
//메일보내기 S
?>
<meta charset="utf-8"/>

<script>
location.href='./cafeinfo.php?refresh=1';
</script>