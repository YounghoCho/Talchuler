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
.done{margin-left:4%;margin-top:20px;width:80%;text-align:center;}

.btndiv{
	width:80%;
	height:30%;
	margin-left:4%;
	margin-top:3%;
}
.donebtn{
	font-size:15px;
	width:200px;
	height:35px;
	background-color:#66ccff;
	border:none;
}
</style>
<?print_r($_POST);?>

<div id="Main">
	<div>
		<table class="member">
			<tr>
			<td class="fs"><b>회원가입</b></td>
			<td class="right">1.약관동의 > 2.회원정보입력 > <b>3.업체등록요청</b> > 4.가입완료</td>
			</tr>
		</table>
	</div>
	<div class="done"><b><?echo ($_POST['shopName'])?> <br>탈출러매니저 회원가입을 환영합니다.<br>가입하신 아이디 : <?echo ($_POST['id'])?><br><br>[내카페관리]에서 카페정보와 게임정보를 먼저 등록해주세요</b></div>

	<div class="btndiv">
		<center>
		<a href=""><input type="button" class="donebtn" value="[카페정보관리] 바로가기"></a>
		<a href=""><input type="button" class="donebtn" value="[게임정보관리] 바로가기"></a>
		</center>
</div>
</div>
<?
include('./Footer_Module.php');
?>

