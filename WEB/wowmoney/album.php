<?
include('./include.php');
include('./HeadTab_Module_Owner.php');
?>

<!--거절 클릭 시 팝업 띄우는 기능-->
<script>
	function wrapWindowByMask(){
		//화면의 높이와 너비를 구한다.
		var maskHeight = $(window).height();  
		var maskWidth = $(document).width();  

		//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
		$('#mask').css({'width':maskWidth,'height':maskHeight});  
		// 플로팅 효과
		$('#mask').fadeIn(500); //시간 딜레이 1000=1s    
		$('#mask').fadeTo("slow",0.5); //띄우는 시간, 어둡기 투명도 조절

		//윈도우 같은 거 띄운다.
		$('.window').show();
	}

	$(document).ready(function(){
		//검은 막 띄우기
		$('.openMask').click(function(e){
			e.preventDefault();
			wrapWindowByMask();
		});

		//닫기 버튼을 눌렀을 때
		$('.window .close').click(function (e) {  
		    //링크 기본동작은 작동하지 않도록 한다.
		    e.preventDefault();  
		    $('#mask, .window').hide();  
		});       
/*
		//검은 막을 눌렀을 때
		$('#mask').click(function () {  
		    $(this).hide();  
		    $('.window').hide();  
		});     
*/
	});


</script>

<!--거절 클릭 시 팝업 띄우는 기능-->



<style>




#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100%-220px); /* for Chrome, Safari */
    width :    -moz-calc(100%-220px); /* for Firefox */
    width :         calc(100%-220px); /* for IE */
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
}

#Main_title_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100%-30px); /* for Chrome, Safari */
    width :    -moz-calc(100%-30px); /* for Firefox */
    width :         calc(100%-30px); /* for IE */
	overflow:auto;
	padding:30 0 30 30;
}

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100%-30px); /* for Chrome, Safari */
    width :    -moz-calc(100%-30px); /* for Firefox */
    width :         calc(100%-30px); /* for IE */
	overflow:auto;
	padding:2 0 2 30;
}

#Main_pagenumber_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100%-30px); /* for Chrome, Safari */
    width :    -moz-calc(100%-30px); /* for Firefox */
    width :         calc(100%-30px); /* for IE */
	overflow:auto;
	padding:80 0 10 30;
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

/*승인요청물총~선택승인 부분*/

#Check_count{
	width:100%;
	overflow:auto;
}

#Check_count .text{
	font-size:15px;
	font-weight:bold;
	color:#696969;
}

.left{
	float:left;
}

.right{
	float:right;
	margin-right:20px;
}

/*승인요청물총~선택승인 부분*/

/*이미지 쌓이는 영역*/

#image_stack{
	width:206px;
	overflow:auto;
	padding:20 3 10 3;
	float:left;
}

#image_stack .image_box{
	width:200px;
	color:#666666;
}

.product_img{
	width:200px;
	height:130px;
}


#image_stack .name{
	display:table;
	padding:5 0 5 10;
	
}

#image_stack .name img{
	display:table-cell;
	height:20px;
	margin:5 10 0 0;
}

#image_stack .title{
	display:table-cell;
	font-size:18px;
	font-weight:bold;
	padding-right:5px;
	vertical-align:middle;
}

#image_stack .sub{
	display:table-cell;
	font-size:15px;
	font-weight:bold;
	vertical-align:middle;
	padding-top:5px;
}

#image_stack .date{
	font-size:15px;
	font-weight:medium;
	padding:0 0 5 10;

}

/*이미지 쌓이는 영역*/

/*페이지 이동 영역*/

#page_number{
	overflow:auto;
	display:table;
	text-align:center;
	margin:auto;
}

#page_number .black{
	font-size:18px;
	font-weight:bold;
	float:left;
	padding:0 15px;
}

#page_number .black a{
	text-decoration:none;
	color:#666666;
}

#page_number .gray{
	font-size:18px;
	font-weight:bold;
	float:left;
	padding:0 15px;
}

#page_number .gray a{
	text-decoration:none;
	color:#c4c4c4;
}


/*페이지 이동 영역*/


/*클릭박스 디자인 영역==============================================================================*/

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

.clickbox_rightgray{  /*거절버튼 디자인*/
	background:#e1e1e1;
	border:1px solid #a8a8a8;
	color:#666666;
	font-size:17px;
	font-weight:bold;
	width:100%;
	padding:5 0 5 0;
	text-align:center;
	text-decoration:none;
	color:#3e3e3e;
}

#image_stack .image_box a{
	text-decoration:none;
	color:#3e3e3e;
}


/*클릭박스 디자인 영역==============================================================================*/

/*체크박스 디자인 영역==============================================================================*/

