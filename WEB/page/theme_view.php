<?
	include("include_head_back.php");
?>
<!--달력 S-->
<link href="./calendar/calendar.css" rel="stylesheet">
	<script>
		window.onload = function () {
			kCalendar('kCalendar');
		};
	</script>
<!--달력 E-->
<!--달력 S-->
<style>
#today{width:20%;height:50px;font-weight:bold;font-size:24px;text-align:center;float:left;display:inline;cursor:pointer;}
#maskarea{
	  display:none;
	  position:fixed; 
	  width:100%;
	  height:100%;
	  background-color:RGBA(1,1,1,0.8);  
	  left:0;
	  top:0;
	  border:1px solid;
	  z-index:10;
}
#kCalendar{position:fixed;margin-left:42%;margin-top:10%;background-color:#fff;}
#closeCalendar{position:absolute;right:40%;top:17%;width:30px;height:30px;background-color:none;border:none;color:#fff;font-size:22px;cursor:pointer;}
@media all and (max-width:800px){
	#today{width:40%;height:30px;font-size:16px;}
	#kCalendar{position:fixed;margin-left:18%;margin-top:22%;background-color:#fff;}
	#closeCalendar{right:10%;top:7%;}
}
</style>
<div id="maskarea">
	
	<div id="kCalendar"></div>
	<div id="closeCalendar" onclick="closeCalendar()" onKeypress="closeESC()">x</div>
	<script>
	function closeCalendar(){
		var maskarea=document.getElementById('maskarea');
		maskarea.style.display="none";
	}
	$(document).keyup(function(e) {
		 if (e.keyCode == 27) { // escape key maps to keycode `27`
			// <DO YOUR WORK HERE>
			maskarea.style.display="none";
		}
	});
	</script>
</div>
<!--달력 E-->	
<body style='font-family:"NotoSansCJKkr-Regular.eot"; color:#666666;'>
	<div id="main_container">
		<div class="path">
		<div class="container_inner pd44"><span>홈 > </span><span>검색 > </span><strong>테마 상세페이지</strong>
		</div>
		</div>
		<div class="choicearea d_none">
		<?include('./search_module.php');?>
		</div>
	</div>
		<div class="container_inner">
			<div class="themeview">
				<dl class="themeinfo" style='padding:0;'>
<? 
include("./include.php");
//게임정보호출
$sql="select * from game where g_idx='".$_GET['g_idx']."'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
//이미지정보호출
$imgsql="select filename from gameImage where g_idx='".$_GET['g_idx']."'";
$imgquery=mysql_query($imgsql);
$img=mysql_fetch_array($imgquery);

?>					
		<!--예약하기 팝업창 스크립트 및 스타일시트 S-->
			<script>
				function popupWindowByMask_3(){
					//화면의 높이와 너비를 구한다.
					var maskHeight_3 = $(window).height();
					var maskWidth_3 = $(document).width();  

					//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
					$('#mask').css({'width':maskWidth_3,'height':maskHeight_3});  
					// 플로팅 효과
					$('#mask').fadeIn(500); //시간 딜레이 1000=1s    
					$('#mask').fadeTo("slow",0.5); //띄우는 시간, 어둡기 투명도 조절

					//윈도우 같은 거 띄운다.
					$('.window_3').show();
				}

				$(document).ready(function(){
					//검은 막 띄우기
					$('.openMask_3').click(function(e){
						e.preventDefault();
						popupWindowByMask_3();
					});

					//닫기 버튼을 눌렀을 때
					$('.window_3 .close').click(function (e) {  
						//링크 기본동작은 작동하지 않도록 한다.
						e.preventDefault();  
						$('#mask, .window_3').hide();  
					});       
					/*
					//검은 막을 눌렀을 때
					$('#mask').click(function () {  
						$(this).hide();  
						$('.window_1').hide();  
					});     
					*/
				});
			</script>

<style>

/*어둡기를 조절하는 마스크(공통)*/
#mask{  
	  position:fixed;  
	  z-index:9000;  
	  background-color:#000;  
	  display:none;  
	  left:0;
	  top:0;
}
/*어둡기를 조절하는 마스크(공통)*/

/*팝업창 내부 클릭박스 디자인 영역(공통)*/
.popup_clickbox_area{
	position:absolute; 
	bottom:0;
	left:0;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	height:54px;
	padding:10px;
}

.popup_clickbox_area input{
	height:100%;
	width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
    width:    -moz-calc(100% - 0px); /* for Firefox */
    width:         calc(100% - 0px); /* for IE */
	font-size:14px;
	font-weight:bold;
}
/*팝업창 내부 클릭박스 디자인 영역(공통)*/

/*예약하기 버튼 팝업 s*/
	.window_3{
		  display: none;
		  position:fixed;  
		  left:40%;
		  top:35%;
		  z-index:10000;
	}

	#note_3{
		background:#ffffff;
		width:350px;
		height:220px;
		padding:5 10;
		color:#000000;
	}

	#note_3 .title_box_3{
		width: -webkit-calc(100% - 10px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 10px); /* for Firefox */
		width:         calc(100% - 10px); /* for IE */
		overflow:auto;
		margin:0 5px 10px 5px;
		padding-top:26px;
		font-weight:bold;
	}

	#note_3 .title_3{
		font-size:12pt;
		line-height:16pt;
		text-align:center;
		padding-bottom:8px;
		font-weight:bold;
	}

	#note_3 .input_box_3{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		margin:19px 0 0 0;
		padding:0px;
		font-size:12pt;
		font-weight:bold;
		overflow:hidden;
		display:inline-table;
	}

	#note_3 .email_change_area{
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
		overflow:auto;
		padding:0 20px;
	}

	#note_3 .mid_content_left{
		display:table-cell;
		text-align:left;
		vertical-align:middle;
		padding-left:20px;
		padding-right:20px;
		padding-bottom:0px;
		max-width:310px;
	}

	#note_3 .mid_content_left div{
		float:right;
		font-size:13pt;
		line-height:14pt;
		background:url('../images/icon/shop.png') no-repeat 0 0;
		padding-left:26px;
		min-height:20px;
		background-size:18px;
		background-position:0px 0px;
	}

	#note_3 .mid_content_right{
		display:table-cell;
		text-align:left;
		vertical-align:middle;
		font-size:14pt;
		line-height:14pt;
		padding-left:0px;
		padding-right:20px;
		max-width:310px;
		min-height:20px;
	}

	/*예약하기 버튼 팝업 e*/

