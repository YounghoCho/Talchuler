<!--##주의##-->
<!--이 모듈을 수정하신다면 ../page의 index.php에도 똑같이 수정해줘야합니다.-->
<!--현재 이곳의 ./ 같은 디렉토리는 ../page에서는 먹히지 않기 때문입니다-->


<!--search_module.php S-->
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
						<li><a  onclick="search_game('gyeonggi')">전체</a></li>
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

<style>
#searcharea{width:25%}
@media all and (max-width:1041px){
#searcharea{width:90%;float:left;font-size:12px;display:inline;}
}
</style>

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
function letsview(value){
	location.href="./theme_view.php?g_idx="+value+"";
}
</script>

<!--search_module.php E-->