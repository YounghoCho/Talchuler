<? 
include('./include.php');
include('./HeadTab_Module.php'); 
?>

<style> 
.container{
	margin-left:100px;
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
	width:70px;
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
	padding-left:3%;
}
#Page_info .left{
	float:left;
	display:table;
}
#Page_info .page_count{
	display:table-cell;
	font-size:22px;
	font-weight:bold;
	padding:0 3;
}
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
	document.getElementById("text9").style.backgroundColor='#ccc';
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
	document.getElementById("text16").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text16").disabled = false;
	document.getElementById("btn16").style.backgroundColor='#4edcf2';
	document.getElementById("text16").style.backgroundColor='white';
	}
}
</script>
<?
//call datas
$sql="select * from game where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
?>
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

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.--> 
<div class="container">
	<div class="ment">
	게임추가하기
	</div>

	<div class="Info2">
		<div class="ment2">
			게임정보
		</div>
			
		<div class="gameInfo">
		<table style="border-spacing:10px 10px;">
			<tr>
	<style>
	input[type="file"]{ position: absolute;clip:rect(5,180,25,75);margin-left:-50px;}
	#submit{ position: absolute;margin-left:170px;padding:5px 6px 6px 5px;font-size:13pt;border:none;background-color:#4edcf2;}
	</style>
	<?
	//넘길 g_idx값
	$passSql="select g_idx from gameAsk order by g_idx desc";
	$passQ=mysql_query($passSql);
	$pass=mysql_fetch_array($passQ);
	//사진 불러올 쿼리
	$imgsql="select filename from gameImageAsk where g_idx='".$pass['g_idx']."'+1";
	$imgQ=mysql_query($imgsql);
	$img=mysql_fetch_array($imgQ);
	?>
				<!--사진 업로드-->
			<form id="f1" action="./gameAddDB.php" method="POST" name="form" enctype="multipart/form-data">
				<td rowspan="5" style="background-color:#eeeeee; width:250px; height:500px">
					<label for="cover" style=" display: inline-block;background-color:#eee;height:80%;width:100%;"><img id="thisimg" src="" style="width:100%;border:none;" onerror="this.style.display='none'"/></label>
					<input name="userfile" type="file" id="cover" accept=".gif, .jpg, .png"/>
					<input type="hidden" name="p_id" value="<?echo	$_SESSION['id']?>" />
					<input type="hidden" name="isnew" value="1" />
					<input type="hidden" name="g_idx" value="<?echo	$pass['g_idx']+1?>" />
					<input type="hidden" name="request_uri" value="<?echo $_SERVER['REQUEST_URI']?>" />
				</td>

	<?
	//사진변경
	if($_GET['refresh']==1){
	?><script>
		var thisimg=document.getElementById('thisimg');
		thisimg.src="./gameImageAsk/<?echo $img[0]?>.jpg";
	</script>
	<?}?>
			<!--제목-->

				<td id="title" colspan="3"  style="width:70%; height:50px;"><input name="title" type="text" style="width:100%; height:100%; font-size:12pt; background-color:#eeeeee;  border:0;">
				</td>
			</tr>
			<tr>
				<td id="subtitle" colspan="3" style="width:70%; height:50px;"><input name="subtitle" type="text" style="width:100%; height:100%; font-size:12pt; background-color:#eeeeee; border:0;" onfocus="this.value=''">
				</td>
			</tr>
			<tr>
				<td id="content" rowspan="3" style="background-color:#eeeeee;"><textarea name="content" style="text-align:center;font-size:12pt; width:100%; height:100%;background-color:#F2F2F2; border:0; overflow:hidden;"></textarea>
				</td>
				<td rowspan="3" style="width:30px;text-align:right; width:5%;vertical-align:top;">(요약)</td>
				<td id="summary" style="background-color:#eeeeee; width:30%; height:30%;"><textarea name="summary" style="text-align:center;font-size:12pt; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow:hidden;" onfocus="this.value='';"></textarea></td>
			</tr>
			<tr>
				<td style="height:5%;"><!--(예약시간)-->&nbsp;</td>
			</tr>
			<tr>
				<td style="vertical-align:top;">
				&nbsp;<!--
				<input type="button" value="10:00" class="timeBtn"><input type="button" value="11:00" class="timeBtn"><input type="button" value="12:00" class="timeBtn"><input type="button" value="13:00" class="timeBtn"><input type="button" value="14:00" class="timeBtn"><input type="button" value="15:00" class="timeBtn"><input type="button" value="16:00" class="timeBtn"><input type="button" value="17:00" class="timeBtn"><input type="button" value="18:00" class="timeBtn"><input type="button" value="19:00" class="timeBtn"><input type="button" value="20:00" class="timeBtn"><input type="button" value="21:00" class="timeBtn"><input type="button" value="22:00" class="timeBtn"><input type="button" value="23:00" class="timeBtn"><input type="button" value="24:00" class="timeBtn"><input type="button" value="01:00" class="timeBtn"><input type="button" value="02:00" class="timeBtn"><input type="button" value="03:00" class="timeBtn">
				-->
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
			<input id="level" name="level" type="text" name="num" class="num" value="0">
			<a href="#a" class="bt_down">내림</a>
		  </td>
		  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability1" onclick=button_onskill(1)>직관력<input id="a1" type="hidden" name="ability1"></td>
		  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability2" onclick=button_onskill(2)>관찰력<input id="a2" type="hidden" name="ability2"></td>
		  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2"  id="ability3" onclick=button_onskill(3)>수리력<input id="a3" type="hidden" name="ability3"></td>
		  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2"  id="ability4" onclick=button_onskill(4)>팀워크<input id="a4" type="hidden" name="ability4"></td>
		</tr>
		<tr>       
		</tr>
		<tr>
		  <td rowspan="2" style="font-size:13pt;">
		  공포감
			<a href="#a" class="bt_up">올림</a> 
			<input id="horror" name="horror" type="text" name="num" class="num" value="0">
			<a href="#a" class="bt_down">내림</a>
			</td>
		</tr>
		<tr>     
		  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability5" onclick=button_onskill(5)>활동성<input id="a5" type="hidden" name="ability5"></td>
		  <td rowspan="3" style="font-size:15pt;"><input type="button" class="imposBtn2" id="ability6" onclick=button_onskill(6)>담력<input id="a6" type="hidden" name="ability6"></td>
		  <td rowspan="3"></td>
		  <td rowspan="3"></td>
		</tr>

		<tr>
		  <td rowspan="2" style="font-size:13pt;">
		  인원수
			<a href="#a" class="bt_up1">올림</a> 
			<input id="people" name="people" type="text" name="num1" class="num1" value="0">
			<a href="#a" class="bt_down1">내림</a>
		  </td>
		</tr>
		</table>
			<HR width="93%" align="center" border="1" style="margin-top:3%; margin-left:2.9%;"/>
			<div style="text-align:right; margin-right:4.1%; margin-top:3%; font-size:15pt;">
				기본 가격정보와 같음<input type="button" class="exBtn" onclick="data_copy()" id="copy" name="copy">
			</div>
		</div>

		<div>
		<table id="copytable" class="gamePrice">
			<tr>
				<td colspan="3" class="sMent1_1">게임가격</td>
				<td class="sMent1_2"><input type="button" class="pos" style="margin-left:2%;">가능<input type="button" class="impos">불가능</td>
			</tr>
			<tr>
				<td>
				<input type="button" class="imposBtn" id="btn9" onclick="myFunction9()"><p class="priceText">1<input type="text1" class="textInner" disabled id="text9" name="g_p9" style="background-color:#ccc">원</p></td>
				<td>
				<input type="button" class="posBtn" id="btn10" onclick="myFunction10()"><p class="priceText">2<input type="text" class="textInner" id="text10" name="g_p10">원</p></td>
				<td>
				<input type="button" class="posBtn" id="btn11" onclick="myFunction11()"><p class="priceText">3<input type="text" class="textInner" id="text11" name="g_p11">원</p></td>
				<td>
				<input type="button" class="posBtn" id="btn12" onclick="myFunction12()"><p class="priceText">4<input type="text" class="textInner" id="text12" name="g_p12">원</p></td>
			</tr>
			<tr>
				<td>
				<input type="button" class="posBtn" id="btn13" onclick="myFunction13()"><p class="priceText">5<input type="text" class="textInner" id="text13" name="g_p13">원</p></td>
				<td>
				<input type="button" class="posBtn" id="btn14" onclick="myFunction14()"><p class="priceText">6<input type="text" class="textInner" id="text14" name="g_p14">원</p></td>
				<td>
				<input type="button" class="posBtn" id="btn15" onclick="myFunction15()"><p class="priceText">7<input type="text" class="textInner" id="text15" name="g_p15">원</p></td>
				<td>
				<input type="button" class="imposBtn" id="btn16" onclick="myFunction16()"><p class="priceText">8<input type="text" class="textInner" disabled id="text16" style="background-color:#ccc">원</p></td>
			</tr>
		</table>	
		</div>

		<div>
			<div class="discountInfo">할인정보</div>
			<table style="margin-left:3%; font-size:14pt; margin-bottom:3%;">
				<tr>
					<td style="width:35%;">*탈출러최저가(1인가격)</td>
					<td>주중 <input type="textbox" id="week2" name="week" style="height:30px;width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''">원</td>
					<td>주말 <input type="textbox" id="holy2" name="holy" style="height:30px;width:40%; font-size:14pt; text-align:center;" class="defText" onfocus="this.value=''">원</td>
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
			<input type="text" id="value6" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value6">
		할인가격 - <input type="text" id="dis6" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis6">원
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
			<input type="text" id="value7" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value7">
		할인가격 - <input type="text" id="dis7" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis7">원
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
			<input type="text" id="value8" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value8">
		할인가격 - <input type="text" id="dis8" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis8">원
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
			<input type="text" id="value9" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value9">
		할인가격 - <input type="text" id="dis9" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis9">원
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
			<input type="text" id="value10" style="margin-top:10px;height:30px;margin-right:5%; font-size:14pt; width:12%; border:1px solid #4edcf2; text-align:center;" name="value10">
		할인가격 - <input type="text" id="dis10" style="height:30px;width:20%; font-size:14pt; width:12%; text-align:center;" class="defText" name="dis10">원
		</div>

		<div class="lastMent">
			탈출러에서 검토 후 등록됩니다. 조금만기다려주세요!(최대3일 소요)승인결과는 메일로 안내해드리겠습니다.
		</div>

		<div align="center";>
			<input type="button" class="saveBtn" value="추가" onclick="sendform()">
		</div>
	</div>
	</form>
</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요--> 
</div> 
<? 
include('./Footer_Module.php'); 
?>
<?
$sql="select * from partner_price where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>
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
function sendform(){
var f1=document.getElementById('f1');
 
	 f1.submit();
}
</script>