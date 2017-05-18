<?
include('./include_head.php');
include('./include.php');
?>
<html xml:lang="ko" lang="ko">
 
<head>
<title>탈출러</title>
<meta charset="utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<style>
.datebox {position:relative;margin-right:5px; display:inline-block; vertical-align:middle;}
.datebox input.txt {width:130px; height:30px; cursor:pointer; }
.datebox img {position:absolute; top:12px; right:5px; width:14px}
.datebox img {width:11px; top:12px;}

</style>
</head>

		<div class="choicearea">
			<div class="inner">
			<?include('./search_module.php');?>
			</div>
		</div>

<style>
.lowest{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:17px; 
	 padding-top:5px;
}
.lowest:hover{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:19px; 
	 padding-top:5px;
}
.hidecontent{width:100%;height:84px;overflow:hidden;}

@media all and (max-width:1041px){
.lowest{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:14px; 
	 padding-top:5px;
	 margin-top:-57px;
	 margin-right:-10px;
}
.lowest:hover{
	 float:right;
	 margin-right:20px;
	 vertical-align:middle; 
	 display:inline-block; 
	 font-size:16px; 
	 padding-top:5px;
	 margin-top:-57px;
	 margin-right:-10px;
}
}
</style>
	<!--	<div class="timenow">
			<div class="inner">
			<!--<div class="tit"><strong><b>타임 핫딜!</b></strong><em>선착순, 지금바로 시작하는 게임!  30~80% 핫딜까지!</em>
					<div class='lowest' onclick="location.href='./page/timeHotDeal.php'">현재 29개 중 <b><font color="red">최저가 9000</font>원 > </b></div>
				</div>
				<!-- s : timenow pc -->
			<!--	<div class="slidearea">
					<ul class="bxslider01">
						<li>
							<ul>
								<li>
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='./theme_view.php?g_idx=1'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li>
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='./theme_view.php?g_idx=2'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='./theme_view.php?g_idx=3'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>전역하는날</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='./theme_view.php?g_idx=4'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>살인자의방</strong><em>강남</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='./theme_view.php?g_idx=5'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>-->
					<!--li~/li반복하면 dot표시가 생기면서 화면넘어감-->
				<!--	</ul>
				</div>-->
				<!-- e : timenow pc -->
				<!-- s : timenow mobile -->
			<!--	<div class="slidearea_m">
					<ul class="bxslider01_m">
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='./theme_view.php?g_idx=1'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='./theme_view.php?g_idx=2'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
							</ul>
						</li>
					</ul>
				</div>-->
				<!-- e : timenow mobile -->
		<!--	</div>
		</div>-->
<style>
.container{
	width:74%;
	margin-left:13%;
}
.ultra{
	margin-left:13%;
	width:74%;
	font-size:130%;
	font-weight:bold;
	margin-top:10px;
	margin-bottom:10px;
}
.field{
	padding-top:3px;
	width:32%;
	margin-left:1%;
	float:left;
	display:block;
	margin-bottom:15px;
	overflow:hidden;
}	
.box{
	width:108%;
	overflow:hidden;
}
.imgDiv{
	width:30%;
	height:150px;
	float:left;
	display:inline;
}
.contentDiv{
	width:68%;
	height:150px;
	overflow:auto;
	float:left;
	display:inline;
	}
.imgDiv img{
	width:95%;
	}

.bottomDiv{
	width:100%;
	height:40px;
	float:left;
	display:inline-block;
	background-color:#eee
}
.heart{width:12%;float:left;display:inline;}
.share{width:12%;float:left;display:inline;}
.empty{width:16%;float:left;display:inline;}
.basicPrice{width:30%;float:left;display:inline;}
.lowestPrice{width:30%;float:left;display:inline;}

