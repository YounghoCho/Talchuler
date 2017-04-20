<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<? 
include('./HeadTab_Module.php'); 
?> 
<style> 
.ment{
	margin-top:2%;
	margin-left:15%;
	font-size:25pt;
	font-weight:bold;
}
.Info1{
	width:60%;
	margin-top:2%;
	margin-left:15%;
	border: 1px solid blue;
}
.ment2{
	padding:5pt;
	text-align:center;
	font-size:18pt;
	color:#333333;
	font-weight:bold;
	background-color:#4edcf2;
}
.gamePrice{
	width:94%;
	height:15%;
	margin-left:3%;
	margin-top:2%;
}
.sMent1_1{
	font-size:18pt;
	font-weight:bold;
}
.sMent1_2{
	font-size:13pt;
	text-align:right;
}
.priceText{
	margin-left:18%;
	font-size:14pt;
}
.posBtn{
	position:absolute;
	width:29px;
	height:29px;
	background-color:#4edcf2;
	border:0;
}
.posBtn2{
	width:20px;
	height:20px;
	margin-right:6%;
	background-color:#4edcf2;
	border:0;
}
.imposBtn{
	position:absolute;
	width:29px;
	height:29px;
	background-color:#bfbfbf;
	border:0;
}
.imposBtn2{
	width:20px;
	height:20px;
	margin-right:6%;
	border:1px solid #bfbfbf;
	background-color:white;
}
.defBtn{
	border:1px solid #4edcf2;
	background:white;
}
.pos{
	width:22px;
	height:22px;
	margin-right:3%;
	background-color:#4edcf2;
	border:0;
}
.impos{
	width:22px;
	height:22px;
	margin-right:3%;
	margin-left:3%;
	background-color:#bfbfbf;
	border:0;
}
.textInner{
	width:40%;
	margin-left:4%; 
	font-size:14pt;
	text-align:center;
	border:1px solid #4edcf2;
}
.discountInfo{
	margin-top:3%;
	margin-bottom:3%;
	margin-left:3.5%;
	font-size:18pt;
	font-weight:bold;
}
.discountContent{
	margin-left:4%;
	font-size:14pt;
}
.discountContent_inner{
	width:12%;
	height:3%;
	font-size:14pt;
	margin-top:1%;
	border:1px solid #4edcf2;
}
.save{
	width:15%;
	height:5%;
	margin-top:5%;
	margin-bottom:5%;
	font-size:16pt;
	font-weight:bold;
	background-color:#4edcf2;
	border:0;
}
.Info2{
	width:60%;
	margin-top:2%;
	margin-left:15%;
	margin-bottom:5%;
	border: 1px solid blue;
}
.addGame{
	margin-right:4.1%;
	margin-top:3%;
	font-size:13pt;
	border:1px solid #4edcf2;
	background:white;
}
.gameNum_Inner{
	margin-top:3%;
	margin-left:3%;
	border:1px solid #bfbfbf;
	float:left;
	text-align:center;
	padding-top:7pt;
	width:16%;
	height:4%;
	font-size:16pt;
	font-weight:bold;
}
.gameInfo{
	width:95%;
	margin-top:10%;
	margin-left:2%;
	font-size:12pt;
}
.lastMent{
	margin-top:7%;
	font-size:12pt;
	text-align:center;
}
.delBtn{
	width:7.5%;
	height:5%;
	margin-top:3%;
	font-size:16pt;
	font-weight:bold;
	border:0;
}
.defText{
	border:1px solid #4edcf2;
	background-color:white;
	color:gray;
}
.saveBtn{
	width:15%;
	height:5%;
	margin-top:3%;
	margin-bottom:5%;
	margin-left:1%;
	font-size:16pt;
	font-weight:bold;
	background-color:#4edcf2;
	border:0;
}
.timeBtn{
	margin-right:4%;
	margin-bottom:4%;
	background-color:#eeeeee;
	border:0;
	width:48px;
	height:17px;
}
.exBtn{
	width:25px;
	height:25px;
	border:1px solid #4edcf2;
	background-color:white;
	margin-left:1%;
}
.num{
	width:5%;
	text-align:center;
	font-size:13pt;
	border:0;
}
</style> 
<script> //버튼 up,down js
$(function(){ 
  $('.bt_up').click(function(){ 
    var n = $('.bt_up').index(this);
    var num = $(".num:eq("+n+")").val();
	if(num>7)
		num=8;
	else
		num = $(".num:eq("+n+")").val(num*1+1);
  });
  $('.bt_down').click(function(){ 
    var n = $('.bt_down').index(this);
    var num = $(".num:eq("+n+")").val();
	if(num<2)
		num=1;
	else
		num = $(".num:eq("+n+")").val(num*1-1);
  });
}) 
</script>
<script> //할인 추가,삭제 js
	function add_item(){
        var div = document.createElement('div');
        div.innerHTML = document.getElementById('pre_set').innerHTML;
        document.getElementById('field').appendChild(div);
    }
    function remove_item(obj){
        document.getElementById('field').removeChild(obj.parentNode);
    }

	function add_item1(){
        var div = document.createElement('div');
        div.innerHTML = document.getElementById('pre_set1').innerHTML;
        document.getElementById('field1').appendChild(div);
    }
    function remove_item1(obj){
        document.getElementById('field1').removeChild(obj.parentNode);
    }
