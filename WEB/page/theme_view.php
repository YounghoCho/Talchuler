<?
	include("include_head.php");
?>
	<div id="main_container">
		<div class="path"><div class="container_inner pd44"><span>홈 > </span><span>검색 > </span><strong>테마 상세페이지</strong></div></div>
		<div class="choicearea d_none">
			<div class="inner">
				<dl class="cho1">
					<dt>언제</dt>
					<dd>
						<div class="datebox">
							<input type="text" id="testDatepicker" class="txt" value="2016-11-24" />
						</div>
						<div class="selbox">
							<select class="select_st1 w80">
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
							</select>
							&nbsp;~&nbsp;
							<select class="select_st1 w80">
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
							</select>
						</div>
					</dd>
				</dl>
				<dl class="cho2">
					<dt>난이도</dt>
					<dd>
						<div class="selbox">
							<select class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							&nbsp;~&nbsp;
							<select class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<div class="ml20">
								<select class="select_st1 w100">
									<option>공포포함</option>
									<option>공포만</option>
									<option>공포X</option>
								</select>
							</div>
							<div class="chkbox">
								<label class="ichk"><span>했던테마 제외</span><input type="checkbox"><i><em></em></i></label>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="cho3">
					<dt>지역</dt>
					<dd>
						<ul class="loca_1dep">
							<li><a href="search.html">전체</a></li>
							<li>
								<a href="#">서울</a>
								<ul class="loca_2dep">
									<li><a href="search.html">전체</a></li>
									<li><a href="search.html">강남</a></li>
									<li><a href="search.html">홍대</a></li>
									<li><a href="search.html">종로.대학로</a></li>
									<li class="ml0"><a href="search.html">건대.잠실</a></li>
									<li><a href="search.html">영등포.신림</a></li>
								</ul>
							</li>
							<li><a href="search.html">경기</a></li>
							<li><a href="search.html">인천</a></li>
							<li><a href="search.html">대전</a></li>
							<li><a href="search.html">부산</a></li>
						</ul>
					</dd>
				</dl>
				<div class="schbox">
					<input type="text" class="txt" placeholder="카페, 지역, 테마 직접검색 가능합니다." />
					<a href="search.html" class="btn_sch">검색</a>
				</div>
			</div>
		</div>
		<div class="container_inner">
			<div class="themeview">
				<dl class="themeinfo">
<? 
include("./include.php");
$sql="select * from game";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>

					<dt><img src="../game/<?echo ($data['g_name'])?>.jpg"/></dt>
					<dd>
						<strong><?echo ($data['g_name'])?></strong>
						<span><?echo ($data['g_title'])?></span>
						<ul style="padding-bottom:1%;">
						<li class="txt">가격: <?echo ($data['g_price'])?></li>
						<li class="txt">지점: <?echo ($data['g_location'])?></li>
						</ul>
						<ul>
						<li class="icon_new1"><em>난이도</em> <?echo ($data['g_level'])?></li>
						<li class="icon_new3"><em>인원수</em> <?echo ($data['g_people'])?></li>
						<li class="icon_new2"><em>공포감</em> <?echo ($data['g_horror'])?></li>
						<li class="txt">필요능력<span> <?echo ($data['g_need'])?></span></li>
						</ul>
						<div>
						<?echo ($data['g_content'])?>	
						</div>
					</dd>
				</dl>
				<ul class="orderlist">
<?
$sql="select * from game_rank";
$query=mysql_query($sql);
//sorting알고리즘 없이 그냥 순서대로 출력할게 지금은

$i=1;//전역변수
while($data=mysql_fetch_array($query)){

	if($i==1){
	?>
		<li><img src="../images/icon/icon_master.png" alt="마스터" />
		<?echo ($data['grk_time'])?> (<?echo ($data['g_user'])?>)
		</li>
	<?
	}else{
	?>
	<li><span><?echo ($i)?>위</span>
	<?echo ($data['grk_time'])?> (<?echo ($data['g_user'])?>)
	</li>
<?
	}
	$i += 1;
}
?>
				</ul>
			</div>
		</div>
		<div class="tabarea">
			<div class="container_inner pd44">
				<div class="tab">
					<a href="#self" class="on"><span>예약정보</span></a>
					<a href="#self"><span>게임후기</span></a>
					<a href="#self" onclick="setTimeout(function() {bxslider_tab()}, 30);"><span>카페정보</span></a>
				</div>
				<div class="hiddenarea on">
					<div class="timeres">
						<ul class="timelist">
