<?
	include("include_head.php");
?>

<body style='font-family:"NotoSansCJKkr-Regular.eot"; color:#666666;'>
	<div id="main_container">
		<div class="path">
		<div class="container_inner pd44"><span>홈 > </span><span>검색 > </span><strong>테마 상세페이지</strong>
		</div>
		</div>
		<div class="choicearea d_none">
		<?include('./search_module.php');?>
		</div>
	</div>
		<div class="container_inner">
			<div class="themeview">
				<dl class="themeinfo" style='padding:0;'>
<? 
include("./include.php");
//게임정보호출
$sql="select * from game where g_idx='".$_GET['g_idx']."'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
//이미지정보호출
$imgsql="select filename from gameImage where g_idx='".$_GET['g_idx']."'";
$imgquery=mysql_query($imgsql);
$img=mysql_fetch_array($imgquery);

?>					<style>
					#gameinfo_wrap{
						width:550px; overflow:auto; float:left;
					}
					
					#game_location{
						width:100%;
						font-size:15pt;
						line-height:15pt;
						color:black;
					}

					#game_title{
						width:100%;
						font-size:30pt;
						color:black;
						font-weight:bold;
						line-height:32pt;
						padding-top:15px;
					}

					#game_subtitle{
						width:100%;
						font-size:17pt;
						line-height:18pt;
						color:#a7a7a7;
						font-weight:bold;
						padding-top:20px;
						margin-bottom:20px;
					}

					.gameinfo_widthbox{
						width:100%; 
						overflow:hidden; 
						float:left; 
						padding-left:20px; 
						margin-left:22px;
					}

					#gameinfo_imagebox{
						width:400px; overflow:auto; float:left; margin-right:60px;
					}

					#gameinfo_imagebox .game_imagee{
						position:relative; float:left; border:0px solid #aaa; width:390px; height:540px; text-align:center; display:table-cell; background:none;
					}

					#gameinfo_imagebox .game_imagee img{
						position:absolute; width:auto; height:auto; max-height:540px; max-width:390px; border:0px solid #aaa; background:#c3c3c3; margin:auto; top:0; bottom:0; left:0; right:0; padding:25px;
					}

					#icon_wrap{
						width:100%;
						overflow:auto;
						margin:0;
					}

					.icon_new1{
						color:black; font-weight:bold; margin-top:1px;
					}
					.icon_new1 div{
						padding-bottom:8px; margin-top:-1px;
					}

					.icon_new3{
						color:black; font-weight:bold; margin-top:2px;
					}
					.icon_new3 div{
						padding-bottom:8px; margin-top:-2px;
					}

					.icon_new2{
						color:black; font-weight:bold; margin-top:2px;
					}
					.icon_new2 div{
						padding-bottom:8px; margin-top:-2px;
					}
					
					.game_detail{
						font-size:12pt; line-height:18pt; color:black; margin-top:17px;
					}

					@media all and (max-width: 1024px){

						#gameinfo_wrap{
							width:100%; overflow:auto; float:left;
						}		
						
						#gameinfo_imagebox{
							width:100%; overflow:auto; float:left; margin:0px;
						}

						#gameinfo_imagebox .game_imagee{
							position:relative; float:left; border:0px solid #aaa; width:100%; height:420px; text-align:center; display:table-cell; background:none; overflow:auto;
						}

						#gameinfo_imagebox .game_imagee img{
							position:absolute; width:auto; height:100%; max-height:400px; max-width:100%; border:0px solid #aaa; background:#c3c3c3; margin:auto; top:0; bottom:0; left:0; right:0; padding:0; margin:10px auto;
						}
						
						#icon_wrap{
							width:200px;
							overflow:auto;
							margin:0 auto;
							text-align:center;
						}

						.icon_new1{
							color:black; font-weight:bold; margin-top:1px; width:25%; margin:auto;
						}
						.icon_new1 div{
							padding:0 0 8 8; margin-top:-1px; font-size:12pt;
						}

						.icon_new3{
							color:black; font-weight:bold; margin-top:2px; width:40%; margin:auto;
						}
						.icon_new3 div{
							padding:0 0 8 8; margin-top:-2px; font-size:12pt;
						}

						.icon_new2{
							color:black; font-weight:bold; margin-top:2px; width:25%; margin:auto;
						}
						.icon_new2 div{
							padding:0 0 8 8; margin-top:-2px; font-size:12pt;
						}
						
						.game_detail{
							font-size:10pt; line-height:18pt; color:black; margin-top:17px;
						}

						#game_location{
							width:100%;
							font-size:15pt;
							line-height:15pt;
							color:black;
						}

						#game_title{
							width:100%;
							font-size:23pt;
							color:black;
							font-weight:bold;
							line-height:24pt;
							padding-top:0px;
						}

						#game_subtitle{
							width:100%;
							font-size:14pt;
							line-height:15pt;
							color:#a7a7a7;
							font-weight:bold;
							padding-top:10px;
							margin-bottom:10px;
						}

						.gameinfo_widthbox{
							width:100%;
							margin:0;
							padding:0;
							overflow:hidden; 
							float:left; 
							text-align:center;
						}
	
					}
					

					</style>

					
					<div class="gameinfo_widthbox" style=''>
						<div id="game_location">
							<?echo ($data['g_location'])?>
						</div>
						<div id="game_title">
							<?echo ($data['g_title'])?>
						</div>
						<div id="game_subtitle">
							<?echo ($data['g_subtitle'])?>
						</div>
					</div>
					<div class="gameinfo_widthbox" style=''>
						<div id="gameinfo_imagebox" style=''>
							<dt class="game_imagee"style=''>
								<img src="../manager/gameImage/<?echo ($img['filename'])?>.jpg" style=''/>
							</dt>
						</div>

						<div id="gameinfo_wrap" style=''>
							<dd style='float:left; padding-left:0px;'>
								<ul style='width:100%;'>
								<!--초기 icon_new1,2,3 초기 css위치-->
								<div id="icon_wrap">
									<li class="icon_new1" style=''>
										<div style='margin-top:-1px;'>
											<em style='font-size:14pt;'>난이도</em> <?echo ($data['g_level'])?>
										</div>
									</li>
									<li class="icon_new3" style=''>
										<div style='margin-top:-2px;'>
											<em style='font-size:14pt'>인원수</em> <?echo ($data['g_people'])?>~<?echo ($data['g_people2'])?>
										</div>
									</li>
									<li class="icon_new2" style=''>
										<div style='margin-top:-2px;'>
											<em style='font-size:14pt'>공포감</em> <?echo ($data['g_horror'])?>
										</div>
									</li>
								</div>
								<li class="txt" style='font-size:14pt; font-weight:bold; color:black; padding-top:17px;'>필요능력<span> 
								<?
								//필요능력에 따른 이미지 삽입부
									if($data['g_skill1']){
										?><img id="skill" src="../images/icon/skill1.png"/><?
									}if($data['g_skill2']){
										?><img id="skill" src="../images/icon/skill2.png"/><?
									}if($data['g_skill3']){
										?><img id="skill" src="../images/icon/skill3.png"/><?
									}if($data['g_skill4']){
										?><img id="skill" src="../images/icon/skill4.png"/><?
									}if($data['g_skill5']){
										?><img id="skill" src="../images/icon/skill5.png"/><?
									}if($data['g_skill6']){
										?><img id="skill" src="../images/icon/skill6.png"/><?
									}
								?>
								</span></li>
								</ul>
								<div class="game_detail" style='width:100%;'>
								<?echo nl2br($data['g_content'])?>	
								</div>
							</dd>
						</div>
					</div>
				</dl>
