<?
include('./include.php');
include('./HeadTab_Module.php');
if($_GET['refresh']==1){
   header( "Location: index.php" );
}
?>

<style>

#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 220px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 220px); /* for Firefox */
    width :         calc(100% - 220px); /* for IE */
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
	font-family:'NotoSansCJKkr-Regular.eot';
	overflow:auto;
}

#Main_title_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 30px); /* for Firefox */
    width :         calc(100% - 30px); /* for IE */
	overflow:visible;
	margin:50 0 0 33;
	padding:0 0 30 26;
}

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100% - 30px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 30px); /* for Firefox */
    width :         calc(100% - 30px); /* for IE */
	overflow:auto;
	padding:2 0 2 59;
}

/*타이틀 부분*/

#Main_titlebar{
	display:table;
	width:100%;
	height:auto;
	color:#666666;
}


#Main_titlebar .title{
	display:table-cell;
	float:left;
	font-size:25px;
	line-height:26px;
	font-weight:bold;
	padding-right:10px;
	margin-top:-3px;
}

#Main_titlebar .sub_title{
	display:table-cell;
	float:left;
	font-size:17px;
	font-weight:lighter;
	margin-top:5px;
	font-weight:normal;
}

/*타이틀 부분*/

/*사진등록 버튼 부분*/

#Check_registration{
	width:100%;
	overflow:auto;
}

#Check_registration .text{
	font-size:15px;
	font-weight:bold;
	color:#696969;
}

.left{
	float:left;
}

.right{
	float:right;
}

/*사진등록 버튼 부분*/

/*이미지 쌓이는 영역*/

#image_group{
	overflow:auto;
	max-width:1033px;
}

#image_group .image_stack{
	padding:5 5 0 0;
	float:left;
}

#image_group .image_stack a{
	
}
#image_group .product_img{
	width:200px;
	height:130px;
}


/*이미지 쌓이는 영역*/

/*클릭박스 디자인 영역==============================================================================*/

.clickbox_rightblue{
	background:#56dcfc;
	border:1px solid #30d3fc;
	color:#666666;
	font-weight:bold;
	font-size:14px;
	width:90px;
	padding:2 0 2 0;
	text-align:center;
}

.left a{
	text-decoration:none;
	color:#3e3e3e;
}


/*클릭박스 디자인 영역==============================================================================*/


</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->

<div id="Main">
	<div id="Main_title_area">
		<div id="Main_titlebar">
			<div class="title">카페정보관리</div>
			<div class="sub_title">-&nbsp앨범</div>
		</div>
	</div>

<?	
	//이미지 index를 넘기기위해 미리 선언한다.
	$sql="select * from partner where p_id='".$_SESSION['id']."';";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);
	$i=$data['album'];

?>
<style>
input[type="file"]{ position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip:rect(0,0,0,0); border: 0;}

</style>
	<div id="Main_content_area">
		<div id="Check_registration">
			<div class="left" style='font-size:14x;'>
			<form action="./albumAsk.php" method="POST" name="form" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="10000000" /><!--10mb제한-->
				<label for="cover" style=" display: inline-block;background-color:#66ccff;padding:5px;border:none;">사진추가</label>
				<input name="userfile" id="cover" type="file" accept=".gif, .jpg, .png" onclick="admitColorChange()"/>
				<input type="hidden" name="album_count" value="<?echo $data['album_count']?>" /><!--사진을 여러장 보내기위한 절대상승값-->
				<input type="hidden" name="p_id" value="<?echo $data['p_id']?>" /><!--p_id-->
				<input type="hidden" name="p_shopName" value="<?echo $data['p_shopName']?>" /><!--p_shopName-->
				<input type="hidden" name="p_localName" value="<?echo $data['p_localName']?>" /><!--p_localName-->
				<input type="button" onclick="submiter()" value="승인요청" id="targetButton" style="display:none; padding:6px 5px 6px 5px; background-color:#ff6600; color:#ffffff; margin-left:7px; border:none;margin-top:-5px;"/>
				<div id="imageNotice" style="display:none;"><font style="color:#ff6600;">승인요청 해주시면 탈출러에서 검토, 승인 후 탈출러 웹사이트에 등록됩니다.(최대3일소요)</font></div>
				<div id="imageSize" style="display:inline; margin-left:5px;"><font color="#FF6600" size="3px"><b><사진추가 – 사진 선택 – 승인요청></b>을 한 장씩 진행해주세요.</font></div>
			</form>
			</div>
			<div class="right">
			<!--<div class="text" style='padding-top:7px;'>내용입력가능</div>-->
			</div>
		</div>
		<?
		//메인사진불러오기
		$sql="select path, ap_idx from album_main where p_id='".$_SESSION['id']."'";
		$q=mysql_query($sql);
		$main=mysql_fetch_array($q);

		//앨범불러오기
		$sql="select path, ap_idx from album_path where p_id='".$_SESSION['id']."'";
		$q=mysql_query($sql);
		?>
		<div id="image_group">
			<div class="image_stack">
					<!-- $i가 0인경우 메인사진-->
					<div style="width:405px;height:278px;border:1px solid #999;">
						<img src="./album/<?echo ($main[0])?>.jpg" class="main_img" onerror="this.src='./images/button/plus.png';this.style.width='40%';this.style.marginLeft='30%';this.style.marginTop='13%';" style="width:100%;z-index:0"/>
						<p style="z-index:1;margin-top:-160px;margin-left:10px;color:#56dcfc;">메인사진</p>
					</div>
			</div>
		<?
		//$i가 1이상인 경우 사진
		while($path=mysql_fetch_array($q)){
		?>
			<div class="image_stack" style="margin:3px;cursor:pointer;" onclick="popupalbum(value='<?echo ($path['path'])?>', ap_idx='<?echo ($path['ap_idx'])?>')">
					<img src="./album/<?echo ($path['path'])?>.jpg" class="product_img" />
			</div>
		<?
		}
		?>
		</div>
	</div>
