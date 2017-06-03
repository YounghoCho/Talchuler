<? 
//#56dcfc
include('./include.php');
include('./HeadTab_Module.php'); 
?>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
//이미지 업로드시 변경감지
$("document").ready(function(){

    $("#cover").change(function() {
		var before=document.getElementById('beforePicture');
		var after=document.getElementById('afterPicture');
		before.style.display="none";
		after.style.display="block";
    });
	//이미지가 있는경우 업로드하라는 태그를 가린다.
	$("#thisimg").each(function(){
		var before=document.getElementById('beforePicture');
		//onerror가 있는경우
	    $("#thisimg").error(function(){
			before.style.display="block";
		});
		
	});
});
</script>
<script>
$(window).scroll(function() {
  sessionStorage.scrollTop = $(this).scrollTop();
});

$(document).ready(function() {
  if (sessionStorage.scrollTop != "undefined") {
    $(window).scrollTop(sessionStorage.scrollTop);
  }
});

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
				now.style.backgroundColor="#56dcfc";
				now.style.color='#56dcfc';
				break;
			}
			else{
				a1=1;
				v1.value="0";
				now.style.backgroundColor="white";
				now.style.color='white';
				break;
				}
		case 2:
			var now=document.getElementById("ability"+value);
			if(b1==1){
				b1=-1;
				v2.value="1";
				now.style.backgroundColor="#56dcfc";
				now.style.color='#56dcfc';
				break;
			}
			else{
				b1=1;
				v2.value="0";
				now.style.backgroundColor="white";
				now.style.color='white';
				break;
			}
		case 3:
			var now=document.getElementById("ability"+value);
			if(c1==1){
				c1=-1;
				v3.value="1";
				now.style.backgroundColor="#56dcfc";
				now.style.color='#56dcfc';
				break;
			}
			else{
				c1=1;
				v3.value="0";
				now.style.backgroundColor="white";
				now.style.color='white';
				break;
			}
		case 4:
			var now=document.getElementById("ability"+value);
			if(d1==1){
				d1=-1;
				v4.value="1";
				now.style.backgroundColor="#56dcfc";
				now.style.color='#56dcfc';
				break;
			}
			else{
				d1=1;
				v4.value="0";
				now.style.backgroundColor="white";
				now.style.color='white';
				break;
			}
		case 5:
			var now=document.getElementById("ability"+value);
			if(e1==1){
				e1=-1;
				v5.value="1";
				now.style.backgroundColor="#56dcfc";
				now.style.color='#56dcfc';
				break;
			}
			else{
				e1=1;
				v5.value="0";
				now.style.backgroundColor="white";
				now.style.color='white';
				break;

			}
		case 6:
			var now=document.getElementById("ability"+value);
			if(f1==1){
				f1=-1;
				v6.value="1";
				now.style.backgroundColor="#56dcfc";
				now.style.color='#56dcfc';
				break;
			}
			else{
				f1=1;
				v6.value="0";
				now.style.backgroundColor="white";
				now.style.color='white';
				break;
			}
	}
}
</script>
<style>

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
	padding:0 0 10 26;
}

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	overflow:hidden;
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	margin:-5 0 0 33;
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

/*기본가격정보*/

#Price_info{
	width : -webkit-calc(100% - 2px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 2px); /* for Firefox */
    width :         calc(100% - 2px); /* for IE */
	margin:0 0 40 0;
	border: 1px solid #ccc;
	color:#626262;
}

#Price_info .bluetext{
	height:30px;
	line-height:24px;
	text-align:center;
	font-size:16pt;
	color:#333333;
	font-weight:bold;
	background-color:#56dcfc;
	color:#626262;
	}

/*기본가격정보*/

/*게임정보*/

#Game_info{
	width : -webkit-calc(100% - 2px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 2px); /* for Firefox */
    width :         calc(100% - 2px); /* for IE */
	margin:0 0 0 0;
	border: 1px solid #ccc;
	color:#626262;
}

#Game_info .bluetext{
	height:30px;
	line-height:24px;
	text-align:center;
	font-size:16pt;
	color:#333333;
	font-weight:bold;
	background-color:#56dcfc;
	color:#626262;
}

/*color:#56dcfc*/

.ment{
	margin-top:5%;
	margin-left:15%;
	font-size:25pt;
	font-weight:bold;
	color:#626262;
}

.ment2{
	padding:5pt;
	height:30px;
	text-align:center;
	font-size:16pt;
	color:#333333;
	font-weight:bold;
	background-color:#56dcfc;
	color:#626262;
}
.gamePrice{
	width:100%;
	height:15%;
	margin-left:3%;
	margin-top:2%;
	color:#626262;
}
.sMent1_1{
	font-size:18px;
	font-weight:bold;
	color:#626262;
	padding-bottom:10px;
}
.sMent1_2{
	font-size:13px;
	padding-top:15px;
	padding-left:37px;
	color:#626262;
}
.priceText{
	margin-left:14%;
	font-size:14px;
	color:#626262;
}
.posBtn{
	position:absolute;
	width:18px;
	height:18px;
	margin:5 0 0 3;
	background-color:#56dcfc;
	border:0;
	cursor:pointer;
	color:#626262;
	float:left;
}
.posBtn2{
	width:18px;
	height:18px;
	margin:5 0 0 3;
	margin-right:6%;
	background-color:#56dcfc;
	color:#626262;
	border:0;
	cursor:pointer;
	float:left;
}
.imposBtn{
	position:absolute;
	width:18px;
	height:18px;
	margin:5 0 0 3;
	background-color:#bfbfbf;
	color:#626262;
	border:0;
	cursor:pointer;
	float:left;
}
.imposBtn2{
	width:18px;
	height:18px;
	margin:5 0 0 3;
	margin-right:6%;
	border:1px solid #bfbfbf;
	color:#626262;
	background-color:white;
	cursor:pointer;
	float:left;
}

.imposBtn2_title{
	margin-top:3px; 
	float:left;
}

.defBtn{
	border:1px solid #56dcfc;
	color:#626262;
	background:white;
}
.pos{
	width:22px;
	height:22px;
	margin-right:3%;
	background-color:#56dcfc;
	color:#626262;
	border:0;
}
.impos{
	width:22px;
	height:22px;
	margin-right:3%;
	margin-left:3%;
	background-color:#bfbfbf;
	color:#626262;
	border:0;
	cursor:pointer;
}
.textInner{
	width:80px;
	margin:2 0 2 5;
	font-size:14px;
	text-align:center;
	border:1px solid #56dcfc;
	color:#626262;
	height:26px;
}
.discountInfo{
	width:100%;
	height:30px;
	margin-top:3%;
	margin-bottom:3%;
	font-size:16pt;
	text-align:center;
	font-weight:bold;
	padding:4 0 0 0;
	color:#626262;
	background:#e6e6e6;
}
.discountContent{
	margin-left:4%;
	font-size:14px;
	color:#626262;
}
.discountContent_inner{
	width:12%;
	height:26px;
	font-size:14px;
	margin-top:1%;
	text-align:center;
	border:1px solid #56dcfc;
	color:#626262;
	cursor:pointer;
}
.save{
	width:15%;
	height:30px;
	line-height:30px;
	margin-top:5%;
	margin-bottom:5%;
	font-size:16pt;
	color:#626262;
	font-weight:bold;
	background-color:#56dcfc;
	border:0;
	cursor:pointer;
}
.Info2{
	width:60%;
	margin-top:2%;
	margin-left:15%;
	margin-bottom:5%;
	border: 1px solid #ccc;
	color:#626262;
}
.addGame{
	margin-right:4.1%;
	margin-top:3%;
	font-size:10pt;
	border:0;
	width:10%;
	height:30px;
	line-height:30px;
	background:#ff6600;
	color:white;
	font-weight:bold;
	cursor:pointer;
}
.gameNum_Inner{
	margin-top:3%;
	margin-left:3%;
	border:1px solid #bfbfbf;
	float:left;
	text-align:center;
	border: 0px;
	padding-top:7pt;
	width:16%;
	height:40px;
	color:#626262;
	font-size:16px;
	font-weight:bold;
}
.gameInfo{
	width:95%;z
	margin-top:5%;
	margin-left:3.8%;
	font-size:12px;
	color:#626262;
}
.lastMent{
	margin-top:7%;
	font-size:12px;
	text-align:center;
	color:#ff6600;
}
.delBtn{
	width:10%;
	height:30px;
	line-height:30px;
	margin-top:1%;
	font-size:16pt;
	font-weight:bold;
	border:0;
	margin-bottom:1%;
	cursor:pointer;
	color:#626262;
}
.defText{
	height:26px;
	border:1px solid #56dcfc;
	color:#626262;
	background-color:white;
}
.saveBtn{
	width:10%;
	height:30px;
	line-height:30px;
	margin-top:1%;
	margin-left:1%;
	font-size:16pt;
	font-weight:bold;
	background-color:#56dcfc;
	border:0;
	margin-bottom:1%;
	color:#626262;
	cursor:pointer;
}
.timeBtn{
	margin-right:4%;
	margin-bottom:4%;
	background-color:#eeeeee;
	border:0;
	width:48px;
	color:#626262;
	height:17px;
}
.exBtn{
	width:25px;
	height:25px;
	border:1px solid #56dcfc;
	background-color:white;
	margin-left:1%;
	color:#626262;
}
.num{
	width:5%;
	text-align:center;
	font-size:13px;
	color:#626262;
	border:0;
}
.num1{
	width:5%;
	text-align:center;
	font-size:13px;
	color:#626262;
	border:0;
}
.num2{
	width:5%;
	text-align:center;
	font-size:13px;
	color:#626262;
	border:0;
}
#discount,#discount2,#discount3,#discount4,#discount5,#discount6,#discount7,#discount8,#discount9,#discount10 {
height:30px;width:140px;}

