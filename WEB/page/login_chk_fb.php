<?
session_start();
header("Content-Type: text/html; charset=UTF-8");
include('./include.php');
//ȸ��������������
$sql="select idx from user where email ='".$_GET['id']."'";
$q=mysql_query($sql);
$data=mysql_num_rows($q);
if($data==0){
	//ȸ�����Խ�Ų��
	$sql="insert into user (email, password, nickname) values ('".$_GET['id']."','talchulertoken','".$_GET['name']."')";
	mysql_query($sql);
}
//ȸ��������������
else{
	//�����������Ѵ�
	$_SESSION['user_email']=$_GET['id'];
	$_SESSION['user_nickname']=$_GET['name'];
}
?>
<meta charset="UTF-8">
<script>
location.href='../index.php';
</script>