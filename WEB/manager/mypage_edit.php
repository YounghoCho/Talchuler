<?
include('./HeadTab_Module.php');
?>

<script>
	function popupWindowByMask_1(){
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
			popupWindowByMask_1();
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
</script>

<script>
	function popupWindowByMask_2(){
		//화면의 높이와 너비를 구한다.
		var maskHeight_2 = $(window).height();  
		var maskWidth_2 = $(document).width();  

		//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
		$('#mask').css({'width':maskWidth_2,'height':maskHeight_2});  
		// 플로팅 효과
		$('#mask').fadeIn(500); //시간 딜레이 1000=1s    
		$('#mask').fadeTo("slow",0.5); //띄우는 시간, 어둡기 투명도 조절

		//윈도우 같은 거 띄운다.
		$('.window_2').show();
	}

	$(document).ready(function(){
		//검은 막 띄우기
		$('.openMask_2').click(function(e){
			e.preventDefault();
			popupWindowByMask_2();
		});

		//닫기 버튼을 눌렀을 때
		$('.window_2 .close').click(function (e) {  
			//링크 기본동작은 작동하지 않도록 한다.
			e.preventDefault();  
			$('#mask, .window_2').hide();  
		});       
		/*
		//검은 막을 눌렀을 때
		$('#mask').click(function () {  
			$(this).hide();  
			$('.window_1').hide();  
		});     
		*/
	});
</script>

<script>
	function popupWindowByMask_3(){
		//화면의 높이와 너비를 구한다.
		var maskHeight_3 = $(window).height();  
		var maskWidth_3 = $(document).width();  

		//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
		$('#mask').css({'width':maskWidth_3,'height':maskHeight_3});  
		// 플로팅 효과
		$('#mask').fadeIn(500); //시간 딜레이 1000=1s    
		$('#mask').fadeTo("slow",0.5); //띄우는 시간, 어둡기 투명도 조절

		//윈도우 같은 거 띄운다.
		$('.window_3').show();
	}

	$(document).ready(function(){
		//검은 막 띄우기
		$('.openMask_3').click(function(e){
			e.preventDefault();
			popupWindowByMask_3();
		});

		//닫기 버튼을 눌렀을 때
		$('.window_3 .close').click(function (e) {  
			//링크 기본동작은 작동하지 않도록 한다.
			e.preventDefault();  
			$('#mask, .window_3').hide();  
		});       
		/*
		//검은 막을 눌렀을 때
		$('#mask').click(function () {  
			$(this).hide();  
			$('.window_1').hide();  
		});     
		*/
	});
</script>

<style>

/*어둡기를 조절하는 마스크(공통)*/
#mask{  
	  position:fixed;  
	  z-index:9000;  
	  background-color:#000;  
	  display:none;  
	  left:0;
	  top:0;
}
/*어둡기를 조절하는 마스크(공통)*/

/*팝업창 내부 클릭박스 디자인 영역(공통)*/
.popup_clickbox_area{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	height:50px;
	padding:10px;
}

.popup_clickbox_area input{
	height:100%;
	width: -webkit-calc(50% - 6px); /* for Chrome, Safari */
    width:    -moz-calc(50% - 6px); /* for Firefox */
    width:         calc(50% - 6px); /* for IE */
	font-size:14px;
	font-weight:bold;
	padding:5 0 5 0;
}
/*팝업창 내부 클릭박스 디자인 영역(공통)*/





</style>














<style>

/*대분류 영역*/
#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 220px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 220px); /* for Firefox */
    width :         calc(100% - 220px); /* for IE */
	height:auto; /*Main의 높이를 90%로 조절합니다.*/
	min-height:800px;
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

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	overflow:hidden;
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	margin:0 0 0 33;
	padding:15 0 30 26;
}

#Main_promise_area{
	overflow:hidden;
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	margin:0 0 0 33;
	padding:15 0 30 26;
}


/*대분류 영역*/

/*타이틀 영역*/

#title_area{
	width:100%;
}