.ultracase{width:60%;margin-left:20%;margin-right:20%;margin-top:20px;}
.pieces{width:33%;float:left;cursor:pointer;height:150px;}
.gImage_box{position:relative; float:left;border:0px solid #aaa; width:155px; height:150px; text-align:center; display:table-cell; background-color:#a0a0a0;}
.gImage{position:absolute; width:auto; height:auto; max-height:150px; max-width:155px; border:0px solid #aaa; background-color:#ffffff; margin:auto; top:0; bottom:0; left:0; right:0;}
/*.gImage{width:94%;margin:2%;height:150px;}*/
.img1, .img2, .img3{width:13px;margin-right:2px;margin-bottom:2px;}
@media all and (max-width:1041px){
	.ultra{
	font-size:100%;
	}
	.container{
	width:96%;
	margin-left:1%;
	}
	.field{
	width:100%;
	float:left;
	display:block;
	overflow:hidden;
	}
	.box{
	width:105%;
	overflow-y:hidden;
	}
	.imgDiv{
	width:35%;
	height:150px;
	float:left;
	display:inline;
	margin-bottom:10px;
	}
	.contentDiv{
	width:65%;
	height:150px;
	float:left;
	display:inline;
	margin-bottom:10px;
	overflow:auto;
	}
	.imgDiv img{
	width:95%;
	}
	.bottomDiv{
	width:100%;
	height:48px;
	float:left;
	display:inline-block;
	background-color:#eee
	}
	.heart{width:12%;float:left;display:inline;}
	.share{width:12%;float:left;display:inline;}
	.empty{width:16%;float:left;display:inline;}
	.basicPrice{width:30%;float:left;display:inline;}
	.lowestPrice{width:30%;float:left;display:inline;}

	.ultracase{width:90%;margin-left:5%;margin-right:5%;margin-top:20px;}
	.pieces{width:100%;float:left;cursor:pointer;}

	/*.gImage{width:90%;}*/
	.img1, .img2, .img3{width:10px;margin-right:2px;margin-bottom:10px;}
	td {font-size:11px;}
}
</style>


</div><!--여기까지가 wrap이라서 파란선이 남는다-->

<!--출력시작부-->
<div class="ultracase">
		<!--<div style="width:300px;"><img src="../images/icon/icon_maintit.gif" style="margin-right:1px;"/><font size="4pt"><b>울트라 추천</b></font>&nbsp;&nbsp;<font color="#888">광고</font></div>-->

<!--search_module.php S-->
<?
//먼저 지역데이터로 파트너를 검색한다.
//홍대-마포구, 신촌-서대문구, 강남-강남구, 대학로-종로구, 신림-관악구, 건대-광진구, 목동-양천구
//안양시, 화성시, 수원시
$startPostNumber=0;
$endPostNumber=0;
$startLevel=$_GET['start_level'];
$endLevel=$_GET['end_level'];
$horror=$_GET['horror'];

switch($_GET['rigion']){
	case 'all':
		$startPostNumber='01000';
		$endPostNumber='18635';
		break;
	case 'seoul':
		$startPostNumber='01000';
		$endPostNumber='08866';
		break;
	case 'mapo':
		$startPostNumber='03900';
		$endPostNumber='04214';
		break;
	case 'seodaemoon':
		$startPostNumber='03600';
		$endPostNumber='03789';
		break;
	case 'gangnam':
		$startPostNumber='06000';
		$endPostNumber='06378';
		break;
	case 'jonglo':
		$startPostNumber='03000';
		$endPostNumber='03198';
		break;
	case 'gwanack':
		$startPostNumber='08700';
		$endPostNumber='08866';
		break;
	case 'gwangjin':
		$startPostNumber='04900';
		$endPostNumber='05120';
		break;
	case 'yangcheon':
		$startPostNumber='07900';
		$endPostNumber='08111';
		break;
	case 'gyeonggi':
		$startPostNumber='10000';
		$endPostNumber='18635';
		break;
	case 'suwon':
		$startPostNumber='16200';
		$endPostNumber='16713';
		break;
	case 'anyang':
		$startPostNumber='13900';
		$endPostNumber='14128';
		break;
	case 'hwasung':
		$startPostNumber='18200';
		$endPostNumber='18635';
		break;
}
$postSql="select p_id, p_localName from partner where p_postNumber1 >= '".$startPostNumber."' and p_postNumber1 <= '".$endPostNumber."'";
$postQuery=mysql_query($postSql);
while($post=mysql_fetch_array($postQuery)){	//회원수만큼 돌고
	
	//난이도> <, 공포 여부에 따라 게임을 출력한다.
	if($_GET['horror']=='공포포함'){
		$sql="select g_idx, g_title, g_level, g_horror, g_content, g_summary from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and p_id='".$post['p_id']."'";
	}elseif($_GET['horror']=='공포만'){
		$sql="select g_idx, g_title, g_level, g_horror, g_content, g_summary from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and g_horror > 0 and p_id='".$post['p_id']."'";
	}else{
		$sql="select g_idx, g_title, g_level, g_horror, g_content, g_summary from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and g_horror <= 0 and p_id='".$post['p_id']."'";
	}
	$q=mysql_query($sql);
	while($data=mysql_fetch_array($q)){
		//partner = $post
		//game = $data
		//gameImage = $image
		$imagesql="select filename from gameImage where g_idx='".$data['g_idx']."'";
		$imageq=mysql_query($imagesql);
		$image=mysql_fetch_array($imageq);
	//실제출력
	?>
	<table class="pieces" onclick='letsview(<?echo $data['g_idx']?>)'>
	<tr>
		<td>
			<table style="table-layout: fixed;height:165px;">
				<tr>
				<td rowspan="3" width="165px" style="padding-top:10px; padding-bottom:10px;">
					<div class="gImage_box"><img class="gImage" src="../manager/gameImage/<?echo $image['filename']?>.jpg"></div></td>
				<td style="height:20px;padding-top:10px;">
					<font size="4pt" style="font-weight:bold"><?echo $data['g_title']?></font></td>
				</tr>
				<tr>
				<td style="vertical-align:top;height:40px;">
					<img class="img1" src="../images/icon/shop.png"/><?echo $post['p_localName']?><br>
					<img class="img2" src="../images/icon/icon_new1.png"/>난이도 : <?echo $data['g_level']?>&nbsp;&nbsp;
					<img  class="img3" src="../images/icon/icon_new2.png"/>공포감 : <?echo $data['g_horror']?>
				</td>
				</tr>
				<tr>
				<td style="vertical-align:top;padding:0;overflow:hidden;">
					<div class="hidecontent">
					<?
					if($data['g_summary']==''){
						$data['g_summary']=$data['g_content'];
						echo $data['g_summary'];
					}else{
						echo $data['g_summary'];					
					}
					?>
					</div>
				</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	<?
 }
}

?>
<!--아래 스크립트가, 날짜 스케쥴 가져오는 js-->
<script type="text/javascript" src="../js/common.js"></script>

</html>

