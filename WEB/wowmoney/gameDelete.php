<?
print_r($_GET);
include('./include.php');

$sql="delete from gameAsk where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);
?>

<script>
alert("������ �Ϸ�Ǿ����ϴ�.");
location.href="./gameinfo.php??refresh=1";
</script>