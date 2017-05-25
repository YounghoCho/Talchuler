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


</div><!--여기까지가 wrap이라서 파란선이 남는다-->

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
		$sql="select g_idx, g_title, g_level, g_horror, g_content, g_summary, g_p1, g_p2, g_weekprice from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and p_id='".$post['p_id']."'";
	}elseif($_GET['horror']=='공포만'){
		$sql="select g_idx, g_title, g_level, g_horror, g_content, g_summary, g_p1, g_p2, g_weekprice from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and g_horror > 0 and p_id='".$post['p_id']."'";
	}else{
		$sql="select g_idx, g_title, g_level, g_horror, g_content, g_summary, g_p1, g_p2, g_weekprice from game where g_level >= '".$startLevel."' and g_level <= '".$endLevel."' and g_horror <= 0 and p_id='".$post['p_id']."'";
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


<style>
	#gameinfo_stack{
		width:1048px;
		margin:0 auto;
		font-family:'NotoSansCJKkr-Regular.eot';
	}
	/*반복되는 영역*/
	#gameinfo_stack .gameinfo_container{
		width : -webkit-calc(33.3% - 20px); /* for Chrome, Safari */
		width :    -moz-calc(33.3% - 20px); /* for Firefox */
		width :         calc(33.3% - 20px); /* for IE */ 
		margin:10px;
		height:270px; float:left; overflow:hidden;
		cursor:pointer;
	}
	/*이미지 공간*/
	#gameinfo_stack .image_content{
		height:auto;
		overflow:auto; 
		float:left;
	}

	#gameinfo_stack .image_area{
		position:relative; float:left; width:150px; height:200px; text-align:center; display:table-cell; background:none;
	}

	#gameinfo_stack .image_area img{
		position:absolute; width:auto; height:auto; max-width:150px; max-height:200px; margin:auto; top:0; bottom:0; left:0; right:0;
	}
	/*이미지 공간*/

	/*텍스트 공간*/
	#gameinfo_stack .text_content{
		float:left;
		width : -webkit-calc(100% - 160px); /* for Chrome, Safari */
		width :    -moz-calc(100% - 160px); /* for Firefox */
		width :         calc(100% - 160px); /* for IE */
		height:200px;
		margin-left:10px;
		overflow:hidden;
		font-size:10pt;
	}

	#gameinfo_stack .text_title{
		width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
		width :    -moz-calc(100% - 15px); /* for Firefox */
		width :         calc(100% - 15px); /* for IE */
		float:left;
		font-size:14pt;
		line-height:16pt;
		font-weight:bold;
		margin:5px 0 0 5px;
		overflow:hidden;
		text-overflow:ellipsis;
		white-space:nowrap;
		word-wrap:normal;
	}

	#gameinfo_stack .text_location{
		width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
		width :    -moz-calc(100% - 15px); /* for Firefox */
		width :         calc(100% - 15px); /* for IE */
		float:left;
		margin:5px 0 0 5px;
	}

	#gameinfo_stack .text_location img{
		float:left;
		width:12px;
		height:auto;
		padding:3px 0;
		margin-right:5px;
	}

	#gameinfo_stack .text_double_container{
		width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
		width :    -moz-calc(100% - 15px); /* for Firefox */
		width :         calc(100% - 15px); /* for IE */
		margin:5px 0 0 5px;
		float:left;
		overflow:auto;
	}

	#gameinfo_stack .text_hard{
		width:50%;
		float:left;
		font-size:9pt;
		overflow:hidden;
		text-overflow:ellipsis;
		white-space:nowrap;
		word-wrap:normal;
	}

	#gameinfo_stack .text_hard img{
		float:left;
		width:10px;
		height:auto;
		padding:3px 0;
		margin-right:5px;
	}

	#gameinfo_stack .text_fear{
		width:50%;
		float:left;
		font-size:9pt;
		overflow:hidden;
		text-overflow:ellipsis;
		white-space:nowrap;
		word-wrap:normal;
	}

	#gameinfo_stack .text_fear img{
		float:left;
		width:10px;
		height:auto;
		padding:3px 0;
		margin-right:5px;
	}

	#gameinfo_stack .text_detail{
		width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
		width :    -moz-calc(100% - 15px); /* for Firefox */
		width :         calc(100% - 15px); /* for IE */
		float:left;
		margin:5px 0 0 5px;
		line-height:13pt;
		word-break:break-all;
		overflow:hidden;
		text-overflow:ellipsis;
		display:block;
		display:-webkit-box;
		-webkit-line-clamp:7;
		-webkit-box-orient:vertical;
		height:120px;
		word-wrap:break-word;
	}
	/*텍스트 공간*/

	/*가격정보 공간*/
		#gameinfo_stack .price_container{
			float:left;
			width : -webkit-calc(100% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 0px); /* for Firefox */
			width :         calc(100% - 0px); /* for IE */
			height:60px;
			background-color:#eeeeee;
			overflow:hidden;
			font-weight:bold;
			margin-top:10px;
		}

		#gameinfo_stack .gray_price{
			width : -webkit-calc(50% - 15px); /* for Chrome, Safari */
			width :    -moz-calc(50% - 15px); /* for Firefox */
			width :         calc(50% - 15px); /* for IE */
			height:60px;
			float:left;
			padding:17px 0 17px 15px;
			overflow:hidden;
		}

		#gameinfo_stack .arrow_icon{
			overflow:hidden;
			float:left;
			margin:0 11px;
			padding:23px 0;
		}

		#gameinfo_stack .arrow_icon img{
			
		}

		#gameinfo_stack .blue_price{
			width : -webkit-calc(50% - 15px); /* for Chrome, Safari */
			width :    -moz-calc(50% - 15px); /* for Firefox */
			width :         calc(50% - 15px); /* for IE */
			height:60px;
			color:#0066cc;
			float:left;
			padding:17px 15px 17px 0;
			overflow:hidden;
		}

		#gameinfo_stack .info_title{
			width:40%;
			font-size:11pt;
			line-height:20pt;
			text-align:left;
			float:left;
		}

		#gameinfo_stack .info_price{
			width:60%;
			font-size:15pt;
			line-height:18pt;
			text-align:right;
			float:left;
		}

		/*가격정보 공간*/

	@media all and (max-width:1041px){
		#gameinfo_stack{
			width:100%;
			margin:0 auto;
			font-family:'NotoSansCJKkr-Regular.eot';
		}

		/*반복되는 영역*/
		#gameinfo_stack .gameinfo_container{
			width : -webkit-calc(100% - 10px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 10px); /* for Firefox */
			width :         calc(100% - 10px); /* for IE */ 
			margin:10px 5px 5px; 5px;
			height:245px; float:left; overflow:hidden;
		}

		/*이미지 공간*/
		#gameinfo_stack .image_content{
			height:auto;
			overflow:auto; 
			float:left;
		}

		#gameinfo_stack .image_area{
			position:relative; float:left; width:150px; height:200px; text-align:center; display:table-cell; background:none;
		}

		#gameinfo_stack .image_area img{
			position:absolute; width:auto; height:auto; max-width:150px; max-height:200px; margin:auto; top:0; bottom:0; left:0; right:0;
		}
		/*이미지 공간*/

		/*텍스트 공간*/
		#gameinfo_stack .text_content{
			float:left;
			width : -webkit-calc(100% - 160px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 160px); /* for Firefox */
			width :         calc(100% - 160px); /* for IE */
			height:200px;
			margin-left:10px;
			overflow:hidden;
			font-size:10pt;
		}

		#gameinfo_stack .text_title{
			width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 15px); /* for Firefox */
			width :         calc(100% - 15px); /* for IE */
			float:left;
			font-size:14pt;
			line-height:16pt;
			font-weight:bold;
			margin:5px 0 0 5px;
			overflow:hidden;
			text-overflow:ellipsis;
			white-space:nowrap;
			word-wrap:normal;
		}

		#gameinfo_stack .text_location{
			width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 15px); /* for Firefox */
			width :         calc(100% - 15px); /* for IE */
			float:left;
			margin:5px 0 0 5px;
		}

		#gameinfo_stack .text_location img{
			float:left;
			width:12px;
			height:auto;
			padding:3px 0;
		}

		#gameinfo_stack .text_double_container{
			width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 15px); /* for Firefox */
			width :         calc(100% - 15px); /* for IE */
			margin:5px 0 0 5px;
			float:left;
			overflow:auto;
		}

		#gameinfo_stack .text_hard{
			width:50%;
			float:left;
			font-size:9pt;
			overflow:hidden;
			text-overflow:ellipsis;
			white-space:nowrap;
			word-wrap:normal;
		}

		#gameinfo_stack .text_hard img{
			float:left;
			width:10px;
			height:auto;
			padding:3px 0;
			margin-right:5px;
		}

		#gameinfo_stack .text_fear{
			width:50%;
			float:left;
			font-size:9pt;
			overflow:hidden;
			text-overflow:ellipsis;
			white-space:nowrap;
			word-wrap:normal;
		}

		#gameinfo_stack .text_fear img{
			float:left;
			width:10px;
			height:auto;
			padding:3px 0;
			margin-right:5px;
		}

		#gameinfo_stack .text_detail{
			width : -webkit-calc(100% - 15px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 15px); /* for Firefox */
			width :         calc(100% - 15px); /* for IE */
			float:left;
			margin:5px 0 0 5px;
			line-height:13pt;
			word-break:break-all;
			overflow:hidden;
			text-overflow:ellipsis;
			display:block;
			display:-webkit-box;
			-webkit-line-clamp:7;
			-webkit-box-orient:vertical;
			height:120px;
			word-wrap:break-word;
		}
		/*텍스트 공간*/

		/*가격정보 공간*/
		#gameinfo_stack .price_container{
			float:left;
			width : -webkit-calc(100% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 0px); /* for Firefox */
			width :         calc(100% - 0px); /* for IE */
			height:40px;
			background-color:#eeeeee;
			overflow:hidden;
			font-weight:bold;
			margin-top:5px;
		}

		#gameinfo_stack .gray_price{
			width : -webkit-calc(50% - 25px); /* for Chrome, Safari */
			width :    -moz-calc(50% - 25px); /* for Firefox */
			width :         calc(50% - 25px); /* for IE */
			height:40px;
			float:left;
			padding:7px 0 7px 25px;
			overflow:hidden;
		}

		#gameinfo_stack .arrow_icon{
			overflow:hidden;
			float:left;
			margin:0 21px;
			padding:13px 0;
		}

		#gameinfo_stack .arrow_icon img{
			
		}

		#gameinfo_stack .blue_price{
			width : -webkit-calc(50% - 25px); /* for Chrome, Safari */
			width :    -moz-calc(50% - 25px); /* for Firefox */
			width :         calc(50% - 25px); /* for IE */
			height:40px;
			color:#0066cc;
			float:left;
			padding:7px 25px 7px 0;
			overflow:hidden;
		}

		#gameinfo_stack .info_title{
			width:40%;
			font-size:11pt;
			line-height:20pt;
			text-align:left;
			float:left;
			margin-top:2px;
		}

		#gameinfo_stack .info_price{
			width:60%;
			font-size:15pt;
			line-height:18pt;
			text-align:right;
			float:left;
			margin-top:3px;
		}

		/*가격정보 공간*/
	}

