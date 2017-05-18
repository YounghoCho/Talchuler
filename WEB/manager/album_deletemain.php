<?
session_start();
include('./include.php');

//디비에서 지우면끝
$sql="delete from album_main where ap_idx='".$_GET['ap_idx']."';";
mysql_query($sql);

?>
<script>
location.href="./album.php?refresh=1";
</script>