<?
include("./include_head.php");

include("./include.php");
$find_sql="select email from user where email='".$_POST['email']."';";
$find_q=mysql_query($find_sql);
$find_r=mysql_fetch_array($find_q);

if(!$find_r[0]){
	?>
	<script>
		alert("등록된 이메일이 없습니다.");
		history.back();
	</script>
	<?
}
?>

	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>비밀번호 찾기</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>비밀번호 찾기</span><div class="lfind"><span>01. 아이디입력 ></span><strong>02. 본인 확인 ></strong><span>03. 비밀번호 재설정</span></div></div>
				<div class="graybox find">
					<div class="ftit">비밀번호를 찾을 방법을 선택하세요.</div>
					<div class="topbox">
					
						<ul class="lflist">
							<li>
							<!--	<div class="lchkbox">
									<label class="ichk"><input id="first" name="first" type="checkbox"><i></i><span>회원정보에 등록한 휴대전화로 인증<em>(+82 01-7***-***6 )</em></span></label>
								</div>-->
							</li>
							<li>
								<div class="lchkbox">
									<label class="ichk"><input id="second" name="second" type="checkbox"><i></i><span>본인확인 이메일로 인증<em>
									<?
									echo ($find_r['email']);
									?></em></span></label>
								</div>
							</li>
						</ul>

					</div> 
				</div>
				<div class="nextarea">
					<a onclick="findemail()" class="btn_next">다음</a>
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
	/*if(!document.getElementById('first').checked && !document.getElementById('second').checked){
	alert('한가지 방식을 선택해 주세요');
	return false;
	}
	if(document.getElementById('first').checked && document.getElementById('second').checked){
	alert('한가지 방식만 선택해 주세요');
	return false;
	}*/
	if(!document.getElementById('second').checked){
	alert('이메일을 선택해 주세요');
	return false;
	}
//	if(document.getElementById('first').checked)
//		location.href="login_find4.php";
	else{
		location.href="login_find_mailsend.php?email=<?echo $find_r['email']?>";
	}
}
</script>