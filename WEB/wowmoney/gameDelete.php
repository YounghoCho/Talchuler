<?
include('./include.php');

//��û��������
$sql="delete from gameAsk where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//�̹��� ��������� filename�ҷ�����
$sql="select filename from gameImageAsk where g_idx='".$_GET['g_idx']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//��û�̹�����������
$sql="delete from gameImageAsk where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//�̹��������
rename("../partner/gameImageAsk/".$data[0].".jpg", "../partner/albumTrash/".$data[0].".jpg");
?>

<script>
alert("������ �Ϸ�Ǿ����ϴ�.");
location.href="./gameinfo.php??refresh=1";
</script>