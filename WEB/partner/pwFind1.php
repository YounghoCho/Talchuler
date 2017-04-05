<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?
include('./HeadTab_Module.php');
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
	font-size:15pt;
	
}
.fs{
	font-size:25pt;
}
.namediv{
	width:60%;
	margin-left:15%;
	margin-top:10%;
}
.username{
	width:70%;
	height:50px; 
	border:2pt solid #cccccc; 
	background-color : #ffffff;
	font-size:15pt; 
}
.btndiv{
	width:60%;
	height:30%;
	margin-left:15%;
	margin-top:3%;
}
p{
	text-align:left;
	font-size:12pt;
	margin-left:16%;
}
.btn{
	font-size:15px;
	width:60px;
	height:30px;
}
</style>
<div>
	<table class="member">
		<tr>
		<td class="fs"><b>비밀번호찾기</b></td>
		<td class="right"><b>1.아이디입력</b> > 2.본인확인 > 3.비밀번호 재설정</td>
		</tr>
	</table>
</div>
<div class="namediv">
			<center><input type="text" id="user" class="username" name="username" size="20"value="   비밀번호를 찾고자하는 아이디를 입력하세요." onfocus="this.value=''; this.style.color='#333333';" style="color:#666666"></center>
			<p>아이디가 기억나지 않으세요? <b>아이디찾기</p>
</div>
<div class="btndiv">
	<center><input type="button" class="btn" value="다음"></center>
</div>
<?
include('./Footer_Module.php');
?>
</html>


