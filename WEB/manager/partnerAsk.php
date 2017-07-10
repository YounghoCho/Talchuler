<?
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("./include.php");

//가장먼저 해당 업체의 이미지가 있는지 검사한다.
$sql="select filename from partnerImage where p_id='".$_SESSION['id']."'";
$q=mysql_query($sql);
$ch=mysql_fetch_array($q);

//만약 최초 이미지가 있으면
if($ch[0]!=''){
		//등록된 파일이 없으면 카피한다.
		if($_FILES['userfile']['tmp_name']==""){
			copy('./partnerpic/'.$ch[0].'.jpg', './partnerAsk/'.$ch[0].'.jpg');
			$filename=$ch[0];
		}else{
		//새로 등록된 파일이면 올린다.	
			$uploaddir = './partnerAsk/';
			$newuploadfile= $uploaddir. $_SESSION['id']."_".date("Ymdhis").".jpg";
			move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile);
			$filename=$_SESSION['id']."_".date("Ymdhis");
		}
		foo($filename);
}
//최초 이미지가 없으면 새로등록
else{
	if($_FILES['userfile']['tmp_name']==""){
	?>
		<script>
		alert("이미지를 먼저 선택해주세요");
		history.back();
		</script>
	<?
	}else{
		$uploaddir = './partnerAsk/';
		$newuploadfile= $uploaddir. $_SESSION['id']."_".date("Ymdhis").".jpg";
		move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile);

		$filename=$_SESSION['id']."_".date("Ymdhis");

		foo($filename);
	}
}
//

function foo($filename){

		//partnerAsk에 데이터 삽입한다.
		$sql="insert into partnerAsk (p_idx, p_agreement1, p_id, p_pw, p_name, p_shopName, p_phone, p_tele, p_businessNumber, p_postNumber1, p_location1, p_location2, p_email, p_agreement2, p_bank, p_bankNumber, p_depositor, p_agreement3, p_agreement4, p_localName, benefit1, benefit2, benefit3, benefit4, rule, time) values ('','', '".$_SESSION['id']."', '', '', '".$_POST['shopName']."', '', '".$_POST['p_tele']."', '', '".$_POST['postNumber1']."', '".$_POST['location1']."','".$_POST['location2']."', '', '', '','','','','','".$_POST['localName']."', '".$_POST['benefit1']."', '".$_POST['benefit2']."', '".$_POST['benefit3']."', '".$_POST['benefit4']."', '".nl2br($_POST['rule'])."', now());";
		//주목: id에 세션정보가 들어감. 매장전화번호는 $_POST['p_tele']가 들어감. localName이 들어감. benefit들과 rule이 추가됨.
		mysql_query($sql);

		//partnerImageAsk에 데이터 삽입한다.
		$sql="insert into partnerImageAsk (pi_idx, p_id, filename, time) values ('', '".$_SESSION['id']."', '".$filename."', now())";
		mysql_query($sql);
		?>
			<script>
			alert("수정 요청이 완료되었습니다. 관리자 확인 후 정보가 수정됩니다.")
			history.back();
			</script>
		<?
}
?>