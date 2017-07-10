<?
session_start();
include('./include.php');
//회원정보가없으면
$sql="select idx from user where email ='".$_GET['id']."'";
$q=mysql_query($sql);
$data=mysql_num_rows($q);
if($data==0){
	//회원가입시킨다
	$sql="insert into user (email, password, nickname) values ('".$_GET['id']."','talchulertoken','".$_GET['name']."')";
	echo(mysql_query($sql));
}
//회원정보가있으면
else{
	//세션을생성한다
	$_SESSION['user_email']=$_GET['id'];
	$_SESSION['user_nickname']=$_GET['name'];
}
?>
<script>
location.href='../index.php';
</script>