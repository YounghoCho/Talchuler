<?
include("./include_head.php");
include("./include.php");
?>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>마이페이지 > </span><strong>내 친구</strong></div></div>
		<div class="container_inner">
			<div class="mypage">
<?
include('./include_mypage.php');
?>	
				<div class="c_info">
					<div class="my_tab">
						<a href="mypage1.php">예약 내역</a>
						<a href="mypage2.php">찜한 곳</a>
						<a href="mypage3.php" class="on">내 친구</a>
						<a href="mypage4.php">내 팀</a>
						<a href="mypage5.php">히스토리</a>
						<a href="mypage6.php">타이틀/마스터</a>
					</div>
					<div class="myfriend_tit tab">
						<a href="#" class="on">내친구</a>
						<a href="#">나를 등록한 친구</a>
					</div>
					<div class="sch_friend">
						<a href="#" class="btn_f_add">친구추가</a>
						<div class="schbox">
							<input type="text" class="txt st02" placeholder="친구의 닉네임을 입력하세요.">
							<a href="#" class="btn_sch">검색</a>
						</div>
					</div>
					<div class="hiddenarea on">
						<table class="friendlist">
							<thead>
								<tr>
									<th class="rank1">번호</th>
									<th class="rank2">전국순위</th>
									<th class="f_info">친구정보</th>
									<th class="rank3">랭킹순</th>
								</tr>
							</thead>

							<tbody>
<?
//친구의 user정보를 얻는다.
$join="select f_nickname from friends where user='".$_SESSION['user_email']."';";
$joinq=mysql_query($join);
$i=1;
while($data=mysql_fetch_array($joinq)){
	$find_user=$data['f_nickname'];
	//join문을 쓰지 않는다. 이게 정확함. join문 쓰면 레코드 행 순서대로 비교하기때문에 원하는 결과가아님	
	$find_sql="select * from user where nickname='".$find_user."'";
	$findq=mysql_query($find_sql);
	$findr=mysql_fetch_array($findq);

	//친구들의 rank로 순위를 매겨야함, 근데 여기서 array를 만들어서 솔팅해봐야
	//아랫줄에서 이미 tr~/tr이 다 출력되고 난 후라서 비순차적 출력이 불가능함.
	//친구 순위에서 -> 번호로 바꿔놓음 일단.
?>
	
								<tr>
									<td class="rank1">
									<?
									echo($i++);
									?>
									</td>
									<td class="rank2"><?echo ($findr['rank'])?></td>
									<td class="f_info">
<?
if(!file_exists($filepath)){
	?>
		<img src="../images/contents/img_login_d.png" width="30px;height:35px;"/><?echo ($data['f_nickname'])?></td>
	<?
}else{
	?>
		<img src="../upload/profiles/<?echo $findr['nickname']?>" style="width:30px;height:35px;" alt="" /><?echo ($data['f_nickname'])?></td>
	<?
}
?>									

									
									<td class="rank3"><a href="#">친구삭제</a></td>
								</tr>
<?
}
?>

							</tbody>
						</table>
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
					<div class="hiddenarea">
						<ul class="reg_friend">
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
							<li><img src="../images/contents/img_friend2.png" alt="" /><span>친구1</span><div class="btnbox"><a href="#" class="btn_gray">등록</a><a href="#" class="btn_gray">삭제</a></div></li>
						</ul>
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
		</div>
	</div>
<?
include("./include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>
