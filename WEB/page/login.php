<?
include("./include_head.php");
?>

	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><strong>로그인</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>로그인</span></div>
				<div class="graybox login">
					<div class="topbox">
						<div class="ltit">이메일로 로그인</div>
						
						<form method="POST" name="loginform" action="./login_chk.php">
							<div class="inputbox">
								<input name="email" type="text" class="txt st03" placeholder="이메일" autocomplete="off" />
								<input name="password" type="password" class="txt st03" placeholder="비밀번호" autocomplete="off"/>
							</div>
							<div class="lchkbox">
								<label class="ichk"><input name="check" type="checkbox" checked="checked"><i></i><span>로그인 유지</span></label>
							</div>
							<div class="btncenter"><input type="button" class="btn_blue" value="로그인" style="border:none;" onClick="login()"/>
						</form>

					</div>
					<div class="bottombox">
						<ul>
							<li>아직 회원이 아니세요? <a href="./join.php" class="btn_gray">회원가입하기</a></li>
							<li>비밀번호를 잊으셨나요? <a href="./login_find1.php"class="btn_gray">비밀번호찾기</a></li>
						</ul>
					</div>
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
function login(){

    var f = document.loginform;
    if(f.email.value == ""){
        alert("이메일을 입력해 주세요.");
        return false;
    }
    if(f.password.value == ""){
        alert("비밀번호를 입력해 주세요.");
        return false;
    }
	f.submit();
}
</script>