</style>

			

					<style>
					#pricedd{float:left; padding-left:0px;width:80%;}
					#txt{font-size:14pt; font-weight:bold; color:black; padding-top:17px;}
					#gameinfo_wrap{
						width:510px; overflow:auto; float:left;
					}
					
					#game_location{
						width:100%;
						overflow:auto;
					}

					#game_location .mid_box{
						margin:0 auto;
						overflow:hidden;
						height:30px;
						line-height:30px
					}

					#game_location .mid_box img{
						float:left;
						width:18px;
						height:auto;
						padding:1px 0;
						margin-right:5px;
					}

					#game_location .mid_box div{
						float:left;
						font-size:15pt;
						line-height:15pt;
						color:black;
					}

					#game_location .mid_box span{
						background:url("../images/icon/shop.png") no-repeat 0 0; padding-left:30px; line-height:20pt;
						font-size:15pt;
						line-height:15pt;
					}

					#game_title{
						width:100%;
						font-size:30pt;
						color:black;
						font-weight:bold;
						line-height:32pt;
						padding-top:15px;
					}

					#game_subtitle{
						width:100%;
						font-size:17pt;
						line-height:18pt;
						color:#a7a7a7;
						font-weight:bold;
						padding-top:20px;
						margin-bottom:20px;
					}

					.gameinfo_widthbox{
						width:100%; 
						overflow:hidden; 
						float:left; 
						padding-left:20px; 
						margin-left:22px;
					}

					#gameinfo_imagebox{
						width:390px; overflow:auto; float:left; margin-right:60px;
					}

					#gameinfo_imagebox .game_imagee{
						position:relative; float:left; border:0px solid #aaa; width:390px; height:540px; text-align:center; display:table-cell; background:#c3c3c3;z-index:1;
					}
					#gameinfo_imagebox .game_imagee #libon{position:relative; float:left; width:140px; height:140px; text-align:center; z-index:3;padding:0;background-color:none;}
					#gameinfo_imagebox .game_imagee img{ /*width:auto; max-width:390px; */
						position:absolute; width:100%; height:auto; max-height:540px; max-width:390px; border:0px solid #aaa; margin:auto; top:0; bottom:0; left:0; right:0; padding:25px;
					}

					#icon_wrap{
						width:100%;
						overflow:auto;
						margin:0;
					}

					.icon_new1{
						color:black; font-weight:bold; margin-top:1px;
					}
					.icon_new1 div{
						padding-bottom:8px; margin-top:-1px;
					}

					.icon_new3{
						color:black; font-weight:bold; margin-top:2px;
					}
					.icon_new3 div{
						padding-bottom:8px; margin-top:-2px;
					}

					.icon_new2{
						color:black; font-weight:bold; margin-top:2px;
					}
					.icon_new2 div{
						padding-bottom:8px; margin-top:-2px;
					}
					
					.game_detail{
						font-size:12pt; color:black; margin-top:17px; 
						letter-spacing:-1px; /*자간*/
						word-spacing:3px; /*어간*/
						line-height:26px; /*행간*/
					}
					
		/*가격정보 공간2 S*/
		.price_container2{
			float:left;
			width : -webkit-calc(100% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 0px); /* for Firefox */
			width :         calc(100% - 0px); /* for IE */
			height:35px;
			background-color:#eeeeee;
			overflow:hidden;
			font-weight:bold;
			margin-top:0px;
			padding:2px 50px 0px 50px;
			padding-left:70px;
			border:none;
			border:1px solid #cccccc;
		}

		 .how_many_price_box { /*인원-가격 박스*/
			padding-top:6px;
			float:left;
		}

		 .how_many_wave { /*중간 물결*/
			padding-top:6px;
			margin:0 5px;
			float:left;
			font-size:11pt;
			text-align:center;
			font-weight:bold;
		}

		.how_many { /*인원-가격 박스 중 인원*/
			float:left;
			font-size:10pt;
			color:#999999;
			margin-right:5px;
		}

		 .how_price { /*인원-가격 박스 중 가격*/
			float:left;
			font-size:11pt;
			color:#333333;
			font-weight:bold;
		}


		/*가격정보 공간2 E*/

		/*가격정보 공간 (탈출 프라이스)*/
		 .price_container{
			float:left;
			width : -webkit-calc(100% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 0px); /* for Firefox */
			width :         calc(100% - 0px); /* for IE */
			height:35px;
			background-color:#eeeeee;
			overflow:hidden;
			font-weight:bold;
			padding:0px 0px 0px 70px;
			border:none;
			border-bottom:1px solid #cccccc;
			border-left:1px solid #cccccc;
			border-right:1px solid #cccccc;
		}

		 .talchul_price{
			height:30px;
			float:left;
			padding-top:6px;
			overflow:hidden;
		}

		 .talchul_price_text{
			font-size:14pt;
			line-height:20pt;
			text-align:left;
			float:left;
			color:#333333;
		}

		 .gray_price{
			width : -webkit-calc(50% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(50% - 0px); /* for Firefox */
			width :         calc(50% - 0px); /* for IE */
			height:30px;
			float:left;
			padding-top:3px;
			padding-left:15px;
			overflow:hidden;
		}

		 .arrow_icon{
			overflow:hidden;
			float:left;
			margin:0 11px;
			padding-top:8px;
		}

		 .arrow_icon img{
			
		}

		 .blue_price{
			height:30px;
			color:#0066cc;
			float:left;
			padding-top:3px;
			padding-right:15px;
			overflow:hidden;
		}

		 .info_title{
			font-size:11pt;
			line-height:20pt;
			text-align:left;
			float:left;
			margin-left:20px;
			color:#0099ff;
			padding-top:3px;
		}

		 .info_price{
			font-size:15pt;
			line-height:18pt;
			text-align:right;
			float:left;
			margin-left:10px;
			color:#0099ff;
			padding-top:3px;
		}

		 .blue_price img{
			float:left;
			margin:5px 0 0 4px;
		}


		/*가격정보 공간 (탈출 프라이스)*/


					@media all and (max-width: 800px){
						#pricedd{width:100%;}
						#txt{font-size:10pt; font-weight:bold; color:black; padding-top:10px;}
						#gameinfo_wrap{
							width:100%; overflow:auto; float:left;
						}		
						
						#gameinfo_imagebox{
							width:100%; overflow:auto; float:left; margin:0px auto;
						}

						#gameinfo_imagebox .game_imagee{
							position:relative; float:left; border:0px solid #aaa; width:100%; height:420px; text-align:center; display:table-cell; background:#c3c3c3; overflow:auto; margin:0 auto;
						}
						#gameinfo_imagebox .game_imagee #libon{position:relative; float:left; width:110px; height:110px; text-align:center; z-index:3;padding:0;background-color:none;}
						#gameinfo_imagebox .game_imagee img{
							position:absolute; width:100%; height:auto; max-height:400px; max-width:310px; border:0px solid #aaa; background:none; margin:auto; top:0; bottom:0; left:0; right:0; padding:0;
						}
						
						#icon_wrap{
							width:200px;
							overflow:auto;
							margin:0 auto;
							text-align:center;
						}

						.icon_new1{
							color:black; font-weight:bold; margin-top:1px; width:25%; margin:auto;
						}
						.icon_new1 div{
							padding:0 0 8 8; margin-top:-1px; font-size:12pt;
						}

						.icon_new3{
							color:black; font-weight:bold; margin-top:2px; width:40%; margin:auto;
						}
						.icon_new3 div{
							padding:0 0 8 8; margin-top:-2px; font-size:12pt;
						}

						.icon_new2{
							color:black; font-weight:bold; margin-top:2px; width:25%; margin:auto;
						}
						.icon_new2 div{
							padding:0 0 8 8; margin-top:-2px; font-size:12pt;
						}
						
						.game_detail{
							font-size:10pt; line-height:18pt; color:black; margin-top:17px;
						}

						#game_location{
							width:100%;
							font-size:15pt;
							line-height:15pt;
							color:black;
							padding:0;
							overflow:hidden;
							text-align:center;
						}

						#game_location .mid_box{
							margin:0 auto;
							overflow:hidden;
							text-align:center;
							margin-bottom:5px;
							padding-top:3px;
						}

						#game_location .mid_box img{
							float:left;
							width:18px;
							height:auto;
							padding:1px 0;
							margin-right:5px;
						}

						#game_location .mid_box div{
							text-align:center;
							float:left;
							font-size:15pt;
							line-height:15pt;
							color:black;
						}

						#game_location .mid_box span{
							background:url("../images/icon/shop.png") no-repeat 0 0; padding-left:23px;
							background-size:15px;
							font-size:12pt;
							line-height:15pt;
							color:#a7a7a7;
							background-position:0px 2px;
							margin-top:6px;
						}
						

						#game_title{
							width:100%;
							font-size:23pt;
							color:black;
							font-weight:bold;
							line-height:24pt;
							padding-top:0px;
						}

						#game_subtitle{
							width:100%;
							font-size:14pt;
							line-height:15pt;
							color:#a7a7a7;
							font-weight:bold;
							padding-top:10px;
							margin-bottom:10px;
						}

						.gameinfo_widthbox{
							width:100%;
							margin:0;
							padding:0;
							overflow:hidden; 
							float:left; 
							text-align:center;
						}

						.game_price_top{
							text-align:left;
							margin-bottom:0px;
							padding-left:55px;
						}

						.game_price_top span{
							font-size:14pt;
						}
						
						.game_price_bot{
							padding-left:4%;
							height:40px;
						}

						.game_price_left{
							width:55%;
							margin-right:0px;
						}

						.game_price_left img{
							width:30px;
							height:auto;
							margin-right:5px;
							margin-top:0px;
						}

						.game_price_left_text{
							font-size:26pt;
							line-height:26pt;
						}
						.game_price_left_text div{
							font-size:16pt;
							line-height:20pt;
							padding-top:8px;
						}

						.game_price_left{
							overflow:visible;
						}

						.game_price_right{
							height:100%;
							padding-top:7px;
							vertical-align:bottom;
						}

						/*팝업창 내부 클릭박스 디자인 영역(공통) S */
						.popup_clickbox_area{
							position:absolute; 
							bottom:0;
							left:0;
							width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
							width:    -moz-calc(100% - 0px); /* for Firefox */
							width:         calc(100% - 0px); /* for IE */
							height:54px;
						}

						.popup_clickbox_area input{
							height:100%;
							width: -webkit-calc(66% - 0px); /* for Chrome, Safari */
							width:    -moz-calc(66% - 0px); /* for Firefox */
							width:         calc(66% - 0px); /* for IE */
							margin:0 17%;
							margin-bottom:5%;
							font-size:11px;
							font-weight:bold;
						}
						/*팝업창 내부 클릭박스 디자인 영역(공통) E */

						/*예약하기 버튼 팝업 s*/
						.window_3{
							  display: none;
							  position:fixed;  
							  left:0%;
							  top:35%;
							  z-index:10000;
						}

						#note_3{
							background:#ffffff;
							width:70%;
							margin:0 15%;
							height:180px;
							padding:5 10;
							color:#000000;
						}

						#note_3 .title_box_3{
							width: -webkit-calc(100% - 40px); /* for Chrome, Safari */
							width:    -moz-calc(100% - 40px); /* for Firefox */
							width:         calc(100% - 40px); /* for IE */
							overflow:auto;
							margin:0 20px 8px 20px;
							padding-top:20px;
							font-weight:bold;
						}

						#note_3 .title_3{
							font-size:10pt;
							line-height:14pt;
							text-align:center;
							padding-bottom:6px;
							font-weight:bold;
						}

						#note_3 .input_box_3{
							width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
							width:    -moz-calc(100% - 0px); /* for Firefox */
							width:         calc(100% - 0px); /* for IE */
							margin:4px 0 0 0;
							padding:0px;
							font-size:10pt;
							font-weight:bold;
							overflow:hidden;
							display:inline-table;
						}

						#note_3 .email_change_area{
							width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
							width:    -moz-calc(100% - 0px); /* for Firefox */
							width:         calc(100% - 0px); /* for IE */
							overflow:auto;
							padding:0 16px;
						}

						#note_3 .mid_content_left{
							display:table-cell;
							text-align:left;
							vertical-align:middle;
							padding-left:15px;
							padding-right:10px;
							padding-bottom:0px;
						}


						#note_3 .mid_content_left div{
							float:right;
							font-size:10pt;
							line-height:10pt;
							vertical-align:middle;
							background:url('../images/icon/shop.png') no-repeat 0 0;
							padding-left:22px;
							min-height:0px;
							background-size:14px;
							background-position:0px 0px;
						}

						#note_3 .mid_content_right{
							display:table-cell;
							text-align:left;
							vertical-align:middle;
							padding-left:0px;
							padding-right:15px;
							min-height:0px;
							font-size:11pt;
							line-height:11pt;
						}

						/*예약하기 버튼 팝업 e*/

		/*가격정보 공간2 S*/
		.price_container2{
			float:left;
			width : -webkit-calc(100% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 0px); /* for Firefox */
			width :         calc(100% - 0px); /* for IE */
			height:35px;
			background-color:#eeeeee;
			overflow:hidden;
			font-weight:bold;
			margin-top:0px;
			padding:2px 50px 0px 50px;
			padding-left:40px;
			border:none;
			border:1px solid #cccccc;
		}

		 .how_many_price_box { /*인원-가격 박스*/
			padding-top:6px;
			float:left;
		}

		 .how_many_wave { /*중간 물결*/
			padding-top:6px;
			margin:0 5px;
			float:left;
			font-size:11pt;
			text-align:center;
			font-weight:bold;
		}

		.how_many { /*인원-가격 박스 중 인원*/
			float:left;
			font-size:10pt;
			color:#999999;
			margin-right:5px;
		}

		 .how_price { /*인원-가격 박스 중 가격*/
			float:left;
			font-size:11pt;
			color:#333333;
			font-weight:bold;
		}


		/*가격정보 공간2 E*/

		/*가격정보 공간 (탈출 프라이스)*/
		 .price_container{
			float:left;
			width : -webkit-calc(100% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(100% - 0px); /* for Firefox */
			width :         calc(100% - 0px); /* for IE */
			height:35px;
			background-color:#eeeeee;
			overflow:hidden;
			font-weight:bold;
			padding:0px 0px 0px 40px;
			border:none;
			border-bottom:1px solid #cccccc;
			border-left:1px solid #cccccc;
			border-right:1px solid #cccccc;
		}

		 .talchul_price{
			height:30px;
			float:left;
			padding-top:6px;
			overflow:hidden;
		}

		 .talchul_price_text{
			font-size:14pt;
			line-height:20pt;
			text-align:left;
			float:left;
			color:#333333;
		}

		 .gray_price{
			width : -webkit-calc(50% - 0px); /* for Chrome, Safari */
			width :    -moz-calc(50% - 0px); /* for Firefox */
			width :         calc(50% - 0px); /* for IE */
			height:30px;
			float:left;
			padding-top:3px;
			padding-left:15px;
			overflow:hidden;
		}

		 .arrow_icon{
			overflow:hidden;
			float:left;
			margin:0 11px;
			padding-top:8px;
		}

		 .arrow_icon img{
			
		}

		 .blue_price{
			height:30px;
			color:#0066cc;
			float:left;
			padding-top:3px;
			padding-right:15px;
			overflow:hidden;
		}

		 .info_title{
			font-size:11pt;
			line-height:20pt;
			text-align:left;
			float:left;
			margin-left:20px;
			color:#0099ff;
			padding-top:3px;
		}

		 .info_price{
			font-size:15pt;
			line-height:18pt;
			text-align:right;
			float:left;
			margin-left:10px;
			color:#0099ff;
			padding-top:3px;
		}

		 .blue_price img{
			float:left;
			margin:5px 0 0 4px;
		}


		/*가격정보 공간 (탈출 프라이스)*/

					
	
					}

					</style>
					<?
					$sql="select p_shopName, p_localName, p_agreement5 from partner where p_id='".$data['p_id']."'";
					$q=mysql_query($sql);
					$pppp=mysql_fetch_array($q);
					?>
					<div class="gameinfo_widthbox">
						<div id="game_location" style="text-align:left">
							<div class="mid_box">
								<!--<img src="../images/icon/shop.png" style=''/>이 이미지는 아래 span에 background로 걸려있음.-->
								<span style=''><?echo ($pppp['p_shopName'])?>&nbsp;<?echo ($pppp['p_localName'])?></span>
							</div>
						</div>
						<div id="game_title">
							<?echo ($data['g_title'])?>
						</div>
						<div id="game_subtitle">
							<?echo ($data['g_subtitle'])?>
						</div>
					</div>
					<div class="gameinfo_widthbox" style=''>
						<div id="gameinfo_imagebox" style=''>

							<dt class="game_imagee"style=''>
							<?
							if($pppp['p_agreement5']==2){
							?>
								<img id="libon" src="../images/banner/libon.png"/>
								<?}?>
								<img src="../manager/gameImage/<?echo ($img['filename'])?>.jpg" style='z-index:2'/>

							</dt>
						</div>

						<div id="gameinfo_wrap">
							<dd id="pricedd">
								<ul style='width:100%; margin-top:0px;'>
								<div class="price_container2">
			<div class="how_many_price_box">
				<?
				//2인이 아니라 3인~4인부터 시작할 경우
				$i=2; 
				if($data['g_p2']=='0')
					$i++;
				if($data['g_p2']=='0' && $data['g_p3']=='0')
					$i++;
				if($data['g_p2']=='0' && $data['g_p3']=='0')
					$i++;
				$firstPriceIndex='g_p'.$i;
				?>
				<div class="how_many">(<?echo $i?>인)</div>
				<div class="how_price"><?echo number_format($data[$firstPriceIndex])?>원</div>
			</div>
			<div class="how_many_wave">&nbsp~&nbsp</div>
			<div class="how_many_price_box">
				<?
				//8인이 아니라 4인~7인으로 끝날경우
				$k=8; 
				if($data['g_p8']=='0')
					$k--;
				if($data['g_p8']=='0' && $data['g_p7']=='0')
					$k--;
				if($data['g_p8']=='0' && $data['g_p7']=='0' && $data['g_p6']=='0')
					$k--;
				if($data['g_p8']=='0' && $data['g_p7']=='0' && $data['g_p6']=='0' && $data['g_p5']=='0')
					$k--;
				if($k>$i && $data['g_p8']=='0' && $data['g_p7']=='0' && $data['g_p6']=='0' && $data['g_p5']=='0' && $data['g_p4']=='0')
					$k--;
				$lastPriceIndex='g_p'.$k;
				?>
				<div class="how_many">(<?echo $k?>인)</div>
				<div class="how_price"><?echo number_format($data[$lastPriceIndex])?>원</div>
			</div>
			<script>
			var pbpa=1;
			function detail(){
				var price_by_person_area= document.getElementById('price_by_person_area');
				if(pbpa>0){
				price_by_person_area.style.display="block";
				pbpa=-1;
				}else{
				price_by_person_area.style.display="none";
				pbpa=1;
				}
			}
			</script>
		</div>
		<div class="price_container"> <!--가격을 담는 공간-->
			<?if($data['g_weekprice']!='0'){?>
			<div class="talchul_price">
				<div class="talchul_price_text">탈출 프라이쓰</div>
			</div>

			<div class="blue_price">
				
				<div class="info_title">1인</div>
				<div class="info_price"><?echo number_format($data['g_weekprice'])?>원</div>
				<img src="../images/icon/strong.png"/>

			</div>
			<?}?>
		</div>
								</ul>
								<ul style='width:100%; margin-top:17px;'>
								<!--초기 icon_new1,2,3 초기 css위치-->
								<div id="icon_wrap">
									<li class="icon_new1" style=''>
										<div style='margin-top:-1px;'>
											<em style='font-size:14pt;'>난이도</em> <?echo ($data['g_level'])?>
										</div>
									</li>
									<li class="icon_new3" style=''>
										<div style='margin-top:-2px;'>
											<em style='font-size:14pt'>인원수</em> <?echo ($data['g_people'])?>~<?echo ($data['g_people2'])?>
										</div>
									</li>
									<li class="icon_new2" style=''>
										<div style='margin-top:-2px;'>
											<em style='font-size:14pt'>공포감</em> <?echo ($data['g_horror'])?>
										</div>
									</li>
								</div>
								<?if($data['g_skill1']!='0'||$data['g_skill2']!='0'||$data['g_skill3']!='0'||$data['g_skill4']!='0'||$data['g_skill5']!='0'||$data['g_skill6']!='0'){?>
								<li class="txt" id="txt">필요능력<span> 
								<?
								//필요능력에 따른 이미지 삽입부
									if($data['g_skill1']){
										?><img id="skill" src="../images/icon/skill1.png"/><?
									}if($data['g_skill2']){
										?><img id="skill" src="../images/icon/skill2.png"/><?
									}if($data['g_skill3']){
										?><img id="skill" src="../images/icon/skill3.png"/><?
									}if($data['g_skill4']){
										?><img id="skill" src="../images/icon/skill4.png"/><?
									}if($data['g_skill5']){
										?><img id="skill" src="../images/icon/skill5.png"/><?
									}if($data['g_skill6']){
										?><img id="skill" src="../images/icon/skill6.png"/><?
									}
								?>
								<?
								}
								?>
								</span></li>
								</ul>
								<div class="game_detail" style='width:100%;'>
								<?echo nl2br($data['g_content'])?>	
								</div>
							</dd>
						</div>
					</div>
				</dl>
