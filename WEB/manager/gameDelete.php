<?
include('./include.php');

$sql="delete from game where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//�̹��� ��������� filename�ҷ�����
$sql="select filename from gameImage where g_idx='".$_GET['g_idx']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//�̹��������
$sql="delete from gameImage where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//���丮�����
rename("../partner/gameImage/".$data[0].".jpg", "../partner/albumTrash/".$data[0].".jpg");
?>

<script>
location.href="./gameInfo.php??refresh=1";
</script>