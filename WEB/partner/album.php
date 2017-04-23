<?
include('./include.php');
include('./HeadTab_Module.php');
?>

<style>

#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100%-220px); /* for Chrome, Safari */
    width :    -moz-calc(100%-220px); /* for Firefox */
    width :         calc(100%-220px); /* for IE */
	height:90%; /*Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
}

#Main_title_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100%-30px); /* for Chrome, Safari */
    width :    -moz-calc(100%-30px); /* for Firefox */
    width :         calc(100%-30px); /* for IE */
	overflow:auto;
	padding:30 0 30 50;
}

#Main_content_area{
	/*padding-left 크기 뺴줌*/
	width : -webkit-calc(100%-30px); /* for Chrome, Safari */
    width :    -moz-calc(100%-30px); /* for Firefox */
    width :         calc(100%-30px); /* for IE */
	overflow:auto;
	padding:2 0 2 50;
}

/*타이틀 부분*/

#Main_titlebar{
	display:table;
	width:100%;
	color:#666666;
	overflow:auto;
}


#Main_titlebar .title{
	display:table-cell;
	float:left;
	font-size:25px;
	font-weight:bold;
	padding-right:10px;
}

#Main_titlebar .sub_title{
	display:table-cell;
	float:left;
	font-size:17px;
	font-weight:lighter;
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

#image_group .main_img{
	width:405px;
	height:265px;
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
			<div class="sub_title">-앨범</div>
		</div>
	</div>

<?	
	//이미지 index를 넘기기위해 미리 선언한다.
	$sql="select * from partner where p_id='".$_SESSION['id']."';";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);
	$i=$data['album']-1;

?>
<style>
input[type="file"]{ position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip:rect(0,0,0,0); border: 0;}

</style>
	<div id="Main_content_area">
		<div id="Check_registration">
			<div class="left" style='font-size:14x;'>
			<form action="./albumAsk.php" method="POST" name="form" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="100000000" /><!--10mb제한-->
				<label for="cover" style=" display: inline-block;background-color:#66ccff;padding:5px;border:none;">업로드</label>
				<input name="userfile" id="cover" type="file" accept=".gif, .jpg, .png"/>
				<input type="hidden" name="album_count" value="<?echo $data['album_count']?>" /><!--사진을 여러장 보내기위한 절대상승값-->
				<input type="hidden" name="p_id" value="<?echo $data['p_id']?>" /><!--p_id-->
				<input type="hidden" name="p_shopName" value="<?echo $data['p_shopName']?>" /><!--p_shopName-->
				<input type="hidden" name="p_localName" value="<?echo $data['p_localName']?>" /><!--p_localName-->
				<input type="submit" value="승인요청" style="padding:6px 5px 6px 5px;background-color:#66ccff;margin-left:285px;border:none;"/>
			</form>
			</div>
			<div class="right">
			<!--<div class="text" style='padding-top:7px;'>내용입력가능</div>-->
			</div>
		</div>
		<?
		$sql="select path from album_path where p_id='".$_SESSION['id']."'";
		$q=mysql_query($sql);
		$path=mysql_fetch_array($q);
		?>
		<div id="image_group">
			<div class="image_stack">
					<!-- $i가 0인경우 메인사진-->
					<img src="./album/<?echo ($path[0])?>.jpg" class="main_img" onerror="this.style.display='none'"/>
			</div>
		<?
		//$i가 1이상인 경우 사진
		while($i>0 && $path2=mysql_fetch_array($q)){
		?>
			<div class="image_stack">
				<a href=" ">
					<img src="./album/<?echo ($path2['path'])?>.jpg" class="product_img" />
				</a>
			</div>
		<?
		$i--;
			}
		?>
		</div>
	</div>
</div>



<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>

