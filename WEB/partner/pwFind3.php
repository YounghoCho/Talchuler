<?
include('./HeadTab_Module.php');
?>

<style>
#Main{
	height:80%;
	overflow:hidden;
 }
.member{
	width:80%;
	margin-left:4%;
	margin-top:1%;
	border-bottom:1px solid black;
}
.member .right{
	text-align:right;
	font-size:15pt;
	
}
.fs{
	font-size:25pt;
}
.ment{
	margin-left:10%;
	font-size:15pt;
	margin-top:10px;
}
.name{
	font-size:18pt;
}
.namediv{
	width:60%;
	height:3%;
	margin-left:15%;
	margin-top:3%;
}
.pwddiv{
	width:60%;
	height:17%;
	margin-left:15%;
}
.pwd{
	width:70%;
	height:50px; 
	margin-top:2%;
	border:2pt solid #cccccc; 
	background-color : #ffffff;
	font-size:15pt; 
	color:#666666;
}
.certifidiv{
	width:60%;
	height:30%;
	margin-left:15%;
	margin-top:6%;
}
.ment2{
	font-size:14pt;
}
.certifitable{
	width:50%;
	height:50%;
	border-collapse:collapse;
}
.certifi{
	padding-left:10px;
	border:1px solid #cccccc;
}
.cerinput{
	width:50%;
	height:20%;
	margin-top:-1%;
	font-size:14pt;
}
.btn{
	width:60px;
	height:30px;
	font-size:15px;
	margin-top:3%;
}
</style>
<div id="Main">
	<div>
		<table class="member">
			<tr>
			<td class="fs"><b>비밀번호찾기</b></td>
			<td class="right">1.아이디입력 > 2.본인확인 > <b>3.비밀번호 재설정</b></td>
			</tr>
		</table>
		<p class="ment"><b>새로 사용 할 비밀번호를 입력해주세요.<br>사용하시던 비밀번호는 탈출러도 알 수 없습니다. 비밀번호를 새로 설정해 주세요.</b></p>
	</div>
	<div class="namediv">
		<center><p class="name">탈출러 매니저 아이디 : IDIDID</p></center>
	</div>
	<div class="pwddiv">
		<center><input type="text" id="pwd" class="pwd" name="pwd" size="20"value="새 비밀번호를 입력해주세요.(영문,숫자 포함 6~20글자)" onfocus="this.value=''"></center>
		<center><input type="text" id="pwd" class="pwd" name="pwd" size="20"value="새 비밀번호를 한번 더 입력해주세요." onfocus="this.value=''"></center>
		<center><HR class="pwd" style="background-color:#cccccc; height:1px; border:none" /></center>
	</div>
	<div class="certifidiv">
		<center><p class="ment2">아래 이미지를 보이는대로 입력해주세요.</p></center>
		<center>
		<table class="certifitable">
		<tr>
		<td rowspan="2" class="certifi" width="50%"></td>
		<td class="certifi">새로고침</td>
		</tr>
		<tr>
		<td class="certifi">음성으로 듣기</td>
		<tr>
		</table>
		</center>
		<center><input type="text" id="cer" class="cerinput" name="cer" size="20"value="자동방지 입력 문자" onfocus="this.value=''"></center>
		<center><a href="./pwChange.php"><input type="button" class="btn" value="확인"></a></center>
	</div>
</div>
</div>
<div class="footer">
<?
include('./Footer_Module.php');
?>
</div>
