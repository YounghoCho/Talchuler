<?
include('./include.php');
//partnerAsk�� ���� �ε��� p_idx�� �޾ƿ� �����.
$sql="delete from partnerAsk where p_idx='".$_GET['p_idx']."'";
mysql_query($sql);

//�������丮�� ���ϵ� ��������	
echo(rename("../partner/partnerAsk/".$_GET['p_id'].".jpg", "../partner/albumTrash/".$_GET['p_id'].".jpg"));

?>

<script>
location.href="./cafeinfo.php";
</script>
