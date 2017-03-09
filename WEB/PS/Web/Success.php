<?php
	header( "Pragma: No-Cache" );
	include( "./inc/function.php" );

	/********************************************************************************
	*
	* 다날 휴대폰 결제
	*
	* - 결제 완료 페이지
	*	결제 확인
	*
	* 결제 시스템 연동에 대한 문의사항이 있으시면 서비스개발팀으로 연락 주십시오.
	* DANAL Commerce Division Technique supporting Team
	* EMail : tech@danal.co.kr
	*
	********************************************************************************/
	/*
	 * Get CIURL
	 */
	$URL = GetCIURL( $_POST["IsUseCI"],$_POST["CIURL"] );

	/*
	 * Get BgColor
	 */
	$BgColor = GetBgColor( $_POST["BgColor"] );
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
				<li class="tab01">결제 성공</li>
			</ul>
			<p class="btnSet">
				<a href="JavaScript:OpenHelp();"><img src="./images/btn_useInfo.gif" width="55" height="20" alt="이용안내" /></a>
				<a href="JavaScript:OpenCallCenter();"><img src="./images/btn_customer.gif" width="55" height="20" alt="고객센터" /></a>
			</p>
		</div>
		<div class="content">
			<div class="alertBox">
				<p class="type02"><span>결제가 정상 처리되었습니다.</span></p>
			</div>
			<p class="btnSet02"><a href="#"><img src="./images/btn_ok.gif" width="80" height="32" alt="확인" /></a></p>
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
