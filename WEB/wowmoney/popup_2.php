<?
include('./HeadTab_Module_Owner.php');
?>

<script>
	function wrapWindowByMask(){
		//화면의 높이와 너비를 구한다.
		var maskHeight = $(window).height();  
		var maskWidth = $(document).width();  

		//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
		$('#mask').css({'width':maskWidth,'height':maskHeight});  
		// 플로팅 효과
		$('#mask').fadeIn(500); //시간 딜레이 1000=1s    
		$('#mask').fadeTo("slow",0.5); //띄우는 시간, 어둡기 투명도 조절

		//윈도우 같은 거 띄운다.
		$('.window').show();
	}

	$(document).ready(function(){
		//검은 막 띄우기
		$('.openMask').click(function(e){
			e.preventDefault();
			wrapWindowByMask();
		});

		//닫기 버튼을 눌렀을 때
		$('.window .close').click(function (e) {  
		    //링크 기본동작은 작동하지 않도록 한다.
		    e.preventDefault();  
		    $('#mask, .window').hide();  
		});       
/*
		//검은 막을 눌렀을 때
		$('#mask').click(function () {  
		    $(this).hide();  
		    $('.window').hide();  
		});     
*/
	});

		// 터치 스크린에서 실수로 레이어를 닫는 경우를 막으려면.

</script>

<style>

#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100%-220px); /* for Chrome, Safari */
    width :    -moz-calc(100%-220px); /* for Firefox */
    width :         calc(100%-220px); /* for IE */
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
}

/*background는 일반 컨텐츠 영역임*/
#background{
	background:#339933;
	width:800px;
	height:800px;
	float:left;
	text-align:center;
}
/*background는 일반 컨텐츠 영역임*/

/*팝업 중 쉐이딩 되지 않은 영역*/
#note{
	background:#f3f3f3;
	width:500px;
	height:400px;
	float:left;
	padding:5 10;
}

#note .text_box{
	float:left;
	font-size:18px;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	font-weight:bold;
	margin:17 0 14 0;
	padding:0 10;
}

#note .checkbox_area{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	margin:0;
	padding:0 10;
}

#note .checkbox_content{
	width:100%;
	overflow:auto;
	position:static;
	padding:3 0; 
}

#note .checkbox_text{
	overflow:auto;
	font-size:14px;
	font-weight:bold;
	float:left;
	color:#757575;
	margin-left:2%;
	padding:5 0;
	margin-top:0px; /*체크박스와 높이 조잘위해 조정*/
	position:relative;
}

#note .clickbox_check{
	float:right;
	margin-right:3%;
	font-size:16px;
	padding:2 0;
	position:relative;
}



.auto_margin{
	margin:auto;
	height:1;
}
/*팝업 중 쉐이딩 되지 않은 영역*/

/*상세 입력란*/
#inputbox{
	width:100%;
	height:50px;
	margin:0;
	float:left;
	overflow:auto;
}

#inputbox input{
	width:94%;
	height:30px;
}
/*상세 입력란*/

/*어둡기를 조절하는 마스크*/
#mask {  
	  position:absolute;  
	  z-index:9000;  
	  background-color:#000;  
	  display:none;  
	  left:0;
	  top:0;
}
/*어둡기를 조절하는 마스크*/

/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정*/
.window{
	  display: none;
	  position:absolute;  
	  left:33%;
	  top:20%;
	  z-index:10000;
}
/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정*/

/*클릭박스 디자인 영역*/
#clickbox_area{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	height:37px;
	padding:10px;
}

#clickbox_area input{
	height:100%;
	width:48%;
	font-size:14px;
	font-weight:bold;
	padding:5 0 5 0;
}
/*클릭박스 디자인 영역*/

/*체크박스 디자인 영역*/
#all_check{
	float:right;
	display:table;
	padding-top:7px;
	margin-right:10px;
}

.checks {
	position: relative;
	color:#666666;
	font-size:15px;
	font-weight:bold;
} 

.checks input[type="checkbox"] { /* 실제 체크박스는 화면에서 숨김 */ 
	position: absolute; 
	width: 1px; 
	height: 1px; 
	padding: 0; 
	margin: -1px; 
	overflow: hidden; 
	clip:rect(0,0,0,0); 
	border: 0;
} 