</div>

<style>
#popupzone{position:absolute;top:25%;left:15%;width:70%;height:50%;background-color:RGBA(1,1,1,0.8);display:none;}
#makemain{float:left;width:6%;height:30px;margin:10px;}
#deletepic{float:left;width:6%;height:30px;margin:10px 0px 10px 0px;}
#empty{float:left;width:81%;height:30px;}
#close{float:left;width:3%;height:30px;margin:10px;}
#leftbutton{float:left;width:15%;height:80%;text-align:center;}
#rightbutton{float:left;width:70%;height:80%;}
#centerpicture{float:left;width:15%;height:80%;text-align:center;}
#imagepath{width:36%;height:90%;margin-left:32%;margin-top:2%;}
@media all and (max-width:1024px){
	#empty{float:left;width:76%;height:30px;}
	#imagepath{width:80%;height:90%;margin-left:10%;margin-top:5%;}
}
</style>
<div id="popupzone">
	<div id="makemain"><input type="button" value="메인등록" style="width:100%;height:100%;background-color:#66ccff;border:none;cursor:pointer;" onclick="gotomain()"/></div>
	<div id="deletepic"><input type="button" value="삭제" style="width:100%;height:100%;color:#444;border:none;cursor:pointer;" onclick="deletepicture()"/></div>
	<div id="empty"></div>
	<div id="close" onclick="closer()"><input type="button" value="x" style="width:100%;height:100%;color:#ccc;border:none;font-weight:bold;font-size:26px;cursor:pointer;background-color:RGBA(50,50,50,0.1);"/></div>
	<div id="leftbutton"><!--<img src="./images/button/left.png" style="width:30px;margin-top:90%;cursor:pointer;"/>--></div>
	<div id="rightbutton"><img src="" id="imagepath"></p></div>
	<div id="centerpicture"><!--<img src="./images/button/right.png" style="width:30px;margin-top:90%;cursor:pointer;"/>--></div>
	
</div>


<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
<script>
function admitColorChange(){   
	setTimeout(function(){
		
		var target=document.getElementById('targetButton');
		target.style.display='inline';
		var imageNotice= document.getElementById('imageNotice');
		imageNotice.style.display='inline';
		var imageNotice= document.getElementById('imageSize');
		imageNotice.style.display='none';
	}, 1500)
	
}
</script>
<script>
var ap;
var filename;

function popupalbum(value, ap_idx){
	var popup= document.getElementById('popupzone');
	popup.style.display="block";
	var imagepath= document.getElementById('imagepath');
	imagepath.src='./album/'+value+'.jpg';
	ap=ap_idx;//전역변수에 앨범의 고유번호를 넣어준다.
	filename=value;
}
function closer(){
	var popup= document.getElementById('popupzone');
	popup.style.display="none";
}
function deletepicture(){
	if(confirm("사진을 지우시겠습니까?")==true){
		location.href="./album_delete.php?ap_idx="+ap+"&filename="+filename+"";
	}
	else return;
}
function gotomain(){
	if(confirm("메인 사진으로 등록하시겠습니까?")==true){
		location.href="./album_gotomain.php?ap_idx="+ap+"&filename="+filename+"";
	}
	else return;
}
</script>
<script>
function submiter(){
   var f=document.form;
   var file= document.getElementById('cover');
   if(file.value==""){
      alert('사진 파일을 선택해주세요.');
	}else{
		f.submit();
	}
}
</script>