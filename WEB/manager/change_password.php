<?
session_start();
include('./include.php');
$sql="select p_pw from partner where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$now=mysql_fetch_array($q);

//�����й�ȣ�� �´��� Ȯ���ϱ�
if($now['p_pw']!=$_POST['pass_now']){
	?>
	<script>
		alert('���� ��й�ȣ�� ��ġ���� �ʽ��ϴ�.');
		history.back();
	</script>
	<?
}elseif($now['p_pw']==''){
	?>
	<script>
		alert('��й�ȣ�� �Է����ּ���.');
		history.back();
	</script>
	<?

}elseif($_POST['pass_new']==''){
	?>
	<script>
		alert('�� ��й�ȣ�� �Է����ּ���.');
		history.back();
	</script>
	<?

//����й�ȣ�� üũ�� ��ġ�ϴ��� Ȯ���ϱ�
}elseif($_POST['pass_new']!=$_POST['pass_check']){
		?>
	<script>
		alert('�� ��й�ȣ�� �ٽ� Ȯ�����ּ���.');
		history.back();
	</script>
		<?
//������Ǹ�, ��й�ȣ�� ������Ʈ�ϱ�
}else{
	$sql="update partner set p_pw='".$_POST['pass_new']."' where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	?>
	<script>
		alert('��й�ȣ�� ����Ǿ����ϴ�.');
		history.back();
	</script>
	<?
}
?>