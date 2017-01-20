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
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>검색 > </span><strong>테마 상세페이지</strong></div></div>
		<div class="choicearea d_none">
			<div class="inner">
				<dl class="cho1">
					<dt>언제</dt>
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
							</select>
						</div>
					</dd>
				</dl>
				<dl class="cho2">
					<dt>난이도</dt>
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
					<dt>지역</dt>
					<dd>
						<ul class="loca_1dep">
							<li><a href="search.html">전체</a></li>
							<li>
								<a href="#">서울</a>
								<ul class="loca_2dep">
									<li><a href="search.html">전체</a></li>
									<li><a href="search.html">강남</a></li>
									<li><a href="search.html">홍대</a></li>
									<li><a href="search.html">종로.대학로</a></li>
									<li class="ml0"><a href="search.html">건대.잠실</a></li>
									<li><a href="search.html">영등포.신림</a></li>
								</ul>
							</li>
							<li><a href="search.html">경기</a></li>
							<li><a href="search.html">인천</a></li>
							<li><a href="search.html">대전</a></li>
							<li><a href="search.html">부산</a></li>
						</ul>
					</dd>
				</dl>
				<div class="schbox">
					<input type="text" class="txt" placeholder="카페, 지역, 테마 직접검색 가능합니다." />
					<a href="search.html" class="btn_sch">검색</a>
				</div>
			</div>
		</div>
		<div class="container_inner">
			<div class="themeview">
				<dl class="themeinfo">
					<dt><img src="../images/contents/img_themeview.jpg" alt="" /></dt>
					<dd>
						<strong>더 라스트 갬블 2</strong>
						<span>설계된 게임</span>
						<ul><li class="icon_new1"><em>난이도</em> 2</li><li class="icon_new3"><em>인원수</em> 2-6</li><li class="icon_new2"><em>공포감</em> 3</li><li class="txt">필요능력 <span>직관,관찰,수리</span></li></ul>
						<div>
							최고의 겜블러 팀의 일원인 당신은 세계 최대의 
							포커게임에 초대되어 포커게임에 참가하게 된다. <br />
							 <br />
							모든 칩을 올인하고 패를 공개하려는 순간,당신은
							어지러움을 느끼며 갑자기 잠에 빠지게 된다.  <br />
							 <br />
							잠에서 깨어나 보니 상대 선수는 쓰러져 있고, 
							당신의 패가 진 것을 발견하게 된다. <br />
							 <br />
							그 때, 무전기를 통해 누군가가 경찰에 신고하는 
							소리가 들리고, 경찰이 도착하기 전까지 남은 시간은
							단 1시간 뿐.  <br />
							 <br />
							이대로 경찰이 왔다간 범인으로 몰리게 되는 상황! <br />
							 <br />
							제한 시간 내에 단서를 찾아 탈출해 누명을 벗어라.
						</div>
					</dd>
				</dl>
				<ul class="orderlist">
					<li><img src="../images/icon/icon_master.png" alt="마스터" />18:51 (최탐정)</li>
					<li><span>2위</span>  22:35 (박탐정)</li>
					<li><span>3위</span>  25:04 (신탐정)</li>
					<li><span>4위</span>  27:22 (훈탐정)</li>
					<li><span>5위</span>  28:01 (조탐정)</li>
				</ul>
			</div>
		</div>
		<div class="tabarea">
			<div class="container_inner pd44">
				<div class="tab">
					<a href="#self" class="on"><span>예약정보</span></a>
					<a href="#self"><span>게임후기</span></a>
					<a href="#self" onclick="setTimeout(function() {bxslider_tab()}, 30);"><span>카페정보</span></a>
				</div>
				<div class="hiddenarea on">
					<div class="timeres">
						<ul class="timelist">
							<li><a href="#self" class="bg_g">10:00</a></li>
							<li><a href="#self" class="bg_g">11:00</a></li>
							<li><a href="#self" class="bg_g">12:00</a></li>
							<li><a href="#self" class="bg_g">13:00</a></li>
							<li><a href="#self" class="bg_g">14:00</a></li>
							<li><a href="#self" class="bg_g">15:00</a></li>
							<li><a href="#self" class="bg_g">16:00</a></li>
							<li><a href="#self">17:00</a></li>
							<li><a href="#self">18:00</a></li>
							<li><a href="#self">19:00</a></li>
							<li><a href="#self">20:00</a></li>
							<li><a href="#self">21:00</a></li>
							<li><a href="#self">22:00</a></li>
							<li><a href="#self">23:00</a></li>
						</ul>
						<a href="#self" class="btn_res">예약하기</a>
					</div>
					<ul class="ablebox">
						<li class="disable">예약불가</li>
						<li class="able">예약가능</li>
					</ul>
				</div>
				<div class="hiddenarea">
					<div class="reviewbox">
						<div class="f_l">
							<ul class="numbox">
								<li>
									<dl>
										<dt>개연성</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><em></em></dd>
										<dd class="r_num">8점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>장치</dt>
										<dd><strong></strong><strong></strong><strong></strong><em></em><em></em></dd>
										<dd class="r_num">6점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>인테리어</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><em></em></dd>
										<dd class="r_num">8점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>힌트</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><strong></strong></dd>
										<dd class="r_num">10점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>서비스</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><em></em></dd>
										<dd class="r_num">8점</dd>
									</dl>
								</li>
							</ul>
						</div>
						<div class="f_r">
							<div class="tit">플레이어 리뷰 <a href="#" class="btn_more">더보기</a></div>
							<table class="reviewlist"> 
								<tbody>
									<tr>
										<td class="name">sinyo****</td>
										<td class="sbj">개연성이 좀 떨어졌지만 좋았어요~</td>
										<td class="date">16.12.08</td>
										<td class="que">미답변</td>
									</tr>
									<tr>
										<td class="name">sinyo****</td>
										<td class="sbj">신선하고 재미있었어요 !   ~~~~~~ </td>
										<td class="date">16.12.08</td>
										<td class="que">답변</td>
									</tr>
									<tr>
										<td class="name">sinyo****</td>
										<td class="sbj">abcdefghrjklmnop~~~~~~</td>
										<td class="date">16.12.08</td>
										<td class="que">답변</td>
									</tr>
									<tr>
										<td class="name">blala****</td>
										<td class="sbj">신선하고 재미있었어요 !   ~~~~~~ </td>
										<td class="date">16.12.08</td>
										<td class="que">미답변</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="hiddenarea">
					<div class="cafeinfo">
						<div class="f_l">
							<div class="tit">ESC 방탈출카페 신림본점</div>
							<dl class="infobox">
								<dt><img src="../images/contents/img_cafeino1.jpg" alt="" /></dt>
								<dd>
									<p class="info1">안내 및 혜택<span>탈출 성공시 - 조각케익</span><span>5개 모두 탈출시 - 방향자물쇠</span></p>
									<p class="info2">02-873-8287</p>
									<p class="info3">서울시 관악구 남부순환로 1619 영일빌딩 6층 </p>
								</dd>
							</dl>
						</div>
						<div class="f_r">
							<div class="slidearea">
								<ul class="bxslider06">
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
								</ul>
								<a href="#" class="btn_more">더보기</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container_inner pd44">
			<div class="ohtertheme">
				<div class="maintit">이 카페의 다른테마</div>
				<div class="slidearea">
					<ul class="bxslider05">
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow3.jpg" alt=""><span>전역하는날</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
					</ul>
				</div>
				<div class="slidearea_m">
					<ul class="bxslider05_m">
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
					</ul>
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
