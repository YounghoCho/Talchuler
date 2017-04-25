<?
include('./include.php');

$sql="delete from game where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);
?>

<script>
alert("삭제가 완료되었습니다.");
location.href="./gameinfo.php??refresh=1";
</script>