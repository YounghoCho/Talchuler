<?php
	$btn_error = "btn_cancel_error.gif";

	if( $AbleBack )
	{
		$btn_error = "btn_retry.gif";
	}

	/*
	 * Get CIURL
	 */
	$URL = GetCIURL( $IsUseCI,$CIURL );

	/*
	 * Get BgColor
	 */
	$BgColor = GetBgColor( $BgColor );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>다날 휴대폰 결제</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<link href="./css/style.css" type="text/css" rel="stylesheet"  media="screen" />
<script language="JavaScript" src="./js/Common.js"></script>
<script language="JavaScript">

<!--
var IsUseCI = "<?= $IsUseCI ?>";
var CIURL = "<?= $CIURL ?>";
var BgColor = "<?= $BgColor ?>";
-->

</script>
</head>
<body>
	<!-- popup size 500x680 -->
	<div class="paymentPop cType<?=$BgColor?>">
		<p class="tit">
			<img src="./images/img_tit.gif" width="494" height="48" alt="다날휴대폰결제" />
			<span class="logo"><img src="<?=$URL?>" width="119" height="47" alt="" /></span>
		</p>
		<div class="tabArea">
			<ul class="tab">
				<li class="tab01">결제서비스에러</li>
			</ul>
			<p class="btnSet">
				<a href="JavaScript:OpenHelp();"><img src="./images/btn_useInfo.gif" width="55" height="20" alt="이용안내" /></a>
				<a href="JavaScript:OpenCallCenter();"><img src="./images/btn_customer.gif" width="55" height="20" alt="고객센터" /></a>
			</p>
		</div>
		<div class="content">
			<div class="alertBox">
				<p class="type01"><strong>에러 내용(<?=$Result?>)</strong><br/><?=$ErrMsg?></p>
			</div>
			<div class="infoText">
				<p class="t02">다날 고객센터 : <strong>1566-3355</strong> (전국공통)</p>
			</div> 
			<div class="grayBox" style="margin-top:11px;">
				<p class="type02">상담원 통화가능시간 : <br/>
				평일 : 9시 ~ 18시<br/>
				<strong>토요일, 일요일, 공휴일 휴무</strong></p>
			</div>
			<p class="btnRetry"><a href="<?=$BackURL?>"><img src="./images/<?=$btn_error?>" width="110" height="32" alt="결제 재시도" /></a></p>
		</div>
		<div class="footer">
			<dl class="noti">
				<dt>공지사항</dt>
				<dd>다날 휴대폰 결제를 이용해주셔서 감사합니다.</dd>
			</dl>
		</div>
	</div>
</body>
</html>
