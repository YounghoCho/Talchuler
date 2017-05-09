<?
include('./HeadTab_Module_Owner.php');
?>

<style>

#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 240px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 240px); /* for Firefox */
    width :         calc(100% - 240px); /* for IE */
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#666666;
}

#Main_title_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 30px); /* for Firefox */
    width :         calc(100% - 30px); /* for IE */
	padding:30 0 30 30;
}

#Main_datechoice_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 30px); /* for Firefox */
    width :         calc(100% - 30px); /* for IE */
	padding:0 0 30 30;
}

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 30px); /* for Firefox */
    width :         calc(100% - 30px); /* for IE */
	padding:15 0 0 30;
}


/*타이틀 부분*/

#Main_titlebar{
	width:100%;
}

#Main_titlebar .title{
	float:left;
	font-size:25px;
	width:100%;
	font-weight:bold;
}

/*타이틀 부분*/

/*날짜 선택부분*/

#Main_datechoice{
	width:100%;
}

#Main_datechoice .now_show{
	text-align:right;
	padding-right:20px;
	margin-bottom:5px;
	min-width:684px;
}

#Main_datechoice .now_show span{
	width:15%;
	margin:0 5px;
	font-size:12pt;
}

#Main_datechoice .rightblue_bar{
	/*now_show padding-right 크기와 맞춤*/
	width : -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 20px); /* for Firefox */
    width :         calc(100% - 20px); /* for IE */
	height:35px;
	background-color:#56dcfc;
	text-align:center;
	display:table;
	min-width:684px;
}

#Main_datechoice .rightblue_bar span{
	font-size:18pt;
	font-weight:bold;
	display:table-cell;
	vertical-align:middle;
}

#Main_datechoice .date_choice{
	padding-right:20px;
	margin-bottom:5px;
	overflow:hidden;
	min-width:684px;
}

#Main_datechoice .date_choice input{
	width:12%;
	height:40px;
	border:none;
	margin:auto;
	padding:0;
	font-size:15pt;
	background:none;
	outline:none;
}

/*날짜 선택부분*/

/*시간 선택부분*/

#Main_colorinfo{
	width:100%;
	overflow:auto;
	min-width:850px;
}

#Main_colorinfo .left{
	float:left;
	overflow:auto;
}

#Main_colorinfo .infotable{
	margin-right:30px;
	height:30px;
	float:left;
}

#Main_colorinfo .colorbox{
	width:20px;
	height:20px;
	float:left;
	font-size:12pt;
	color:#999999;
}

#Main_colorinfo .right{
	float:right;
	overflow:auto;
	color:#ff6600;
	font-size:12pt;
	padding-right:20px;
}




#Main_gameinfo{  /*전체부분*/
	width:100%;
	overflow:hidden;
}

#Main_gameinfo .game_info{  /*회색박스 하나*/
	width:100%;
	background-color:#ececec;
	overflow:hidden;
	min-width:525px;
	margin-bottom:15px;
}

#Main_gameinfo .game_name{  /*게임이름, 자세히보기 부분*/
	float:left;
	width : -webkit-calc(25% - 10px); /* for Chrome, Safari */
    width :    -moz-calc(25% - 10px); /* for Firefox */
    width :         calc(25% - 10px); /* for IE */
	overflow:auto;
	padding:10 0 0 10;
	display:table;
	
}

#Main_gameinfo .game_title{  /*게임이름*/
	width:100%;
	font-size:15pt;
	font-weight:bold;
	float:left;
	display:table-cell;
	vertical-align:top;
}

#Main_gameinfo .game_detail{  /*자세히보기*/
	width:100%;
	float:left;
	display:table-cell;
	vertical-align:bottom;
}

#Main_gameinfo .game_detail input{
	border:none;
	margin:auto;
	padding:0;
	font-size:12pt;
	background:none;
	outline:none;
}

