<?
session_start();
//session_start();가 없으면 로그아웃이 안됩니다.
$_SESSION['admin']="";

?>
<script>
location.href='./index.php';
</script>