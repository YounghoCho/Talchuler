<?
@header("Pragma: no-cache");
include("./include_head.php");
include("./include.php");

$sql="select * from user where email='".$_SESSION['user_email']."';";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>

	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>마이페이지 </span><strong>예약내역</strong></div></div>
		<div class="container_inner">
			<div class="mypage">
<?
include('./include_mypage.php');
?>
				<div class="c_info">
					<div class="my_tab">
						<a href="mypage1.php" class="on">예약 내역</a>
						<a href="mypage2.php">찜한 곳</a>
						<a href="mypage3.php">내 친구</a>
						<a href="mypage4.php">내 팀</a>
						<a href="mypage5.php">히스토리</a>
						<a href="mypage6.php">타이틀/마스터</a>
					</div>
					<div class="myreslist_tit"><span class="sp1">예약 번호</span><span class="sp2">게임 정보</span><span class="sp3">예약 정보</span><span class="sp4">금 액</span></div>
					<!-- 예약이 없을 때 -->
					<!--div class="no_myreslwrap">예약하신 방탈출게임이 없습니다.</div-->
					<!-- 예약이 있을 때 -->
				<!--	<div class="myreslwrap">
						<div class="myreslist">
							<div class="myres1"><span>예약 번호</span>(테마 번호   +날짜   +시간)</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt=""></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>1</li></ul>
										<div>
											매장 이름: 뭔지몰라<br><br>
											매장 위치: 어딘지몰라
										</div>
									</dd>
								</dl>
							</div>
							<div class="myres3">2016.12.25<br/>16 : 00 시<span>2명</span></div>
							<div class="myres4">44,000원<br />선결제 10,000원</div>
						</div>
						<div class="myreslist">
							<div class="myres1"><span>예약 번호</span>(테마 번호   +날짜   +시간)</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt=""></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>2</li></ul>
										<div>
											매장 이름: 뭔지몰라<br><br>
											매장 위치: 어딘지몰라
										</div>
									</dd>
								</dl>
							</div>
							<div class="myres3">2016.12.25<br/>16 : 00 시<span>2명</span></div>
							<div class="myres4">44,000원<br />선결제 10,000원</div>
						</div>
						<div class="myreslist">
							<div class="myres1"><span>예약 번호</span>(테마 번호   +날짜   +시간)</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt=""></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>3</li></ul>
										<div>
											매장 이름: 뭔지몰라<br><br>
											매장 위치: 어딘지몰라
										</div>
									</dd>
								</dl>
							</div>
							<div class="myres3">2016.12.25<br/>16 : 00 시<span>2명</span></div>
							<div class="myres4">44,000원<br />선결제 10,000원</div>
						</div>
						<div class="myreslist">
							<div class="myres1"><span>예약 번호</span>(테마 번호   +날짜   +시간)</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt=""></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>4</li></ul>
										<div>
											매장 이름: 뭔지몰라<br><br>
											매장 위치: 어딘지몰라
										</div>
									</dd>
								</dl>
							</div>
							<div class="myres3">2016.12.25<br/>16 : 00 시<span>2명</span></div>
							<div class="myres4">44,000원<br />선결제 10,000원</div>
						</div>
					</div>
				</div>
				<div class="pagination">
					<a href="#" class="btn_page_first">&lt; &nbsp; &nbsp;이전</a>
					<span>
						<a href="#" class="on">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
					</span>
					<a href="#" class="btn_page_last">다음&nbsp; &nbsp; &gt;</a>
				</div>
				-->
			</div>
		</div>
	</div>
</div><!-- end : id : wrap -->
</body>
</html>

<?
include("./include_footer.php");
?>

<script type="text/javascript" src="../js/common.js"></script>

<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>