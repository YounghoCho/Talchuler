<?
@session_start();

include("./include.php");

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
			<h1><a href="../index.php"><img src="../images/common/img_logo.png" alt="logo" /></a></h1>
			<div class="h_banner">
				<div class="slidearea">
					<!-- 컨텐츠 정해지기 전까지 빼놓기로함
					<ul class="bxslider04">
						<li><a href="#"><img src="../images/common/img_h_banner.png" alt="배너이미지" /></a></li>
						<li><a href="#"><img src="../images/common/img_h_banner.png" alt="배너이미지" /></a></li>
						<li><a href="#"><img src="../images/common/img_h_banner.png" alt="배너이미지" /></a></li>
					</ul>
					-->
				</div>
			</div>
			<a href="#" class="btn_gnb" onclick="gnbView();"><img src="../images/btn/btn_gnb.png" alt="" /></a>
<?
if(!$_SESSION['user_email']){
?>
			<!-- s : 로그인 전 pc -->
			<ul class="gnb clfix">
				<li><a href="./login.php">로그인</a></li>
				<li><a href="./join.php">회원가입</a></li>
				<li><a href="#">예약확인</a></li>
				<li><a href="#">랭킹검색</a></li>
				<li><a href="../search_user.php">탈출러검색</a></li>
				<li><a href="./notice.php">고객센터</a></li>
			</ul>
			<!-- e : 로그인 전 pc -->
<?
}else{
?>
			<!-- s : 로그인 후 pc -->
			<ul class="gnb clfix">
				<li><a href="sch_lank.html">랭킹검색</a></li>
				<li><a href="../search_user.php">탈출러검색</a></li>
				<li><a href="notice.php">고객센터</a></li>
				<li class="login">
					<a href="#">
<?
$filepath = "../upload/profiles/".$_SESSION['user_email'];	

if(!file_exists($filepath)){
	?>
		<img src="../images/contents/img_login_d.png" width="50px;height:65px;"/>
		<em class="num">예약수 0</em></a>
	<?
}else{
	?>
		<img src="../upload/profiles/<?echo $_SESSION['user_email']?>.jpg" style="width:50px;height:65px;" alt="" />
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
		<img src="../images/contents/img_login_d.png" width="80px;height:100px;"/></div>
	<?
}else{
	?>
		<img src="../upload/profiles/<?echo $_SESSION['user_email']?>.jpg" style="width:80px;height:100px;" alt="" /></div>	
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
							<a href="mypage1.php" class="btn_mypage">마이페이지로 이동</a>
							<a href="./logout.php" class="btn_logout">로그아웃</a>
						</div>
					</div>
				</li>
			</ul>
			<!-- e : 로그인 후 pc -->
<?
}
?>

			<div class="gnbwrap">
				<div class="gnbtop"><img src="../images/common/bg_gnbtop.png" alt="" /></div>
<?
if(!$_SESSION['user_email']){
?>
				<!-- s : 로그인 전 mobile -->
				<div class="info">
					<div class="imgbox"><img src="../images/contents/img_login_d.png" alt="" /></div>
					<div class="namebox">로그인 후 내 게임 전적을<br />관리하세요!</div>
					<div class="loginbox">
						<a href="./login.php" class="btn_blue">로그인</a>
						<a href="./join.php" class="btn_blue">회원가입</a>
					</div>
				</div>
				<ul class="gnb_m">
					<li class="gnb1"><a href="#">예약확인</a></li>
					<li class="gnb2"><a href="#">랭킹검색</a></li>
					<li class="gnb2"><a href="../search_user.php">탈출러검색</a></li>
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
		<img src="../images/contents/img_login_d.png" width="80px;height:100px;"/></div>
	<?
}else{
	?>
		<img src="../upload/profiles/<?echo $_SESSION['user_email']?>" style="width:80px;height:100px;"  alt="" /></div>	
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
					<a href="mypage1.php"><em>예약 3건</em></a>
					<ul>
						<li>11/15  데드 넘버</li>
						<li>11/17  게이샤의 편지</li>
						<li>11/15  살인자의 방</li>
					</ul>
				</div>
				<ul class="gnb_m">
					<li class="gnb4"><a href="mypage1.php">마이페이지</a></li>
					<li class="gnb2"><a href="sch_lank.html">랭킹검색</a></li>
					<li class="gnb2"><a href="../search_user.php">탈출러검색</a></li>
					<li class="gnb3"><a href="#">고객센터</a></li>
				</ul>
				<div class="logoutbox"><a href="./logout.php" class="btn_logout">로그아웃</a></div>
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