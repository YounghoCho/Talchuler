<?
session_start();
include('./include.php');

//album_main에 등록한다.
	//이미 있나 확인
	$sql="select ap_idx from album_main where p_id='".$_SESSION['id']."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);

	if($data[0]){
	//있으면 update
	$sql="update album_main set path='".$_GET['filename']."' where p_id='".$_SESSION['id']."'";
	mysql_query($sql);
	}else{
	//없으면 insert
	$sql="insert into album_main (ap_idx, p_id, path) values ('', '".$_SESSION['id']."', '".$_GET['filename']."')";
	mysql_query($sql);
	}
?>
<script>
location.href="./album.php?refresh=1";
</script>