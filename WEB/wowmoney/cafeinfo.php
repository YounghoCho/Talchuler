<?
include('./include.php');
include('./HeadTab_Module_Owner.php');
?>

<script type="text/javascript">
// content와 sidebar를 같은 높이로 맞추기
(window.onload = function() {  // 화면이 뜬 뒤 처리
  var obj1 = document.getElementById('cafe_information'); 
  var obj2 = document.getElementById('clickbox_area'); 
 
  var obj1_height = obj1.offsetHeight;
  var obj2_height = obj2.offsetHeight;
  if(obj1_height > obj2_height) { obj2.style.height = obj1_height + 'px'; }
  else { obj1.style.height = obj2_height + 'px'; }
})();
</script>



<style>
#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 240px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 240px); /* for Firefox */
    width :         calc(100% - 240px); /* for IE */
	height:880px; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
}
#Main_title_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 30px); /* for Firefox */
    width :         calc(100% - 30px); /* for IE */
	overflow:auto;
	padding:30 0 30 30;
}
#Main_content_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(70% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(70% - 30px); /* for Firefox */
    width :         calc(70% - 30px); /* for IE */
	overflow:auto;
	padding:2 0 2 30;
	float:left;
}
/*타이틀 부분*/
#Main_titlebar{
	width:100%;
}
#Main_titlebar .title{
	float:left;
	font-size:25px;
	width:100%;
	color:#666666;
	font-weight:bold;
}
/*타이틀 부분*/
/*페이지 정보, 제출 시간 부분*/
#Page_info{
	width:100%;
	overflow:auto;
	border-top:3px solid #bbbbbb;
	border-bottom:3px solid #bbbbbb;
	padding:8 0;
}
#Page_info .left{
	float:left;
	display:table;
}
#Page_info .page_count{
	display:table-cell;
	font-size:20px;
	font-weight:medium;
	padding:0 3;
}
#Page_info .page_count a{
	text-decoration:none;
	color:#3e3e3e;
}
#Page_info .right{
	float:right;
}
#Page_info .time_info{
	font-size:20px;
	font-weight:medium;
	color:#666666;
}
/*페이지 정보, 제출 시간 부분*/
/*카페 정보 나열 영역*/
#cafe_information{
	overflow:auto;
	padding:20 3 10 3;
	float:left;
	width : -webkit-calc(70% - 6px); /* for Chrome, Safari */
    width :    -moz-calc(70% - 6px); /* for Firefox */
    width :         calc(70% - 6px); /* for IE */
}
#cafe_information .cafe_info{
	color:#666666;
}
#cafe_information .name{
	display:table;
	padding:10 0 10 10;
}
#cafe_information .logo_area{
	display:table-cell;
	padding:0 5 0 0;
	width:30px;
	text-align:center;
	vertical-align:top;
}
#cafe_information .cafe_logo{
	display:table-cell;
	padding:3px;
	border:3px solid #d7d7d7;
}
#cafe_information .cafe_logo img{
	width:80px;
	height:80px;
}
#cafe_information .title{
	display:table-cell;
	width:130px;
	font-size:15px;
	font-weight:medium;
	padding:0 5 0 5;
	vertical-align:top;
}
#cafe_information .sub{
	display:table-cell;
	font-size:13px;
	font-weight:medium;
	vertical-align:top;
}
/*카페 정보 나열 영역*/
/*클릭박스 영역*/
#clickbox_area{
	width : -webkit-calc(30% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(30% - 30px); /* for Firefox */
    width :         calc(30% - 30px); /* for IE */
	float:right;
	position:relative;
}
#clickbox_house{
	float:left;
	text-align:center;
	vertical-align:bottom;
	display:table-cell;
	position:absolute;
	bottom:10px;
	right:0;
}
#clickbox_house a{
	text-decoration:none;
}
#clickbox_house .rightblue{
	background:#66ccff;
	border:1px solid #06aeff;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	height:80px;
	padding:5 0 5 0;
	line-height:70px;
	display:inline-block;
}
#clickbox_house .empty_space{
	width:120px;
	height:10px;
}
#clickbox_house .gray{
	background:#ebebeb;
	border:1px solid #b0b0b0;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	padding:5 0 5 0;
	display:inline-block;
}
/*클릭박스 영역*/
/*예약취소 / 변경 / 환불규정*/
#promise{
	overflow:auto;
	height:auto;
	float:left;
	color:#666666;
}
#promise .major{
	float:left;
	font-size:15px;
	font-weight:medium;
	padding-left:50px;
}
#promise .show_box{
	clear:both;
	overflow:auto;
	padding-left:190px;
	margin-top:40px;
}
#promise .show_box div{
	width:100%;
	height:200px; /*약관란 높이조절*/
	resize:none;
	float:left;
	font-size:12px;
	color:#999999;
	overflow-y:scroll;
	border:none;
}
#promise .show_box b{
	line-height:20px;
	width:80%;
}
/*예약취소 / 변경 / 환불규정*/
</style>




