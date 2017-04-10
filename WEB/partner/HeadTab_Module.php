<html>
<head>
<!--Intenet Explorer에서 Javascript, JQuery가 동작안하는 것을 막는다-->
<!--호환문제 때문이며, 해결하는 코드는 바로 아래의 한줄 코드이다-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="./css/style.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function(){
        $(".tbmenu>li").click(function(){
			$(this).next("ul").toggleClass("hide");
		});
    });
</script>
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
	width:20%;
    margin-left:20%;
	display:table-cell;
}
.main_logo{
	position:absolute;
	height:50px;
	width:200px;
	
	left:-30px;
	top:-10px;
}
#Tab{
	float:left;
	width:220px;
	height:90%; /*Main을 따라 Tab의 높이도 90%로 조절합니다.*/
	background-color:#cccccc;
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
			<img class='main_logo' src="./images/common/bg_gnbtop.png" style="margin-top:18px;">
			</a>
			</h1>
		</li>
		<li>ESC홍대지점</li>
		<li>2017.02.02(월) 22:25</li>
		<li>4/11후기관리 업데이트 안내</li>
		</ul>
	</div>
	
	<div id="Tab">
	<ul class='tbmenu'>
	<li>내 카페관리</li>
		<ul class="hide">
			<a href=""><li class="tab_li">오늘의 게임</li></a>
			<a href=""><li class="tab_li">예약 관리</li></a>
			<a href=""><li class="tab_li">후기 관리</li></a>
			<a href=""><li class="tab_li">카페정보관리/앨범</li></a>
			<a href=""><li class="tab_li">게임정보관리</li></a>
		</ul>
	<li>서비스이용</li>
		<ul class="hide">
			<a href=""><li class="tab_li">타임핫딜</li></a>
			<a href=""><li class="tab_li">인사이트</li></a>
			<a href=""><li class="tab_li">예약 통계</li></a>
			<a href=""><li class="tab_li">후기 통계</li></a>
		</ul>
	<li>서비스소개</li>
		<ul class="hide">
			<a href=""><li class="tab_li">타임커머스</li></a>
			<a href=""><li class="tab_li">메인추천광고</li></a>
			<a href=""><li class="tab_li">상위노출광고</li></a>
			<a href=""><li class="tab_li">패키지광고</li></a>
		</ul>
	<li>고객센터</li>
		<ul class="hide">
			<a href=""><li class="tab_li">알림/실행</li></a>
			<a href=""><li class="tab_li">공지사항</li></a>
			<a href=""><li class="tab_li">1:1문의</li></a>
			<a href=""><li class="tab_li">FAQ</li></a>
			<a href=""><li class="tab_li">약관 및 정책</li></a>
		</ul>
	</div>
	<!--Content가 들어갈 중간 영역입니다-->