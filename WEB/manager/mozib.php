<?
include("../page/include_head.php");
?>

<style>

/*대분류 사이즈*/

#Main{
	/*Tab 크기 뺴줌*/
	width:100%;
	overflow:visible;
	font-family:'NotoSansCJKkr-Regular.eot';
	color:#666666;
	margin-bottom:10%;
}

#Wide_image_area{
	width:80%;
	margin:0 10%;
}

#Middle_image_area{
	width:60%;
	margin:0 20% 5% 20%;
}

#Bottom_input_area{
	width:60%;
	margin:0 20%;
}

/*대분류 사이즈*/

/*큰 이미지 영역*/

#large_iamge{
	width:100%;
}

#large_iamge img{
	width:100%;
	height:auto;
}

/*큰 이미지 영역*/

/*배너 영역*/

#middle_iamge{
	width:100%;
}

#middle_iamge img{
	width:100%;
	height:auto;
}

/*배너 영역*/



/*인풋박스 영역*/

#inputbox_area{
	width : -webkit-calc(100% - 2px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 2px); /* for Firefox */
    width :         calc(100% - 2px); /* for IE */
	border:1px solid #56dcfc;
	overflow:auto;
}

#inputbox_area .textbox_area{
	width:60%;
	float:left;
}

#inputbox_area .imgbox_area{
	width:40%;
	float:left;
}

#inputbox_area .button_area{
	width:100%;
	height:20%;
	padding-bottom:3%;
	float:left;
}


	/*==텍스트 영역==*/


#inputbox_area .up_textbox{ /*위쪽 텍스트*/
	float:left;
	width:95%;
	padding:5% 0 0 5%;
}

#inputbox_area .title_text{
	font-size:18pt;
	padding:3% 0 5% 0;
	width:100%;
	float:left;
}

#inputbox_area .sub_text{
	margin-left:5%;
	font-size:11pt;
	padding:1% 0;
	width:95%;
	float:left;
}

#inputbox_area .down_textbox{ /*아래쪽 텍스트*/
	margin:15% 0 0 0;
	font-size:13pt;
	float:left;
	width:100%;
}

#inputbox_area .subject_low{
	float:left;
	padding:1% 0;
	width:100%;
}

#inputbox_area .subject{
	font-size:12pt;
	float:left;
	width:30%;
	text-align:right;
}

#inputbox_area .inputboxes{
	font-size:13pt;
	float:left;
	width:70%;
}

#inputbox_area .inputboxes input{
	float:left;
	border:1px solid #56dcfc;
}

	/*==텍스트 영역==*/

	/*==이미지 영역==*/

#inputbox_area .img_area{
	width:95%;
	padding:5% 5% 0 0;
	height:auto;
	float:left;
}

#inputbox_area .img_area img{
	width:100%;
	height:auto;
}

	/*==이미지 영역==*/

/*클릭박스 디자인*/

#clickbox_area{
	width:100%;
	float:left;
}

#clickbox_house{
	width:100%;
	float:left;
	text-align:center;
}

#clickbox_house .empty_space{
	width:20px;
	display:inline-block;
}

#clickbox_house .a{
	text-decoration:none;
}

#clickbox_house .rightblue{
	background:#66ccff;
	border:1px solid #06aeff;
	color:#696969;
	font-size:20pt;
	font-weight:bold;
	width:236px;
	height:61px;
	clear:both;
	margin-top:10%;
	display:inline-block;
	padding:18px 0;
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






<div id="Main">
	<div id="Wide_image_area">
		<div id="large_iamge">
			<img width="1400px" height="1000px" src="./images/banner/top.png" />
		</div>
	</div>
	<div id="Middle_image_area">
		<div id="middle_iamge">
			<a href="../manager/register1.php">
				<img src="./images/banner/middle.png" />
			</a>
		</div>
	</div>
	<div id="Bottom_input_area">
		<div id="inputbox_area">
			<div class="textbox_area">
				<div class="up_textbox">
					<div class="title_text">※ 서울/경기 외 지역 사장님이신가요?</div>
					<div class="sub_text">탈출러는 아직 서울/경기지역 서비스만 제공중입니다.</div>
					<div class="sub_text">그 외 지역은 더욱 멋진 모습으로 찾아뵙겠습니다.</div>
					<div class="sub_text">사장님이 계신 지역 서비스오픈시 바로 알려드리겠습니다.</div>
					<div class="sub_text">아래 정보를 입력해주세요.</div>
				</div>
				<div class="down_textbox">
					<div class="subject_low">
						<div class="subject">업체명 :&nbsp</div>
						<div class="inputboxes">
							<input type="text" style='font-size:16pt;'>
						</div>
					</div>
					<div class="subject_low">
						<div class="subject">지점명 :&nbsp</div>
						<div class="inputboxes">
							<input type="text" style='font-size:16pt;'>
						</div>
					</div>
					<div class="subject_low">
						<div class="subject">업체 전화번호 :&nbsp</div>
						<div class="inputboxes">
							<input type="text" style='font-size:16pt;'>
						</div>
					</div>
					<div class="subject_low">
						<div class="subject">담당자 성함 :&nbsp</div>
						<div class="inputboxes">
							<input type="text" style='font-size:16pt;'>
						</div>
					</div>
					<div class="subject_low">
						<div class="subject">담당자 전화번호 :&nbsp</div>
						<div class="inputboxes">
							<input type="text" style='font-size:16pt;'>
						</div>
					</div>
					<div class="subject_low">
						<div class="subject">담당자 이메일 :&nbsp</div>
						<div class="inputboxes">
							<input type="text" style='font-size:16pt;'>
						</div>
					</div>
				</div>
			</div>
			<div class="imgbox_area">
				<div class="img_area">
					<img src="./images/banner/map.png" />
				</div>
			</div>
			<div class="button_area">
				<div id="clickbox_area">
					<div id="clickbox_house">
						<a href=""><div class="rightblue">보내기</div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
