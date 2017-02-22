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
						<a href="../search_user.php" class="btn_f_add">탈출러검색</a>
					<!--	<div class="schbox">
							<input name="friend" type="text" class="txt st02" placeholder="친구의 닉네임을 입력하세요.">
							<a href="#" class="btn_sch">검색</a>
						</div> -->
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
$i=1;

//친구를 조회한다
$sql="select f_email from friends where user='".$_SESSION['user_email']."';";
$q=mysql_query($sql);
while($data=mysql_fetch_array($q)){
	//친구의 정보를 찾는다.
	$find_sql="select * from user where email='".$data['f_email']."'";
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
									$filepath = "../upload/profiles/".$findr['email'];	
												
									if(!file_exists($filepath)){
										?>
											<img src="../images/contents/img_login_d.png" width="30px;height:35px;"/><?echo ($findr['nickname'])?></td>
										<?
									}else{
										?>
											<img src="../upload/profiles/<?echo $findr['email']?>" style="width:30px;height:35px;" alt="" /><?echo ($findr['nickname'])?></td>
										<?
									}
									?>									

									
									<td class="rank3">
										<form action='delete_friend.php' method='POST'>
										<input type="hidden" name="email" value="<?echo $findr['email']?>">
										<button type='submit'>친구삭제</button>
										</form>
									</td>
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
							<?
							$sql="select * from whoAddMe where user='".$_SESSION['user_email']."' ";
							$q=mysql_query($sql);
							while($d=mysql_fetch_array($q)){
							?>
							<li>
								<?
								$filepath = "../upload/profiles/".$d['f_email'];	
									
								if(!file_exists($filepath)){
									?>
										<img src="../images/contents/img_login_d.png" width="60px;"/>
									<?
								}else{
									?>
										<img src="../upload/profiles/<?echo $d['f_email']?>" style="width:60px" alt="" />
									<?
								}
								?>	
								<span><?echo $d['f_nickname']?></span>
							<!--디비가 꼬인다 나중에 처리
							<div class="btnbox">
									<a href="#" class="btn_gray" onclick="regist()">등록</a>
									<a href="#" class="btn_gray">삭제</a>
							</div>
							-->
							</li>

							<?
							}
							?>
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
<script>
function regist(){
	var f1= document.getElementById('f1');
	f1.submit();
}
</script>