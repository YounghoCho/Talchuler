<?
include('./include.php');
$sql="delete from album where al_idx='".$_GET['al_idx']."';";
mysql_query($sql);
?>
<script>
history.back();
</script>
