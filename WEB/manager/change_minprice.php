<?
session_start();
include('./include.php');
if($_POST['agreement5']=='on'){
	$sql="update partner set p_agreement5='1' where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
}
?>
<script>
alert('최저가 보장에 동의하셨습니다.');
history.back();
</script>