<?
include('./HeadTab_Module.php');
?>

<style>
#Main{
	height:80%;
	overflow:hidden;
}

#Main_container{
	height:100%;
	width:100%;
	padding-top:20px;
	padding-left:50px;
}

#Main_titlebar{
	width:100%;
	margin:5px 0 5px 0;
}
#Main_titlebar .title{
	float:left;
	font-size:25px;
	width:70%;
	color:#666666;
	margin-right:10px;
	margin:auto;
	margin-bottom:0px;
	padding-bottom:8px;
	font-weight:bold;
	border-bottom:2px solid #666666;
}
#Main_titlebar .subtitle{
	float:left;
	font-size:15px;
	margin:auto;
	margin-top:10px;
	margin-left:35px;
	margin-bottom:45px;
	font-weight:bold;
}

#inputbox{
	height:auto;
	width:100%;
	margin-left:150px;
	padding-left:20px;
	padding-top:10px;
}

#inputbox .container{
	height:auto;
	width:100%;
	display:table;
	padding-top:12px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}

#inputbox .major{
	float:left;
	font-size:15px;
	display:table-cell;
	width:85px;
	padding-top:5px;
	padding-left:5px;	
	font-weight:bold;
}

#inputbox .container input{
	display:table-cell;
	/*width:300px;휴대전화인증 들어오면 다시 300px로*/
	width:200px;
	height:30px;
	float:left;
}

#inputbox .container_phone{
	height:auto;
	width:100%;
	display:table;
	padding-top:12px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}

#inputbox .container_phone input{
	display:table-cell;
	width:193px;
	height:30px;
	float:left;
}


#inputbox .container_phone select{
	display:table-cell;
	width:100px;
	height:30px;
	font-size:8px;
	color:#a0a0a0;
	float:left;
}

#inputbox .help{
	height:auto;
	padding-top:0px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:100px;
	font-size:13px;
	color:#000000;
	position:static;
	float:left;
}

#inputbox .help_icon{
	margin-top:2px;
	height:18px;
	position:relative;
	bottom:0;
	left:3px;
}

#inputbox .help_icon img{;
	height:18px;
	position:relative;
	bottom:0;
}

.anything{
	float:left;
	margin:auto;
	width:30%;
}

.need_bar{
	display:table-cell;
	float:left;
	padding:0px 1px;
}

/*입력버튼 모양을 내기위한 기능set*/
.click_box{
	float:left;
	width:100px;
	display:table-cell;
	padding-left:10px;
}

.click_box button{
	position:absolute;
	width:80px;
	height:30px;
	font-size:14px;
	font-weight:200;
	/*font-stretch: ultra-condensed;*/
	border:1px solid #949494; /* transparent 테두리 없게하기*/
	padding:0;
	background:#f4f4f4;
	color:#000000;
	cursor:pointer;

}

.click_box input{
	width:80px;
	height:30px;
	opacity:0;
	position:relative; 
}


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
	width:80px;
	display:inline-block;
}

#clickbox_house .gray1{
	background:#ebebeb;
	border:1px solid #919191;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:80px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .gray1 a{
	text-decoration:none; 
}

#clickbox_house .gray2{
	background:#ebebeb;
	border:1px solid #919191;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:80px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .gray2 a{
	text-decoration:none; 
}

</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<div id="Main">
	<div id="Main_container">
		<div id="Main_titlebar">
			<div class="title">아이디 찾기</div>
			<div class="anything">&nbsp</div>
			<div class="anything">&nbsp</div>
			<div class="subtitle">회원정보에 등록한 휴대전화 번호와 같아야 <!--인증번호를 받으실 수 있습니다.-->조회 가능합니다.</div>
		</div>
		<form action="./idFind2.php" name="form" id="inputbox" method="post">
		<!--	<div class="container">
				<div class="major">이&nbsp&nbsp&nbsp&nbsp&nbsp름</div>
				<input name="name" placeholder="이름을 입력하세요." style="padding-left:5px;"> <br>
			</div>-->
			<div class="container_phone">
				<div class="major">휴대전화</div>
		<!--		<select type="text" name="area_code"><!--datalist 옵션도 괜츈함
					<option data-countryCode=”KR” value=”82″ Selected>Korea South (+82)</option>
				</select>-->
				<div class="need_bar"></div>
				<input type="text" name="phone" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  placeholder="휴대전화번호" style="width:200px;padding-left:5px;"><!--전화인증들어오면 200px랑 /div지우기-->
		<!--		<div class="click_box">
					인증번호 발송 유료서비스 http://www.phps.kr/smshosting_manual.html 참조
				<button style="width:110px;">인증번호 받기</button>
					<input type="file" value="파일 업로드"style="width:100px;" name="cafe_logo">
				</div>
			</div>
			<div class="container">
				<div class="major">&nbsp</div>  
				<input name="code_input" placeholder="  인증번호 숫자 6자리 입력"> <br>
			</div>-->
			</div>
			<br><br>
			<div class="help">인증번호가 오지 않나요</div>
			<div class="help_icon">
				<img src="images\icon\icon_facebook.png" style="Width:20px;height:20px;cursor:pointer" onclick="location.href='https://www.facebook.com/2scaper/?ref=ts&fref=ts'"/>
			</div>
		
		<!--대성이가 짠건데 뭔가이상한데?
		<div id="clickbox_area">
			<div id="clickbox_house">
				<a href="./index.php"><div class="gray1">이전</div></a>
				<div class="empty_space">&nbsp</div>
				<a href=""><div class="gray2">다음</div></a>
			</div>
		</div>
		-->
		<div style="height:100px;text-align:left;width:100%;padding:30px 0 0 10%;">
				<button href="./index.php" style="border:none;background-color:#ccc;padding:3px 10px 3px 10px;">이전</button>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<button style="border:none;background-color:#ccc;padding:3px 10px 3px 10px;">다음</button>
		</div>
		</form>
	</div>
</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
