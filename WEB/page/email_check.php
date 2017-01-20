<?
include("./include.php");

$sql="select email from user where email='".$_GET['email']."';";
$query=mysql_query($sql);
if(mysql_fetch_array($query)>0){
	?>
	<script>
	alert("이미 등록된 이메일 입니다.");
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