<?
include('./include.php');
//앨범 업로드 요청을 지우고
$sql="delete from album where al_idx='".$_GET['al_idx']."';";
mysql_query($sql);

//partner의 앨범 요청 수도 줄인다
	//유저의 앨범 요청 수 조회
	$sql="select album_count from partner where p_id='".$_GET['p_id']."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);

$sql="update partner set album_count='".$data[0]."'-1 where p_id='".$_GET['p_id']."'";
mysql_query($sql);

//서버디렉토리에 파일도 지워야함	
echo(rename("../partner/albumAsk/".$_GET['filename'].".jpg", "/home/hosting_users/talchuler6/www/partner/albumTrash/".$_GET['filename'].".jpg"));

?>
<script>
history.back();
</script>
