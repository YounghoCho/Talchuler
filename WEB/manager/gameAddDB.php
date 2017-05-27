<?
session_start();
include("./include.php");

if($_FILES['userfile']['tmp_name']==""){
?>
	<script>
	alert("이미지를 먼저 선택해주세요");
	history.back();
	</script>
<?
}else{

$uploaddir = './gameImageAsk/';
$filename=$_POST['p_id']."_".date("Ymdhis");
$newuploadfile= $uploaddir.$filename.".jpg";
move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile);



//중요한게, 사진이랑 게임데이터가 연동되어서 admin에 보여야하니까
//참조값을 넣어줘야한다.

//일단 gameAsk에 g_idx값을 넣어준다.
$sql="select g_idx from game order by g_idx desc";
$q=mysql_query($sql);
$gidx=mysql_fetch_array($q);
$g=$gidx['g_idx']+'1';

//게임수정에서도 g_idx에서 +1해서 게임수정하는데, 여기서도 같은원리로 추가하게되면 같은 g_idx를 가져
//gameAsk에서 g_idx를 불러온다
$ssql="select g_idx from gameAsk";
$qq=mysql_query($ssql);
while($gumsa=mysql_fetch_array($qq)){//gameAsk에 같은 g_idx가없을때까지
	if($gumsa['g_idx']==$g){//만약 g_idx가 이미 있으면
	//g_idx에 계속 1씩더해준다
	$g = $g+'1';
	}
}
//이제 최종g_idx를 gameAsk에 넣어주면된다.
$sql="insert into gameAsk (
	g_idx, p_id,
	g_title, g_subtitle, g_content, g_summary,
	g_level, g_people, g_people2, g_horror,
	g_skill1, g_skill2, g_skill3, g_skill4, g_skill5, g_skill6, 
	g_weekprice, g_holyprice, 
	g_p1, g_p2, g_p3, g_p4, g_p5, g_p6, g_p7, g_p8, 
	g_disname1, g_disname2, g_disname3, g_disname4, g_disname5,
	g_disprice1, g_disprice2, g_disprice3, g_disprice4, g_disprice5, 
	time
	) values (
	'".$g."','".$_SESSION['id']."',
	'".addslashes($_POST['title'])."', '".addslashes($_POST['subtitle'])."', '".addslashes($_POST['content'])."', '".addslashes($_POST['summary'])."',
	'".$_POST['level']."', '".$_POST['people']."', '".$_POST['people2']."', '".$_POST['horror']."',
	'".$_POST['ability1']."', '".$_POST['ability2']."', '".$_POST['ability3']."', '".$_POST['ability4']."', '".$_POST['ability5']."', '".$_POST['ability6']."',
	'".$_POST['week']."', '".$_POST['holy']."',
	'".$_POST['g_p9']."', '".$_POST['g_p10']."', '".$_POST['g_p11']."', '".$_POST['g_p12']."', '".$_POST['g_p13']."', '".$_POST['g_p14']."', '".$_POST['g_p15']."', '".$_POST['g_p16']."',
	'".$_POST['value6']."', '".$_POST['value7']."', '".$_POST['value8']."', '".$_POST['value9']."', '".$_POST['value10']."',
	'".$_POST['dis6']."', '".$_POST['dis7']."', '".$_POST['dis8']."', '".$_POST['dis9']."', '".$_POST['dis10']."',
	now())";
	mysql_query($sql);

$sql="insert into gameImageAsk (gi_idx, g_idx, p_id, filename, time, isnew) values ('','".$g."', '".$_POST['p_id']."', '".$filename."', '".date("Ymdhis")."', '".$_POST['isnew']."')";
mysql_query($sql);

//game_time을 추가한다
$sql="insert into game_timeAsk values('', '".$g."', '".$_POST['time1']."', '".$_POST['time2']."', '".$_POST['time3']."', '".$_POST['time4']."', '".$_POST['time5']."', '".$_POST['time6']."', '".$_POST['time7']."', '".$_POST['time8']."', '".$_POST['time9']."', '".$_POST['time10']."', '".$_POST['time11']."', '".$_POST['time12']."', '".$_POST['time13']."', '".$_POST['time14']."', '".$_POST['time15']."', '".$_POST['time16']."')";
mysql_query($sql);
?>

<script>
alert("게임추가 요청이 완료되었습니다");
location.href="./gameinfo.php";
</script>
<?
//else꺼
}
?>
<meta charset="utf-8"/>