#title{
 padding-left:10px;
 color:#626262;
 width:100%; height:100%; font-size:12pt; background-color:#eeeeee;  border:0;
}
#subtitle{
color:#626262;
padding-left:10px;width:100%; height:100%; font-size:12pt; background-color:#eeeeee; border:0;
}
#content{
color:#626262;
font-size:12pt; width:100%; height:100%; background-color:#F2F2F2; border:none;overflow:hidden;
vertical-align:top;padding: 10px 10px 10px 10px;
}
#summary{
color:#626262;
font-size:12pt; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow:hidden;vertical-align:top;padding: 10px 10px 10px 10px;
}
#Page_info{
	width:100%;
	padding-left:4.3%;
	color:#626262;
}
#Page_info .left{
	float:left;
	display:table;
	color:#626262;
}
#Page_info .page_count{
	display:table-cell;
	font-size:22px;
	font-weight:bold;
	padding:0 3;
	color:#626262;
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
	if(num<1)
		num=0;
	else
		num = $(".num:eq("+n+")").val(num*1-1);
  });
})
</script>
<script>
$(function(){ 
  $('.bt_up1').click(function(){ 
    var n = $('.bt_up1').index(this);
	var n2 = $('.bt_up2').index(this);

    var num = $(".num1:eq("+n+")").val();
	var num2 = $(".num2:eq("+n2+")").val();

	if(num>7)
		num=8;
	else
		num = $(".num1:eq("+n+")").val(num*1+1);
	if(num2>7)
		num2=8;
	else
		num2 = $(".num2:eq("+n2+")").val(num2*1+1);
  });
  $('.bt_down1').click(function(){ 
    var n = $('.bt_down1').index(this);
	var n2 = $('.bt_down2').index(this);

    var num = $(".num1:eq("+n+")").val();
	var num2 = $(".num2:eq("+n2+")").val();

	if(num<1)
		num=0;
	else
		num = $(".num1:eq("+n+")").val(num*1-1);
	if(num2<1)
		num2=0;
	else
		num2 = $(".num2:eq("+n2+")").val(num2*1-1);
  });
}) 
</script>
<script>
$(function(){ 
  $('.bt_up2').click(function(){ 
    var n = $('.bt_up2').index(this);
    var num = $(".num2:eq("+n+")").val();
	if(num>7)
		num=8;
	else
		num = $(".num2:eq("+n+")").val(num*1+1);
  });
  $('.bt_down2').click(function(){ 
    var n = $('.bt_down2').index(this);
    var num = $(".num2:eq("+n+")").val();
	if(num<1)
		num=0;
	else
		num = $(".num2:eq("+n+")").val(num*1-1);
  });
}) 
</script>
<style>
.bt_up img{
	height:10px;
}
.bt_down img{
	height:10px;
}
.bt_up1 img{
	height:10px;
}
.bt_down1 img{
	height:10px;
}
.bt_up2 img{
	height:10px;
}
.bt_down2 img{
	height:10px;
}
.tPrice{
	width:96%;
	height:7%;
	margin-left:2%; 
	padding-left:1%;
	font-size:14px; 
	margin-bottom:3%;
	border:2px solid #bebebe;
	border-radius:5px;
}
.price{
	width:100%;
	height:80px;
	margin-top:-2%;
	margin-left:3%;
}
.info{
	width:100%;
	height:50px;
	margin-left:3%;
}
.pr1{
	color:#ff6600;
	font-weight:bold;
}
.sp1{
	font-size:14pt;
	font-weight:bold;
}
.sp2{
	margin-left:10px;
}
.tp1{
	margin-top:3%;
	margin-left:0.5%;
	color:#ff6600;
	font-weight:bold;
}
.tp2{
}
</style>
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

<div id="Main">
<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.--> 
<?
//기본가격정보에 사용될 쿼리
$sql="select * from partner_price where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$basic=mysql_fetch_array($q);

//게임정보에 사용될 쿼리
$sql="select * from game where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>
	<div id="Main_title_area">
		<div id="Main_titlebar">
			<div class="title">게임정보관리</div>
		</div>
		<p class="tp1">최저가 인증?</p>
		<p class="tp2">모든 판매사이트 중 최저가로 입력해주신 후 [계정정보수정]에서 최저가보장-동의 후 신청 체크해주시면 &lt;최저가인증&gt;라벨을 적용해드립니다.</p>
	</div>

	<!-- partner_priceAsk form S-->
	<div id="Main_content_area">
		<form action="./partner_priceAsk.php" method="post">
			<div id="Price_info">
				<div class="bluetext">
					기본가격정보
				</div>
				<div>
					<table class="gamePrice">
						<tr>
							<td class="sMent1_1">게임가격</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="imposBtn" id="btn1" onclick="myFunction1()">
								<p class="priceText">1명<input type="text1" class="textInner" disabled id="text1" style="background-color:#ccc" value="<?echo $basic['g_p1']?>" name="g_p1" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
							<td>
								<input type="button" class="posBtn" id="btn2" onclick="myFunction2()"><p class="priceText">2명<input type="text" class="textInner" id="text2"  value="<?echo $basic['g_p2']?>" name="g_p2" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
							<td>
								<input type="button" class="posBtn" id="btn3" onclick="myFunction3()"><p class="priceText">3명<input type="text" class="textInner" id="text3" value="<?echo $basic['g_p3']?>" name="g_p3" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
							<td>
								<input type="button" class="posBtn" id="btn4" onclick="myFunction4()"><p class="priceText">4명<input type="text" class="textInner" id="text4" value="<?echo $basic['g_p4']?>" name="g_p4" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="posBtn" id="btn5" onclick="myFunction5()"><p class="priceText">5명<input type="text" class="textInner" id="text5" value="<?echo $basic['g_p5']?>" name="g_p5" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
							<td>
								<input type="button" class="posBtn" id="btn6" onclick="myFunction6()"><p class="priceText">6명<input type="text" class="textInner" id="text6" value="<?echo $basic['g_p6']?>" name="g_p6" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
							<td>
								<input type="button" class="posBtn" id="btn7" onclick="myFunction7()"><p class="priceText">7명<input type="text" class="textInner" id="text7" value="<?echo $basic['g_p7']?>" name="g_p7" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
							<td>
								<input type="button" class="imposBtn" id="btn8" onclick="myFunction8()"><p class="priceText" name="g_p8">8명<input type="text8" class="textInner" disabled id="text8" style="background-color:#ccc" value="<?echo $basic['g_p8']?>" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="sMent1_2">
								<input type="button" class="pos" style="margin-left:2%;">가능<input type="button" class="impos">불가능
							</td>
						</tr>
					</table>	
				</div>
				<div>
					<div class="discountInfo">할인정보</div>
					<table class="tPrice">
						<tr>
							<td style="width:180px; color:#1671B6; font-size:14pt; font-weight:bold;">탈출 프라이쓰(1인)</td>
							<td style="padding-left:30px; width:230px">
								주중 <input type="textbox" onKeyPress="return numkeyCheck(event)" maxlength="6" id="week1" style="height:30px;width:125px; font-size:14px; text-align:center;" class="defText"  value="<?echo $basic['g_weekprice']?>" name="week"> 원
							</td>
							<td style="padding-left:8%;">
								주말 <input type="textbox" onKeyPress="return numkeyCheck(event)" maxlength="6" id="holy1" style="height:30px;width:125px; font-size:14px; text-align:center;" class="defText"  value="<?echo $basic['g_holyprice']?>" name="holy"> 원 <font></font>
							</td>
						</tr>
					</table>
				</div>
				<div class="price">
				<p class="pr1">*탈출 프라이쓰란?</p>
				<p class="pr2">-1인당 가격으로 할인판매하는 방법입니다.(ex:탈출 프라이쓰가 15000원일 때 = 2명:30,000원/3명:45,000원/...6명:90,000원)</p>
				<p class="pr3">-<u>필수가 아니므로</u> 이용하시지 않으시려면 입력하지 않으셔도 됩니다.</p>
				</div>
				<div class="info">
				<span class="sp1">매장 할인정보</span><span class="sp2">매장에서 제공하는 할인서비스 정보를 입력해주세요.</span>
				</div>
				<div class="discountContent" style="margin-top:-2%;">
					할인종류
					<select id="discount" name="discount" class="discountContent_inner" onChange="getSelectValue1();">
						<option value="1">선택하세요</option>
						<option value="2">조조할인</option>
						<option value="3">평일할인</option>
						<option value="4">SNS할인</option>
						<option value="5">후기할인</option>
						<option value="6">직접입력</option>
					</select>
					<input type="text" id="value1" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value1" value="<?echo $basic['g_disname1']?>">할인가격 - 
					<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis1" style="margin-top:5px; height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText"   value="<?echo $basic['g_disprice1']?>" name="dis1"> 원
				</div>

				<div class="discountContent">할인종류
					<select id="discount2" name="discount" class="discountContent_inner" onChange="getSelectValue2();">
						<option value="1">선택하세요</option>
						<option value="2">조조할인</option>
						<option value="3">평일할인</option>
						<option value="4">SNS할인</option>
						<option value="5">후기할인</option>
						<option value="6">직접입력</option>
					</select>
					<input type="text" id="value2" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value2" value="<?echo $basic['g_disname2']?>">할인가격 - 
					<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis2" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" value="<?echo $basic['g_disprice2']?>" name="dis2"> 원
				</div>
				<div class="discountContent">할인종류
					<select id="discount3" name="discount" class="discountContent_inner" onChange="getSelectValue3();">
						<option value="1">선택하세요</option>
						<option value="2">조조할인</option>
						<option value="3">평일할인</option>
						<option value="4">SNS할인</option>
						<option value="5">후기할인</option>
						<option value="6">직접입력</option>
					</select>
					<input type="text" id="value3" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value3" value="<?echo $basic['g_disname3']?>">할인가격 - 
					<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis3" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" value="<?echo $basic['g_disprice3']?>" name="dis3"> 원
				</div>
				<div class="discountContent">할인종류
					<select id="discount4" name="discount" class="discountContent_inner" onChange="getSelectValue4();">
						<option value="1">선택하세요</option>
						<option value="2">조조할인</option>
						<option value="3">평일할인</option>
						<option value="4">SNS할인</option>
						<option value="5">후기할인</option>
						<option value="6">직접입력</option>
					</select>
					<input type="text" id="value4" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value4" value="<?echo $basic['g_disname4']?>">할인가격 - 
					<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis4" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" value="<?echo $basic['g_disprice4']?>" name="dis4"> 원
				</div>
				<div class="discountContent">할인종류
					<select id="discount5" name="discount" class="discountContent_inner" onChange="getSelectValue5();">
						<option value="1">선택하세요</option>
						<option value="2">조조할인</option>
						<option value="3">평일할인</option>
						<option value="4">SNS할인</option>
						<option value="5">후기할인</option>
						<option value="6">직접입력</option>
					</select>
					<input type="text" id="value5" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value5" value="<?echo $basic['g_disname5']?>">할인가격 - 
					<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000"id="dis5" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" value="<?echo $basic['g_disprice5']?>" name="dis5"> 원
				</div> 
				<div align="center";>
					<input type="submit" value="저장" class="save">
				</div>
			</div>
		</form>

	<!-- partner_priceAsk form E-->
	<?
	//기본가격정보에 사용될 쿼리
	$sql="select * from partner_price where p_id='".$_SESSION['id']."'";
	$q=mysql_query($sql);
	$basic=mysql_fetch_array($q);

	//게임정보에 사용될 쿼리들
	//count
	$sql2="select count(p_id) from game where p_id='".$_SESSION['id']."'";
	$q=mysql_query($sql2);
	$count=mysql_fetch_array($q);

	//queue
	$queue=array();
	$sql="select g_idx from game where p_id='".$_SESSION['id']."'";
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
		if($count[0]==0){}
		else{
		?>
		<script>alert("게임이 더이상 없습니다.");history.back();</script>
		<?
		}
	}
	//call cafe infos
		$sql="select * from game where g_idx='".$queue[$index]."'";
		$q=mysql_query($sql);
		$data=mysql_fetch_array($q);
	?>
		<div id="Game_info">
			<div class="bluetext">
				게임정보
			</div>
			
			<div align="right";>
				<input type="button"value="새게임 추가" class="addGame" onclick="location.href='./gameAdd.php'">
			</div>
			
			<div id="Page_info">
			<div class="left">
				<div class="page_count"><a href="./gameinfo.php?index=<?echo $index-1?>"><</a></div>
				<div class="page_count"><?echo $index+1?></div>
				<div class="page_count">/</div>
				<div class="page_count"><?echo $count[0]?></div>
				<div class="page_count"><a href="./gameinfo.php?index=<?echo $index+1?>">></a></div>
			</div>
		</div>

		<div class="gameInfo">
			<table style="border-spacing:10px 10px;">
				<tr>