</script>
<script> //select박스 선택시 text박스 출력(추가를 했을때는 안됨)
function getSelectValue(frm)
{
 frm.textValue.value = frm.discount.options[frm.discount.selectedIndex].text;
}
function getSelectValue1(frm)
{
 frm.textValue.value = frm.discount1.options[frm.discount1.selectedIndex].text;
}
</script>
<script> //버튼 클릭시 text박스 비활성화
var count1=0;
function myFunction1() {
	count1++;
    if(count1%2==0){
	document.getElementById("text1").disabled = true;
	document.getElementById("btn1").style.backgroundColor='#bfbfbf';
	document.getElementById("text1").style.backgroundColor='#eeeeee';
	}else{
    document.getElementById("text1").disabled = false;
	document.getElementById("btn1").style.backgroundColor='#4edcf2';
	document.getElementById("text1").style.backgroundColor='white';
	}
}
var count2=0;
function myFunction2() {
	count2++;
    if(count2%2==1){
	document.getElementById("text2").disabled = true;
	document.getElementById("btn2").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text2").disabled = false;
	document.getElementById("btn2").style.backgroundColor='#4edcf2';
	}
}
var count3=0;
function myFunction3() {
	count3++;
    if(count3%2==1){
	document.getElementById("text3").disabled = true;
	document.getElementById("btn3").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text3").disabled = false;
	document.getElementById("btn3").style.backgroundColor='#4edcf2';
	}
}
var count4=0;
function myFunction4() {
	count4++;
    if(count4%2==1){
	document.getElementById("text4").disabled = true;
	document.getElementById("btn4").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text4").disabled = false;
	document.getElementById("btn4").style.backgroundColor='#4edcf2';
	}
}
var count5=0;
function myFunction5() {
	count5++;
    if(count5%2==1){
	document.getElementById("text5").disabled = true;
	document.getElementById("btn5").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text5").disabled = false;
	document.getElementById("btn5").style.backgroundColor='#4edcf2';
	}
}
var count6=0;
function myFunction6() {
	count6++;
    if(count6%2==1){
	document.getElementById("text6").disabled = true;
	document.getElementById("btn6").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text6").disabled = false;
	document.getElementById("btn6").style.backgroundColor='#4edcf2';
	}
}
var count7=0;
function myFunction7() {
	count7++;
    if(count7%2==1){
	document.getElementById("text7").disabled = true;
	document.getElementById("btn7").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text7").disabled = false;
	document.getElementById("btn7").style.backgroundColor='#4edcf2';
	}
}
var count8=0;
function myFunction8() {
	count8++;
    if(count8%2==0){
	document.getElementById("text8").disabled = true;
	document.getElementById("btn8").style.backgroundColor='#bfbfbf';
	document.getElementById("text8").style.backgroundColor='#eeeeee';
	}else{
    document.getElementById("text8").disabled = false;
	document.getElementById("btn8").style.backgroundColor='#4edcf2';
	document.getElementById("text8").style.backgroundColor='white';
	}
}
var count9=0;
function myFunction9() {
	count9++;
    if(count9%2==0){
	document.getElementById("text9").disabled = true;
	document.getElementById("btn9").style.backgroundColor='#bfbfbf';
	document.getElementById("text9").style.backgroundColor='#eeeeee';
	}else{
    document.getElementById("text9").disabled = false;
	document.getElementById("btn9").style.backgroundColor='#4edcf2';
	document.getElementById("text9").style.backgroundColor='white';
	}
}
var count10=0;
function myFunction10() {
	count10++;
    if(count10%2==1){
	document.getElementById("text10").disabled = true;
	document.getElementById("btn10").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text10").disabled = false;
	document.getElementById("btn10").style.backgroundColor='#4edcf2';
	}
}
var count11=0;
function myFunction11() {
	count11++;
    if(count11%2==1){
	document.getElementById("text11").disabled = true;
	document.getElementById("btn11").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text11").disabled = false;
	document.getElementById("btn11").style.backgroundColor='#4edcf2';
	}
}
var count12=0;
function myFunction12() {
	count12++;
    if(count12%2==1){
	document.getElementById("text12").disabled = true;
	document.getElementById("btn12").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text12").disabled = false;
	document.getElementById("btn12").style.backgroundColor='#4edcf2';
	}
}
var count13=0;
function myFunction13() {
	count13++;
    if(count13%2==1){
	document.getElementById("text13").disabled = true;
	document.getElementById("btn13").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text13").disabled = false;
	document.getElementById("btn13").style.backgroundColor='#4edcf2';
	}
}
var count14=0;
function myFunction14() {
	count14++;
    if(count14%2==1){
	document.getElementById("text14").disabled = true;
	document.getElementById("btn14").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text14").disabled = false;
	document.getElementById("btn14").style.backgroundColor='#4edcf2';
	}
}
var count15=0;
function myFunction15() {
	count15++;
    if(count15%2==1){
	document.getElementById("text15").disabled = true;
	document.getElementById("btn15").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text15").disabled = false;
	document.getElementById("btn15").style.backgroundColor='#4edcf2';
	}
}
var count16=0;
function myFunction16() {
	count16++;
    if(count16%2==0){
	document.getElementById("text16").disabled = true;
	document.getElementById("btn16").style.backgroundColor='#bfbfbf';
	document.getElementById("text16").style.backgroundColor='#eeeeee';
	}else{
    document.getElementById("text16").disabled = false;
	document.getElementById("btn16").style.backgroundColor='#4edcf2';
	document.getElementById("text16").style.backgroundColor='white';
	}
}
</script>
<script> //div영역 클릭시 bgc변경(11111만 변경됨)
var num = 0;
function button_onclick(){
	var element = document.getElementById("gameNum");
   num++;
    if(num%2==1){
		element.style.backgroundColor ='#4edcf2';
	}
	else{
		element.style.backgroundColor = 'white';
	}
}