<?
//[예약정보]
$sql="select * from game_rooms";//나중에 게임이름으로 where조건문 쓴다음 아래 while문 돌리면됨.
$query=mysql_query($sql);
//이 반복문 안에는 데이터를 조금만 넣어놓을게
while($data=mysql_fetch_array($query)){

	if($data['gr_reserve']==0){
	?>
	<li><a href="#self" class="bg_g" style="border:3px solid #cdced2">
	<?echo ($data['gr_time'])?>
	</a></li>	
	<?
	}else{
	?>
	<li><a href="#self" style="border:3px solid #fff;color:#4edcfe;font-weight:bold;">
	<?echo ($data['gr_time'])?>
	</a></li>
	<?
	}
}
?>
						</ul>
						<a href="#self" class="btn_res" style="border:3px solid #fff;color:#4edcfe;font-weight:bold;">예약하기</a>
					</div>
					<ul class="ablebox">
						<li class="disable">예약불가</li>
						<li class="able">예약가능</li>
					</ul>
				</div>
				<div class="hiddenarea">
					<div class="reviewbox">
						<div class="f_l">
							<ul class="numbox">
								<li>
									<dl>
										<dt>개연성</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><em></em></dd>
										<dd class="r_num">8점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>장치</dt>
										<dd><strong></strong><strong></strong><strong></strong><em></em><em></em></dd>
										<dd class="r_num">6점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>인테리어</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><em></em></dd>
										<dd class="r_num">8점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>힌트</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><strong></strong></dd>
										<dd class="r_num">10점</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>서비스</dt>
										<dd><strong></strong><strong></strong><strong></strong><strong></strong><em></em></dd>
										<dd class="r_num">8점</dd>
									</dl>
								</li>
							</ul>
						</div>
						<div class="f_r">
							<div class="tit">플레이어 리뷰 <a href="#" class="btn_more">더보기</a></div>
							<table class="reviewlist"> 
								<tbody>
									<tr>
										<td class="name">sinyo****</td>
										<td class="sbj">개연성이 좀 떨어졌지만 좋았어요~</td>
										<td class="date">16.12.08</td>
										<td class="que">미답변</td>
									</tr>
									<tr>
										<td class="name">sinyo****</td>
										<td class="sbj">신선하고 재미있었어요 !   ~~~~~~ </td>
										<td class="date">16.12.08</td>
										<td class="que">답변</td>
									</tr>
									<tr>
										<td class="name">sinyo****</td>
										<td class="sbj">abcdefghrjklmnop~~~~~~</td>
										<td class="date">16.12.08</td>
										<td class="que">답변</td>
									</tr>
									<tr>
										<td class="name">blala****</td>
										<td class="sbj">신선하고 재미있었어요 !   ~~~~~~ </td>
										<td class="date">16.12.08</td>
										<td class="que">미답변</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="hiddenarea">
					<div class="cafeinfo">
						<div class="f_l">
							<div class="tit">ESC 방탈출카페 신림본점</div>
							<dl class="infobox">
								<dt><img src="../images/contents/img_cafeino1.jpg" alt="" /></dt>
								<dd>
									<p class="info1">안내 및 혜택<span>탈출 성공시 - 조각케익</span><span>5개 모두 탈출시 - 방향자물쇠</span></p>
									<p class="info2">02-873-8287</p>
									<p class="info3">서울시 관악구 남부순환로 1619 영일빌딩 6층 </p>
								</dd>
							</dl>
						</div>
						<div class="f_r">
							<div class="slidearea">
								<ul class="bxslider06">
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
									<li><img src="../images/contents/img_cafeinfo_s1.jpg" alt="" /></li>
								</ul>
								<a href="#" class="btn_more">더보기</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container_inner pd44">
			<div class="ohtertheme">
				<div class="maintit">이 카페의 다른테마</div>
				<div class="slidearea">
					<ul class="bxslider05">
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow3.jpg" alt=""><span>전역하는날</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
					</ul>
				</div>
				<div class="slidearea_m">
					<ul class="bxslider05_m">
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow1.jpg" alt=""><span>더라스트갬블2</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow2.jpg" alt=""><span>찜질방 알바</span></a>
							</div>
						</li>
						<li>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow4.jpg" alt=""><span>살인자의방</span></a>
							</div>
							<div class="themebox">
								<a href="theme_view.html"><img src="../images/contents/img_timenow5.jpg" alt=""><span>데드넘버</span></a>
							</div>
						</li>
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
