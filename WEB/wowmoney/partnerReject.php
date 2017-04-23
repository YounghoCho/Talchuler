<?
include('./include.php');
//partnerAsk의 절대 인덱스 p_idx를 받아와 지운다.
$sql="delete from partnerAsk where p_idx='".$_GET['p_idx']."'";
mysql_query($sql);

//서버디렉토리에 파일도 지워야함	
echo(rename("../partner/partnerAsk/".$_GET['p_id'].".jpg", "../partner/albumTrash/".$_GET['p_id'].".jpg"));

?>

<script>
location.href="./cafeinfo.php";
</script>
