<?
 $oCurl = curl_init();
    $url =  "https://sslsms.cafe24.com/smsSenderPhone.php";
    $aPostData['userId'] = "talchulersms"; // SMS 아이디
    $aPostData['passwd'] = "1bb5615c5105b640e656ff56bd7d68df"; // 인증키
    curl_setopt($oCurl, CURLOPT_URL, $url);
    curl_setopt($oCurl, CURLOPT_POST, 1);
    curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($oCurl, CURLOPT_POSTFIELDS, $aPostData);
    curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, 0);
    $ret = curl_exec($oCurl);
    echo $ret;
    curl_close($oCurl);
            ?>
