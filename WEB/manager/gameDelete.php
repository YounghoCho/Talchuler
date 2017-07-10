<?
include('./include.php');

$sql="delete from game where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//이미지 지우기전에 filename불러오기
$sql="select filename from gameImage where g_idx='".$_GET['g_idx']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//이미지지우고
$sql="delete from gameImage where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//디렉토리지우고
rename("../partner/gameImage/".$data[0].".jpg", "../partner/albumTrash/".$data[0].".jpg");
?>

<script>
location.href="./gameInfo.php??refresh=1";
</script>