<?
include('./include.php');
print_r($_GET);

//넘어온걸로 partnerAsk를 조회하고
$sql="select * from partnerAsk where p_id='".$_GET['p_id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//조회결과를 partner에 수정시킨다
$sql="update partner set 
p_shopName='".$data['p_shopName']."',
p_localName='".$data['p_localName']."',
p_tele='".$data['p_tele']."',
p_location1='".$data['p_location1']."', p_location2='".$data['p_location2']."',
benefit1='".$data['benefit1']."', benefit2='".$data['benefit2']."', benefit3='".$data['benefit3']."', benefit4='".$data['benefit4']."',
rule='".$data['rule']."' 
where p_id='".$data['p_id']."'";
mysql_query($sql);

//partnerAsk도 지운다
$sql="delete from partnerAsk where p_id='".$_GET['p_id']."'";
mysql_query($sql);

//사진도 디렉토리를 옮긴다.
rename("../partner/partnerAsk/".$_GET['p_id'].".jpg", "../partner/partnerpic/".$_GET['p_id'].".jpg");

?>
<script>
location.href='./cafeinfo.php?refresh=1';
</script>