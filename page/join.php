<?
include("./include.php");

$password=$_POST["userpassword"];
include ("./password_hide.php");
$hash= password_hash($password, PASSWORD_DEFAULT);

$sql="insert into user values ('', '".$_POST['useremail']."', '".$hash."', '".$_POST['nickname']."','','','','','','','');";

mysql_query($sql);

?>

<script>
alert("회원가입이 완료 되었습니다.");
location.replace("./login.php");
</script>