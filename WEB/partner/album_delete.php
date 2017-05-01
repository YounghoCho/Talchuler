<?
session_start();
include('./include.php');

//디비에서 지우고
$sql="delete from album_path where ap_idx='".$_GET['ap_idx']."';";
mysql_query($sql);

//partner의 앨범 수를줄인다.
	//유저의 앨범 수 조회
	$sql="select album from partner where p_id='".$_SESSION['id']."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);

$sql="update partner set album='".$data[0]."'-1 where p_id='".$_SESSION['id']."'";
mysql_query($sql);

//서버디렉토리에 파일도 지워야함	
echo(rename("../partner/album/".$_GET['filename'].".jpg", "../partner/albumTrash/".$_GET['filename'].".jpg"));

?>
<script>
location.href="./album.php?refresh=1";
</script>