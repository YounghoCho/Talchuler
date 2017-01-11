<?
$db_host = "localhost";
$db_user = "";
$db_pass = "";

$result = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
mysql_select_db("") or die(mysql_error());
mysql_query("SET CHARACTER SET utf8");
?>