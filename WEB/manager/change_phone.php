<?
session_start();
include('./include.php');
$sql="select p_phone from partner where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$now=mysql_fetch_array($q);

//�����й�ȣ�� �´��� Ȯ���ϱ�
if($now['p_phone']==''){
	?>
	<script>
		alert('�޴��� ��ȣ�� �Է����ּ���.');
		history.back();
	</script>
	<?
//������Ǹ�, ��й�ȣ�� ������Ʈ�ϱ�
}else{
	$sql="update partner set p_phone='".$_POST['phone']."' where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	?>
	<script>
		alert('�޴��� ��ȣ�� ����Ǿ����ϴ�.');
		history.back();
	</script>
	<?
}
?>