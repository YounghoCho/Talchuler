<?
session_start();
include('./include.php');

$sql="select a_id, a_pw from admin";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

if($_GET['id']==$data['a_id'] && $_GET['pw']=$data['a_pw']){
	$_SESSION['admin']=$data['a_id'];
}
?>
<script>
location.href="./index.php";
</script>