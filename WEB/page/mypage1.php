<?
@header("Pragma: no-cache");
include("./include_head.php");
include("./include.php");

$sql="select * from user where email='".$_SESSION['user_email']."';";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>
<style>
#id01{
	display:none;
	position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
    padding-top: 60px;
	-webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
#pad{
	position:absolute;
	bottom:35%;
	right:25%;
	width:50%;
	height:30%;
	border:none;
	background-color:#EBEBEB;
	color:#595757;
	font-weight: bold;
}
</style>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>마이페이지 </span><strong>예약내역</strong></div></div>
		<div class="container_inner">
			<div class="mypage">
				<div class="p_info">
					<div class="f_l">
						<div class="in_1">
							<div class="imgbox">
							<img src="../upload/profiles/<?echo $_SESSION['user_nickname']?>" style="width:100%"><a href="#" class="btn_camera">
							<img src="../images/btn/btn_camera.png" onclick="document.getElementById('id01').style.display='block'"/></a></div>
							
							<span id="id01">
								<div id="pad">
									<form enctype="multipart/form-data" action="../upload/upload.php" method="POST">
										<!-- MAX_FILE_SIZE는 file 입력 필드보다 먼저 나와야 합니다 -->
										<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
										<div style="width:90%;height:70%;margin:5%;background-color:black;color:white;padding:1%;">
											<input name="userfile" type="file" style="background-color:w;color:white;width:100%;"/>
										</div>
										<div style="width:50%;height:10%;position:fixed;top:55%;right:25%;">
											<center>
											<input type="submit" value="파일 전송" style="background-color:black;color:white;padding:1%;"/>
											</center>
										</div>
									</form>
								</div>
							</span>
							<div class="namebox">
								<strong>
								<?
								if($data['title']=="")
									echo("타이틀 없음");
								else	
									echo $data['title']
								?></strong>
								<strong>
								<?
								echo($data['rank']." 위");
								?><em>in 대한민국</em></strong>
							</div>
						</div>
					</div>
					<div class="f_r">
						<table class="infolist">
							<tbody>
								<tr>
									<td class="il1">내 머니</td>
									<td class="il2"><?
									echo($data['money']." 원");
									?></td>
									<td class="il3"><a href="#">충전하기</a></td>
								</tr>
								<tr>
									<td class="il1">내 포인트</td>
									<td class="il2"><?
									echo($data['point']." point");
									?></td>
									<td class="il3"><a href="#">포인트 공략보기</a></td>
								</tr>
								<tr>
									<td class="il1">내 승률</td>
									<td class="il2"><?
									echo($data['win']."탈 ");
									echo($data['lose']."패 ");
									
									if($data['win']==0 && $data['lose']==0)
										echo("0 %");
									else if($data['win']!=0 && $data['lose']==0)
										echo("100 %");
									else{
										$plus=$data['win']+$data['lose'];
										$division=$data['win']/$plus;
										$cal=$division*100;
										echo(substr($cal,0,2)." %");
									}
									?></td>
									<td class="il3">&nbsp;</td>
								</tr>
								<tr>
									<td class="il1">평균 속도</td>
									<td class="il2" ><?
										$data['']
									?></td>
									<td class="il3">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="c_info">
					<div class="my_tab">
						<a href="mypage1.html" class="on">예약 내역</a>
						<a href="mypage2.html">찜한 곳</a>
						<a href="mypage3.html">내 친구</a>
						<a href="mypage4.html">내 팀</a>
						<a href="mypage5.html">히스토리</a>
						<a href="mypage6.html">타이틀/마스터</a>
					</div>
					<div class="myreslist_tit"><span class="sp1">예약 번호</span><span class="sp2">게임 정보</span><span class="sp3">예약 정보</span><span class="sp4">금 액</span></div>
					<!-- 예약이 없을 때 -->
					<!--div class="no_myreslwrap">예약하신 방탈출게임이 없습니다.</div-->
					<!-- 예약이 있을 때 -->
					<div class="myreslwrap">
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
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>