<style>
#skill{margin:2px;}
.rank_con{
	width:500px;
	height:170px;
	text-align:center;
	float:left;
	display:inline;
	font-size:130%;
	line-height:28px;
}
.rank_title{
	width:100%;
	height:30px;
	background-color:#ccc;
	font-weight:bold
}
.price_con{
	width:100%;
	text-align:center;
	float:left;
	display:inline;
	font-size:130%;
	line-height:28px;
	margin-left:22px;
}
.price_title{
	width:100%;
	height:32px;
	border-top:2px solid #ccc;
	border-bottom:2px solid #ccc;
	line-height:20pt;
	font-weight:bold;
}
.enter{
	display:none;
}
@media all and (max-width:1041px){
#skill{margin:1px;width:40px;}
.rank_con{
	width:100%;
	height:auto;
	text-align:center;
	font-size:100%;
	float:left;
	display:block;
	margin-bottom:10px;
}
.rank_title{
	display:none;
}
.ranking{
	width:50%;
	float:left;
	display:inline-block;
	line-height:20px;
	text-align:center;
	padding:3px;
}
.price_con{
	width:100%;
	margin-left:-2px;
	height:auto;
	text-align:center;
	font-size:100%;
	float:left;
	display:block;
}
.price_title{
	width:100%;
	height:25px;
	border-top:1px solid #ccc;
	border-bottom:1px solid #ccc;
	font-weight:bold
}
.g_price{	
	padding:5px;
	font-size:100%;
	float:left;
	text-align:center;
	margin-top:5px;
	margin-bottom:5px;
	width:100%;
}
}
</style>

