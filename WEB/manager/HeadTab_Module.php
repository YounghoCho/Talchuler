﻿<?
session_start();
include('./include.php');
//로그인 유지로 쿠키값을 설정해놨다면 그값을 세션에 넣어주자
if($_COOKIE['id'])
	$_SESSION['id']=$_COOKIE['id'];
?>
<html>
<head>
<title>탈출러 매니저</title>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<meta name="naver-site-verification" content="6b21cafa992f802dd95e784ac4accb85395c0980"/>
<meta name="title" content="탈출러">
<meta name="description" content="오프라인 방탈출, 방탈출게임 맞춤검색, 방탈출카페 예약, 방탈출 추천, 방탈출 후기, 커플 방탈출,  ">

<meta property="og:type" content="website">
 <meta property="og:title" content="탈출러">
 <meta property="og:description" content="오프라인 방탈출, 방탈출게임 맞춤검색, 방탈출카페 예약, 방탈출 추천, 방탈출 후기, 커플 방탈출 ">
 <meta property="og:image" content="-"> 
 <meta property="og:url" content="http://www.talchuler.com">
<!--Intenet Explorer에서 Javascript, JQuery가 동작안하는 것을 막는다-->
<!--호환문제 때문이며, 해결하는 코드는 바로 아래의 한줄 코드이다-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="./css/style.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	
<script>
	$(function(){
		$('#Tab').css({'min-height':($(window).height() - 123 )+'px'});
		$(window).resize(function(){
			$('#Tab').css({'min-height':($(window).height() - 123 )+'px'});
		});
	});
</script>


<style>
body{
	margin:0px;
	padding:0px;
	font-family:'NotoSansCJKkr-Regular.eot';
}
.Main{
	width:100%;
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
}
#Head{
	width:100%;
	height:68px;
	background-color: #56dcfc;
}
#Head .hdmenu{
	width:100%;
}

.logo_box{
	width:220px;
	height:68px;
	float:left;
}

.main_logo{
	float:left;
	height:50px;
	width:200px;
	height:60px;
	margin:8 0 0 8;
	
}

.head_content{
	width : -webkit-calc(100% - 220px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 220px); /* for Firefox */
    width :         calc(100% - 220px); /* for IE */
	height:68px;
	float:left;
	display:table;
	font-weight:bold;
}

.cell_store{
	float:left;
	margin-left:30px;
	height:100%;
	padding:23px 0;
	display:table-cell;
	vertical-align:middle;
	text-align:center;
}

.cell_time{
	float:left;
	margin-left:60px;
	height:100%;
	padding:23px 0;
	display:table-cell;
	vertical-align:middle;
	text-align:center;
}

.cell_logout{
	float:right;
	margin-right:45px;
	height:100%;
	padding:23px 0;
	display:table-cell;
	vertical-align:middle;
	text-align:center;
	font-weight:lighter;
}

#Tab .tbmenu > li{
	float: center;
	font-size:15pt;
	padding:20 10 10 20;
}
ul{
	font-size:11pt;
}
.tbmenu li{cursor:pointer;}
.tab_li{padding: 10px 0px 10px 50px; background-color:white;}
#back{
	background-color:white;
	border-bottom:solid 1px #cccccc;
	padding:20 0 10 20;
}
#back1{
	background-color:white;
	border-bottom:solid 1px #cccccc;
	padding:20 0 10 20;
}
#Tab{
	float:left;
	width:220px;
	height:90%; /*Main을 따라 Tab의 높이도 90%로 조절합니다.*/
	background-color:#cccccc;
	font-family:'NotoSansCJKkr-Regular.eot';
	}
#back img{margin-right:4px;}
#back1 img{margin-right:4px;}
.im{
	padding:5 0;
	margin-right:3;
}
</style>
</head>
<!--메인에서 사용될 팝업입니다-->
<div id="popup" style="background-color:RGBA(1,1,1,0.7);width:100%;display:none;">
	<div style="width:100%;" onclick="popup()">
			<img src="./images/banner/nothing.png" style="width:66%;margin-left:17%;margin-top:2%;margin-bottom:2%;padding-bottom:1%;"/>		
	</div>
</div>

<!--tab과 main부분의 높이 다름 문제를 해결하기 위한 코드-->

<script type="text/javascript">
<!--
/*------------------------------------------------------------------------------------------
// 화면 로드 후 처리
------------------------------------------------------------------------------------------*/
window.onload = function()
{
 // div height 설정
 setDivHeight('Tab','Main');
}


/*------------------------------------------------------------------------------------------
// div height 설정
// objSet : 변경할 div id
// objTar : height값을 구할 대상 div id
------------------------------------------------------------------------------------------*/
function setDivHeight(objSet, objTarHeight)
{ 
  var objSet = document.getElementById('Tab'); 
  var objTarHeight= document.getElementById('Main').offsetHeight;
  objSet.style.height  = objTarHeight + "px";

} 
//-->
</script>

<!--tab과 main부분의 높이 다름 문제를 해결하기 위한 코드-->


<body>
	<div id="Head">
		<div class="hdmenu">
			<div class="logo_box">
				<a href="./index.php">
					<img class='main_logo' src="./images/logo/partner_logo.png">
				</a>
			</div>
			<div class="head_content">
			