<style>
	input[type="file"]{ position: absolute;clip:rect(5,0,25,75);margin-left:-50px;}
	#submit{ position: absolute;margin-left:170px;padding:5px 6px 6px 5px;font-size:13px;border:none;background-color:#56dcfc;}
</style>

<?
	//넘길 g_idx값 (여기서 쓰이진않고 gameAdd에서 쓰이는데 퍼옴)
	$passSql="select g_idx from gameAsk order by g_idx desc";
	$passQ=mysql_query($passSql);
	$pass=mysql_fetch_array($passQ);
	//요청사진 불러올 쿼리
	$imgsql="select filename from gameImageAsk where g_idx='".$pass['g_idx']."'+1";
	$imgQ=mysql_query($imgsql);
	$img=mysql_fetch_array($imgQ);
	//진짜게임사진을 불러올 쿼리
	$realsql="select filename from gameImage where g_idx='".$data['g_idx']."'";
	$realQ=mysql_query($realsql);
	$real=mysql_fetch_array($realQ);
	//사진있고 없을때 게임 수정인지 추가인지 분별
	$sql="select g_idx from game order by g_idx desc;";
	$q=mysql_query($sql);
	$new=mysql_fetch_array($q);
	$new_gidx=$new[0]+'1';
?>

				<!--사진 업로드-->
				<form id="f1" action="./gameDB.php" method="POST" name="form" enctype="multipart/form-data">
					<td rowspan="5" style="background-color:#eeeeee; width:250px; height:500px">
						<label for="cover" style="display:inline-block;background-color:#eee;height:500px;width:100%;">
							<img id="thisimg" src="./gameImage/<?echo $real[0]?>.jpg" style="width:100%;border:none;" onerror="this.src='./images/button/plus.png';this.style.width='70%';this.style.margin='15%';"/>
							<p id="beforePicture" style="text-align:center;display:none;">이미지를 등록해주세요<br>(jpg,png)</p>
							<p id="afterPicture" style="text-align:center;color:#56dcfc;display:none;font-weight:bold;">이미지가 업로드되었습니다.</p>
						</label>
						<input name="userfile" type="file" id="cover" accept=".gif, .jpg, .png" style="border:1px solid"/>
						<input type="hidden" name="p_id" value="<?echo $_SESSION['id']?>" />
						
						<input type="hidden" name="isnew" value="0" />
						<?
						//게임이 없으면 g_idx를 desc로 받아 +1해서 넘겨주고
						if($data['g_idx']==""){
							$real_gidx=$new_gidx;
							?>
							<input type="hidden" name="g_idx1" value="<?echo $real_gidx?>" />
							<?
						}else{
						//게임이 있으면 그 값을 주면되지
							$real_gidx=$queue[$index];
							?>
							<input type="hidden" name="g_idx2" value="<?echo $real_gidx?>" />
							<?
						}
						?>
						
					</td>
<?
	//사진변경
	if($_GET['imageRefresh']==1){
?>
	<script>
		var thisimg=document.getElementById('thisimg');
		thisimg.src="./gameImageAsk/<?echo $img[0]?>.jpg";
	</script>
<?
	}
