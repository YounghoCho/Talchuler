<?
include('./include_head.php');
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
#searcharea{width:25%}
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
@media all and (max-width:1041px){
#searcharea{width:80%;font-size:12px;}
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
<!--
		<div class="timenow">
			<div class="inner">
				<div class="tit"><strong><b>타임 핫딜!</b></strong><em>선착순, 지금바로 시작하는 게임!  30~80% 핫딜까지!</em>
					<div class='lowest' onclick="location.href='./timeHotDeal.php'">현재 29개 중 <b><font color="red">최저가 9000</font>원 > </b></div>
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
						</li>
					<!--li~/li반복하면 dot표시가 생기면서 화면넘어감-->
		<!--			</ul>
				</div>
				<!-- e : timenow pc -->
				<!-- s : timenow mobile -->
		<!--		<div class="slidearea_m">
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
				</div>
				<!-- e : timenow mobile -->
<!--			</div>
		</div>
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

}
</style>
<div class="container_inner pd44">
			<div class="newarea">
				<div class="new_f_l">
					<div class="maintit"><b>탈출러 추천</b><em>따끈따끈 새로나온 테마!</em></div>
					<div class="slidearea">
						<ul class="bxslider02">
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고
											임무를 수행하라!
										</div>
										<a href="./page/theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
				<div class="new_f_r">
					<div class="maintit">명예의 게임<em>요즘 가장 인기있는 테마!</em></div>
					<div class="slidearea">
						<ul class="bxslider02">
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고 
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="./images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고 
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>-->
			</div>

<!--검색 결과 S-->
<style>
.pieces{width:33%;float:left;cursor:pointer;}
.ultracase{width:60%;margin-left:20%;margin-right:20%;margin-top:20px;}
.gImage{width:90%;}
.img1, .img2, .img3{width:13px;margin-right:2px;margin-bottom:2px;}
</style>
<div class="ultracase">
<?
//게임에서 검색한다, 왜냐하면 게임검색이므로.
$sql="select g_idx, p_id, g_title, g_level, g_horror, g_content, g_summary from game where g_title like '%".$_GET['input']."%'";
$query=mysql_query($sql);
while($data=mysql_fetch_array($query)){	//회원수만큼 돌고
	//이미지쿼리
	$imgsql="select filename from gameImage where g_idx='".$data['g_idx']."'";
	$imgquery=mysql_query($imgsql);
	$image=mysql_fetch_array($imgquery);
	//업소쿼리
	$localsql="select p_localName from partner where p_id='".$data['p_id']."'";
	$localquery=mysql_query($localsql);
	$local=mysql_fetch_array($localquery);
	//실제출력
	?>
	<table class="pieces" onclick='letsview(<?echo $data['g_idx']?>)'>
	<tr>
		<td>
			<table style="border:1px solid;height:165px;">
				<tr>
				<td rowspan="3" width="165px" style="padding-top:10px; padding-bottom:10px;">
					<img class="gImage" src="../manager/gameImage/<?echo $image['filename']?>.jpg"></td>
				<td style="height:20px;padding-top:10px;">
					<font size="4pt" style="font-weight:bold"><?echo $data['g_title']?></font></td>
				</tr>
				<tr>
				<td style="vertical-align:top;height:40px;">
					<img class="img1" src="../images/icon/icon_new1.png"/><?echo $local['p_localName']?><br>
					<img class="img2" src="../images/icon/icon_new1.png"/>난이도 : <?echo $data['g_level']?>&nbsp;&nbsp;
					<img  class="img3" src="../images/icon/icon_new2.png"/>공포감 : <?echo $data['g_horror']?>
				</td>
				</tr>
				<tr>
				<td style="vertical-align:top;padding:0;overflow:hidden;">
					<div style="width:100%;height:84px;">
					<?
					if($data['g_summary']==''){
						echo $data['g_content'];
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
?>
<?
//파트너에서 업체명,지점명 검색하고
$localsql2="select p_id, p_shopName, p_localName from partner where p_shopName like '%".$_GET['input']."%' or p_localName like '%".$_GET['input']."%'";
$localquery2=mysql_query($localsql2);
$local2=mysql_fetch_array($localquery2);
//해당되는 게임들을 불러온다
$sql2="select g_idx, p_id, g_title, g_level, g_horror, g_content, g_summary from game where p_id='".$local2['p_id']."'";
$query2=mysql_query($sql2);
while($data2=mysql_fetch_array($query2)){	//회원수만큼 돌고
	//이미지쿼리
	$imgsql2="select filename from gameImage where g_idx='".$data2['g_idx']."'";
	$imgquery2=mysql_query($imgsql2);
	$image2=mysql_fetch_array($imgquery2);
	//실제출력
	?>
	<table class="pieces" onclick='letsview(<?echo $data2['g_idx']?>)'>
	<tr>
		<td>
			<table>
				<tr>
				<td rowspan="3" width="165px" style="padding-top:10px; padding-bottom:10px;">
					<img class="gImage" src="../manager/gameImage/<?echo $image2['filename']?>.jpg"></td>
				<td style="height:20px;padding-top:10px;">
					<font size="4pt" style="font-weight:bold"><?echo $data2['g_title']?></font></td>
				</tr>
				<tr>
				<td style="vertical-align:top;height:40px;">
					<img class="img1" src="../images/icon/shop.png"/><?echo $local2['p_localName']?><br>
					<img class="img2" src="../images/icon/icon_new1.png"/>난이도 : <?echo $data2['g_level']?>&nbsp;&nbsp;
					<img  class="img3" src="../images/icon/icon_new2.png"/>공포감 : <?echo $data2['g_horror']?>
				</td>
				</tr>
				<tr>
				<td style="vertical-align:top;padding:0;">
					<?
					if($data2['g_summary']==''){
						echo $data2['g_content'];
					}else{
						echo $data2['g_summary'];					
					}
					?>
				</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	<?
}
//페이징 해야될듯
?>

</div>
<!--검색 결과 E-->


<!--아래 스크립트가, 날짜 스케쥴 가져오는 js-->
<script type="text/javascript" src="../js/common.js"></script>

</html>

<script>
function search_game(value){
	var f=document.getElementById('search_game_form');
	var x=document.getElementById('rigion');
	var rigion=value;
	
	x.value=rigion;	

	f.submit();
}
function search_word(){
	var f=document.getElementById('search_word_form');
	
	f.submit();
}
</script>