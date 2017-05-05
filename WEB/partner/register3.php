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
	font-size:11pt;
	
}
.fs{
	font-size:20pt;
}
.reserveDiv{margin-left:4%;margin-top:20px;background-color:#ccc; width:80%;padding: 5px 0px 5px 20px;}
.lowestPrice{margin-left:4%; width:80%; padding: 20px 0px 20px 20px;}
.btndiv{
	width:60%;
	height:30%;
	margin-left:15%;
	margin-top:3%;
}
.agreebtn{width:22px;height:22px;margin-right:10px;}
.btn{
	font-size:15px;
	width:60px;
	height:30px;
}
</style>
<div id="Main">
	<div>
		<table class="member">
			<tr>
			<td class="fs"><b>회원가입</b></td>
			<td class="right">1.약관동의 > 2.회원정보입력 > <b>3.업체등록요청</b> > 4.가입완료</td>
			</tr>
		</table>
	</div>
	<div class="reserveDiv"><b>혜택 신청</b></div>
	<form action="./register4.php" method="POST" name="register3form">
		<!--hidden data passing S-->
		<input type="hidden" name="agreement1" value="<?echo $_POST['agreement1']?>">
		<input type="hidden" name="id" value="<?echo $_POST['id']?>">
		<input type="hidden" name="pw" value="<?echo $_POST['pw']?>">
		<input type="hidden" name="pw_check" value="<?echo $_POST['pw_check']?>">
		<input type="hidden" name="name" value="<?echo $_POST['name']?>">
		<input type="hidden" name="shopName" value="<?echo $_POST['shopName']?>">
		<input type="hidden" name="phone1" value="<?echo $_POST['phone1']?>">
		<input type="hidden" name="phone2" value="<?echo $_POST['phone2']?>">
		<input type="hidden" name="phone3" value="<?echo $_POST['phone3']?>">
		<input type="hidden" name="tele1" value="<?echo $_POST['tele1']?>">
		<input type="hidden" name="tele2" value="<?echo $_POST['tele2']?>">
		<input type="hidden" name="tele3" value="<?echo $_POST['tele3']?>">
		<input type="hidden" name="businessNumber" value="<?echo $_POST['businessNumber']?>">
		<input type="hidden" name="postNumber1" value="<?echo $_POST['postNumber1']?>">
		<input type="hidden" name="location1" value="<?echo $_POST['location1']?>">
		<input type="hidden" name="location2" value="<?echo $_POST['location2']?>">
		<input type="hidden" name="email1" value="<?echo $_POST['email1']?>">
		<input type="hidden" name="email2" value="<?echo $_POST['email2']?>">
		<input type="hidden" name="agreement2" value="<?echo $_POST['agreement2']?>">
		<input type="hidden" name="agreement6" value="<?echo $_POST['agreement6']?>">
		<!--hidden data passing E-->

	<div class="lowestPrice">
		<table>
			<tr><td width="130px">최저가 보장</td><td>
			<input type="checkbox" name="agreement5" id="agreement5" class="agreebtn">
			동의 후 신청</td></tr>
			<tr><td></td><td style="padding-left:32px;">사장님 업체의 게임가격을 전국 사이트 중 최저가로 표기합니다.<br>(어느곳에서도 할인하지 않으실 경우 기본가격으로 표기하셔도 좋습니다.)</td></tr>
		</table>
	</div>
	</form>
	<div class="btndiv">
		<center><input type="button" class="btn" value="다음" onclick="module1()" /></center>

</div>
</div>
<?
include('./Footer_Module.php');
?>
<script>
function module1(){
	var f = document.register3form;

	f.submit();
}
</script>