<style>
#skill{margin:2px;}
.rank_con{
	width:500px;
	height:170px;
	text-align:center;
	float:left;
	display:inline;
	font-size:130%;
	line-height:28px;
}
.rank_title{
	width:100%;
	height:30px;
	background-color:#ccc;
	font-weight:bold
}
.price_con{
	width:100%;
	text-align:center;
	float:left;
	display:inline;
	font-size:130%;
	line-height:28px;
	margin-left:22px;
}
.price_title{
	width:100%;
	height:30px;
	background-color:#ccc;
	font-weight:bold
}
.g_price{
	padding:5px;
	font-size:100%;
	text-align:center;

	margin-top:20px;
}
.enter{
	display:none;
}
@media all and (max-width:1041px){
#skill{margin:1px;width:40px;}
.rank_con{
	width:100%;
	height:auto;
	text-align:center;
	font-size:100%;
	float:left;
	display:block;
	margin-bottom:10px;
}
.rank_title{
	display:none;
}
.ranking{
	width:50%;
	float:left;
	display:inline-block;
	line-height:20px;
	text-align:center;
	padding:3px;
}
.price_con{
	width:100%;
	margin-left:-2px;
	height:auto;
	text-align:center;
	font-size:100%;
	float:left;
	display:block;
}
.price_title{
	width:100%;
	height:25px;
	background-color:#ccc;
	font-weight:bold
}
.g_price{	
	padding:5px;
	font-size:100%;
	float:left;
	text-align:center;
	margin-top:5px;
	margin-bottom:5px;
}
}
</style>

