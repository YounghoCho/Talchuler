<?
session_start();
include('./include.php');
//ȸ��������������
$sql="select idx from user where email ='".$_GET['id']."'";
$q=mysql_query($sql);
$data=mysql_num_rows($q);
if($data==0){
	//ȸ�����Խ�Ų��
	$sql="insert into user (email, password, nickname) values ('".$_GET['id']."','talchulertoken','".$_GET['name']."')";
	echo(mysql_query($sql));
}
//ȸ��������������
else{
	//�����������Ѵ�
	$_SESSION['user_email']=$_GET['id'];
	$_SESSION['user_nickname']=$_GET['name'];
}
?>
<script>
location.href='../index.php';
</script>