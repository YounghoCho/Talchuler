<?
include('./HeadTab_Module.php');
?>
<!--<meta name="viewport" content="width=device-width">-->
<!--content=width=device-width : 컨텐츠를 디바이스 가로 사이즈에 맞춰 표현
	initial-scale : 초기 표시 배율(1.0 꽉찬페이지)
	minimum-scale : 최소 확대 배율
	maximum-scale : 최대 확대 배율
	user-scalable : 확대/축소 설정 (yes/no)
-->

<style>

#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 220px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 220px); /* for Firefox */
    width :         calc(100% - 220px); /* for IE */
	height:auto; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#666666;
}

#Main_title_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	overflow:auto;
	margin:50 0 0 33;
	padding:0 0 30 26;
}

#Main_datechoice_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	overflow:hidden;
	margin:0 0 0 33;
	padding:0 0 30 26;
}

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	overflow:hidden;
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	margin:0 0 0 33;
	padding:15 0 30 26;
}


/*타이틀 부분*/

#Main_titlebar{
	width:100%;
}

#Main_titlebar .title{
	float:left;
	font-size:25px;
	line-height:25px;
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
	margin-bottom:5px;
}

#Main_datechoice .now_show span{
	width:15%;
	margin:0 5px;
	font-size:12pt;
}

#Main_datechoice .rightblue_bar{
	/*now_show padding-right 크기와 맞춤*/
	width:100%;
	height:35px;
	background-color:#56dcfc;
	text-align:center;
	display:table;
}

#Main_datechoice .rightblue_bar span{
	font-size:18pt;
	font-weight:bold;
	display:table-cell;
	vertical-align:middle;
}

#Main_datechoice .date_choice{
	margin-bottom:5px;
	overflow:hidden;
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
	overflow:hidden;
	min-width:850px;
	margin-bottom:-5px;
}

#Main_colorinfo .left{
	float:left;
	overflow:auto;
	margin-left:10px;
}

#Main_colorinfo .infotable{
	margin-right:30px;
	height:auto;
	float:left;
}

#Main_colorinfo .colorbox{
	width:20px;
	height:20px;
	float:left;
	font-size:12pt;
	color:#999999;
}

@media screen and (max-width: 1400px) { #Main_colorinfo .right { display: none; } } 
#Main_colorinfo .right{
	float:right;
	color:#ff6600;
	font-size:12pt;
	margin-right:10px;
}




#Main_gameinfo{  /*전체부분*/
	width:100%;
	overflow:auto;
}

#Main_gameinfo .game_info{  /*회색박스 하나*/
	float:left;
	width:100%;
	background-color:#ececec;
	overflow:hidden;
	margin-top:15px;
	display:table;
	font-weight:100;
}

#Main_gameinfo .game_name{  /*게임이름, 자세히보기 부분*/
	float:left;
	width : 25%;
	height:100%;
	padding:10 0 0 10;
	display:table-cell;
}

#Main_gameinfo .game_title{  /*게임이름*/
	width:100%;
	font-size:15pt;
	line-height:21pt;
	font-weight:bold;
}

#Main_gameinfo .game_detail{  /*자세히보기*/
	width:100%;
	float:left;
	overflow:auto;
	margin-top:10px;
}

#Main_gameinfo .game_detail input{
	border:none;
	float:left;
	padding:0;
	font-size:12pt;
	background:none;
	outline:none;
}

#Main_gameinfo .game_time{  /*게임 시간 박스 담는 공간*/
	float:left;
	/*패딩만큼 빼줌*/
	width : 75%;
	padding:10 10 10 0;
	display:table-cell;
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

#Main_gameinfo .game_time a{
	
}

#Main_gameinfo .game_time button{
	width:100px;
	height:25px;
	border:1px solid #999999;
	color:#999999;
	margin:5 10;
	padding:0;
	font-size:15pt;
	background:none;
	outline:none;
	font-weight:100;
}


.detail_page{font-size:12pt; margin-right:auto; float:left;}
.detail_page ul{padding:0; margin:0}
.horizon{display: table; width: 100%; border-collapse:collapse; border-spacing: 0px; table-layout: fixed;}
.horizon li {display: table-cell; height:32px; vertical-align:middle;}

