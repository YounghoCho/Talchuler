<?
include('./HeadTab_Module.php');
?>

<style>
.MainBanner{
	float:left;
	width:66%;
	height:100px;
	margin-top:20px;
	margin-left:3%;
	background-color:#999;
	font-size:20px;
	text-align:center;
	line-height:100px;
}
.MainBanner2{
	float:left;
	width:66%;
	height:180px;
	margin-top:20px;
	margin-left:3%;
	background-color:#999;
	font-size:20px;
	text-align:center;
	line-height:180px;
}
.TodaysReserve{float:left; display:inline-block; width:32%; height:275px; margin-left:3%; margin-top:20px;}
.OnGame{float:left; display:inline-block; width:32%; height:275px; margin-left:2%; margin-top:20px;}
.DealingGame{float:left; display:inline-block; width:32%; height:275px; margin-left:3%; margin-top:20px;}
.Notice{float:left; display:inline-block; width:32%; height:275px; margin-left:2%; margin-top:20px; border:1px solid;}
.Login{float:left; display:inline-block; width:32%; height:275px; margin-left:3%; margin-top:20px; border:1px solid;}
table{width:100%;height:auto;}

.btn_FQA{float:left; display:inline-block; width:32%; height:50px; margin-left:3%; margin-top:50px;margin-bottom:20px; border:1px solid; color:white; background-color:#333; font-size:20px;}
.btn_Inquiry{float:left; display:inline-block; width:32%; height:50px; margin-left:2%; margin-top:50px;margin-bottom:20px; border:1px solid; color:white; background-color:#333; font-size:20px;}
.btn_idpw1{float:left; display:inline-block; width:12%; height:50px; margin-left:14%; margin-top:10px;margin-bottom:20px; text-decoration:underline; color:#66ccff; background-color:#fff; font-size:15px; border:none;}
.btn_idpw2{float:left; display:inline-block; width:17%; height:50px; margin-left:0%; margin-top:10px;margin-bottom:20px; text-decoration:underline; color:#66ccff; background-color:#fff; font-size:15px; border:none;}

.btn_register{float:left; display:inline-block; width:35%; height:50px; margin-left:9%; margin-top:10px;margin-bottom:20px; text-decoration:underline; color:#66ccff; background-color:#fff; font-size:15px; border:none;}

.td_head{width:60%;height:50px; font-size:22px; font-weight:bold; padding-left:20px;}
.td_category{height:8px; border-bottom:1px solid; border-top:1px solid; padding: 3px 0px 3px 25px;}
.td_content{width:40%;height:40px;padding-left:20px;}
#more{text-align:right;padding-right:20px;}
</style>
<?
/* 로그인 이후 S*/
/* 느낌표 하나로 테스트 가능*/

if(!$_SESSION['id']==""){
?>
<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
	<div class="Main">
		<div class="MainBanner">배너자리
		</div>
		<div class="TodaysReserve">
		<!--while문 돌릴때, 5개까지만 나오게 하는거 잊지말자-->
			<table>
				<tr>
					<td colspan="2" class="td_head">오늘의 예약현황</td><td></td><td></td><td id="more">더보기></td>
				</tr>
				<tr>
					<td class="td_category">예약게임</td><td class="td_category">예약시간</td><td class="td_category">예약자</td><td class="td_category">인원</td><td class="td_category"></td>
				</tr>
				<tr>
					<td class="td_content">암브로시아</td><td>10:10</td><td>박정우</td><td>5</td><td id="more">입장</td>
				</tr>
			</table>
		</div>
		<div class="OnGame">
			<table>
				<tr><td colspan="2" class="td_head">진행중 게임</td><td></td><td></td><td id="more">더보기></td></tr>
				<tr><td class="td_category">진행게임</td><td class="td_category">입장시간</td><td class="td_category">남은시간</td><td class="td_category">남은힌트</td><td class="td_category"></td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:04</td><td>00:02</td><td>0</td><td id="more">실패</td></tr>
				<tr><td class="td_content">암브로시아</td><td>18:04</td><td>00:12</td><td>2</td><td id="more">탈출</td></tr>
				<tr><td class="td_content">암브로시아</td><td>19:04</td><td>02:02</td><td>4</td><td id="more">탈출</td></tr>
				<tr><td class="td_content">암브로시아</td><td>20:04</td><td>30:02</td><td>8</td><td id="more">실패</td></tr>
			</table>
		</div>
		<div class="DealingGame">
			<table>
				<tr><td colspan="2" class="td_head">타임핫딜 게시중 게임</td><td></td><td id="more">더보기></td></tr>
				<tr><td class="td_category">게시중게임</td><td class="td_category">게시시간</td><td class="td_category">가격</td><td class="td_category"></td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td id="more">게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td id="more">게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td id="more">게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td id="more">게시종료</td></tr>
				<tr><td class="td_content">암브로시아</td><td>17:00~18:00</td><td>14000원</td><td id="more">게시종료</td></tr>
			</table>
		</div>
		<div class="Notice">
			<table>
				<tr><td class="td_head" style="border-bottom:1px solid">공지사항</td><td style="border-bottom:1px solid;" id="more">더보기></td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" ">17-04-11</td></tr>
			</table>
		</div>
			<button class="btn_FQA">자주하는질문</button>
			<button class="btn_Inquiry">1:1문의</button>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
/* 로그인 이후 E*/
}else{
/* 로그인 이전 S*/
?>
<style>

</style>
	<div class="Main">
		<div class="MainBanner">배너자리
		</div>
		<div class="Login">
			
			<table>
				<tr><td class="td_head">로그인</td></tr>
				<tr><td>
					<form action="./login_chk.php" method="POST" name="loginform">
						<table style="width:60%;margin-left:20%;">
							<tr>
							<td height="30px">아이디로그인</td>
							<td>
								<input type="checkbox" name="cookie" style="float:right" style="width:25px;height:25px"/>
							</td>
							<td style="padding-left:5px;text-align:center;margin-bottom:10px;">로그인유지</td>
							</tr>

							<tr>
							<td colspan="2" height="40px" style="margin-top:10px;">
								<input type="text" name="id" style="width:100%;height:25px;"/>
							</td>
							<td rowspan="2" style="padding-left:5px;">
								<button type="button"  style="height:60px;background-color:#66ccff;text-align:center;width:60%;margin-left:20%;" onclick="module2()">로그인</button>
							</td>
							</tr>

							<tr>
							<td colspan="2" style="margin-top:10px;">
								<input type="password" name="pw" style="width:100%;height:25px;"/>
							</td>

							</tr>
						</table>
					</form>
						<button class="btn_idpw1" onclick="location.href='./idFind1.php'">아이디찾기</button><button class="btn_idpw2" onclick="location.href='./pwFind1.php'">비밀번호찾기</button><button class="btn_register" onclick="location.href='./register1.php'">회원가입하기</button>
				</td></tr>
			</table>

		</div>
		<div class="Notice">
			<table>
				<tr><td class="td_head" style="border-bottom:1px solid">공지사항</td><td style="border-bottom:1px solid;" id="more">더보기></td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" >17-04-11</td></tr>
				<tr><td class="td_content">여성과학기술인지원센터 탈출러 보도</td><td id="more" ">17-04-11</td></tr>
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
<script>
function module2(){
	var f = document.loginform;
	
	if(f.id.value==""){
		alert("아이디를 입력해주세요.");

	}else if(f.pw.value==""){
		alert("비밀번호를 입력해주세요.");
	}else{
		f.submit();
	}
}
</script>

