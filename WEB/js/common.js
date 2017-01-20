$(document).ready(function(){
	$('.select_st1').customSelect();
	loca();
	bxslider();
	datepicker();
});




$(window).resize(function(){
	if ($(window).width() > 1041){
		$('.select_st1.w50').css({'width':'50px'});
		$('.select_st1.w80').css({'width':'80px'});
		$('.select_st1.w100').css({'width':'100px'});
	}else{
		$('.select_st1.w50').css({'width':'55px'});
		$('.select_st1.w80').css({'width':'57px'});
		$('.select_st1.w100').css({'width':'100px'});
	}
});


function datepicker(){
	$( "#testDatepicker" ).datepicker({
		showOn: "both", 
		buttonImage: "../images/icon/icon_down_arrow_m.png", 
		buttonImageOnly: true,
		dateFormat: 'yy-mm-dd',
		prevText: '이전 달',
		nextText: '다음 달',
		monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
		monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
		dayNames: ['일','월','화','수','목','금','토'],
		dayNamesShort: ['일','월','화','수','목','금','토'],
		dayNamesMin: ['일','월','화','수','목','금','토'],
		showMonthAfterYear: true,
		yearSuffix: '년'
	});
}

/* bxslider */
function bxslider(){
	$('.bxslider01').bxSlider({
		auto: false,
		speed: 500,
		controls: false
	});

	$('.bxslider01_m').bxSlider({
		auto: false,
		speed: 500,
		controls: false
	});

	$('.bxslider02').bxSlider({
		auto: false,
		speed: 500,
		controls: false
	});

	$('.bxslider03').bxSlider({
		auto: false,
		speed: 500,
		controls: true,
		pager: false,
	});

	$('.bxslider04').bxSlider({
		mode: 'vertical',
		auto: true,
		speed: 500,
		controls: false,
		pager: false,
	});
	$('.bxslider05').bxSlider({
		auto: false,
		speed: 500,
		controls: true,
		pager: false,
	});
	$('.bxslider05_m').bxSlider({
		auto: false,
		speed: 500,
		controls: true,
		pager: true,
	});
	$('.bxslider07').bxSlider({
		auto: false,
		speed: 500,
		controls: true,
	});
	var vimg = $(".bxslider02 li img").height();
	$(".bx-wrapper").height(vimg);
	//var bxc = $(".bx-controls").outerWidth()/2;
	//$(".bx-controls").css({'margin-left' : -bxc});
	$(window).resize(function(){
		var vimg = $(".bxslider02 li img").height();
		$(".bx-wrapper").height(vimg);
	}).resize();
}


function bxslider_tab(){
	$('.bxslider06').bxSlider({
		auto: false,
		speed: 500,
		controls: true,
		pager: false,
	});
}

/* location choice */
function loca(){
	$('.cho3 ul > li > a').click(function(){
		$('.cho3 ul > li').removeClass('on');
		$(this).parent().addClass('on');
	});
}


/* login */
$('.gnb .login a').on('click', function(){
	if($(this).parent().hasClass('on')){
		$(this).parent().removeClass('on');
		$(this).parent().find('.info').css({'display':'none'});
	}else{
		$(this).parent().addClass('on');
		$(this).parent().find('.info').css({'display':'block'});
	}
	e.stopPropagation();
});


/* mobile_gnb */
function gnbView(){
	$('body').addClass('ovh')
	$('body').bind('touchmove',function(e){e.preventDefault()});
	$('.gnb_m li').removeAttr('style');
	$('.gnbwrap').stop().animate({left : '0'}, 150).addClass('gnbOn');
	$('.gnbbg').addClass('on');
	function cssGnb(width) {
		var windowW = $(window).width();
		if (windowW > 1041){
			$('.gnbbg').remove();
			$('body').removeClass('ovh');
			$('body').unbind();
			$('.gnbwrap').removeClass('gnbOn').removeAttr('style');
			$('.gnb_m li').removeClass('on');
			$('.gnb_m').removeAttr('style');
		}
	}
	$(function() {
		$(window).resize(function() {
			cssGnb($(this).width());
		}).resize();
	});
}

function gnbHide(){
	$('.gnbwrap').stop().animate({left : '-240px'}, 150, function(){
		$('.gnbbg').removeClass('on');
		$('.gnbwrap').removeAttr('style').removeClass('gnbOn');
	});
	$('body').removeClass('ovh');
	$('body').unbind();
	$('.gnb_m li').removeClass('on');
	$('.gnb_m').removeAttr('style');

}

/* tab */
$('.tab a').click(function(i){this.i=i}).click(function(){
	var idx = $(this).index();
	$(this).parent().parent().find('.hiddenarea').removeClass('on');
	$(this).parent().parent().find('.tab a').removeClass('on');
	$(this).addClass('on');
	$(this).parent().parent().find('.hiddenarea:eq('+idx+')').addClass('on');
	return false;
});