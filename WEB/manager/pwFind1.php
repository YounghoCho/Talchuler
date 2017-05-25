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
<div id="Main">
	<div>
		<table class="member">
			<tr>
			<td class="fs"><b>비밀번호찾기</b></td>
			<td class="right"><b>1.아이디입력</b> > 2.본인확인 > 3.비밀번호 재설정</td>
			</tr>
		</table>
	</div>
	<form name="findform" action="./pwFind2.php" method="post">		
	<div class="namediv">
				<center><input type="text" id="user" class="username" name="id" size="20" value="<?if($_GET['email']){echo($_GET['email']);}else{echo('비밀번호를 찾고자하는 아이디를 입력하세요');}?>" onfocus="this.value=''; this.style.color='#333333';" style="color:#666666;padding-left:10px;"></center>
				<p style="margin-top:10px;">아이디가 기억나지 않으세요? 
				<a href="./idFind1.php"><b>아이디찾기</b></a></p>
	</div>
	
	<div class="btndiv">
		<center><input type="button" class="btn" value="다음" onclick="module2()"></center>
	</form>
</div>
</div>
<?
include('./Footer_Module.php');
?>
<script>
function module2(){

    var f = document.findform;
    if(f.id.value == ""){
        alert("이메일을 입력해 주세요.");
    }else if( f.id.value == "비밀번호를 찾고자하는 아이디를 입력하세요"){
		alert("이메일을 입력해 주세요.");
	}else{
	f.submit();
	}
}
</script>
