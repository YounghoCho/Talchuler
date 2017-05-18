<?
include("./include.php");

$sql="select p_id from partner where p_id='".$_GET['p_id']."';";
$query=mysql_query($sql);
if(mysql_fetch_array($query)>0){
	?>
	<script>
	alert("이미 등록된 매니저입니다.");
	location.href='./register2.php?agreement1="on"';
	</script>	
	<?
}else{
	?>
	<script>
	alert("사용 가능합니다.");
	history.back();
	</script>
	<?
}
?>
<meta charset="utf-8"/>