#all_check{
	float:right;
	display:table;
	padding-top:7px;
	margin-right:10px;
}

.checks {
	position: relative;
	color:#666666;
	font-size:15px;
	font-weight:bold;
} 

.checks input[type="checkbox"] { /* 실제 체크박스는 화면에서 숨김 */ 
	position: absolute; 
	width: 1px; 
	height: 1px; 
	padding: 0; 
	margin: -1px; 
	overflow: hidden; 
	clip:rect(0,0,0,0); 
	border: 0;
} 

.checks input[type="checkbox"] + label {
	display: inline-block; 
	position: relative; 
	cursor: pointer; 
	-webkit-user-select: none;
	-moz-user-select: none; 
	-ms-user-select: none; 
} 

.checks input[type="checkbox"] + label:before { /* 가짜 체크박스 */ 
	content: ' ';
	display: inline-block; 
	width: 21px; /* 체크박스의 너비를 지정 */ 
	height: 21px; /* 체크박스의 높이를 지정 */ 
	line-height: 21px; /* 세로정렬을 위해 높이값과 일치 */ 
	margin: -2px 8px 0 0; 
	text-align: center; 
	vertical-align: middle; 
	background: #fafafa; 
	border: 1px solid #cacece; 
	border-radius : 3px; 
	box-shadow: 0px 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
} 
	
.checks input[type="checkbox"] + label:active:before, .checks input[type="checkbox"]:checked + label:active:before {
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
} 

.checks input[type="checkbox"]:checked + label:before { /* 체크박스를 체크했을때 */ 
	content: '\2714'; /* 체크표시 유니코드 사용 */ 
	color: #ffffff; 
	background: #7bdeff; 
	border:1px solid #ffffff;
	box-shadow: 0px 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
}


/*체크박스 디자인 영역==============================================================================*/


/*=============================================== 거절 팝업 ======================================================*/

/*팝업 중 쉐이딩 되지 않은 영역*/
#note{
	background:#f3f3f3;
	width:500px;
	height:300px;
	float:left;
	padding:5 10;
}

#note .text_box{
	float:left;
	font-size:18px;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	font-weight:bold;
	margin:17 0 14 0;
	padding:0 10;
}

#note .checkbox_area{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	margin:0;
	padding:0 10;
}

#note .checkbox_content{
	width:100%;
	overflow:auto;
	position:static;
	padding:3 0; 
}

#note .checkbox_text{
	overflow:auto;
	font-size:14px;
	font-weight:bold;
	float:left;
	color:#757575;
	margin-left:2%;
	padding:5 0;
	margin-top:0px; /*체크박스와 높이 조잘위해 조정*/
	position:relative;
}

#note .clickbox_check{
	float:right;
	margin-right:3%;
	font-size:16px;
	padding:2 0;
	position:relative;
}



.auto_margin{
	margin:auto;
	height:1;
}
/*팝업 중 쉐이딩 되지 않은 영역*/

/*상세 입력란*/
#inputbox{
	width:100%;
	height:50px;
	margin:0;
	float:left;
	overflow:auto;
}

#inputbox input{
	width:94%;
	height:30px;
}
/*상세 입력란*/

/*어둡기를 조절하는 마스크*/
#mask {  
	  position:absolute;  
	  z-index:9000;  
	  background-color:#000;  
	  display:none;  
	  left:0;
	  top:0;
}
/*어둡기를 조절하는 마스크*/

/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정*/
.window{
	  display: none;
	  position:absolute;  
	  left:33%;
	  top:30%;
	  z-index:10000;
}
/*팝업 중 쉐이딩 되지 않은 영역 위치를 조정*/

/*클릭박스 디자인 영역*/
#clickbox_area{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	height:37px;
	padding:10px;
}

#clickbox_area input{
	height:100%;
	width:48%;
	font-size:14px;
	font-weight:bold;
	padding:5 0 5 0;
}
/*클릭박스 디자인 영역*/

/*체크박스 디자인 영역*/

.checks_popup {
	position: relative;
	color:#666666;
	font-size:15px;
	font-weight:bold;
} 

.checks_popup input[type="checkbox"] { /* 실제 체크박스는 화면에서 숨김 */ 
	position: absolute; 
	width: 1px; 
	height: 1px; 
	padding: 0; 
	margin: -1px; 
	overflow: hidden; 
	clip:rect(0,0,0,0); 
	border: 0;
} 

.checks_popup input[type="checkbox"] + label {
	display: inline-block; 
	position: relative; 
	cursor: pointer; 
	-webkit-user-select: none;
	-moz-user-select: none; 
	-ms-user-select: none; 
} 