?>
				<!--제목-->
					<td id="title" colspan="10"  style="width:70%; height:50px;"><input name="title" type="text" placeholder="제목" style="width:100%; height:100%; font-size:12px; background-color:#eeeeee;  border:0;" value="<?echo $data['g_title']?>">
					</td>
				</tr>
				<tr>
					<td id="subtitle" colspan="10" style="width:70%; height:50px;"><input name="subtitle" placeholder="부제목" type="text" style="width:100%; height:100%; font-size:12px; background-color:#eeeeee; border:0;" value="<?echo $data['g_subtitle']?>">
					</td>
				</tr>
				<tr>
					<td id="content" rowspan="5" colspan="6" style="background-color:#eeeeee;"><textarea name="content" placeholder="게임설명을 입력해주세요." style="font-size:12px; width:100%; height:100%;background-color:#F2F2F2; border:0; overflow:hidden;"><?echo $data['g_content']?></textarea>
					</td>
					<td id="summary" colspan="4" style="background-color:#eeeeee; height:30%;"><textarea name="summary" placeholder="게임요약 설명을 입력해주세요.&#10;&#13;(미입력시 게임설명 상위부분 노출)" style="text-align:center;font-size:12px; width:100%; height:100%; background-color:#F2F2F2; border:0; overflow:hidden;"><?echo $data['g_summary']?></textarea></td>
				</tr>
				<tr>
				<?
				//game_time을 불러온다.
				$tsql="select * from game_time where g_idx='".$queue[$index]."'";
				$tq=mysql_query($tsql);
				$time=mysql_fetch_array($tq);
				?>
					<td rowspan="2" colspan="4" style="vertical-align:top;overflow:hidden;background-color:#eeeeee;vertical-align:middle">
						<font color="#6f6f6f" size="3px" style="margin-left:2%">예약시간을 입력해주세요.</font><br><br><input id="timebutton" type="text" value="<?echo $time['gt_1']?>" placeholder="00:00" style="margin:1% 1% 1% 2%" name="time1"/><input id="timebutton" type="text" value="<?echo $time['gt_2']?>" placeholder="00:00" style="margin:1% 1% 1% 0" name="time2"/><input id="timebutton" type="text" value="<?echo $time['gt_3']?>" placeholder="00:00" style="margin:1% 1% 1% 0" name="time3"/><input id="timebutton" type="text" value="<?echo $time['gt_4']?>" placeholder="00:00" style="margin:1% 1% 1% 0" name="time4"/><input id="timebutton" type="text" value="<?echo $time['gt_5']?>" placeholder="00:00" style="margin:0 1% 1% 2%" name="time5"/><input id="timebutton" type="text" value="<?echo $time['gt_6']?>" placeholder="00:00" style="margin:0 1% 1% 0" name="time6"/><input id="timebutton" type="text" value="<?echo $time['gt_7']?>" placeholder="00:00" style="margin:0 1% 1% 0" name="time7"/><input id="timebutton" type="text" value="<?echo $time['gt_8']?>" placeholder="00:00" style="margin:0 2% 1% 0" name="time8"/><input id="timebutton" type="text" value="<?echo $time['gt_9']?>" placeholder="00:00" style="margin:0 1% 1% 2%" name="time9"/><input id="timebutton" type="text" value="<?echo $time['gt_10']?>" placeholder="00:00" style="margin:0 1% 1% 0" name="time10"/><input id="timebutton" type="text" value="<?echo $time['gt_11']?>" placeholder="00:00" style="margin:0 1% 1% 0" name="time11"/><input id="timebutton" type="text" value="<?echo $time['gt_12']?>" placeholder="00:00" style="margin:0 2% 1% 0" name="time12"/><input id="timebutton" type="text" value="<?echo $time['gt_13']?>" placeholder="00:00" style="margin:0 1% 1% 2%" name="time13"/><input id="timebutton" type="text" value="<?echo $time['gt_14']?>" placeholder="00:00" style="margin:0 1% 1% 0" name="time14"/><input id="timebutton" type="text" value="<?echo $time['gt_15']?>" placeholder="00:00" style="margin:0 1% 1% 0" name="time15"/><input id="timebutton" type="text" value="<?echo $time['gt_16']?>" placeholder="00:00" style="margin:0 2% 1% 0" name="time16"/>
					</td>
				</tr>
			</table>
		</div>
		<div>
			<table style="width:80%; margin-left:5.5%; height:10%; margin-top:2%;">
				<tr>
					<td style="font-size:12px; width:25%;">(게임설정)</td>
					<td style="font-size:12px;">(필요능력)</td>
				</tr>
				<tr> 
					<td rowspan="2" style="font-size:13px;">난이도&nbsp;
						<a href="#a" class="bt_up"><img src="./images/button/up.png"/></a> 
						<input id="level" name="level" type="text" name="num" value="<?echo $data['g_level']?>" class="num" placeholder="0">
						<a href="#a" class="bt_down"><img src="./images/button/down.png"/></a>
					</td>
					<td rowspan="3" style="font-size:15px;">
						<input type="button" class="imposBtn2" name="ability1" id="ability1" onclick=button_onskill(1) value="<?echo $data['g_skill1']?>"><div class="imposBtn2_title">직관력</div><input id="a1" type="hidden" name="ability1" value="<?echo $data['g_skill1']?>">
					</td>
					<td rowspan="3" style="font-size:15px;">
						<input type="button" class="imposBtn2" name="ability2" id="ability2" onclick=button_onskill(2) value="<?echo $data['g_skill2']?>"><div class="imposBtn2_title">관찰력</div><input id="a2" type="hidden" name="ability2" value="<?echo $data['g_skill2']?>">
					</td>
					<td rowspan="3" style="font-size:15px;">
						<input type="button" class="imposBtn2" name="ability3"  id="ability3" onclick=button_onskill(3) value="<?echo $data['g_skill3']?>"><div class="imposBtn2_title">수리력</div><input id="a3" type="hidden" name="ability3" value="<?echo $data['g_skill3']?>">
					</td>
					<td rowspan="3" style="font-size:15px;">
						<input type="button" class="imposBtn2" name="ability4"  id="ability4" onclick=button_onskill(4) value="<?echo $data['g_skill4']?>"><div class="imposBtn2_title">팀워크</div><input id="a4" type="hidden" name="ability4" value="<?echo $data['g_skill4']?>">
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td rowspan="2" style="font-size:13px;">공포감&nbsp;
						<a href="#a" class="bt_up"><img src="./images/button/up.png"/></a> 
						<input id="horror" name="horror" type="text" name="num" value="<?echo $data['g_horror']?>" class="num" placeholder="0">
						<a href="#a" class="bt_down"><img src="./images/button/down.png"/></a>
					</td>
				</tr>
				<tr>     
					<td rowspan="3" style="font-size:15px;">
					<input type="button" class="imposBtn2" name="ability5" id="ability5" onclick=button_onskill(5) value="<?echo $data['g_skill5']?>"><div class="imposBtn2_title">활동성</div><input id="a5" type="hidden" name="ability5" value="<?echo $data['g_skill5']?>">
					</td>
					<td rowspan="3" style="font-size:15px;">
						<input type="button" class="imposBtn2" name="ability6" id="ability6" onclick=button_onskill(6) value="<?echo $data['g_skill6']?>"><div class="imposBtn2_title">담력</div><input id="a6" type="hidden" name="ability6" value="<?echo $data['g_skill6']?>">
					</td>
					<td rowspan="3"></td>
					<td rowspan="3"></td>
				</tr>
				<tr>
				  <td rowspan="2" style="font-size:13px;">인원수&nbsp;
					<a href="#a" class="bt_up1"><img src="./images/button/up.png"/></a> 
					<input id="people" name="people" type="text" name="num1" value="<?echo $data['g_people']?>" class="num1" placeholder="0">
					<a href="#a" class="bt_down1"><img src="./images/button/down.png"/></a>
					<span>~</span>
					<a href="#a" class="bt_up2"><img src="./images/button/up.png"/></a> 
					<input id="people" name="people2" type="text" name="num2" value="<?echo $data['g_people2']?>" class="num2" placeholder="0">
					<a href="#a" class="bt_down2"><img src="./images/button/down.png"/></a>
				  </td>
				</tr>
			</table>
			<HR width="93%" align="center" border="1" style="margin-top:3%; margin-left:2.9%;"/>
		</div>

	<?
	//위에는 game에서 정보를 가져왔고, 여기부터는 게임별 가격이 존재할수있으므로 game_price에서 가져온다.
	?>
		<div>
			<table id="copytable" class="gamePrice">
				<tr>
					<td class="sMent1_1" id="line">게임가격
						<input type="button" style="margin-left:2%;"class="exBtn" onclick="data_copy()" id="copy" name="copy">
						<a style="font-size:16px; font-weight:normal;">기본 가격정보와 같음<a>
					</td>
				</tr>
				<tr>
					<td>
						<input type="button" class="imposBtn" id="btn9" onclick="myFunction9()"><p class="priceText">1명<input type="text1" class="textInner" disabled id="text9" style="background-color:#ccc" value="<?echo $data['g_p1']?>" name="g_p9" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p></td>
					<td>
						<input type="button" class="posBtn" id="btn10" onclick="myFunction10()">
						<p class="priceText">2명<input type="text" class="textInner" id="text10" value="<?echo $data['g_p2']?>" name="g_p10" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
					</td>
					<td>
						<input type="button" class="posBtn" id="btn11" onclick="myFunction11()"><p class="priceText">3명<input type="text" class="textInner" id="text11" value="<?echo $data['g_p3']?>" name="g_p11" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p></td>
					<td>
						<input type="button" class="posBtn" id="btn12" onclick="myFunction12()"><p class="priceText">4명<input type="text" class="textInner" id="text12" value="<?echo $data['g_p4']?>" name="g_p12" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
					</td>
				</tr>
				<tr>
					<td>
						<input type="button" class="posBtn" id="btn13" onclick="myFunction13()"><p class="priceText">5명<input type="text" class="textInner" id="text13" value="<?echo $data['g_p5']?>" name="g_p13" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p></td>
					<td>
						<input type="button" class="posBtn" id="btn14" onclick="myFunction14()"><p class="priceText">6명<input type="text" class="textInner" id="text14" value="<?echo $data['g_p6']?>" name="g_p14" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p></td>
					<td>
						<input type="button" class="posBtn" id="btn15" onclick="myFunction15()"><p class="priceText">7명<input type="text" class="textInner" id="text15" value="<?echo $data['g_p7']?>" name="g_p15" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p></td>
					<td>
						<input type="button" class="imposBtn" id="btn16" onclick="myFunction16()"><p class="priceText">8명<input type="text" class="textInner" disabled id="text16" style="background-color:#ccc" value="<?echo $data['g_p8']?>" name="g_p16" onKeyPress="return numkeyCheck(event)" maxlength="6"> 원</p>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="sMent1_2">
						<input type="button" class="pos" style="margin-left:2%;">가능<input type="button" class="impos">불가능
					</td>
				</tr>
			</table>	
		</div>
		<div>
			<div class="discountInfo">할인정보</div>
				<table class="tPrice">
					<tr>
						<td style="width:180px; color:#1671B6; font-size:14pt; font-weight:bold;">탈출 프라이쓰(1인)</td>
						<td style="padding-left:30px; width:230px">주중 
							<input type="textbox" onKeyPress="return numkeyCheck(event)" maxlength="6" id="week2" style="height:30px;width:125px; font-size:14px; text-align:center;" class="defText" value="<?echo $basic['g_weekprice']?>" name="week"> 원
						</td>
						<td style="padding-left:8%;">주말 
							<input type="textbox" onKeyPress="return numkeyCheck(event)" maxlength="6" id="holy2" style="height:30px;width:125px; font-size:14px; text-align:center;" class="defText" value="<?echo $basic['g_holyprice']?>" name="holy"> 원
						</td>
					</tr>
				</table>
			</div>
			<div class="price">
				<p class="pr1">*탈출 프라이쓰란?</p>
				<p class="pr2">-1인당 가격으로 할인판매하는 방법입니다.(ex:탈출 프라이쓰가 15000원일 때 = 2명:30,000원/3명:45,000원/...6명:90,000원)</p>
				<p class="pr3">-<u>필수가 아니므로</u> 이용하시지 않으시려면 입력하지 않으셔도 됩니다.</p>
				</div>
				<div class="info">
				<span class="sp1">매장 할인정보</span><span class="sp2">매장에서 제공하는 할인서비스 정보를 입력해주세요.</span>
			</div>
			<div class="discountContent" style="margin-top:-2%">할인종류
				<select id="discount6" name="discount1" class="discountContent_inner" onChange="getSelectValue6();">
					<option value="1">선택하세요</option>
					<option value="2">조조할인</option>
					<option value="3">평일할인</option>
					<option value="4">SNS할인</option>
					<option value="5">후기할인</option>
					<option value="6">직접입력</option>
				</select>
				<input type="text" id="value6" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value6" value="<?echo $data['g_disname1']?>">할인가격 - 
				<input  type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis6" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" name="dis6" value="<?echo $data['g_disprice1']?>"> 원
			</div>
			<div class="discountContent">할인종류
				<select id="discount7" name="discount1" class="discountContent_inner" onChange="getSelectValue7();">
					<option value="1">선택하세요</option>
					<option value="2">조조할인</option>
					<option value="3">평일할인</option>
					<option value="4">SNS할인</option>
					<option value="5">후기할인</option>
					<option value="6">직접입력</option>
				</select>
				<input type="text" id="value7" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value7" value="<?echo $data['g_disname2']?>">할인가격 - 
				<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis7" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" name="dis7" value="<?echo $data['g_disprice2']?>"> 원
			</div>
			<div class="discountContent">할인종류
				<select id="discount8" name="discount1" class="discountContent_inner" onChange="getSelectValue8();">
					<option value="1">선택하세요</option>
					<option value="2">조조할인</option>
					<option value="3">평일할인</option>
					<option value="4">SNS할인</option>
					<option value="5">후기할인</option>
					<option value="6">직접입력</option>
				</select>
				<input type="text" id="value8" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value8" value="<?echo $data['g_disname3']?>">할인가격 - 
				<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis8" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" name="dis8" value="<?echo $data['g_disprice3']?>"> 원
			</div>
			<div class="discountContent">할인종류
				<select id="discount9" name="discount1" class="discountContent_inner" onChange="getSelectValue9();">
					<option value="1">선택하세요</option>
					<option value="2">조조할인</option>
					<option value="3">평일할인</option>
					<option value="4">SNS할인</option>
					<option value="5">후기할인</option>
					<option value="6">직접입력</option>
				</select>
				<input type="text" id="value9" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value9" value="<?echo $data['g_disname4']?>">할인가격 - 
				<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis9" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" name="dis9" value="<?echo $data['g_disprice4']?>"> 원
			</div>
			<div class="discountContent">할인종류
				<select id="discount10" name="discount1" class="discountContent_inner" onChange="getSelectValue10();">
					<option value="1">선택하세요</option>
					<option value="2">조조할인</option>
					<option value="3">평일할인</option>
					<option value="4">SNS할인</option>
					<option value="5">후기할인</option>
					<option value="6">직접입력</option>
				</select>
				<input type="text" id="value10" style="margin-top:10px;height:30px;margin-right:5%; font-size:14px; width:12%; border:1px solid #56dcfc; text-align:center;" name="value10" value="<?echo $data['g_disname5']?>">할인가격 - 
				<input type="text" onKeyPress="return numkeyCheck(event)" maxlength="6" placeholder="ex/2000" id="dis10" style="height:30px;width:20%; font-size:14px; width:125px; text-align:center;" class="defText" name="dis10" value="<?echo $data['g_disprice5']?>"> 원
			</div>
			<div class="lastMent">
				탈출러에서 검토 후 등록됩니다. 조금만 기다려주세요!(최대3일 소요)&nbsp;승인결과는 메일로 안내해드리겠습니다.
			</div>
			<div align="center";>
				<input type="button" class="delBtn" value="삭제" onclick="deleteGame()">
				<input type="button" class="saveBtn" value="수정" onclick="sendform()">
			</div>
		</div>
	</form>