<style>
.mySlides {display:none; margin-left:8%;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -30px;
  color: #56DCFC;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}


/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover, .dot2:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/*예약 시간 css*/
.hiddenarea_timetable{ /*테이블 전체*/
	margin-top:20px;
	width:100%;
	overflow:auto;
	font-size:12pt;
}

.hiddenarea_timearray{ /*시간 박스 모음*/
	 float:left;
	 height:100%;
	 width:84%;
}

.hiddenarea_timecell_top{ /*시간박스 하나*/
	float:left;
	width : -webkit-calc(14.8% - 10px - 4px); /* for Chrome, Safari */
    width :    -moz-calc(14.8% - 10px - 4px); /* for Firefox */
    width :         calc(14.8% - 10px - 4px); /* for IE */
	margin:0 5px 5px 5px;
	height:35px;
	display:table;
	text-align:center;
}

.hiddenarea_timecell_top input{
	width:100%;
	height:100%;
	border:2px solid #56DCFC;
	background:#ffffff;
	outline:none;
	font-size:12pt;
	color:#666666;
	display:table-cell;
	vertical-align:middle;

}

.hiddenarea_timecell_bot{ /*시간박스 하나*/
	float:left;
	width : -webkit-calc(14.8% - 10px - 4px); /* for Chrome, Safari */
    width :    -moz-calc(14.8% - 10px - 4px); /* for Firefox */
    width :         calc(14.8% - 10px - 4px); /* for IE */
	margin:5px 5px 5px 5px;
	height:35px;
	display:table;
	text-align:center;
}

.hiddenarea_timecell_bot input{
	width:100%;
	height:100%;
	border:2px solid #56DCFC;
	background:#ffffff;
	outline:none;
	font-size:12pt;
	color:#666666;
	display:table-cell;
	vertical-align:middle;
}

.hiddenarea_reservation{ /*예약버튼 공간*/
	float:right; 
	width : -webkit-calc(15% - 2px); /* for Chrome, Safari */
    width :    -moz-calc(15% - 2px); /* for Firefox */
    width :         calc(15% - 2px); /* for IE */
	height:79px;
	display:table;
	text-align:center;
	border:2px solid #56DCFC;
}

.hiddenarea_reservation_inner{ /*예약버튼 내부*/
	display:table-cell;
	vertical-align:middle;
	font-weight:bold;
	background-color:#56DCFC;
	color:white;
	cursor:pointer;
}
#topspace{margin-left:0px;}
#botspace{margin-right:0px;}
.albumsize{height:150px}

/*map*/
.hiddenarea{display:none;}
#map{width:80%;height:400px;margin-left:10%;margin-top:3%;margin-bottom:3%;display:none;}
.slideshow-container{display:none;}
#dot{display:none;}

@media all and (max-width: 1024px) {
 .prev, .next,.text {font-size: 11px}
 .hiddenarea_timearray{width:77%;}
 .hiddenarea_timecell_top{margin:0 3px 3px 3px;font}
 .hiddenarea_timecell_bot{margin:0 3px 3px 3px;}
 .hiddenarea_timecell_top input,.hiddenarea_timecell_bot input{font-size:11pt;padding-left:2px;padding-right:2px;}
 #topspace{margin-left:3px;}
 #botspace{margin-right:6px;}
 .albumsize{height:90px}
 /*map*/
 #map{width:90%;margin-left:5%;height:150px;}
 .dot2 {
  cursor:pointer;
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #999;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
 .prev2, .next2 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 14px;
  margin-top: -30px;
  color: #56DCFC;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 3px;
}
.next2 {right: 0;margin-right:10px;}
.prev2 {left: 0;margin-left:10px;}
 }
.hiddenarea_date{
	width:100%;
	height:50px;
	margin-top:20px;
	border:1px solid black;
}
.hiddenarea_year{
	width:30%;
	height:10px;
	border:1px solid black;
}
.hiddenarea_day{
	width:30px;
	height:10px;
	border:1px solid black;
}
</style>
				<ul class="orderlist">
				<!--	<div class="rank_con">
						<div class="rank_title">순위</div>
						<?
						$sql="select * from game_rank";
						$query=mysql_query($sql);
						//sorting알고리즘 없이 그냥 순서대로 출력할게 지금은

						$i=1;//전역변수
						while($result=mysql_fetch_array($query)){
							?>
							<div class="ranking">
							<?
							
							if($i==1){
							?>
								<img src="../images/icon/icon_master.png" alt="마스터" width="20px"/>
								<?echo ($result['grk_time'])?> (<?echo ($result['g_user'])?>)
							<?
							}else{
							?>
							<?echo ($i)?>위
							<?echo ($result['grk_time'])?> (<?echo ($result['g_user'])?>)
						<?
							}
							$i += 1;
							?>
							</div>
							<?
						}
						?>							
					</div>-->

					<div class="price_con">
						<div class="price_title">게임가격</div>
							<div class="g_price">
								<?
								$sql="select * from game where g_idx='".$_GET['g_idx']."'";
								$query=mysql_query($sql);
								$gdata=mysql_fetch_array($query);
								
								if($gdata['g_p1']>0){
									?>1인:&nbsp;<?echo ($gdata['g_p1'])?>원&nbsp;&nbsp;<?
								}if($gdata['g_p2']>0){
									?>2인:&nbsp;<?echo ($gdata['g_p2'])?>원&nbsp;&nbsp;<?
								}if($gdata['g_p3']){
									?>3인:&nbsp;<?echo ($gdata['g_p3'])?>원&nbsp;&nbsp;<?
								}if($gdata['g_p4']){
									?>4인:&nbsp;<?echo ($gdata['g_p4'])?>원&nbsp;&nbsp;<?
								}if($gdata['g_p5']){
									?>5인:&nbsp;<?echo ($gdata['g_p5'])?>원&nbsp;&nbsp;<?
								}if($gdata['g_p6']){
									?>6인:&nbsp;<?echo ($gdata['g_p6'])?>원&nbsp;&nbsp;<?
								}if($gdata['g_p7']){
									?>7인:&nbsp;<?echo ($gdata['g_p7'])?>원&nbsp;&nbsp;<?
								}if($gdata['g_p8']){
									?>8인:&nbsp;<?echo ($gdata['g_p8'])?>원&nbsp;&nbsp;<?
								}
								?>
							</div>
						</div>
					</div>
				</ul>
			</div>
		</div>
	<!--예약페이지로 보내는 form-->
	<form id="reserve_form" method="POST" action="./reserve_page.php">
		<div class="tabarea">
			<div class="container_inner pd44" style="background-color:#ececec; padding-bottom:10px;">
				<div class="tab">
					<a class="on" style="width:48%;" onclick="mapfunction('a')"><span>예약정보</span></a>
				<!--	<a href="#self"><span>게임후기</span></a>-->
					<a style="width:48%;margin-left:4%;" onclick="mapfunction('b')"><span>카페정보</span></a>
				</div>
				<div class="hiddenarea_date">
				
				<div class="hiddenarea_year">

				</div>
				
				<div class="hiddenarea_day">
				</div>
				
				</div>
				<div class="hiddenarea on">

					<!--시간 설정박스 컬러변경 활성 /중복가능-->
					<!--<script language="JavaScript">
						function colorchange(obj){
							if(obj.style.background == "none"){
								obj.style.background = '#56DCFC';
								obj.style.color = '#ffffff';
							}
							else{
								obj.style.background = "none";
								obj.style.color = '#666666';
							}
						}
					</script>
					-->
					<!--시간 설정박스 컬러변경 활성 /중복가능-->

					<!--시간 설정박스 한개만 on-->
					<script language="JavaScript">
						function changetime(time){ //색상비교 후 값 반환
							var hour = document.getElementsByClassName("time_button");
							for(var i = 0; i < hour.length; i++){
								if(i==2||i==7||i==11||i==12)
									continue;
								hour[i].style.background = '#ffffff';
								hour[i].style.color = '#666666';
								if(i==time){
									hour[i].style.background = '#56DCFC';
									hour[i].style.color = '#ffffff';
									
								}
							}
						}
					</script>
					<!--시간 설정박스 한개만 on-->

					<div class="hiddenarea_timetable">
						<div class="hiddenarea_timearray">
							<div class="hiddenarea_timecell_top" id="topspace">
								<input type="button" value="10:00" class="time_button" onclick="changetime(0)" style=''/>
							</div>
							<div class="hiddenarea_timecell_top">
								<input type="button" value="11:00" class="time_button" onclick="changetime(1)" style=''/>
							</div>
							<div class="hiddenarea_timecell_top">
								<input type="button" value="12:00" class="time_button" onclick="changetime(2)" style='border:2px solid #ffffff; background:#d3d3d3;'/>
							</div>
							<div class="hiddenarea_timecell_top">
								<input type="button" value="13:00" class="time_button" onclick="changetime(3)" style=''/>
							</div>
							<div class="hiddenarea_timecell_top">
								<input type="button" value="14:00" class="time_button" onclick="changetime(4)" style=''/>
							</div>
							<div class="hiddenarea_timecell_top">
								<input type="button" value="15:00" class="time_button" onclick="changetime(5)" style=''/>
							</div>
							<div class="hiddenarea_timecell_top" id="botspace">
								<input type="button" value="16:00" class="time_button" onclick="changetime(6)" style=''/>
							</div>
							<!--줄나눔-->
							<div class="hiddenarea_timecell_bot" style="margin-left:0px;">
								<input type="button" value="17:00" class="time_button" onclick="changetime(7)" style='border:2px solid #ffffff; background:#d3d3d3;'/>
							</div>
							<div class="hiddenarea_timecell_bot">
								<input type="button" value="18:00" class="time_button" onclick="changetime(8)" style=''/>
							</div>
							<div class="hiddenarea_timecell_bot">
								<input type="button" value="19:00" class="time_button" onclick="changetime(9)" style=''/>
							</div>
							<div class="hiddenarea_timecell_bot">
								<input type="button" value="20:00" class="time_button" onclick="changetime(10)" style=''/>
							</div>
							<div class="hiddenarea_timecell_bot">
								<input type="button" value="21:00" class="time_button" onclick="changetime(11)" style='border:2px solid #ffffff; background:#d3d3d3;'/>
							</div>
							<div class="hiddenarea_timecell_bot">
								<input type="button" value="22:00" class="time_button" onclick="changetime(12)" style='border:2px solid #ffffff; background:#d3d3d3;'/>
							</div>
							<div class="hiddenarea_timecell_bot" style="margin-right:0px;">
								<input type="button" value="23:00" class="time_button" onclick="changetime(13)" style=''/>
							</div>
						</div>
						<div class="hiddenarea_reservation">
							<div class="hiddenarea_reservation_inner">예약하기</div>
						</div>
					</div>

					<ul class="ablebox">
						<li class="disable">예약불가</li>
						<li class="able">예약가능</li>
					</ul>
				</div>
			</form>
<script>
t=1;
reserve=false;
function change_font(value){
	var i=document.getElementById('reserve_font'+value);	
	if(t>0){
		i.style.color="white";
		i.style.backgroundColor="#4edcfe";
		t*=-1;
		reserve=value;
	}else{
		i.style.color="black";
		i.style.backgroundColor="#ececec";
		t*=-1;
		reserve=false;
	}
}
function reserve_go(value){
	alert("준비중입니다");
	return false;

	if(value==''){
		alert("로그인이 필요합니다.");
		location.href='./login.php';
	}else{
		var f=document.getElementById('reserve_form');
		if(reserve==false){
			alert("게임 시간을 선택해주세요");	
		}else{
			f.submit();
		}
	}	
}
</script>

<style>
.container_eval{
	background-color:white;
	width:100%;
	height:155px;
}
.space{
	height:10px;
}
.eval{
	width:190px;
	float:left;
	padding:10px;
	font-weight:bold;
	font-size:120%;
}
.eval div{
	font-size:150%;
	color:#66ccff;
}
.eval2{
	width:190px;
	float:left;
	padding:10px;
	font-weight:bold;
	font-size:120%;
}
.eval2 div{
	font-size:150%;
	color:#66ccff;
}
.contentjs{
	width:100%;
	height:40px;
	line-height:40px;
	text-align:center;
	background-color:#ccc;
}
.hidejs{
	display:none;
	width:100%;
	height:50px;
	margin-bottom:30px;
	background-color:#ccc;
	text-align:center;
}
.dtstyle{margin-left:10%;}
.partner_profile{width:220px;height:140px;}

/*롤링박스 디자인 부분*/
	.rollingImage_box{
		position:relative; float:left; border:0px solid #aaa; 
		width:154px; height:200px; text-align:center; 
		display:table-cell; background:none;
	}
	.rollingImage{
		position:absolute; width:auto; height:auto; max-height:200px; max-width:154px; 
		border:0px solid #aaa; background:none; margin:auto; 
		top:0; bottom:0; left:0; right:0;}
/*롤링박스 디자인 부분*/





@media all and (max-width:1041px){
	.container_eval{
		background-color:white;
		width:100%;
		height:210px;
		margin-bottom:30px;
	}
	.space{
		height:5px;
	}
	.eval{
		width:50%;
		float:left;
		padding:3px;
		font-weight:bold;
		font-size:100%;
	}
	.eval div{
		font-size:120%;
		color:#66ccff;
	}
	.eval2{
		width:33%;
		float:left;
		padding:3px;
		font-weight:bold;
		font-size:100%;
		margin-top:20px;
	}
	.eval2 div{
		font-size:120%;
		color:#66ccff;
	}
	.contentjs{
		width:60%;
		height:40px;
		line-height:40px;
		text-align:center;
		background-color:#ccc;
	}
	.menujs{width:60%;text-align:center;}
	.ddstyle{width:50%;}
	.partner_profile{position:absolute;left:10%;width:120px;}

	.menujs .contentjs{cursor:pointer;}
	.menujs .hidejs{display:none;}
	.hidejs{
		width:60%;
		height:50px;
		margin-bottom:30px;
		background-color:#ccc;
		text-align:center;
	}
	.infobox{padding-top:35px;margin-left:3%;}
	.f_a {width:954px;}
	.tit{float:left;display:inline;margin-bottom:30px;margin-left:3%;}
	.namefont{font-size:15px;font-weight:bold;}
	.js{
		margin-top:5%;
		list-style:none;
		float:left;
		margin-left:8px;}
	.info1,.info2,.info3{margin-left:80px;}

	/*롤링박스 디자인 부분*/
	.rollingImage_box_mobile{
		position:relative; float:left; border:0px solid #aaa; 
		width:190px; height:280px; text-align:center; 
		display:table-cell; background:none;
	}
	.rollingImage_box_mobile img{
		position:absolute; width:auto; height:auto; max-height:280px; max-width:190px; 
		border:0px solid #aaa; background:none; margin:auto; 
		top:0; bottom:0; left:0; right:0;}
/*롤링박스 디자인 부분*/


}
</style>
<script>
    // html dom 이 다 로딩된 후 실행된다.
    $(document).ready(function(){
        // menu 클래스 바로 하위에 있는 a 태그를 클릭했을때
        $(".menujs>div").click(function(){
            var submenu = $(this).next("div");
 
            // submenu 가 화면상에 보일때는 위로 보드랍게 접고 아니면 아래로 보드랍게 펼치기
            if( submenu.is(":visible") ){
                submenu.slideUp();
            }else{
                submenu.slideDown();
            }
        });
    });
</script>

			<!--	<div class="hiddenarea">
					<div class="reviewbox">
						<center>
						<div class="container_eval">
							<div style="width:97%;border-bottom:1px solid #666;padding:5px;padding-top:10px;"><font style="font-size:120%;font-weight:bold;">공감 지수</font></div><br>

							<div class="eval" style="inline">
								<div>0명</div><div class="space"> </div>
								몰입되요
							</div>
							<div class="eval" style="inline">
								<div>0명</div><div class="space"> </div>
								신기방기해요
							</div>
							<div class="eval2" style="inline">	
								<div>0명</div><div class="space"> </div>
								눈이즐거워요
							</div>
							<div class="eval2" style="inline">
								<div>0명</div><div class="space"> </div>
								활동적이예요
							</div>
							<div class="eval2" style="inline">
								<div>0명</div><div class="space"> </div>
								친절해요
							</div>
		
						</div>
						</center>
					</div>
				</div>-->
<?
$psql="select p_id, p_shopName, p_localName, benefit1, benefit2, benefit3, benefit4, p_tele, p_location1, rule from partner where p_id='".$data['p_id']."'";
$q=mysql_query($psql);
$partner=mysql_fetch_array($q);
?>
				<div class="hiddenarea" id="matter"><!--지도의 비밀은 여기에 있었다-->					
					<div class="cafeinfo">
						<div class="f_a">
							<div style="margin-bottom:30px;">
						        <div class="menujs">
									<div class="contentjs" onclick="dropdown()">예약취소 / 변경 / 환불규정<img id="upsidedown" src="../images/btn/down.png" style="width:30px;padding:17px 0 0 15px;"/></div>
								
										<div class="hidejs">
										<br><?echo $partner['rule']?>
										</div>
										<script>
										function dropdown(){
											var m=document.getElementsByClassName('hidejs');
											m.style.display="block";
										}
										</script>
								</div>

							</div>
						</div>
							<div class="tit"><font class="namefont"><b><?echo $partner['p_shopName']?> <?echo $partner['p_localName']?></b></font></div>
							<dl class="infobox">
								<dt class="dtstyle"><img class="partner_profile" src="../manager/partnerpic/<?echo $partner['p_id']?>.jpg" onerror="this.style.display='none';" style="width:100px"/></dt>
								<dd class="ddstyle"> 
									<p class="info1">안내 및 혜택
										<span ><?echo $partner['benefit1']?></span>
										<span><?echo $partner['benefit2']?></span>
										<span><?echo $partner['benefit3']?></span>
										<span><?echo $partner['benefit4']?></span>
									</p>
									<p class="info2"><?echo $partner['p_tele']?></p>
									<p class="info3"><?echo $partner['p_location1']?></p>
								</dd>
							</dl>
					</div>	
					<!--지도S-->
					<div id="map"></div>
					<script>
					var w = window.innerWidth;
					function mapfunction(value){
						var map=document.getElementById('map');
						var slide=document.getElementById('slide');
						var slide2=document.getElementById('slide2');
						var dot=document.getElementById('dot');
						var dot2=document.getElementById('dot2');
						var matter=document.getElementById('matter');
						if(w>1024 && value=='a'){
							map.style.display="none";
							slide.style.display="none";
							slide2.style.display="none";
							dot.style.display="none";
							dot2.style.display="none";
							matter.style.display="none";
						}
						if(w>1024 && value=='b'){
							map.style.display="block";
							slide.style.display="block";
							slide2.style.display="none";
							dot.style.display="block";
							dot2.style.display="none";
							matter.style.display="block";
							mapload();
						}
						if(w<1024 && value=='a'){
							map.style.display="none";
							slide.style.display="none";
							slide2.style.display="none";
							dot.style.display="none";
							dot2.style.display="none";
							matter.style.display="none";
						}
						if(w<1024 && value=='b'){
							map.style.display="block";
							slide.style.display="none";
							slide2.style.display="block";
							dot.style.display="none";
							dot2.style.display="block";
							matter.style.display="block";
							mapload();
						}
					}
					</script>
					<!--피씨앨범-->
					<div id="slide" class="slideshow-container">
					<?
					$csql="select count(path) from album_path where p_id='".$data['p_id']."'";
					$cq=mysql_query($csql);
					$count=mysql_fetch_array($cq);
					$i=$count[0]/3;
					
					$sql="select path from album_path where p_id='".$data['p_id']."'";
					$q=mysql_query($sql);
					while($i>0){
					?>
						<div class="mySlides fade">
						 <?$album=mysql_fetch_array($q);?>
							<img class="albumsize" src="../manager/album/<?echo $album[0]?>.jpg" style="width:30%;" onerror="this.style.display='none';">
						<?$album=mysql_fetch_array($q);?>
							<img class="albumsize" src="../manager/album/<?echo $album[0]?>.jpg" style="width:30%;" onerror="this.style.display='none';">
						<?$album=mysql_fetch_array($q);?>
							<img class="albumsize" src="../manager/album/<?echo $album[0]?>.jpg" style="width:30%;" onerror="this.style.display='none';"> 
						</div>
					<?
					$i--;
					}
					?>
						
							 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							 <a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<div id="dot" style="margin-left:45%;margin-top:10px;">
						 <span class="dot" onclick="currentSlide(1)"></span> 
						 <span class="dot" onclick="currentSlide(2)"></span> 
						 <span class="dot" onclick="currentSlide(3)"></span> 
					</div>

					<!--모바일앨범-->
					<div id="slide2" class="slideshow-container">
					<?
					$mcsql="select count(path) from album_path where p_id='".$data['p_id']."'";
					$mcq=mysql_query($mcsql);
					$mcount=mysql_fetch_array($mcq);
					$mi=$mcount[0];
					
					$msql="select path from album_path where p_id='".$data['p_id']."'";
					$mq=mysql_query($msql);
					
					while($mi>0){
						$malbum=mysql_fetch_array($mq);
					?>
						<div class="mySlide fade">
							<img class="albumsize" src="../manager/album/<?echo $malbum[0]?>.jpg" style="width:90%;margin-left:5%;" onerror="this.style.display='none';"> 
						</div>
					<?
					$mi--;
					}
					?>
							 <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
							 <a class="next2" onclick="plusSlides2(1)">&#10095;</a>
					</div>
					<div id="dot2" style="width:100%;margin-top:10px;text-align:center;">
					<?
						//dot count
						$mdcsql="select count(path) from album_path where p_id='".$data['p_id']."'";
						$mdcq=mysql_query($mdcsql);
						$mdcount=mysql_fetch_array($mdcq);
						$mp=$mdcount[0];
						$up=1;
						while($up<=$mp){

					?>
						 <span class="dot2" onclick="currentSlide2(<?echo $up?>)"></span> 
					<?
					$up++;
					}
					?>
					</div>
				</div>
			</div>			
		<div class="container_inner pd44">
			<div class="ohtertheme" style="overflow:hidden;">
				<div class="maintit">이 카페의 다른테마</div>
				<div class="slidearea">
					<ul class="bxslider05"><!--5개까지만 자른다-->
						<li>
						<?
						$sql="select g_idx, filename from gameImage where p_id='".$data['p_id']."'";
						$q=mysql_query($sql);
						while($imgloop=mysql_fetch_array($q)){
							//게임이름
							$gsql="select g_title from game where g_idx='".$imgloop['g_idx']."'";
							$gq=mysql_query($gsql);
							$gname=mysql_fetch_array($gq);
						?>
							<div class="themebox">
								<a href="./theme_view.php?g_idx=<?echo $imgloop['g_idx']?>">
								<!--하단 롤링부분-->
								<div class="rollingImage_box"> 
									<img class="rollingImage" src="../manager/gameImage/<?echo $imgloop[1]?>.jpg" />
								</div>
								<span><?echo $gname[0]?></span>
								</a>
							</div>
						<?
						}
						?>
						</li>
					</ul>
				</div>
				
				<!--mobile 다른테마정보-->
				<div class="slidearea_m">
					<ul class="bxslider05_m" style='padding-top:20px;'>
						<?
						$sql="select g_idx, filename from gameImage where p_id='".$data['p_id']."'";
						$q=mysql_query($sql);
						while($imgloop=mysql_fetch_array($q)){
						?>
						<li>
							<div class="themebox" style="width:70%;margin-left:15%;">
								<a href="./theme_view.php?g_idx=<?echo $imgloop['g_idx']?>">
									<!--하단 롤링부분 max-width:1041px-->
									<div class="rollingImage_box_mobile">
										<img src="../manager/gameImage/<?echo $imgloop[1]?>.jpg"/>
									</div>
									<span><?echo $gname[0]?></span>
									<!--하단 롤링부분 max-width:1041px-->
								</a>
							</div>
						</li>
						<?
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?
	include("include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<!--모바일앨범-->

<script>
var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}
function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides2 = document.getElementsByClassName("mySlide");
  var dot = document.getElementsByClassName("dot2");
  if (n > slides2.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";  
  }
  for (i = 0; i < dot.length; i++) {
      dot[i].className = dot[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";  
  dot[slideIndex2-1].className += " active";
}
</script>

	<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=759d7a8b0f7209f4ab7d54ecb981c809"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new daum.maps.LatLng(33.450701, 126.570667),
			level: 3
		};
		//지도깨짐 방지, DOM이 먼저 호출되서 출력이 안된다고한다. 
		function mapload(){
			var map = new daum.maps.Map(container, options);
		}
</script>
