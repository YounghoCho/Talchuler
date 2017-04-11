<?
session_start();
include('./include.php');

$sql = "select p_id, p_pw from partner where p_id='".$_POST['id']."';";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

if($_POST['cookie']=='on'){
	ini_set("session.cookie_lifetime", "259200");//3days 
	ini_set("session.cache_expire", "259200"); 
	ini_set("session.gc_maxlifetime", "259200");
}

if($data['p_id']==""){
	?>
		<script>
			alert("아이디가 존재하지 않습니다.");
			history.back();
		</script>
	<?
}

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
			history.back();
		</script>
	<?
}
?>