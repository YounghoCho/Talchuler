<?
session_start();
include('./include.php');

?>
<meta charset="utf-8"/>
<?
//game에 있는 index인지 확인하고 없으면 inset, 있으면 update
$sql="select g_idx from game where g_idx='".$_POST['g_idx']."'";
$q=mysql_query($sql);
$test=mysql_fetch_array($q);

if($test[0]){
	//게임업데이트
$sql="update game set
		g_idx='".$_POST['g_idx']."', p_id='".$_POST['p_id']."',
		g_title='".$_POST['title']."', g_subtitle='".$_POST['subtitle']."', g_content='".$_POST['content']."', g_summary='".$_POST['summary']."',
		g_level='".$_POST['level']."', g_people='".$_POST['people']."', g_people2='".$_POST['people2']."', g_horror='".$_POST['horror']."',
		g_skill1='".$_POST['ability1']."', g_skill2='".$_POST['ability2']."', g_skill3='".$_POST['ability3']."', g_skill4='".$_POST['ability4']."', g_skill5='".$_POST['ability5']."', g_skill6='".$_POST['ability6']."', 
		g_weekprice='".$_POST['week']."', g_holyprice='".$_POST['holy']."', 
		g_p1='".$_POST['g_p9']."', g_p2='".$_POST['g_p10']."', g_p3='".$_POST['g_p11']."', g_p4='".$_POST['g_p12']."', g_p5='".$_POST['g_p13']."', g_p6='".$_POST['g_p14']."', g_p7='".$_POST['g_p15']."', g_p8='".$_POST['g_p16']."', 
		g_disname1='".$_POST['value6']."', g_disname2='".$_POST['value7']."', g_disname3='".$_POST['value8']."', g_disname4='".$_POST['value9']."', g_disname5='".$_POST['value10']."',
		g_disprice1='".$_POST['dis6']."', g_disprice2='".$_POST['dis7']."', g_disprice3='".$_POST['dis8']."', g_disprice4='".$_POST['dis9']."', g_disprice5='".$_POST['dis10']."'
		where g_idx='".$test[0]."'";
mysql_query($sql);
	//게임시간업데이트
$sql="update game_time set gt_1='".$_POST['time1']."', gt_2='".$_POST['time2']."', gt_3='".$_POST['time3']."', gt_4='".$_POST['time4']."', gt_5='".$_POST['time5']."', gt_6='".$_POST['time6']."', gt_7='".$_POST['time7']."', gt_8='".$_POST['time8']."', gt_9='".$_POST['time9']."', gt_10='".$_POST['time10']."', gt_11='".$_POST['time11']."', gt_12='".$_POST['time12']."', gt_13='".$_POST['time13']."', gt_14='".$_POST['time14']."', gt_15='".$_POST['time15']."', gt_16='".$_POST['time16']."' where g_idx='".$test[0]."'";
		mysql_query($sql);
	//게임시간추가(게임은있는데, 시간이없는경우)
		$sql="insert into game_time values('','".$_POST['g_idx']."', '".$_POST['time1']."', '".$_POST['time2']."', '".$_POST['time3']."', '".$_POST['time4']."', '".$_POST['time5']."', '".$_POST['time6']."', '".$_POST['time7']."', '".$_POST['time8']."', '".$_POST['time9']."', '".$_POST['time10']."', '".$_POST['time11']."', '".$_POST['time12']."', '".$_POST['time13']."', '".$_POST['time14']."', '".$_POST['time15']."', '".$_POST['time16']."')";
		mysql_query($sql);
mysql_query($sql);

	//이미지추가
	$sql="select filename, time, isnew from gameImageAsk where g_idx='".$test[0]."'";
	$q=mysql_query($sql);
	$move=mysql_fetch_array($q);
	
	//혹시 이미지가 없으면 삽입
	$sql="insert into gameImage (gi_idx, g_idx, p_id, filename, time, isnew) select gi_idx, g_idx, p_id, filename, time, isnew 
   from gameImageAsk
   where g_idx='".$_POST['g_idx']."'";
	mysql_query($sql);

	//이미 이미지가 있으면 업데이트
	$sql="update gameImage set filename='".$move['filename']."', time='".$move['time']."', isnew='".$move['isnew']."' where g_idx='".$test[0]."'";
	mysql_query($sql);
	
	//만약 기존에 사진이 있는 게임이었으면, 기존사진을 지운다.
	$sql="select filename from gameImage where g_idx='".$_POST['g_idx']."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);
	rename("../manager/gameImage/".$data[0].".jpg", "../manager/albumTrash/".$data[0].".jpg");
}
else{
	//게임추가
	$sql="insert into game (
		g_idx, p_id,
		g_title, g_subtitle, g_content, g_summary,
		g_level, g_people, g_people2, g_horror,
		g_skill1, g_skill2, g_skill3, g_skill4, g_skill5, g_skill6, 
		g_weekprice, g_holyprice, 
		g_p1, g_p2, g_p3, g_p4, g_p5, g_p6, g_p7, g_p8, 
		g_disname1, g_disname2, g_disname3, g_disname4, g_disname5,
		g_disprice1, g_disprice2, g_disprice3, g_disprice4, g_disprice5
		) values (
		'".$_POST['g_idx']."', '".$_POST['p_id']."',
		'".$_POST['title']."', '".$_POST['subtitle']."', '".$_POST['content']."', '".$_POST['summary']."',
		'".$_POST['level']."', '".$_POST['people']."', '".$_POST['people2']."', '".$_POST['horror']."',
		'".$_POST['ability1']."', '".$_POST['ability2']."', '".$_POST['ability3']."', '".$_POST['ability4']."', '".$_POST['ability5']."', '".$_POST['ability6']."',
		'".$_POST['week']."', '".$_POST['holy']."',
		'".$_POST['g_p9']."', '".$_POST['g_p10']."', '".$_POST['g_p11']."', '".$_POST['g_p12']."', '".$_POST['g_p13']."', '".$_POST['g_p14']."', '".$_POST['g_p15']."', '".$_POST['g_p16']."',
		'".$_POST['value6']."', '".$_POST['value7']."', '".$_POST['value8']."', '".$_POST['value9']."', '".$_POST['value10']."',
		'".$_POST['dis6']."', '".$_POST['dis7']."', '".$_POST['dis8']."', '".$_POST['dis9']."', '".$_POST['dis10']."')";