#title_area .title{
	float:left;
	height:25px;
	font-size:25px;
	font-weight:bold;

}

#title_area .subtitle{
	float:right;
	font-size:17px;

}

/*타이틀 영역*/

/*메인 컨텐츠 부분*/



/*메인 컨텐츠 부분*/

.content_area{
	width:100%;
	font-size:15px;
	overflow:auto;
}

.content{
	height:30px;
	padding:10 0;
	width:100%;
	display:table;
}

.major{
	float:left;
	font-weight:bold;
	font-size:15px;
	padding:2 0;
	display:table-cell;
	width:25%;
	height:25px;
	vertical-align:meiddle;
}

.data{
	float:left;
	font-weight:medium;
	font-size:15px;
	padding:2 0;
	display:table-cell;
	width:35%;
	height:25px;
	color:#c3c3c3;
	vertical-align:meiddle;
}

.clickbox{
	float:left;
	display:table-cell;
	width:10%;
	height:25px;
	vertical-align:meiddle;
}

.clickbox input{
	width:80px;
	height:25px
}

/*메인 컨텐츠 부분*/


/*최저가 보장부분*/

#lowestPrice{
	width:100%;
}

.low_1{ /*최저가 보장, 체크박스, 알아보러가기*/
	width:100%;
	height:26px;
	float:left;
	font-size:12pt;
	display:table;
}
		
.sel_1{
	float:left;
	font-weight:bold;
	font-size:15px;
	padding:4 0;
	display:table-cell;
	vertical-align:middle;
	width:20%;
}

.sel_2{
	width:50%;
	float:left;
	font-size:12pt;
	padding:3 0;
	display:table-cell;
	vertical-align:middle;
}

.sel_2 input{
	float:left;
}

.sel_3{
	width:29%;
	padding:4 0;
	float:left;
	text-align:right;
	color:#ff6600;
	display:table-cell;
	vertical-align:middle;
}

.sel_3 a{
	color:#ff6600;
	float:left;
}

.low_2{
	width:100%;
	float:left;
	padding-top:10px;
	padding-left:20%;
	margin-bottom:10px;
}

.price_1{
	width:94.5%;
	padding-left:5.5%;
	float:left;
	color:#ff6600;
	font-size:10pt;
}

.btndiv{
	width:60%;
	height:30%;
	margin-left:15%;
	margin-top:3%;
}
.agreebtn{width:22px;height:22px;margin-right:10px;}
.btn{
	font-size:15px;
	width:60px;
	height:30px;
}

/*최저가 보장부분*/

/*클릭박스 디자인*/

#clickbox_area{
	width:100%;
	float:left;
	margin-top:30px;
}

#clickbox_house{
	width:70%;
	float:left;
	text-align:center;
}

#clickbox_house .empty_space{
	width:20px;
	display:inline-block;
}

#clickbox_house .rightblue{
	background:#66ccff;
	border:1px solid #06aeff;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .rightblue a{
	text-decoration:none; 
}

#clickbox_house .gray{
	background:#ebebeb;
	border:1px solid #919191;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .gray a{
	text-decoration:none; 
}

/*클릭박스 디자인*/



</style>




<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->

<?
$sql="select * from partner where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>
<div id="Main">
	<div id="Main_title_area">
		<div id="title_area">
			<div class="title">계정 정보 수정</div>
			<div class="subtitle">회원정보를 수정하실 수 있습니다.</div>
		</div>
	</div>
	<div id="Main_content_area">
		<div class="content_area">
			<div class="content">
				<div class="major">사장님 성함</div>
				<div class="data"><?echo $data['p_name']?></div>
			</div>
		
			<div class="content">
				<div class="major">업체명</div>
				<div class="data"><?echo $data['p_shopName']?></div>
			</div>

			<div class="content">
				<div class="major">사업자등록번호</div>
				<div class="data"><?echo $data['p_businessNumber']?></div>
			</div>
			
			<div class="content">
				<div class="major">아이디</div>
				<div class="data"><?echo $data['p_id']?></div>
			</div>