<?
$id=$_SESSION['id'];
$sql="select p_localName, p_shopName from partner where p_id='".$id."' ";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>
		<div class="cell_store"><?echo($data['p_shopName'])?>&nbsp;<?echo($data[0])?></div>
		<div class="cell_time" id="server_time"><?echo date('Y.m.d h:i:s');?></div>
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
<!--index에서 사용될 팝업-->

	<!--	<li>4/11후기관리 업데이트 안내</li>-->
		<?
		if($_SESSION['id']){
		?>
			
			<div class="cell_logout" onclick="location.href='./logout.php'" style="cursor:pointer;">로그아웃</div>
			<div class="cell_logout" onclick="location.href='./mypage_edit.php'" style="cursor:pointer; margin-right:30px;">계정 정보 수정</div>
		<?
		}	
		?>
			</div>
		</div>
	</div>
	
	<div id="Tab">
		<ul id="back"><img src="../images/icon/a.png" width="20px" height="20px"> 내 카페관리</ul>
			<!-- 여기 바꿀때, register4.php의 수동으로 만든 탭도 바꿔야합니다.

				<a href=""><li class="tab_li">오늘의 게임</li></a>
				<a href=""><li class="tab_li">예약 관리</li></a>
				<a href=""><li class="tab_li">후기 관리</li></a>
			-->
				<a href="./cafeinfo.php?index1=1"><li class="tab_li" id="button_content1"><img src="./images/icon/select1.png" id="im1" class="im">카페정보관리</li></a>
				<a href="./album.php?index1=2"><li class="tab_li" id="button_content2"><img src="./images/icon/select1.png" id="im2" class="im">앨범</li></a>
				<a href="./gameInfo.php?index1=3"><li class="tab_li" id="button_content3"><img src="./images/icon/select1.png" id="im3" class="im">게임정보관리</li></a>
				<a href="./order.php?index1=4"><li class="tab_li" id="button_content4"><img src="./images/icon/select1.png" id="im4" class="im">예약관리</li></a>

		<!--
		<ul id="back1"><img src="../images/icon/b.png" width="20px" height="20px"> 고객센터</ul>
				<a href="../page/notice.php?index1=5"><li class="tab_li" id="button_content5"><img src="./images/icon/select1.png" id="im5" class="im">공지사항</li></a>
				<a href="../page/faq.php?index1=6"><li class="tab_li" id="button_content6"><img src="./images/icon/select1.png" id="im6" class="im">1:1문의</li></a>
				<a href="../page/inquiry.php?index1=7"><li class="tab_li" id="button_content7"><img src="./images/icon/select1.png" id="im7" class="im">FAQ</li></a>
				<a href=""><li class="tab_li" id="button_content8"><img src="./images/icon/select1.png" id="im8" class="im">약관 및 정책</li></a>
		</ul>
		-->
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
	</div>

<!--
<?
if($_SESSION['id']){
	?>
	<script type="text/javascript">
		var a = 0;
      $('#back').click(function() {
        ++a;
		var asd = document.getElementById("back");
		if(a%2==1){
			asd.style.backgroundColor="#ffffff"
			asd.style.borderBottom = "1px solid #cccccc"	
		}else{
			asd.style.backgroundColor="#cccccc"
		}
		$('#button_content1').slideToggle('fast', function() {
        });
		$('#button_content2').slideToggle('fast', function() {
        });
		$('#button_content3').slideToggle('fast', function() {
        });
		$('#button_content4').slideToggle('fast', function() {
        });
      });
    </script>
	<?
}
?>

<?
if($_SESSION['id']){
	?>
	<script type="text/javascript">
		var b = 0;
      $('#back1').click(function() {
        ++b;
		var asd = document.getElementById("back1");
		if(b%2==1){
			asd.style.backgroundColor="#ffffff"
			asd.style.borderBottom = "1px solid #cccccc"
		}else{
			asd.style.backgroundColor="#cccccc"
		}
		$('#button_content5').slideToggle('fast', function() {
        });
      });
    </script>
	<?
}
?>
-->
	<!--Content가 들어갈 중간 영역입니다-->
<?
	if($_GET['index1']==1){
		?>
		<script>
			var c1=document.getElementById('button_content1');
			var i1=document.getElementById('im1');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}else if($_GET['index1']==2){
		?>
		<script>
			var c1=document.getElementById('button_content2');
			var i1=document.getElementById('im2');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}else if($_GET['index1']==3){
		?>
		<script>
			var c1=document.getElementById('button_content3');
			var i1=document.getElementById('im3');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}else if($_GET['index1']==4){
		?>
		<script>
			var c1=document.getElementById('button_content4');
			var i1=document.getElementById('im4');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}else if($_GET['index1']==5){
		?>
		<script>
			var c1=document.getElementById('button_content5');
			var i1=document.getElementById('im5');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}else if($_GET['index1']==6){
		?>
		<script>
			var c1=document.getElementById('button_content6');
			var i1=document.getElementById('im6');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}else if($_GET['index1']==7){
		?>
		<script>
			var c1=document.getElementById('button_content7');
			var i1=document.getElementById('im7');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}else if($_GET['index1']==8){
		?>
		<script>
			var c1=document.getElementById('button_content8');
			var i1=document.getElementById('im8');
			c1.style.fontWeight="bold";
			i1.src="./images/icon/select.png";
		</script>
		<?
	}
?>