#Main_gameinfo .game_time{  /*게임 시간 박스 담는 공간*/
	float:left;
	/*패딩만큼 빼줌*/
	width : -webkit-calc(75% - 20px); /* for Chrome, Safari */
    width :    -moz-calc(75% - 20px); /* for Firefox */
    width :         calc(75% - 20px); /* for IE */
	padding:10 10;
}

#Main_gameinfo .game_time input{
	width:100px;
	height:25px;
	border:1px solid #999999;
	color:#999999;
	margin:5 10;
	padding:0;
	font-size:15pt;
	background:none;
	outline:none;
}

#Main_gameinfo .detail_page{font-size:12pt; margin-right:auto; min-width:1000px;}
#Main_gameinfo .detail_page ul{padding:0; margin:0}
.horizon{display: table; width: 100%; border-collapse:collapse; border-spacing: 0px; table-layout: fixed;}
.horizon li {display: table-cell; height:32px; vertical-align:middle;}

.horizon li.subject {text-align:center; font-size:12pt;}  /*분류*/
.horizon li.row1 {text-align:center; width:100px; font-size:12pt;}  /*상태*/
.horizon li.row2 {text-align:center; width:60px; font-size:15pt; font-weight:bold;}  /*시간*/
.horizon li.row3 {text-align:center; width:60px; font-size:15pt; font-weight:bold;}  /*예약자*/
.horizon li.row4 {text-align:center; width:60px; font-size:15pt; font-weight:bold;}  /*인원*/
.horizon li.row5 {text-align:center; width:80px; font-size:15pt; font-weight:bold;}  /*예약금*/
.horizon li.row6 {text-align:center; width:80px; font-size:15pt; font-weight:bold;}  /*추가결체금*/
.horizon li.row7 {text-align:center; width:120px; font-size:10pt; font-style:italic;}  /*등록정보*/





/*시간 선택부분*/



</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->