<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<?
//count
$sql2="select count(p_idx) from partnerAsk";
$q=mysql_query($sql2);
$count=mysql_fetch_array($q);

//queue
$queue=array();
$sql="select p_idx from partnerAsk";
$q=mysql_query($sql);
while($result=mysql_fetch_array($q)){
	//상대인덱스값
	array_push($queue, $result[0]);
}
//상대인덱스값(queue값이 페이지갱신되면서 index로 들어옴)
$index=$_GET['index'];
//인덱스초기화
if(!$index){$index=0;}

//index condition
if($index+1>$count[0]){
	?>
	<script>alert("더정보가없지롱");history.back();</script>
	<?
}

//call cafe infos
	$sql="select * from partnerAsk where p_idx='".$queue[$index]."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);
?>
<div id="Main">
	<div id="Main_title_area">
		<div id="Main_titlebar">
			<div class="title">카페기본정보승인</div>
		</div>
	</div>
	<div id="Main_content_area">
		<div id="Page_info">
			<div class="left">
				<div class="page_count"><a href="./cafeinfo.php?index=<?echo $index-1?>"><</a></div>
				<div class="page_count"><?echo $index+1?></div>
				<div class="page_count">/</div>
				<div class="page_count"><?echo $count[0]?></div>
				<div class="page_count"><a href="./cafeinfo.php?index=<?echo $index+1?>">></a></div>
			</div>
			<div class="right">
				<div class="time_info"><?echo $data['time']?> 제출됨</div>
			</div>
		</div>
		<div id="cafe_information">
			<div class="cafe_info">
				<div class="name">
					<div class="logo_area">
						<img src="images\icon\icon6.png" />
					</div>
					<div class="title">*카페명</div>
					<div class="sub"><?echo $data['p_shopName']?></div>
				</div>
				<div class="name">
					<div class="logo_area">
						<img src="images\icon\icon5.png" />
					</div>
					<div class="title">*지점명</div>
					<div class="sub"><?echo $data['p_localName']?></div>
				</div>
				<div class="name">
					<div class="logo_area">
						<img src="images\icon\icon1.png" />
					</div>
					<div class="title">*카페로고</div>
					<div class="cafe_logo">
						<img src="../partner/partnerAsk/<?echo $data['p_id']?>.jpg" />
					</div>
					<div style='font-size:11px; font-weight:lighter; vertical-align:bottom; color:#cccccc; padding-left:5px;'>(80px × 80px)</div>
				</div>
				<div class="name">
					<div class="logo_area">
						<img src="images\icon\icon3.png"/>
					</div>
					<div class="title">*전화번호</div>
					<div class="sub"><?echo $data['p_tele']?></div>
				</div>
				<div class="name">
					<div class="logo_area">
						<img src="images\icon\icon4.png" />
					</div>
					<div class="title">*주소</div>
					<div class="sub"><?echo $data['p_location1']?><br>
					<?echo $data['p_location2']?></div>
				</div>
				<div class="name">
					<div class="logo_area">
						<img src="images\icon\icon2.png" />
					</div>
					<div class="title">안내 및 혜택</div>
					<div class="sub"><?echo $data['benefit1']?><br>
					<?echo $data['benefit2']?><br>
					<?echo $data['benefit3']?><br>
					<?echo $data['benefit4']?></div>
				</div>
			</div>
		</div>
		<div id="clickbox_area">	
			<div id="clickbox_house">
				<a href="./partnerReject.php?p_idx=<?echo $data['p_idx']?>&p_id=<?echo $data['p_id']?>"><div class="gray">거절</div></a>
				<div class="empty_space">&nbsp</div>
				<a href="./partnerAdmit.php?p_idx=<?echo $data['p_idx']?>&p_id=<?echo $data['p_id']?>"><div class="rightblue">승인하기</div></a>
			</div>
		</div>
		<div id="promise">
			<div class="major">＊예약취소 / 변경 / 환불규정</div>
			<div class="show_box">
				<div><b>예약취소<br></b>예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소예약취소<br><b>예약변경<br></b>예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경예약변경<br><b>환불규정<br></b>환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정환불규정</div>
			</div>
		</div>
	</div>
</div>


<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div> <!--body를 닫는 태그입니다.-->
<?
include('./Footer_Module.php');
?>