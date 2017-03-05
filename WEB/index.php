<?
@session_start();

include("./page/include.php");

@$sql="select * from user where email='".$_SESSION['user_email']."';";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html xml:lang="ko" lang="ko">
<head>
<title>탈출러</title>
<meta charset="utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="stylesheet" type="text/css" href="./css/style.css" />
<link rel="stylesheet" type="text/css" href="./css/jquery-ui.css" />
<script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="./js/placeholders.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.customSelect.min.js"></script>
<script type="text/javascript" src="./js/jquery.bxslider.min.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="./js/respond.min.js"></script>
	<script type="text/javascript" src="./js/html5shiv.js"></script>
<![endif]-->
<style>
#id01{
	display:none;
	position: fixed; /* Stay in place */
    z-index: 10; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
    padding-top: 60px;
	-webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
#pad{
	width:300px;
	height:404px;
	border:none;
	background-color:#EBEBEB;
	color:#595757;
	font-weight: bold;
}
.eval_chk{
	background-color:#66ccff;
	margin:5px;
	width:96%;
	color:#666;
	font-size:83%;
	padding-top:3px;
	padding-bottom:3px;
}
.eval{
	background-color:#ccc;
	margin:5px;
	width:96%;
	color:#666;
	font-size:83%;
	padding-top:3px;
	padding-bottom:3px;
}
#goeval{
	background-color:#56dcfc;
	margin:5px;
	margin-top:12px;
	margin-bottom:8px;
	width:96%;
	color:black;
	font-size:2;
	padding-top:6px;
	padding-bottom:6px;
}
.eval_img{
	display:none;
	width:14px;
	height:14px;
	margin-left:4px;
}
</style>

</head>
<body class="main">

<span id="id01">
	<center>
	<div id="pad">
		<div style="padding:8px;">
			<font color="#0066ff" size="3" style="font-weight:bold;">업소명 - '게임이름'</font><br>
			<font size="2">
			경험자의 공감을 남겨주세요!
			</font>	
			</div>
		<div style="width:100%;padding-top:3px;padding-bottom:3px;background-color:#aaa;margin-bottom:10px;">
			<font color="black" size="2">
			공감 체크
			</font>
		</div>
		<div class="eval" id="eval1" onclick="eval_change1()">
			게임스토리와 게임문제가 잘 연결되서 집중돼요<br>
			<font size="3" style="font-weight:bold;">
			몰입돼요
			<img class="eval_img" id="eval_img1" src="./images/btn/eval_check.png"/>
			</font>
		</div>
		<div class="eval" id="eval2" onclick="eval_change2()">
			첨단장치가 많거나 장비들이 신박했어요<br>
			<font size="3" style="font-weight:bold;">
			신기방기해요
			<img class="eval_img" id="eval_img2" src="./images/btn/eval_check.png"/>
			</font>
		</div>
		<div class="eval" id="eval3" onclick="eval_change3()">
			방의 인테리어나 소품들이 잘 꾸며져있어요<br>
			<font size="3" style="font-weight:bold;">
			눈이 즐거워요
			<img class="eval_img" id="eval_img3" src="./images/btn/eval_check.png"/>
			</font>
		</div>
		<div class="eval" id="eval4" onclick="eval_change4()">
			치마 입기엔 아쉬울 정도로 많이 움직일 수 있어요<br>
			<font size="3" style="font-weight:bold;">
			활동적이예요
			<img class="eval_img" id="eval_img4" src="./images/btn/eval_check.png"/>
			</font>
		</div>
		<div class="eval" id="eval5" onclick="eval_change5()">
			직원분들의 안내나 힌트주시는 모습이 보기좋아요<br>
			<font size="3" style="font-weight:bold;">
			친절해요
			<img class="eval_img" id="eval_img5" src="./images/btn/eval_check.png"/>
			</font>
		</div>
		
		<div id="goeval">
			<b>확인</b>
		</div>
	</div>
	</center>
</span>
<script>
	//게임종료 신호 받으면(if문수정)
	if(0){
		var t=document.getElementById('id01');
		t.style.display='block';
	}
</script>


