<?
$db_host = "localhost";
$db_user = "talchuler6";
$db_pass = "xkfcnf11091";

$result = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
mysql_select_db("talchuler6") or die(mysql_error());
mysql_query("SET CHARACTER SET utf8");
?>