<style>

	/*비밀번호 변경*/
	.window_1{
		  display: none;
		  position:fixed;  
		  left:40%;
		  top:32%;
		  z-index:10000;
	}

	#note_1{
		background:#ffffff;
		width:300px;
		height:280px;
		padding:5 10;
	}

	#note_1 .title_box_1{
		width: -webkit-calc(100% - 10px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 10px); /* for Firefox */
		width:         calc(100% - 10px); /* for IE */
		border-bottom:2px solid #666666;
		margin:5px 5px 10px 5px;
	}

	#note_1 .title_1{
		font-size:12pt;
		text-align:center;
		padding-bottom:8px;
	}

	#note_1 .input_box_1{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		margin:0;
		padding:0 25px;
	}

	#note_1 .pw_box_area{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		overflow:auto;
		margin-top:5px;
	}

	#note_1 .pw_box_title_area{
		width:100%;
	}

	#note_1 .pw_box_title{
		font-size:11pt;
		float:left;
		color:#000000;
		padding-left:10px;
	}

	#note_1 .pw_box_input_area{
		width:100%;
		overflow:auto;
		margin-top:10px;
	}


	#note_1 .pw_box_input_area input{
		padding-left:5px;
		width:100%;
		height:30px;
		margin-top:3px;
		border:1px solid #56dcfc;
	}

	/*비밀번호 변경*/

	/*핸드폰번호 변경*/
	.window_2{
		  display: none;
		  position:fixed;  
		  left:35%;
		  top:35%;
		  z-index:10000;
	}

	#note_2{
		background:#ffffff;
		width:500px;
		height:215px;
		padding:5 10;
	}

	#note_2 .title_box_2{
		width: -webkit-calc(100% - 10px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 10px); /* for Firefox */
		width:         calc(100% - 10px); /* for IE */
		border-bottom:2px solid #666666;
		margin:5px 5px 10px 5px;
	}

	#note_2 .title_2{
		font-size:12pt;
		text-align:center;
		padding-bottom:8px;
	}

	#note_2 .input_box_2{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		margin:0;
		padding:0 25px;
	}

	#note_2 .phone_number_area_wrap{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		overflow:auto;
		padding:10px;
		background-color:#eeeeee;
	}

	#note_2 .phone_number_area{
		width: -webkit-calc(100% - 2px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 2px); /* for Firefox */
		width:         calc(100% - 2px); /* for IE */
		background-color:#ffffff;
		border:1px solid #cfcfcf;
		overflow:hidden;
	}

	#note_2 .phone_number_twobox{ /*국가번호-폰번호 영역*/
		width:100%;
		float:left;
		overflow:auto;
		border-bottom:1px solid #ebebeb;
	}

	#note_2 .phone_number_localnum{
		width:30%;
		overflow:auto;
		float:left;
	}

	#note_2 .phone_number_localnum select{
		width:100%;
		height:44px;
		font-size:10pt;
		font-weight:bold;
		color:#000000;
		border:none;
	}

	#note_2 .box_in_box{
		width:70%;
		overflow:auto;
		float:left;
	}

	#note_2 .phone_number_phonenum{
		width:100%;
		position:relative;
		float:left;
	}

	#note_2 .phone_number_phonenum input{
		width:100%;
		height:44px;
		font-size:10pt;
		font-weight:bold;
		color:#666666;
		float:left;
		border:none;
		padding-left:10px;
	}

	#note_2 .box_in_box_large{
		width:100%;
		overflow:auto;
		float:left;
	}

	#note_2 .proof_number_phonenum{
		width:100%;
		position:relative;
		float:left;
	}

	#note_2 .proof_number_phonenum input{
		width:100%;
		height:44px;
		font-size:10pt;
		font-weight:bold;
		color:#666666;
		float:left;
		border:none;
		padding-left:10px;
	}

	#note_2 .button_in_input{
		width:100px;
		overflow:auto;
		position:absolute;
		right:7;
		top:7;
	}

	#note_2 .button_in_input input{
		width:100%;
		height:30px;
		font-size:8pt;
		text-align:center;
		padding:0;
		background:none;
		border:1px solid #cdcdcd;
	}

	/*핸드폰번호 변경*/

	/*이메일 변경*/
	.window_3{
		  display: none;
		  position:fixed;  
		  left:40%;
		  top:35%;
		  z-index:10000;
	}

	#note_3{
		background:#ffffff;
		width:350px;
		height:185px;
		padding:5 10;
	}

	#note_3 .title_box_3{
		width: -webkit-calc(100% - 10px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 10px); /* for Firefox */
		width:         calc(100% - 10px); /* for IE */
		border-bottom:2px solid #666666;
		margin:5px 5px 10px 5px;
	}

	#note_3 .title_3{
		font-size:12pt;
		text-align:center;
		padding-bottom:8px;
	}

	#note_3 .input_box_3{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		margin:0;
		padding:0px;
	}

	#note_3 .email_change_area{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		overflow:auto;
		padding:0 20px;
	}

	#note_3 .email_change_answer{
		width:100%;
		font-size:11pt;
		float:left;
		color:#000000;
		margin-bottom:26px;
	}

	#note_3 .email_change_input_area{
		width:100%;
		overflow:auto;
		margin-top:10px;
	}

	#note_3 .email_change_input_area input{
		padding-left:5px;
		width:100%;
		height:30px;
		margin-top:3px;
		border:1px solid #56dcfc;
	}
	/*이메일 변경*/
