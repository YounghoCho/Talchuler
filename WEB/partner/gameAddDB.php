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
$newuploadfile= $uploaddir. $_POST['p_id']."_".date("Ymdhis").".jpg";
echo(move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile));

$filename=$_POST['p_id']."_".date("Ymdhis");

//중요한게, 사진이랑 게임데이터가 연동되어서 admin에 보여야하니까
//참조값을 넣어줘야한다.

//gameinfo에서는 index를 넘겨주면되고, gameadd에서는  desc로 최신 g_idx를 불러온다음 +1해서 보내주면되겟다.
//실제로 게임추가했을때 8번에 생기나도 봐야함.
$sql="insert into gameImageAsk (gi_idx, g_idx, p_id, filename, time, isnew) values ('','".$_POST['g_idx']."', '".$_POST['p_id']."', '".$filename."', '".date("Ymdhis")."', '".$_POST['isnew']."')";
mysql_query($sql);


$sql="insert into gameAsk (
	g_idx, p_id,
	g_title, g_subtitle, g_content, g_summary,
	g_level, g_people, g_horror,
	g_skill1, g_skill2, g_skill3, g_skill4, g_skill5, g_skill6, 
	g_weekprice, g_holyprice, 
	g_p1, g_p2, g_p3, g_p4, g_p5, g_p6, g_p7, g_p8, 
	g_disname1, g_disname2, g_disname3, g_disname4, g_disname5,
	g_disprice1, g_disprice2, g_disprice3, g_disprice4, g_disprice5, 
	time
	) values (
	'','".$_SESSION['id']."',
	'".$_POST['title']."', '".$_POST['subtitle']."', '".$_POST['content']."', '".$_POST['summary']."',
	'".$_POST['level']."', '".$_POST['people']."', '".$_POST['horror']."',
	'".$_POST['ability1']."', '".$_POST['ability2']."', '".$_POST['ability3']."', '".$_POST['ability4']."', '".$_POST['ability5']."', '".$_POST['ability6']."',
	'".$_POST['week']."', '".$_POST['holy']."',
	'".$_POST['g_p9']."', '".$_POST['g_p10']."', '".$_POST['g_p11']."', '".$_POST['g_p12']."', '".$_POST['g_p13']."', '".$_POST['g_p14']."', '".$_POST['g_p15']."', '".$_POST['g_p16']."',
	'".$_POST['value6']."', '".$_POST['value7']."', '".$_POST['value8']."', '".$_POST['value9']."', '".$_POST['value10']."',
	'".$_POST['dis6']."', '".$_POST['dis7']."', '".$_POST['dis8']."', '".$_POST['dis9']."', '".$_POST['dis10']."',
	now())";
	mysql_query($sql);
?>

<script>
alert("게임추가 요청이 완료되었습니다");
location.href="./gameAdd.php?refresh=1";
</script>
<?
//else꺼
}
?>
<meta charset="utf-8"/>