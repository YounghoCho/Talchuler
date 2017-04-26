<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
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

if($_POST['request_uri']=='/partner/gameAdd.php')
{
	?>
	<script>
	alert("업로드 되었습니다.");
	location.href="./gameAdd.php?refresh=1";
	</script>
	<?
}else
{
	?>
	<script>
	alert("업로드 되었습니다.바로 게임정보 입력을 하신 후 저장을 눌러주세요.");
	location.href="./gameinfo.php?imageRefresh=1";
	</script>
	<?
}
?>
<?
}
?>