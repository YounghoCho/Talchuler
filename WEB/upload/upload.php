<?php
// 4.1.0 이전의 PHP에서는, $_FILES 대신에 $HTTP_POST_FILES를
// 사용해야 합니다.
@session_start();
?>
<head charset='utf-8'>
<?

include("../page/include.php");

$uploaddir = './profiles/';
$newuploadfile= $uploaddir. $_SESSION['user_email'];


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile)) {
    ?>
		<script>
		alert("업로드 되었습니다.");
		history.back();
		</script>
	<?

} else {
	?>
		<script>
		alert("업로드 유무/파일 용량을 다시 확인해주세요.");
		history.back();
		</script>
	<?
}
?>