<div id="wrap">
	<header id="header">
		<div class="header_inner">
			<h1><a href="./index.php"><img src="./images/common/img_logo.png" alt="logo" /></a></h1>
			<div class="h_banner">
				<div class="slidearea">
					<!-- 컨텐츠 정해지기 전까지 빼놓기로함
					<ul class="bxslider04">
						<li><a href="#"><img src="./images/common/img_h_banner.png" alt="배너이미지" /></a></li>
						<li><a href="#"><img src="./images/common/img_h_banner.png" alt="배너이미지" /></a></li>
						<li><a href="#"><img src="./images/common/img_h_banner.png" alt="배너이미지" /></a></li>
					</ul>
					-->
				</div>
			</div>
			<a href="#" class="btn_gnb" onclick="gnbView();"><img src="./images/btn/btn_gnb.png" alt="" /></a>
<?
if(@!$_SESSION['user_email']){
?>
			<!-- s : 로그인 전 pc -->
			<ul class="gnb clfix">
				<li><a href="./page/login.php">로그인</a></li>
				<li><a href="./page/join.php">회원가입</a></li>
				<li><a href="#">예약확인</a></li>
				<li><a href="#">랭킹검색</a></li>
				<li><a href="./search_user.php">탈출러검색</a></li>
				<li><a href="./page/notice.php">고객센터</a></li>
			</ul>
			<!-- e : 로그인 전 pc -->
<?
}else{
?>
			<!-- s : 로그인 후 pc -->
			<ul class="gnb clfix">
				<li><a href="./page/sch_lank.html">랭킹검색</a></li>								<li><a href="./search_user.php">탈출러검색</a></li>
				<li><a href="./page/notice.php">고객센터</a></li>
				<li class="login">
					<a href="#">
<?
$filepath = "./upload/profiles/".$_SESSION['user_email'];	

if(!file_exists($filepath)){
	?>
		<img src="./images/contents/img_login_d.png" width="50px;height:65px;"/>
		<em class="num">예약수 0</em></a>
	<?
}else{
	?>
		<img src="./upload/profiles/<?echo $_SESSION['user_email']?>" style="width:50px;height:65px;" alt="" />
		<em class="num">예약수 0</em></a>
	<?
}
?>
					
					<div class="info">
						<div class="in_1">
							<div class="imgbox">
<?
if(!file_exists($filepath)){
	?>
		<img src="./images/contents/img_login_d.png" width="80px;height:100px;"/></div>
	<?
}else{
	?>
		<img src="./upload/profiles/<?echo $_SESSION['user_email']?>" style="width:80px;height:100px;"  alt="" /></div>	
<?
}
?>



							<div class="namebox">
								<strong>
								<?
								if($data['title']=="")
									echo("타이틀 없음");
								else	
									echo $data['title']
								?></strong>
								<strong>
								<?
								echo($data['rank']." 위");
								?><em>in 대한민국</em></strong>
							
								<span><?
									echo($data['win']."탈 ");
									echo($data['lose']."패 ");
									
									if($data['win']==0 && $data['lose']==0)
										echo("0 %");
									else if($data['win']!=0 && $data['lose']==0)
										echo("100 %");
									else{
										$plus=$data['win']+$data['lose'];
										$division=$data['win']/$plus;
										$cal=$division*100;
										echo(substr($cal,0,2)." %");
									}
									?></span>
								<span>평균속도 0<?
								?></span>
							</div>
						</div>
						<div class="in_2">
							<div class="tit">예약 2건 <a href="mypage1.php" class="btn_in_more">더보기</a></div>
							<table class="reserlist">
								<colgroup>
									<col style="width:14%" />
									<col style="width:14%" />
									<col style="width:18%" />
									<col style="width:*" />
									<col style="width:*" />
								</colgroup>
								<tbody>
									<tr>
										<td>11/15</td>
										<td>14:30</td>
										<td class="gray">대학로</td>
										<td class="gray">시크릿챔버</td>
										<td>데드넘버</td>
									</tr>
									<tr>
										<td>11/15</td>
										<td>14:30</td>
										<td class="gray">홍대</td>
										<td class="gray">ESC </td>
										<td>살인자의방</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="in_3">
							<a href="./page/mypage1.php" class="btn_mypage">마이페이지로 이동</a>
							<a href="./page/logout.php" class="btn_logout">로그아웃</a>
						</div>
					</div>
				</li>
			</ul>
			<!-- e : 로그인 후 pc -->
<?
}
?>

			<div class="gnbwrap">
				<div class="gnbtop"><img src="./images/common/bg_gnbtop.png" alt="" /></div>