</style>

			<!--비밀번호변경 팝업 S-->
			<form action="./change_password.php" id="passform" method="POST">
				<div id="mask"></div>
				<div class="window_1">
					<div id="note_1">
						<div class="title_box_1">
							<div class="title_1">비밀번호 변경</div>
						</div>
						<div class="input_box_1">
							<div class="pw_box_area">
								<div class="pw_box_title_area">
									<div class="pw_box_title">현재 비밀번호</div>
								</div>
								<div class="pw_box_input_area">
									<input type="password" name="pass_now" maxlength="16" style="" placeholder="">
								</div>
							</div>
							<div class="pw_box_area">
								<div class="pw_box_title_area">
									<div class="pw_box_title">새 비밀번호</div>
								</div>
								<div class="pw_box_input_area">
									<input type="password" name="pass_new" maxlength="16" style="" placeholder="">
								</div>
							</div>
							<div class="pw_box_area">
								<div class="pw_box_title_area">
									<div class="pw_box_title">새 비밀번호 확인</div>
								</div>
								<div class="pw_box_input_area">
									<input type="password" name="pass_check" maxlength="16" style="" placeholder="">
								</div>
							</div>
						</div>
						<div class="popup_clickbox_area">
							<input type="button" href="#" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="취소"/>
							<!--class=close는 닫기 기능, 확인에는 다른링크 걸어야함-->
							<input type="button" href="" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;' value="저장하기" onclick="sendform('passform')"/>
						</div>
					</div>
				</div>
			</form>
			<!--비밀번호변경 팝업 E-->

			<div class="content">
				<div class="major">비밀번호</div>
				<div class="data"><?$i=strlen($data['p_pw']); for($k=0;$k<$i;$k++)echo("*");?></div>
				<a href="#" class="openMask_1">
					<div class="clickbox">
						<input type="button" value="변경">
					</div>
				</a>
			</div>

			<!--휴대폰번호변경 팝업 S-->
			<form action="./change_phone.php" id="phoneform" method="POST">
				<div id="mask"></div>
				<div class="window_2">
					<div id="note_2">
						<div class="title_box_2">
							<div class="title_2">휴대폰번호 변경</div>
						</div>
						<div class="input_box_2">
							<div class="phone_number_area_wrap">
							새로운 연락처
								<div class="phone_number_area">
									<!--<div class="phone_number_twobox">
										<div class="phone_number_localnum">
											<select>
												<option data-countryCode="GB" value="44" selected>UL(+44)</option>
											</select>
										</div>
										<div class="box_in_box">
											<div class="phone_number_phonenum">
												<input type="text" maxlength="11" style="" placeholder="휴대전화번호">
												<div class="button_in_input">
													<input type="button" value="인증" class="gray_button">
												</div>
											</div>
										</div>
									</div>
									<div class="box_in_box_large">
										<div class="proof_number_phonenum">
											<input type="text" maxlength="6" style="" placeholder="인증번호">
											<div class="button_in_input">
												<input type="button" value="확인" class="gray_button">
											</div>
										</div>
									</div>-->
									
									<input type="text" name="phone" style="height:30px;width:100%;border:none;padding-left:5px;"/>
								</div>
							</div>
						</div>
						<div class="popup_clickbox_area">
							<input type="button" href="#" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="취소"/>
							<!--class=close는 닫기 기능, 확인에는 다른링크 걸어야함-->
							<input type="button" href="" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;' value="저장하기" onclick="sendform('phoneform')"/>
						</div>
					</div>
				</div>
			</form>
			<!--휴대폰번호변경 팝업 E-->
			<div class="content">
				<div class="major">휴대폰번호</div>
				<div class="data"><?echo $data['p_phone']?></div>
				<a href="#" class="openMask_2">
					<div class="clickbox">
						<input type="button" value="변경">
					</div>
				</a>
			</div>

			<!--이메일변경 팝업 S-->
			<form action="./change_email.php" id="emailform" method="POST">
				<div id="mask"></div>
				<div class="window_3">
					<div id="note_3">
						<div class="title_box_3">
							<div class="title_3">이메일 변경</div>
						</div>
						<div class="input_box_3">
							<div class="email_change_area">
								<div class="email_change_answer">변경할 이메일을 입력해주세요.</div>
								<div class="email_change_input_area">
									<input type="text" name="email" style="" placeholder="">
								</div>
							</div>
						</div>
						<div class="popup_clickbox_area">
							<input type="button" href="#" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="취소"/>
							<!--class=close는 닫기 기능, 확인에는 다른링크 걸어야함-->
							<input type="button" href="" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;' value="저장하기" onclick="sendform('emailform')"/>
						</div>
					</div>
				</div>
			</form>
			<!--이메일변경 팝업 E-->
		
			<div class="content">
				<div class="major">이메일</div>
				<div class="data"><?echo $data['p_email']?></div>
				<a href="#" class="openMask_3">
					<div class="clickbox">
						<input type="button" value="변경">
					</div>
				</a>
			</div>
		</div>
	</div>
	<form action="change_minprice.php" id="minform" method="post">
		<div id="Main_promise_area">
			<div id="lowestPrice">
				<div class="low_1">
					<div class="sel_1">최저가 보장</div>
					<div class="sel_2">
						<input type="checkbox" name="agreement5" id="agreement5" class="agreebtn">
						<div style='float:left;'>동의 후 신청</div>
					</div>
					<div class="sel_3">
						<a href="http://talchuler.com/manager/banner_lowest.html" onclick="window.open(this.href, '_blank'); return false;">
							최저가 보장 알아보러 가기 >
						</a>
					</div>
				</div>
				<div class="low_2">
					<div class="price_1">사장님 업체의 게임가격을 전국 사이트 중 최저가로 표기합니다.</div>
					<div class="price_1">(어느곳에서도 할인하지 않으실 경우 기본가격으로 표기하셔도 좋습니다.)</div>
				</div>
			</div>
		</div>
	</form>
	<style>


	</style>


	<div id="clickbox_area">
		<div id="clickbox_house">
			<div class="rightblue" onclick="sendform('minform')">확&nbsp&nbsp&nbsp인</div>
		</div>
	</div>
	
</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요--> 
</div> 
<? 
include('./Footer_Module.php'); 
?>
<script>
function sendform(value){
	var f = document.getElementById(value);
	f.submit();
}
</script>