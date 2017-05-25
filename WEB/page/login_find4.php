<?
include("./include_head.php");
?>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>이메일 찾기</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>이메일 찾기</span><div class="lfind"><span>회원정보에 등록한 휴대전화로 인증</span></div></div>
				<div class="graybox find">
					<div class="ftit">회원정보에 등록한 휴대전화 번호입력한 휴대전화 번호가 같아야 인증번호를 받으 실 수 있습니다.</div>
					<div class="topbox">

					 <form name="findform" action="./login_find5.php" method="post" name="login_form">
						<div class="inputbox" style="width:50%;margin-left:25%;">
							<input name="phone" id="phone" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="txt st04" placeholder="휴대폰 번호를 입력해주세요. ( '-' 문자 제외)" />
						</div>
					 </form>

					</div> 
				</div>
				<div class="nextarea">
					<button onClick="findemail()"><a class="btn_next">다음</a></button>
				</div>
			</div>
		</div>
	</div>
<?
include("./include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>
<script>
function findemail(){

    var f = document.findform;
    if(f.phone.value == ""){
        alert("휴대폰 번호를 입력해주세요.");
        return false;
    }
	//var phone=document.getElementById('phone');
	if(f.phone.value.indexOf('-')!='-1'){
		alert("' - '문자를 제외하고 휴대폰 번호를 입력해주세요");
		return false;
	}
	f.submit();
}
</script>