var num1 = 0;
function button_onclick1(){
	var element = document.getElementById("ability1");
   num1++;
    if(num1%2==1){
		element.style.backgroundColor ='#4edcf2';
	}
	else{
		element.style.backgroundColor = 'white';
		element.style.border = '1px solid #bfbfbf';
	}
}
var num2 = 0;
function button_onclick2(){
	var element = document.getElementById("ability2");
   num2++;
    if(num2%2==1){
		element.style.backgroundColor ='#4edcf2';
	}
	else{
		element.style.backgroundColor = 'white';
		element.style.border = '1px solid #bfbfbf';
	}
}
var num3 = 0;
function button_onclick3(){
	var element = document.getElementById("ability3");
   num3++;
    if(num3%2==1){
		element.style.backgroundColor ='#4edcf2';
	}
	else{
		element.style.backgroundColor = 'white';
		element.style.border = '1px solid #bfbfbf';
	}
}
var num4 = 0;
function button_onclick4(){
	var element = document.getElementById("ability4");
   num4++;
    if(num4%2==1){
		element.style.backgroundColor ='#4edcf2';
	}
	else{
		element.style.backgroundColor = 'white';
		element.style.border = '1px solid #bfbfbf';
	}
}
var num5 = 0;
function button_onclick5(){
	var element = document.getElementById("ability5");
   num5++;
    if(num5%2==1){
		element.style.backgroundColor ='#4edcf2';
	}
	else{
		element.style.backgroundColor = 'white';
		element.style.border = '1px solid #bfbfbf';
	}
}
var num6 = 0;
function button_onclick6(){
	var element = document.getElementById("ability6");
   num6++;
    if(num6%2==1){
		element.style.backgroundColor ='#4edcf2';
	}
	else{
		element.style.backgroundColor = 'white';
		element.style.border = '1px solid #bfbfbf';
	}
}
</script>
<script> //시간버튼 클릭시 추가

