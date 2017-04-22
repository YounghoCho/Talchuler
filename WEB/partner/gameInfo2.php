
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
.topPage{
	width:60%;
	height:4.5%;
	margin-left:15%;
	margin-top:2%;
	font-size:20pt;
	border-top:1px solid #bfbfbf;
	border-bottom:1px solid #bfbfbf;	
}
.page{
	margin-left:45%;
	width:20%;
	float:left;
	font-size:20pt;
}
.time{
	font-size:20pt;
}
.bottomPage{
	width:60%;
	margin-top:1%;
	margin-left:15%;
	margin-bottom:10%;
	border: 1px solid #bfbfbf
}
.gameInfo{
	width:95%;
	margin-top:2%;
	margin-left:2%;
	font-size:12pt;
}
.num{
	width:5%;
	text-align:center;
	font-size:14pt;
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
.imposBtn2{
	width:20px;
	height:20px;
	margin-right:6%;
	border:1px solid #bfbfbf;
	background-color:white;
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
.imposBtn{
	position:absolute;
	width:29px;
	height:29px;
	background-color:#bfbfbf;
	border:0;
}
.posBtn{
	position:absolute;
	width:29px;
	height:29px;
	background-color:#4edcf2;
	border:0;
}
.textInner{
	width:40%;
	margin-left:4%; 
	font-size:14pt;
	text-align:center;
	border:1px solid #4edcf2;
}
.priceText{
	margin-left:18%;
	font-size:14pt;
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
	height:20.5pt;
	font-size:14pt;
	margin-top:1%;
	border:1px solid #4edcf2;
}
.defText{
	border:1px solid #4edcf2;
	background-color:white;
	color:gray;
}
.bottomBtn{
	margin-left:75%;
}
.dnyBtn{
	margin-left:102%; 
	margin-top: -10%; 
	margin-bottom:1%; 
	width:13%; 
	height:4%;
	border:0;
	font-size:20pt;
	font-weight:bold;
	background-color:#eeeeee;
}
.acpBtn{
	margin-left:102%;
	margin-top:-5%;
	width:13%; 
	height:12%;
	border:0;
	font-size:20pt;
	font-weight:bold;
	background-color:#4edcf2;
}
</style> 

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.--> 
<div class="ment">
게임정보승인
</div>
<div class="topPage">
	<div  class="page">
	 &lt; <input type="textbox" style="text-align:center; width:35px; height:30px; font-size:20pt;"> / 13&gt;
	</div>
	<div class="time" align="right">
	17.04.06. 오후 7:00제출됨
	</div>
</div>

<div class="bottomPage">
	<div class="gameInfo">
		<table style="border-spacing:10px 10px;">
		<tr>
			<td rowspan="5" style="background-color:#eeeeee; width:250px; height:500px"></td>
			<td colspan="3" style="width:700px; height:50px;"><input type="text" style="width:100%;height:100%; font-size:27pt; background-color:#eeeeee; border:0; font-weight:bold;"onfocus="this.value=''"value=" 제목"></td>
		</tr>
		<tr>
			<td colspan="3" style="width:700px; height:50px;"><input type="text" style="width:100%; height:100%; font-size:16pt; background-color:#eeeeee; color:#898989; font-weight:bold; border:0;" onfocus="this.value=''" value="  부제목"></td>
		</tr>
		<tr>
			<td rowspan="3" style="background-color:#eeeeee; width:30%; height:30%;"><textarea style="font-size:10pt; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow-invisible;" onfocus="this.value=''"> 게임설명을 입력해주세요.</textarea></td>
			<td rowspan="3" style="text-align:center; vertical-align:top; width:5%;">(요약)</td>
			<td style="background-color:#eeeeee; width:30%; height:30%;"><textarea style="font-size:12pt; text-align:center; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow:hidden;" onfocus="this.value='';" >게임요약 설명을 입력해주세요			(미입력시 게임설명 처음4줄 등록)</textarea></td>
		</tr>
		<tr>
			<td style="height:5%;">(예약시간)</td>
		</tr>
		<tr>
			<td style="vertical-align:top;"><input type="button" value="10:00" class="timeBtn"><input type="button" value="11:00" class="timeBtn"><input type="button" value="12:00" class="timeBtn"><input type="button" value="13:00" class="timeBtn"><input type="button" value="14:00" class="timeBtn"><input type="button" value="15:00" class="timeBtn"><input type="button" value="16:00" class="timeBtn"><input type="button" value="17:00" class="timeBtn"><input type="button" value="18:00" class="timeBtn"><input type="button" value="19:00" class="timeBtn"><input type="button" value="20:00" class="timeBtn"><input type="button" value="21:00" class="timeBtn"><input type="button" value="22:00" class="timeBtn"><input type="button" value="23:00" class="timeBtn"><input type="button" value="24:00" class="timeBtn"><input type="button" value="01:00" class="timeBtn"><input type="button" value="02:00" class="timeBtn"><input type="button" value="03:00" class="timeBtn"></td>
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
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2">직관력</td>
	  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2">관찰력</td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2">수리력</td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2">팀워크</td>
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
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2">활동성</td>
	  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2">담력</td>
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
	</div>

	<div>
	<table class="gamePrice">
		<tr>
			<td colspan="3" class="sMent1_1">게임가격</td>
			<td class="sMent1_2"><input type="button" class="pos" style="margin-left:2%;">가능<input type="button" class="impos">불가능</td>
		</tr>
		<tr>
			<td>
			<input type="button" class="imposBtn"><p class="priceText">1<input type="text1" class="textInner" disabled style="background-color:#eeeeee">원</p></td>
			<td>
			<input type="button" class="posBtn"><p class="priceText">2<input type="text" class="textInner" >원</p></td>
			<td>
			<input type="button" class="posBtn"><p class="priceText">3<input type="text" class="textInner" id="text11">원</p></td>
			<td>
			<input type="button" class="posBtn"><p class="priceText">4<input type="text" class="textInner" id="text12">원</p></td>
		</tr>
		<tr>
			<td>
			<input type="button" class="posBtn"><p class="priceText">5<input type="text" class="textInner" id="text13">원</p></td>
			<td>
			<input type="button" class="posBtn"><p class="priceText">6<input type="text" class="textInner" id="text14">원</p></td>
			<td>
			<input type="button" class="posBtn"><p class="priceText">7<input type="text" class="textInner" id="text15">원</p></td>
			<td>
			<input type="button" class="imposBtn"><p class="priceText">8<input type="text" class="textInner" disabled id="text16" style="background-color:#eeeeee">원</p></td>
		</tr>
	</table>	
	</div>

	<div>
		<div class="discountInfo">할인정보</div>
		<table style="margin-left:3%; font-size:14pt; margin-bottom:3%;">
			<tr>
				<td style="width:35%; font-size:15pt;">*탈출러최저가(1인가격)</td>
				<td>주중 <input type="textbox" style="width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''" value="(직접입력)">원</td>
				<td>주말 <input type="textbox" style="width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''" value="(직접입력)">원</td>
			</tr>
		</table>
	</div>

	<div class="discountContent">
	할인종류
		<select name="discount1" class="discountContent_inner">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" style="margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="textValue">
	할인가격 - <input type="text" style="width:20%; font-size:14pt; width:12%; text-align:center;" class="defText">원
	</div>

	<div class="discountContent">
	할인종류
		<select name="discount1" class="discountContent_inner">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" style="margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="textValue">
	할인가격 - <input type="text" style="width:20%; font-size:14pt; width:12%; text-align:center;" class="defText">원
	</div>

	<div class="discountContent">
	할인종류
		<select name="discount1" class="discountContent_inner">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" style="margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="textValue">
	할인가격 - <input type="text" style="width:20%; font-size:14pt; width:12%; text-align:center;" class="defText">원
	</div>

	<input type="button" class="dnyBtn" value="거절">
	<input type="button" class="acpBtn" value="승인하기">
</div>


<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요--> 
</div> 
<? 
include('./Footer_Module.php'); 
?>