mysql_query($sql);
	//게임시간추가
		$sql="insert into game_time values('','".$_POST['g_idx']."', '".$_POST['time1']."', '".$_POST['time2']."', '".$_POST['time3']."', '".$_POST['time4']."', '".$_POST['time5']."', '".$_POST['time6']."', '".$_POST['time7']."', '".$_POST['time8']."', '".$_POST['time9']."', '".$_POST['time10']."', '".$_POST['time11']."', '".$_POST['time12']."', '".$_POST['time13']."', '".$_POST['time14']."', '".$_POST['time15']."', '".$_POST['time16']."')";
		mysql_query($sql);
	//이미지추가
	$sql="insert into gameImage (gi_idx, g_idx, p_id, filename, time, isnew) select gi_idx, g_idx, p_id, filename, time, isnew 
       from gameImageAsk
	   where g_idx='".$_POST['g_idx']."'";
mysql_query($sql);
}
//gameAsk지워야함
$sql="delete from gameAsk where g_idx='".$_POST['g_idx']."'";
mysql_query($sql);
//game_timeAsk지워야함
$sql="delete from game_timeAsk where g_idx='".$_POST['g_idx']."'";
mysql_query($sql);

//새사진을 넣는다. 
$sql="select filename from gameImageAsk where g_idx='".$_POST['g_idx']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//gameImageAsk폴더의 사진을 gameImage폴더에 넣는다. 
rename("../manager/gameImageAsk/".$data[0].".jpg", "../manager/gameImage/".$data[0].".jpg");

//gameImageAsk디비를지운다
$sql="delete from gameImageAsk where g_idx='".$_POST['g_idx']."'";
mysql_query($sql);

//메일보내기 S
//메일파트너정보sql
$partnersql="select p_email from partner where p_id='".$_POST['p_id']."'";
$partnerq=mysql_query($partnersql);
$partner=mysql_fetch_array($partnerq);

$to = $partner[0]; // note the comma
$subject = '탈출러 승인메세지';
// Message
$message='<table style="width:100%;text-align:center">
<tr><td colspan="2"><img src="http://www.talchuler.com/wowmoney/images/common/mail_logo.png"></td><td style="text-align:center;vertical-align:bottom;">게임정보 승인 안내&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="3" style="height:20px;"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bar.png"/></td></tr>
<tr><td colspan="3" style="height:190px;vertical-align:middle;"><br><b>'.$partner['p_shopName'].' '.$partner['p_localName'].'</b><br>탈출러 게임정보 등록(수정)이 승인되었습니다.</td></tr>
<tr><td colspan="3" style="text-align:center"><img src="http://www.talchuler.com/wowmoney/images/common/mail_bottom1.png"/></td></tr>
</table>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: 탈출러 <talchul_er@naver.com>';

//mail($to, $subject, $message, implode("\r\n", $headers));
//메일보내기 E
?>
<script>
history.back();
</script>