</script>
<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.--> 

<div class="ment">
게임정보관리
</div>
<div class="Info1">
	<div class="ment2">
		기본가격정보
	</div>

	<div>
	<table class="gamePrice">
		<tr>
			<td colspan="3" class="sMent1_1">게임가격</td>
			<td class="sMent1_2"><input type="button" class="pos" style="margin-left:2%;">가능<input type="button" class="impos">불가능</td>
		</tr>
		<tr>
			<td>
			<input type="button" class="imposBtn" id="btn1" onclick="myFunction1()"><p class="priceText">1<input type="text1" class="textInner" disabled id="text1" style="background-color:#eeeeee">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn2" onclick="myFunction2()"><p class="priceText">2<input type="text" class="textInner" id="text2">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn3" onclick="myFunction3()"><p class="priceText">3<input type="text" class="textInner" id="text3">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn4" onclick="myFunction4()"><p class="priceText">4<input type="text" class="textInner" id="text4">원</p></td>
		</tr>
		<tr>
			<td>
			<input type="button" class="posBtn" id="btn5" onclick="myFunction5()"><p class="priceText">5<input type="text" class="textInner" id="text5">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn6" onclick="myFunction6()"><p class="priceText">6<input type="text" class="textInner" id="text6">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn7" onclick="myFunction7()"><p class="priceText">7<input type="text" class="textInner" id="text7">원</p></td>
			<td>
			<input type="button" class="imposBtn" id="btn8" onclick="myFunction8()"><p class="priceText">8<input type="text8" class="textInner" disabled id="text8" style="background-color:#eeeeee">원</p></td>
		</tr>
	</table>	
	</div>

	<div>
		<div class="discountInfo">할인정보</div>
		<table style="margin-left:3%; font-size:14pt; margin-bottom:3%;">
			<tr>
				<td style="width:35%;">*탈출러최저가(1인가격)</td>
				<td>주중 <input type="textbox" style="width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''" value="(직접입력)">원</td>
				<td>주말 <input type="textbox" style="width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''" value="(직접입력)">원</td>
			</tr>
		</table>
	</div>

	<form name="form">
	<div class="discountContent" id="pre_set" style="display:none">
	할인종류
		<select name="discount" class="discountContent_inner" onChange="getSelectValue(this.form);">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" style="margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="textValue">
	할인가격 - <input type="text" style="width:20%; font-size:14pt; width:12%; text-align:center;" class="defText">원 <input type="button" value="삭제x" onclick="remove_item(this)" style="margin-left:2%; font-size:13pt;" class="defBtn">
	</div>
	</form>

	<div id="field" class="discountContent"></div>

	<form name="form">
	<div class="discountContent">
	할인종류
		<select name="discount" class="discountContent_inner" onChange="getSelectValue(this.form);">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" style="margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="textValue">
	할인가격 - <input type="text" style="width:20%; font-size:14pt; width:12%; text-align:center;" class="defText">원<input type="button" value="추가+" onclick="add_item()" style="margin-left:2.6%; font-size:13pt;" class="defBtn">
	</div>
	</form>
 
	<div align="center";>
		<input type="button" value="저장" class="save">
	</div>