<div id="Main">
	<div id="Main_title_area">
		<div id="Main_titlebar">
			<div class="title">예약관리</div>
		</div>
	</div>
	<div id="Main_datechoice_area">
		<div id="Main_datechoice">
			<div class="now_show">
				<span>이번달예약:33건</span>
				<span>이번주예약:7건</span>
			</div>
			<div class="rightblue_bar">
				<span>2017.03.20(월)</span>
			</div>
			<script language="JavaScript">
				function changedate(obj){ //색상비교 후 값 반환
					var value1 = obj.getAttribute("value");
					var date1 = document.getElementsByClassName("date_button");
					for(var i = 0; i < date1.length; i++){
						if(date1[i].style.color == "#56dcfc"){
							date1[i].style.color = '#666666';
						}
					for(var i = 0; i < date1.length; i++){
						if(date1[i].value == value1){
							date1[i].style.color == '#56dcfc'
						}
					}
				}
			</script>
			<center>
				<div class="date_choice">
					<input type="button" value="<" onmouseup="change2(this)" onmousedown="change1(this)" style="color:#666666; float:left; width:auto;">
					<input type="button" value="19(일)" id="date_button_1" onclick="on_click(this)" style="color:#666666;"><!-- onmouseout="change2(this)" -->
					<input type="button" value="20(월)" class="date_button" onclick="changedate(this)" style="color:#666666;">
					<input type="button" value="21(화)" class="date_button" onclick="changedate(this)" style="color:#666666;">
					<input type="button" value="22(수)" class="date_button" onclick="changedate(this)" style="color:#666666;">
					<input type="button" value="23(목)" class="date_button" onclick="changedate(this)" style="color:#666666;">
					<input type="button" value="24(금)" class="date_button" onclick="changedate(this)" style="color:#666666;">
					<input type="button" value="25(토)" class="date_button" onclick="changedate(this)" style="color:#666666;">
					<input type="button" value=">" onmouseup="change2(this)" onmousedown="change1(this)" style="color:#666666; float:right; width:auto;">
				</div>
			</center>
		</div>
	</div>
	<div id="Main_content_area">
		<div id="Main_colorinfo">
			<div class="left">
				<div class="infotable">
					<div class="colorbox" style='background-color:#ffffff; border:1px solid #999999;'></div>
					<span>예약가능</span>
				</div>
				<div class="infotable">
					<div class="colorbox" style='background-color:#56dcfc; border:1px solid #56dcfc;'></div>
					<span>탈출러예약</span>
				</div>
				<div class="infotable">
					<div class="colorbox" style='background-color:#999999; border:1px solid #999999;'></div>
					<span>예약불가</span>
				</div>
			</div>
			<div class="right">
				<span>예약시간을 클릭하면 예약불가로 전환.예약취소가 가능합니다.</span>
			</div>
		</div>
		<div id="Main_gameinfo">
			<!--자세히보기-->
			<script>
				function dropdetail(obj){
					var element1 = document.getElementsByClassName("game_info");
					var element2 = document.getElementsByClassName("detail_page");
					for(var i = 0; i < element1.length; i++){
						for(var j = 0; j < element2.length; j++){
							if(i==j){
								element2[j].style.display='inline';
							}
						}
					}
				}
			</script>
			<!--자세히보기-->

			<!--시간 설정박스-->
			<script language="JavaScript">
				function colorchange(obj){
					if(obj.style.background == "none"){
						obj.style.background = '#56dcfc';
					}
					else{
						obj.style.background = "none";
					}
				}
			</script>
			<!--시간 설정박스-->

			<!--회색박스 한 묶음-->
			<div class="game_info">
				<div class="game_name">
					<div class="game_title">해리포터와 마법사의 돌</div>
						<div class="game_detail">
						<input type="button" value="▼ 자세히보기" onclick="dropdetail(this)" style="color:#666666;">
					</div>

				</div>
				<div class="game_time">
					<input type="button" value="10:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="11:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="12:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="13:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="14:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="15:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="16:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="17:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="18:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="19:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="20:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="21:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="22:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="23:00" onclick="colorchange(this)" style='background:none;'/>
				</div>
			</div>
			<div class="detail_page" style='display:none;'>
				<ul class="horizon" style='border-bottom:solid 1px #ccc'>
					<li class="subject" style='width:100px;'>상태</li>
					<li class="subject" style='width:60px;'>시간</li>
					<li class="subject" style='width:60px;'>예약자</li>
					<li class="subject" style='width:60px;'>인원</li>
					<li class="subject" style='width:80px;'>예약금</li>
					<li class="subject" style='width:80px;'>추가결제금</li>
					<li class="subject" style='width:120px;'>등록정보</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">14:00</li>
					<li class="row3">김미선</li>
					<li class="row4">6명</li>
					<li class="row5">10000원</li>
					<li class="row6">100000원</li>
					<li class="row7">2017.02.14 14:28 직접입력</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1" class="col">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">23:00</li>
					<li class="row3"> - </li>
					<li class="row4"> - </li>
					<li class="row5"> - </li>
					<li class="row6"> - </li>
					<li class="row7">2017.03.20 22:19 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
			</div>
			<!--회색박스 한 묶음-->

			<!--회색박스 한 묶음-->
			<div class="game_info">
				<div class="game_name">
					<div class="game_title">쿵푸팬더</div>
						<div class="game_detail">
						<input type="button" value="▼ 자세히보기" onclick="dropdetail()" style="color:#666666;">
					</div>

				</div>
				<div class="game_time">
					<input type="button" value="10:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="11:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="12:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="13:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="14:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="15:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="16:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="17:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="18:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="19:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="20:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="21:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="22:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="23:00" onclick="colorchange(this)" style='background:none;'/>
				</div>
			</div>
			<div class="detail_page" style='display:none;'>
				<ul class="horizon" style='border-bottom:solid 1px #ccc'>
					<li class="subject" style='width:100px;'>상태</li>
					<li class="subject" style='width:60px;'>시간</li>
					<li class="subject" style='width:60px;'>예약자</li>
					<li class="subject" style='width:60px;'>인원</li>
					<li class="subject" style='width:80px;'>예약금</li>
					<li class="subject" style='width:80px;'>추가결제금</li>
					<li class="subject" style='width:120px;'>등록정보</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">14:00</li>
					<li class="row3">김미선</li>
					<li class="row4">6명</li>
					<li class="row5">10000원</li>
					<li class="row6">100000원</li>
					<li class="row7">2017.02.14 14:28 직접입력</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1" class="col">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">23:00</li>
					<li class="row3"> - </li>
					<li class="row4"> - </li>
					<li class="row5"> - </li>
					<li class="row6"> - </li>
					<li class="row7">2017.03.20 22:19 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
			</div>
			<!--회색박스 한 묶음-->

			<!--회색박스 한 묶음-->
			<div class="game_info">
				<div class="game_name">
					<div class="game_title">자전거 돌돌이</div>
						<div class="game_detail">
						<input type="button" value="▼ 자세히보기" onclick="dropdetail()" style="color:#666666;">
					</div>

				</div>
				<div class="game_time">
					<input type="button" value="10:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="11:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="12:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="13:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="14:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="15:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="16:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="17:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="18:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="19:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="20:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="21:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="22:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="23:00" onclick="colorchange(this)" style='background:none;'/>
				</div>
			</div>
			<div class="detail_page" style='display:none;'>
				<ul class="horizon" style='border-bottom:solid 1px #ccc'>
					<li class="subject" style='width:100px;'>상태</li>
					<li class="subject" style='width:60px;'>시간</li>
					<li class="subject" style='width:60px;'>예약자</li>
					<li class="subject" style='width:60px;'>인원</li>
					<li class="subject" style='width:80px;'>예약금</li>
					<li class="subject" style='width:80px;'>추가결제금</li>
					<li class="subject" style='width:120px;'>등록정보</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">14:00</li>
					<li class="row3">김미선</li>
					<li class="row4">6명</li>
					<li class="row5">10000원</li>
					<li class="row6">100000원</li>
					<li class="row7">2017.02.14 14:28 직접입력</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1" class="col">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">23:00</li>
					<li class="row3"> - </li>
					<li class="row4"> - </li>
					<li class="row5"> - </li>
					<li class="row6"> - </li>
					<li class="row7">2017.03.20 22:19 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
			</div>
			<!--회색박스 한 묶음-->

			<!--회색박스 한 묶음-->
			<div class="game_info">
				<div class="game_name">
					<div class="game_title">지금은 9:44</div>
						<div class="game_detail">
						<input type="button" value="▼ 자세히보기" onclick="dropdetail()" style="color:#666666;">
					</div>

				</div>
				<div class="game_time">
					<input type="button" value="10:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="11:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="12:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="13:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="14:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="15:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="16:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="17:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="18:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="19:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="20:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="21:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="22:00" onclick="colorchange(this)" style='background:none;'/>
					<input type="button" value="23:00" onclick="colorchange(this)" style='background:none;'/>
				</div>
			</div>
			<div class="detail_page" style='display:none;'>
				<ul class="horizon" style='border-bottom:solid 1px #ccc'>
					<li class="subject" style='width:100px;'>상태</li>
					<li class="subject" style='width:60px;'>시간</li>
					<li class="subject" style='width:60px;'>예약자</li>
					<li class="subject" style='width:60px;'>인원</li>
					<li class="subject" style='width:80px;'>예약금</li>
					<li class="subject" style='width:80px;'>추가결제금</li>
					<li class="subject" style='width:120px;'>등록정보</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">14:00</li>
					<li class="row3">김미선</li>
					<li class="row4">6명</li>
					<li class="row5">10000원</li>
					<li class="row6">100000원</li>
					<li class="row7">2017.02.14 14:28 직접입력</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1" class="col">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">23:00</li>
					<li class="row3"> - </li>
					<li class="row4"> - </li>
					<li class="row5"> - </li>
					<li class="row6"> - </li>
					<li class="row7">2017.03.20 22:19 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
			</div>
			<!--회색박스 한 묶음-->
		</div>
	</div>
</div>


<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div> <!--body를 닫는 태그입니다.-->
<?
include('./Footer_Module.php');
?>

