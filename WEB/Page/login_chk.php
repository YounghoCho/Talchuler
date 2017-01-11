<?
session_start();
include ("./include.php");
include("./password_hide.php");

//로그인시작

$password=$_POST["password"];
$chk_sql = "select * from user where email = '".trim($_POST["email"])."'";
$chk_result = mysql_query($chk_sql);
$chk_data = mysql_fetch_array($chk_result);

$hash_password=$chk_data['password'];



if($chk_data["idx"]){
	if (password_verify($password, $hash_password)) { //일치확인
		if($_POST["check"]){
			ini_set("session.cookie_lifetime", "259200");//3days 
			ini_set("session.cache_expire", "259200"); 
			ini_set("session.gc_maxlifetime", "259200");
			//세션생성
			$_SESSION["user_email"] = $chk_data["email"];
			$_SESSION["user_nickname"] = $chk_data["nickname"];
		}else{	
			$_SESSION["user_email"] = $chk_data["email"];
			$_SESSION["user_nickname"] = $chk_data["nickname"];
		}
?>
	    <script>
       location.replace("./index.php");
        </script>
<?php
        exit;
} else { 
?>
    <script>
        alert("패스워드가 일치하지 않습니다");
        history.back();
    </script>
<?php
    exit;
}
}

else
{
?>
    <script>
        alert("가입되지 않은 이메일입니다.);
        history.back();
    </script>
<?php
    exit;
}

?>
