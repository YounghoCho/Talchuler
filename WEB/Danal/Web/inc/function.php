<?php
	/********************************************************************************
	 *
	 * 다날 휴대폰 결제
	 *
	 * - Function Library
	 *	결제 연동에 필요한 Function 및 변수값 설정 
	 *
	 * 결제 시스템 연동에 대한 문의사항이 있으시면 서비스개발팀으로 연락 주십시오.
	 * DANAL Commerce Division Technique supporting Team
	 * EMail : tech@danal.co.kr
	 *
	 ********************************************************************************/

	/******************************************************
	 *
	 * Client Module 경로설정
	 *
	 ******************************************************/
	$TeleditBinPath = "/home/talchuler/www/Danal/Web/inc/bin";

	/******************************************************
	 * ID		: 다날에서 제공해 드린 CPID
	 * PWD		: 다날에서 제공해 드린 CPPWD
	 * AMOUNT	: 결제 금액
	 ******************************************************/
	$ID  = "A010002002";
	$PWD = "bbbbb";
	$AMOUNT = "10";

	/******************************************************
	 * - CallTeledit
	 * - CallTeleditCancel
	 *	다날 서버와 통신하는 함수입니다.
	 *	$Debug가 true일경우 웹브라우져에 debugging 메시지를 출력합니다.
	 ******************************************************/
	function CallTeledit($TransR,$Debug=false) {

		global $TeleditBinPath;

		$Bin = "SClient";
		$arg = MakeParam( $TransR );

		$Input = $TeleditBinPath."/".$Bin." \"$arg\"";

		exec( $Input,$Output,$Ret );

		if( $Debug )
		{
			echo "Exec : ".trim($Input)."<BR>";
			echo "Ret : ".$Ret."<BR>";

			for( $i=0;$i<count($Output);$i++ )
			{
				echo( "Out Line[$i]: ".trim($Output[$i])."<BR>" );
			}
		}

		$MapOutput = Parsor( $Output );

		return $MapOutput;
	}

	function CallTeleditCancel($TransR,$Debug=false) {

		global $TeleditBinPath;

		$Bin = "BackDemo";
	//      $Bin = "AutoCancel"; // For Window

		$arg = MakeParam( $TransR );

		$Input = $TeleditBinPath."/".$Bin." \"$arg\"";

		exec( $Input,$Output,$Ret );

		if( $Debug )
		{
			echo "Exec : ".trim($Input)."<BR>";
			echo "Ret : ".$Ret."<BR>";

			for( $i=0;$i<count($Output);$i++ )
			{
				echo( "Out Line[$i]: ".trim($Output[$i])."<BR>" );
			}
		}

		$MapOutput = Parsor( $Output );

		return $MapOutput;
	}

	function Parsor($str,$sep1="&",$sep2="=") {

		$Out = array();
		$in = "";

		if( is_array($str) )
		{
			for( $i=0;$i<count($str);$i++ )
			{
				$in .= $str[$i].$sep1;
			}
		}
		else
		{
			$in = $str;
		}

		$tok = explode( $sep1,$in );

		for( $i=0;$i<count($tok);$i++ )
		{
			$tmp = explode( $sep2,$tok[$i] );

			$name = trim($tmp[0]);
			$value = trim($tmp[1]);

			for( $j=2;$j<count($tmp);$j++ )
				$value .= $sep2.trim($tmp[$j]);

			$Out[$name] = urldecode($value);
		}

		return $Out;
	}

	function MakeFormInput($arr,$ext=array(),$Prefix="") {

		$PreLen = strlen( trim($Prefix) );

		$keys = array_keys($arr);

		for( $i=0;$i<count($keys);$i++ )
		{
			$key = $keys[$i];

			if( trim($key) == "" ) continue;

			if( !in_array($key,$ext) && substr($key,0,$PreLen) == $Prefix )
			{
				echo( "<input type=\"hidden\" name=\"".$key."\" value=\"".$arr[$key]."\">\n" );
			}
		}
	}

	function MakeAddtionalInput($Trans,$HTTPVAR,$Names) {

		while( $name=array_pop($Names) ) 
		{
			$Trans[$name] = $HTTPVAR[$name];
		}

		return $Trans;
	}

	function MakeItemInfo($ItemAmt,$ItemCode,$ItemName) {

		$ItemInfo = substr($ItemCode,0,1) ."|". $ItemAmt ."|1|". $ItemCode ."|". $ItemName;
		return $ItemInfo;
	}

	function MakeParam($arr) {

		$ret = array();
		$keys = array_keys($arr);

		for( $i=0;$i<count($keys);$i++ )
		{
			$key = $keys[$i];
			array_push( $ret,$key."=".$arr[$key] );
		}

		return MakeInfo($ret);
	}

	function MakeInfo($Arr,$joins=";") {

		return join( $joins,$Arr );
	}

	function GetItemName($CPName,$nCPName,$ItemName,$nItemName) {

		$convItemName = "(". substr($CPName,0,$nCPName) .") ". substr($ItemName,0,$nItemName);

		return $convItemName;
	}

	function GetCIURL($IsUseCI,$CIURL) {

		/*
		 * Default Danal CI
		 */
		$URL = "https://ui.teledit.com/Danal/Teledit/Web/images/customer_logo.gif";

		if( $IsUseCI == "Y" && !is_null($CIURL) )
		{
			$URL = $CIURL;
		}
	
		return $URL;
	} 

	function Map2Str($arr) {

		$ret = array();
		$keys = array_keys($arr);

		for( $i=0;$i<count($keys);$i++ )
		{
			$key = $keys[$i];

			if( !trim($key) ) continue;

			array_push( $ret,$key." = ".$arr[$key] );
		}

		return join( "<BR>",$ret );
	}

	function GetBgColor($BgColor) {

		/*
		 * Default : Blue
		 */
		$Color = 0;

		if( intval($BgColor) > 0 && intval($BgColor) < 11 )
		{
			$Color = $BgColor;
		}

		return sprintf( "%02d",$Color );
	}
?>
