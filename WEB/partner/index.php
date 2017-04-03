<?
include('./HeadTab_Module.php');
?>

<style>
.MainBanner{
	float:left;
	width:60%;
	height:100px;
	margin-top:20px;
	margin-left:5%;
	background-color:#999;
	font-size:20px;
	text-align:center;
}
.MainBanner2{
	float:left;
	width:60%;
	height:180px;
	margin-top:20px;
	margin-left:5%;
	background-color:#999;
	font-size:20px;
	text-align:center;
}
.TodaysReserve{float:left; display:inline-block; width:32%; height:265px; margin-left:5%; margin-top:20px;}
.OnGame{float:left; display:inline-block; width:32%; height:265px; margin-left:2%; margin-top:20px;}
.DealingGame{float:left; display:inline-block; width:32%; height:265px; margin-left:3%; margin-top:20px;}
.Notice{float:left; display:inline-block; width:32%; height:265px; margin-left:2%; margin-top:20px; border:1px solid;}
.Login{float:left; display:inline-block; width:32%; height:265px; margin-left:3%; margin-top:20px; border:1px solid;}
table{width:100%;}

.btn_FQA{float:left; display:inline-block; width:32%; height:50px; margin-left:3%; margin-top:50px;margin-bottom:20px; border:1px solid; color:white; background-color:#333; font-size:20px;}
.btn_Inquiry{float:left; display:inline-block; width:32%; height:50px; margin-left:2%; margin-top:50px;margin-bottom:20px; border:1px solid; color:white; background-color:#333; font-size:20px;}
.btn_idpw{float:left; display:inline-block; width:35%; height:50px; margin-left:9%; margin-top:10px;margin-bottom:20px; text-decoration:underline; color:blue; background-color:#fff; font-size:15px; border:none;}
.btn_register{float:left; display:inline-block; width:35%; height:50px; margin-left:9%; margin-top:10px;margin-bottom:20px; text-decoration:underline; color:blue; background-color:#fff; font-size:15px; border:none;}

.td_head{height:50px; font-size:20px; font-weight:bold;}
.td_category{height:8px; border-bottom:1px solid; border-top:1px solid;}
.td_content{height:40px;}

</style>
<?
/* 로그인 이후 S*/
/* 느낌표 하나로 테스트 가능*/
if(!$_SESSION['user_name']==""){
?>
<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
	<div class="Main">
		<div class="TodaysReserve">
		<!--while문 돌릴때, 5개까지만 나오게 하는거 잊지말자-->
			<table>
				<tr>
					<td colspan="2" class="td_head">오늘의 예약현황</td>
					<td></td>
					<td></td>
					<td>더보기></td>
				</tr>
				<tr>
					<td class="td_category">예약게임</td>
					<td class="td_category">예약시간</td>
					<td class="td_category">예약자</td>
					<td class="td_category">인원</td>
					<td class="td_category"></td>
				</tr>
				<tr>
					<td class="td_content">암브로시아</td>
					<td>10:10</td><td>박정우</td>
					<td>5</td>
					<td>입장</td>
				</tr>
			</table>
		</div>
		<div class="OnGame">
			<table>
				<tr><td colspan="2" class="td_head">진행중 게임</td><td></td><td></td><td>더보기></td></tr>
				<tr><td class="td_category">진행게임</td><td class="td_category">입장시간</td><td class="td_category">남은시간</td><td class="td_category">남은힌트</td><td class="td_category"></td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:04</td><td>00:02</td><td>0</td><td>실패</td></tr>
				<tr><td class="td_content">암브로시아</td><td>18:04</td><td>00:12</td><td>2</td><td>탈출</td></tr>
				<tr><td class="td_content">암브로시아</td><td>19:04</td><td>02:02</td><td>4</td><td>탈출</td></tr>
				<tr><td class="td_content">암브로시아</td><td>20:04</td><td>30:02</td><td>8</td><td>실패</td></tr>
			</table>
		</div>
		<div class="DealingGame">
			<table>
				<tr><td colspan="2" class="td_head">타임핫딜 게시중 게임</td><td></td><td>더보기></td></tr>
				<tr><td class="td_category">게시중게임</td><td class="td_category">게시시간</td><td class="td_category">가격</td><td class="td_category"></td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td>게시종료</td></tr>
			</table>
		</div>
		<div class="Notice">
			<table>
				<tr><td class="td_head" style="border-bottom:1px solid">공지사항</td><td style="border-bottom:1px solid">더보기></td></tr>
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
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
/* 로그인 이후 E*/
}else{
/* 로그인 이전 S*/
?>
<style>
td {border:1px solid}
</style>
	<div class="Main">
		<div class="MainBanner">배너자리
		</div>
		<div class="Login">
			<table>
				<tr><td class="td_head">로그인</td></tr>
				<tr><td>
					<table style="width:60%;margin-left:20%;border:1px solid;margin-top:40px;">
						<tr><td>아이디로그인</td><td><button style="float:right">ㅁ</button><td style="padding-left:5px;">로그인유지</td></tr>
						<tr><td colspan="2"><input type="text" style="width:100%;height:25px;"/></td><td rowspan="2" style="padding-left:5px;"><button style="height:100%">로그인</button></td></tr>
						<tr><td colspan="2"><input type="text" style="width:100%;height:25px;"/></td>
					</table>
						<button class="btn_idpw">아이디/비밀번호찾기</button><button class="btn_register" onclick="location.href='./register1.php'">회원가입하기</button>
				</td></tr>
			</table>
		</div>
		<div class="Notice">
			<table>
				<tr><td class="td_head" style="border-bottom:1px solid">공지사항</td><td style="border-bottom:1px solid">더보기></td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td>17-04-11</td></tr>
			</table>
		</div>
		<div class="MainBanner2">배너자리
		</div>
		<button class="btn_FQA">자주하는질문
		</button>
		<button class="btn_Inquiry">1:1문의
		</button>
	</div>
<?
}
/* 로그인 이전 E*/
include('./Footer_Module.php');
?>

