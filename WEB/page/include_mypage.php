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
								<strong><br>
									<button style="padding:5px;background-color:#ececec;color:#000;border:solid 1px #ececec;" onClick="location.href='./mypage_edit.php'">내정보 수정</button>
								</strong>
							</div>
						</div>
					</div>
					<div class="f_r">
						<table class="infolist">
							<tbody>
							<!--	<tr>
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
								</tr>-->
							</tbody>
						</table>
					</div>
				</div>