</style>



<div id="gameinfo_stack"> <!--잔체를 감싸는 영역-->
	<div class="gameinfo_container" onclick='letsview(<?echo $data['g_idx']?>)'> <!--컨텐츠를 담는 공간-->
		<div class="image_content"> <!--이미지를 담는 공간-->
			<div class="image_area"> <!--이미지 담기-->
				<img src="../manager/gameImage/<?echo $image['filename']?>.jpg">
			</div>
		</div>
		<div class="text_content"> <!--텍스트를 담는 공간-->
			<div class="text_title"> <!--제목-->
				<?echo $data['g_title']?>
			</div>
			<div class="text_location"> <!--지역-->
				<img src="../images/icon/shop.png"/>
				<?echo $post['p_localName']?>
			</div>
			<div class="text_double_container"> <!--텍스트 영역 공간 두개로-->
				<div class="text_hard"> <!--난이도-->
					<img src="../images/icon/icon_new1.png"/>
					난이도 <?echo $data['g_level']?>
				</div>
				<div class="text_fear"> <!--공포감-->
					<img src="../images/icon/icon_new2.png"/>
					공포감 <?echo $data['g_horror']?>
				</div>
			</div>
			<div class="text_detail"> <!--상세설명-->
				<?
					if($data['g_summary']==''){
						$data['g_summary']=$data['g_content'];
						echo $data['g_summary'];
					}else{
						echo $data['g_summary'];					
					}
					?>
			</div>
		</div>
		<div class="price_container"> <!--가격을 담는 공간-->
			<div class="gray_price">
				<div class="info_title">기본가</div>
				<div class="info_price"><?if($data['g_p1'])echo $data['g_p1'];else echo ($data['g_p2']/2);?>원</div>
			</div>
			<div class="arrow_icon">
				<img src="../images/icon/icon_right_triangle.png"/>
			</div>
			<div class="blue_price">
			<?if($data['g_weekprice']!='0'){?>
				<div class="info_title">판매가</div>
				<div class="info_price"><?echo $data['g_weekprice']?>원</div>
			</div>
			<?}?>
		</div>
	</div>
</div>




<!--
	<table class="pieces" onclick='letsview(<?echo $data['g_idx']?>)'>
	<tr>
		<td>
			<table style="table-layout: fixed;height:165px;">
				<tr>
				<td rowspan="3" width="165px" style="padding-top:10px; padding-bottom:10px;">
					<div class="gImage_box">
						<img class="gImage" src="../manager/gameImage/<?echo $image['filename']?>.jpg">
					</div>
				</td>
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
-->
	<?
 }
}

?>
<!--아래 스크립트가, 날짜 스케쥴 가져오는 js-->
<script type="text/javascript" src="../js/common.js"></script>

</html>

