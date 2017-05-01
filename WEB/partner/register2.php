<?
include('./HeadTab_Module.php');
?>

<style>

#Main{
	height:780px;
	overflow:hidden;
}

#Main_container{
	height:100%;
	width:100%;
	padding-top:20px;
	padding-left:4%;
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
.btndiv{
	width:80%;
	margin-left:4%;
	text-align:center;
	padding-bottom:40px;
}
.btn{
	margin-left:5%;
	font-size:15px;
	width:60px;
	height:30px;
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
	margin-left:27px;/*input상자의 높이는 총 세군데에서 27px로 높이를 고정한다.*/
	padding-left:20px;
	padding-top:10px;
}

#inputbox .gray_area{
	width : -webkit-calc(85% - 20px); /* for Chrome, Safari */
    width :    -moz-calc(85% - 20px); /* for Firefox */
    width :         calc(85% - 20px); /* for IE */
	height:30px;
	line-height:27px;
	background-color:#dddddd;
	margin-left:-50px;
	margin-top:30px;
	clear:both;
	padding:2 0 3 20px;
	font-weight:bold;
}

#inputbox .container{
	height:auto;
	width:100%;
	display:table;
	padding-top:8px;
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
	width:130px;
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
	height:27px;
	float:left;
	padding-top:3px;
}


#inputbox .help{
	height:auto;
	padding-top:0px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:143px;
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
	height:27px;
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
	padding-top:5px;
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
				<form action="./register3.php" id="inputbox" name="register2form" method="POST">
					<input type="hidden" name="agreement1" value="<?echo ($_POST['agreement1'])?>">
					<div class="gray_area">
						계정 정보
					</div>
					<div class="container">
						<div class="major">아이디</div>
						<input type="text" maxlength="16" style="padding-left:5px;" name="id" id="id" placeholder="아이디를 입력해주세요"> <br>
					</div>
					<div class="help">영문/숫자 조합 4자리-16자리</div>
					<div class="container">
						<div class="major">비밀번호</div>
						<input type="password" maxlength="16" style="padding-left:5px;" name="pw" id="pw" placeholder="비밀번호를 입력해주세요"><p><!--&nbsp;&nbsp;암호보안수준:--></p>
					</div>
					<div class="help">영문 대소문자/숫자/특수문자 중 두가지 이상 조합으로 8~16 자리</div>
					<div class="container">
						<div class="major">비밀번호확인</div>
						<input name="pw_check" maxlength="16" style="padding-left:5px;"type="password" placeholder="비밀번호를 다시 입력해주세요"> <br>
					</div>
					<!--나뉘는 부분-->
					<div class="gray_area" >
						사장님 정보
					</div>
					<div class="container">
						<div class="major">사장님 성함</div>
						<input name="name" type="text" maxlength="5" style="padding-left:5px;" placeholder="사업자 등록증상 대표자명"> <br>
					</div>
					<div class="container2">
						<div class="major">업체명</div>
						<input name="shopName" type="text" maxlength="16" style="padding-left:5px;" placeholder="사업자 등록증상 업체명"> <br>
					</div>
					<div class="container_address">
						<div class="major">휴대폰번호</div>
						<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="3" style="padding-left:5px;width:60px;" name="phone1">
						<div class="need_space">&nbsp</div>
						<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="4" style="padding-left:5px;width:60px;" name="phone2">
						<div class="need_space">&nbsp</div>
						<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="4" style="padding-left:5px;width:60px;" name="phone3">
					</div>
					<div class="container_address">
						<div class="major">업체 대표번호</div>
						<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="3" style="padding-left:5px;width:60px;" name="tele1">
						<div class="need_space">&nbsp</div>
						<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="4" style="padding-left:5px;width:60px;" name="tele2">
						<div class="need_space">&nbsp</div>
						<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="4" style="padding-left:5px;width:60px;" name="tele3">
					</div>
					<div class="container2" style='	padding-bottom:20px;'>
						<div class="major">사업자 등록번호</div>
						<input name="businessNumber" onKeyPress="return numkeyCheck(event)" maxlength="11" style="padding-left:5px;width:131px;"> <br>
					</div>
					<div class="container_address">
						<div class="major">업체 주소</div>
						<input type="text" id="sample6_postcode" name="postNumber1"  style="width:60px;padding-left:5px;">
						<input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기" style="background-color:#eee;border:1px solid #aaa;font-weight:bold;padding:2px 3px 2px 3px;margin-left:10px;width:100px" >
					</div>

						
						

					<div class="container2" style='padding-top:2px;	padding-bottom:0px;'>
						<div class="major">&nbsp</div>
						<input type="text" name="location1" id="sample6_address" disabled  style="padding-left:5px;width:340px;"><br>
					</div>
					<div class="container2">
						<div class="major">&nbsp</div>
						<input type="text" name="location2" id="sample6_address2" placeholder="나머지 주소를 압력해주세요" style="padding-left:5px;width:340px;"><br>
					</div>
					<div class="container_address">
						<div class="major">이메일</div>
						<input type="text" name="email1" style='padding-left:5px;width:120px;'>
						<div class="need_bar">&nbsp;@&nbsp;</div>
						<input type="text" name="email2" style='padding-left:5px;width:120px;'> 
					</div>
					<div class="container_address">
						<div class="major"></div>
						<input type="checkbox" name="agreement2" style='width:20px;height:20px;margin-right:10px;' checked/>탈출러의 다양한 이벤트 및 소식을 받아보실 수 있습니다.
						<div class="need_bar"> </div>						
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
	<div class="btndiv">
		<a href="./register1.php"><input type="button" class="btn" value="이전" style="background-color:#eee;border:1px solid #aaa;font-weight:bold;cursor:pointer;"></a>
		<input type="button" class="btn" value="다음" onclick="module2()" style="background-color:#eee;border:1px solid #aaa;font-weight:bold;cursor:pointer;">
	</div>

