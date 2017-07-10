<?
session_start();
include('./include.php');

//일반 앨범 삭제인 경우
if($_GET['main']==2){
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
	rename("./album/".$_GET['filename'].".jpg", "./albumTrash/".$_GET['filename'].".jpg");

	//만약 남은 앨범수가 1이고, 이걸 지우려 한다면 메인사진도 지운다
	$album_count=mysql_num_rows($q);
	if($album_count==1){
		$sql="delete from album_main where p_id='".$_SESSION['id']."'";
		mysql_query($sql);
	}
}else{
//메인 앨범 삭제인 경우
	//디비에서 지우고
	$sql="delete from album_main where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	//서버디렉토리에 파일은 안지움, 왜냐면 등록된 사진이 사라져버리기 때문임.
}
	?>
<script>
location.href="./album.php?refresh=1";
</script>