<?
session_start();
include('./include.php');

$sql="select p_id from partner_price where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//기본정보가 입력된적이 없으면
if(!$data[0]){
	$sql="insert into partner_price (
	p_id,
	g_p1, g_p2, g_p3, g_p4, g_p5, g_p6, g_p7, g_p8, 
	g_weekprice, g_holyprice, 
	g_disname1, g_disname2, g_disname3, g_disname4, g_disname5,
	g_disprice1, g_disprice2, g_disprice3, g_disprice4, g_disprice5, time) values ('".$_SESSION['id']."','".$_POST['g_p1']."','".$_POST['g_p2']."','".$_POST['g_p3']."','".$_POST['g_p4']."','".$_POST['g_p5']."','".$_POST['g_p6']."','".$_POST['g_p7']."','".$_POST['g_p8']."',
	'".$_POST['week']."','".$_POST['holy']."',
	'".$_POST['value1']."','".$_POST['value2']."','".$_POST['value3']."','".$_POST['value4']."','".$_POST['value5']."',
	'".$_POST['dis1']."','".$_POST['dis2']."','".$_POST['dis3']."','".$_POST['dis4']."','".$_POST['dis5']."',
	now())";
	mysql_query($sql);
}
//입력된 적이 있고 수정하려는 경우면
else{
	$sql="update partner_price set 
	p_id='".$_SESSION['id']."',
	g_p1='".$_POST['g_p1']."', g_p2='".$_POST['g_p2']."', g_p3='".$_POST['g_p3']."', g_p4='".$_POST['g_p4']."', g_p5='".$_POST['g_p5']."', g_p6='".$_POST['g_p6']."', g_p7='".$_POST['g_p7']."', g_p8='".$_POST['g_p8']."', 
	g_weekprice='".$_POST['week']."', g_holyprice='".$_POST['holy']."', 
	g_disname1='".$_POST['value1']."', g_disname2='".$_POST['value2']."', g_disname3='".$_POST['value3']."', g_disname4='".$_POST['value4']."', g_disname5='".$_POST['value5']."',
	g_disprice1='".$_POST['dis1']."', g_disprice2='".$_POST['dis2']."', g_disprice3='".$_POST['dis3']."', g_disprice4='".$_POST['dis4']."', g_disprice5='".$_POST['dis5']."', time=now() 
	where p_id='".$_SESSION['id']."'";
	echo(mysql_query($sql));
}
?>
<meta charset="utf-8"/>
<script>
alert('기본가격정보가 수정되었습니다.');
history.back();
</script>
