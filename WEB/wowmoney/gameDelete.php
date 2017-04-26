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

//이미지지우고
rename("../partner/gameImageAsk/".$data[0].".jpg", "../partner/albumTrash/".$data[0].".jpg");
?>

<script>
alert("삭제가 완료되었습니다.");
location.href="./gameinfo.php??refresh=1";
</script>