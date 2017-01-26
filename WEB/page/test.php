<?
include("./include_head.php");
?>
<head>
<style>
.modal{
	display:none;
	position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
    padding-top: 60px;
	-webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
#pad{
	position:absolute;
	bottom:50%;
	right:40%;
	width:20%;
	height:10%;
	border:none;
	background-color:#EBEBEB;
	color:#595757;
	font-weight: bold;
}
#pad a div{
	color:#595757;
}
#cancel{
	border:none;
	background-color:#fff;
	color:#9fa0a0;
	border-radius:8px;
	height:33px;
	line-height:100%;
	box-shadow: 3px 1px 8px 1px lightgray;
	font-size:120%;
}

</style>
</head>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>이메일 회원가입</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>이메일 회원가입</span></div>
				<div class="graybox">
					
				   <form name="joinform" method="post" action="join_insert.php">
					<div class="topbox">
						<div class="inputbox">
							<input id="e" name="useremail" type="text" class="txt st04" placeholder="이메일을 입력해주세요." />

							<script>
							function email(){
								var test=document.getElementById('e').value;
								var echeck=test.indexOf("@");
								if(echeck==-1){
									alert("틀린 이메일 형식입니다.");
									return false;
								}
								var email=document.getElementById('e').value;
								location.href="./email_check.php?email="+email;
								}
							</script>
							
							<a onClick="email()" class="btn_gray">중복확인</a>
						</div>
						<div class="inputbox">
							<input id="p1" name="userpassword" type="password" class="txt st04" placeholder="비밀번호를 입력해주세요. ( 영문,숫자 포함 6~20자 )" />
						</div>
						<div class="inputbox">
							<input id="p2" name="userpassword_check" type="password" class="txt st04" placeholder="비밀번호를 한번 더 입력하세요." />
						</div>
						<div class="inputbox">
							<input id="n" name="nickname" type="text" class="txt st04" placeholder="닉네임을 입력하세요. ( 한글,영문,숫자 포함 2~10자 )" />
							
							<script>
							function nick(){
								var nick=document.getElementById('n').value;
								location.href="./nickname_check.php?nick="+nick;
								}
							</script>
							
							<a onClick="nick()" class="btn_gray">중복확인</a>
						</div>
						<!---->
						<div class="inputbox">
							<input id="t" name="nickname" type="text" class="txt st04" placeholder="핸드폰 번호를 입력하세요." />							
							<a onclick="document.getElementById('id01').style.display='block'" class="btn_gray">번호인증</a>
						</div>
						<div class="inputbox">
							<input id="confirm" name="confirm" type="text" class="txt st04" placeholder="인증번호를 입력해주세요" />
							<a onclick="" class="btn_gray">인증</a>
	
						</div>
					
						<div class="lchkbox">
							<label class="ichk"><input id="check1" type="checkbox"><i></i><span>서비스 이용약관 동의</span></label>
						</div>
						<div class="policybox">
							서비스 이용약관서비스
							서비스 이용약관서비스
							서비스 이용약관서비스
						</div>
						<div class="lchkbox">
							<label class="ichk"><input id="check2" type="checkbox"><i></i><span>개인정보 수집 이용 동의</span></label>
						</div>
						<div class="policybox">
							개인정보 수집 이용
							개인정보 수집 이용
							개인정보 수집 이용
						</div>
						<div class="btncenter"><div class="btn_blue" onClick="join()">가입완료</div></div>
						<p class="desc">비밀번호 분실시 이메일을 통해 확인하므로, 정확하게 입력해주세요.</p>
					</div>
				   </form>

				</div>
			</div>
		</div>
	</div>


