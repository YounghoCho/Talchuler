<?
include("./include_head.php");
print_r($_POST);
?>

	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>이메일 찾기</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>이메일 찾기</span></div>
				<div class="graybox find">
					<div class="ftit">고객님의 정보와 일치하는 이메일 목록입니다.</div>
					<div class="topbox">
						<div class="inputbox">
							<ul class="emailist">
								<li>
									<div class="lchkbox">
										<label class="ichk"><input type="radio" name="rdo"><i></i><span>이메일 1 @NAVER.COM<em>가입 : 2016. 01. 06</em></span></label>
									</div>
								</li>
								<li>
									<div class="lchkbox">
										<label class="ichk"><input type="radio" name="rdo"><i></i><span>이메일 2 @NAVER.COM<em>가입 : 2016. 01. 06</em></span></label>
									</div>
								</li>
							</ul>
						</div>
					</div> 
				</div>
				<div class="nextarea">
					<a href="#" class="btn_next">다음</a>
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
