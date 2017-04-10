<?
include('./HeadTab_Module.php');
?>

<style>

#Main{
	height:80%;
	overflow:hidden;
}

#Main_container{
	height:100%;
	width:100%;
	padding-top:20px;
	padding-left:50px;
}

#Main_titlebar{
	width:100%;
	margin:5px 0 5px 0;
}

#Main_titlebar .title{
	float:left;
	font-size:25px;
	width:85%;
	color:#666666;
	margin-right:10px;
	margin:auto;
	margin-bottom:0px;
	padding-bottom:8px;
	font-weight:bold;
	border-bottom:2px solid #666666;
	position:relative;
}
.btndiv{
	width:80%;
	margin-left:4%;
	text-align:center;
	padding-bottom:40px;
}
.btn{
	margin-left:5%;
	font-size:15px;
	width:60px;
	height:30px;
}

@media screen and (max-width:820px){
	#Main_titlebar .step{
		display:none;
	}
}

#Main_titlebar .step{
	float:right;
	font-size:14px;
	position:absolute;
	bottom:10px;
	right:0px;
	color:#b8b8b8;
}

#Main_titlebar .step b{
	font-weight:bold;
	color:#000000;
}



#promise{
	width:80%;
	height:auto;
	padding-left:20px;
	margin-top:40px;
	float:left;

}

#promise .input_box{
	width:100%;
}

#promise .input_box div{
	width:100%;
	height:150px; /*약관란 높이조절*/
	resize:none;
	float:left;
	font-size:12px;
	color:#999999;
	padding:5px;
	margin-bottom:8px;
	overflow-y:scroll;
	border:1px solid #666666;
}

#promise .input_box b{
	line-height:20px;
	width:80%;
	margin:1px;
}

#check_area{
	float:left;
	height:auto;
	width : -webkit-calc(80% + 13px); /* for Chrome, Safari */
    width :    -moz-calc(80% + 13px); /* for Firefox */
    width :         calc(80% + 13px); /* for IE */
	display:table;
	margin-left:20px;
	margin-top:5px;
	padding:5px 0px;
	background-color:#cdcdcd;
}

#check_area input{
	display:table-cell;
	width:20px;
	height:20px;
	float:left;
	margin:5 10 5 10;
}

#check_area .text_box[
	font-size:12px;
	float:left;
	display:table-cell;
}





</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<div id="Main">
	<div id="Main_container">
		<div id="Main_titlebar">
			<div class="title">회원가입
				<div class="step"><b>1.약관동의</b> > 2.회원정보입력 > 3.업체등록요청 > 4.가입완료</div>
			</div>
			<div class="anything">&nbsp</div>
			<div class="anything">&nbsp</div>
		</div>

		<div id="promise">
			<div class="input_box">
				<div><b>약관란입니다.<br></b>약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.약관란입니다.</div>
				<div><b>내용을 입력하세요.<br></b>내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.내용을 입력하세요.</div>
				<div><b>임시로 만들어진 페이지 입니다.<br></b>임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.임시로 만들어진 페이지 입니다.</div>
			</div>
		</div>
		<div id="check_area">
		<form action="./register2.php" method="POST" name="register1form">
			<input type="checkbox" name="agreement1" id="agreement1">
			<div class="text_box">
				<p style='font-size:13px; color:#565656; padding:0; margin:0; font-weight:bold;'>탈출러 서비스 이용약관(필수),개인정보 수집 및 이용(필수)에 모두 동의합니다.</p>
				<p style='font-size:11px; color:#ee4444; padding:0; margin:0; font-weight:bold;'>회원가입을 위해 이용약관 및 개인정보 수집 및 이용에 관한 안내를 읽고 동의해주세요.</p>
			</div>
		</form>
		</div>
	</div>
</div>
</div>
	<div class="btndiv">
		<a href="./index.php"><input type="button" class="btn" value="이전"></a>
		<input type="button" class="btn" value="다음" onclick="module1()">
	</div>



<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
<script>
function module1(){
	var f = document.register1form;

	if(!document.getElementById('agreement1').checked)
	alert("약관에 동의해주세요.");
	else
		f.submit();
}
</script>