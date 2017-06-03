<?
include('./HeadTab_Module.php');
?>

<style>

input{padding:3px;}
#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 220px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 220px); /* for Firefox */
    width :         calc(100% - 220px); /* for IE */
	height:auto; /*Main의 높이를 90%로 조절합니다.*/
	font-family:'NotoSansCJKkr-Regular.eot';
	overflow:hidden;
}


/*대분류 영역*/
#Main_titlebar{
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#626262;
	width:80%;
	height:auto;
	width:100%;
	display:table;
	margin:50 0 0 33;
	padding:0 0 0 26;
}


#inputbox{
	height:auto;
	width:80%;
	margin:0 0 0 33;
	padding:10 0 0 20;
}

#promise{
	width:80%;
	height:auto;
	margin:0 0 0 33;
	padding:10 0 0 20;
	display:table;
}

#endmessage{
	width:80%;
	text-align:center;
	font-family:'NotoSansCJKkr-Regular.eot';
	margin:20 0 0 33;
	padding:0 0 0 20;
}

/*대분류 영역*/

/*타이틀 영역*/

#Main_titlebar .title{
	height:100%;
	float:left;
	font-size:25px;
	margin-right:10px;
	font-weight:bold;
	display:table-cell;
	margin-bottom:20px;
}
#Main_titlebar .subtitle{
	height:100%;
	float:left;
	font-size:17px;
	display:table-cell;
	margin-top:5px;
}

/*타이틀 영역*/

/*인풋박스 입력 영역*/

#inputbox .container{
	height:auto;
	width:100%;
	display:table;
	padding-top:12px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}
#inputbox .container2{
	height:auto;
	width:100%;
	display:table;
	padding-top:12px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}
#inputbox .container_logo{
	height:auto;
	width:100%;
	display:table;
	padding-top:12px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}
#inputbox .input_img{
	display:table-cell;
	float:left;
	width:180px;
}
#inputbox .option{
	display:table-cell;
	float:left;
	width:300px;
	padding-top:75px;
}
#inputbox .option span{
	font-size:14px;
	float:bottom;
	margin-top:5px;
	display:block;
}
#inputbox .container_add{
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#626262;
	height:auto;
	width:100%;
	display:table;
	padding-left:8px;
	padding-bottom:8px;
	padding-top:0px;
	padding-right:0px;
}
#inputbox .container_address{
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#626262;
	height:auto;
	width:100%;
	display:table;
	padding-top:12px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}
#inputbox .container_add2{
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#626262;
	height:auto;
	width:100%;
	display:table;
	padding-left:8px;
	padding-bottom:8px;
	padding-top:0px;
	padding-right:0px;
}
#inputbox .container_add_mid{
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#626262;
	height:auto;
	width:100%;
	display:table;
	padding-left:8px;
	padding-bottom:4px;
	padding-top:0px;
	padding-right:0px;
}
/*icon 15x21px 사용*/
#inputbox .icon{
	width:15px;
	display:table-cell;
	padding:0px;
}
#inputbox .cafe_logo{
	width:50px;
	height:50px;
	display:table-cell;
	background-color:#ff0099;
}
#inputbox .major{
	font-family:'NotoSansCJKkr-Regular.eot';
	float:left;
	font-weight:medium;
	font-size:15px;
	display:table-cell;
	width:120px;
	padding-left:5px;
}
#inputbox .major_add{
	float:left;
	font-size:15px;
	display:table-cell;
	color:#626262;
	width:100px;
	padding-left:5px;
	margin-left:15px;

}
#inputbox .container input{
	display:table-cell;
	width:180px;
	float:left;
	font-size:10pt;
	
}
#inputbox .container2 input{
	display:table-cell;
	width:360px;
	float:left;
	font-size:10pt;
}
#inputbox .container_address input{
	display:table-cell;
	width:82px;
	float:left;
	font-size:10pt;
}
#inputbox .container_add2 input{
	display:table-cell;
	width:360px;
	float:left;
	margin-left:20px;
	font-size:10pt;
}
#inputbox .container_add_mid input{
	display:table-cell;
	width:360px;
	float:left;
	margin-left:20px;
	font-size:10pt;
}

/*인풋박스 입력 영역*/

/*약관동의 영역*/


#promise .major{
	float:left;
	font-size:15px;
	display:table-cell;
	width:100%;
	padding-left:30px;
	margin-bottom:10px;
}
#promise textarea{
	float:left;
	display:table-cell;
	margin:0 0 0 90;
}

/*약관동의 영역*/

/*등록 수정 버튼 영역*/

#endmessage span{
	margin:0;
	font-size:15px;
	color:#ff6600;
}

/*등록 수정 버튼 영역*/

/*클릭박스 영역*/

