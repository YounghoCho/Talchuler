<?
@session_start();
include('include.php');

$sql="select f_email from friends where user='".$_SESSION['user_email']."'";
$q=mysql_query($sql);
while($d=mysql_fetch_array($q)){
	if($d['f_email']==$_POST['you']){
	?>
	<script>
		alert("이미 등록된 친구입니다.");
		location.href="../search_user.php"
	</script>
	<?
	}
}

if($_POST['me']==NULL){
	?>
	<script>
		alert("로그인이 필요합니다.");
		location.href="./login.php";
	</script>
	<?
}


if($_POST['me']==$_POST['you']){
	?>
	<script>
		alert("본인을 추가할 수 없습니다..");
		location.href="../search_user.php";
	</script>
	<?
}else{
	//friendsDB
	$sql="insert into friends values ('', '".$_POST['me']."', '".$_POST['you']."', '".$_POST['youNickname']."', now());";
	$q=mysql_query($sql);

	//whoAddMeDB
	$sql="insert into whoAddMe values ('', '".$_POST['you']."', '".$_POST['me']."', '".$_POST['myNickname']."', now());";
	$q=mysql_query($sql);
	?>
	<script>
		alert("친구등록이 완료되었습니다.")
		location.href="../index.php"
	</script>
<?
}
?>