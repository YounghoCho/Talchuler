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
p{
	margin-left:16%;
	font-size:15pt;
}
.way{
	width:60%;
	margin-left:35%;
	margin-top:7%;
	font-size:15pt;
}
.check{
	width:15pt;
	height:15pt;
	margin-top:2%;
}
.btndiv{
	width:60%;
	margin-left:40%;
}
.btn{
	margin-top:8%;
	margin-left:5%;
	font-size:15px;
	width:60px;
	height:30px;
}
.footer{
	margin-top:13%;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $('input[type="checkbox"][name="group"]').click(function(){
        if ($(this).prop('checked')) {
            $('input[type="checkbox"][name="group"]').prop('checked', false);
            $(this).prop('checked', true);
        }
    });
});
</script>
<div>
	<table class="member">
		<tr>
		<td class="fs"><b>비밀번호찾기</b></td>
		<td class="right">1.아이디입력 > <b>2.본인확인</b> > 3.비밀번호 재설정</td>
		</tr>
	</table>
	<p><b>비밀번호를 찾으실 방법을 선택하세요.</p>
</div>
<div>
	<table class="way">
	<tr>
		<td><input type="checkbox" class="check" name="group">회원정보에 등록한 휴대전화로 인증 (+82 01-7***-***6)</td>
	</tr>
	<tr>
		<td><input type="checkbox" class="check" name="group">본인확인 이메일로 인증 (HA*********@N****.COM)</td>
	</tr>
	</table>
</div>
<div class="btndiv">
<input type="button" class="btn" value="이전">
<input type="button" class="btn" value="다음">
</div>
<div class="footer">
<?
include('./Footer_Module.php');
?>
</div>
</html>