.checks_popup input[type="checkbox"] + label:before { /* 가짜 체크박스 */ 
	content: ' ';
	display: inline-block; 
	width: 21px; /* 체크박스의 너비를 지정 */ 
	height: 21px; /* 체크박스의 높이를 지정 */ 
	line-height: 21px; /* 세로정렬을 위해 높이값과 일치 */ 
	text-align: center; 
	vertical-align: middle; 
	background: #fafafa; 
	border: 1px solid #cacece; 
	box-shadow: 0px 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
}
	
.checks_popup input[type="checkbox"] + label:active:before, .checks_popup input[type="checkbox"]:checked + label:active:before {
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
} 

.checks_popup input[type="checkbox"]:checked + label:before { /* 체크박스를 체크했을때 */ 
	content: '\2714'; /* 체크표시 유니코드 사용 */ 
	color: #ffffff; 
	background: #7bdeff; 
	border:1px solid #ffffff;
	box-shadow: 0px 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
}


/*체크박스 디자인 영역*/


/*=============================================== 거절 팝업 ======================================================*/



</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<?
//앨범 조회
$sql="select * from album;";
$q=mysql_query($sql);
?>
<form action="./admit_album.php" method="POST" id="form">	

<div id="Main">
	<div id="Main_title_area">
		<div id="Main_titlebar">
			<div class="title">앨범승인</div>
		</div>
	</div>
	<div id="Main_content_area">
		<div id="Check_count">
			<div class="right">
				
				<button class="clickbox_rightblue" style='float:right;' type="submit">선택승인</button>


				<div id="all_check">
				<!--	<div class="checks">
						<input type="checkbox" name="all" id="ex_chk" onclick="button_onclickall()">
						<label for="ex_chk">전체선택</label>
					</div>-->
				</div>
			</div>
		</div>
	<?	
	while($data=mysql_fetch_array($q)){

			?>
			
		<div id="image_stack">
			<div class="image_box">
				<div class="checks" style='top:30px; left:7px;'>
				<input type="checkbox" name="check<?echo $data['al_idx']?>" id="check<?echo $data['al_idx']?>"> <!--id-for값 다르게 설정해야 해당 체크란에 체크 됨-->
	
					<label for="check<?echo $data['al_idx']?>"></label>
				</div>
				<img src="../partner/albumAsk/<?echo ($data['filename'])?>.jpg" class="product_img" />
				<div class="name">
					<img src="images\icon\icon_phone.png" />
					<div class="title"><?echo ($data['p_shopName'])?></div>
					<div class="sub"> <?echo ($data['p_localName'])?></div>
				</div>
				<div class="date"><?echo ($data['date'])?> 제출</div>


				<!--오픈 시 나타나는 영역-->
				<div id="mask"></div>
				<div class="window">
					<div id="note">
						<div class="text_box">
							거절사유
						</div>
						<div class="checkbox_area">
							<div class="checkbox_content">
								<div class="checkbox_text">
									- 잘못 된 사진이 첨부되었으니 확인 후 재요청 부탁드립니다.
								</div>
								<div class="clickbox_check">
									<div class="checks_popup">
										<input type="checkbox" name="all" id="popup_chk">
										<label for="popup_chk"></label>
									</div>
								</div>
							</div>
							<div class="text_box" style='margin-top:30px; margin-bottom:10px; '>
								기타
							</div>
							<form action="url" id="inputbox">
								<input name="uesr_name" placeholder="  필요한 경우에 작성 바랍니다."/>
							</form>

						</div>
						<div id="clickbox_area">
							<input type="button" href="#" class="close" style='background:#e1e1e1; border:1px solid #a8a8a8; color:#666666; margin-right:3px;' value="취소"/>
							<!--class=close는 닫기 기능, 확인에는 다른링크 걸어야함-->
							<input type="button" href="" style='background:#66ccff; border:1px solid #06aeff; color:##000000; margin-left:3px;'onclick="location.href='./delete_album.php?al_idx=<?echo $data['al_idx']?>&p_id=<?echo $data['p_id']?>&filename=<?echo $data['filename']?>'" value="확인"/>
						</div>
					</div>
				</div>
				<!--오픈 시 나타나는 영역-->


					<a href="#" class="openMask"><div class="clickbox_rightgray">거절</div></a>
			</div>
		</div>
			<?
				}
	?>
	</div>
</form>

	<div id="Main_pagenumber_area">
		<div id="page_number">
			<div class="black"><a href=" ">◀</a></div>
			<div class="gray"><a href=" ">1</a></div>
			<div class="black"><a href=" ">2</a></div>
			<div class="gray"><a href=" ">3</a></div>
			<div class="gray"><a href=" ">4</a></div>
			<div class="gray"><a href=" ">5</a></div>
			<div class="black"><a href=" ">▶</a></div>
		</div>
	</div>
</div>



<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
