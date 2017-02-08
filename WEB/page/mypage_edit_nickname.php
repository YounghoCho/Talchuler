<?
@session_start();
include("./include.php");
include ("./password_hide.php");

$sql="select nickname from user where nickname='".$_POST['nickname']."';";
$query=mysql_query($sql);
if(mysql_fetch_array($query)>0){
	?>
	<script>
	alert("이미 등록된 닉네임 입니다.");
	history.back();
	</script>	
	<?
}else{
	//닉네임 변경
	$sql="update user set nickname='".$_POST['nickname']."' where email='".$_SESSION['user_email']."'";
	mysql_query($sql);
	?>
	
	<script>
	alert("닉네임이 변경되었습니다.");
	history.back();
	</script>
	<?
}
?>
