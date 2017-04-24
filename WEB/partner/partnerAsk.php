<?
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("./include.php");

$uploaddir = './partnerAsk/';
$newuploadfile= $uploaddir. $_SESSION['id'].".jpg";
move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile);

//보안2: 파일 무한업로드 방지 
$a="select p_id from partnerAsk where p_id='".$_SESSION['id']."';";
$b=mysql_query($a);
$c=mysql_fetch_array($b);
if($c['p_id']){
	?>
	<script>
	alert("이미 수정 요청되었습니다");
	history.back();
	</script>
	<?
}
else{
	$sql="insert into partnerAsk (p_idx, p_agreement1, p_id, p_pw, p_name, p_shopName, p_phone, p_tele, p_businessNumber, p_postNumber1, p_postNumber2, p_location1, p_location2, p_email, p_agreement2, p_bank, p_bankNumber, p_depositor, p_agreement3, p_agreement4, p_localName, benefit1, benefit2, benefit3, benefit4, rule, time  ) values ('','', '".$_SESSION['id']."', '', '', '".$_POST['shopName']."', '', '".$_POST['p_tele']."', '', '".$_POST['postNumber1']."','".$_POST['postNumber2']."', '".$_POST['location1']."','".$_POST['location2']."', '', '', '','','','','','".$_POST['localName']."', '".$_POST['benefit1']."', '".$_POST['benefit2']."', '".$_POST['benefit3']."', '".$_POST['benefit4']."', '".nl2br($_POST['rule'])."', now());";
	//주목: id에 세션정보가 들어감. 매장전화번호는 $_POST['p_tele']가 들어감. localName이 들어감. benefit들과 rule이 추가됨.
	
	mysql_query($sql);
	?>
		<script>
		alert("수정 요청이 완료되었습니다. 관리자 확인 후 정보가 수정됩니다.")
		history.back();
		</script>
	<?
}

?>