</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요--> 
</div> 
<? 
include('./Footer_Module.php'); 
?>
</body>
<script>
copy=1;
function data_copy(){
	var id = document.getElementById('copy');
	
	var text1= document.getElementById('text1');
	var text2= document.getElementById('text2');
	var text3= document.getElementById('text3');
	var text4= document.getElementById('text4');
	var text5= document.getElementById('text5');
	var text6= document.getElementById('text6');
	var text7= document.getElementById('text7');
	var text8= document.getElementById('text8');
	var text9= document.getElementById('text9');
	var text10= document.getElementById('text10');
	var text11= document.getElementById('text11');
	var text12= document.getElementById('text12');
	var text13= document.getElementById('text13');
	var text14= document.getElementById('text14');
	var text15= document.getElementById('text15');
	var text16= document.getElementById('text16');
	var week1= document.getElementById('week1');
	var week2= document.getElementById('week2');
	var holy1= document.getElementById('holy1');
	var holy2= document.getElementById('holy2');
	var value1= document.getElementById('value1');
	var value2= document.getElementById('value2');
	var value3= document.getElementById('value3');
	var value4= document.getElementById('value4');
	var value5= document.getElementById('value5');
	var value6= document.getElementById('value6');
	var value7= document.getElementById('value7');
	var value8= document.getElementById('value8');
	var value9= document.getElementById('value9');
	var value10= document.getElementById('value10');
	var dis1= document.getElementById('dis1');
	var dis2= document.getElementById('dis2');
	var dis3= document.getElementById('dis3');
	var dis4= document.getElementById('dis4');
	var dis5= document.getElementById('dis5');
	var dis6= document.getElementById('dis6');
	var dis7= document.getElementById('dis7');
	var dis8= document.getElementById('dis8');
	var dis9= document.getElementById('dis9');
	var dis10= document.getElementById('dis10');

	if(copy>0){
		id.style.backgroundColor='#56dcfc';
		copy=-1;
		text9.value=text1.value;
		text10.value=text2.value;
		text11.value=text3.value;
		text12.value=text4.value;
		text13.value=text5.value;
		text14.value=text6.value;
		text15.value=text7.value;
		text16.value=text8.value;
		week2.value=week1.value;
		holy2.value=holy1.value;
		value6.value=value1.value;
		value7.value=value2.value;
		value8.value=value3.value;
		value9.value=value4.value;
		value10.value=value5.value;
		dis6.value=dis1.value;
		dis7.value=dis2.value;
		dis8.value=dis3.value;
		dis9.value=dis4.value;
		dis10.value=dis5.value;

	}else{
		id.style.backgroundColor='white';
		copy=1;
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
	if(confirm("게임 '<?echo $data['g_title']?>'을 정말 삭제하시겠습니까?")==true){
		location.href='./gameDelete.php?g_idx=<?echo $queue[$index]?>'		
	}else{return;}
}
</script>
<script>
function sendform(){
	var f1=document.getElementById('f1');
	f1.submit();
}
</script>

<script type="text/javascript"> 
//숫자만 입력되게하기
	function numkeyCheck(e) { 
		var keyValue = event.keyCode; 
		if( ((keyValue >= 48) && (keyValue <= 57))) 
		return true; 
		else return false;
		} 
</script>
<script> //select박스 선택시 text박스 출력(추가를 했을때는 안됨)
function getSelectValue1()
{
	var discount=document.getElementById('discount');
	var value1=document.getElementById('value1');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue2()
{
	var discount=document.getElementById('discount2');
	var value1=document.getElementById('value2');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue3()
{
	var discount=document.getElementById('discount3');
	var value1=document.getElementById('value3');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue4()
{
	var discount=document.getElementById('discount4');
	var value1=document.getElementById('value4');
	value1.value = discount.options[discount.selectedIndex].text;
}
function getSelectValue5()
{
	var discount=document.getElementById('discount5');
	var value1=document.getElementById('value5');
	value1.value = discount.options[discount.selectedIndex].text;
}
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
var count1=0;
function myFunction1() {
	count1++;
    if(count1%2==0){
	document.getElementById("text1").disabled = true;
	document.getElementById("btn1").style.backgroundColor='#bfbfbf';
	document.getElementById("text1").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text1").disabled = false;
	document.getElementById("btn1").style.backgroundColor='#56dcfc';
	document.getElementById("text1").style.backgroundColor='white';
	}
}
var count2=0;
function myFunction2() {
	count2++;
    if(count2%2==1){
	document.getElementById("text2").disabled = true;
	document.getElementById("btn2").style.backgroundColor='#bfbfbf';
	document.getElementById("text2").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text2").disabled = false;
	document.getElementById("btn2").style.backgroundColor='#56dcfc';
	document.getElementById("text2").style.backgroundColor='white';
	}
}
var count3=0;
function myFunction3() {
	count3++;
    if(count3%2==1){
	document.getElementById("text3").disabled = true;
	document.getElementById("btn3").style.backgroundColor='#bfbfbf';
	document.getElementById("text3").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text3").disabled = false;
	document.getElementById("btn3").style.backgroundColor='#56dcfc';
	document.getElementById("text3").style.backgroundColor='white';
	}
}
var count4=0;
function myFunction4() {
	count4++;
    if(count4%2==1){
	document.getElementById("text4").disabled = true;
	document.getElementById("btn4").style.backgroundColor='#bfbfbf';
	document.getElementById("text4").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text4").disabled = false;
	document.getElementById("btn4").style.backgroundColor='#56dcfc';
	document.getElementById("text4").style.backgroundColor='white';
	}
}
var count5=0;
function myFunction5() {
	count5++;
    if(count5%2==1){
	document.getElementById("text5").disabled = true;
	document.getElementById("btn5").style.backgroundColor='#bfbfbf';
	document.getElementById("text5").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text5").disabled = false;
	document.getElementById("btn5").style.backgroundColor='#56dcfc';
	document.getElementById("text5").style.backgroundColor='white';
	}
}
var count6=0;
function myFunction6() {
	count6++;
    if(count6%2==1){
	document.getElementById("text6").disabled = true;
	document.getElementById("btn6").style.backgroundColor='#bfbfbf';
	document.getElementById("text6").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text6").disabled = false;
	document.getElementById("btn6").style.backgroundColor='#56dcfc';
	document.getElementById("text6").style.backgroundColor='white';
	}
}
var count7=0;
function myFunction7() {
	count7++;
    if(count7%2==1){
	document.getElementById("text7").disabled = true;
	document.getElementById("btn7").style.backgroundColor='#bfbfbf';
	document.getElementById("text7").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text7").disabled = false;
	document.getElementById("btn7").style.backgroundColor='#56dcfc';
	document.getElementById("text7").style.backgroundColor='white';
	}
}
var count8=0;
function myFunction8() {
	count8++;
    if(count8%2==0){
	document.getElementById("text8").disabled = true;
	document.getElementById("btn8").style.backgroundColor='#bfbfbf';
	document.getElementById("text8").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text8").disabled = false;
	document.getElementById("btn8").style.backgroundColor='#56dcfc';
	document.getElementById("text8").style.backgroundColor='white';
	}
}
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
	document.getElementById("text10").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text10").disabled = false;
	document.getElementById("btn10").style.backgroundColor='#4edcf2';
	document.getElementById("text10").style.backgroundColor='white';
	}
}
var count11=0;
function myFunction11() {
	count11++;
    if(count11%2==1){
	document.getElementById("text11").disabled = true;
	document.getElementById("btn11").style.backgroundColor='#bfbfbf';
	document.getElementById("text11").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text11").disabled = false;
	document.getElementById("btn11").style.backgroundColor='#4edcf2';
	document.getElementById("text11").style.backgroundColor='white';
	}
}
var count12=0;
function myFunction12() {
	count12++;
    if(count12%2==1){
	document.getElementById("text12").disabled = true;
	document.getElementById("btn12").style.backgroundColor='#bfbfbf';
	document.getElementById("text12").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text12").disabled = false;
	document.getElementById("btn12").style.backgroundColor='#4edcf2';
	document.getElementById("text12").style.backgroundColor='white';
	}
}
var count13=0;
function myFunction13() {
	count13++;
    if(count13%2==1){
	document.getElementById("text13").disabled = true;
	document.getElementById("btn13").style.backgroundColor='#bfbfbf';
	document.getElementById("text13").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text13").disabled = false;
	document.getElementById("btn13").style.backgroundColor='#4edcf2';
	document.getElementById("text13").style.backgroundColor='white';
	}
}
var count14=0;
function myFunction14() {
	count14++;
    if(count14%2==1){
	document.getElementById("text14").disabled = true;
	document.getElementById("btn14").style.backgroundColor='#bfbfbf';
	document.getElementById("text14").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text14").disabled = false;
	document.getElementById("btn14").style.backgroundColor='#4edcf2';
	document.getElementById("text14").style.backgroundColor='white';
	}
}
var count15=0;
function myFunction15() {
	count15++;
    if(count15%2==1){
	document.getElementById("text15").disabled = true;
	document.getElementById("btn15").style.backgroundColor='#bfbfbf';
	document.getElementById("text15").style.backgroundColor='#ccc';
	}else{
    document.getElementById("text15").disabled = false;
	document.getElementById("btn15").style.backgroundColor='#4edcf2';
	document.getElementById("text15").style.backgroundColor='white';
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
<script> //div영역 클릭시 bgc변경(11111만 변경됨)
function button_onclick(value){
	var first=document.getElementById("gameNum1");	
	var second=document.getElementById("gameNum2");
	var third=document.getElementById("gameNum3");
	var fourth=document.getElementById("gameNum4");
	var fifth=document.getElementById("gameNum5");

	var level=document.getElementById("level");
	var horror=document.getElementById("horror");
	var people=document.getElementById("people");

	var ability1=document.getElementById("ability1");
	var ability2=document.getElementById("ability2");
	var ability3=document.getElementById("ability3");
	var ability4=document.getElementById("ability4");
	var ability5=document.getElementById("ability5");
	var ability6=document.getElementById("ability6");

	var title=document.getElementById('title');
	var subtitle=document.getElementById('subtitle');
	var content=document.getElementById('content');
	var summary=document.getElementById('summary');

	var text9=document.getElementById('text9');
	var text9=document.getElementById('text9');
	var text10=document.getElementById('text10');
	var text11=document.getElementById('text11');
	var text12=document.getElementById('text12');
	var text13=document.getElementById('text13');
	var text14=document.getElementById('text14');
	var text15=document.getElementById('text15');
	var text16=document.getElementById('text16');
	var week2=document.getElementById('week2');
	var holy2=document.getElementById('holy2');
	var value6=document.getElementById('value6');
	var value7=document.getElementById('value7');
	var value8=document.getElementById('value8');
	var value9=document.getElementById('value9');
	var value10=document.getElementById('value10');
	var dis6=document.getElementById('dis6');
	var dis7=document.getElementById('dis7');
	var dis8=document.getElementById('dis8');
	var dis9=document.getElementById('dis9');
	var dis10=document.getElementById('dis10');

	switch(value){
		case 1:
			<?$data=mysql_fetch_array($q); ?>
			var now=document.getElementById("gameNum"+value);	

			title.innerHTML="<?echo ($data['g_title'])?>";
			subtitle.innerHTML="<?echo ($data['g_subtitle'])?>";
			content.innerHTML="<?echo ($data['g_content'])?>";
			summary.innerHTML="<?echo ($data['g_summary'])?>";
			title.style.backgroundColor="#eee";
			subtitle.style.backgroundColor="#eee";
			content.style.backgroundColor="#eee";
			summary.style.backgroundColor="#eee";
			now.style.backgroundColor="#56dcfc";
			second.style.backgroundColor="white";
			third.style.backgroundColor="white";
			fourth.style.backgroundColor="white";
			fifth.style.backgroundColor="white";
			level.value="<?echo ($data['g_level'])?>";
			horror.value="<?echo ($data['g_horror'])?>";
			people.value="<?echo ($data['g_people'])?>";
			ability1.value="<?echo ($data['g_skill1'])?>";
			ability2.value="<?echo ($data['g_skill2'])?>";
			ability3.value="<?echo ($data['g_skill3'])?>";
			ability4.value="<?echo ($data['g_skill4'])?>";
			ability5.value="<?echo ($data['g_skill5'])?>";
			ability6.value="<?echo ($data['g_skill6'])?>";
				if(ability1.value==1){
					ability1.style.backgroundColor="#56dcfc";
					ability1.style.color="#56dcfc";
				}else{
					ability1.style.backgroundColor="white";
					ability1.style.color="white";
				}
				if(ability2.value==1){
					ability2.style.backgroundColor="#56dcfc";
					ability2.style.color="#56dcfc";
				}else{
					ability2.style.backgroundColor="white";
					ability2.style.color="white";
				}
				if(ability3.value==1){
					ability3.style.backgroundColor="#56dcfc";
					ability3.style.color="#56dcfc";
				}else{
					ability3.style.backgroundColor="white";
					ability3.style.color="white";
				}
				if(ability4.value==1){
					ability4.style.backgroundColor="#56dcfc";
					ability4.style.color="#56dcfc";
				}else{
					ability4.style.backgroundColor="white";
					ability4.style.color="white";
				}
				if(ability5.value==1){
					ability5.style.backgroundColor="#56dcfc";
					ability5.style.color="#56dcfc";
				}else{
					ability5.style.backgroundColor="white";
					ability5.style.color="white";
				}
				if(ability6.value==1){
					ability6.style.backgroundColor="#56dcfc";
					ability6.style.color="#56dcfc";
				}else{
					ability6.style.backgroundColor="white";
					ability6.style.color="white";
				}
				text9.value="<?echo ($data['g_p1'])?>";
				text10.value="<?echo ($data['g_p2'])?>";
				text11.value="<?echo ($data['g_p3'])?>";
				text12.value="<?echo ($data['g_p4'])?>";
				text13.value="<?echo ($data['g_p5'])?>";
				text14.value="<?echo ($data['g_p6'])?>";
				text15.value="<?echo ($data['g_p7'])?>";
				text16.value="<?echo ($data['g_p8'])?>";
				week2.value="<?echo ($data['g_weekprice'])?>";
				holy2.value="<?echo ($data['g_holyprice'])?>";
				value6.value="<?echo ($data['g_disname1'])?>";
				value7.value="<?echo ($data['g_disname2'])?>";
				value8.value="<?echo ($data['g_disname3'])?>";
				value9.value="<?echo ($data['g_disname4'])?>";
				value10.value="<?echo ($data['g_disname5'])?>";
				dis6.value="<?echo ($data['g_disprice1'])?>";
				dis7.value="<?echo ($data['g_disprice2'])?>";
				dis8.value="<?echo ($data['g_disprice3'])?>";
				dis9.value="<?echo ($data['g_disprice4'])?>";
				dis10.value="<?echo ($data['g_disprice5'])?>";
			break;
				
		case 2:
			<?$data=mysql_fetch_array($q); ?>
			var now=document.getElementById("gameNum"+value);

				title.innerHTML="<?echo ($data['g_title'])?>";
				subtitle.innerHTML="<?echo ($data['g_subtitle'])?>";
				content.innerHTML="<?echo ($data['g_content'])?>";
				summary.innerHTML="<?echo ($data['g_summary'])?>";
				title.style.backgroundColor="#eee";
				subtitle.style.backgroundColor="#eee";
				content.style.backgroundColor="#eee";
				summary.style.backgroundColor="#eee";
				now.style.backgroundColor="#56dcfc";
				first.style.backgroundColor="white";
				third.style.backgroundColor="white";
				fourth.style.backgroundColor="white";
				fifth.style.backgroundColor="white";
				level.value="<?echo ($data['g_level'])?>";
				horror.value="<?echo ($data['g_horror'])?>";
				people.value="<?echo ($data['g_people'])?>";
				ability1.value="<?echo ($data['g_skill1'])?>";
				ability2.value="<?echo ($data['g_skill2'])?>";
				ability3.value="<?echo ($data['g_skill3'])?>";
				ability4.value="<?echo ($data['g_skill4'])?>";
				ability5.value="<?echo ($data['g_skill5'])?>";
				ability6.value="<?echo ($data['g_skill6'])?>";
				if(ability1.value==1){
					ability1.style.backgroundColor="#56dcfc";
					ability1.style.color="#56dcfc";
				}else{
					ability1.style.backgroundColor="white";
					ability1.style.color="white";
				}
				if(ability2.value==1){
					ability2.style.backgroundColor="#56dcfc";
					ability2.style.color="#56dcfc";
				}else{
					ability2.style.backgroundColor="white";
					ability2.style.color="white";
				}
				if(ability3.value==1){
					ability3.style.backgroundColor="#56dcfc";
					ability3.style.color="#56dcfc";
				}else{
					ability3.style.backgroundColor="white";
					ability3.style.color="white";
				}
				if(ability4.value==1){
					ability4.style.backgroundColor="#56dcfc";
					ability4.style.color="#56dcfc";
				}else{
					ability4.style.backgroundColor="white";
					ability4.style.color="white";
				}
				if(ability5.value==1){
					ability5.style.backgroundColor="#56dcfc";
					ability5.style.color="#56dcfc";
				}else{
					ability5.style.backgroundColor="white";
					ability5.style.color="white";
				}
				if(ability6.value==1){
					ability6.style.backgroundColor="#56dcfc";
					ability6.style.color="#56dcfc";
				}else{
					ability6.style.backgroundColor="white";
					ability6.style.color="white";
				}
				text9.value="<?echo ($data['g_p1'])?>";
				text10.value="<?echo ($data['g_p2'])?>";
				text11.value="<?echo ($data['g_p3'])?>";
				text12.value="<?echo ($data['g_p4'])?>";
				text13.value="<?echo ($data['g_p5'])?>";
				text14.value="<?echo ($data['g_p6'])?>";
				text15.value="<?echo ($data['g_p7'])?>";
				text16.value="<?echo ($data['g_p8'])?>";
				week2.value="<?echo ($data['g_weekprice'])?>";
				holy2.value="<?echo ($data['g_holyprice'])?>";
				value6.value="<?echo ($data['g_disname1'])?>";
				value7.value="<?echo ($data['g_disname2'])?>";
				value8.value="<?echo ($data['g_disname3'])?>";
				value9.value="<?echo ($data['g_disname4'])?>";
				value10.value="<?echo ($data['g_disname5'])?>";
				dis6.value="<?echo ($data['g_disprice1'])?>";
				dis7.value="<?echo ($data['g_disprice2'])?>";
				dis8.value="<?echo ($data['g_disprice3'])?>";
				dis9.value="<?echo ($data['g_disprice4'])?>";
				dis10.value="<?echo ($data['g_disprice5'])?>";
				break;			
		
		case 3:
			<?$data=mysql_fetch_array($q); ?>
			var now=document.getElementById("gameNum"+value);

				title.innerHTML="<?echo ($data['g_title'])?>";
				subtitle.innerHTML="<?echo ($data['g_subtitle'])?>";
				content.innerHTML="<?echo ($data['g_content'])?>";
				summary.innerHTML="<?echo ($data['g_summary'])?>";
				title.style.backgroundColor="#eee";
				subtitle.style.backgroundColor="#eee";
				content.style.backgroundColor="#eee";
				summary.style.backgroundColor="#eee";
				now.style.backgroundColor="#56dcfc";
				first.style.backgroundColor="white";
				second.style.backgroundColor="white";
				fourth.style.backgroundColor="white";
				fifth.style.backgroundColor="white";
				level.value="<?echo ($data['g_level'])?>";
				horror.value="<?echo ($data['g_horror'])?>";
				people.value="<?echo ($data['g_people'])?>";
				ability1.value="<?echo ($data['g_skill1'])?>";
				ability2.value="<?echo ($data['g_skill2'])?>";
				ability3.value="<?echo ($data['g_skill3'])?>";
				ability4.value="<?echo ($data['g_skill4'])?>";
				ability5.value="<?echo ($data['g_skill5'])?>";
				ability6.value="<?echo ($data['g_skill6'])?>";
				if(ability1.value==1){
					ability1.style.backgroundColor="#56dcfc";
					ability1.style.color="#56dcfc";
				}else{
					ability1.style.backgroundColor="white";
					ability1.style.color="white";
				}
				if(ability2.value==1){
					ability2.style.backgroundColor="#56dcfc";
					ability2.style.color="#56dcfc";
				}else{
					ability2.style.backgroundColor="white";
					ability2.style.color="white";
				}
				if(ability3.value==1){
					ability3.style.backgroundColor="#56dcfc";
					ability3.style.color="#56dcfc";
				}else{
					ability3.style.backgroundColor="white";
					ability3.style.color="white";
				}
				if(ability4.value==1){
					ability4.style.backgroundColor="#56dcfc";
					ability4.style.color="#56dcfc";
				}else{
					ability4.style.backgroundColor="white";
					ability4.style.color="white";
				}
				if(ability5.value==1){
					ability5.style.backgroundColor="#56dcfc";
					ability5.style.color="#56dcfc";
				}else{
					ability5.style.backgroundColor="white";
					ability5.style.color="white";
				}
				if(ability6.value==1){
					ability6.style.backgroundColor="#56dcfc";
					ability6.style.color="#56dcfc";
				}else{
					ability6.style.backgroundColor="white";
					ability6.style.color="white";
				}
				text9.value="<?echo ($data['g_p1'])?>";
				text10.value="<?echo ($data['g_p2'])?>";
				text11.value="<?echo ($data['g_p3'])?>";
				text12.value="<?echo ($data['g_p4'])?>";
				text13.value="<?echo ($data['g_p5'])?>";
				text14.value="<?echo ($data['g_p6'])?>";
				text15.value="<?echo ($data['g_p7'])?>";
				text16.value="<?echo ($data['g_p8'])?>";
				week2.value="<?echo ($data['g_weekprice'])?>";
				holy2.value="<?echo ($data['g_holyprice'])?>";
				value6.value="<?echo ($data['g_disname1'])?>";
				value7.value="<?echo ($data['g_disname2'])?>";
				value8.value="<?echo ($data['g_disname3'])?>";
				value9.value="<?echo ($data['g_disname4'])?>";
				value10.value="<?echo ($data['g_disname5'])?>";
				dis6.value="<?echo ($data['g_disprice1'])?>";
				dis7.value="<?echo ($data['g_disprice2'])?>";
				dis8.value="<?echo ($data['g_disprice3'])?>";
				dis9.value="<?echo ($data['g_disprice4'])?>";
				dis10.value="<?echo ($data['g_disprice5'])?>";
				break;			

		case 4:
			<?$data=mysql_fetch_array($q); ?>
			var now=document.getElementById("gameNum"+value);

				title.innerHTML="<?echo ($data['g_title'])?>";
				subtitle.innerHTML="<?echo ($data['g_subtitle'])?>";
				content.innerHTML="<?echo ($data['g_content'])?>";
				summary.innerHTML="<?echo ($data['g_summary'])?>";
				title.style.backgroundColor="#eee";
				subtitle.style.backgroundColor="#eee";
				content.style.backgroundColor="#eee";
				summary.style.backgroundColor="#eee";
				now.style.backgroundColor="#56dcfc";
				first.style.backgroundColor="white";
				second.style.backgroundColor="white";
				third.style.backgroundColor="white";
				fifth.style.backgroundColor="white";
				level.value="<?echo ($data['g_level'])?>";
				horror.value="<?echo ($data['g_horror'])?>";
				people.value="<?echo ($data['g_people'])?>";
				ability1.value="<?echo ($data['g_skill1'])?>";
				ability2.value="<?echo ($data['g_skill2'])?>";
				ability3.value="<?echo ($data['g_skill3'])?>";
				ability4.value="<?echo ($data['g_skill4'])?>";
				ability5.value="<?echo ($data['g_skill5'])?>";
				ability6.value="<?echo ($data['g_skill6'])?>";
				if(ability1.value==1){
					ability1.style.backgroundColor="#56dcfc";
					ability1.style.color="#56dcfc";
				}else{
					ability1.style.backgroundColor="white";
					ability1.style.color="white";
				}
				if(ability2.value==1){
					ability2.style.backgroundColor="#56dcfc";
					ability2.style.color="#56dcfc";
				}else{
					ability2.style.backgroundColor="white";
					ability2.style.color="white";
				}
				if(ability3.value==1){
					ability3.style.backgroundColor="#56dcfc";
					ability3.style.color="#56dcfc";
				}else{
					ability3.style.backgroundColor="white";
					ability3.style.color="white";
				}
				if(ability4.value==1){
					ability4.style.backgroundColor="#56dcfc";
					ability4.style.color="#56dcfc";
				}else{
					ability4.style.backgroundColor="white";
					ability4.style.color="white";
				}
				if(ability5.value==1){
					ability5.style.backgroundColor="#56dcfc";
					ability5.style.color="#56dcfc";
				}else{
					ability5.style.backgroundColor="white";
					ability5.style.color="white";
				}
				if(ability6.value==1){
					ability6.style.backgroundColor="#56dcfc";
					ability6.style.color="#56dcfc";
				}else{
					ability6.style.backgroundColor="white";
					ability6.style.color="white";
				}
				text9.value="<?echo ($data['g_p1'])?>";
				text10.value="<?echo ($data['g_p2'])?>";
				text11.value="<?echo ($data['g_p3'])?>";
				text12.value="<?echo ($data['g_p4'])?>";
				text13.value="<?echo ($data['g_p5'])?>";
				text14.value="<?echo ($data['g_p6'])?>";
				text15.value="<?echo ($data['g_p7'])?>";
				text16.value="<?echo ($data['g_p8'])?>";
				week2.value="<?echo ($data['g_weekprice'])?>";
				holy2.value="<?echo ($data['g_holyprice'])?>";
				value6.value="<?echo ($data['g_disname1'])?>";
				value7.value="<?echo ($data['g_disname2'])?>";
				value8.value="<?echo ($data['g_disname3'])?>";
				value9.value="<?echo ($data['g_disname4'])?>";
				value10.value="<?echo ($data['g_disname5'])?>";
				dis6.value="<?echo ($data['g_disprice1'])?>";
				dis7.value="<?echo ($data['g_disprice2'])?>";
				dis8.value="<?echo ($data['g_disprice3'])?>";
				dis9.value="<?echo ($data['g_disprice4'])?>";
				dis10.value="<?echo ($data['g_disprice5'])?>";
				break;			

		case 5:
			<?$data=mysql_fetch_array($q); ?>
			var now=document.getElementById("gameNum"+value);

				title.innerHTML="<?echo ($data['g_title'])?>";
				subtitle.innerHTML="<?echo ($data['g_subtitle'])?>";
				content.innerHTML="<?echo ($data['g_content'])?>";
				summary.innerHTML="<?echo ($data['g_summary'])?>";
				title.style.backgroundColor="#eee";
				subtitle.style.backgroundColor="#eee";
				content.style.backgroundColor="#eee";
				summary.style.backgroundColor="#eee";
				now.style.backgroundColor="#56dcfc";
				first.style.backgroundColor="white";
				second.style.backgroundColor="white";
				third.style.backgroundColor="white";
				fourth.style.backgroundColor="white";
				level.value="<?echo ($data['g_level'])?>";
				horror.value="<?echo ($data['g_horror'])?>";
				people.value="<?echo ($data['g_people'])?>";
				ability1.value="<?echo ($data['g_skill1'])?>";
				ability2.value="<?echo ($data['g_skill2'])?>";
				ability3.value="<?echo ($data['g_skill3'])?>";
				ability4.value="<?echo ($data['g_skill4'])?>";
				ability5.value="<?echo ($data['g_skill5'])?>";
				ability6.value="<?echo ($data['g_skill6'])?>";
				if(ability1.value==1){
					ability1.style.backgroundColor="#56dcfc";
					ability1.style.color="#56dcfc";
				}else{
					ability1.style.backgroundColor="white";
					ability1.style.color="white";
				}
				if(ability2.value==1){
					ability2.style.backgroundColor="#56dcfc";
					ability2.style.color="#56dcfc";
				}else{
					ability2.style.backgroundColor="white";
					ability2.style.color="white";
				}
				if(ability3.value==1){
					ability3.style.backgroundColor="#56dcfc";
					ability3.style.color="#56dcfc";
				}else{
					ability3.style.backgroundColor="white";
					ability3.style.color="white";
				}
				if(ability4.value==1){
					ability4.style.backgroundColor="#56dcfc";
					ability4.style.color="#56dcfc";
				}else{
					ability4.style.backgroundColor="white";
					ability4.style.color="white";
				}
				if(ability5.value==1){
					ability5.style.backgroundColor="#56dcfc";
					ability5.style.color="#56dcfc";
				}else{
					ability5.style.backgroundColor="white";
					ability5.style.color="white";
				}
				if(ability6.value==1){
					ability6.style.backgroundColor="#56dcfc";
					ability6.style.color="#56dcfc";
				}else{
					ability6.style.backgroundColor="white";
					ability6.style.color="white";
				}	
				text9.value="<?echo ($data['g_p1'])?>";
				text10.value="<?echo ($data['g_p2'])?>";
				text11.value="<?echo ($data['g_p3'])?>";
				text12.value="<?echo ($data['g_p4'])?>";
				text13.value="<?echo ($data['g_p5'])?>";
				text14.value="<?echo ($data['g_p6'])?>";
				text15.value="<?echo ($data['g_p7'])?>";
				text16.value="<?echo ($data['g_p8'])?>";
				week2.value="<?echo ($data['g_weekprice'])?>";
				holy2.value="<?echo ($data['g_holyprice'])?>";
				value6.value="<?echo ($data['g_disname1'])?>";
				value7.value="<?echo ($data['g_disname2'])?>";
				value8.value="<?echo ($data['g_disname3'])?>";
				value9.value="<?echo ($data['g_disname4'])?>";
				value10.value="<?echo ($data['g_disname5'])?>";
				dis6.value="<?echo ($data['g_disprice1'])?>";
				dis7.value="<?echo ($data['g_disprice2'])?>";
				dis8.value="<?echo ($data['g_disprice3'])?>";
				dis9.value="<?echo ($data['g_disprice4'])?>";
				dis10.value="<?echo ($data['g_disprice5'])?>";
				break;			
		}
}

</script>
	<script> //초기 skill값에 따른 셋팅
	var ability1=document.getElementById("ability1");
	var ability2=document.getElementById("ability2");
	var ability3=document.getElementById("ability3");
	var ability4=document.getElementById("ability4");
	var ability5=document.getElementById("ability5");
	var ability6=document.getElementById("ability6");

	if(ability1.value==1){
		ability1.style.backgroundColor="#56dcfc";
		ability1.style.color="#56dcfc";
	}else{
		ability1.style.backgroundColor="white";
		ability1.style.color="white";
	}
	if(ability2.value==1){
		ability2.style.backgroundColor="#56dcfc";
		ability2.style.color="#56dcfc";
	}else{
		ability2.style.backgroundColor="white";
		ability2.style.color="white";
	}
	if(ability3.value==1){
		ability3.style.backgroundColor="#56dcfc";
		ability3.style.color="#56dcfc";
	}else{
		ability3.style.backgroundColor="white";
		ability3.style.color="white";
	}
	if(ability4.value==1){
		ability4.style.backgroundColor="#56dcfc";
		ability4.style.color="#56dcfc";
	}else{
		ability4.style.backgroundColor="white";
		ability4.style.color="white";
	}
	if(ability5.value==1){
		ability5.style.backgroundColor="#56dcfc";
		ability5.style.color="#56dcfc";
	}else{
		ability5.style.backgroundColor="white";
		ability5.style.color="white";
	}
	if(ability6.value==1){
		ability6.style.backgroundColor="#56dcfc";
		ability6.style.color="#56dcfc";
	}else{
		ability6.style.backgroundColor="white";
		ability6.style.color="white";
	}

	</script>