<?
session_start();
?>
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
<?
if(!$_SESSION['admin']){
	?>
	<button onclick="login()">로그인</button>
	<script>
	function login(){
		var id=prompt("아이디를 입력해보시오");
		var pw=prompt("비밀번호는 뭐게?");

		location.href="./admin_login.php?id="+id+"&pw="+pw+"";
	}
	</script>
<?
}else{
	?>
<style>
body{
	margin:0px;
	padding:0px;
}


	#Main_Backup{ /*Structure_Module_Owner.php내에 #Main으로 선언*/
		/*Tab 크기 뺴줌*/
		width : -webkit-calc(100%-220px); /* for Chrome, Safari */
		width :    -moz-calc(100%-220px); /* for Firefox */
		width :         calc(100%-220px); /* for IE */
		height:90%; /*Main의 높이를 90%로 조절합니다.*/
		overflow:hidden;
	}

#Head{
	width:100%;
	height:68px;
	background-color:#56dcfc;
	overflow:auto;
	display:table;
}

#Head .logo_box{
	display:table-cell;
	vertical-align:bottom;
	padding-left:20px;
	padding-right:0px;
	width:240px;
}

#Head .logo_box img{
	height:50px;
	width:200px;
}

#Head .category{
	display:table-cell;
	vertical-align:middle;
	color:#000000;
	position:relative;
	padding:0 5px;
	float:left;
	top:25px;
}

#Head .category img{
	float:left;
	position:absolute;
}

#Head .categort_name{
	float:left;
	font-size:15px;
	padding-left:10px;
	font-weight:middle;
	position:absolute;
}


/*=====================================================================================*/

#Tab{
	overflow:auto;
	width:220px;
	height:90%; /*Main을 따라 Tab의 높이도 90%로 조절합니다.*/
	background:none;
	padding:30 0 0 20;
	float:left;
}

#Tab .box_module{
	padding:10 0 30 20;
	overflow:auto;
}

#Tab .title_box{
	font-size:18px;
	font-weight:bold;
	border-left:5px solid #56dcfc;
	margin-bottom:15px;
	padding-left:10px;
}

#Tab .categories{
	font-size:14px;
	font-weight:bold;
	padding:6 0 6 15;
}

#Tab .categories a{
	text-decoration:none;
	color:#686868;
	font-weight:middle;
}

#Tab .category_sub{
	font-size:12px;
	font-weight:lighter;
	padding:7 0 0 10;
}
</style>
</head>
<body>
	<div id="Head">
		<div class="logo_box">
			<img src="./images/common/bg_gnbtop.png" />
		</div>
		<div class="category" style=''>
			<img src="images\icon\icon_facebook.png" style='width:30px; top:-5px;'/>
			<div class="category_name" style='margin-left:40px;'>ESC홍대지점</div>
		</div>
		<div class="category">
			<img src="images\icon\icon_facebook.png" style='width:20px; top:2px; '/>
			<div class="category_name" style='margin-left:30px;'>2017.02.02(월) 22:25</div>
		</div>
		<div class="category">
			<img src="images\icon\icon_facebook.png" style='width:20px; top:2px; '/>
			<div class="category_name" style='margin-left:30px; font-size:12px; padding-top:3px;'>4/11후기관리 업데이트 안내</div>
		</div>
		<div class="category">
			<button style="cursor:pointer;" onclick="location.href='./admin_logout.php'">로그아웃</button>
		</div>
	</div>
		

	<div id="Tab">
		<div class="box_module">
			<div class="title_box">플레이어</div>
			<div class="categories">
				<a href="./findUser.php">회원관리</a>
			</div>
			<div class="categories">
				<a href=" ">1:1 문의</a>
			</div>
		</div>
		<div class="box_module">
			<div class="title_box">업&nbsp&nbsp&nbsp&nbsp소</a></div>
			<div class="categories">
				<a href="./findPartner.php">회원관리</a>
			</div>
			<div class="categories">
				<a href=" ">1:1 문의</a>
			</div>
			<div class="categories">
				<a href="./cafeinfo.php">카페기본정보승인</a>
			</div>
			<div class="categories">
				<a href="./album.php">앨범정보승인</a>
			</div>
			<div class="categories">
				<a href="cafeinfo.php">게임정보승인</a>
			</div>
		</div>
	</div>
	<!--Content가 들어갈 중간 영역입니다-->
<?
}
?>