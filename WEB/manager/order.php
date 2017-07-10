<?
include('./include.php');
include('./HeadTab_Module.php');
//캘린더로부터 오늘날짜를 받아온다.

//오늘의 날짜를 구한다
if($_GET['year']=='')
	$date=substr(date("Y-m-d H:i:s"),0,10);
else{
	if($_GET['month']<10){
		if($_GET['day']<10)
			$date=$_GET['year'].'-0'.$_GET['month'].'-0'.$_GET['day'];
		else
			$date=$_GET['year'].'-0'.$_GET['month'].'-'.$_GET['day'];
	}
	else{
		if($_GET['day']<10)
			$date=$_GET['year'].'-'.$_GET['month'].'-0'.$_GET['day'];
		else
			$date=$_GET['year'].'-'.$_GET['month'].'-'.$_GET['day'];
	}
}

?>
<!--<meta name="viewport" content="width=device-width">-->
<!--content=width=device-width : 컨텐츠를 디바이스 가로 사이즈에 맞춰 표현
	initial-scale : 초기 표시 배율(1.0 꽉찬페이지)
	minimum-scale : 최소 확대 배율
	maximum-scale : 최대 확대 배율
	user-scalable : 확대/축소 설정 (yes/no)
-->

<!--달력 S-->
<link href="./calendar/calendar1.css" rel="stylesheet">
	<script>
		window.onload = function () {
			kCalendar('kCalendar');
		};
	</script>
<!--달력 E-->

<style>
#kCalendar{width:253px;}
#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 220px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 220px); /* for Firefox */
    width :         calc(100% - 220px); /* for IE */
	height:auto; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#666666;
}

#Main_title_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	overflow:auto;
	margin:50 0 0 33;
	padding:0 0 30 26;
}

#Main_datechoice_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	overflow:hidden;
	margin:0 0 0 33;
	padding:0 0 30 26;
}

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	overflow:hidden;
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	margin:0 0 0 33;
	padding:15 0 30 26;
}


/*타이틀 부분*/

#Main_titlebar{
	width:100%;
}

#Main_titlebar .title{
	float:left;
	font-size:25px;
	line-height:25px;
	width:100%;
	font-weight:bold;
}

/*타이틀 부분*/

/*날짜 선택부분*/

#Main_datechoice{
	width:100%;
}

#Main_datechoice .now_show{
	text-align:right;
	margin-bottom:5px;
}

#Main_datechoice .now_show span{
	width:15%;
	margin:0 5px;
	font-size:12pt;
}

#Main_datechoice .rightblue_bar{
	/*now_show padding-right 크기와 맞춤*/
	width:100%;
	height:35px;
	background-color:#56dcfc;
	text-align:center;
	display:table;
}

#Main_datechoice .rightblue_bar span{
	font-size:18pt;
	font-weight:bold;
	display:table-cell;
	vertical-align:middle;
}

#Main_datechoice .date_choice{
	margin-bottom:5px;
	overflow:hidden;
}

#Main_datechoice .date_choice input{
	width:12%;
	height:40px;
	border:none;
	margin:auto;
	padding:0;
	font-size:15pt;
	background:none;
	outline:none;
}

/*날짜 선택부분*/

/*시간 선택부분*/

#Main_colorinfo{
	width:100%;
	overflow:hidden;
	min-width:850px;
	margin-bottom:-5px;
}

#Main_colorinfo .left{
	float:left;
	overflow:auto;
	margin-left:10px;
}

#Main_colorinfo .infotable{
	margin-right:30px;
	height:auto;
	float:left;
}

#Main_colorinfo .colorbox{
	width:20px;
	height:20px;
	float:left;
	font-size:12pt;
	color:#999999;
}

@media screen and (max-width: 1400px) { #Main_colorinfo .right { display: none; } } 
#Main_colorinfo .right{
	float:right;
	color:#ff6600;
	font-size:12pt;
	margin-right:10px;
}




#Main_gameinfo{  /*전체부분*/
	width:100%;
	overflow:auto;
}

#Main_gameinfo .game_info{  /*회색박스 하나*/
	float:left;
	width:100%;
	background-color:#ececec;
	overflow:hidden;
	margin-top:15px;
	display:table;
	font-weight:100;
}

