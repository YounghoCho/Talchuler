<?
session_start();
?>

<?php
include ("./include.php");

$_SESSION["user_email"] = "";  
$_SESSION["user_nickname"] = ""; 
2016-08-18
?>

<script>
location.replace("./index.php");
</script>