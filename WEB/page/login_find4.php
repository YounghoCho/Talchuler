<!DOCTYPE html>
<html xml:lang="ko" lang="ko">
<head>
<title>탈출러</title>
<meta charset="utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="../js/placeholders.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="../js/jquery.customSelect.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="../js/respond.min.js"></script>
	<script type="text/javascript" src="../js/html5shiv.js"></script>
<![endif]-->
</head>
<body class="main">
<div id="wrap">
	<header id="header">
		<div class="header_inner">
			<h1><a href="main.html"><img src="../images/common/img_logo.png" alt="logo" /></a></h1>
			<div class="h_banner">
				<div class="slidearea">
					<ul class="bxslider04">
						<li><a href="#"><img src="../images/common/img_h_banner.png" alt="배너이미지" /></a></li>
						<li><a href="#"><img src="../images/common/img_h_banner.png" alt="배너이미지" /></a></li>
						<li><a href="#"><img src="../images/common/img_h_banner.png" alt="배너이미지" /></a></li>
					</ul>
				</div>
			</div>
			<a href="#" class="btn_gnb" onclick="gnbView();"><img src="../images/btn/btn_gnb.png" alt="" /></a>
			<!-- s : 로그인 전 pc -->
			<!--ul class="gnb clfix">
				<li><a href="#">로그인</a></li>
				<li><a href="#">회원가입</a></li>
				<li><a href="#">예약확인</a></li>
				<li><a href="#">랭킹검색</a></li>
				<li><a href="notice.html">고객센터</a></li>
			</ul-->
			<!-- e : 로그인 전 pc -->
			<!-- s : 로그인 후 pc -->
			<ul class="gnb clfix">
				<li><a href="sch_lank.html">랭킹검색</a></li>
				<li><a href="notice.html">고객센터</a></li>
				<li class="login">
					<a href="#"><img src="../images/contents/img_login.png" alt="" /><em class="num">2</em></a>
					<div class="info">
						<div class="in_1">
							<div class="imgbox"><img src="../images/contents/img_login_b.png" alt="" /></div>
							<div class="namebox">
								<strong>노력파 신탐정</strong>
								<strong>12위<em>in 대한민국</em></strong>
								<span>85탈15패 (85%)</span>
								<span>평균속도  18:31</span>
							</div>
						</div>
						<div class="in_2">
							<div class="tit">예약 2건 <a href="mypage1.html" class="btn_in_more">더보기</a></div>
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
							<a href="mypage1.html" class="btn_mypage">마이페이지로 이동</a>
							<a href="#" class="btn_logout">로그아웃</a>
						</div>
					</div>
				</li>
			</ul>
			<!-- e : 로그인 후 pc -->
			<div class="gnbwrap">
				<div class="gnbtop"><img src="../images/common/bg_gnbtop.png" alt="" /></div>
				<!-- s : 로그인 전 mobile -->
				<!--div class="info">
					<div class="imgbox"><img src="../images/contents/img_login_d.png" alt="" /></div>
					<div class="namebox">로그인 후 내 게임 전적을<br />관리하세요!</div>
					<div class="loginbox">
						<a href="#" class="btn_blue">로그인</a>
						<a href="#" class="btn_blue">회원가입</a>
					</div>
				</div>
				<ul class="gnb_m">
					<li class="gnb1"><a href="#">예약확인</a></li>
					<li class="gnb2"><a href="#">랭킹검색</a></li>
					<li class="gnb3"><a href="#">고객센터</a></li>
				</ul-->
				<!-- e : 로그인 전 mobile -->
				<!-- s : 로그인 후 mobile -->
				<div class="info">
					<div class="imgbox"><img src="../images/contents/img_login_b.png" alt="" /></div>
					<div class="namebox st02">
						<strong>노력파 신탐정<img src="../images/icon/icon_name.png" alt="" /></strong>
						<strong>12위<em>in 대한민국</em></strong>
						<span>85탈15패 (85%)</span>
						<span>평균속도  18:31</span>
					</div>
				</div>
				<div class="rebox">
					<a href="mypage1.html"><em>예약 3건</em></a>
					<ul>
						<li>11/15  데드 넘버</li>
						<li>11/17  게이샤의 편지</li>
						<li>11/15  살인자의 방</li>
					</ul>
				</div>
				<ul class="gnb_m">
					<li class="gnb4"><a href="mypage1.html">마이페이지</a></li>
					<li class="gnb2"><a href="sch_lank.html">랭킹검색</a></li>
					<li class="gnb3"><a href="#">고객센터</a></li>
				</ul>
				<div class="logoutbox"><a href="#" class="btn_logout">로그아웃</a></div>
				<!-- e : 로그인 후 mobile -->
			</div>
			<div class="gnbbg" onclick="gnbHide();"></div>
		</div>
	</header>
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
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>이메일 찾기</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>이메일 찾기</span><div class="lfind"><span>회원정보에 등록한 휴대전화로 인증</span></div></div>
				<div class="graybox find">
					<div class="ftit">회원정보에 등록한 휴대전화 번호입력한 휴대전화 번호가 같아야 인증번호를 받으 실 수 있습니다.</div>
					<div class="topbox">
						<div class="inputbox">
							<table class="t_login">
								<tbody>
									<tr>
										<th>이름</th>
										<td><input type="text" class="txt st04" placeholder="이름을 입력하세요." /></td>
									</tr>
									<tr>
										<th rowspan="3">휴대전화</th>
										<td><div class="phonebox"><select><option>+ 82</option></select> <input type="text" class="txt st04" placeholder="휴대전화번호" /><a href="#">인증번호 받기</a></div></td>
									</tr>
									<tr>
										<td><input type="text" class="txt st04" placeholder="인증번호 숫자 6자리 입력" /></td>
									</tr>
									<tr>
										<td><a href="#" class="btn_qu">인증번호가 오지 않나요</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> 
				</div>
				<div class="nextarea">
					<a href="#" class="btn_next">다음</a>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer">
		<div class="footer_inner">
			<h1><a href="#"><img src="../images/common/logo_f.png" alt="logo" /></a></h1>
			<div class="phonebox">02-0000-0000</div>
			<div class="f_top">
				<div class="left">
					<p class="b">이놀루션</p>
					<p>대표: 최연진    사업자등록번호: 438-18-00364</p>
					<p>주소: 서울 강남구 테헤란로7길 22  과학기술회관 1109-1호</p>
					<p class="cen">통신판매번호: 제0000-0000-0000 (미정)</p>
				</div>
				<div class="right">
					<p class="b">고객센터</p>
					<p>02-0000-0000 (평일 am10:00~pm6:00)</p>
					<p>주옐로카카오: 탈출러</p>
					<p>이메일: <a href="#">talchuler_marketing@naver.com</a></p>
				</div>
			</div>
			<div class="f_bottom">
				<ul class="policylink">
					<li><a href="#">회사소개</a></li>
					<li><a href="policy1.html">이용약관</a></li>
					<li><a href="policy2.html">개인정보처리방침</a></li>
					<li><a href="policy3.html">위치정보이용약관</a></li>
				</ul>
				<div class="copyright">COPYRIGHT INOLUTION CORP.ALL RIGHT RESERVED</div>
				<div class="snsbox">
					<a href="#"><img src="../images/icon/icon_facebook.png" alt="페이스북" /></a>
					<a href="#"><img src="../images/icon/icon_blog.png" alt="블로그" /></a>
				</div>
			</div>
		</div>
	</footer>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>
