<?
include('./include.php');
//print_r($_GET);

//���� reserve�����Ͱ� �ִ��� ����
$sql="select gr_idx from game_reserve where g_idx='".$_GET['g_idx']."' and gr_date='".$_GET['date']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);	
if($_GET['what']=='add'){	
	//reserve�� ������ ������Ʈ
	//echo("�߰��۾�����\n ");
	if($data[0]){
		//echo("������Ʈ����\n ");
		$sql="update game_reserve set ".$_GET['index']."='1', gr_date='".$_GET['date']."' where gr_idx='".$data['gr_idx']."'";
		mysql_query($sql);
	}
	//������ ����
	else{
		//echo("�����۾�����\n ");
	
		$sql="insert into game_reserve (gr_idx, gr_date, g_idx, ".$_GET['index'].") values('', '".$_GET['date']."', '".$_GET['g_idx']."', '1');";
		mysql_query($sql);
	}
}
//�����˾����� �°Ÿ�
if($_GET['what']=='delete'){
	$sql="update game_reserve set ".$_GET['index']."='0' where gr_idx='".$data['gr_idx']."'";
	mysql_query($sql);
}
?>
<script>
history.back();
</script>