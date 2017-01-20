<?
include("./include.php");

$sql="select nickname from user where nickname='".$_GET['nick']."';";
$query=mysql_query($sql);
if(mysql_fetch_array($query)>0){
	?>
	<script>
	alert("이미 등록된 닉네임 입니다.");
	history.back();
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