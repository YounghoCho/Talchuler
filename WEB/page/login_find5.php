<?
include("./include_head.php");
?>
<style>
@media all and (max-width:1024px){
	#emailfont{font-size:18px;font-weight:bold;}
}
</style>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>로그인 > </span><strong>이메일 찾기</strong></div></div>
		<div class="container_inner">
			<div class="loginarea">
				<div class="tit"><span>이메일 찾기</span><div class="lfind"><span></span></div></div>
				<div class="graybox find">
					<div class="ftit">회원정보와 일치하는 이메일입니다.</div>
					<div class="topbox">
					<?
					$sql="select email from user where phone='".$_POST['phone']."'";
					$q=mysql_query($sql);
					$data=mysql_fetch_array($q);
					?>
					 <form name="findform" action="./login_find5.php" method="post" name="login_form">
						<div class="inputbox" style="width:50%;margin-left:25%;text-align:center;margin-top:10%;">
							<font id="emailfont" size='5px'><?echo $data[0]?></font>
						</div>
					 </form>

					</div> 
				</div>
				<div class="nextarea">
					<button onClick="location.href='./login.php'"><a class="btn_next">로그인</a></button>
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
