<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?
include('./HeadTab_Module.php');
?>


<style>


body{
	margin:0;
	padding:0;
}
.Head{
	width:100%;
	height:68px;
	background-color:#66ccff;
}
.Tab{
	float:left;
	width:220px;
	height:100%;
	background-color:#cccccc;
}
.Main{
	width:100%;
	height:100%;
	padding-left:220px;
}
#Main_container{
	height:100%;
	width:100%;
	padding-top:30px;
	padding-left:50px;
}
#Main_titlebar{
	height:auto;
	width:100%;
	display:table;
}
#Main_titlebar .title{
	height:100%;
	float:left;
	font-size:30px;
	margin-right:10px;
	display:table-cell;
	margin-bottom:20px;
}
#Main_titlebar .subtitle{
	height:100%;
	float:left;
	font-size:17px;
	display:table-cell;
	margin-top:17px;
}
#inputbox{
	height:auto;
	width:100%;
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
	width:100px;
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
}

#inputbox .container_add_mid input{
	display:table-cell;
	width:360px;
	float:left;
}


#promise{
	height:auto;
	width : -webkit-calc(100% -130px); /* for Chrome, Safari */
	width :    -moz-calc(100% - 130px); /* for Firefox */
	width :         calc(100% - 130px); /* for IE */
	padding-left:20px;
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
	margin-left:130px;
	display:table-cell;
}

#endmessage{
	width:100%;
	text-align:center;
	margin-top:60px;
	}

#endmessage span{
	margin:0;
	font-size:15px;
	color:#7c7c7c;
}


.del_icon{
	margin-top:-5px;
	font-weight: bold;
	color:#6d6d6d;
	font-size:20px;
	display:table-cell;
	float:left;
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
	margin-top:20px;
	margin:auto;
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
}

.click_box2 a{
	cursor:pointer;
	text-decoration:none;
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


<div class="Main">
		<div id="Main_container">
			<div id="Main_titlebar">
				<div class="title">카페정보관리</div>
				<div class="subtitle">-카페기본설정</div>
			</div>
		<form action="url" id="inputbox">
			<div class="container">
				<div class="icon"><img src="images\icon\sample.png" class="icon_sample"/></div><div class="major">＊카페명</div><input type="text" name="cafe_name"> <br>
			</div>
			<div class="container">
				<div class="icon"><img src="images\icon\sample.png" class="icon_sample"/></div><div class="major">＊지점명</div><input type="text" name="local_name"> <br>
			</div>
			<div class="container_logo">
				<div class="icon"><img src="images\icon\sample.png" class="icon_sample"/></div><div class="major">＊카페로고</div><img src="images\common\picture.png" class="input_img"/><div class="click_box"><div class="option"><button>등록/수정</button><input type="file" value="파일 업로드"name="cafe_logo"><br><span>(300px×200px 권장 / JPG,PNG)</span></div>
				</div>
			</div>
			<div class="container">
				<div class="icon"><img src="images\icon\sample.png" class="icon_sample"/></div><div class="major">＊전화번호</div><input type="text" name="phonenumber" placeholder="전화번호를 입력해주세요.">
			</div>
			<div class="container_address">
				<div class="icon"><img src="images\icon\sample.png" class="icon_sample"/></div><div class="major">＊주소</div><input type="text" name="address"><div class="need_bar"> - </div><input type="text" name="address"><div class="click_box"><button style="width:100px;">우편번호찾기</button><input type="file" value="파일 업로드"style="width:100px;" name="cafe_logo">
				</div> 
			</div>
			<div class="container_add_mid">
				<div class="major_add">&nbsp</div><input type="text" name="address">
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div><input type="text" name="address">
			</div>
			<div class="container2">
				<div class="icon"><img src="images\icon\sample.png" class="icon_sample"/></div><div class="major">&nbsp이용혜택</div><input type="text" name="want" placeholder="모든테마탈출 : 폴라로이드"><div class="del_icon">－</div>
			</div>
			<div class="container_add2">
				<div class="major_add">&nbsp</div><input type="text" name="want" placeholder="ex) 탈출성공:OOO증정.(최대15자)"> <div class="del_icon">－＋</div><br>
			</div>
		</form>

	<div id="promise">
		<div class="major">＊예약취소 / 변경 / 환불규정</div>
		<textarea rows="5" cols="60" name="promise"></textarea>
	</div>
	
	<div id="endmessage">
		<span>탈출러에서 검토한 후에 등록됩니다. 조금만 기다려주세요! (최대 3일 소요)</span><br>
		<div class="click_box2"><div class="link_area"><a href=" ">등록/수정</div></a></div>
	</div>


<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
