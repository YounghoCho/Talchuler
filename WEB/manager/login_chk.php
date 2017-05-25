<?
session_start();
include('./include.php');
$sql = "select p_id, p_pw from partner where p_id='".$_POST['id']."';";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
if($data['p_id']==""){
	?>
		<script>
			alert("아이디가 존재하지 않습니다.");
			location.href='./index.php';
		</script>
	<?
}
if($_POST['cookie']=='on'){
	if($data['p_pw']==$_POST['pw']){
		$_SESSION['id']=$data['p_id'];
		//쿠키생성
		setcookie('id', $_SESSION['id'], time()+86400);
		?>
		<script>
		location.href='./index.php';
		</script>
		<?	
	}else{
		?>
			<script>
				alert("비밀번호가 일치하지 않습니다.");
				location.href='./index.php';
			</script>
		<?
	}
}else{
	if($data['p_pw']==$_POST['pw']){
		$_SESSION['id']=$data['p_id'];
		?>
		<script>
		location.href='./index.php';
		</script>
		<?	
	}else{
		?>
			<script>
				alert("비밀번호가 일치하지 않습니다.");
				location.href='./index.php';
			</script>
		<?
	}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />