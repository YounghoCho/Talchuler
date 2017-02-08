<?
include("./include_head.php");
include("./include.php");
?>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>마이페이지 > </span><strong>내 팀</strong></div></div>
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
						<a href="mypage4.php" class="on">내 팀</a>
						<a href="mypage5.php">히스토리</a>
						<a href="mypage6.php">타이틀/마스터</a>
					</div>
					<div class="myfriend_tit st02 tab">
						<a href="#" class="on">전체글</a>
						<a href="#">사진첩</a>
						<a href="#">멤버</a>
					</div>
					<div class="hiddenarea on">
						<div class="teamarea">  
							<div class="l_box">
								<dl class="teaminfo">
									<dt><div class="t_logo"><img src="../images/contents/img_t_logo.png" alt="" /><p>팀명</p></div></dt>
									<dd>
										<div class="mem">멤버 16 명 <a href="#" class="btn_add">초대</a></div>
										<div class="num">점수 12345점<br />순위 7위</div>
									</dd>
								</dl> 
							</div>
							<div class="r_box">
								<div class="totalwrt"><a href="#" class="btn_add">사진첨부</a><div><input type="text" class="txt" placeholder="멤버들에게 어떤 말을 하고 싶으세요?" /></div><a href="#" class="btn_write">게시</a></div>
								<div class="t_notice">공지사항으로 지정한 상단바 입니다.</div>
								<dl class="replylist">
									<dt><div class="reply_info"><strong>담력왕 최탐정</strong>2016. 12. 10</div><a href="#" class="btn_report">신고하기</a></dt>
									<dd>
										<div class="textbox">지니어스  타이틀 비밀혜택 아시는 분 있나요? ㅠㅠ 완전 갖고싶어요..</div>
										<div class="likebox"><span><strong>like</strong> 36</span><span>댓글 12</span></div>
										<div class="writebox"><input type="" class="txt" /><a href="#" class="btn_w">입력</a></div>
									</dd>
								</dl>
								<dl class="replylist">
									<dt><div class="reply_info"><strong>담력왕 최탐정</strong>2016. 12. 10</div><a href="#" class="btn_report">신고하기</a></dt>
									<dd>
										<div class="textbox">저 어제 비마니님이마스터 땄어요!!ㅋㅋ 인증샷!! <div class="ibox"><img src="../images/contents/img_replyinfo.jpg" alt="" /></div></div>
										<div class="likebox"><span><strong>like</strong> 36</span><span>댓글 12</span></div>
										<div class="writebox"><input type="" class="txt" /><a href="#" class="btn_w">입력</a></div>
									</dd>
								</dl>
							</div>
						</div>						
					</div>
					<div class="hiddenarea">
						<div class="teamarea">  
							<div class="l_box">
								<dl class="teaminfo">
									<dt><div class="t_logo"><img src="../images/contents/img_t_logo.png" alt="" /><p>팀명</p></div></dt>
									<dd>
										<div class="mem">멤버 16 명 <a href="#" class="btn_add">초대</a></div>
										<div class="num">점수 12345점<br />순위 7위</div>
									</dd>
								</dl> 
							</div>
							<div class="r_box">
								<div class="addphoto">전체사진 185<a href="#" class="btn_add">멤버초대하기</a></div>
								<ul class="teamphoto">
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
									<li><img src="../images/contents/img_teamphoto.jpg" alt="" /></li>
								</ul>
							</div>
						</div>						
					</div>
					<div class="hiddenarea">
						<div class="teamarea">  
							<div class="l_box">
								<dl class="teaminfo">
									<dt><div class="t_logo"><img src="../images/contents/img_t_logo.png" alt="" /><p>팀명</p></div></dt>
									<dd>
										<div class="mem">멤버 16 명 <a href="#" class="btn_add">초대</a></div>
										<div class="num">점수 12345점<br />순위 7위</div>
									</dd>
								</dl> 
							</div>
							<div class="r_box">
								<div class="addarea"><a href="#" class="btn_add">멤버초대하기</a></div>
								<div class="scharea">
									<div class="schbox">
										<input type="text" class="txt st02" placeholder="검색하실 닉네임을 입력하세요.">
										<a href="#" class="btn_sch">검색</a>
									</div>
								</div>
								<ul class="teamlist">
									<li><span><img src="../images/contents/img_friend.png" alt="친구사진">팀원1</span><em>팀장</em></li>
									<li><span><img src="../images/contents/img_friend.png" alt="친구사진">팀원1</span><em>팀장</em></li>
									<li><span><img src="../images/contents/img_friend.png" alt="친구사진">팀원1</span><em>팀장</em></li>
									<li><span><img src="../images/contents/img_friend.png" alt="친구사진">팀원1</span><em>팀장</em></li>
								</ul>
							</div>
						</div>
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
