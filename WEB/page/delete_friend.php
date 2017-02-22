<?
include('include.php');

$sql="delete from friends where f_email='".$_POST['email']."';";
$q=mysql_query($sql);

$sql="delete from whoAddMe where f_email='".$_POST['email']."';";
$q=mysql_query($sql);

?>
<script>
	alert("삭제되었습니다");
	history.back();
</script>