<?
if(@!$_SESSION['user_email']){
?>
				<!-- s : 로그인 전 mobile -->
				<div class="info">
					<div class="imgbox"><img src="./images/contents/img_login_d.png" alt="" /></div>
					<div class="namebox">로그인 후 내 게임 전적을<br />관리하세요!</div>
					<div class="loginbox">
						<a href="./page/login.php" class="btn_blue">로그인</a>
						<a href="./page/join.php" class="btn_blue">회원가입</a>
					</div>
				</div>
				<ul class="gnb_m">
					<li class="gnb1"><a href="#">예약확인</a></li>
					<li class="gnb2"><a href="#">랭킹검색</a></li>
					<li><a href="./search_user.php">탈출러검색</a></li>
					<li class="gnb3"><a href="./page/notice.php">고객센터</a></li>
				</ul>
				<!-- e : 로그인 전 mobile -->
<?
}else{
?>
				<!-- s : 로그인 후 mobile -->
				<div class="info">
					<div class="imgbox">
<?
if(!file_exists($filepath)){
	?>
		<img src="./images/contents/img_login_d.png" width="80px;height:100px;"/></div>
	<?
}else{
	?>
		<img src="./upload/profiles/<?echo $_SESSION['user_email']?>" style="width:80px;height:100px;"  alt="" /></div>	
<?
}
?>					
				
					<div class="namebox st02">
								<strong>
								<?
								if($data['title']=="")
									echo("타이틀 없음");
								else	
									echo $data['title']
								?></strong>
								<strong>
								<?
								echo($data['rank']." 위");
								?><em>in 대한민국</em></strong>
							
								<span><?
									echo($data['win']."탈 ");
									echo($data['lose']."패 ");
									
									if($data['win']==0 && $data['lose']==0)
										echo("0 %");
									else if($data['win']!=0 && $data['lose']==0)
										echo("100 %");
									else{
										$plus=$data['win']+$data['lose'];
										$division=$data['win']/$plus;
										$cal=$division*100;
										echo(substr($cal,0,2)." %");
									}
									?></span>
								<span>평균속도 0<?
								?></span>
							</div>
				</div>
				<div class="rebox">
					<a href="./page/mypage1.php"><em>예약 3건</em></a>
					<ul>
						<li>11/15  데드 넘버</li>
						<li>11/17  게이샤의 편지</li>
						<li>11/15  살인자의 방</li>
					</ul>
				</div>
				<ul class="gnb_m">
					<li class="gnb4"><a href="./page/mypage1.php">마이페이지</a></li>
					<li class="gnb2"><a href="./page/sch_lank.html">랭킹검색</a></li>
					<li class="gnb2"><a href="./search_user.php">탈출러검색</a></li>
					<li class="gnb3"><a href="#">고객센터</a></li>
				</ul>
				<div class="logoutbox"><a href="./page/logout.php" class="btn_logout">로그아웃</a></div>
				<!-- e : 로그인 후 mobile -->
<?
}
?>
			</div>
			<div class="gnbbg" onclick="gnbHide();"></div>
		</div>
	</header>
<!-- 연산 대책이 세워질때까지 보류
	<div class="rankbox">
		<div class="container_inner">
			<div class="tit">실시간 전국 순위</div>
			<div class="slidearea">
				<ul class="bxslider03">
					<li>
						<div><strong>1위</strong> INOLUYION</div>
						<div><strong>2위</strong> TALCHULER</div>
						<div><strong>3위</strong> GREENBEAN</div>
						<div><strong>4위</strong> WANOOKI</div>
						<div><strong>5위</strong> 리틀비마니</div>
						<div><strong>6위</strong> 비마니</div>
						<div><strong>7위</strong> INOLUYION</div>
						<div><strong>8위</strong> INOLUYION</div>
					</li>
					<li>
						<div><strong>9위</strong> INOLUYION</div>
						<div><strong>10위</strong> TALCHULER</div>
						<div><strong>11위</strong> GREENBEAN</div>
						<div><strong>12위</strong> WANOOKI</div>
						<div><strong>13위</strong> 리틀비마니</div>
						<div><strong>14위</strong> 비마니</div>
						<div><strong>15위</strong> INOLUYION</div>
						<div><strong>16위</strong> INOLUYION</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
