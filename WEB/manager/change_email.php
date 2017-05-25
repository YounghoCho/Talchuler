<?
session_start();
include('./include.php');
$sql="select p_email from partner where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$now=mysql_fetch_array($q);

//현재비밀번호가 맞는지 확인하기
if($now['p_email']==''){
	?>
	<script>
		alert('이메일을 입력해주세요.');
		history.back();
	</script>
	<?
//다통과되면, 비밀번호를 업데이트하기
}else{
	$sql="update partner set p_email='".$_POST['email']."' where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	?>
	<script>
		alert('이메일이 변경되었습니다.');
		history.back();
	</script>
	<?
}
?>