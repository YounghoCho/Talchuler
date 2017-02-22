<?
include('./index.php');
?>
<style>
#id02{
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
	width:260px;
	height:165px;
	border:none;
	background-color:#fff;
	color:#595757;
	font-weight: bold;
	overflow:hidden;	
}
</style>

<span id="id02">
	<center>
	<div id="pad2">
	<!--inner S-->
		<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;">
		탈출러 찾기
			<div style="float:right;margin-right:10px;"><button id="close">X</button></div>

		</div>

		<?
		$sql="select * from user where nickname='".$_GET['search']."'";
		$query=mysql_query($sql);
		$data=mysql_fetch_array($query);
		
		//검색결과가 없으면
		if(mysql_num_rows($query)<1){
		?>
		<font color="red" size="2">검색된 탈출러가 없습니다.</font>
		<?
		}else{//있으면
		?>
		<div style="width:40%;float:left;display:inline-block;padding-left:15px;">
			<?
				$filepath = "./upload/profiles/".$data['email'];	
				if(!file_exists($filepath)){
					?>
						<img src="./images/contents/img_login_d.png" width="55px"/></td>
					<?
				}else{
					?>
						<img src="./upload/profiles/<?echo $data['email']?>" style="width:55px" alt="" /></td>
					<?
				}
			?>
		</div>
		<div style="width:60%;float:left;display:inline-block;">
			<!--namebox S-->
			<div class="namebox">
				<strong>
				<?
				if($data['title']=="")
					echo("타이틀 없음"."<br>");
				else	
					echo ($data['title']."<br>");
				?></strong>
				<strong>
				<?
				echo($data['rank']." 위 ");
				?><em>in 대한민국</em></strong><br>
			
				<span><?
					echo($data['win']."탈 ");
					echo($data['lose']."패 ");
					
					if($data['win']==0 && $data['lose']==0)
						echo("0%");
					else if($data['win']!=0 && $data['lose']==0)
						echo("100%");
					else{
						$plus=$data['win']+$data['lose'];
						$division=$data['win']/$plus;
						$cal=$division*100;
						echo(substr($cal,0,2)."%");
					}
					?></span>
				<span><?echo("<br>")?>평균속도 0<?
				?></span>
			</div>
			<!--namebox E-->			
		</div>
			<div style="width:100%;height:100px;padding-top:5px;float:left;">
			
			<!--사용자조회 S-->
			<form action="./page/search_user_work.php" method="post">
			<button type="submit" style="width:200px;padding:5px;line-height:130%;border:1px solid;">친구추가</button>
			<input type="hidden" name="me" value="<?echo $_SESSION['user_email']?>">
			<input type="hidden" name="you" value="<?echo $data['email']?>">
			<input type="hidden" name="youNickname" value="<?echo $data['nickname']?>">
			<input type="hidden" name="myNickname" value="<?echo $_SESSION['user_nickname']?>">


			</form>
			</div>

			<!--사용자조회 E-->
			
		<?
		}
		?>

		<!--현재 페이지로 데이터 보내기-->	
		<div style="padding-top:40px;">
			<button onclick="location.href='./search_user.php'">다시검색</button>
		</div>
		<!--inner E-->
	</div>
	</center>
</span>

<script>
var close= document.getElementById('close');
var modal2= document.getElementById('id02');

window.onclick= function(event){
	if(event.target== close){
		modal2.style.display="none";
	}
}
</script>