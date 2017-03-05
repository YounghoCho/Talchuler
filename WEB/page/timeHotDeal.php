<?
include('./include_head.php');
?>
<style>
.dealSearch{
	border:1px solid;
	float:right;
	margin-right:193px;	
}
.field{
	margin-left:193px;
	margin-right:193px;
}
.innerContainer{
	width:321px;
	height:220px;
	float:left;
	display:inline;
	margin-bottom:10px;
}
.imgDiv{
	width:108px;
	height:160px;
	float:left;
	display:inline;
	vertical-align:middle;

}
.imgDiv img{
	width:100%;
    vertical-align: middle;
}
.contentDiv{
	width:193px;
	height:160px;
	float:left;
	display:inline;
	margin-left:6px;
}
.bottomDiv{
	width:307px;
	height:58px;
	float:left;
	display:inline-block;
	background-color:#eee
}

@media all and (max-width:1041px){
.dealSearch{
	border:1px solid;
	float:right;
	margin-right:5%;	
}
.field{
	width:90%;
	margin-left:5%;
	margin-right:5%;
}
.innerContainer{
	width:100%;
	height:220px;
	float:left;
	display:inline;
	margin-bottom:10px;
}
.imgDiv{
	width:108px;
	height:160px;
	float:left;
	display:inline;
	vertical-align:middle;

}
.imgDiv img{
	width:100%;
    vertical-align: middle;
}
.contentDiv{
	width:208px;
	height:160px;
	float:left;
	display:inline;
	margin-left:6px;
}
.bottomDiv{
	width:100%;
	height:58px;
	float:left;
	display:inline-block;
	background-color:#eee
}
.hotDealBanner{
	display:none;
}
#d{
	float:left;
	display:inline;
	margin-left:5px;
}
}
</style>
	<div id="main_container">
		<div class="choicearea">
			<div class="inner">
				<dl class="cho1">
					<dt><font style="font-weight:bold">언제</font></dt>
					<dd>
						<div class="datebox">
							<input type="text" id="testDatepicker" class="txt" value="요일 선택" />
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
						</div>
					</dd>
				</dl>
				<dl class="cho2">
					<dt><font style="font-weight:bold">난이도</font></dt>
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
					<dt><font style="font-weight:bold">지역</font></dt>
					<dd>
						<ul class="loca_1dep">
							<li><a href="./search.html">전체</a></li>
							<li>
								<a href="#">서울</a>
								<ul class="loca_2dep">
									<li><a href="./search.html">전체</a></li>
									<li><a href="./search.html">강남</a></li>
									<li><a href="./search.html">홍대</a></li>
									<li><a href="./search.html">종로.대학로</a></li>
									<li class="ml0"><a href="./search.html">건대.잠실</a></li>
									<li><a href="./search.html">영등포.신림</a></li>
								</ul>
							</li>
							<li><a href="./search.html">경기</a></li>
							<li><a href="./search.html">인천</a></li>
							<li><a href="./search.html">대전</a></li>
							<li><a href="./search.html">부산</a></li>
						</ul>
					</dd>
				</dl>
				<div class="schbox">
					<input type="text" class="txt" placeholder="카페, 지역, 테마 직접검색 가능합니다." />
					<a href="./search.html" class="btn_sch">검색</a>
				</div>
			</div>
		</div>


		<center>
		<div style="width:100%;height:25px;background-color:#56DCFC;margin-bottom:4px;font-weight:bold;">타임 핫 딜!</div>
		<img class="hotDealBanner" src="../images/common/hotDeal_banner.jpg"/>
		
		<div style="width:964px">
		</center>
				<div style="width:100%;height:30px;">
					<div class="dealSearch">
						검색조건설정
					</div>
				</div>
			<div class="field">
					<? 
					include("./include.php");
					$sql="select * from game";
					$query=mysql_query($sql);
					while($data=mysql_fetch_array($query)){
					?>
				<div class="innerContainer">
					<div class="imgDiv"><img src="../game/<?echo ($data['g_name'])?>.jpg"/></div>
					<div class="contentDiv" style="overflow:scroll;">
						<strong><font style="font-size:120%;font-weight:bold"><?echo ($data['g_name'])?></font></strong>
						<font style="font-size:85%;">
							<ul style="padding-bottom:1%;">
							<li class="txt" id="d"><img src="../images/icon/icon_new1.png" width="13px"/> <?echo ($data['g_location'])?></li>
							</ul>
							<ul>
							<li class="icon_new1" id="d"><img src="../images/icon/icon_new1.png" width="13px"/> <em>난이도</em> <?echo ($data['g_level'])?></li>
							<li class="icon_new2" id="d"><img src="../images/icon/icon_new2.png" width="13px"/> <em>공포감</em> <?echo ($data['g_horror'])?></li>
							</ul>
							<br>
							<div style="line-height:14px;">
							<?echo ($data['g_content'])?>	
							</div>
						</font>				
					</div>
					<div class="bottomDiv">
						<div style="width:25%;float:left;display:inline;margin-top:18px;text-align:right;">게임시간</div>
						<div style="width:25%;float:left;display:inline;margin-top:16px;margin-left:10px;text-align:left;"> <font color="#0066cc" size="4"><b>16:00</b></font></div>
						<div style="width:25%;float:left;display:inline;margin-top:8px;margin-left:-15px;margin-right:0px;text-align:center;">선  착  순<br>핫딜특가</div>
						<div style="width:25%;float:left;display:inline;margin-top:16px;text-align:left;"> <font color="#cc0033" size="4"><b><?echo ($data['g_price'])?></b></font>
						</div>
					</div>
				</div>			

					<?
					}
					?>
			</div>
		</div>

</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>
