<?
include("./include_head.php");
include("./include.php");
?>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>마이페이지 > </span><strong>히스토리</strong></div></div>
		<div class="container_inner">
			<div class="mypage">
<?
include('./include_mypage.php');
?>		
				<div class="c_info">
					<div class="my_tab">
						<a href="mypage1.php">예약 내역</a>
						<a href="mypage2.php">찜한 곳</a>
						<a href="mypage3.php">내 친구</a>
						<a href="mypage4.php">내 팀</a>
						<a href="mypage5.php" class="on">히스토리</a>
						<a href="mypage6.php">타이틀/마스터</a>
					</div>
					<div class="historyinfo"><span>누적게임 48</span><em>누적점수 19340</em> <div><span>성공 0</span><em>실패 0</em></div></div>
					<div class="myreslist_tit st02"><span class="sp1">게임 정보</span><span class="sp2">함께한 친구</span><span class="sp3">결과</span></div>
					<!-- 히스토리가 없을 때 -->
					<!--div class="no_myreslwrap">히스토리가 없습니다.</div-->
					<!-- 히스토리가 있을 때 -->
					<div class="myreslwrap">
						<div class="myreslist st02">
							<div class="myres1"><span>16.11.11</span>14:00</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt=""></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>1</li></ul>
									</dd>
								</dl>
							</div>
							<div class="myres3">친구1, 친구2<br />친구3, 비회원<span>4명</span></div>
							<div class="myres4">힌트 0개 사용<br /><strong>36 : 16 초</strong>만에 탈출!</div>
						</div>
						<div class="myreslist st02">
							<div class="myres1"><span>16.11.11</span>14:00</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt=""></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>2</li></ul>
									</dd>
								</dl>
							</div>
							<div class="myres3">친구1, 친구2<br />친구3, 비회원<span>4명</span></div>
							<div class="myres4">힌트 0개 사용<br /><strong>36 : 16 초</strong>만에 탈출!</div>
						</div>
						<div class="myreslist st02">
							<div class="myres1"><span>16.11.11</span>14:00</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt=""></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>1</li></ul>
									</dd>
								</dl>
							</div>
							<div class="myres3">친구1, 친구2<br />친구3, 비회원<span>4명</span></div>
							<div class="myres4">힌트 0개 사용<br /><strong>36 : 16 초</strong>만에 탈출!</div>
						</div>
						<div class="myreslist st02">
							<div class="myres1"><span>16.11.11</span>14:00</div>
							<div class="myres2">
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt=""></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1"><em>난이도 </em>2</li><li class="icon_new2"><em>공포감 </em>2</li></ul>
									</dd>
								</dl>
							</div>
							<div class="myres3">친구1, 친구2<br />친구3, 비회원<span>4명</span></div>
							<div class="myres4">힌트 0개 사용<br /><strong>36 : 16 초</strong>만에 탈출!</div>
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
