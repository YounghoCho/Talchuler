<?
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("./include.php");

$uploaddir = './albumAsk/';
$newuploadfile= $uploaddir. $_SESSION['id'].$_POST['index'].".jpg";
move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile);
	
	//album 테이블만들고
	//album이 누구건지 id랑 이런거 저장하고
	//admin페이지에서 while(id)로 사진들을 계속 불러와서 보여주고
	//승인하면 해당 id partner에 album ++ 해주고
	//albumAsk에 있던 사진을 album으로 옮겨준다.

	?>
		<script>
		alert("등록 요청이 완료되었습니다. 관리자 확인 후 앨범이 수정됩니다.")
		history.back();
		</script>