#Main_gameinfo .game_name{  /*게임이름, 자세히보기 부분*/
	float:left;
	width : 25%;
	height:100%;
	padding:10 0 0 10;
	display:table-cell;
}

#Main_gameinfo .game_title{  /*게임이름*/
	width:100%;
	font-size:15pt;
	line-height:21pt;
	font-weight:bold;
}

#Main_gameinfo .game_detail{  /*자세히보기*/
	width:100%;
	float:left;
	overflow:auto;
	margin-top:10px;
}

#Main_gameinfo .game_detail input{
	border:none;
	float:left;
	padding:0;
	font-size:12pt;
	background:none;
	outline:none;
}

#Main_gameinfo .game_time{  /*게임 시간 박스 담는 공간*/
	float:left;
	/*패딩만큼 빼줌*/
	width : 75%;
	padding:10 10 10 0;
	display:table-cell;
}

#Main_gameinfo .game_time input{
	width:100px;
	height:25px;
	border:1px solid #999999;
	color:#999999;
	margin:5 10;
	padding:0;
	font-size:15pt;
	background:none;
	outline:none;
}

#Main_gameinfo .game_time a{
	
}

#Main_gameinfo .game_time button{
	width:100px;
	height:25px;
	border:1px solid #999999;
	color:#999999;
	margin:5 10;
	padding:0;
	font-size:15pt;
	background:none;
	outline:none;
	font-weight:100;
}


.detail_page{font-size:12pt; margin-right:auto; float:left;}
.detail_page ul{padding:0; margin:0}
.horizon{display: table; width: 100%; border-collapse:collapse; border-spacing: 0px; table-layout: fixed;}
.horizon li {display: table-cell; height:32px; vertical-align:middle;}

.horizon li.subject {text-align:center; font-size:12pt;}  /*분류*/
.horizon li.row1 {text-align:center; width:100px; font-size:12pt;}  /*상태*/
.horizon li.row2 {text-align:center; width:60px; font-size:14pt; font-weight:medium;}  /*시간*/
.horizon li.row3 {text-align:center; width:60px; font-size:14pt; font-weight:medium;}  /*예약자*/
.horizon li.row4 {text-align:center; width:60px; font-size:14pt; font-weight:medium;}  /*인원*/
.horizon li.row5 {text-align:center; width:80px; font-size:14pt; font-weight:medium;}  /*예약금*/
.horizon li.row6 {text-align:center; width:80px; font-size:14pt; font-weight:medium;}  /*추가결체금*/
.horizon li.row7 {text-align:center; width:120px; font-size:10pt; font-style:italic;}  /*등록정보*/

/*시간 선택부분*/

/*팝업 중 쉐이딩 되지 않은 영역_1*/
#note_1{
	background:#f3f3f3;
	width:500px;
	height:300px;
	float:left;
	padding:5 10;
}

#note_1 .text_box{
	float:left;
	font-size:16px;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	font-weight:bold;
	color:red;
	border-bottom:2px solid #06aeff;
	margin:17 0 15 0;
	padding:0 10 20 10;
}

#note_1 .info_area{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	margin:0;
	padding:0 10;
}


#note_1 .inputbox_area{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	margin-top:15px;
	padding:0 10;
}

#note_1 .checkbox_content{
	width:100%;
	overflow:auto;
	position:static;
	padding:0; 
}

#note_1 .checkbox_text{
	width:100%;
	overflow:auto;
	font-size:14px;
	font-weight:bold;
	float:left;
	color:#757575;
	margin-left:2%;
	padding:0;
	margin-top:0px; /*체크박스와 높이 조잘위해 조정*/
	position:relative;
}

#note_1 .checkbox_subred{
	width:100%;
	overflow:auto;
	font-size:12px;
	float:left;
	color:red;
	margin-left:2%;
	padding:0;
	margin-top:0px; /*체크박스와 높이 조잘위해 조정*/
	position:relative;
}

#note_1 .clickbox_check{
	float:right;
	margin-right:3%;
	font-size:16px;
	padding:2 0;
	position:relative;
}

/*팝업 중 쉐이딩 되지 않은 영역_1*/

