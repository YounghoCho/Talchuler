<?
session_start();
include('./include.php');
//로그인 유지로 쿠키값을 설정해놨다면 그값을 세션에 넣어주자
if($_COOKIE['id'])
	$_SESSION['id']=$_COOKIE['id'];
?>
<html>
<head>
<!--Intenet Explorer에서 Javascript, JQuery가 동작안하는 것을 막는다-->
<!--호환문제 때문이며, 해결하는 코드는 바로 아래의 한줄 코드이다-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="./css/style.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<?
if($_SESSION['id']){
	?>
	<script>
		$(document).ready(function(){
			$(".tbmenu>li").click(function(){
				$(this).next("ul").toggleClass("hide");
			});
		});
	</script>
	<?
}
?>
<style>
body{
	margin:0px;
	padding:0px;
}
.Main{
	width:100%;
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
}
#Head{
	top:1%;
	width:100%;
	height:68px;
	background-color: #56dcfc
}
#Head .hdmenu{
    position: absolute;
    top: 1%;
	margin-left: 40px;
	display:table;
}
#Head .hdmenu > li {
	width:250px;
    margin-left:50px;
	display:table-cell;
	text-align:center;

}
.main_logo{
	position:absolute;
	height:50px;
	width:200px;
	
	left:-30px;
	top:-10px;
}

#Tab .tbmenu > li{
	float: center;
	font-size:17px;
	margin-left:15px;
	margin-top:15px;
}
ul{
    list-style:none;
}
.tbmenu li{cursor:pointer;}
.tbmenu .hide{display:none;}
.tab_li{margin: 10px 0px 0px 25px;}
</style>
</head>
<body>
	<div id="Head">
		<ul class='hdmenu' style="line-height:45px;">
		<li>
			<h1>
			<a href="./index.php">
			<img class='main_logo' src="./images/logo/partner_logo.png" style="margin-top:13px;height:60px;">
			</a>
			</h1>
		</li>
<?
$id=$_SESSION['id'];
$sql="select p_localName from partner where p_id='".$id."' ";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>
		<li><?echo($data[0])?></li>
		<li id="server_time"><?echo date('Y.m.d h:i:s');?></li>
<!--서버시간-->
	<script>
var srv_time = "<?php print date("F d, Y H:i:s", time()); ?>";
var now = new Date(srv_time);
 
setInterval("server_time()", 1000);
 
function server_time()
{
    now.setSeconds(now.getSeconds()+1);
 
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
 
    if (month < 10){
        month = "0" + month;
    }
 
    if (date < 10){
        date = "0" + date;
    }
 
    if (hours < 10){
        hours = "0" + hours;
    }
 
    if (minutes < 10){
        minutes = "0" + minutes;
    }
 
    if (seconds < 10){
        seconds = "0" + seconds;
    }
 
    document.getElementById("server_time").innerHTML = year + "." + month + "." + date + " " + hours + ":" + minutes + ":" + seconds;
}
</script>

	<!--	<li>4/11후기관리 업데이트 안내</li>-->
		<?
		if($_SESSION['id']){
		?>
			<li onclick="location.href='./logout.php'" style="cursor:pointer;">로그아웃</li>
		<?
		}	
		?>
		</ul>
	</div>
	
	<div id="Tab">
	<?
	if($_SESSION['id']){
	?>
	<style>
	#Tab{
	float:left;
	width:220px;
	height:90%; /*Main을 따라 Tab의 높이도 90%로 조절합니다.*/
	background-color:#cccccc;
	}
	</style>
	<ul class='tbmenu'>
	
		<li>내 카페관리</li>
			<ul class="hide">
			<!-- 여기 바꿀때, register4.php의 수동으로 만든 탭도 바꿔야합니다.

				<a href=""><li class="tab_li">오늘의 게임</li></a>
				<a href=""><li class="tab_li">예약 관리</li></a>
				<a href=""><li class="tab_li">후기 관리</li></a>
			-->
				<a href="./cafeinfo.php"><li class="tab_li">카페정보관리</li></a>
				<a href="./album.php"><li class="tab_li">앨범</li></a>
				<a href="./gameinfo.php"><li class="tab_li">게임정보관리</li></a>
			</ul>
		<!--
		<li>서비스이용</li>
			<ul class="hide">
				<a href=""><li class="tab_li">타임핫딜</li></a>
				<a href=""><li class="tab_li">인사이트</li></a>
				<a href=""><li class="tab_li">예약 통계</li></a>
				<a href=""><li class="tab_li">후기 통계</li></a>
			</ul>
		-->
		<!--
		<li>서비스소개</li>
			<ul class="hide">
				<a href=""><li class="tab_li">타임커머스</li></a>
				<a href=""><li class="tab_li">메인추천광고</li></a>
				<a href=""><li class="tab_li">상위노출광고</li></a>
				<a href=""><li class="tab_li">패키지광고</li></a>
			</ul>
			-->
		<li>고객센터</li>
			<ul class="hide">
		<!--
				<a href=""><li class="tab_li">알림/실행</li></a>
				<a href=""><li class="tab_li">공지사항</li></a>
				<a href=""><li class="tab_li">1:1문의</li></a>
				<a href=""><li class="tab_li">FAQ</li></a>
		-->
				<a href=""><li class="tab_li">약관 및 정책</li></a>
			</ul>
		<?
		}else{
		?>
		<style>
		#Tab{
			float:left;
			width:220px;
			height:90%; /*Main을 따라 Tab의 높이도 90%로 조절합니다.*/
			
		}
		</style>
		<?
		}
		?>
	</ul>
	</div>
	<!--Content가 들어갈 중간 영역입니다-->