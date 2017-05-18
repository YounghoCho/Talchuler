<?
include('./HeadTab_Module.php');
?>

<style>

/*대분류 영역*/
#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 220px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 220px); /* for Firefox */
    width :         calc(100% - 220px); /* for IE */
	height:auto; /*Main의 높이를 90%로 조절합니다.*/
	min-height:800px;
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

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	overflow:hidden;
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	margin:0 0 0 33;
	padding:15 0 30 26;
}

#Main_promise_area{
	overflow:hidden;
	width : -webkit-calc(80% - 59px); /* for Chrome, Safari */
    width :    -moz-calc(80% - 59px); /* for Firefox */
    width :         calc(80% - 59px); /* for IE */
	margin:0 0 0 33;
	padding:15 0 30 26;
}


/*대분류 영역*/

/*타이틀 영역*/

#title_area{
	width:100%;
}

#title_area .title{
	float:left;
	height:25px;
	font-size:25px;
	font-weight:bold;

}

#title_area .subtitle{
	float:right;
	font-size:17px;

}

/*타이틀 영역*/

/*메인 컨텐츠 부분*/



/*메인 컨텐츠 부분*/

.content_area{
	width:100%;
	font-size:15px;
	overflow:auto;
}

.content{
	height:30px;
	padding:10 0;
	width:100%;
	display:table;
}

.major{
	float:left;
	font-weight:bold;
	font-size:15px;
	padding:2 0;
	display:table-cell;
	width:25%;
	height:25px;
	vertical-align:meiddle;
}

.data{
	float:left;
	font-weight:medium;
	font-size:15px;
	padding:2 0;
	display:table-cell;
	width:35%;
	height:25px;
	color:#c3c3c3;
	vertical-align:meiddle;
}

.clickbox{
	float:left;
	display:table-cell;
	width:10%;
	height:25px;
	vertical-align:meiddle;
}

.clickbox input{
	width:80px;
	height:25px
}

/*메인 컨텐츠 부분*/


/*최저가 보장부분*/

#lowestPrice{
	width:100%;
}

.low_1{ /*최저가 보장, 체크박스, 알아보러가기*/
	width:100%;
	height:26px;
	float:left;
	font-size:12pt;
	display:table;
}
		
.sel_1{
	float:left;
	font-weight:bold;
	font-size:15px;
	padding:4 0;
	display:table-cell;
	vertical-align:middle;
	width:20%;
}

.sel_2{
	width:50%;
	float:left;
	font-size:12pt;
	padding:3 0;
	display:table-cell;
	vertical-align:middle;
}

.sel_2 input{
	float:left;
}

.sel_3{
	width:29%;
	padding:4 0;
	float:left;
	text-align:right;
	color:#ff6600;
	display:table-cell;
	vertical-align:middle;
}

.sel_3 a{
	color:#ff6600;
	float:left;
}

.low_2{
	width:100%;
	float:left;
	padding-top:10px;
	padding-left:20%;
	margin-bottom:10px;
}

.price_1{
	width:94.5%;
	padding-left:5.5%;
	float:left;
	color:#ff6600;
	font-size:10pt;
}

.btndiv{
	width:60%;
	height:30%;
	margin-left:15%;
	margin-top:3%;
}
.agreebtn{width:22px;height:22px;margin-right:10px;}
.btn{
	font-size:15px;
	width:60px;
	height:30px;
}

/*최저가 보장부분*/

/*클릭박스 디자인*/

#clickbox_area{
	width:100%;
	float:left;
	margin-top:30px;
}

#clickbox_house{
	width:70%;
	float:left;
	text-align:center;
}

#clickbox_house .empty_space{
	width:20px;
	display:inline-block;
}

#clickbox_house .rightblue{
	background:#66ccff;
	border:1px solid #06aeff;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .rightblue a{
	text-decoration:none; 
}

#clickbox_house .gray{
	background:#ebebeb;
	border:1px solid #919191;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .gray a{
	text-decoration:none; 
}

/*클릭박스 디자인*/



</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->


<div id="Main">
	<div id="Main_title_area">
		<div id="title_area">
			<div class="title">계정 정보 수정</div>
			<div class="subtitle">회원정보를 수정할 수 있습니다.</div>
		</div>
	</div>
	<div id="Main_content_area">
		<div class="content_area">
			<div class="content">
				<div class="major">사장님 성함</div>
				<div class="data">최연진</div>
			</div>
		
			<div class="content">
				<div class="major">업체명</div>
				<div class="data">이놀루션</div>
			</div>

			<div class="content">
				<div class="major">사업자등록번호</div>
				<div class="data">134-14-14331</div>
			</div>
			
			<div class="content">
				<div class="major">아이디</div>
				<div class="data">Jinasdfij</div>
			</div>

			<div class="content">
				<div class="major">비밀번호</div>
				<div class="data">***********</div>
				<div class="clickbox"><input type="button" value="변경"></div>
			</div>

			<div class="content">
				<div class="major">휴대폰번호</div>
				<div class="data">>010-1433-1341</div>
				<div class="clickbox"><input type="button" value="변경"></div>
			</div>
		
			<div class="content">
				<div class="major">이메일</div>
				<div class="data">asdfasdf913@naver.com</div>
				<div class="clickbox"><input type="button" value="변경"></div>
			</div>
		</div>
	</div>
	<div id="Main_promise_area">
		<div id="lowestPrice">
			<div class="low_1">
				<div class="sel_1">최저가 보장</div>
				<div class="sel_2">
					<input type="checkbox" name="agreement5" id="agreement5" class="agreebtn">
					<div style='float:left;'>동의 후 신청</div>
				</div>
				<div class="sel_3">
					<a href="http://talchuler.com/manager/banner_lowest.html" onclick="window.open(this.href, '_blank'); return false;">
						최저가 보장 알아보러 가기 >
					</a>
				</div>
			</div>
			<div class="low_2">
				<div class="price_1">사장님 업체의 게임가격을 전국 사이트 중 최저가로 표기합니다.</div>
				<div class="price_1">(어느곳에서도 할인하지 않으실 경우 기본가격으로 표기하셔도 좋습니다.)</div>
			</div>
		</div>
	</div>
	<style>


	</style>


	<div id="clickbox_area">
		<div id="clickbox_house">
			<a href=""><div class="rightblue">확&nbsp&nbsp&nbsp인</div></a>
		</div>
	</div>
	
</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요--> 
</div> 
<? 
include('./Footer_Module.php'); 
?>