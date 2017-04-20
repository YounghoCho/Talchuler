<?
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("./include.php");

$uploaddir = './albumAsk/';
$newuploadfile= $uploaddir. $_SESSION['id'].$_POST['album_count']."_".date("Ymdhis").".jpg";
move_uploaded_file($_FILES['userfile']['tmp_name'], $newuploadfile);
	
	//ok, album 테이블만들고
	//ok, album이 누구건지 id랑 이런거 저장하고
	//admin페이지에서 while(id)로 사진들을 계속 불러와서 보여주고
	//승인하면 해당 id partner에 album ++ 해주고
	//albumAsk에 있던 사진을 album으로 옮겨준다.

//index를 내림차순으로 뽑는다. insert문에서 idx+1을 해서 auto_increased를 대신한다.
$idxsql="select al_idx from album order by al_idx desc;";
$idxquery=mysql_query($idxsql);
$idx=mysql_fetch_array($idxquery);

//admin에서 이미지를 불러올 filename이다.
$filename=$_SESSION['id'].$_POST['album_count'];
//not null로 설정된 컬럼일경우 insert시 반응이 없다. //al_inx는 1부터 시작하게됨.

//date()를 파일이름에 추가시킴.
$sql="insert into album (al_idx, p_id, p_shopName, p_localName, date, filename) values ('".$idx[0]."'+1,'".$_POST['p_id']."', '".$_POST['p_shopName']."', '".$_POST['p_localName']."', now(), '".$filename."_".date("Ymdhis")."')";
mysql_query($sql);

//이미지를 연속으로 넣기위해 절대상승값을 증가시켜준다
$add="update partner set album_count='".$_POST['album_count']."'+1 where p_id='".$_POST['p_id']."';";
mysql_query($add);
	?>
<script>
alert("등록 요청이 완료되었습니다. 관리자 확인 후 앨범이 수정됩니다.");
history.back();
</script>