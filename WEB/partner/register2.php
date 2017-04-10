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
	width:85%;
	color:#666666;
	margin-right:10px;
	margin:auto;
	margin-bottom:0px;
	padding-bottom:8px;
	font-weight:bold;
	border-bottom:2px solid #666666;
	position:relative;
}


@media screen and (max-width:820px){
	#Main_titlebar .step{
		display:none;
	}
}

#Main_titlebar .step{
	float:right;
	font-size:14px;
	position:absolute;
	bottom:10px;
	right:0px;
	color:#b8b8b8;
}

#Main_titlebar .step b{
	font-weight:bold;
	color:#000000;
}


#inputbox{
	height:auto;
	width:100%;
	margin-left:30px;
	padding-left:20px;
	padding-top:10px;
}

#inputbox .gray_area{
	width : -webkit-calc(85% - 20px); /* for Chrome, Safari */
    width :    -moz-calc(85% - 20px); /* for Firefox */
    width :         calc(85% - 20px); /* for IE */
	height:20px;
	background-color:#dddddd;
	margin-left:-50px;
	clear:both;
	padding:2 0 3 20px;
	font-weight:bold;
}

#inputbox .container{
	height:auto;
	width:100%;
	display:table;
	padding-top:17px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}

#inputbox .container p{
	font-size:14px;
	padding-top:5px;
	margin-left:10px;
	margin:0;
	float:left;
	font-weight:bold;
	color:#6d6d6d;
}
#inputbox .major{
	float:left;
	font-size:14px;
	display:table-cell;
	width:110px;
	padding-top:5px;
	padding-left:5px;	
	font-weight:bold;
	color:#999999;
}

#inputbox .container input{
	display:table-cell;
	width:200px;
	height:30px;
	float:left;
	padding-top:3px;
}

#inputbox .container2{
	height:auto;
	width:100%;
	display:table;
	padding-top:6px;
	padding-bottom:10px;
	padding-right:0px;
	padding-left:8px;
}

#inputbox .container2 input{
	display:table-cell;
	width:200px;
	height:30px;
	float:left;
	padding-top:3px;
}


#inputbox .help{
	height:auto;
	padding-top:0px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:123px;
	font-size:12px;
	color:#999999;
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


#inputbox .container_address{
	height:auto;
	width:100%;
	display:table;
	padding-top:6px;
	padding-bottom:5px;
	padding-right:0px;
	padding-left:8px;
}

#inputbox .container_address input{
	display:table-cell;
	width:80px;
	height:30px;
	float:left;
	padding-top:3px;
}

.anything{
	float:left;
	margin:auto;
	width:85%;
	height:15px;
}

.need_space{
	display:table-cell;
	float:left;
	padding:0px 2px;
}

.need_bar{
	display:table-cell;
	float:left;
	padding:0px 10px;
	color:#999999;
}


/*체크박스 디자인*/
input[type=checkbox] {  
    display: none;  
}

input[type=checkbox] + label{
    display: inline-block;  
    cursor: pointer;  
    position: relative;  
    padding-left: 25px;  
    margin-right: 15px;  
    font-size: 13px;
}

input[type=checkbox]+ label:before {     
    content: "";  
    display: inline-block; 
    width: 20px;  
    height: 20px;  
    margin-right: 10px;  
    position: absolute;  
    left: 0;  
    bottom: 1px;  
    background-color: #e3e3e3;  /*체크박스 color*/
    border-radius: 2px; 
    box-shadow: inset 0px 1px 1px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);  
}
input[type=checkbox]:checked + label:before { 

    content: "\2714";  /* 체크모양 */
    text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);  
    font-size: 18px; 
    font-weight:800; 
    color: #ffffff;  
    background:#06aeff;
    text-align: center;  
    line-height: 18px;  
} 
/*체크박스 디자인*/





</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<div id="Main">
	<div id="Main_container">
		<div id="Main_titlebar">
			<div class="title">회원가입
				<div class="step">1.약관동의 > <b>2.회원정보입력</b> > 3.업체등록요청 > 4.가입완료</div>
			</div>
			<div class="anything">&nbsp</div>
		</div>
		<div class="content_box">
			<div class="inputbox">
				<form action="url" id="inputbox">
					<div class="gray_area">
						계정 정보
					</div>
					<div class="container">
						<div class="major">아이디</div>
						<input name="store_id" placeholder="  아이디를 입력해주세요"> <br>
					</div>
					<div class="help">영문/숫자 조합 4자리-16자리</div>
					<div class="container">
						<div class="major">비밀번호</div>
						<input name="store-pw" placeholder="  비밀번호를 입력해주세요"><p>&nbsp&nbsp&nbsp암호보안수준:</p>
					</div>
					<div class="help">영문 대소문자/숫자/특수문자 중 두가지 이상 조합으로 8~16 자리</div>
					<div class="container">
						<div class="major">비밀번호확인</div>
						<input name="store_pw2" placeholder="  비밀번호를 다시 입력해주세요"> <br>
					</div>
				</form>
			</div>
			
			<div class="inputbox">
				<form action="url" id="inputbox">
					<div class="gray_area">
						사장님 정보
					</div>
					<div class="container">
						<div class="major">사장님 성함</div>
						<input name="user_name" placeholder="  사업자 등록증상 대표자명"> <br>
					</div>
					<div class="container2">
						<div class="major">업체명</div>
						<input name="store_name" placeholder="  사업자 등록증상 업체명"> <br>
					</div>
					<div class="container_address">
						<div class="major">휴대폰번호</div>
						<input type="text" name="phone_number">
						<div class="need_space">&nbsp</div>
						<input type="text" name="phone_number">
						<div class="need_space">&nbsp</div>
						<input type="text" name="phone_number">
					</div>
					<div class="container_address">
						<div class="major">업체 대표번호</div>
						<input type="text" name="company_main">
						<div class="need_space">&nbsp</div>
						<input type="text" name="company_main">
						<div class="need_space">&nbsp</div>
						<input type="text" name="company_main">
					</div>
					<div class="container2" style='	padding-bottom:20px;'>
						<div class="major">사업자 등록번호</div>
						<input name="store_numvber"> <br>
					</div>
					<div class="container_address">
						<div class="major">업체 주소</div>
						<input type="text" name="store_address" style='width:72px;'>
						<div class="need_bar"> - </div>
						<input type="text" name="store_address" style='width:72px;'> 
					</div>
					<div class="container2" style='padding-top:2px;	padding-bottom:0px;'>
						<div class="major">&nbsp</div>
						<input name="store_address_add" style='width:320px;' placeholder="  사업자 등록증상 업체주소를 입력해주세요"> <br>
					</div>
					<div class="container2">
						<div class="major">&nbsp</div>
						<input name="store_address_add2" style='width:320px;' placeholder="  나머지 주소를 압력해주세요"> <br>
					</div>
					<div class="container_address">
						<div class="major">이메일</div>
						<input type="text" name="address" style='width:170px;'>
						<div class="need_bar"> @ </div>
						<input type="text" name="address" style='width:170px;'> 
					</div>
					
				</form>
			</div>
		</div>

	</div>
</div>

<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