.checks input[type="checkbox"] + label {
	display: inline-block; 
	position: relative; 
	cursor: pointer; 
	-webkit-user-select: none;
	-moz-user-select: none; 
	-ms-user-select: none; 
} 

.checks input[type="checkbox"] + label:before { /* 가짜 체크박스 */ 
	content: ' ';
	display: inline-block; 
	width: 21px; /* 체크박스의 너비를 지정 */ 
	height: 21px; /* 체크박스의 높이를 지정 */ 
	line-height: 21px; /* 세로정렬을 위해 높이값과 일치 */ 
	text-align: center; 
	vertical-align: middle; 
	background: #fafafa; 
	border: 1px solid #cacece; 
	box-shadow: 0px 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
}
	
.checks input[type="checkbox"] + label:active:before, .checks input[type="checkbox"]:checked + label:active:before {
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
} 

.checks input[type="checkbox"]:checked + label:before { /* 체크박스를 체크했을때 */ 
	content: '\2714'; /* 체크표시 유니코드 사용 */ 
	color: #ffffff; 
	background: #7bdeff; 
	border:1px solid #ffffff;
	box-shadow: 0px 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
}


/*체크박스 디자인 영역*/



</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->

<div id="Main">
	<div id="background">
		<div id="mask"></div>
		<div class="window">
			<div id="note">
				<div class="text_box">
					탈퇴사유를 선택해주세요.
				</div>
				<div class="checkbox_area">
					<div class="checkbox_content">
						<div class="checkbox_text">
							- 개인정보에 대한 우려가 있습니다.
						</div>
						<div class="clickbox_check">
							<div class="checks">
								<input type="checkbox" name="all" id="ex_chk_1">
								<label for="ex_chk_1"></label>
							</div>
						</div>
					</div>
					<div class="checkbox_content">
						<div class="checkbox_text">
							- 이용방법을 모르겠습니다.
						</div>
						<div class="clickbox_check">
							<div class="checks">
								<input type="checkbox" name="all" id="ex_chk_2">
								<label for="ex_chk_2"></label>
							</div>
						</div>
					</div>
					<div class="checkbox_content">
						<div class="checkbox_text">
							- 쓸모 없는 것 같습니다.
						</div>
						<div class="clickbox_check">
							<div class="checks">
								<input type="checkbox" name="all" id="ex_chk_3">
								<label for="ex_chk_3"></label>
							</div>
						</div>
					</div>
					<div class="checkbox_content">
						<div class="checkbox_text">
							- 닉네임이 마음에 안 들어서 재가입합니다.
						</div>
						<div class="clickbox_check">
							<div class="checks">
								<input type="checkbox" name="all" id="ex_chk_4">
								<label for="ex_chk_4"></label>
							</div>
						</div>
					</div>
					<div class="checkbox_content">
						<div class="checkbox_text">
							- 게임기록을 초기화하기 위해 재가입합니다.
						</div>
						<div class="clickbox_check">
							<div class="checks">
								<input type="checkbox" name="all" id="ex_chk_5">
								<label for="ex_chk_5"></label>
							</div>
						</div>
					</div>
					<div class="checkbox_content">
						<div class="checkbox_text">
							- 기타
						</div>
						<div class="clickbox_check">
							<div class="checks">
								<input type="checkbox" name="all" id="ex_chk_6">
								<label for="ex_chk_6"></label>
							</div>
						</div>
					</div>
					<div class="text_box" style='margin-top:8px; margin-bottom:10px;'>
						더 자세히 말씀해 주시면 발전에 힘쓰겠습니다.
					</div>
					<form action="url" id="inputbox">
						<input name="uesr_name" placeholder="  탈퇴사유">
					</form>
				</div>
				<div id="clickbox_area">
					<input type="button" href="#" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="탈퇴취소"/>
					<!--class=close는 닫기 기능, 확인에는 다른링크 걸어야함-->
					<input type="button" href="" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;' value="확인"/>
				</div>
			</div>
		</div>
		<a href="#" class="openMask">검은 막 띄우기</a>
	</div>
</div>

<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div> <!--body를 닫는 태그입니다.-->
<?
include('./Footer_Module.php');
?>

