<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?
include ('HeadTab_Module.php');
?>
<style>
.member{
	width:60%;
	margin-left:15%;
	margin-top:1%;
	border-bottom:1px solid black;
}
.member .right{
text-align:right;
}
.ment{
	width:60%;
	margin-left:15%;
	margin-top:1%;
	text-align:center; 
	vertical-align:middle;
}
.fs{
	font-size:23px;
}
.name{
	position:absolute;
	float:left;
	width:8%;
	height:10%;
	margin-left:15%;
	font-size:19px;
	text-align:center;
}
.name1{
	position:absolute;
	float:left;
	width:8%;
	height:10%;
	margin-left:15%;
	font-size:19px;
	text-align:center;
}
.name2{
	position:absolute;
	float:left;
	width:8%;
	height:10%;
	margin-left:15%;
	font-size:19px;
	text-align:center;
}
.gameprice{
	width:45%;
	height:10%;
	margin-left:23%;
	margin-top:2%;
	border:1px solid black;
}
.gameprice .gameprice_inner{
	width:25px;
	height:60px;
	padding:20px;
}
.discountinfo{
	width:45%;
	height:10%;
	margin-left:23%;
	margin-top:2%;
	border:1px solid black;
}
.discountinfo .discount_inner{
	margin-left:20px;
	padding:20px;
	width:230px;
}
.discountinfo .discount_size{
	width:200px;
}
.gameinfo{
	width:45%;
	height:45%;
	margin-left:23%;
	margin-top:2%;
	border:1px solid black;
}
.lastment{
	width:60%;
	margin-left:15%;
	margin-top:3%;
	text-align:center; 
	vertical-align:middle;
}
.btn{
	width:60%;
	margin-left:15%;
	margin-top:1%;
	text-align:center; 
	vertical-align:middle;
}
</style>
<div>
	<table class="member">
		<tr>
		<td class="fs">회원가입</td>
		<td class="right">1.약관 동의 > 2.회원정보입력 > 3.가입완료</td>
		</tr>
	</table>
</div>
<div class="ment">
	<p>탈출러매니져 회원가입을 환영합니다.</p>
	<p>가입하신 아이디 tachuler6</p>
	<p>이놀루션 잠실점,탈출러매니저 회원가입이 완료되었습니다.</p>
	<p>게임정보를 등록하시고 서비스를 이용해주세요.</p>
</div>
<div class="member">
	<table>
		<tr>
			<td class="fs">게임정보등록</td>
		</tr>
	</table>
</div>
<div>
	<div class="name">
	게임가격
	</div>
	<table class="gameprice">
		<tr>
			<td colspan=4 style="padding-left:78%;" ><img src="./images/icon/icon_have.gif">입장가능 <img src="./images/icon/icon_nohave.gif">입장불가</td>
		</tr>
		<tr>
			<td class="gameprice_inner">1 <input type="text" size="5">원</td>
			<td class="gameprice_inner">2 <input type="text" size="5">원</td>
			<td class="gameprice_inner">3 <input type="text" size="5">원</td>
			<td class="gameprice_inner">4 <input type="text" size="5">원</td>
		</tr>
			<td class="gameprice_inner">5 <input type="text" size="5">원</td>
			<td class="gameprice_inner">6 <input type="text" size="5">원</td>
			<td class="gameprice_inner">7 <input type="text" size="5">원</td>
			<td class="gameprice_inner">8 <input type="text" size="5">원</td>
	</table>
</div>
<div>
	<div class="name1">
	할인정보
	</div>
	<table class="discountinfo">
	<tr>
		<td class="discount_inner">할인종류
		<select name="discount">
			<option value="">조조할인</option>
			<option value="">평일할인</option>
			<option value="">SNS할인</option>
			<option value="">후기할인</option>
			<option value="">직접입력</option>
		<input type="text" size="5">
		</td>
		<td class="discount_size">할인가격 - <input type="text" size="5"> 원</td>
		<td class="">중복할인가능 <input type="button" value="삭제x"></td>
	</tr>
	<tr>
		<td class="discount_inner">할인종류
		<select name="discount">
			<option value="">조조할인</option>
			<option value="">평일할인</option>
			<option value="">SNS할인</option>
			<option value="">후기할인</option>
			<option value="">직접입력</option>
		<input type="text" size="5">
		</td>
		<td class="discount_size">할인가격 - <input type="text" size="5"> 원</td>
		<td class="">중복할인가능 <input type="button" value="삭제x"></td>
	</tr>
	<tr>
		<td class="discount_inner">할인종류
		<select name="discount">
			<option value="">조조할인</option>
			<option value="">평일할인</option>
			<option value="">SNS할인</option>
			<option value="">후기할인</option>
			<option value="">직접입력</option>
		<input type="text" size="5">
		</td>
		<td class="discount_size">할인가격 - <input type="text" size="5"> 원</td>
		<td class="">중복할인가능 <input type="button" value="삭제x"> <input type="button" value="추가+"></td>
	</tr>
	</table>
</div>
<div>
	<div class="name2">
	게임정보
	</div>
	<table class="gameinfo" border="1px">
	<tr>
		<td colspan="3" >
			<input type="button" value="계정추가" style="margin-left:80%">
			<input type="button" value="계정삭제x">
		</td>
	</tr>
	<tr>
		<td colspan="3" height="5%">
			<input type="checkbox" style="width:18px; height:18px; margin-left:96%">
		</td>
	</tr>
	<tr>
		<td rowspan="7" width="300">
			<input type="text" style="width:100%; height:100%">
		</td>
		<td colspan="2">
			<input type="text" placeholder="제목" style="width:100%; height:100%; background-color:#F2F2F2">
		</td>
	</tr>
	<tr>
		<td colspan="2" style="height:10%">
			<input type="text" placeholder="부제목" style="width:100%; height:100%; background-color:#F2F2F2">
		</td>
	</tr>
	<tr>
		<td rowspan="5" width="30%">
		<textarea name="context" placeholder="게임설명을 입력해주세요" style="width:100%; height:100%; background-color:#F2F2F2; overflow-invisible;"></textarea>
		</td>
		<td>
		난이도<select name="level"><option value="">1</option>인원<select name="man"><option value=""></option>
		</td>
	</tr>
	<tr>
		<td height="5%">
		(요약)
		</td>
	</tr>
	<tr>
		<td>
		<textarea style="width:100%; height:100%; background-color:#F2F2F2;"></textarea>
		</td>
	</tr>
	<tr>
		<td height="5%">
		(예약시간)
		</td>
	</tr>
	<tr>
		<td>
		<input type="button" value="10:00">
		<input type="button" value="11:00">
		<input type="button" value="12:00">
		<input type="button" value="+">
		</td>
	</tr>
	</table>
</div>
<div class="lastment">
	<p>
	탈출러에서 입력해주신 정보를 확인 한 후 가입이 완료됩니다. 조금만 기다려주세요(최대5일소요)
	</p>
</div>
<div class="btn">
	<input type="button" value="가입완료" style="width:20%; height:60px; margin-bottom:7%">
</div>
<?php
include ('./Footer_Module.php');
?>
</html>
