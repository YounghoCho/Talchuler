<?
@session_start();
include("./include_head.php");
?>
<!--카카오톡-->
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><strong>로그인</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>로그인</span></div>
				<div class="graybox login">
					<div class="topbox">
						<div class="ltit">이메일로 로그인</div>
						
						<form method="POST" name="loginform" id='form' action="./login_chk.php">
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
					<!--API 로그인-->
						<!--auto_logout_link: 로그인하면 로그아웃으로 버튼변함
							onlogin: 로그인 완료후 수행될 함수
							FB.login(): 페이스북 로그인창 호출
						-->
						<img src="../images/btn/fb_login.png" style="width:360px;margin-top:15px;height:40px;cursor:pointer;margin-bottom:2%;margin-right:15px;" onclick="go()" scope="public_profile,email"/>
						<img src="../images/btn/kakao_login.png" style="width:360px;margin-top:15px;height:40px;cursor:pointer;margin-bottom:2%;" onclick="loginWithKakao()"/>
					
						</div>
					<div>
					
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
<!--kakao LOGIN-->
<script type='text/javascript'>
    Kakao.init('c482fe23fb4e43b3c5d0ed6e44319f67');
    function loginWithKakao() {
      // 로그인 창을 띄웁니다.
      Kakao.Auth.login({
        success: function(authObj) {
          //alert(JSON.stringify(authObj));
		  var token=authObj.access_token;
			 Kakao.API.request({
			  url: '/v1/user/me',
			  success: function(res) {
				  //로그인성공
				//alert(JSON.stringify(res)); 
				location.href="./login_chk_fb.php?id="+res.id+"&name="+res.properties.nickname+"";
			  },
			  fail: function(error) {
				alert(JSON.stringify(error));
			  }
			});
		  
        },
        fail: function(err) {
          alert(JSON.stringify(err));
        }
      });
    };

</script>
<!--FB LOGIN-->
<script>
//SDK 설정값
window.fbAsyncInit = function() {
	FB.init({
	  appId      : '120338278578773',
	  cookie     : true,
	  xfbml      : true,
	  version    : 'v2.8'
	});
	FB.AppEvents.logPageView();   
};
(function(d, s, id){
	 var js, fjs = d.getElementsByTagName(s)[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement(s); js.id = id;
	 js.src = "//connect.facebook.net/ko_KR/sdk.js";
	 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//사용안함
function statusChangeCallback(response) { 
	// response 객체는 현재 로그인 상태를 나타내는 정보를 보여준다. 
	// 앱에서 현재의 로그인 상태에 따라 동작하면 된다. 
	// FB.getLoginStatus().의 레퍼런스에서 더 자세한 내용이 참조 가능하다. 
	if (response.status === 'connected') { // 페이스북을 통해서 로그인이 되어있다. 
		Facebook_Login();
	}else if (response.status === 'not_authorized') { // 페이스북에는 로그인 했으나, 앱에는 로그인이 되어있지 않다. 
		FB.login(function(response){
			if (response.status === 'connected') {
			// Logged into your app and Facebook.
			Facebook_Login();
		  } else {
			// The person is not logged into this app or we are unable to tell. 
			alert("로그인에 실패했습니다. 고객센터로 문의해주세요(code:1)");
		  }
		});
	}
	else { // 페이스북에 로그인이 되어있지 않다. 따라서, 앱에 로그인이 되어있는지 여부가 불확실하다.
		FB.login(function(response){
			if (response.status === 'connected') {
			// Logged into your app and Facebook.
			Facebook_Login();
		  } else {
			// The person is not logged into this app or we are unable to tell. 
			alert("로그인에 실패했습니다. 고객센터로 문의해주세요(code:2)");
		  }
		});
	} 
}


//버튼동작
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.9&appId=120338278578773";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//로그인체크(getLoginStatus를 쓰면 모바일에서 팝업이 차단됨. 사용안함)
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

//로그인후 돌아가기
function direct(){
}
function login(){
	var f=document.getElementById('form');
	f.submit();
}
function go(){
		FB.login(function(res){
			//res.status와 res.userID를 가져올수있다. 
			if (res.status === 'connected') {
			// Logged into your app and Facebook.
			Facebook_Login();
		  } else {
			// The person is not logged into this app or we are unable to tell. 
			alert("로그인에 실패했습니다. 고객센터로 문의해주세요(code:1)");
		  }
		});
}
function Facebook_Login() { 
		FB.api('/me', function(response) { 
			//response.name과 response.id만 넘어온다
			location.href="./login_chk_fb.php?id="+response.id+"&name="+response.name+"";
		}); 
}
</script>