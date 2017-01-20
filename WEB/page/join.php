<?
include("./include_head.php");
?>
	
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>이메일 회원가입</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>이메일 회원가입</span></div>
				<div class="graybox">
					
				   <form name="joinform" method="post" action="join_insert.php">
					<div class="topbox">
						<div class="inputbox">
							<input id="e" name="useremail" type="text" class="txt st04" placeholder="이메일을 입력해주세요." />
							<a href="#" class="btn_gray">중복확인</a>
						</div>
						<div class="inputbox">
							<input id="p1" name="userpassword" type="password" class="txt st04" placeholder="비밀번호를 입력해주세요. ( 영문,숫자 포함 6~20자 )" />
						</div>
						<div class="inputbox">
							<input id="p2" name="userpassword_check" type="password" class="txt st04" placeholder="비밀번호를 한번 더 입력하세요." />
						</div>
						<div class="inputbox">
							<input name="nickname" type="text" class="txt st04" placeholder="닉네임을 입력하세요. ( 한글,영문,숫자 포함 2~10자 )" />
							<a href="#" class="btn_gray">중복확인</a>
						</div>
						<div class="lchkbox">
							<label class="ichk"><input id="check1" type="checkbox"><i></i><span>서비스 이용약관 동의</span></label>
						</div>
						<div class="policybox">
							서비스 이용약관서비스
							서비스 이용약관서비스
							서비스 이용약관서비스
						</div>
						<div class="lchkbox">
							<label class="ichk"><input id="check2" type="checkbox"><i></i><span>개인정보 수집 이용 동의</span></label>
						</div>
						<div class="policybox">
							개인정보 수집 이용
							개인정보 수집 이용
							개인정보 수집 이용
						</div>
						<div class="btncenter"><div class="btn_blue" onClick="join()">가입완료</div></div>
						<p class="desc">비밀번호 분실시 이메일을 통해 확인하므로, 정확하게 입력해주세요.</p>
					</div>
				   </form>

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
function join(){
    var f = document.joinform;

	if(!document.getElementById('check1').checked){
		alert('서비스 약관에 동의해주세요');
		return false;
	}
	if(!document.getElementById('check2').checked){
		alert('개인정보 수집 이용 동의해주세요');
		return false;
	}
    if(f.useremail.value == ""){
        alert("이메일을 입력해 주세요.");
        return false;
    }
    if(f.nickname.value == ""){
        alert("닉네임을 입력해 주세요.");
        return false;
    }


	var pass=document.getElementById('p1').value;
	var passlen=pass.length;
	if(passlen<4){
		alert("비밀번호는 4자리 이상 입력해주세요.");
		return false;
	}

    if(f.userpassword.value == ""){
        alert("비밀번호를 입력해 주세요.");
        return false;
    }
    if(f.userpassword.value != f.userpassword_check.value){
        alert("비밀번호를 다시 확인해 주세요.");
        return false;
    }

	var email=document.getElementById('e').value;
	var echeck=email.indexOf("@");
	if(echeck==-1){
		alert("없는 이메일 주소입니다.");
		return false;
	}
	 f.submit();
}
</script>