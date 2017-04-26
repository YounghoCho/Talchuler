<?
session_start();
include('./include.php');

?>
<meta charset="utf-8"/>
<?
//gaem에 있는 index인지 확인하고 없으면 inset, 있으면 update
$sql="select g_idx from game where g_idx='".$_POST['g_idx']."'";
$q=mysql_query($sql);
$test=mysql_fetch_array($q);

if($test[0]){
$sql="update game set
		g_idx='".$_POST['g_idx']."', p_id='".$_POST['p_id']."',
		g_title='".$_POST['title']."', g_subtitle='".$_POST['subtitle']."', g_content='".$_POST['content']."', g_summary='".$_POST['summary']."',
		g_level='".$_POST['level']."', g_people='".$_POST['people']."', g_horror='".$_POST['horror']."',
		g_skill1='".$_POST['ability1']."', g_skill2='".$_POST['ability2']."', g_skill3='".$_POST['ability3']."', g_skill4='".$_POST['ability4']."', g_skill5='".$_POST['ability5']."', g_skill6='".$_POST['ability6']."', 
		g_weekprice='".$_POST['week']."', g_holyprice='".$_POST['holy']."', 
		g_p1='".$_POST['g_p9']."', g_p2='".$_POST['g_p10']."', g_p3='".$_POST['g_p11']."', g_p4='".$_POST['g_p12']."', g_p5='".$_POST['g_p13']."', g_p6='".$_POST['g_p14']."', g_p7='".$_POST['g_p15']."', g_p8='".$_POST['g_p16']."', 
		g_disname1='".$_POST['value6']."', g_disname2='".$_POST['value7']."', g_disname3='".$_POST['value8']."', g_disname4='".$_POST['value9']."', g_disname5='".$_POST['value10']."',
		g_disprice1='".$_POST['dis6']."', g_disprice2='".$_POST['dis7']."', g_disprice3='".$_POST['dis8']."', g_disprice4='".$_POST['dis9']."', g_disprice5='".$_POST['dis10']."'
		where g_idx='".$test[0]."'";
mysql_query($sql);
}
else{
	$sql="insert into game (
		g_idx, p_id,
		g_title, g_subtitle, g_content, g_summary,
		g_level, g_people, g_horror,
		g_skill1, g_skill2, g_skill3, g_skill4, g_skill5, g_skill6, 
		g_weekprice, g_holyprice, 
		g_p1, g_p2, g_p3, g_p4, g_p5, g_p6, g_p7, g_p8, 
		g_disname1, g_disname2, g_disname3, g_disname4, g_disname5,
		g_disprice1, g_disprice2, g_disprice3, g_disprice4, g_disprice5
		) values (
		'', '".$_POST['p_id']."',
		'".$_POST['title']."', '".$_POST['subtitle']."', '".$_POST['content']."', '".$_POST['summary']."',
		'".$_POST['level']."', '".$_POST['people']."', '".$_POST['horror']."',
		'".$_POST['ability1']."', '".$_POST['ability2']."', '".$_POST['ability3']."', '".$_POST['ability4']."', '".$_POST['ability5']."', '".$_POST['ability6']."',
		'".$_POST['week']."', '".$_POST['holy']."',
		'".$_POST['g_p9']."', '".$_POST['g_p10']."', '".$_POST['g_p11']."', '".$_POST['g_p12']."', '".$_POST['g_p13']."', '".$_POST['g_p14']."', '".$_POST['g_p15']."', '".$_POST['g_p16']."',
		'".$_POST['value6']."', '".$_POST['value7']."', '".$_POST['value8']."', '".$_POST['value9']."', '".$_POST['value10']."',
		'".$_POST['dis6']."', '".$_POST['dis7']."', '".$_POST['dis8']."', '".$_POST['dis9']."', '".$_POST['dis10']."')";
mysql_query($sql);
}
//gameAsk지워야함
$sql="delete from gameAsk where g_idx='".$_POST['g_idx']."'";
mysql_query($sql);

//★이전 게임 이미지는 안지운다, 나중에 history보여줄수도 있음.
//gameImageAsk를 gameImage에 담고
$sql="insert into gameImage (gi_idx, g_idx, p_id, filename, time, isnew) select gi_idx, g_idx, p_id, filename, time, isnew 
       from gameImageAsk
	   where g_idx='".$_POST['g_idx']."'";
mysql_query($sql);

//이미지 지우기전에 filename불러오기
$sql="select filename from gameImageAsk where g_idx='".$_POST['g_idx']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//gameImageAsk폴더의 사진을 gameImage폴더에 넣는다.
rename("../partner/gameImageAsk/".$data[0].".jpg", "../partner/gameImage/".$data[0].".jpg");

//gameImageAsk디비를지운다
$sql="delete from gameImageAsk where g_idx='".$_POST['g_idx']."'";
mysql_query($sql);

?>
<script>
history.back();
</script>