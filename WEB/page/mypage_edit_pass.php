<?
include("./include.php");
include ("./password_hide.php");

if(strlen($_POST['pass1']) < 4){
	?>
	<script>
		alert("비밀번호는 4자리 이상이어야 합니다.");
		history.back();
	</script>
	<?
}

if( $_POST['pass1'] != $_POST['pass2']){
	?>
	<script>
		alert("일치하지 않습니다. 다시 입력해주세요.");
		return false;
		history.back();
	
	</script>
	<?
}else{
	$password=$_POST["pass1"];
	$hash= password_hash($password, PASSWORD_DEFAULT);
	$sql="update user set password='".$hash."' where email='".$_SESSION['user_email']."'";
	mysql_query($sql);
	?>
	<script>
	alert("비밀번호가 변경되었습니다.");
	history.back();
	</script>
	<?
}
?>