</div>






<div class="Info2">
	<div class="ment2">
		게임정보
	</div>
	
	<div align="right";>
		<input type="button" value="게임추가" class="addGame">
	</div>
	
	<div>
		<div class="gameNum_Inner" id="gameNum" onclick=button_onclick()>게임11111</div>
		<div class="gameNum_Inner" id="gameNum" onclick=button_onclick()>게임22222</div>
		<div class="gameNum_Inner" id="gameNum" onclick=button_onclick()>게임33333</div>
		<div class="gameNum_Inner" id="gameNum" onclick=button_onclick()>게임44444</div>
		<div class="gameNum_Inner" id="gameNum" onclick=button_onclick()>게임55555</div>
	</div>
	
	<div class="gameInfo">
	<table style="border-spacing:10px 10px;">
		<tr>
			<td rowspan="5" style="background-color:#eeeeee; width:250px; height:500px"></td>
			<td colspan="3" style="width:700px; height:50px;"><input type="text" style="width:100%; height:100%; font-size:12pt; background-color:#eeeeee;  border:0;"onfocus="this.value=''" value=" 제목"></td>
		</tr>
		<tr>
			<td colspan="3" style="width:700px; height:50px;"><input type="text" style="width:100%; height:100%; font-size:12pt; background-color:#eeeeee; border:0;" onfocus="this.value=''" value=" 부제목"></td>
		</tr>
		<tr>
			<td rowspan="3" style="background-color:#eeeeee; width:30%; height:30%;"><textarea style="font-size:12pt; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow-invisible;" onfocus="this.value=''">게임설명을 입력해주세요.</textarea></td>
			<td rowspan="3" style="text-align:center; vertical-align:top; width:5%;">(요약)</td>
			<td style="background-color:#eeeeee; width:30%; height:30%;"><textarea style="font-size:12pt; text-align:center; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow:hidden;" onfocus="this.value='';" >게임요약 설명을 입력해주세요			(미입력시 게임설명 처음4줄 등록)</textarea></td>
		</tr>
		<tr>
			<td style="height:5%;">(예약시간)</td>
		</tr>
		<tr>
			<td style="vertical-align:top;"><input type="button" value="10:00" class="timeBtn"><input type="button" value="11:00" class="timeBtn"><input type="button" value="12:00" class="timeBtn"><input type="button" value="+" class="timeBtn"></td>
		</tr>
	</table>
	</div>

	<div>
