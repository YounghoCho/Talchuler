<?
include("./include_head.php");
?>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>비밀번호 찾기</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>비밀번호 찾기</span><div class="lfind"><b>01. 아이디입력&nbsp;>&nbsp;</b><span>02. 본인 확인&nbsp;>&nbsp;</span><span>03. 비밀번호 재설정</span></div></div>
				<div class="graybox find">
					<div class="ftit">비밀번호를 찾고자하는 아이디를 입력하세요.</div>
					<div class="topbox">

					 <form name="findform" action="./login_find2.php" method="post" name="login_form">
						<div class="inputbox">
							<input name="email" type="text" class="txt st04" placeholder="탈출러 가입 이메일을 입력하세요." />
						</div>
					 </form>

					</div> 
				</div>
				<div class="nextarea">
					이메일이 기억나지 않으세요? 
					<a href="./login_find4.php" class="btn_emailfind">이메일 찾기</a>
					<button onClick="find()"><a class="btn_next">다음</a></button>
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
function find(){

    var f = document.findform;
    if(f.email.value == ""){
        alert("이메일을 입력해 주세요.");
        return false;
    }
	f.submit();
}
</script>