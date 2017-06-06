<?
include('./include.php');
print_r($_GET);
$sql = "update partner set p_agreement5 = '2' where p_id ='".$_GET['p_id']."'";
mysql_query($sql);
?>
<script>
location.href='./findPartner.php';
</script>