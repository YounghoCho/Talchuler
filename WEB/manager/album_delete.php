<?
session_start();
include('./include.php');

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
echo(rename("../partner/album/".$_GET['filename'].".jpg", "../partner/albumTrash/".$_GET['filename'].".jpg"));

?>
<script>
location.href="./album.php?refresh=1";
</script>