<?
include("./include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>

<!---------------인증번호 전송 구역 S------------------>
	<span id="id01" class="modal">
	<div id="pad">
	<!----------------인증번호 form S--------------->
		<div style="display:none;">
								<script type = "text/javascript">

									function loadJSON(){
										var data_file = "./sms/calljson.php";
										var http_request = new XMLHttpRequest();
										try{
											// Opera 8.0+, Firefox, Chrome, Safari
											http_request = new XMLHttpRequest();
										}catch (e){
											// Internet Explorer Browsers
											try{
												http_request = new ActiveXObject("Msxml2.XMLHTTP");

											}catch (e) {

												try{
													http_request = new ActiveXObject("Microsoft.XMLHTTP");
												}catch (e){
													// Eror
													alert("지원하지 않는브라우저!");
													return false;
												}

											}
										}
										http_request.onreadystatechange = function(){
											if (http_request.readyState == 4  ){
												// Javascript function JSON.parse to parse JSON data
												var jsonObj = JSON.parse(http_request.responseText);
												if(jsonObj['result'] == "Success"){
													var aList = jsonObj['list'];
													var selectHtml = "<select name=\"sendPhone\" onchange=\"setPhoneNumber(this.value)\">";
													selectHtml += "<option value=''>발신번호를 선택해주세요</option>";
													for(var i=0; i < aList.length; i++){
														selectHtml += "<option value=\"" + aList[i] + "\" selected>";
														selectHtml += aList[i];
														selectHtml += "</option>";
													}
													selectHtml += "</select>";
													document.getElementById("sendPhoneList").innerHTML = selectHtml;

													var val="010-5625-1946";
													var numList = val.split("-");
													document.smsForm.sphone1.value=numList[0];
													document.smsForm.sphone2.value=numList[1];
													if(numList[2] != undefined){
														document.smsForm.sphone3.value=numList[2];
													}


												}
											}
										}

										http_request.open("GET", data_file, true);
										http_request.send();
									}

								</script>
							</head>
							<body onload="loadJSON()">
							<?
							include("./include.php");
							$credit=rand(100000,999999);
							?>
							<form method="post" name="smsForm" action="./sms/smssend.php">
								<input type="hidden" name="action" value="go">
								발송타입 <span><input type="radio" name="smsType" value="S" checked>단문(SMS)</span> <br />
								제목 : <input type="text" name="subject" value="탈출러"><br />
								전송메세지 <textarea name="msg" cols="30" rows="10" style="width:455px;">본인 인증 코드는 [<?echo($credit)?>] 입니다.
								</textarea>
								<?
								$sql="insert into credit credit='".$credit."'";
								mysql_query($sql);
								?>
								<br />받는 번호 <input type="text" name="rphone" value="">
								<br />이름삽입번호 <input type="text" name="destination" value="" size=80>
								<br />
								보내는 번호  <input type="hidden" name="sphone1" >
								<input type="hidden" name="sphone2" >
								<input type="hidden" name="sphone3">
								<span id="sendPhoneList"></span>
								<br />예약 날짜 <input type="text" name="rdate" maxlength="8">
								<br />예약 시간 <input type="text" name="rtime" maxlength="6"> 
								<br />return url <input type="text" name="returnurl" maxlength="64" value="" >
								<br /> test flag <input type="text" name="testflag" maxlength="1" value="Y"> 
								<br />nointeractive <input type="text" name="nointeractive" maxlength="1">
								<br />반복설정 <input type="checkbox" name="repeatFlag" value="N">
								<br /> 반복횟수 <select name="repeatNum">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select> 예) 1~10회 가능.
								<br />전송간격<select name="repeatTime"> 예)15분 이상부터 가능.
									<option value="15">15</option>
									<option value="20">20</option>
									<option value="25">25</option>
								</select>분마다		
							</form>
			</div>
				<button onclick=lets() style="width:100%;height:100%;">인증번호 전송</button>

			<script>
			function lets(){
			var lets=document.smsForm;
			lets.submit();
			}
			</script>           
	<!----------------인증번호 form E--------------->
	</div>						
	</span>
<!---------------인증번호 전송 구역 E---------------->
</body>
</html>

<script>
function join(){
    var f = document.joinform;
/*
	if(!document.getElementById('check1').checked){
		alert('서비스 약관에 동의해주세요');
		return false;
	}
	if(!document.getElementById('check2').checked){
		alert('개인정보 수집 이용 동의해주세요');
		return false;
	}
    if(f.useremail.value == ""){
        alert("이메일을 입력해 주세요.");
        return false;
    }
    if(f.nickname.value == ""){
        alert("닉네임을 입력해 주세요.");
        return false;
    }


	var pass=document.getElementById('p1').value;
	var passlen=pass.length;
	if(passlen<4){
		alert("비밀번호는 4자리 이상 입력해주세요.");
		return false;
	}

    if(f.userpassword.value == ""){
        alert("비밀번호를 입력해 주세요.");
        return false;
    }
    if(f.userpassword.value != f.userpassword_check.value){
        alert("비밀번호를 다시 확인해 주세요.");
        return false;
    }

	var email=document.getElementById('e').value;
	var echeck=email.indexOf("@");
	if(echeck==-1){
		alert("없는 이메일 주소입니다.");
		return false;
	}*/
	 f.submit();
}

// Get the modal
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>