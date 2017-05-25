<?
include('include.php');
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
p{
	margin-left:10%;
	font-size:15pt;
	margin-top:10px;
}
.way{
	width:60%;
	margin-left:15%;
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
<?
$sql="select p_phone, p_email from partner where p_id='".$_POST['id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>

<div id="Main">
	<div>
		<table class="member">
			<tr>
			<td class="fs"><b>비밀번호찾기</b></td>
			<td class="right">1.아이디입력 > <b>2.본인확인</b> > 3.비밀번호 재설정</td>
			</tr>
		</table>
		<p><b>비밀번호를 찾으실 방법을 선택하세요.</b></p>
	</div>
	<div>
		<form action="./pwFind3.php" method="POST" name="pwfindform">
		<table class="way">
		<!--<tr>
			<td><input type="checkbox" class="check" id="phone">회원정보에 등록한 휴대전화로 인증 (+82 <?echo(preg_replace(array("/[3-6]/"),"*", $data['p_phone']) );?>)</td>
		</tr>-->
		<tr>
			<td><input type="checkbox" class="check" id="email" style="margin:0;padding:0;">본인확인 이메일로 인증 (<?echo $data['p_email']?>)</td>
		</tr>
		</table>
		</form>
	</div>
	<div class="btndiv">
		<a href="./pwFind1.php"><input type="button" class="btn" value="이전"></a>
		<a href="./pwFind3.php?email=<?echo $data['p_email']?>"><input type="button" class="btn" value="다음"></a>
	</div>
</div>
</div>
<div class="footer">
<?
include('./Footer_Module.php');
?>
</div>
<script>
/*function module1(){
	var f = document.pwfindform;

	if(document.getElementById('phone').checked)
		location.href="./pwFind3.php";
	else if(document.getElementById('email').checked)
		location.href="pwFind_emailsend.php";
	else
		f.submit();
}*/
</script>