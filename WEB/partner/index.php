<html>
<link rel="stylesheet" type="text/css" href="./css/style.css"/>
<style>
body{
	margin:0;
	padding:0;
/*	overflow:hidden;*/
}
.Head{
	width:100%;
	height:68px;
	border:1px solid;
}
.Tab{
	float:left;
	width:220px;
	height:100%;
	border:1px solid;
}
.Main{
	border:1px solid;
	width:100%;
	height:100%;
}
.Footer{
	width:100%;
	margin-top:-20px; /*기본 셋팅에 20px이 들어가있기때문에 빼준다*/
}
.MainBanner{
	float:right;
	width:80%;
	height:100px;
	margin-right:4%;
	margin-top:20px;
	background-color:#999;
	font-size:20px;
	text-align:center;
}
.TodaysReserve{float:left; display:inline-block; width:37%; height:300px; margin-left:5%; margin-top:20px; border:1px solid;}
.OnGame{float:left; display:inline-block; width:37%; height:300px; margin-left:5%; margin-top:20px; border:1px solid;}
.DealingGame{float:left; display:inline-block; width:37%; height:300px; margin-left:5%; margin-top:20px; border:1px solid;}
.Notice{float:left; display:inline-block; width:37%; height:300px; margin-left:5%; margin-top:20px; border:1px solid;}
.btn_FQA{float:left; display:inline-block; width:37%; height:50px; margin-left:5%; margin-top:20px; border:1px solid; color:white; background-color:#333; font-size:20px;}
.btn_Inquiry{float:left; display:inline-block; width:37%; height:50px; margin-left:5%; margin-top:20px; border:1px solid; color:white; background-color:#333; font-size:20px;}

td {border:1px solid;}
.td_head{height:50px;  }
.td_category{height:8px;}
.td_content{height:40px;}
</style>
<body>
	<div class="Head">
		헤드 부분입니다.
	</div>
	<div class="Tab">
		탭 부분입니다.
	</div>
	<div class="Main">
		<div class="MainBanner">배너자리
		</div>
		<div class="TodaysReserve">
		<!--while문 돌릴때, 5개까지만 나오게 하는거 잊지말자-->
			<table>
				<tr><td colspan="2" class="td_head">오늘의 예약현황</td><td></td><td></td><td>더보기></td></tr>
				<tr><td class="td_category">예약게임</td><td>예약시간</td><td>예약자</td><td>인원</td><td></td></tr>
				<tr><td class="td_content">암브로시아</td><td>10:10</td><td>박정우</td><td>5</td><td>입장</td></tr>
			</table>
		</div>
		<div class="OnGame">
			<table>
				<tr><td colspan="2" class="td_head">진행중 게임</td><td></td><td></td><td>더보기></td></tr>
				<tr><td class="td_category">진행게임</td><td>입장시간</td><td>남은시간</td><td>남은힌트</td><td></td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:04</td><td>00:02</td><td>0</td><td>실패</td></tr>
				<tr><td class="td_content">암브로시아</td><td>18:04</td><td>00:12</td><td>2</td><td>탈출</td></tr>
				<tr><td class="td_content">암브로시아</td><td>19:04</td><td>02:02</td><td>4</td><td>탈출</td></tr>
				<tr><td class="td_content">암브로시아</td><td>20:04</td><td>30:02</td><td>8</td><td>실패</td></tr>
			</table>
		</div>
		<div class="DealingGame">
			<table>
				<tr><td colspan="2" class="td_head">타임핫딜 게시중 게임</td><td></td><td>더보기></td></tr>
				<tr><td class="td_category">게시중게임</td><td>게시시간</td><td>가격</td><td></td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
			</table>
		</div>
		<div class="Notice">
			<table>
				<tr><td class="td_head">공지사항</td><td>더보기></td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
			</table>
		</div>
		<button class="btn_FQA">자주하는질문
		</button>
		<button class="btn_Inquiry">1:1문의
		</button>
	</div>
	<div class="Footer">
		<?
		include("./include_footer.php");
		?>
	</div>
</body>
</html>