-->


	<div id="main_container">
		<div class="choicearea">
		<form action='./page/search_game.php' method='get' id='search_game_form'>
			<div class="inner">
				<dl class="cho1">
					<dt><font style="font-weight:bold">언제</font></dt>
					<dd>
						<div class="datebox">
							<input name="day" type="text" id="testDatepicker" class="txt" value="<?echo date('Y-m-d')?>" />
						</div>
						<div class="selbox">
							<select name="start_time" class="select_st1 w80">
								<option selected>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
								<option>24:00</option>
							</select>
							&nbsp;~&nbsp;
							<select name="end_time" class="select_st1 w80">
								<option>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
								<option selected>24:00</option>
							</select>
						</div>
					</dd>
				</dl>
				<dl class="cho2">
					<dt><font style="font-weight:bold">난이도</font></dt>
					<dd>
						<div class="selbox">
							<select name="start_level" class="select_st1 w50">
								<option selected>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							&nbsp;~&nbsp;
							<select name="end_level" class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option selected>5</option>
							</select>
							<div class="ml20">
								<select name="horror" class="select_st1 w100">
									<option selected>공포포함</option>
									<option>공포만</option>
									<option>공포X</option>
								</select>
							</div>
							<div class="chkbox">
								<label name="except" class="ichk"><span>했던테마 제외</span><input type="checkbox"><i><em></em></i></label>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="cho3">
					<dt><font style="font-weight:bold">지역</font></dt>
					<dd>
						<ul class="loca_1dep">
							<li><a onclick="search_game('all')">전체</a></li>
							<li>
								<a href="#">서울</a>
								<ul class="loca_2dep">
									<li><a  onclick="search_game('seoul')">전체</a></li>
									<li><a  onclick="search_game('gangnam')"">강남</a></li>
									<li><a  onclick="search_game('hongdae')">홍대</a></li>
									<li><a  onclick="search_game('jonglo')">종로.대학로</a></li>
									<li class="ml0"><a  onclick="search_game('gundae')">건대.잠실</a></li>
									<li><a  onclick="search_game('youngdeungpo')">영등포.신림</a></li>
								</ul>
							</li>
							<li><a onclick="search_game('kyungki')">경기</a></li>
							<li><a onclick="search_game('incheon')">인천</a></li>
							<li><a onclick="search_game('daejeon')">대전</a></li>
							<li><a onclick="search_game('busan')">부산</a></li>
						</ul>
						<input name="rigion" type="hidden" id="rigion">
					</dd>
				</dl>
			</form>
			<form action='./page/search_word.php' method='get' id='search_word_form'>
				<div class="schbox">
					<input name="input" type="text" class="txt" placeholder="카페, 지역, 테마 직접검색 가능합니다." />
					<a onclick="search_word()" class="btn_sch">검색</a>
				</div>
			</form>
			
			</div>
		</div>
