<?
session_start();
include('./include.php');
$sql="select p_email from partner where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$now=mysql_fetch_array($q);

//�����й�ȣ�� �´��� Ȯ���ϱ�
if($now['p_email']==''){
	?>
	<script>
		alert('�̸����� �Է����ּ���.');
		history.back();
	</script>
	<?
//������Ǹ�, ��й�ȣ�� ������Ʈ�ϱ�
}else{
	$sql="update partner set p_email='".$_POST['email']."' where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	?>
	<script>
		alert('�̸����� ����Ǿ����ϴ�.');
		history.back();
	</script>
	<?
}
?>