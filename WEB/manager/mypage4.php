<?
include('./HeadTab_Module.php');
?>

<style>
input{padding:3px;}
#Main_titlebar{
	width:80%;
	margin-left:4%;
	height:auto;
	width:100%;
	display:table;
	margin-top:20px;
}
#Main_titlebar .title{
	height:100%;
	float:left;
	font-size:26px;
	margin-right:10px;
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
#inputbox{
	height:auto;
	width:80%;
	margin-left:4%;
	padding-left:20px;
	padding-top:10px;
}
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
	height:auto;
	width:100%;
	display:table;
	padding-left:8px;
	padding-bottom:8px;
	padding-top:0px;
	padding-right:0px;
}
#inputbox .container_address{
	height:auto;
	width:100%;
	display:table;
	padding-top:12px;
	padding-bottom:4px;
	padding-right:0px;
	padding-left:8px;
}
#inputbox .container_add2{
	height:auto;
	width:100%;
	display:table;
	padding-left:8px;
	padding-bottom:8px;
	padding-top:0px;
	padding-right:0px;
}
#inputbox .container_add_mid{
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
#inputbo .cafe_logo{
	width:50px;
	height:50px;
	display:table-cell;
	background-color:#ff0099;
}
#inputbox .major{
	float:left;
	font-size:15px;
	display:table-cell;
	width:120px;
	padding-left:5px;
}
#inputbox .major_add{
	float:left;
	font-size:15px;
	display:table-cell;
	width:100px;
	padding-left:5px;
	margin-left:15px;

}
#inputbox .container input{
	display:table-cell;
	width:180px;
	float:left;
}
#inputbox .container2 input{
	display:table-cell;
	width:360px;
	float:left;
}
#inputbox .container_address input{
	display:table-cell;
	width:81px;
	float:left;
}
#inputbox .container_add2 input{
	display:table-cell;
	width:360px;
	float:left;
	margin-left:20px;
}
#inputbox .container_add_mid input{
	display:table-cell;
	width:360px;
	float:left;
	margin-left:20px;
}
#promise{
	width:80%;
	margin-left:0%;
	height:auto;
	padding-top:10px;
	display:table;
}
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
}
#endmessage{
	width:80%;
	margin-left:4%;
	text-align:center;
	margin-top:20px;
	}
#endmessage span{
	margin:0;
	font-size:15px;
	color:#7c7c7c;
}
.click_box{
	float:left;
	width:100px;
	display:table-cell;
	padding-left:10px;
}
.click_box button{
	position:absolute;
	width:80px;
	height:20px;
	font-size:14px;
	font-weight:200;
	/*font-stretch: ultra-condensed;*/
	border-color:transparent;
	padding:0;
	border:0;
	background:#66ccff;
	color:#000000;
	cursor:pointer;
}
.click_box input{
	width:80px;
	height:20px;
	opacity:0;
	position:relative; 
}
.click_box2{
	margin: 10px 0px 10px 0px;
	text-align:center;
}
.link_area{
	background:#66ccff;
	color:#000000;
	font-size:20px;
	font-weight:200;
	width:130px;
	height:30px;
	clear:both;
	margin:auto;
	line-height:30px;
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
#Tab{
height:100%;
}
</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->


<div style="height:100%;overflow:hidden">
	<div id="Main_titlebar">
		<div class="title">카페정보관리</div>
		<div class="subtitle">-카페기본설정</div>
	</div>

		<form action="./partnerAsk.php" id="inputbox" method="POST" name="form" enctype="multipart/form-data">
			<div class="container">
				<div class="icon"><img src="images\icon\icon6.png" class="icon_sample"/></div><div class="major">＊카페명</div><input type="text" name="shopName"> <br>
			</div>
			<div class="container">
				<div class="icon"><img src="images\icon\icon5.png" class="icon_sample"/></div><div class="major">＊지점명</div><input type="text" name="localName"> <br>
			</div>



				<!--이미지전송-->
			<div class="container_logo">
					<div class="icon"><img src="images\icon\icon1.png" class="icon_sample"/></div><div class="major">＊카페로고</div>
					<input type="hidden" name="MAX_FILE_SIZE" value="100000" /><!--100MB제한-->
					<!-- input의 name은 $_FILES 배열의 name을 결정합니다 -->
					<div style="float:left;border:1px solid #aaa;width:120px;height:120px;">
						<img src="./partnerAsk/<?echo ($_SESSION['id']);?>.jpg" style="width:100%" />
					</div>
					<div style="float:left;">
						<input name="userfile" type="file" style="margin-left:10px;"/><br>
					</div>
			</div>
				<!--이미지전송 E-->
			
			
			<div class="container">
				<div class="icon"><img src="images\icon\icon1.png" class="icon_sample"/></div><div class="major">＊매장전화번호</div><input type="text" name="p_tele" placeholder="전화번호를 입력해주세요.">
			</div>
			<div class="container_address">
				<div class="icon"><img src="images\icon\icon4.png" class="icon_sample"/></div><div class="major">＊주소</div>
				<input type="text" name="postNumber1"><div class="need_bar"> - </div><input type="text" name="postNumber2">
				<div class="click_box"><button style="width:100px;">우편번호찾기</button><input type="file" value="파일 업로드"style="width:100px;" name="cafe_logo">
				</div> 
			</div>
			<div class="container_add_mid">
				<div class="major_add">&nbsp</div><input type="text" name="location1">
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div><input type="text" name="location2">
			</div>
			<div class="container2">
				<div class="icon"><img src="images\icon\icon2.png" class="icon_sample"/></div>
				<div class="major">&nbsp이용혜택</div>
				<input type="text" name="benefit1" placeholder="모든테마탈출 : 폴라로이드">
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div>
				<input type="text" name="benefit2" placeholder="ex) 탈출성공:OOO증정.(최대15자)">
				<br>
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div>
				<input type="text" name="benefit3">
				<br>
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div>
				<input type="text" name="benefit4">
				<br>
			</div>
	<div id="promise">
		<div class="major">＊예약취소 / 변경 / 환불규정</div>
		<textarea rows="5" cols="60" name="rule" style="margin-left:143px"></textarea>
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