<!--주소검색-->
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('sample6_address').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('sample6_address2').focus();
            }
        }).open();
    }
</script>
	<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
<script>
function module2(){
	var f = document.register2form; //form을 form의 name으로 받아오는 방법.
	var id= document.getElementById('id');
	var pw= document.getElementById('pw');

	if(f.id.value==""){
		alert("아이디를 입력해주세요.");
	}else if(id.value.length<4){
		alert("아이디는 4자리 이상입니다.");
	}else if(f.pw.value==""){
		alert("비밀번호를 입력해주세요.");
	}else if(pw.value.length<8){
		alert("비밀번호는 8자리 이상입니다.");
	}else if(f.pw_check.value!=f.pw.value){
		alert("비밀번호가 같지 않습니다.");
	}else if(f.name.value==""){
		alert("사장님 성함을 입력해주세요.");
	}else if(f.shopName.value==""){
		alert("업체명을 입력해주세요.");
	}else if(f.phone1.value==""){
		alert("휴대폰 번호를 입력해주세요.");
	}else if(f.phone2.value==""){
		alert("휴대폰 번호를 입력해주세요.");
	}else if(f.phone3.value==""){
		alert("휴대폰 번호를 입력해주세요.");
	}else if(f.tele1.value==""){
		alert("업체 대표번호를 입력해주세요.");
	}else if(f.tele2.value==""){
		alert("업체 대표번호를 입력해주세요.");
	}else if(f.tele3.value==""){
		alert("업체 대표번호를 입력해주세요.");
	}else if(f.businessNumber.value==""){
		alert("사업자 등록번호를 입력해주세요.");
	}else if(f.postNumber1.value==""){
		alert("우편번호를 입력해주세요.");
	}else if(f.location1.value==""){
		alert("주소를 입력해주세요.");
	}else if(f.location2.value==""){
		alert("정확한 주소를 입력해주세요.");
	}else if(f.email1.value==""){
		alert("이메일을 입력해주세요.");
	}else if(f.email2.value==""){
		alert("이메일을 입력해주세요.");
	}else{
		f.submit();
	}
}
</script>
<script type="text/javascript"> 
//숫자만 입력되게하기
	function numkeyCheck(e) { 
		var keyValue = event.keyCode; 
		if( ((keyValue >= 48) && (keyValue <= 57))) 
		return true; 
		else return false;
		} 
</script>
