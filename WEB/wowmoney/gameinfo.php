<? 
include('./include.php');
include('./HeadTab_Module_Owner.php'); 
if($_GET['refresh']==1){
   header( "Location: gameinfo.php" );
   exit;
}
?>
<meta charset="utf-8"/>
<style> 
#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 240px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 240px); /* for Firefox */
    width :         calc(100% - 240px); /* for IE */
	/*height:880px; Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
}

.ment{
	margin-top:2%;
	margin-left:15%;
	font-size:25pt;
	font-weight:bold;
}

.ment2{
	padding:5pt;
	text-align:center;
	font-size:18pt;
	color:#333333;
	font-weight:bold;
	background-color:#4edcf2;
}
.gamePrice{
	width:94%;
	height:15%;
	margin-left:3%;
	margin-top:2%;
}
.sMent1_1{
	font-size:18pt;
	font-weight:bold;
}
.sMent1_2{
	font-size:13pt;
	text-align:right;
}
.priceText{
	margin-left:18%;
	font-size:14pt;
}
.posBtn{
	position:absolute;
	width:29px;
	height:29px;
	background-color:#4edcf2;
	border:0;
	cursor:pointer;
}
.posBtn2{
	width:20px;
	height:20px;
	margin-right:6%;
	background-color:#4edcf2;
	border:0;
	cursor:pointer;
}
.imposBtn{
	position:absolute;
	width:29px;
	height:29px;
	background-color:#bfbfbf;
	border:0;
	cursor:pointer;
}
.imposBtn2{
	width:20px;
	height:20px;
	margin-right:6%;
	border:1px solid #bfbfbf;
	background-color:white;
	cursor:pointer;
}
.defBtn{
	border:1px solid #4edcf2;
	background:white;
}
.pos{
	width:22px;
	height:22px;
	margin-right:3%;
	background-color:#4edcf2;
	border:0;
}
.impos{
	width:22px;
	height:22px;
	margin-right:3%;
	margin-left:3%;
	background-color:#bfbfbf;
	border:0;
	cursor:pointer;
}
.textInner{
	width:40%;
	margin-left:4%; 
	font-size:14pt;
	text-align:center;
	border:1px solid #4edcf2;
	height:30px;
}
.discountInfo{
	margin-top:3%;
	margin-bottom:3%;
	margin-left:3.5%;
	font-size:18pt;
	font-weight:bold;
}
.discountContent{
	margin-left:4%;
	font-size:14pt;
}
.discountContent_inner{
	width:12%;
	height:3%;
	font-size:14pt;
	margin-top:1%;
	text-align:center;
	border:1px solid #4edcf2;
	cursor:pointer;
}
.save{
	width:15%;
	height:5%;
	margin-top:5%;
	margin-bottom:5%;
	font-size:16pt;
	font-weight:bold;
	background-color:#4edcf2;
	border:0;
	cursor:pointer;
}
.Info2{
	width:60%;
	margin-top:2%;
	margin-left:15%;
	margin-bottom:5%;
	border: 1px solid #ccc;
}
.addGame{
	margin-right:4.1%;
	margin-top:3%;
	font-size:13pt;
	border:4px solid #4edcf2;
	background:white;
	padding:5px;
	cursor:pointer;
}
.gameNum_Inner{
	margin-top:3%;
	margin-left:3%;
	border:1px solid #bfbfbf;
	float:left;
	text-align:center;
	padding-top:7pt;
	width:16%;
	height:40px;
	font-size:16pt;
	font-weight:bold;
}
.gameInfo{
	width:95%;
	margin-top:1%;
	margin-left:2%;
	font-size:12pt;
}
.lastMent{
	margin-top:7%;
	font-size:12pt;
	text-align:center;
}
.delBtn{
	width:10%;
	height:5%;
	margin-top:3%;
	font-size:16pt;
	font-weight:bold;
	border:0;
	margin-bottom:1%;
	cursor:pointer;
}
.defText{
	border:1px solid #4edcf2;
	background-color:white;
	color:gray;
}
.saveBtn{
	width:10%;
	height:5%;
	margin-top:3%;
	margin-left:1%;
	font-size:16pt;
	font-weight:bold;
	background-color:#4edcf2;
	border:0;
	margin-bottom:1%;
	cursor:pointer;
}
.timeBtn{
	margin-right:4%;
	margin-bottom:4%;
	background-color:#eeeeee;
	border:0;
	width:48px;
	height:17px;
}
.exBtn{
	width:25px;
	height:25px;
	border:1px solid #4edcf2;
	background-color:white;
	margin-left:1%;
}
.num{
	width:5%;
	text-align:center;
	font-size:13pt;
	border:0;
}
.num1{
	width:5%;
	text-align:center;
	font-size:13pt;
	border:0;
}

#discount,#discount2,#discount3,#discount4,#discount5,#discount6,#discount7,#discount8,#discount9,#discount10 {
height:30px;width:140px;}

#title{
 padding-left:10px;
 width:100%; height:100%; font-size:12pt; background-color:#eeeeee;  border:0;
}
#subtitle{
padding-left:10px;width:100%; height:100%; font-size:12pt; background-color:#eeeeee; border:0;
}
#content{
font-size:12pt; width:100%; height:100%; background-color:#F2F2F2; border:none;overflow:hidden;
vertical-align:top;padding: 10px 10px 10px 10px;
}
#summary{
font-size:12pt; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow:hidden;vertical-align:top;padding: 10px 10px 10px 10px;
}
#Page_info{
	width:100%;
}
#Page_info .left{
	float:left;
	display:table;
	padding-left:4%;
}
#Page_info .page_count{
	display:table-cell;
	font-size:22px;
	font-weight:bold;
	padding:0 3;
}
.dnyBtn{
	margin-left:102%; 
	margin-top: -10%; 
	margin-bottom:1%; 
	width:13%; 
	height:6%;
	border:0;
	font-size:18pt;
	font-weight:bold;
	background-color:#eeeeee;
}
.acpBtn{
	margin-left:102%;
	margin-top:-5%;
	width:13%; 
	height:12%;
	border:0;
	font-size:18pt;
	font-weight:bold;
	background-color:#4edcf2;
}
#Page_info{
	width:100%;
}
#Page_info .left{
	float:left;
	display:table;
	margin-left:20px;
	margin-top:5px;
}
#Page_info .page_count{
	display:table-cell;
	font-size:22px;
	font-weight:bold;
	padding:0 3;
}
#timebutton{width:23%;height:30px;text-align:center;border:1px solid #ccc;font-size:15px;}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script> //버튼 up,down js
$(function(){ 
  $('.bt_up').click(function(){ 
    var n = $('.bt_up').index(this);
    var num = $(".num:eq("+n+")").val();
	if(num>4)
		num=5;
	else
		num = $(".num:eq("+n+")").val(num*1+1);
  });
  $('.bt_down').click(function(){ 
    var n = $('.bt_down').index(this);
    var num = $(".num:eq("+n+")").val();
	if(num<2)
		num=1;
	else
		num = $(".num:eq("+n+")").val(num*1-1);
  });
})
</script>
<script>
$(function(){ 
  $('.bt_up1').click(function(){ 
    var n = $('.bt_up1').index(this);
    var num = $(".num1:eq("+n+")").val();
	if(num>7)
		num=8;
	else
		num = $(".num1:eq("+n+")").val(num*1+1);
  });
  $('.bt_down1').click(function(){ 
    var n = $('.bt_down1').index(this);
    var num = $(".num1:eq("+n+")").val();
	if(num<2)
		num=1;
	else
		num = $(".num1:eq("+n+")").val(num*1-1);
  });
}) 
</script>
<!--
<script> //할인 추가,삭제 js
	function add_item(){
        var div = document.createElement('div');
        div.innerHTML = document.getElementById('pre_set').innerHTML;
        document.getElementById('field').appendChild(div);
    }
    function remove_item(obj){
        document.getElementById('field').removeChild(obj.parentNode);
    }

	function add_item1(){
        var div = document.createElement('div');
        div.innerHTML = document.getElementById('pre_set1').innerHTML;
        document.getElementById('field1').appendChild(div);
    }
    function remove_item1(obj){
        document.getElementById('field1').removeChild(obj.parentNode);
    }
</script>
-->


<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<div id="Main">
<?
//기본가격정보에 사용될 쿼리
$sql="select * from gameAsk where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$basic=mysql_fetch_array($q);

//게임정보에 사용될 쿼리들
//count
$sql2="select count(g_idx) from gameAsk";
$q=mysql_query($sql2);
$count=mysql_fetch_array($q);

//queue
$queue=array();

$sql="select g_idx from gameAsk";
$q=mysql_query($sql);
while($result=mysql_fetch_array($q)){
	//상대인덱스값
	array_push($queue, $result[0]);
}
//역행 금지
if($_GET['index']==-1){?><script>history.back();</script><?}
//상대인덱스값(queue값이 페이지갱신되면서 index로 들어옴)
$index=$_GET['index'];
//인덱스초기화
if(!$index){$index=0;}

//index condition
if($index+1>$count[0]){
	?>
	<script>location.href='./index.php';</script>
	<?
}
//call cafe infos
	$sql="select * from gameAsk where g_idx='".$queue[$index]."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);

?>
<div class="ment">
게임정보승인&nbsp&nbsp&nbsp&nbsp&nbsp요청시간:<?echo $data['time']?>
</div>

<form action="./gameAdmit.php" method="POST" id="form">
<input type="hidden" name="g_idx" value="<?echo $queue[$index]?>"/>	
<input type="hidden" name="p_id" value="<?echo $data['p_id']?>"/>	

	<div id="Page_info">
	<div class="left">
		<div class="page_count"><a href="./gameinfo.php?index=<?echo $index-1?>"><</a></div>
		<div class="page_count"><?echo $index+1?></div>
		<div class="page_count">/</div>
		<div class="page_count"><?echo $count[0]?></div>
		<div class="page_count"><a href="./gameinfo.php?index=<?echo $index+1?>">></a></div>
	</div>
	</div>



<div class="Info2">
	<div class="ment2">
		게임정보
	</div>
		
	<div class="gameInfo">
	<table style="border-spacing:10px 10px;">
		<tr>
<?
$imageSql="select filename from gameImageAsk where g_idx='".$data['g_idx']."'";
$imageQ=mysql_query($imageSql);
$image=mysql_fetch_array($imageQ);
?>
			<!--이미지-->
			<td rowspan="5" style="background-color:#eeeeee; width:250px; height:500px">
				<img src="../manager/gameImageAsk/<?echo $image[0]?>.jpg" style="width:100%;"/>
			</td>
			<!--제목-->
			<td id="title" colspan="4"  style="width:700px; height:50px;">
			<input name="title" type="text" style="width:100%; height:100%; font-size:12pt; background-color:#eeeeee;  border:0;" value="<?echo $data['g_title']?>">
			</td>
		</tr>
		<tr>
			<td id="subtitle" colspan="4" style="width:700px; height:50px;">
			<input name="subtitle" type="text" style="width:100%; height:100%; font-size:12pt; background-color:#eeeeee; border:0;"  value="<?echo $data['g_subtitle']?>">
			</td>
		</tr>
		<tr>
			<td id="content" rowspan="4" colspan="2" style="background-color:#eeeeee; width:30%;">
			<textarea name="content" style="text-align:center;font-size:12pt; width:100%; height:100%;background-color:#F2F2F2; border:0;"  ><?echo $data['g_content']?></textarea>
			</td>
			<td id="summary"rowspan="1" style="background-color:#eeeeee; width:30%; height:30%;">
			<textarea name="summary" style="text-align:center;font-size:12pt; width:100%; height:100%; background-color:#F2F2F2; border:0;" ><?echo $data['g_summary']?></textarea></td>
		</tr>
		<tr>
		<?
		//game_time을 불러온다.
		$tsql="select * from game_timeAsk where g_idx='".$queue[$index]."'";
		$tq=mysql_query($tsql);
		$time=mysql_fetch_array($tq);
		?>
			<td rowspan="1" style="vertical-align:top;overflow:hidden;background-color:#eeeeee;vertical-align:middle">
				<font color="#6f6f6f" size="3px" style="margin-left:2%">예약시간을 입력해주세요.</font><br><br><input id="timebutton" type="text" value="<?echo $time['gt_1']?>" style="margin:1% 1% 1% 2%" name="time1"/><input id="timebutton" type="text" value="<?echo $time['gt_2']?>" style="margin:1% 1% 1% 0" name="time2"/><input id="timebutton" type="text" value="<?echo $time['gt_3']?>" style="margin:1% 1% 1% 0" name="time3"/><input id="timebutton" type="text" value="<?echo $time['gt_4']?>" style="margin:1% 1% 1% 0" name="time4"/><input id="timebutton" type="text" value="<?echo $time['gt_5']?>" style="margin:0 1% 1% 2%" name="time5"/><input id="timebutton" type="text" value="<?echo $time['gt_6']?>"  style="margin:0 1% 1% 0" name="time6"/><input id="timebutton" type="text" value="<?echo $time['gt_7']?>"  style="margin:0 1% 1% 0" name="time7"/><input id="timebutton" type="text" value="<?echo $time['gt_8']?>"  style="margin:0 2% 1% 0" name="time8"/><input id="timebutton" type="text" value="<?echo $time['gt_9']?>" style="margin:0 1% 1% 2%" name="time9"/><input id="timebutton" type="text" value="<?echo $time['gt_10']?>"  style="margin:0 1% 1% 0" name="time10"/><input id="timebutton" type="text" value="<?echo $time['gt_11']?>" style="margin:0 1% 1% 0" name="time11"/><input id="timebutton" type="text" value="<?echo $time['gt_12']?>"  style="margin:0 2% 1% 0" name="time12"/><input id="timebutton" type="text" value="<?echo $time['gt_13']?>"  style="margin:0 1% 1% 2%" name="time13"/><input id="timebutton" type="text" value="<?echo $time['gt_14']?>"  style="margin:0 1% 1% 0" name="time14"/><input id="timebutton" type="text" value="<?echo $time['gt_15']?>" style="margin:0 1% 1% 0" name="time15"/><input id="timebutton" type="text" value="<?echo $time['gt_16']?>" style="margin:0 2% 1% 0" name="time16"/>
			</td>
		</tr>
	</table>
	</div>

	<div>
	<table style="width:80%; margin-left:3%;">
	<tr>
		<td style="font-size:12pt; width:25%;">(게임설정)</td>
		<td style="font-size:12pt;">(필요능력)</td>
	</tr>
    <tr> 
      <td rowspan="2" style="font-size:13pt;">
	  난이도
		<a href="#a" class="bt_up">올림</a> 
		<input id="level" name="level" type="text" name="num" class="num" value="<?echo $data['g_level']?>">
		<a href="#a" class="bt_down">내림</a>
	  </td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability1" onclick=button_onskill(1) value="<?echo $data['g_skill1']?>">직관력<input id="a1" type="hidden" name="ability1" value="<?echo $data['g_skill1']?>"></td>
	  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability2" onclick=button_onskill(2) value="<?echo $data['g_skill2']?>">관찰력<input id="a2" type="hidden" name="ability2" value="<?echo $data['g_skill2']?>"></td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2"  id="ability3" onclick=button_onskill(3) value="<?echo $data['g_skill3']?>">수리력<input id="a3" type="hidden" name="ability3" value="<?echo $data['g_skill3']?>"></td>
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2"  id="ability4" onclick=button_onskill(4) value="<?echo $data['g_skill4']?>">팀워크<input id="a4" type="hidden" name="ability4" value="<?echo $data['g_skill4']?>"></td>
    </tr>
    <tr>       
    </tr>
    <tr>
      <td rowspan="2" style="font-size:13pt;">
	  공포감
	  	<a href="#a" class="bt_up">올림</a> 
		<input id="horror" name="horror" type="text" name="num" class="num" value="<?echo $data['g_horror']?>">
		<a href="#a" class="bt_down">내림</a>
		</td>
    </tr>
    <tr>     
      <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability5" onclick=button_onskill(5) value="<?echo $data['g_skill5']?>">활동성<input id="a5" type="hidden" name="ability5" value="<?echo $data['g_skill5']?>"></td>
	  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability6" onclick=button_onskill(6) value="<?echo $data['g_skill6']?>">담력<input id="a6" type="hidden" name="ability6" value="<?echo $data['g_skill6']?>"></td>
	  <td rowspan="3"></td>
	  <td rowspan="3"></td>
    </tr>

    <tr>
      <td rowspan="2" style="font-size:13pt;">
	  인원수
	  	<a href="#a" class="bt_up1">올림</a> 
		<input id="people" name="people" type="text" name="num1" class="num1" value="<?echo $data['g_people']?>">
		<a href="#a" class="bt_down1">내림</a>
		~
		<a href="#a" class="bt_up1">올림</a> 
		<input id="people" name="people2" type="text" name="num1" class="num1" value="<?echo $data['g_people2']?>">
		<a href="#a" class="bt_down1">내림</a>
	  </td>
    </tr>
	</table>
		<HR width="93%" align="center" border="1" style="margin-top:3%; margin-left:2.9%;"/>
	</div>

	<div>
	<table id="copytable" class="gamePrice">
		<tr>
			<td colspan="3" class="sMent1_1">게임가격</td>
			<td class="sMent1_2"><input type="button" class="pos" style="margin-left:2%;">가능<input type="button" class="impos">불가능</td>
		</tr>
		<tr>
			<td>
			<input type="button" class="imposBtn" id="btn9" onclick="myFunction9()"><p class="priceText">1<input type="text1" class="textInner" disabled id="text9" name="g_p9" value="<?echo $data['g_p1']?>">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn10" onclick="myFunction10()"><p class="priceText">2<input type="text" class="textInner" id="text10" name="g_p10" value="<?echo $data['g_p2']?>">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn11" onclick="myFunction11()"><p class="priceText">3<input type="text" class="textInner" id="text11" name="g_p11" value="<?echo $data['g_p3']?>">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn12" onclick="myFunction12()"><p class="priceText">4<input type="text" class="textInner" id="text12" name="g_p12" value="<?echo $data['g_p4']?>">원</p></td>
		</tr>
		<tr>
			<td>
			<input type="button" class="posBtn" id="btn13" onclick="myFunction13()"><p class="priceText">5<input type="text" class="textInner" id="text13" name="g_p13" value="<?echo $data['g_p5']?>">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn14" onclick="myFunction14()"><p class="priceText">6<input type="text" class="textInner" id="text14" name="g_p14" value="<?echo $data['g_p6']?>">원</p></td>
			<td>
			<input type="button" class="posBtn" id="btn15" onclick="myFunction15()"><p class="priceText">7<input type="text" class="textInner" id="text15" name="g_p15" value="<?echo $data['g_p7']?>">원</p></td>
			<td>
			<input type="button" class="imposBtn" id="btn16" onclick="myFunction16()"><p class="priceText">8<input type="text" class="textInner" disabled id="text16" style="background-color:#eeeeee" value="<?echo $data['g_p8']?>">원</p></td>
		</tr>
	</table>	
	</div>

	<div>
		<div class="discountInfo">할인정보</div>
		<table style="margin-left:3%; font-size:14pt; margin-bottom:3%;">
			<tr>
				<td style="width:35%;">*탈출러최저가(1인가격)</td>
				<td>주중 <input type="textbox" id="week2" name="week" style="height:30px;width:40%; font-size:14pt; text-align:center;" class="defText" value="<?echo $data['g_weekprice']?>">원</td>
				<td>주말 <input type="textbox" id="holy2" name="holy" style="height:30px;width:40%; font-size:14pt; text-align:center;" class="defText" value="<?echo $data['g_holyprice']?>">원</td>
			</tr>
		</table>
	</div>

	<div class="discountContent">
	할인종류
		<select id="discount6" name="discount1" class="discountContent_inner" onChange="getSelectValue6();">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" id="value6" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value6" value="<?echo $data['g_disname1']?>">
	할인가격 - <input type="text" id="dis6" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis6" value="<?echo $data['g_disprice1']?>">원
	</div>

	<div class="discountContent">
	할인종류
		<select id="discount7" name="discount1" class="discountContent_inner" onChange="getSelectValue7();">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" id="value7" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value7" value="<?echo $data['g_disname2']?>">
	할인가격 - <input type="text" id="dis7" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis7" value="<?echo $data['g_disprice2']?>">원
	</div>

	<div class="discountContent">
	할인종류
		<select id="discount8" name="discount1" class="discountContent_inner" onChange="getSelectValue8();">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" id="value8" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value8" value="<?echo $data['g_disname3']?>">
	할인가격 - <input type="text" id="dis8" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis8" value="<?echo $data['g_disprice3']?>">원
	</div>

	<div class="discountContent">
	할인종류
		<select id="discount9" name="discount1
		" class="discountContent_inner" onChange="getSelectValue9();">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" id="value9" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value9" value="<?echo $data['g_disname4']?>">
	할인가격 - <input type="text" id="dis9" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis9" value="<?echo $data['g_disprice4']?>">원
	</div>

	<div class="discountContent">
	할인종류
		<select id="discount10" name="discount1" class="discountContent_inner" onChange="getSelectValue10();">
			<option value="1">선택하세요</option>
			<option value="2">조조할인</option>
			<option value="3">평일할인</option>
			<option value="4">SNS할인</option>
			<option value="5">후기할인</option>
			<option value="6">직접입력</option>
		</select>
		<input type="text" id="value10" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value10" value="<?echo $data['g_disname5']?>">
	할인가격 - <input type="text" id="dis10" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis10" value="<?echo $data['g_disprice5']?>">원
	</div>
	<a href="#Page_info"><input type="button" class="dnyBtn" value="거절" onclick="popup1()"></a>
	<a href="#Page_info"><input type="button" class="acpBtn" value="승인하기" onclick="popup2()"></a>
</div>
</form>
<!--popup module-->
<style>
.blackarea{position:absolute;top:0;left:0;width:100%;height:100%;overflow:hidden;background-color:RGBA(1,1,1,0.8);display:none;}
.blackarea2{position:absolute;top:0;left:0;width:100%;height:100%;overflow:hidden;background-color:RGBA(1,1,1,0.8);display:none;}
.whitearea{position:absolute;width:40%;height:40%;background-color:white;margin:15% 30% 15% 30%;}
.reason{width:92%;height:10%;margin-left:4%;border:1px solid;margin:10px;}
.buttons{width:100%;text-align:center;float:left;}
.buttonreject{width:80px;height:40px;background-color:#ccc;border:none;padding:5px;}
.buttonadmit{width:80px;height:40px;background-color:#4edcf2;border:none;padding:5px;}
.leftdiv{float:left;}
.check{width:30px;height:30px;}
</style>
	<!--popup1-->
	<div class="blackarea" id="blackarea">
		<div class="whitearea">
			<div class="buttons">
				<form action="./gameDelete.php" method="GET" id="rejectform">
				<input type="checkbox" name="reject1" class="check"/>할인정보가 홈페이지와 달라 반려되었습니다. 확인수정 후 재요청 해주세요.<br>
				<input type="checkbox" name="reject2" class="check"/>탈출러 판매가격이 잘못 기재되었습니다. 확인수정 후 재요청 해주세요.<br>
				<input type="checkbox" name="reject3" class="check"/>잘못된 게임정보 이미지가 등록되었습니다. 확인수정 후 재요청 해주세요.<br>
				<input type="checkbox" name="reject4" class="check"/>잘못된 게임정보가 기재되었습니다. 확인수정 후 재요청 해주세요.<br><br>
				<div class="leftdiv">거절 사유를 입력주세요.</div>
				<input type="text" name="reason" class="reason"/>
				<input type="hidden" name="g_idx" value="<?echo $queue[$index]?>"/>
				<input type="button" class="buttonreject" value="취소" onclick="closepopup()"/>
				<input type="button" class="buttonadmit" value="거절" onclick="deleteGame()"/>
				</form>
			</div>
		</div>
	</div>
	<!--popup2-->
	<div class="blackarea2" id="blackarea2">
		<div class="whitearea">
			<div class="buttons" style="margin-top:20%;text-align:center;">
				<div class="leftdiv" style="padding-left:40%;margin-bottom:10%">최종 승인 하시겠습니까?</div><br>
				<input type="button" class="buttonreject" value="취소" onclick="closepopup2()"/>
				<input type="button" class="buttonadmit" value="승인" onclick="submit()"/>
			</div>
		</div>
	</div>
<?
//지울때 g_idx로 지우면, 같은 게임의 경우 중복 요청이 전부 삭제되므로. 일단 요청정보를 조회한다.
$sql="select count(g_idx) from gameAsk where g_idx='".$data['g_idx']."' group by g_idx";
$q=mysql_query($sql);
$cou=mysql_fetch_array($q);
?>
<script>
function popup1(){
	var popup=document.getElementById('blackarea');
	if('<?echo $cou[0]?>' > 1){
		if(confirm("잠깐, 같은 게임정보가 뒤에 더있어요. 삭제했고, 같은게임의 모든 요청을 삭제하실건가요?")==true){
					popup.style.display="block";			
		}else{
			//취소
			return false;
		}
	}
	else{
		popup.style.display="block";
	}
}
function popup2(){
	var popup=document.getElementById('blackarea2');
	if('<?echo $cou[0]?>' > 1){
		if(confirm("잠깐, 같은 게임정보가 뒤에 더있어요. 현재것을 승인하면 다른정보들도 사라져요~ 한번더 확인해주세요!")==true){
					popup.style.display="block";			
		}else{
			//취소
			return false;
		}
	}
	else{
		popup.style.display="block";
	}
}
function closepopup(){
	var popup=document.getElementById('blackarea');
	popup.style.display="none";
}
function closepopup2(){
	var popup=document.getElementById('blackarea2');
	popup.style.display="none";
}
function submit(){
	var f=document.getElementById('form');
	f.submit();
}
</script>
<!--popup module-->
</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요--> 
</div> 
<script>
t=1;
function data_copy(){
	var id = document.getElementById('copy');
	
	var text9= document.getElementById('text9');
	var text10= document.getElementById('text10');
	var text11= document.getElementById('text11');
	var text12= document.getElementById('text12');
	var text13= document.getElementById('text13');
	var text14= document.getElementById('text14');
	var text15= document.getElementById('text15');
	var text16= document.getElementById('text16');
	var week2= document.getElementById('week2');
	var holy2= document.getElementById('holy2');
	var value6= document.getElementById('value6');
	var value7= document.getElementById('value7');
	var value8= document.getElementById('value8');
	var value9= document.getElementById('value9');
	var value10= document.getElementById('value10');
	var dis6= document.getElementById('dis6');
	var dis7= document.getElementById('dis7');
	var dis8= document.getElementById('dis8');
	var dis9= document.getElementById('dis9');
	var dis10= document.getElementById('dis10');

	if(t>0){
		id.style.backgroundColor='#4edcf2';
		t=-1;
		text9.value=<?echo $data['g_p1']?>;
		text10.value=<?echo $data['g_p2']?>;
		text11.value=<?echo $data['g_p3']?>;
		text12.value=<?echo $data['g_p4']?>;
		text13.value=<?echo $data['g_p5']?>;
		text14.value=<?echo $data['g_p6']?>;
		text15.value=<?echo $data['g_p7']?>;
		text16.value=<?echo $data['g_p8']?>;
		week2.value=<?echo $data['g_weekprice']?>;
		holy2.value=<?echo $data['g_holyprice']?>;
		value6.value="<?echo $data['g_disname1']?>";
		value7.value="<?echo $data['g_disname2']?>";
		value8.value="<?echo $data['g_disname3']?>";
		value9.value="<?echo $data['g_disname4']?>";
		value10.value="<?echo $data['g_disname5']?>";
		dis6.value=<?echo $data['g_disprice1']?>;
		dis7.value=<?echo $data['g_disprice2']?>;
		dis8.value=<?echo $data['g_disprice3']?>;
		dis9.value=<?echo $data['g_disprice4']?>;
		dis10.value=<?echo $data['g_disprice1']?>;

	}else{
		id.style.backgroundColor='white';
		t=1;
		text9.value="";
		text10.value="";
		text11.value="";
		text12.value="";
		text13.value="";
		text14.value="";
		text15.value="";
		text16.value="";
		week2.value="";
		holy2.value="";
		value6.value="";
		value7.value="";
		value8.value="";
		value9.value="";
		value10.value="";
		dis6.value="";
		dis7.value="";
		dis8.value="";
		dis9.value="";
		dis10.value="";
	}
}
</script>
<script>
function deleteGame(){
	var f=document.getElementById('rejectform');
	f.submit();
}
</script>
<script> //select박스 선택시 text박스 출력(추가를 했을때는 안됨)
function getSelectValue6()
{
	var discount=document.getElementById('discount6');
	var value1=document.getElementById('value6');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue7()
{
	var discount=document.getElementById('discount7');
	var value1=document.getElementById('value7');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue8()
{
	var discount=document.getElementById('discount8');
	var value1=document.getElementById('value8');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue9()
{
	var discount=document.getElementById('discount9');
	var value1=document.getElementById('value9');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue10()
{
	var discount=document.getElementById('discount10');
	var value1=document.getElementById('value10');
	value1.value = discount.options[discount.selectedIndex].text;
}
</script>
<script> //버튼 클릭시 text박스 비활성화
var count9=0;
function myFunction9() {
	count9++;
    if(count9%2==0){
	document.getElementById("text9").disabled = true;
	document.getElementById("btn9").style.backgroundColor='#bfbfbf';
	document.getElementById("text9").style.backgroundColor='#eeeeee';
	}else{
    document.getElementById("text9").disabled = false;
	document.getElementById("btn9").style.backgroundColor='#4edcf2';
	document.getElementById("text9").style.backgroundColor='white';
	}
}
var count10=0;
function myFunction10() {
	count10++;
    if(count10%2==1){
	document.getElementById("text10").disabled = true;
	document.getElementById("btn10").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text10").disabled = false;
	document.getElementById("btn10").style.backgroundColor='#4edcf2';
	}
}
var count11=0;
function myFunction11() {
	count11++;
    if(count11%2==1){
	document.getElementById("text11").disabled = true;
	document.getElementById("btn11").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text11").disabled = false;
	document.getElementById("btn11").style.backgroundColor='#4edcf2';
	}
}
var count12=0;
function myFunction12() {
	count12++;
    if(count12%2==1){
	document.getElementById("text12").disabled = true;
	document.getElementById("btn12").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text12").disabled = false;
	document.getElementById("btn12").style.backgroundColor='#4edcf2';
	}
}
var count13=0;
function myFunction13() {
	count13++;
    if(count13%2==1){
	document.getElementById("text13").disabled = true;
	document.getElementById("btn13").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text13").disabled = false;
	document.getElementById("btn13").style.backgroundColor='#4edcf2';
	}
}
var count14=0;
function myFunction14() {
	count14++;
    if(count14%2==1){
	document.getElementById("text14").disabled = true;
	document.getElementById("btn14").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text14").disabled = false;
	document.getElementById("btn14").style.backgroundColor='#4edcf2';
	}
}
var count15=0;
function myFunction15() {
	count15++;
    if(count15%2==1){
	document.getElementById("text15").disabled = true;
	document.getElementById("btn15").style.backgroundColor='#bfbfbf';
	}else{
    document.getElementById("text15").disabled = false;
	document.getElementById("btn15").style.backgroundColor='#4edcf2';
	}
}
var count16=0;
function myFunction16() {
	count16++;
    if(count16%2==0){
	document.getElementById("text16").disabled = true;
	document.getElementById("btn16").style.backgroundColor='#bfbfbf';
	document.getElementById("text16").style.backgroundColor='#eeeeee';
	}else{
    document.getElementById("text16").disabled = false;
	document.getElementById("btn16").style.backgroundColor='#4edcf2';
	document.getElementById("text16").style.backgroundColor='white';
	}
}
</script>

<script>
a1=1;b1=1;c1=1;d1=1;e1=1;f1=1;
function button_onskill(value){
	var v1=document.getElementById('a1');
	var v2=document.getElementById('a2');
	var v3=document.getElementById('a3');
	var v4=document.getElementById('a4');
	var v5=document.getElementById('a5');
	var v6=document.getElementById('a6');

	switch(value){
		case 1:
			var now=document.getElementById("ability"+value);
			if(a1==1){
				a1=-1;
				v1.value="1";
				now.style.backgroundColor="#4edcf2";
				break;
			}
			else{
				a1=1;
				v1.value="0";
				now.style.backgroundColor="white";
				break;
				}
		case 2:
			var now=document.getElementById("ability"+value);
			if(b1==1){
				b1=-1;
				v2.value="1";
				now.style.backgroundColor="#4edcf2";break;
			}
			else{
				b1=1;
				v2.value="0";
				now.style.backgroundColor="white";break;
			}
		case 3:
			var now=document.getElementById("ability"+value);
			if(c1==1){
				c1=-1;
				v3.value="1";
				now.style.backgroundColor="#4edcf2";break;
			}
			else{
				c1=1;
				v3.value="0";
				now.style.backgroundColor="white";break;
			}
		case 4:
			var now=document.getElementById("ability"+value);
			if(d1==1){
				d1=-1;
				v4.value="1";
				now.style.backgroundColor="#4edcf2";break;
			}
			else{
				d1=1;
				v4.value="0";
				now.style.backgroundColor="white";break;
			}
		case 5:
			var now=document.getElementById("ability"+value);
			if(e1==1){
				e1=-1;
				v5.value="1";
				now.style.backgroundColor="#4edcf2";break;
			}
			else{
				e1=1;
				v5.value="0";
				now.style.backgroundColor="white";break;
			}
		case 6:
			var now=document.getElementById("ability"+value);
			if(f1==1){
				f1=-1;
				v6.value="1";
				now.style.backgroundColor="#4edcf2";break;
			}
			else{
				f1=1;
				v6.value="0";
				now.style.backgroundColor="white";break;
			}
	}
}
</script>