<table style="width:80%; margin-left:3%;">
	<tr>
		<td style="font-size:12pt; width:25%;">(게임설정)</td>
		<td style="font-size:12pt;">(필요능력)</td>
	</tr>
    <tr> 
      <td rowspan="2" style="font-size:13pt;">
	  난이도
		<a href="#a" class="bt_up">올림</a> 
		<input type="text" name="num" value="1" class="num">
		<a href="#a" class="bt_down">내림</a>
	  </td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability1" onclick=button_onclick1()>직관력</td>
	  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability2" onclick=button_onclick2()>관찰력</td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability3" onclick=button_onclick3()>수리력</td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability4" onclick=button_onclick4()>팀워크</td>
    </tr>
    <tr>       
    </tr>
    <tr>
      <td rowspan="2" style="font-size:13pt;">
	  공포감
	  	<a href="#a" class="bt_up">올림</a> 
		<input type="text" name="num" value="1" class="num">
		<a href="#a" class="bt_down">내림</a>
		</td>
    </tr>
    <tr>     
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability5" onclick=button_onclick5()>활동성</td>
	  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability6" onclick=button_onclick6()>담력</td>
	  <td rowspan="3"></td>
	  <td rowspan="3"></td>
    </tr>
    <tr>
      <td rowspan="2" style="font-size:13pt;">
	  인원수
	  	<a href="#a" class="bt_up">올림</a> 
		<input type="text" name="num" value="1" class="num">
		<a href="#a" class="bt_down">내림</a>
	  </td>
    </tr>
	</table>
		<HR width="93%" align="center" border="1" style="margin-top:3%; margin-left:2.9%;"/>
		<div style="text-align:right; margin-right:4.1%; margin-top:3%; font-size:15pt;">
			기본 가격정보와 같음<input type="button" class="exBtn">
		</div>
	</div>

	<div>
	<table class="gamePrice">
		<tr>
			<td colspan="3" class="sMent1_1">게임가격</td>
			<td class="sMent1_2"><input type="button" class="pos" style="margin-left:2%;">가능<input type="button" class="impos">불가능</td>
		</tr>
		<tr>
			<td>
			<input type="button" class="imposBtn" id="btn9" onclick="myFunction9()"><p class="priceText">1<input type="text1" class="textInner" disabled id="text9" style="background-color:#eeeeee">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn10" onclick="myFunction10()"><p class="priceText">2<input type="text" class="textInner" id="text10">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn11" onclick="myFunction11()"><p class="priceText">3<input type="text" class="textInner" id="text11">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn12" onclick="myFunction12()"><p class="priceText">4<input type="text" class="textInner" id="text12">원</p></td>
		</tr>
		<tr>
			<td>
			<input type="button" class="posBtn" id="btn13" onclick="myFunction13()"><p class="priceText">5<input type="text" class="textInner" id="text13">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn14" onclick="myFunction14()"><p class="priceText">6<input type="text" class="textInner" id="text14">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn15" onclick="myFunction15()"><p class="priceText">7<input type="text" class="textInner" id="text15">원</p></td>
			<td>
			<input type="button" class="imposBtn" id="btn16" onclick="myFunction16()"><p class="priceText">8<input type="text8" class="textInner" disabled id="text16" style="background-color:#eeeeee">원</p></td>
		</tr>
	</table>	
	</div>

	<div>
		<div class="discountInfo">할인정보</div>
		<table style="margin-left:3%; font-size:14pt; margin-bottom:3%;">
			<tr>
				<td style="width:35%;">*탈출러최저가(1인가격)</td>
				<td>주중 <input type="textbox" style="width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''" value="(직접입력)">원</td>
				<td>주말 <input type="textbox" style="width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''" value="(직접입력)">원</td>
			</tr>
		</table>
	</div>

	<form name="form">
	<div class="discountContent" id="pre_set1" style="display:none">
	할인종류
		<select name="discount1" class="discountContent_inner" onChange="getSelectValue(this.form);">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" style="margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="textValue">
	할인가격 - <input type="text" style="width:20%; font-size:14pt; width:12%; text-align:center;" class="defText">원 <input type="button" value="삭제x" onclick="remove_item1(this)" style="margin-left:2%; font-size:13pt;" class="defBtn">
	</div>
	</form>

	<div id="field1" class="discountContent"></div>

	<form name="form">
	<div class="discountContent">
	할인종류
		<select name="discount1" class="discountContent_inner" onChange="getSelectValue1(this.form);">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" style="margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="textValue">
	할인가격 - <input type="text" style="width:20%; font-size:14pt; width:12%; text-align:center;" class="defText">원<input type="button" value="추가+" onclick="add_item1()" style="margin-left:2.6%; font-size:13pt;" class="defBtn">
	</div>
	</form>
	
	<div class="lastMent">
		탈출러에서 검토 후 등록됩니다. 조금만기다려주세요!(최대3일 소요)승인결과는 메일로 안내해드리겠습니다.
	</div>

	<div align="center";>
		<input type="button" class="delBtn"value="삭제">
		<input type="button" class="saveBtn" value="저장">
	</div>
</div>
 
 
 
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요--> 
</div> 
<? 
include('./Footer_Module.php'); 
?>

