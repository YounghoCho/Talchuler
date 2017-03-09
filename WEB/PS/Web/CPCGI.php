<?php
	header( "Pragma: No-Cache" );
	include( "./inc/function.php" );

	/******************************************************************************** 
	 *
	 * 다날 휴대폰 결제
	 *
	 * - 결제 요청 페이지 
	 *	금액 확인 및 결제 요청
	 *
	 * 결제 시스템 연동에 대한 문의사항이 있으시면 서비스개발팀으로 연락 주십시오.
	 * DANAL Commerce Division Technique supporting Team 
	 * EMail : tech@danal.co.kr 
	 *
	 ********************************************************************************/
?>
<html>
<head>
<title>다날 휴대폰 결제</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>
<?php
	$BillErr = false;
	$TransR = array();

	/*
	 * Get ServerInfo
	 */
	$ServerInfo = $_POST["ServerInfo"];  

	/*
	 * NCONFIRM
	 */
	$nConfirmOption = 1; 
	$TransR["Command"] = "NCONFIRM";
	$TransR["OUTPUTOPTION"] = "DEFAULT";
	$TransR["ServerInfo"] = $ServerInfo;
	$TransR["IFVERSION"] = "V1.1.2";
	$TransR["ConfirmOption"] = $nConfirmOption;

	/*
	 * ConfirmOption이 1이면 CPID, AMOUNT 필수 전달
	 */
	if( $nConfirmOption == 1 )
	{
		$TransR["CPID"] = $ID;
		$TransR["AMOUNT"] = $AMOUNT;
	}

	$Res = CallTeledit( $TransR,false );

	if( $Res["Result"] == "0" )
	{
		/*
		 * NBILL
		 */
		$TransR = array();

		$nBillOption = 0;
		$TransR["Command"] = "NBILL";
		$TransR["OUTPUTOPTION"] = "DEFAULT";
		$TransR["ServerInfo"] = $ServerInfo;
		$TransR["IFVERSION"] = "V1.1.2";
		$TransR["BillOption"] = $nBillOption;

		$Res2 = CallTeledit( $TransR,false );

		if( $Res2["Result"] != "0" )
		{
			$BillErr = true;
		}
	}

	if( $Res["Result"] == "0" && $Res2["Result"] == "0" )
	{
		/**************************************************************************
		 *
		 * 결제 완료에 대한 작업 
		 * - AMOUNT, ORDERID 등 결제 거래내용에 대한 검증을 반드시 하시기 바랍니다.
		 * - CAP, RemainAmt: 개인정보 정책에 의해 잔여 한도 금액은 미전달 됩니다. (“000000”)
		 *
		 **************************************************************************/
?>
<body>
<form name="Success" action="./Success.php" method="post">
<?php
	MakeFormInput($_POST);
	MakeFormInput($Res,array("Result","ErrMsg"));
	MakeFormInput($Res2,array("Result","ErrMsg"));
?>
</form>
<script>
	document.Success.submit();
</script>
</body>
</html>
<?php
	} else {
		/**************************************************************************
		 *
		 * 결제 실패에 대한 작업 
		 *
		 **************************************************************************/

		if( $BillErr ) $Res = $Res2;

		$Result		= $Res["Result"];
		$ErrMsg		= $Res["ErrMsg"];
		$AbleBack	= false;
		$BackURL	= $_POST["BackURL"];
		$IsUseCI	= $_POST["IsUseCI"];
		$CIURL		= $_POST["CIURL"];
		$BgColor	= $_POST["BgColor"];

		include( "./Error.php" );
	}
?>