/*상세 입력란*/
#inputbox{
	width:100%;
	margin:0;
	float:left;
	overflow:auto;
	display:table;
}

#inputbox .inputboxes{
	overflow:auto;
	float:left;
	margin:5 0;
}

#inputbox .major{
	padding:3 10 0 10;
	display:table;
	float:left;
}

#inputbox .sub{
	padding:3 0 0 5;

	display:table;
	float:left;
}

#inputbox input{
	width:auto;
	height:25px;
	display:table;
	float:left;
}
/*상세 입력란*/

/*어둡기를 조절하는 마스크*/
#mask, #mask2 {  
	  position:fixed;  
	  z-index:9000;  
	  background-color:#000;  
	  display:none;  
	  left:0;
	  top:0;
}
/*어둡기를 조절하는 마스크*/

/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정_1*/
.window_1, .window_2{
	  display: none;
	  position:fixed;  
	  left:33%;
	  top:27%;
	  z-index:10000;
}
/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정_1*/

/*클릭박스 디자인 영역*/
#clickbox_area{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	height:50px;
	padding:10px;
}

#clickbox_area input{
	height:100%;
	width: -webkit-calc(50% - 6px); /* for Chrome, Safari */
    width:    -moz-calc(50% - 6px); /* for Firefox */
    width:         calc(50% - 6px); /* for IE */
	font-size:14px;
	font-weight:bold;
	padding:5 0 5 0;
}
/*클릭박스 디자인 영역*/


/*클릭박스 디자인 영역*/

.clickbox_rightblue{
	background:#66ccff;
	border:1px solid #06aeff;
	color:#666666;
	font-size:15px;
	font-weight:bold;
	width:100px;
	padding:5 0 5 0;
	text-align:center;
}

.clickbox_rightblue a{
	text-decoration:none;
	color:#3e3e3e;
}

/*클릭박스 디자인 영역*/

.mySlidesa{display:none; margin-left:20px;text-align:center; padding:10px 0 0 0}
.slideshow-containera {
  max-width: 100%;
  position: relative;
  margin: auto;
}

.preva, .nexta {
  cursor: pointer;
  position: absolute;
  width:auto;
  margin-top: -26px;
  color: #56DCFC;
  font-weight: bold;
  font-size: 20pt;
  border-radius: 0 3px 3px 0;
}

