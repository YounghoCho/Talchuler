<?
@session_start();
?>
<html>
<head>
<!--Intenet Explorer에서 Javascript, JQuery가 동작안하는 것을 막는다-->
<!--호환문제 때문이며, 해결하는 코드는 바로 아래의 한줄 코드이다-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="./css/style.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>


<script>
	window.onload = function()
{
 // div height 설정
 popup_1();
}

</script>

<script>
	function popup_1(){
		//화면의 높이와 너비를 구한다.
		var popup_1Height = $(window).height();  
		var popup_1Width = $(document).width();  

		//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
		$('#mask').css({'width':popup_1Width,'height':popup_1Height});  
		// 플로팅 효과
		$('#mask').fadeIn(500); //시간 딜레이 1000=1s    
		$('#mask').fadeTo("slow",0.5); //띄우는 시간, 어둡기 투명도 조절

		//윈도우 같은 거 띄운다.
		$('.popup_1_window').show();
	}

	$(document).ready(function(){
		//검은 막 띄우기
		$('.popup_1_openMask').click(function(e){
			e.preventDefault();
			popup_1();
		});

		//닫기 버튼을 눌렀을 때
		$('.popup_1_window .close').click(function (e) {  
		    //링크 기본동작은 작동하지 않도록 한다.
		    e.preventDefault();  
		    $('#mask, .popup_1_window').hide();  
		});       
/*
		//검은 막을 눌렀을 때
		$('#mask').click(function () {  
		    $(this).hide();  
		    $('.popup_1_window').hide();  
		});     
*/
	});

		// 터치 스크린에서 실수로 레이어를 닫는 경우를 막으려면.

</script>

<style>

#max_WH{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width :    -moz-calc(100%) - 0px); /* for Firefox */
    width :         calc(100% - 0px); /* for IE */
	height:100%; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
}


/*팝업 중 쉐이딩 되지 않은 영역*/
#popup_1_note{
	background:#f3f3f3;
	width:300px;
	height:180px;
	float:left;
	padding:5 10;
}

#popup_1_note input{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	height:37px;
	margin:10px;
}

#popup_1_note .text_box{
	float:left;
	font-size:14px;
	width: -webkit-calc(100% - 20px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 20px); /* for Firefox */
    width:         calc(100% - 20px); /* for IE */
	font-weight:bold;
	margin:20 0;
	padding:0 10;
}

#popup_1_note .icon_box{
	overflow:auto;
	width:100%;
}

#popup_1_note .icon_area{
	width:32%;
	font-size:14px;
	font-weight:bold;
	color:#757575;
	float:left;
	margin-left:10%;
	padding:10 0;
}

#popup_1_note .icon_area img{
	float:left;
	height:20px;
}

#popup_1_note .icon_text{
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
	  display:inline;  
	  left:0;
	  top:0;
}
/*어둡기를 조절하는 마스크*/

/*팝업 중 쉐이딩 되지 않은 영역*/
.popup_1_window{
	  display:inline;
	  position:absolute;  
	  left:40%;
	  top:30%;
	  z-index:10000;
}
/*팝업 중 쉐이딩 되지 않은 영역*/



</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<div id="max_WH">
		<div id="mask"></div>
		<div class="popup_1_window">
			<div id="popup_1_note">
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
</div>
<!--
		<a href="#" class="popup_1_openMask">검은 막 띄우기</a>
-->
