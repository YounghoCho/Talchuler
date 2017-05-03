<?
include('./HeadTab_Module_Owner.php');
?>

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

		// 터치 스크린에서 실수로 레이어를 닫는 경우를 막으려면.

</script>

<style>

#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100%-220px); /* for Chrome, Safari */
    width :    -moz-calc(100%-220px); /* for Firefox */
    width :         calc(100%-220px); /* for IE */
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
}

/*background는 일반 컨텐츠 영역임*/
#background{
	background:#339933;
	width:800px;
	height:800px;
	float:left;
	text-align:center;
}
/*background는 일반 컨텐츠 영역임*/

/*팝업 중 쉐이딩 되지 않은 영역*/
#note{
	background:#f3f3f3;
	width:300px;
	height:180px;
	float:left;
	padding:5 10;
}

#note input{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	height:37px;
	margin:10px;
}

#note .text_box{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	font-weight:bold;
	margin:20 0;
	padding:0 10;
}

#note .icon_box{
	overflow:auto;
	width:100%;
}

#note .icon_area{
	width:32%;
	font-size:14px;
	font-weight:bold;
	color:#757575;
	float:left;
	margin-left:10%;
	padding:10 0;
}

#note .icon_area img{
	float:left;
	height:20px;
}

#note .icon_text{
	width:40%;
	float:right;
	margin-right:10%;
	font-size:16px;
	color:#757575;
	font-weight:bold;
	padding:9.2 0;
}
/*팝업 중 쉐이딩 되지 않은 영역*/

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

/*팝업 중 쉐이딩 되지 않은 영역*/
.window{
	  display: none;
	  position:absolute;  
	  left:40%;
	  top:30%;
	  z-index:10000;
}
/*팝업 중 쉐이딩 되지 않은 영역*/



</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->

<div id="Main">
	<div id="background">
		<div id="mask"></div>
		<div class="window">
			<div id="note">
				<div class="text_box">
					전화하셔서 <span style='color:#ef7a10;'>'탈출러 예약자'</span>라고 알려주시면 표시된 최저가로 이용이 가능합니다.
				</div>
				<div class="icon_box">
					<div class="icon_area">
						<img src="images\icon\icon_phone.png"/>
						ESC신청
					</div>
					<div class="icon_text">000-000-0000</div>
				</div>
				<input type="button" href="#" class="close" style='	background:#66ccff; border:1px solid #06aeff; color:##000000; font-size:14px; font-weight:bold; padding:5 0 5 0; ' value="확인"/>
			</div>
		</div>
		<a href="#" class="openMask">검은 막 띄우기</a>
	</div>
</div>

<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div> <!--body를 닫는 태그입니다.-->
<?
include('./Footer_Module.php');
?>

