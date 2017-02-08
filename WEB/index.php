<?
session_start();

include("./page/include.php");

$sql="select * from user where email='".$_SESSION['user_email']."';";
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
</head>
<body class="main">
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
if(!$_SESSION['user_email']){
?>
			<!-- s : 로그인 전 pc -->
			<ul class="gnb clfix">
				<li><a href="./page/login.php">로그인</a></li>
				<li><a href="./page/join.php">회원가입</a></li>
				<li><a href="#">예약확인</a></li>
				<li><a href="#">랭킹검색</a></li>
				<li><a href="./page/notice.php">고객센터</a></li>
			</ul>
			<!-- e : 로그인 전 pc -->
<?
}else{
?>
			<!-- s : 로그인 후 pc -->
			<ul class="gnb clfix">
				<li><a href="./page/sch_lank.html">랭킹검색</a></li>
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
if(!$_SESSION['user_email']){
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
					<li class="gnb3"><a href="#">고객센터</a></li>
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
			<div class="inner">
				<dl class="cho1">
					<dt><font style="font-weight:bold">언제</font></dt>
					<dd>
						<div class="datebox">
							<input type="text" id="testDatepicker" class="txt" value="2016-11-24" />
						</div>
						<div class="selbox">
							<select class="select_st1 w80">
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
								<option>24:00</option>
							</select>
							&nbsp;~&nbsp;
							<select class="select_st1 w80">
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
								<option>24:00</option>
							</select>
						</div>
					</dd>
				</dl>
				<dl class="cho2">
					<dt><font style="font-weight:bold">난이도</font></dt>
					<dd>
						<div class="selbox">
							<select class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							&nbsp;~&nbsp;
							<select class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<div class="ml20">
								<select class="select_st1 w100">
									<option>공포포함</option>
									<option>공포만</option>
									<option>공포X</option>
								</select>
							</div>
							<div class="chkbox">
								<label class="ichk"><span>했던테마 제외</span><input type="checkbox"><i><em></em></i></label>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="cho3">
					<dt><font style="font-weight:bold">지역</font></dt>
					<dd>
						<ul class="loca_1dep">
							<li><a href="./page/search.html">전체</a></li>
							<li>
								<a href="#">서울</a>
								<ul class="loca_2dep">
									<li><a href="./page/search.html">전체</a></li>
									<li><a href="./page/search.html">강남</a></li>
									<li><a href="./page/search.html">홍대</a></li>
									<li><a href="./page/search.html">종로.대학로</a></li>
									<li class="ml0"><a href="./page/search.html">건대.잠실</a></li>
									<li><a href="./page/search.html">영등포.신림</a></li>
								</ul>
							</li>
							<li><a href="./page/search.html">경기</a></li>
							<li><a href="./page/search.html">인천</a></li>
							<li><a href="./page/search.html">대전</a></li>
							<li><a href="./page/search.html">부산</a></li>
						</ul>
					</dd>
				</dl>
				<div class="schbox">
					<input type="text" class="txt" placeholder="카페, 지역, 테마 직접검색 가능합니다." />
					<a href="./page/search.html" class="btn_sch">검색</a>
				</div>
			</div>
		</div>
		<div class="timenow">
			<div class="inner">
				<div class="tit"><strong>TIME NOW</strong><em>선착순, 지금바로 시작하는 게임!  30~80% 핫딜까지!</em></div>
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
						<li>
							<ul>
								<li onclick="">
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
								<li onclick="">
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
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
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
						<li>
							<ul>
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
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
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
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
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
					<div class="maintit">추천 NEW<em>따끈따끈 새로나온 테마!</em></div>
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
					<div class="maintit">추천 BEST<em>요즘 가장 인기있는 테마!</em></div>
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
<!--영업 이후에 살릴곳
			<div class="cafearea">
				<div class="maintit">추천카페<em>광고</em></div>
				<ul>
					<li><a href="#"><img src="../images/contents/img_cafe1.jpg" alt="카페1" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe2.jpg" alt="카페2" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe3.jpg" alt="카페3" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe4.jpg" alt="카페4" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe5.jpg" alt="카페5" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe6.jpg" alt="카페6" /></a></li>
				</ul>
				</div>
			</div>
-->
	</div>
<?
include("./page/include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="./js/common.js"></script>
</body>
</html>