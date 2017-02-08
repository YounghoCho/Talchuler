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
/*수정영역 S*/
#id02{
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
#pad2{
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
#id03{
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
#pad3{
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

/*수정영역 E*/
</style>


	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>마이페이지 </span><strong>내정보 수정</strong></div></div>
		<div class="container_inner">
			<div class="mypage">
<!--edit page S-->
			<div class="p_info">
					<div class="f_l">
						<div class="in_1">
							<div class="imgbox">
<?
if(!file_exists($filepath)){
	?>
		<img src="../images/contents/img_login_d.png" width="100px;height:150px;"/>
	<?
}else{
	?>
		<img src="../upload/profiles/<?echo ($_SESSION['user_email'])?>" style="width:100px;height:150px;"  alt="" />	
<?
}
?>
							<a href="#" class="btn_camera">
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
									<td class="il1">이메일</td>
									<td class="il2" style="text-align:left;padding-left:5%;"><?
									echo($data['email']);
									?></td>
									<td class="il3"></td>
								</tr>
								<tr>
									<td class="il1">닉네임</td>
									<td class="il2" style="text-align:left;padding-left:5%;"><?
									echo($data['nickname']);
									?></td>
									<td class="il3"><button onclick="document.getElementById('id02').style.display='block'" style="border:2px solid #ececec;padding:3px;padding-left:20px;padding-right:20px;">수정하기</button></td>
								</tr>
								<tr>
									<td class="il1">비밀번호</td>
									<td class="il2" style="text-align:left;padding-left:5%;"><?
									echo("******");
									?></td>
									<td class="il3"><button onclick="document.getElementById('id03').style.display='block'" style="border:2px solid #ececec;padding:3px;padding-left:20px;padding-right:20px;">수정하기</button></td>
								</tr>
								<tr>
									<td class="il1">휴대폰번호</td>
									<td class="il2" style="text-align:left;padding-left:5%;"><?
										$data['']
									?></td>
									<td class="il3"><button onclick="document.getElementById('id04').style.display='block'" style="border:2px solid #ececec;padding:3px;padding-left:20px;padding-right:20px;">수정하기</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
<!--edit page E-->
				</div>
			</div>
		</div>
	</div>

<!--수정영역 S-->
<span id="id02">
	<div id="pad2">
		<div style="margin:3%;">변경하실 닉네임을 입력해주세요..</div>
		<div style="margin:3%;">
			<form action="./mypage_edit_nickname.php" method="post">
			새 닉네임:&nbsp;&nbsp; <input name="nickname" size="20" style="border:solid 2px #cdced2; height:25px; color:#515151;"><br><br>
			<center><button type="submit" style="padding:5px;">변경</button></center>
			</form>
		</div>
	</div>
</span>

<span id="id03">
	<div id="pad3">
		<div style="margin:3%;">변경하실 비밀번호를 입력해주세요.</div>
		<div style="margin:3%;">
			<form action="./mypage_edit_pass.php" method="post">
			새 비밀번호:&nbsp;&nbsp; <input name="pass1" type="password" size="20" style="border:solid 2px #cdced2; height:25px; color:#515151;"><br><br>
			비밀번호 확인: <input name="pass2" type="password" style="border:solid 2px #cdced2; height:25px; color:#515151;"><br><br>
			<center><button type="submit" style="padding:5px;">변경</button></center>
			</form>
		</div>
	</div>
</span>

<span id="id04">
	<div id="pad4">
	</div>
</span>

<?
include("./include_footer.php");
?>

</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>

<script>
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
</script>
