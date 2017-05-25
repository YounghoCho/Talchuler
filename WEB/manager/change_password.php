<?
session_start();
include('./include.php');
$sql="select p_pw from partner where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$now=mysql_fetch_array($q);

//현재비밀번호가 맞는지 확인하기
if($now['p_pw']!=$_POST['pass_now']){
	?>
	<script>
		alert('현재 비밀번호와 일치하지 않습니다.');
		history.back();
	</script>
	<?
}elseif($now['p_pw']==''){
	?>
	<script>
		alert('비밀번호를 입력해주세요.');
		history.back();
	</script>
	<?

}elseif($_POST['pass_new']==''){
	?>
	<script>
		alert('새 비밀번호를 입력해주세요.');
		history.back();
	</script>
	<?

//새비밀번호와 체크가 일치하는지 확인하기
}elseif($_POST['pass_new']!=$_POST['pass_check']){
		?>
	<script>
		alert('새 비밀번호를 다시 확인해주세요.');
		history.back();
	</script>
		<?
//다통과되면, 비밀번호를 업데이트하기
}else{
	$sql="update partner set p_pw='".$_POST['pass_new']."' where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	?>
	<script>
		alert('비밀번호가 변경되었습니다.');
		history.back();
	</script>
	<?
}
?>