<style>
.mySlides {display:none; margin-left:8%;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -30px;
  color: #56DCFC;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}


/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover, .dot2:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/*예약 시간 css*/

.hiddenarea_timetable{ /*테이블 전체*/
	margin-top:20px;
	width:85%;
	overflow:auto;
	font-size:12pt;
	float:left;
}

.hiddenarea_timearray{ /*시간 박스 모음*/
	 float:left;
	 height:100%;
	 width:100%;
}

.hiddenarea_timecell_top{ /*시간박스 하나*/
	float:left;
	width : -webkit-calc(14.8% - 10px ); /* for Chrome, Safari */
    width :    -moz-calc(14.8% - 10px ); /* for Firefox */
    width :         calc(14.8% - 10px ); /* for IE */
	margin:0 5px 5px 5px;
	height:35px;
	display:table;
	text-align:center;
}
#marginleft{margin-left:10px;}
.hiddenarea_timecell_top input{
	width:100%;
	height:100%;
	border:2px solid #56DCFC;
	background:#ffffff;
	outline:none;
	font-size:12pt;
	color:#666666;
	display:table-cell;
	vertical-align:middle;

}

.hiddenarea_timecell_bot{ /*시간박스 하나*/
	float:left;
	width : -webkit-calc(14.8% - 10px - 4px); /* for Chrome, Safari */
    width :    -moz-calc(14.8% - 10px - 4px); /* for Firefox */
    width :         calc(14.8% - 10px - 4px); /* for IE */
	margin:5px 5px 5px 5px;
	height:35px;
	display:table;
	text-align:center;
}

.hiddenarea_timecell_bot input{
	width:100%;
	height:100%;
	border:2px solid #56DCFC;
	background:#ffffff;
	outline:none;
	font-size:12pt;
	color:#666666;
	display:table-cell;
	vertical-align:middle;
}

.hiddenarea_reservation{ /*예약버튼 공간*/
	float:right; 
	width : -webkit-calc(15% - 2px); /* for Chrome, Safari */
    width :    -moz-calc(15% - 2px); /* for Firefox */
    width :         calc(15% - 2px); /* for IE */
	height:79px;
	margin-top:20px;
	display:table;
	text-align:center;
	border:2px solid #56DCFC;
}

.hiddenarea_reservation_inner{ /*예약버튼 내부*/
	display:table-cell;
	vertical-align:middle;
	font-weight:bold;
	background-color:#56DCFC;
	color:white;
	cursor:pointer;
}
#topspace{margin-left:0px;}
#botspace{margin-right:0px;}

#albumsize_area{overflow:hidden;}
.albumsize_box{position:relative; float:left; border:0px solid #aaa; width:281px; height:281px; text-align:center; display:table-cell; background:none;}
.albumsize_box img{position:absolute; width:auto; height:100%; max-width:281px;  max-height:281px; border:0px solid #aaa; background:#c3c3c3; margin:auto; top:0; bottom:0; left:0; right:0;}

/*map*/
.hiddenarea{display:none; margin:0 auto;}
#map{width:90%;height:400px; margin:3% 5%; display:none;}
.slideshow-container{display:none;}
#dot{display:none;}

.dv{
	width:16.6%;
	margin-top:10px;
	float:left;
	text-align:center;
}
.hiddenarea_date{
	width:100%;
	height:60px;
	margin-top:20px;
	padding-top:5px;
}
@media all and (max-width: 1024px) {
#marginleft{margin-left:3px;}
 .prev, .next,.text {font-size: 11px}
 .hiddenarea_timetable{width:80%;}
 .hiddenarea_timetable input{
 	-webkit-appearance: none;
	-webkit-border-radius:0;
	}
 .hiddenarea_timearray{width:100%;}
 .hiddenarea_timecell_top{margin:0 3px 3px 3px;font}
 .hiddenarea_timecell_bot{margin:0 3px 3px 3px;}
 .hiddenarea_timecell_top input,.hiddenarea_timecell_bot input{font-size:11pt;padding-left:2px;padding-right:2px;}
 .openMask_3{float:left; width:20%;}
.hiddenarea_reservation{width:100%;}
.hiddenarea_reservation_inner{width:100%;}
.hiddenarea{width:90%; margin:0 auto;}
 #topspace{margin-left:3px;}
 #botspace{margin-right:6px;}
.albumsize{height:90px}

.albumsize_box{position:relative; float:left; border:0px solid #aaa; width:70%; height:400px; text-align:center; display:table-cell; background:none; margin:0 15%;}
.albumsize_box img{position:absolute; width:100%; height:auto; max-height:400px; border:0px solid #aaa; background:#c3c3c3; top:0; bottom:0; left:0; right:0;}

 /*map*/
 #map{width:90%;margin-left:5%;height:150px;}
 .dot2 {
  cursor:pointer;
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #999;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
 .prev2, .next2 {
  cursor: pointer;
  position: absolute;
  top: 200px;
  width: auto;
  padding: 14px;
  margin-top: -30px;
  color: #56DCFC;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 3px;
}
.next2 {right: 0;margin-right:10px;}
.prev2 {left: 0;margin-left:10px;}

.dv{
	width:33.3%;
	margin-top:0px;
	float:left;
	text-align:center;
}
 }
 /*Date*/
.hiddenarea_date{
	width:100%;
	height:30px;
	margin-top:20px;
	padding-top:5px;
}
.hiddenarea_year{
	width:20%;
	height:50px;
	margin-left:20px;
	padding:10px 0 10px 20px;
	vertical-align:middle;
	float:left;
}
.hiddenarea_day{
	width:65%;
	height:50px;
	margin-left:100px;
	float:left;
}
.year{
	color:black;
	font-size:17pt;
}
.mySlidesa{display:none; margin-left:20px;text-align:center; padding:10px 0 0 0}
.slideshow-containera {
  max-width: 100%;
  position: relative;
  margin: auto;
}

.preva, .nexta {
  cursor: pointer;
  position: absolute;
  width:auto;
  margin-top: -23px;
  color: #56DCFC;
  font-weight: bold;
  font-size: 20pt;
  border-radius: 0 3px 3px 0;
}

.nexta {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.date_num{
	background-color:#ececec;
	color:#666666;
	border:0px;
	font-size:15pt;
	margin-right:30px;
	font-weight:bold;
}


</style>

				<ul class="orderlist">
				<!--	<div class="rank_con">
						<div class="rank_title">순위</div>
						<?
						$sql="select * from game_rank";
						$query=mysql_query($sql);
						//sorting알고리즘 없이 그냥 순서대로 출력할게 지금은

						$i=1;//전역변수
						while($result=mysql_fetch_array($query)){
							?>
							<div class="ranking">
							<?
							
							if($i==1){
							?>
								<img src="../images/icon/icon_master.png" alt="마스터" width="20px"/>
								<?echo ($result['grk_time'])?> (<?echo ($result['g_user'])?>)
							<?
							}else{
							?>
							<?echo ($i)?>위
							<?echo ($result['grk_time'])?> (<?echo ($result['g_user'])?>)
						<?
							}
							$i += 1;
							?>
							</div>
							<?
						}
						?>							
					</div>-->

					<div class="price_con">
						<div class="price_title">게임가격</div>
							<div class="g_price">
								<?
								$sql="select * from game where g_idx='".$_GET['g_idx']."'";
								$query=mysql_query($sql);
								$gdata=mysql_fetch_array($query);
								
								if($gdata['g_p1']>0){
									?><div class="dv">1인:&nbsp;<?echo number_format($gdata['g_p1'])?>원</div><?
								}if($gdata['g_p2']>0){
									?><div class="dv">2인:&nbsp;<?echo number_format($gdata['g_p2'])?>원</div><?
								}if($gdata['g_p3']){
									?><div class="dv">3인:&nbsp;<?echo number_format($gdata['g_p3'])?>원</div><?
								}if($gdata['g_p4']){
									?><div class="dv">4인:&nbsp;<?echo number_format($gdata['g_p4'])?>원</div><?
								}if($gdata['g_p5']){
									?><div class="dv">5인:&nbsp;<?echo number_format($gdata['g_p5'])?>원</div><?
								}if($gdata['g_p6']){
									?><div class="dv">6인:&nbsp;<?echo number_format($gdata['g_p6'])?>원</div><?
								}if($gdata['g_p7']){
									?><div class="dv">7인:&nbsp;<?echo number_format($gdata['g_p7'])?>원</div><?
								}if($gdata['g_p8']){
									?><div class="dv">8인:&nbsp;<?echo number_format($gdata['g_p8'])?>원</div><?
								}
								?>
							</div>
						</div>
					</div>
				</ul>
			</div>
		</div>
	<!--예약페이지로 보내는 form-->
	<form id="reserve_form" method="POST" action="./reserve_page.php">
		<div class="tabarea" style="background:#ececec;">
			<div class="container_inner pd44" style="background-color:#ececec; padding-bottom:10px;">
				<div class="tab">
					<a class="on" style="width: -webkit-calc(50% - 4px); width: -moz-calc(50% - 4px); width: calc(50% - 4px);" onclick="mapfunction('a')"><span>예약정보</span></a>
				<!--	<a href="#self"><span>게임후기</span></a>-->
					<a style="width: -webkit-calc(50% - 4px); width: -moz-calc(50% - 4px); width: calc(50% - 4px); margin-left:0px;" onclick="mapfunction('b')"><span>카페정보</span></a>
				</div>
				
				<div class="hiddenarea on">
					<div class="hiddenarea_date">
					<!--달력 호출-->
					<?
					//날짜선택
					if($_GET['year']=='')
						$date=substr(date("Y-m-d H:i:s"),0,10);
					else{
						$date=$_GET['year'].'-'.$_GET['month'].'-'.$_GET['day'];
					}
					?>
					<div id="today" onclick="showCalendar()">
						<?echo $date?>&nbsp;>
					</div>
<script>
function showCalendar(){
	var c=document.getElementById('maskarea');
	c.style.display="block";
}
</script>
				</div>
					<!--시간 설정박스 컬러변경 활성 /중복가능-->
					<!--<script language="JavaScript">
						function colorchange(obj){
							if(obj.style.background == "none"){
								obj.style.background = '#56DCFC';
								obj.style.color = '#ffffff';
							}
							else{
								obj.style.background = "none";
								obj.style.color = '#666666';
							}
						}
					</script>
					-->
					<!--시간 설정박스 컬러변경 활성 /중복가능-->

					<!--시간 설정박스 한개만 on-->
					<script language="JavaScript">
					var arr=new Array();
					for(var i=0; i<16; i++)
						arr[i]='0';
						
						function changetime(time){ //색상비교 후 값 반환
							/*var hour = document.getElementsByClassName("time_button");
								
								if(arr[time]=='0'){
									hour[time].style.background = '#56DCFC';
									hour[time].style.color = '#ffffff';
									arr[time]='1';
								}else{
									hour[time].style.background = '#fff';
									hour[time].style.color = 'black';
									arr[time]='0';
								}*/
						}
					</script>
					<!--시간 설정박스 한개만 on-->
					<?
					//시간정보
					$sql="select * from game_time where g_idx='".$_GET['g_idx']."'";
					$q=mysql_query($sql);
					$time=mysql_fetch_array($q);
					//예약정보
					
					//오늘
					$sql="select * from game_reserve where g_idx='".$_GET['g_idx']."' and gr_date='".$date."'";
					$q=mysql_query($sql);
					$ava=mysql_fetch_array($q);
					?>
					<div class="hiddenarea_timetable">
						<div class="hiddenarea_timearray">
							<?if($time['gt_1']){
								if($ava['gr_1']){?>
									<script>setTimeout(function(){
												reserved(1);
											},900)
									</script><?}?>
							<div class="hiddenarea_timecell_top" id="topspace">
								<input type="button" id="re1" value="<?echo $time['gt_1']?>" class="time_button" onclick="changetime(0)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_2']){
								if($ava['gr_2']){?><script>setTimeout(function(){
									reserved(2);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re2" value="<?echo $time['gt_2']?>" class="time_button" onclick="changetime(1)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_3']){
								if($ava['gr_3']){?><script>setTimeout(function(){
									reserved(3);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re3" value="<?echo $time['gt_3']?>" class="time_button" onclick="changetime(2)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_4']){
								if($ava['gr_4']){?><script>setTimeout(function(){
									reserved(4);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re4" value="<?echo $time['gt_4']?>" class="time_button" onclick="changetime(3)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_5']){
								if($ava['gr_5']){?><script>setTimeout(function(){
									reserved(5);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re5" value="<?echo $time['gt_5']?>" class="time_button" onclick="changetime(4)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_6']){
								if($ava['gr_6']){?><script>setTimeout(function(){
									reserved(6);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re6" value="<?echo $time['gt_6']?>" class="time_button" onclick="changetime(5)" style=''/>
							</div>
							<?}?>
								<?if($time['gt_7']){
								if($ava['gr_7']){?><script>setTimeout(function(){
									reserved(7);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top" id="topspace">
								<input type="button" id="re7" value="<?echo $time['gt_7']?>" class="time_button" onclick="changetime(6)" style=''/>
							</div>
							<?}?>
							<!--줄나눔-->
							<?if($time['gt_8']){
								if($ava['gr_8']){?><script>setTimeout(function(){
									reserved(8);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re8" value="<?echo $time['gt_8']?>" class="time_button" onclick="changetime(7)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_9']){
								if($ava['gr_9']){?><script>setTimeout(function(){
									reserved(9);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re9" value="<?echo $time['gt_9']?>" class="time_button" onclick="changetime(8)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_10']){
								if($ava['gr_10']){?><script>setTimeout(function(){
									reserved(10);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re10" value="<?echo $time['gt_10']?>" class="time_button" onclick="changetime(9)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_11']){
								if($ava['gr_11']){?><script>setTimeout(function(){
									reserved(11);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re11" value="<?echo $time['gt_11']?>" class="time_button" onclick="changetime(10)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_12']){
								if($ava['gr_12']){?><script>setTimeout(function(){
									reserved(12);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re12" value="<?echo $time['gt_12']?>" class="time_button" onclick="changetime(11)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_13']){
								if($ava['gr_13']){?><script>setTimeout(function(){
									reserved(13);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re13" value="<?echo $time['gt_13']?>" class="time_button" onclick="changetime(12)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_14']){
								if($ava['gr_14']){?><script>setTimeout(function(){
									reserved(14);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top" style="margin-right:0px;">
								<input type="button" id="re14" value="<?echo $time['gt_14']?>" class="time_button" onclick="changetime(13)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_15']){
								if($ava['gr_15']){?><script>setTimeout(function(){
									reserved(15);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top" style="margin-left:-1px">
								<input type="button" id="re15" value="<?echo $time['gt_15']?>" class="time_button" onclick="changetime(14)" style=''/>
							</div>
							<?}?>
							<?if($time['gt_16']){
								if($ava['gr_16']){?><script>setTimeout(function(){
									reserved(16);
								},800)</script><?}?>
							<div class="hiddenarea_timecell_top">
								<input type="button" id="re16" value="<?echo $time['gt_16']?>" class="time_button" onclick="changetime(15)" style=''/>
							</div>
							<?}?>
						</div>


						<?
						$zsql="select p_shopName, p_localName, p_tele from partner where p_id='".$data['p_id']."'";
						$z=mysql_query($zsql);
						$zekil=mysql_fetch_array($z);
						?>
						<div id="mask"></div>
						<div class="window_3">
							<div id="note_3">
								<div class="title_box_3">
									<div class="title_3">전화하셔서 
									<font style='color:#f36a21;'>'탈출러 예약자'</font>라고 알려주시면 표시된 가격으로 이용이 가능합니다.</div>
								</div>
								<div class="input_box_3">
									<div class="mid_content_left">									
										<div><?echo $zekil['p_shopName']?>&nbsp;<?echo $zekil['p_localName']?></div>
									</div>
									<div class="mid_content_right"><a href="tel:<?echo $zekil['p_tele']?>"><?echo $zekil['p_tele']?></a></div>
									</div>
								</div>
								<div class="popup_clickbox_area">
									<input type="button" href="#" class="close" style='background:#66ccff; border:1px solid #06aeff; color:#000000;' value="확인"/>
								</div>
							</div>
						</div>
						<!--예약하기 팝업 E-->
						<a href="#" class="openMask_3">
						<div class="hiddenarea_reservation">
						<div class="hiddenarea_reservation_inner">예약하기</div>
						</div>
						</a>
					<ul class="ablebox">
						<li class="disable">예약불가</li>
						<li class="able">예약가능</li>
					</ul>
					</div>
					
				</div>
			</form>
<script>
t=1;
reserve=false;
function change_font(value){
	var i=document.getElementById('reserve_font'+value);	
	if(t>0){
		i.style.color="white";
		i.style.backgroundColor="#4edcfe";
		t*=-1;
		reserve=value;
	}else{
		i.style.color="black";
		i.style.backgroundColor="#ececec";
		t*=-1;
		reserve=false;
	}
}
function reserve_go(value){
	alert("준비중입니다");
	return false;

	if(value==''){
		alert("로그인이 필요합니다.");
		location.href='./login.php';
	}else{
		var f=document.getElementById('reserve_form');
		if(reserve==false){
			alert("게임 시간을 선택해주세요");	
		}else{
			f.submit();
		}
	}	
}
</script>

<style>
.container_eval{
	background-color:white;
	width:100%;
	height:155px;
}
.space{
	height:10px;
}
.eval{
	width:190px;
	float:left;
	padding:10px;
	font-weight:bold;
	font-size:120%;
}
.eval div{
	font-size:150%;
	color:#66ccff;
}
.eval2{
	width:190px;
	float:left;
	padding:10px;
	font-weight:bold;
	font-size:120%;
}
.eval2 div{
	font-size:150%;
	color:#66ccff;
}
.contentjs{
	width:91%;
	margin-left:4.2%;
	height:40px;
	line-height:40px;
	text-align:center;
	background-color:#ccc;
	cursor:pointer;
}
.hidejs{
	display:none;
	width:91%;
	margin-left:4.2%;
	height:50px;
	margin-bottom:30px;
	background-color:#ccc;
	text-align:center;
}
.dtstyle{margin-left:10%;}
.partner_profile{width:220px;height:140px;}

/*롤링박스 디자인 부분*/
	.rollingImage_box{
		position:relative; float:left; border:0px solid #aaa; 
		width:154px; height:200px; text-align:center; 
		display:table-cell; background:none;
	}
	.rollingImage{
		position:absolute; width:auto; height:auto; max-height:200px; max-width:154px; 
		border:0px solid #aaa; background:none; margin:auto; 
		top:0; bottom:0; left:0; right:0;}
/*롤링박스 디자인 부분*/





@media all and (max-width:1041px){
	.container_eval{
		background-color:white;
		width:100%;
		height:210px;
		margin-bottom:30px;
	}
	.space{
		height:5px;
	}
	.eval{
		width:50%;
		float:left;
		padding:3px;
		font-weight:bold;
		font-size:100%;
	}
	.eval div{
		font-size:120%;
		color:#66ccff;
	}
	.eval2{
		width:33%;
		float:left;
		padding:3px;
		font-weight:bold;
		font-size:100%;
		margin-top:20px;
	}
	.eval2 div{
		font-size:120%;
		color:#66ccff;
	}
	.contentjs{
		width:50%;
		height:40px;
		line-height:40px;
		text-align:center;
		background-color:#ccc;
	}
	.menujs{width:60%;text-align:center;}
	.ddstyle{width:50%;}
	.partner_profile{position:absolute;left:10%;width:120px;}

	.menujs .contentjs{cursor:pointer;}
	.menujs .hidejs{display:none;}
	.hidejs{
		width:50%;
		height:50px;
		margin-bottom:30px;
		background-color:#ccc;
		text-align:center;
	}
	.infobox{padding-top:35px;margin-left:3%;}
	.f_a {width:954px;}
	.tit{float:left;display:inline;margin-bottom:30px;margin-left:3%;}
	.namefont{font-size:15px;font-weight:bold;}
	.js{
		margin-top:5%;
		list-style:none;
		float:left;
		margin-left:8px;}
	.info1,.info2,.info3{margin-left:80px;}

	/*롤링박스 디자인 부분*/
	.rollingImage_box_mobile{
		position:relative; float:left; border:0px solid #aaa; 
		width:190px; height:280px; text-align:center; 
		display:table-cell; background:none;
	}
	.rollingImage_box_mobile img{
		position:absolute; width:auto; height:auto; max-height:280px; max-width:190px; 
		border:0px solid #aaa; background:none; margin:auto; 
		top:0; bottom:0; left:0; right:0;}
/*롤링박스 디자인 부분*/


}
</style>
<script>
    // html dom 이 다 로딩된 후 실행된다.
    $(document).ready(function(){
        // menu 클래스 바로 하위에 있는 a 태그를 클릭했을때
        $(".menujs>div").click(function(){
            var submenu = $(this).next("div");
 
            // submenu 가 화면상에 보일때는 위로 보드랍게 접고 아니면 아래로 보드랍게 펼치기
            if( submenu.is(":visible") ){
                submenu.slideUp();
            }else{
                submenu.slideDown();
            }
        });
    });
</script>

			<!--	<div class="hiddenarea">
					<div class="reviewbox">
						<center>
						<div class="container_eval">
							<div style="width:97%;border-bottom:1px solid #666;padding:5px;padding-top:10px;"><font style="font-size:120%;font-weight:bold;">공감 지수</font></div><br>

							<div class="eval" style="inline">
								<div>0명</div><div class="space"> </div>
								몰입되요
							</div>
							<div class="eval" style="inline">
								<div>0명</div><div class="space"> </div>
								신기방기해요
							</div>
							<div class="eval2" style="inline">	
								<div>0명</div><div class="space"> </div>
								눈이즐거워요
							</div>
							<div class="eval2" style="inline">
								<div>0명</div><div class="space"> </div>
								활동적이예요
							</div>
							<div class="eval2" style="inline">
								<div>0명</div><div class="space"> </div>
								친절해요
							</div>
		
						</div>
						</center>
					</div>
				</div>-->
<?
$psql="select p_id, p_shopName, p_localName, benefit1, benefit2, benefit3, benefit4, p_tele, p_location1, rule from partner where p_id='".$data['p_id']."'";
$q=mysql_query($psql);
$partner=mysql_fetch_array($q);
//map에 들어갈 변수
$partnerMap=$partner['p_shopName'];
?>
				<div class="hiddenarea" id="matter"><!--지도의 비밀은 여기에 있었다-->					
					<div class="cafeinfo">
						<div class="f_a">
							<div style="margin-bottom:13px;">
						        <div class="menujs">
									<div class="contentjs" onclick="dropdown()">예약취소 / 변경 / 환불규정<img id="upsidedown" src="../images/btn/down.png" style="width:30px;padding:17px 0 0 15px;"/></div>
								
										<div class="hidejs">
										<br><?echo $partner['rule']?>
										</div>
										<script>
										function dropdown(){
											var m=document.getElementsByClassName('hidejs');
											m.style.display="block";
										}
										</script>
								</div>

							</div>
						</div>
<style>
	#store_infomation_area{width:100%; overflow:hidden; padding-left:100px;}
	#store_infomation_area .store_title_box{width:100%; overflow:hidden; float:left;}
	#store_infomation_area .store_title{font-size:16pt; line-height:21pt; font-weight:bold;text-align:left; margin-bottom:20px;}
	#store_infomation_area .store_image_text_box{width:100%; overflow:hidden; float:left;}
	#store_infomation_area .store_image_box{position:relative; float:left; width:250px; height:120px; text-align:center; display:table-cell; background:#ececec;}
	#store_infomation_area .store_image_box img{position:absolute; width:auto; height:auto; max-width:250px; max-height:120px;   margin:auto; top:0; bottom:0; left:0; right:0;}
	#store_infomation_area .store_text_box{
		padding-left:15px; float:left;
		width: -webkit-calc(100% - 300px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 300px); /* for Firefox */
		width:         calc(100% - 300px); /* for IE */
	}
	#store_infomation_area .container_box{width:100%; float:left; margin-bottom:3px;}
	#store_infomation_area .icon_area{float:left; width:30px; text-align:center;}
	#store_infomation_area .icon_area img{height:18px; margin:5px 0;}
	#store_infomation_area .content_area{float:left; font-size:13pt; line-height:21pt; font-weight:bold; font-family:"NotoSansCJKkr-Regular.eot";
		width: -webkit-calc(100% - 30px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 30px); /* for Firefox */
		width:         calc(100% - 30px); /* for IE */
	}
	#store_infomation_area .info_and_benefit_content{width:100%; float:left; font-size:10pt; line-height:12pt; margin:3px;}
@media all and (max-width:1041px){
	#store_infomation_area{width:100%; overflow:hidden; padding-left:0px;}
	#store_infomation_area .store_title_box{width:100%; overflow:hidden; float:left;}
	#store_infomation_area .store_title{font-size:16pt; line-height:21pt; font-weight:bold;text-align:left; margin-bottom:20px;}
	#store_infomation_area .store_image_text_box{width:100%; overflow:hidden; float:left;}
	#store_infomation_area .store_image_box{position:relative; float:left; margin:auto; width:250px; height:120px; text-align:center; display:table-cell; background:#ececec;}
	#store_infomation_area .store_image_box img{position:absolute; width:auto; height:auto; max-width:250px; max-height:120px;   margin:auto; top:0; bottom:0; left:0; right:0;}
	#store_infomation_area .store_text_box{
		padding-left:0px; float:left; margin-top:10px;
		width: -webkit-calc(100% - 0px); /* for Chrome, Safari */
		width:    -moz-calc(100% - 0px); /* for Firefox */
		width:         calc(100% - 0px); /* for IE */
	}
	#store_infomation_area .container_box{width:100%; float:left; margin-bottom:3px;}
	#store_infomation_area .icon_area{float:left; width:30px; text-align:center;}
	#store_infomation_area .icon_area img{height:18px; margin:5px 0;}
	#store_infomation_area .content_area{float:left; font-size:13pt; line-height:21pt; font-weight:bold;}
	#store_infomation_area .info_and_benefit_content{width:100%; float:left; font-size:10pt; line-height:12pt; margin:3px;}
}

</style>
						<div id="store_infomation_area">
							<div class="store_title_box">
								<div class="store_title"><?echo $partner['p_shopName']?> <?echo $partner['p_localName']?></div>
							</div>
							<div class="store_image_text_box">
								<div class="store_image_box">
									<?
									//이미지 경로
									$sql="select filename from partnerImage where p_id='".$partner['p_id']."'";
									$q=mysql_query($sql);
									$img_path=mysql_fetch_array($q);
									?>
									<img class="partner_profile" src="../manager/partnerpic/<?echo $img_path['filename']?>.jpg" onerror="this.style.display='none';"/>
								</div>
								<div class="store_text_box">
									<div class="container_box">
										<div class="icon_area"><img src='../images/icon/icon_cafeinfo1.png'></div>
										<div class="content_area">안내 및 혜택</div>
									</div>
									<div class="info_and_benefit_content"><?echo $partner['benefit1']?></div>
									<div class="info_and_benefit_content"><?echo $partner['benefit2']?></div>
									<div class="info_and_benefit_content"><?echo $partner['benefit3']?></div>
									<div class="info_and_benefit_content"><?echo $partner['benefit4']?></div>
									<div class="container_box">
										<div class="icon_area"><img src='../images/icon/icon_cafeinfo2.png'></div>
										<div class="content_area"><a href="tel:<?echo $partner['p_tele']?>"/><?echo $partner['p_tele']?></div>
									</div>
									<div class="container_box">
										<div class="icon_area"><img src='../images/icon/icon_cafeinfo3.png'></div>
										<div class="content_area"><?echo $partner['p_location1']?></div>
									</div>
								</div>
							</div>
						</div>
						<!--
						<div class="tit"><font class="namefont"><b><?echo $partner['p_shopName']?> <?echo $partner['p_localName']?></b></font></div>
							<dl class="infobox">
								<dt class="dtstyle"><img class="partner_profile" src="../manager/partnerpic/<?echo $partner['p_id']?>.jpg" onerror="this.style.display='none';" style="width:100px"/></dt>
								<dd class="ddstyle"> 
									<p class="info1">안내 및 혜택
										<span ><?echo $partner['benefit1']?></span>
										<span><?echo $partner['benefit2']?></span>
										<span><?echo $partner['benefit3']?></span>
										<span><?echo $partner['benefit4']?></span>
									</p>
									<p class="info2"><?echo $partner['p_tele']?></p>
									<p class="info3"><?echo $partner['p_location1']?></p>
								</dd>
							</dl>
						</div>
						-->
					<!--지도S-->
					<div id="map"></div>
					<script>
					var w = window.innerWidth;
					function mapfunction(value){
						var map=document.getElementById('map');
						var slide=document.getElementById('slide');
						var slide2=document.getElementById('slide2');
						var dot=document.getElementById('dot');
						var dot2=document.getElementById('dot2');
						var matter=document.getElementById('matter');
						if(w>1024 && value=='a'){
							map.style.display="none";
							slide.style.display="none";
							slide2.style.display="none";
							dot.style.display="none";
							dot2.style.display="none";
							matter.style.display="none";
						}
						if(w>1024 && value=='b'){
							map.style.display="block";
							slide.style.display="block";
							slide2.style.display="none";
							dot.style.display="block";
							dot2.style.display="none";
							matter.style.display="block";
							mapload();
						}
						if(w<1024 && value=='a'){
							map.style.display="none";
							slide.style.display="none";
							slide2.style.display="none";
							dot.style.display="none";
							dot2.style.display="none";
							matter.style.display="none";
						}
						if(w<1024 && value=='b'){
							map.style.display="block";
							slide.style.display="none";
							slide2.style.display="block";
							dot.style.display="none";
							dot2.style.display="block";
							matter.style.display="block";
							mapload();
						}
					}
					</script>
					<!--피씨앨범-->
					<div id="slide" class="slideshow-container">
					<?
					$csql="select count(path) from album_path where p_id='".$data['p_id']."'";
					$cq=mysql_query($csql);
					$count=mysql_fetch_array($cq);
					$i=$count[0]/3;
					
					$sql="select path from album_path where p_id='".$data['p_id']."'";
					$q=mysql_query($sql);
					while($i>0){
					?>
						<div class="mySlides fade" id="albumsize_area">
						<?$album=mysql_fetch_array($q);?>
							<div class="albumsize_box"><img class="albumsize" src="../manager/album/<?echo $album[0]?>.jpg" onerror="this.style.display='none';"></div>
						<?$album=mysql_fetch_array($q);?>
							<div class="albumsize_box"><img class="albumsize" src="../manager/album/<?echo $album[0]?>.jpg" onerror="this.style.display='none';"></div>
						<?$album=mysql_fetch_array($q);?>
							<div class="albumsize_box"><img class="albumsize" src="../manager/album/<?echo $album[0]?>.jpg" onerror="this.style.display='none';"></div>
						</div>
					<?
					$i--;
					}
					?>
						
							 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							 <a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<div id="dot" style="margin-left:45%;margin-top:10px;">
						 <span class="dot" onclick="currentSlide(1)"></span> 
						 <span class="dot" onclick="currentSlide(2)"></span> 
						 <span class="dot" onclick="currentSlide(3)"></span> 
					</div>

					<!--모바일앨범-->
					<div id="slide2" class="slideshow-container">
					<?
					$mcsql="select count(path) from album_path where p_id='".$data['p_id']."'";
					$mcq=mysql_query($mcsql);
					$mcount=mysql_fetch_array($mcq);
					$mi=$mcount[0];
					
					$msql="select path from album_path where p_id='".$data['p_id']."'";
					$mq=mysql_query($msql);
					
					while($mi>0){
						$malbum=mysql_fetch_array($mq);
					?>
						<div class="mySlide fade">
							<div class="albumsize_box"><img class="albumsize" src="../manager/album/<?echo $malbum[0]?>.jpg" onerror="this.style.display='none';"></div> 
						</div>
					<?
					$mi--;
					}
					?>
							 <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
							 <a class="next2" onclick="plusSlides2(1)">&#10095;</a>
					</div>
					<div id="dot2" style="width:100%;margin-top:10px;text-align:center;">
					<?
						//dot count
						$mdcsql="select count(path) from album_path where p_id='".$data['p_id']."'";
						$mdcq=mysql_query($mdcsql);
						$mdcount=mysql_fetch_array($mdcq);
						$mp=$mdcount[0];
						$up=1;
						while($up<=$mp){

					?>
						 <span class="dot2" onclick="currentSlide2(<?echo $up?>)"></span> 
					<?
					$up++;
					}
					?>
					</div>
				</div>
			</div>		
			</div>
			<div class="container_inner pd44">
			<div class="ohtertheme" style="overflow:hidden;">
				<div class="maintit">이 카페의 다른테마</div>
				<div class="slidearea">
					<ul class="bxslider05"><!--5개까지만 자른다-->
						<li>
						<?
						$sql="SELECT a.g_idx, a.g_title, b.filename  
						FROM game a, gameImage b
						WHERE a.g_idx = b.g_idx
						AND b.p_id='".$data['p_id']."'
						ORDER BY a.g_idx";
						$q=mysql_query($sql);

						while($imgloop=mysql_fetch_array($q)){
						?>
							<div class="themebox">
								<a href="./theme_view.php?g_idx=<?echo $imgloop['g_idx']?>">
								<!--하단 롤링부분-->
								<div class="rollingImage_box"> 
									<img class="rollingImage" src="../manager/gameImage/<?echo $imgloop['filename']?>.jpg" />
								</div>
								<span style="margin-bottom:20px;"><?echo $imgloop['g_title']?></span>
								</a>
							</div>
						<?
						}
						?>
						</li>
					</ul>
				</div>
				
				<!--mobile 다른테마정보-->
				<div class="slidearea_m" style="height:300px;">
					<ul class="bxslider05_m" style='padding-top:20px;'>
						<?
						$sql="select * from gameImage a, game b
						WHERE a.g_idx=b.g_idx
						AND a.p_id='".$data['p_id']."'
						ORDER BY a.g_idx";
						$q=mysql_query($sql);
						while($imgloop=mysql_fetch_array($q)){
						?>
						<li>
							<div class="themebox" style="width:70%;margin-left:15%;">
								<a href="./theme_view.php?g_idx=<?echo $imgloop['g_idx']?>">
									<!--하단 롤링부분 max-width:1041px-->
									<div class="rollingImage_box_mobile">
										<img src="../manager/gameImage/<?echo $imgloop['filename']?>.jpg" style="width:100%"/>
									</div>
									<span><?echo $imgloop['g_title']?></span>
									<!--하단 롤링부분 max-width:1041px-->
								</a>
							</div>
						</li>
						<?
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?
	include("include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<!--모바일앨범-->

<script>
var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}
function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides2 = document.getElementsByClassName("mySlide");
  var dot = document.getElementsByClassName("dot2");
  if (n > slides2.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";  
  }
  for (i = 0; i < dot.length; i++) {
      dot[i].className = dot[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";  
  dot[slideIndex2-1].className += " active";
}
</script>
<script>
var slideIndexa = 1;
showSlidesa(slideIndexa);

function plusSlidesa(n) {
  showSlidesa(slideIndexa += n);
}
function currentSlidea(n) {
  showSlidesa(slideIndexa = n);
}
function showSlidesa(n) {
  var j;
  var slidesa = document.getElementsByClassName("mySlidesa");
  var dota = document.getElementsByClassName("dota");
  if (n > slidesa.length) {slideIndexa = 1}    
  if (n < 1) {slideIndexa = slidesa.length}
  for (j = 0; j < slidesa.length; j++) {
      slidesa[j].style.display = "none";  
  }
  for (j = 0; j < dot.length; j++) {
      dota[j].className = dota[j].className.replace(" active", "");
  }
  slidesa[slideIndexa-1].style.display = "block";  
  dota[slideIndexa-1].className += " active";

}
</script>
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=759d7a8b0f7209f4ab7d54ecb981c809&libraries=services"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new daum.maps.LatLng(33.450701, 126.570667),
			level: 3
		};
		//지도깨짐 방지, DOM이 먼저 호출되서 출력이 안된다고한다. 
		function mapload(){
			var map = new daum.maps.Map(container, options);
			// 주소-좌표 변환 객체를 생성합니다
			var geocoder = new daum.maps.services.Geocoder();

			// 주소로 좌표를 검색합니다
			geocoder.addr2coord("<?echo $partner['p_location1']?>", function(status, result) {

				// 정상적으로 검색이 완료됐으면 
				 if (status === daum.maps.services.Status.OK) {

					var coords = new daum.maps.LatLng(result.addr[0].lat, result.addr[0].lng);

					// 결과값으로 받은 위치를 마커로 표시합니다
					var marker = new daum.maps.Marker({
						map: map,
						position: coords
					});

					// 인포윈도우로 장소에 대한 설명을 표시합니다
					var infowindow = new daum.maps.InfoWindow({
						content: '<div style="width:150px;text-align:center;padding:6px 0;"><?echo $partnerMap?></div>'
					});
					infowindow.open(map, marker);

					// 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
					map.setCenter(coords);
				} 
			});
		}
</script>
<script language="JavaScript">
		function changedate(datenum){ //색상비교 후 값 반환
			var week = document.getElementsByClassName("date_num");
			for(var i = 0; i < week.length; i++){
				week[i].style.color = '#666666'
				if(i==datenum){
					week[i].style.color = '#56DCFC'
				}
			}
		}
</script>
<script>
function reserved(value){
	var k= document.getElementById('re'+value);
	k.style.backgroundColor="#ccc";
	k.style.border="2px solid #fff";
	k.onclick="";
}
</script>
<script>
function kCalendar(id, date) {

	var kCalendar = document.getElementById(id);
	
	if( typeof( date ) !== 'undefined' ) {
		date = date.split('-');
		date[1] = date[1] - 1;
		date = new Date(date[0], date[1], date[2]);
	} else {
		var date = new Date();
	}
	var currentYear = date.getFullYear();
	//년도를 구함
	
	var currentMonth = date.getMonth() + 1;
	//연을 구함. 월은 0부터 시작하므로 +1, 12월은 11을 출력
	
	var currentDate = date.getDate();
	//오늘 일자.
	
	date.setDate(1);
	var currentDay = date.getDay();
	//이번달 1일의 요일은 출력. 0은 일요일 6은 토요일
	
	var dateString = new Array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
	var lastDate = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	if( (currentYear % 4 === 0 && currentYear % 100 !== 0) || currentYear % 400 === 0 )
		lastDate[1] = 29;
	//각 달의 마지막 일을 계산, 윤년의 경우 년도가 4의 배수이고 100의 배수가 아닐 때 혹은 400의 배수일 때 2월달이 29일 임.
	
	var currentLastDate = lastDate[currentMonth-1];
	var week = Math.ceil( ( currentDay + currentLastDate ) / 7 );
	//총 몇 주인지 구함.
	
	if(currentMonth != 1)
		var prevDate = currentYear + '-' + ( currentMonth - 1 ) + '-' + currentDate;
	else
		var prevDate = ( currentYear - 1 ) + '-' + 12 + '-' + currentDate;
	//만약 이번달이 1월이라면 1년 전 12월로 출력.
	
	if(currentMonth != 12) 
		var nextDate = currentYear + '-' + ( currentMonth + 1 ) + '-' + currentDate;
	else
		var nextDate = ( currentYear + 1 ) + '-' + 1 + '-' + currentDate;
	//만약 이번달이 12월이라면 1년 후 1월로 출력.

	
	if( currentMonth < 10 )
		var currentMonth = '0' + currentMonth;
	//10월 이하라면 앞에 0을 붙여준다.
	
	var calendar = '';
	
	calendar += '<div id="header">';
	calendar += '			<span><a href="#" class="button left" onclick="kCalendar(\'' +  id + '\', \'' + prevDate + '\')" style="color:#fff"><&nbsp;</a></span>';
	calendar += '			<span id="date">' + currentYear + '년 ' + currentMonth + '월</span>';
	calendar += '			<span><a href="#" class="button right" onclick="kCalendar(\'' + id + '\', \'' + nextDate + '\')" style="color:#fff">&nbsp;></a></span>';
	calendar += '		</div>';
	calendar += '		<table border="0" cellspacing="0" cellpadding="0">';
	calendar += '			<caption>' + currentYear + '년 ' + currentMonth + '월 달력</caption>';
	calendar += '			<thead>';
	calendar += '				<tr>';
	calendar += '				  <th class="sun" scope="row">일</th>';
	calendar += '				  <th class="mon" scope="row">월</th>';
	calendar += '				  <th class="tue" scope="row">화</th>';
	calendar += '				  <th class="wed" scope="row">수</th>';
	calendar += '				  <th class="thu" scope="row">목</th>';
	calendar += '				  <th class="fri" scope="row">금</th>';
	calendar += '				  <th class="sat" scope="row">토</th>';
	calendar += '				</tr>';
	calendar += '			</thead>';
	calendar += '			<tbody>';
	
	var dateNum = 1 - currentDay;
	
	for(var i = 0; i < week; i++) {
		calendar += '			<tr>';
		for(var j = 0; j < 7; j++, dateNum++) {
			if( dateNum < 1 || dateNum > currentLastDate ) {
				calendar += '				<td class="' + dateString[j] + '"> </td>';
				continue;
			}
			calendar += '				<td class="' + dateString[j] + '" onclick="go('+currentYear+','+currentMonth+',this.innerHTML)" style="cursor:pointer">' + dateNum + '</td>'; //onclick으로 날짜값을 넘긴다.

		}
		calendar += '			</tr>';
	}
	
	calendar += '			</tbody>';
	calendar += '		</table>';
	
	kCalendar.innerHTML = calendar;
}
function go(year,month,day){//년월일을 받아와서 넘긴다.
	var k=document.getElementById('today');
	var maskarea=document.getElementById('maskarea');
	maskarea.style.display="none";
	if(month<10){
		if(day<10)
			location.href='./theme_view.php?year='+year+'&month=0'+month+'&day=0'+day+'&g_idx='+<?echo $_GET['g_idx']?>+'';
		else
			location.href='./theme_view.php?year='+year+'&month=0'+month+'&day='+day+'&g_idx='+<?echo $_GET['g_idx']?>+''
	}
	else{
		if(day<10)
			location.href='./theme_view.php?year='+year+'&month='+month+'&day=0'+day+'&g_idx='+<?echo $_GET['g_idx']?>+''
		else
			location.href='./theme_view.php?year='+year+'&month='+month+'&day='+day+'&g_idx='+<?echo $_GET['g_idx']?>+''
	}
}
</script>