.nexta {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.date_num{
	width:30px;
	height:30px;
	background-color:white;
	color:#666666;
	border:none;
	font-size:17pt;
	margin-right:20px;
	margin-left:20px;
	font-weight:bold;
}
</style>


<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->

<div id="Main">
	<div id="Main_title_area">
		<div id="Main_titlebar">
			<div class="title">예약관리</div>
		</div>
	</div>
	<!--달력-->
	<div id="Main_datechoice_area">
		<div id="Main_datechoice">
			<div class="slideshow-containera">
				<div id="kCalendar" style="float:left"></div>
			</div>
		</div>
	</div>
	<div id="Main_content_area">
		<div id="Main_colorinfo">
			<div class="left">
				<div class="infotable">
					<div class="colorbox" style='background-color:#ffffff; border:1px solid #999999;'></div>
					<span>&nbsp&nbsp&nbsp예약가능</span>
				</div>
				<!--
				<div class="infotable">
					<div class="colorbox" style='background-color:#56dcfc; border:1px solid #56dcfc;'></div>
					<span>&nbsp&nbsp&nbsp탈출러예약</span>
				</div>
				-->
				<div class="infotable">
					<div class="colorbox" style='background-color:#999999; border:1px solid #999999;'></div>
					<span>&nbsp&nbsp&nbsp예약불가</span>
				</div>
			</div>
			<div class="right">
				<span>예약시간을 클릭하면 예약불가로 전환.예약취소가 가능합니다.</span>
			</div>
		</div>
		<div id="Main_gameinfo">
			<?
			//게임정보를 불러온다
			$sql="select * from game where p_id='".$_SESSION['id']."'";
			$q=mysql_query($sql);
			while($data=mysql_fetch_array($q)){
			?>
			<!--회색박스 한 묶음-->
			<div class="game_info">
				<div class="game_name">
					<div class="game_title"><?echo $data['g_title']?></div>
					<div class="game_detail">
				<!--		<input type="button" value="▼ 자세히보기" class="openbutton" onclick="dropdetail(0)" style="color:#666666;">
						<input type="button" value="▲ 자세히보기" class="closebutton" onclick="closedetail(0)" style="color:#666666; display:none;">-->
					</div>
				</div>
				<div class="game_time">
					<?
					//게임시간정보를 불러온다
					$tsql="select * from game_time where g_idx='".$data['g_idx']."'";
					$tq=mysql_query($tsql);
					$time=mysql_fetch_array($tq);

					$rsql="select * from game_reserve where g_idx='".$data['g_idx']."' and gr_date='".$date."'";
					$rq=mysql_query($rsql);
					$reserve=mysql_fetch_array($rq);
					//만약에 해당time의 값이 1이면 style을 바꿔주고, onlick도 바꿔주면되지 222
					?>		
					<input type="button" value="<?echo $time['gt_1']?>" 
					<?if($reserve['gr_1']=='1'){?>
						style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_1', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?
					 }else{?>
					    style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_1', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?
					 }?>  id="pop1"/>
					
					<input type="button" value="<?echo $time['gt_2']?>" 
					<?if($reserve['gr_2']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_2', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_2', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop2"/>
					
					<input type="button" value="<?echo $time['gt_3']?>" 
					<?if($reserve['gr_3']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_3', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_3', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop3"/>

					<input type="button" value="<?echo $time['gt_4']?>" 
					<?if($reserve['gr_4']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_4', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_4', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop4"/>

					<input type="button" value="<?echo $time['gt_5']?>" 
					<?if($reserve['gr_5']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_5', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_5', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop5"/>

					<input type="button" value="<?echo $time['gt_6']?>" 
					<?if($reserve['gr_6']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_6', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_6', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop6"/>

					<input type="button" value="<?echo $time['gt_7']?>" 
					<?if($reserve['gr_7']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_7', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_7', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop7"/>

					<input type="button" value="<?echo $time['gt_8']?>" 
					<?if($reserve['gr_8']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_8', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_8', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop8"/>

					<input type="button" value="<?echo $time['gt_9']?>" 
					<?if($reserve['gr_9']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_9', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_9', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop9"/>

					<input type="button" value="<?echo $time['gt_10']?>" 
					<?if($reserve['gr_10']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_10', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_10', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop10"/>

					<input type="button" value="<?echo $time['gt_11']?>" 
					<?if($reserve['gr_11']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_11', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_11', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop11"/>

					<input type="button" value="<?echo $time['gt_12']?>" 
					<?if($reserve['gr_12']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_12', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_12', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop12"/>

					<input type="button" value="<?echo $time['gt_13']?>" 
					<?if($reserve['gr_13']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_13', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_13', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop13"/>

					<input type="button" value="<?echo $time['gt_14']?>" 
					<?if($reserve['gr_14']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_14', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_14', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop14"/>

					<input type="button" value="<?echo $time['gt_15']?>" 
					<?if($reserve['gr_15']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_15', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_15', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop15"/>

					<input type="button" value="<?echo $time['gt_16']?>" 
					<?if($reserve['gr_16']=='1'){?>style='background-color:#999;color:white;' onclick="popup2(this.value, '<?echo $data['g_title']?>', this.id, 'gr_16', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}else{?>style='background-color:#fff;'onclick="popup(this.value, '<?echo $data['g_title']?>', this.id, 'gr_16', '<?echo $data['g_idx']?>', '<?echo $reserve['gr_idx']?>')"<?}?>  id="pop16"/>
				</div>
			</div>
			<div class="detail_page" style='display:none;'>
				<ul class="horizon" style='border-bottom:solid 1px #ccc'>
					<li class="subject" style='width:100px;'>상태</li>
					<li class="subject" style='width:60px;'>시간</li>
					<li class="subject" style='width:60px;'>예약자</li>
					<li class="subject" style='width:60px;'>인원</li>
					<li class="subject" style='width:80px;'>예약금</li>
					<li class="subject" style='width:80px;'>추가결제금</li>
					<li class="subject" style='width:120px;'>등록정보</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">14:00</li>
					<li class="row3">김미선</li>
					<li class="row4">6명</li>
					<li class="row5">10000원</li>
					<li class="row6">100000원</li>
					<li class="row7">2017.02.14 14:28 직접입력</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1" class="col">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약불가</li>
					<li class="row2">23:00</li>
					<li class="row3"> - </li>
					<li class="row4"> - </li>
					<li class="row5"> - </li>
					<li class="row6"> - </li>
					<li class="row7">2017.03.20 22:19 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 에약</li>
					<li class="row2">19:00</li>
					<li class="row3">코난도아리</li>
					<li class="row4">2명</li>
					<li class="row5">44000원</li>
					<li class="row6">0원</li>
					<li class="row7">2017.03.14 02:28 탈출러에서 등록</li>
				</ul>
				<ul class="horizon">
					<li class="row1">탈출러 예약</li>
					<li class="row2">21:00</li>
					<li class="row3">지니민</li>
					<li class="row4">4명</li>
					<li class="row5">10000원</li>
					<li class="row6">70000원</li>
					<li class="row7">2017.03.20 12:39 탈출러에서 등록</li>
				</ul>
			</div>
			<!--회색박스 한 묶음-->
			<?
			}
			?>

			<!--시간 클릭 시 뜨는 팝업창 S-->
			<div id="mask"></div>
			<div class="window_1" id="window_1">
				<div id="note_1">
					<div class="info_area">
						<div class="text_box">
							<div id="whattitle" style="float:left;display:inline;"></div>
							<div style="float:left;display:inline;">의&nbsp;</div>
							<div id="whattime" style="float:left;display:inline;"></div>을 예약불가로 전환하시겠습니까?
						</div>
					<!--	<div class="checkbox_text">
								예약자 정보 등록
						</div>
						<div class="checkbox_subred">
							예약자의 정보를 입력하시면 예약관리에 추가됩니다.
						</div>-->
					</div>
				<!--	<div class="inputbox_area">
						<form action="url" id="inputbox">
							<div class="inputboxes">
								<span class="major">성함</span>
								<input name="name" type="text" maxlength="4" style="width:68px; padding-left:5px;" placeholder="성함"> <br>
							</div>
							<div class="inputboxes">
								<span class="major" style="padding-left:20px;">연락처</span>
								<input name="phone" type="text" maxlength="11" style="width:95px; padding-left:5px;" placeholder="연락처"> <br>
							</div>
							<div class="inputboxes">
								<span class="major"  style="padding-left:20px;">예약인원</span>
								<input name="with" type="text" maxlength="2" style="width:30px; padding-left:5px;" placeholder="2">
								<span class="sub">명</span><br>
							</div>
							<div class="inputboxes">
								<span class="major">예약금</span>
								<input name="first" type="text" style="width:80px; padding-left:5px;" placeholder="10000">
								<span class="sub">원</span><br>
							</div>
							<div class="inputboxes">
								<span class="major" style="padding-left:20px;">추가결제금</span>
								<input name="next" type="text" style="width:80px; padding-left:5px;" placeholder="30000">
								<span class="sub">원</span><br>
							</div>
						</form>
					</div>-->
					<div id="clickbox_area">
						<input type="button" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="취소" onclick="cancel()"/>
						<input type="button" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;' value="확인" onclick="reserved('a')"/>
					</div>
				</div>
			</div>
			<!--시간 클릭 시 뜨는 팝업창 E-->
			<!--시간 클릭 시 뜨는 팝업창 S-->
			
			<div id="mask2"></div>
			<div class="window_2" id="window_2">
				<div id="note_1">
					<div class="info_area">
						<div class="text_box">
							해당 시간을 예약가능으로 전환하시겠습니까?
						</div>
					</div>
					<div id="clickbox_area">
						<input type="button" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="취소" onclick="cancel2()"/>
						<input type="button" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;' value="확인" onclick="reserved('b')"/>
					</div>
				</div>
			</div>

			<!--시간 클릭 시 뜨는 팝업창 E-->
		</div>

	</div>
</div>


<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div> <!--body를 닫는 태그입니다.-->
<?
include('./Footer_Module.php');
?>

</script>
<script language="JavaScript">
		function changedate(datenum){ //색상비교 후 값 반환
			var week = document.getElementsByClassName("date_num");
			for(var i = 0; i < week.length; i++){
				week[i].style.color = '#666666'
				week[i].style.backgroundColor='white'
				if(i==datenum){
					week[i].style.color = 'white'
					week[i].style.backgroundColor='#56DCFC'
				}
			}
		}
</script>
<!--자세히보기 S-->
<script>
	function dropdetail(callnum){
		var detailpage = document.getElementsByClassName("detail_page");
		var openbtn = document.getElementsByClassName("openbutton");
		var closebtn = document.getElementsByClassName("closebutton");
		for(var i = 0; i < detailpage.length; i++){
			if(i==callnum){	
					detailpage[i].style.display='inline';
					openbtn[i].style.display='none';
					closebtn[i].style.display='inline';
			}
	}

}
</script>
<script>
function closedetail(callnum){
		var detailpage_c = document.getElementsByClassName("detail_page");
		var openbtn_c = document.getElementsByClassName("openbutton");
		var closebtn_c = document.getElementsByClassName("closebutton");
		for(var i = 0; i < detailpage_c.length; i++){
			if(i==callnum){	
					detailpage_c[i].style.display='none';
					openbtn_c[i].style.display='inline';
					closebtn_c[i].style.display='none';
			}
	}
}	
</script>
<!--자세히보기 E-->
			<script>
			var temp;
			var temp2;
			var temp3;
			var temp4;
			var temp5;
			function popup(value, title, id, index, g_idx, gr_idx){
				var mask=document.getElementById('mask');
				var window_1=document.getElementById('window_1');
				var whattime=document.getElementById('whattime'); //시간정보기입
				var whattitle=document.getElementById('whattitle'); //게임명칭기입
				mask.style.display="block";
				window_1.style.display="block";
				whattime.innerHTML=value;
				whattitle.innerHTML=title;
				//확인시 reserved함수에 넘겨줄 id값
				temp=id;
				temp2=value;
				temp3=index;
				temp4=g_idx;
				temp5=gr_idx;
			}
			function popup2(value, title, id, index, g_idx, gr_idx){
				var mask2=document.getElementById('mask2');
				var window_2=document.getElementById('window_2');
				mask2.style.position="absolute";
				window_2.style.position="absolute";
				mask2.style.display="block";
				window_2.style.display="block";
				//확인시 reserved함수에 넘겨줄 id값
				temp=id;
				temp2=value;
				temp3=index;
				temp4=g_idx;
				temp5=gr_idx;
			}
			function cancel(){
				var mask=document.getElementById('mask');
				var window_1=document.getElementById('window_1');
				mask.style.display="none";
				window_1.style.display="none";
			}
			function reserved(value){
				//예약불가
				if(value=='a'){
					var mask=document.getElementById('mask');
					var window_1=document.getElementById('window_1');
					mask.style.display="none";
					window_1.style.display="none";
					location.href='./reserve_insert.php?input=1&index='+temp3+'&g_idx='+temp4+'&gr_idx='+temp5+'&what=add&date=<?echo $date?>';
					
				}
				//예약재개
				else{
					var mask=document.getElementById('mask2');
					var window_1=document.getElementById('window_2');
					mask.style.display="none";
					window_1.style.display="none";
					location.href='./reserve_insert.php?input=1&index='+temp3+'&g_idx='+temp4+'&gr_idx='+temp5+'&what=delete&date=<?echo $date?>';
				}
			}

			function cancel2(){
				var mask2=document.getElementById('mask2');
				var window_2=document.getElementById('window_2');
				mask2.style.display="none";
				window_2.style.display="none";
			}
			</script>
<script>
function kCalendar(id, date) {
	var kCalendar = document.getElementById(id);
	
	if( typeof( date ) !== 'undefined' ) {
		date = date.split('-');
		date[1] = date[1] - 1;
		date = new Date(date[0], date[1], date[2]);
	} else {
		var date = new Date();
	}
	var currentYear = date.getFullYear();
	//년도를 구함
	
	var currentMonth = date.getMonth() + 1;
	//연을 구함. 월은 0부터 시작하므로 +1, 12월은 11을 출력
	
	var currentDate = date.getDate();
	//오늘 일자.
	
	date.setDate(1);
	var currentDay = date.getDay();
	//이번달 1일의 요일은 출력. 0은 일요일 6은 토요일
	
	var dateString = new Array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
	var lastDate = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	if( (currentYear % 4 === 0 && currentYear % 100 !== 0) || currentYear % 400 === 0 )
		lastDate[1] = 29;
	//각 달의 마지막 일을 계산, 윤년의 경우 년도가 4의 배수이고 100의 배수가 아닐 때 혹은 400의 배수일 때 2월달이 29일 임.
	
	var currentLastDate = lastDate[currentMonth-1];
	var week = Math.ceil( ( currentDay + currentLastDate ) / 7 );
	//총 몇 주인지 구함.
	
	if(currentMonth != 1)
		var prevDate = currentYear + '-' + ( currentMonth - 1 ) + '-' + currentDate;
	else
		var prevDate = ( currentYear - 1 ) + '-' + 12 + '-' + currentDate;
	//만약 이번달이 1월이라면 1년 전 12월로 출력.
	
	if(currentMonth != 12) 
		var nextDate = currentYear + '-' + ( currentMonth + 1 ) + '-' + currentDate;
	else
		var nextDate = ( currentYear + 1 ) + '-' + 1 + '-' + currentDate;
	//만약 이번달이 12월이라면 1년 후 1월로 출력.

	
	if( currentMonth < 10 )
		var currentMonth = '0' + currentMonth;
	//10월 이하라면 앞에 0을 붙여준다.
	
	var calendar = '';
	
	calendar += '<div id="header">';
	calendar += '			<span><a href="#" class="button left" onclick="kCalendar(\'' +  id + '\', \'' + prevDate + '\')"><</a></span>';
	calendar += '			<span id="date">' + currentYear + '년 ' + currentMonth + '월</span>';
	calendar += '			<span><a href="#" class="button right" onclick="kCalendar(\'' + id + '\', \'' + nextDate + '\')">></a></span>';
	calendar += '		</div>';
	calendar += '		<table border="0" cellspacing="0" cellpadding="0">';
	calendar += '			<caption>' + currentYear + '년 ' + currentMonth + '월 달력</caption>';
	calendar += '			<thead>';
	calendar += '				<tr>';
	calendar += '				  <th class="sun" scope="row">일</th>';
	calendar += '				  <th class="mon" scope="row">월</th>';
	calendar += '				  <th class="tue" scope="row">화</th>';
	calendar += '				  <th class="wed" scope="row">수</th>';
	calendar += '				  <th class="thu" scope="row">목</th>';
	calendar += '				  <th class="fri" scope="row">금</th>';
	calendar += '				  <th class="sat" scope="row">토</th>';
	calendar += '				</tr>';
	calendar += '			</thead>';
	calendar += '			<tbody>';
	
	var dateNum = 1 - currentDay;
	
	var k=1;
	for(var i = 0; i < week; i++) {
		calendar += '			<tr>';
		for(var j = 0; j < 7; j++, dateNum++) {
			if( dateNum < 1 || dateNum > currentLastDate ) {
				calendar += '				<td class="' + dateString[j] + '"> </td>';
				continue;
			}
			calendar += '				<td id="'+k+'" onclick="getdb('+currentYear+','+currentMonth+',this.innerHTML)" style="cursor:pointer;text-align:center;color:#999;">' + dateNum + '</td>'; //onclick으로 날짜값을 넘긴다.

			if(<?echo substr($date,8,2)?>==k){
				let v=k;
				setTimeout(function(){
					var z=document.getElementById(v);//이상하네; 바로 k를 넣으면 안들어가..v를 써야해
					z.style.backgroundColor="#56dcfc";
					z.style.color="#000";
					z.style.fontWeight="bold";
				},100);
			}
			k++;
		}
		calendar += '			</tr>';
	}
	
	calendar += '			</tbody>';
	calendar += '		</table>';
	
	kCalendar.innerHTML = calendar;
}

function getdb(year,month,day){//년월일을 받아와서 넘긴다.
	location.href='./order.php?year='+year+'&month='+month+'&day='+day+'';
}
</script>