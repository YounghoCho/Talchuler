<?
session_start();
//session_start();가 없으면 로그아웃이 안됩니다.
$_SESSION['id']="";
//쿠키초기화
setcookie('id');
?>
<script>
location.href="./index.php";
</script>