<style>
.lowest{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:17px; 
	 padding-top:5px;
}
.lowest:hover{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:19px; 
	 padding-top:5px;
}
@media all and (max-width:1041px){
.lowest{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:14px; 
	 padding-top:5px;
	 margin-top:-57px;
	 margin-right:-10px;
}
.lowest:hover{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:16px; 
	 padding-top:5px;
	 margin-top:-57px;
	 margin-right:-10px;
}

}
</style>
		<div class="timenow">
			<div class="inner">
				<div class="tit"><strong><b>타임 핫딜!</b></strong><em>선착순, 지금바로 시작하는 게임!  30~80% 핫딜까지!</em>
					<div class='lowest' onclick="location.href='./page/timeHotDeal.php'">현재 29개 중 <b><font color="red">최저가 9000</font>원 > </b></div>
				</div>
				<!-- s : timenow pc -->
				<div class="slidearea">
					<ul class="bxslider01">
						<li>
							<ul>
								<li>
									<div class="timebox">
									<img src="./images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='./page/theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li>
									<div class="timebox">
									<img src="./images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='./page/theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="./images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='./page/theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>전역하는날</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="./images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='./page/theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>살인자의방</strong><em>강남</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="./images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='./page/theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
					<!--li~/li반복하면 dot표시가 생기면서 화면넘어감-->
					</ul>
				</div>
				<!-- e : timenow pc -->
				<!-- s : timenow mobile -->
				<div class="slidearea_m">
					<ul class="bxslider01_m">
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- e : timenow mobile -->
			</div>
		</div>
		<div class="container_inner pd44">
			<div class="newarea">
				<div class="new_f_l">
					<div class="maintit"><b>탈출러 추천</b><em>따끈따끈 새로나온 테마!</em></div>
					<div class="slidearea">
						<ul class="bxslider02">
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고
											임무를 수행하라!
										</div>
										<a href="./page/theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
				<div class="new_f_r">
					<div class="maintit">명예의 게임<em>요즘 가장 인기있는 테마!</em></div>
					<div class="slidearea">
						<ul class="bxslider02">
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고 
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고 
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="cafearea">
			
				<div class="maintit">
				<!--영업 이후에 살릴곳
				추천카페<em>광고</em></div>
				<ul>
					<li><a href="#"><img src="../images/contents/img_cafe1.jpg" alt="카페1" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe2.jpg" alt="카페2" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe3.jpg" alt="카페3" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe4.jpg" alt="카페4" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe5.jpg" alt="카페5" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe6.jpg" alt="카페6" /></a></li>
				</ul>-->
				</div>
				
			</div>

	</div>
<?
include("./page/include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="./js/common.js"></script>
</body>
</html>
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
eval_i1=1;
eval_i2=1;
eval_i3=1;
eval_i4=1;
eval_i5=1;

function eval_change1(){
	var eval1=document.getElementById('eval1');
	var eval_img1=document.getElementById('eval_img1');
	
	if(eval_i1>0){
	eval1.style.backgroundColor="#66ccff";
	eval1.style.color="black";
	eval_img1.style.display="inline";
	eval_i1=-1;
	}else{
	eval1.style.backgroundColor="#ccc";
	eval1.style.color="#666";
	eval_img1.style.display="none";
	eval_i1*=-1;
	}
}
function eval_change2(){
	var eval2=document.getElementById('eval2');
	var eval_img2=document.getElementById('eval_img2');
	
	if(eval_i2>0){
	eval2.style.backgroundColor="#66ccff";
	eval2.style.color="black";
	eval_img2.style.display="inline";
	eval_i2=-1;
	}else{
	eval2.style.backgroundColor="#ccc";
	eval2.style.color="#666";
	eval_img2.style.display="none";
	eval_i2*=-1;
	}
}
function eval_change3(){
	var eval3=document.getElementById('eval3');
	var eval_img3=document.getElementById('eval_img3');
	
	if(eval_i3>0){
	eval3.style.backgroundColor="#66ccff";
	eval3.style.color="black";
	eval_img3.style.display="inline";
	eval_i3=-1;
	}else{
	eval3.style.backgroundColor="#ccc";
	eval3.style.color="#666";
	eval_img3.style.display="none";
	eval_i3*=-1;
	}
}
function eval_change4(){
	var eval4=document.getElementById('eval4');
	var eval_img4=document.getElementById('eval_img4');
	
	if(eval_i4>0){
	eval4.style.backgroundColor="#66ccff";
	eval4.style.color="black";
	eval_img4.style.display="inline";
	eval_i4=-1;
	}else{
	eval4.style.backgroundColor="#ccc";
	eval4.style.color="#666";
	eval_img4.style.display="none";
	eval_i4*=-1;
	}
}
function eval_change5(){
	var eval5=document.getElementById('eval5');
	var eval_img5=document.getElementById('eval_img5');
	
	if(eval_i5>0){
	eval5.style.backgroundColor="#66ccff";
	eval5.style.color="black";
	eval_img5.style.display="inline";
	eval_i5=-1;
	}else{
	eval5.style.backgroundColor="#ccc";
	eval5.style.color="#666";
	eval_img5.style.display="none";
	eval_i5*=-1;
	}
}
function search_game(y){
	var f=document.getElementById('search_game_form');
	var x=document.getElementById('rigion');
	x.value=y;

	f.submit();
}
function search_word(){
	var f=document.getElementById('search_word_form');
	
	f.submit();
}
</script>