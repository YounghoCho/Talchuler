<?
include('./include.php');
print_r($_GET);

//�Ѿ�°ɷ� partnerAsk�� ��ȸ�ϰ�
$sql="select * from partnerAsk where p_id='".$_GET['p_id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//��ȸ����� partner�� ������Ų��
$sql="update partner set 
p_shopName='".$data['p_shopName']."',
p_localName='".$data['p_localName']."',
p_tele='".$data['p_tele']."',
p_location1='".$data['p_location1']."', p_location2='".$data['p_location2']."',
benefit1='".$data['benefit1']."', benefit2='".$data['benefit2']."', benefit3='".$data['benefit3']."', benefit4='".$data['benefit4']."',
rule='".$data['rule']."' 
where p_id='".$data['p_id']."'";
mysql_query($sql);

//partnerAsk�� �����
$sql="delete from partnerAsk where p_id='".$_GET['p_id']."'";
mysql_query($sql);

//������ ���丮�� �ű��.
rename("../partner/partnerAsk/".$_GET['p_id'].".jpg", "../partner/partnerpic/".$_GET['p_id'].".jpg");

?>
<script>
location.href='./cafeinfo.php?refresh=1';
</script>