.click_box{
	float:left;
	width:100px;
	display:table-cell;
	padding-left:10px;
}
.click_box button{
	position:absolute;
	width:80px;
	height:26px;
	font-size:14px;
	/*font-stretch: ultra-condensed;*/
	border-color:transparent;
	padding:0;
	border:0;
	background:#56dcfc;
	color:#626262;
	cursor:pointer;
}
.click_box input{
	width:80px;
	height:26px;
	opacity:0;
	position:relative; 
}
.click_box2{
	margin: 10px 0px 10px 0px;
	text-align:center;
}
.link_area{
	font-family:'NotoSansCJKkr-Regular.eot';
	background:#56dcfc;
	color:#626262;
	font-size:16pt;
	width:130px;
	height:30px;
	clear:both;
	font-weight:bold;
	margin:auto;
	line-height:25px;
}
.click_box2 a{
	cursor:pointer;
	text-decoration:none;
	margin-top:5px;
}
.need_bar{
	display:table-cell;
	float:left;
	padding:0px 5px;
}
.icon_sample{
	padding:0px;
	margin-bottom:-5px;
	margin-top:1px;
	position:absolute;
	clear:left;
}


</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->


<div id="Main">
	<div id="Main_titlebar">
		<div class="title">카페정보관리</div>
		<div class="subtitle">-&nbsp카페기본설정</div>
	</div>
<?
//infos to be into placeholders
include('./include.php');
$sql="select * from partner where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>
		<form action="./partnerAsk.php" id="inputbox" method="POST" name="form" enctype="multipart/form-data">
			<div class="container">
				<div class="icon"><img src="images\icon\icon6.png" class="icon_sample"/></div><div class="major">＊카페명</div><input type="text" name="shopName" value="<?echo $data['p_shopName']?>"> <br>
			</div>
			<div class="container">
				<div class="icon"><img src="images\icon\icon5.png" class="icon_sample"/></div><div class="major">＊지점명</div><input type="text" name="localName" value="<?echo $data['p_localName']?>" placeholder="ex) 홍대점, 강남점"> <br>
			</div>

				<!--이미지전송-->
			<div class="container_logo">
					<div class="icon"><img src="images\icon\icon1.png" class="icon_sample"/></div><div class="major">＊카페로고</div>
					<input type="hidden" name="MAX_FILE_SIZE" value="10000000" /><!--10MB제한-->
					<!-- input의 name은 $_FILES 배열의 name을 결정합니다 -->
					<div style=" position:relative; float:left;border:0px solid #aaa; width:182px; height:62px; text-align:center; display:table-cell; background-color:#a0a0a0;">
					<?
					$sql="select filename from partnerImage where p_id='".$_SESSION['id']."'";
					$q=mysql_query($sql);
					$path=mysql_fetch_array($q);
					?>
						<img src="./partnerpic/<?echo ($path['filename']);?>.jpg" style="position:absolute; width:auto; height:auto; max-height:60px; max-width:180px; border:0px solid #aaa; background-color:#ffffff; margin:auto;
            top:0; bottom:0; left:0; right:0;" onerror="this.src='./images/button/plus.png'"/>
					</div>
					<div style="float:left;">
						<input name="userfile" id="file" type="file" style="margin-left:10px;" accept=".gif, .jpg, .png"/><br>
					</div>
			</div>
				<!--이미지전송 E-->
			
			
			<div class="container">
				<div class="icon"><img src="images\icon\icon3.png" class="icon_sample"/></div><div class="major">＊매장전화번호</div><input type="text" name="p_tele" value="<?echo $data['p_tele']?>" placeholder="전화번호를 입력해주세요.">
			</div>
			<div class="container_address">
				<div class="icon"><img src="images\icon\icon4.png" class="icon_sample"/></div><div class="major">＊주소</div>
				<input type="text" id="sample6_postcode" name="postNumber1" value="<?echo $data['p_postNumber1']?>">
				<input type="button" value="우편번호 찾기" style="font-weight:normal;background-color:#56DCFC;height:25px;line-height:100%;border:none;margin-left:10px; width:100px;" name="cafe_logo" onclick="sample6_execDaumPostcode()">
			</div>
			<div class="container_add_mid">
				<div class="major_add">&nbsp</div><input type="text" name="location1" id="sample6_address" value="<?echo $data['p_location1']?>">
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div><input type="text" name="location2" id="sample6_address2" placeholder="나머지 주소를 압력해주세요" value="<?echo $data['p_location2']?>">
			</div>
			<div class="container2">
				<div class="icon"><img src="images\icon\icon2.png" class="icon_sample"/></div>
				<div class="major">&nbsp이용혜택</div>
				<input type="text" name="benefit1" value="<?echo $data['benefit1']?>" placeholder="모든테마탈출:폴라로이드">
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div>
				<input type="text" name="benefit2" value="<?echo $data['benefit2']?>" placeholder="ex)탈출성공:OOO증정{최대15자}">
				<br>
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div>
				<input type="text" name="benefit3" value="<?echo $data['benefit3']?>">
				<br>
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div>
				<input type="text" name="benefit4" value="<?echo $data['benefit4']?>">
				<br>
			</div>
	<div id="promise">
		<div class="major">＊예약취소 / 변경 / 환불규정</div>
		<textarea rows="5" cols="60" name="rule"><?echo $data['rule']?></textarea>
	</div>
	</form>

	<div id="endmessage">
		<span>탈출러에서 검토한 후에 등록됩니다. 조금만 기다려주세요! (최대 3일 소요)</span><br>
		<div class="click_box2" onclick="submit()"><div class="link_area">등록/수정</div></div>
	</div>
</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
<script>
function submit(){
   var f=document.form;
   f.submit();
}
</script>
<!--주소검색-->
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('sample6_address').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('sample6_address2').focus();
            }
        }).open();
    }
</script>