.horizon li.subject {text-align:center; font-size:12pt;}  /*분류*/
.horizon li.row1 {text-align:center; width:100px; font-size:12pt;}  /*상태*/
.horizon li.row2 {text-align:center; width:60px; font-size:14pt; font-weight:medium;}  /*시간*/
.horizon li.row3 {text-align:center; width:60px; font-size:14pt; font-weight:medium;}  /*예약자*/
.horizon li.row4 {text-align:center; width:60px; font-size:14pt; font-weight:medium;}  /*인원*/
.horizon li.row5 {text-align:center; width:80px; font-size:14pt; font-weight:medium;}  /*예약금*/
.horizon li.row6 {text-align:center; width:80px; font-size:14pt; font-weight:medium;}  /*추가결체금*/
.horizon li.row7 {text-align:center; width:120px; font-size:10pt; font-style:italic;}  /*등록정보*/

/*시간 선택부분*/

/*팝업 중 쉐이딩 되지 않은 영역_1*/
#note_1{
	background:#f3f3f3;
	width:500px;
	height:300px;
	float:left;
	padding:5 10;
}

#note_1 .text_box{
	float:left;
	font-size:16px;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	font-weight:bold;
	color:red;
	border-bottom:2px solid #06aeff;
	margin:17 0 15 0;
	padding:0 10 20 10;
}

#note_1 .info_area{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	margin:0;
	padding:0 10;
}


#note_1 .inputbox_area{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	margin-top:15px;
	padding:0 10;
}

#note_1 .checkbox_content{
	width:100%;
	overflow:auto;
	position:static;
	padding:0; 
}

#note_1 .checkbox_text{
	width:100%;
	overflow:auto;
	font-size:14px;
	font-weight:bold;
	float:left;
	color:#757575;
	margin-left:2%;
	padding:0;
	margin-top:0px; /*체크박스와 높이 조잘위해 조정*/
	position:relative;
}

#note_1 .checkbox_subred{
	width:100%;
	overflow:auto;
	font-size:12px;
	float:left;
	color:red;
	margin-left:2%;
	padding:0;
	margin-top:0px; /*체크박스와 높이 조잘위해 조정*/
	position:relative;
}

#note_1 .clickbox_check{
	float:right;
	margin-right:3%;
	font-size:16px;
	padding:2 0;
	position:relative;
}

/*팝업 중 쉐이딩 되지 않은 영역_1*/

/*상세 입력란*/
#inputbox{
	width:100%;
	margin:0;
	float:left;
	overflow:auto;
	display:table;
}

#inputbox .inputboxes{
	overflow:auto;
	float:left;
	margin:5 0;
}

#inputbox .major{
	padding:3 10 0 10;
	display:table;
	float:left;
}

#inputbox .sub{
	padding:3 0 0 5;

	display:table;
	float:left;
}

#inputbox input{
	width:auto;
	height:25px;
	display:table;
	float:left;
}
/*상세 입력란*/

/*어둡기를 조절하는 마스크*/
#mask {  
	  position:fixed;  
	  z-index:9000;  
	  background-color:#000;  
	  display:none;  
	  left:0;
	  top:0;
}
/*어둡기를 조절하는 마스크*/

/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정_1*/
.window_1{
	  display: none;
	  position:fixed;  
	  left:33%;
	  top:27%;
	  z-index:10000;
}
/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정_1*/

/*클릭박스 디자인 영역*/
#clickbox_area{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	height:50px;
	padding:10px;
}

#clickbox_area input{
	height:100%;
	width: -webkit-calc(50% - 6px); /* for Chrome, Safari */
    width:    -moz-calc(50% - 6px); /* for Firefox */
    width:         calc(50% - 6px); /* for IE */
	font-size:14px;
	font-weight:bold;
	padding:5 0 5 0;
}
/*클릭박스 디자인 영역*/


/*클릭박스 디자인 영역*/

.clickbox_rightblue{
	background:#66ccff;
	border:1px solid #06aeff;
	color:#666666;
	font-size:15px;
	font-weight:bold;
	width:100px;
	padding:5 0 5 0;
	text-align:center;
}

