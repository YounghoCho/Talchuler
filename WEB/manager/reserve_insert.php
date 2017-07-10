<?
include('./include.php');
//print_r($_GET);

//먼저 reserve데이터가 있는지 보고
$sql="select gr_idx from game_reserve where g_idx='".$_GET['g_idx']."' and gr_date='".$_GET['date']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);	
if($_GET['what']=='add'){	
	//reserve가 있으면 업데이트
	//echo("추가작업시작\n ");
	if($data[0]){
		//echo("업데이트시작\n ");
		$sql="update game_reserve set ".$_GET['index']."='1', gr_date='".$_GET['date']."' where gr_idx='".$data['gr_idx']."'";
		mysql_query($sql);
	}
	//없으면 삽입
	else{
		//echo("삽입작업시작\n ");
	
		$sql="insert into game_reserve (gr_idx, gr_date, g_idx, ".$_GET['index'].") values('', '".$_GET['date']."', '".$_GET['g_idx']."', '1');";
		mysql_query($sql);
	}
}
//삭제팝업에서 온거면
if($_GET['what']=='delete'){
	$sql="update game_reserve set ".$_GET['index']."='0' where gr_idx='".$data['gr_idx']."'";
	mysql_query($sql);
}
?>
<script>
history.back();
</script>