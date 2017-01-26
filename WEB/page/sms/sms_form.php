<div style="display:none;">
								<script type = "text/javascript">

									function loadJSON(){
										var data_file = "./calljson.php";
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
							<form method="post" name="smsForm" action="./smssend.php">
								<input type="hidden" name="action" value="go">
								발송타입 <span><input type="radio" name="smsType" value="S" checked>단문(SMS)</span> <br />
								제목 : <input type="text" name="subject" value="탈출러"><br />
								전송메세지 <textarea name="msg" cols="30" rows="10" style="width:455px;">본인 인증 코드는 [<?echo(rand(100000,999999))?>] 입니다.
								</textarea>
								<br />받는 번호 <input type="text" name="rphone" value="010-7507-0380">
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
								<br />반복설정 <input type="checkbox" name="repeatFlag" value="Y">
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
<div >
	<button onclick=lets()>인증번호 전송</button>
</div>

<script>
function lets(){
var lets=document.smsForm;
lets.submit();
}
</script>           