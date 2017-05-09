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

			<form action='./search_game.php' method='get' id='search_game_form'>
			<div class="inner">
				<dl class="cho1">
					<dt><font style="font-weight:bold">언제</font></dt>
					<dd>
						<div class="datebox">
							<input name="day" type="text" id="testDatepicker" class="txt" value="<?echo date('Y-m-d')?>" />
						</div>
						<div class="selbox">
							<select name="start_time" class="select_st1 w80">
								<option selected>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
								<option>24:00</option>
							</select>
							&nbsp;~&nbsp;
							<select name="end_time" class="select_st1 w80">
								<option>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
								<option selected>24:00</option>
							</select>
						</div>
					</dd>
				</dl>
				<dl class="cho2">
					<dt><font style="font-weight:bold">난이도</font></dt>
					<dd>
						<div class="selbox">
							<select name="start_level" class="select_st1 w50">
								<option selected>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							&nbsp;~&nbsp;
							<select name="end_level" class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option selected>5</option>
							</select>
							<div class="ml20">
								<select name="horror" class="select_st1 w100">
									<option selected>공포포함</option>
									<option>공포만</option>
									<option>공포X</option>
								</select>
							</div>
							<div class="chkbox">
<!--								<label name="except" class="ichk"><span>했던테마 제외</span><input type="checkbox"><i><em></em></i></label>-->
							</div>
						</div>
					</dd>
				</dl>
				<dl class="cho3">
					<dt><font style="font-weight:bold;margin-right:15px;">지역</font></dt>
					<dd style="width:100%;">
						<ul class="loca_1dep">
							<li><a onclick="search_game('all')" style="cursor:pointer;">전체</a></li>
							<li>
								<a href="#">서울</a> 
								<ul class="loca_2dep">
									<li><a  onclick="search_game('seoul')">전체</a></li>
									<li><a  onclick="search_game('mapo')">홍대</a></li>
									<li><a  onclick="search_game('seodaemoon')">신촌</a></li>
									<li><a  onclick="search_game('gangnam')">강남</a></li>
									<li><a  onclick="search_game('jonglo')">대학로</a></li>
									<li><a  onclick="search_game('gwanack')">신림</a></li>
									<li><a  onclick="search_game('gwangjin')">건대</a></li>
									<li><a  onclick="search_game('yangcheon')">목동</a></li>
								</ul>
							</li>
							<li><a href="#">경기</a>
								<ul class="loca_2dep">
									<li><a  onclick="search_game('suwon')">수원</a></li>
									<li><a  onclick="search_game('anyang')">안양</a></li>
									<li><a  onclick="search_game('hwasung')">화성</a></li>
								</ul>
							</li>

						<!--<li><a onclick="search_game('incheon')">인천</a></li>
							<li><a onclick="search_game('daejeon')">대전</a></li>
							<li><a onclick="search_game('busan')">부산</a></li>-->
						</ul>
						<input name="rigion" type="hidden" id="rigion">
					</dd>
				</dl>
			</form>
			<form action='./search_word.php' method='get' id='search_word_form'>
				<div class="schbox">
					<input name="input" id="searcharea" type="text" class="txt" placeholder="카페, 지역, 테마 직접검색 가능합니다." />
					<a onclick="search_word()" class="btn_sch" style="cursor:pointer;">검색</a>
				</div>
			</form>

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
.pieces{width:33%;float:left;}
.gImage{width:90%;}
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
	.pieces{width:100%;float:left;}
	.gImage{width:90%;}
	.img1, .img2, .img3{width:10px;margin-right:2px;margin-bottom:10px;}
	td {font-size:11px;}
}
</style>

<!--출력시작부-->
<div class="ultracase">
		<div style="width:300px;"><img src="../images/icon/icon_maintit.gif" style="margin-right:1px;"/><font size="4pt"><b>울트라 추천</b></font>&nbsp;&nbsp;<font color="#888">광고</font></div>
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
	case 'seoul':
	case 'mapo':
	case 'seodaemoon':
	case 'gangnam':
	case 'jonglo':
	case 'gwanack':
	case 'gwangjin':
	case 'yangcheon':
	case 'suwon':
	case 'anyang':
		$startPostNumber=13905;
		$endPostNumber=14128;
		break;
	case 'hwasung':
}
$postSql="select p_id, p_localName from partner where p_postNumber1 >= '".$startPostNumber."' and p_postNumber1 <= '".$endPostNumber."'";
$postQuery=mysql_query($postSql);
while($post=mysql_fetch_array($postQuery)){
	//난이도> <, 공포 여부에 따라 게임을 출력한다.
	if($_GET['horror']=='공포포함'){
		$sql="select g_title, g_level, g_horror, g_content, g_summary from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."'";
	}elseif($_GET['horror']=='공포만'){
		$sql="select g_title, g_level, g_horror, g_content, g_summary from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and g_horror > 0";
	}else{
		$sql="select g_title, g_level, g_horror, g_content, g_summary from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and g_horror <= 0";
	}
	$q=mysql_query($sql);
	while($data=mysql_fetch_array($q)){

	//실제출력
	?>
	<table class="pieces">
	<tr>
		<td>
			<table>
				<tr>
				<td rowspan="3" width="165px" style="padding-top:10px; padding-bottom:10px;">
					<img class="gImage" src="../images/contents/img_timenow1.jpg"></td>
				<td style="height:20px;padding-top:10px;">
					<font size="4pt" style="font-weight:bold"><?echo $data['g_title']?></font></td>
				</tr>
				<tr>
				<td style="vertical-align:top;height:40px;">
					<img class="img1" src="../images/icon/icon_new1.png"/><?echo $post['p_localName']?><br>
					<img class="img2" src="../images/icon/icon_new1.png"/>난이도 : <?echo $data['g_level']?>&nbsp;&nbsp;
					<img  class="img3" src="../images/icon/icon_new2.png"/>공포감 : <?echo $data['g_horror']?>
				</td>
				</tr>
				<tr>
				<td style="vertical-align:top;padding:0;">
					<?
					if($data['g_summary']==''){
						echo $data['g_content'];
					}else{
						echo $data['g_summary'];					
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
}

?>

</div>

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