.clickbox_rightblue a{
	text-decoration:none;
	color:#3e3e3e;
}

/*클릭박스 디자인 영역*/

.mySlidesa{display:none; margin-left:20px;text-align:center; padding:10px 0 0 0}
.slideshow-containera {
  max-width: 100%;
  position: relative;
  margin: auto;
}

.preva, .nexta {
  cursor: pointer;
  position: absolute;
  width:auto;
  margin-top: -26px;
  color: #56DCFC;
  font-weight: bold;
  font-size: 20pt;
  border-radius: 0 3px 3px 0;
}

.nexta {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.date_num{
	width:30px;
	height:30px;
	background-color:white;
	color:#666666;
	border:none;
	font-size:17pt;
	margin-right:20px;
	margin-left:20px;
	font-weight:bold;
}
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
			
			<div class="slideshow-containera">
				<div class="mySlidesa">
					<input type="button" class="date_num" onclick="changedate(0)" value="1"><input type="button" class="date_num" onclick="changedate(1)" value="2"><input type="button" class="date_num" onclick="changedate(2)" value="3"><input type="button" class="date_num" onclick="changedate(3)" value="4"><input type="button" onclick="changedate(4)" class="date_num" value="5"><input type="button" class="date_num" onclick="changedate(5)" value="6"><input type="button" class="date_num" onclick="changedate(6)" value="7"><input type="button" class="date_num" onclick="changedate(7)" value="8"><input type="button" class="date_num" onclick="changedate(8)" value="9"><input type="button" class="date_num" onclick="changedate(9)" value="10">
				</div>

				<div class="mySlidesa">
					<input type="button" class="date_num" onclick="changedate(10)" value="11"><input type="button" class="date_num" onclick="changedate(11)" value="12"><input type="button" class="date_num" onclick="changedate(12)" value="13"><input type="button" class="date_num" onclick="changedate(13)" value="14"><input type="button" onclick="changedate(14)" class="date_num" value="15"><input type="button" class="date_num" onclick="changedate(15)" value="16"><input type="button" class="date_num" onclick="changedate(16)" value="17"><input type="button" class="date_num" onclick="changedate(17)" value="18"><input type="button" class="date_num" onclick="changedate(18)" value="19"><input type="button" class="date_num" onclick="changedate(19)" value="20">
				</div>

				<div class="mySlidesa">
					<input type="button" class="date_num" onclick="changedate(20)" value="21"><input type="button" class="date_num" onclick="changedate(21)" value="22"><input type="button" class="date_num" onclick="changedate(22)" value="23"><input type="button" class="date_num" onclick="changedate(23)" value="24"><input type="button" onclick="changedate(24)" class="date_num" value="25"><input type="button" class="date_num" onclick="changedate(25)" value="26"><input type="button" class="date_num" onclick="changedate(26)" value="27"><input type="button" class="date_num" onclick="changedate(27)" value="28"><input type="button" class="date_num" onclick="changedate(28)" value="29"><input type="button" class="date_num" onclick="changedate(29)" value="30">
				</div>

				<div class="mySlidesa" style="text-align:left;">
					<input type="button" class="date_num" onclick="changedate(30)" value="31" style="margin-left:40px;">
				</div>

				<a class="preva" onclick="plusSlidesa(-1)">&#10094;</a>
				<a class="nexta" onclick="plusSlidesa(1)">&#10095;</a>
			</div>
		</div>
	</div>
	<div id="Main_content_area">
		<div id="Main_colorinfo">
			<div class="left">
				<div class="infotable">
					<div class="colorbox" style='background-color:#ffffff; border:1px solid #999999;'></div>
					<span>&nbsp&nbsp&nbsp예약가능</span>
				</div>
				<!--
				<div class="infotable">
					<div class="colorbox" style='background-color:#56dcfc; border:1px solid #56dcfc;'></div>
					<span>&nbsp&nbsp&nbsp탈출러예약</span>
				</div>
				-->
				<div class="infotable">
					<div class="colorbox" style='background-color:#999999; border:1px solid #999999;'></div>
					<span>&nbsp&nbsp&nbsp예약불가</span>
				</div>
			</div>
			<div class="right">
				<span>예약시간을 클릭하면 예약불가로 전환.예약취소가 가능합니다.</span>
			</div>
		</div>
		<div id="Main_gameinfo">
			<!--자세히보기-->
			<script>
				function dropdetail(callnum){
					var detailpage = document.getElementsByClassName("detail_page");
					var openbtn = document.getElementsByClassName("openbutton");
					var closebtn = document.getElementsByClassName("closebutton");
					for(var i = 0; i < detailpage.length; i++){
						if(i==callnum){	
								detailpage[i].style.display='inline';
								openbtn[i].style.display='none';
								closebtn[i].style.display='inline';
						}
				}

			}
			</script>
			<script>
			function closedetail(callnum){
					var detailpage_c = document.getElementsByClassName("detail_page");
					var openbtn_c = document.getElementsByClassName("openbutton");
					var closebtn_c = document.getElementsByClassName("closebutton");
					for(var i = 0; i < detailpage_c.length; i++){
						if(i==callnum){	
								detailpage_c[i].style.display='none';
								openbtn_c[i].style.display='inline';
								closebtn_c[i].style.display='none';
						}
				}
			}	
			</script>
			<!--자세히보기-->

			<!--시간 클릭 시 뜨는 팝업창-->
			
			<script language="JavaScript">
				function colorchange(obj){
					if(obj.style.background == "none"){
						obj.style.background = '#56dcfc';
					}
					else{
						obj.style.background = "none";
					}
				}

				function wrapWindowByMask_1(){
					//화면의 높이와 너비를 구한다.
					var maskHeight_1 = $(window).height();  
					var maskWidth_1 = $(document).width();  

					//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
					$('#mask').css({'width':maskWidth_1,'height':maskHeight_1});  
					// 플로팅 효과
					$('#mask').fadeIn(500); //시간 딜레이 1000=1s    
					$('#mask').fadeTo("slow",0.5); //띄우는 시간, 어둡기 투명도 조절

					//윈도우 같은 거 띄운다.
					$('.window_1').show();
				}

				$(document).ready(function(){
					//검은 막 띄우기
					$('.openMask_1').click(function(e){
						e.preventDefault();
						wrapWindowByMask_1();
					});

					//닫기 버튼을 눌렀을 때
					$('.window_1 .close').click(function (e) {  
						//링크 기본동작은 작동하지 않도록 한다.
						e.preventDefault();  
						$('#mask, .window_1').hide();  
					});       
			/*
					//검은 막을 눌렀을 때
					$('#mask').click(function () {  
						$(this).hide();  
						$('.window_1').hide();  
					});     
			*/
				});

					// 터치 스크린에서 실수로 레이어를 닫는 경우를 막으려면.

			</script>

			<!--시간 클릭 시 뜨는 팝업창-->

			<div id="mask"></div>
			<div class="window_1">
				<div id="note_1">
					<div class="info_area">
						<div class="text_box">
							테마제목1111 10:00 예약불가로 전환하시겠습니까?
						</div>
						<div class="checkbox_text">
								예약자 정보 등록
						</div>
						<div class="checkbox_subred">
							예약자의 정보를 입력하시면 예약관리에 추가됩니다.
						</div>
					</div>
					<div class="inputbox_area">
						<form action="url" id="inputbox">
							<div class="inputboxes">
								<span class="major">성함</span>
								<input name="name" type="text" maxlength="4" style="width:68px; padding-left:5px;" placeholder="성함"> <br>
							</div>
							<div class="inputboxes">
								<span class="major" style="padding-left:20px;">연락처</span>
								<input name="phone" type="text" maxlength="11" style="width:95px; padding-left:5px;" placeholder="연락처"> <br>
							</div>
							<div class="inputboxes">
								<span class="major"  style="padding-left:20px;">예약인원</span>
								<input name="with" type="text" maxlength="2" style="width:30px; padding-left:5px;" placeholder="2">
								<span class="sub">명</span><br>
							</div>
							<div class="inputboxes">
								<span class="major">예약금</span>
								<input name="first" type="text" style="width:80px; padding-left:5px;" placeholder="10000">
								<span class="sub">원</span><br>
							</div>
							<div class="inputboxes">
								<span class="major" style="padding-left:20px;">추가결제금</span>
								<input name="next" type="text" style="width:80px; padding-left:5px;" placeholder="30000">
								<span class="sub">원</span><br>
							</div>
						</form>
					</div>
					<div id="clickbox_area">
						<input type="button" href="#" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="취소"/>
						<!--class=close는 닫기 기능, 확인에는 다른링크 걸어야함-->
						<input type="button" href="" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;' value="확인"/>
					</div>
				</div>
			</div>


			<!--시간 설정박스 컬러변경 비활성-->
			<!--
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
			-->
			<!--시간 설정박스 컬러변경 비활성-->



			<!--회색박스 한 묶음-->
			<div class="game_info">
				<div class="game_name">
					<div class="game_title">해리포터와 마법사의 돌</div>
					<div class="game_detail">
						<input type="button" value="▼ 자세히보기" class="openbutton" onclick="dropdetail(0)" style="color:#666666;">
						<input type="button" value="▲ 자세히보기" class="closebutton" onclick="closedetail(0)" style="color:#666666; display:none;">
					</div>
				</div>
				<div class="game_time">
					<a href="#" class="openMask_1"><input type="button" value="10:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="11:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="12:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="13:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="14:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="15:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="16:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="17:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="18:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="19:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="20:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="21:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="22:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="23:00" style='background:none;'/></a>
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
						<input type="button" value="▼ 자세히보기" class="openbutton" onclick="dropdetail(1)" style="color:#666666;">
						<input type="button" value="▲ 자세히보기" class="closebutton" onclick="closedetail(1)" style="color:#666666; display:none;">
					</div>

				</div>
				<div class="game_time">
					<a href="#" class="openMask_1"><input type="button" value="10:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="11:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="12:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="13:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="14:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="15:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="16:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="17:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="18:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="19:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="20:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="21:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="22:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="23:00" style='background:none;'/></a>
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
						<input type="button" value="▼ 자세히보기" class="openbutton" onclick="dropdetail(2)" style="color:#666666;">
						<input type="button" value="▲ 자세히보기" class="closebutton" onclick="closedetail(2)" style="color:#666666; display:none;">
					</div>

				</div>
				<div class="game_time">
					<a href="#" class="openMask_1"><input type="button" value="10:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="11:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="12:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="13:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="14:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="15:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="16:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="17:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="18:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="19:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="20:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="21:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="22:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="23:00" style='background:none;'/></a>
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
						<input type="button" value="▼ 자세히보기" class="openbutton" onclick="dropdetail(3)" style="color:#666666;">
						<input type="button" value="▲ 자세히보기" class="closebutton" onclick="closedetail(3)" style="color:#666666; display:none;">
					</div>

				</div>
				<div class="game_time">
					<a href="#" class="openMask_1"><input type="button" value="10:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="11:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="12:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="13:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="14:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="15:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="16:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="17:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="18:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="19:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="20:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="21:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="22:00" style='background:none;'/></a>
					<a href="#" class="openMask_1"><input type="button" value="23:00" style='background:none;'/></a>
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
<script>
var slideIndexa = 1;
showSlidesa(slideIndexa);

function plusSlidesa(n) {
  showSlidesa(slideIndexa += n);
}

function showSlidesa(n) {
  var j;
  var slidesa = document.getElementsByClassName("mySlidesa");
  if (n > slidesa.length) {slideIndexa = 1}    
  if (n < 1) {slideIndexa = slidesa.length}
  for (j = 0; j < slidesa.length; j++) {
      slidesa[j].style.display = "none";  
  }
  slidesa[slideIndexa-1].style.display = "block";  
}
</script>
<script language="JavaScript">
		function changedate(datenum){ //색상비교 후 값 반환
			var week = document.getElementsByClassName("date_num");
			for(var i = 0; i < week.length; i++){
				week[i].style.color = '#666666'
				week[i].style.backgroundColor='white'
				if(i==datenum){
					week[i].style.color = 'white'
					week[i].style.backgroundColor='#56DCFC'
				}
			}
		}
</script>