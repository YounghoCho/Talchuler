<?
session_start();
include('./include.php');

//�Ϲ� �ٹ� ������ ���
if($_GET['main']==2){
	//��񿡼� �����
	$sql="delete from album_path where ap_idx='".$_GET['ap_idx']."';";
	mysql_query($sql);

	//partner�� �ٹ� �������δ�.
		//������ �ٹ� �� ��ȸ
		$sql="select album from partner where p_id='".$_SESSION['id']."'";
		$q=mysql_query($sql);
		$data=mysql_fetch_array($q);

	$sql="update partner set album='".$data[0]."'-1 where p_id='".$_SESSION['id']."'";
	mysql_query($sql);

	//�������丮�� ���ϵ� ��������	
	rename("./album/".$_GET['filename'].".jpg", "./albumTrash/".$_GET['filename'].".jpg");

	//���� ���� �ٹ����� 1�̰�, �̰� ����� �Ѵٸ� ���λ����� �����
	$album_count=mysql_num_rows($q);
	if($album_count==1){
		$sql="delete from album_main where p_id='".$_SESSION['id']."'";
		mysql_query($sql);
	}
}else{
//���� �ٹ� ������ ���
	//��񿡼� �����
	$sql="delete from album_main where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	//�������丮�� ������ ������, �ֳĸ� ��ϵ� ������ ����������� ������.
}
	?>
<script>
location.href="./album.php?refresh=1";
</script>