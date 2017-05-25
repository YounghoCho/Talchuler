<?
include('./HeadTab_Module.php');

if($_POST['phone']==''){
	?>
	<script>
		alert("휴대폰 번호를 입력해주세요");
		history.back();
	</script>
	<?
}elseif(strrpos($_POST['phone'],"-")!=''){
	?>
	<script>
		alert("휴대폰 번호는 '-' 문자를 제외하고 입력해주세요.");
		history.back();
	</script>
	<?
}
?>

<style>
#Main{
	height:80%;
	overflow:hidden;
 }

#Main_container{
	height:100%;
	width:100%;
	padding-top:20px;
	padding-left:50px;
}

#Main_titlebar{
	width:100%;
	margin:5px 0 5px 0;
}
#Main_titlebar .title{
	float:left;
	font-size:25px;
	width:70%;
	color:#666666;
	margin-right:10px;
	margin:auto;
	margin-bottom:0px;
	padding-bottom:8px;
	font-weight:bold;
	border-bottom:2px solid #666666;
}
#Main_titlebar .subtitle{
	float:left;
	font-size:15px;
	margin:auto;
	margin-top:10px;
	margin-left:35px;
	font-weight:bold;
}

#user_info{
	width:100%;
	float:left;
	margin-top:30px;
	text-align:center;
}

#user_info .user_id{
	font-size:18px;
	font-weight:bold;
	margin:auto;
	width:70%;
	float:left;
}

#user_info .join_date{
	font-size:14px;
	margin:auto;
	width:70%;
	float:left;
}

#clickbox_area{
	width:100%;
	float:left;
	margin-top:30px;
}

#clickbox_house{
	width:70%;
	float:left;
	text-align:center;
}

#clickbox_house .empty_space{
	width:50px;
	display:inline-block;
}

#clickbox_house .rightblue{
	background:#66ccff;
	border:1px solid #06aeff;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .rightblue a{
	text-decoration:none; 
}

#clickbox_house .gray{
	background:#ebebeb;
	border:1px solid #919191;
	color:#696969;
	font-size:17px;
	font-weight:bold;
	width:120px;
	padding:5 0 5 0;
	display:inline-block;
}

#clickbox_house .gray a{
	text-decoration:none; 
}

.anything{
	float:left;
	margin:auto;
	width:30%;
}
</style>
<?
$sql="select p_id,p_joinDate from partner where p_phone='".$_POST['phone']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);
?>
<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
<div id="Main">
	<div id="Main_container">
		<div id="Main_titlebar">
			<div class="title">아이디 찾기</div>
			<div class="anything">&nbsp</div>
			<div class="anything">&nbsp</div>
			<div class="subtitle">고객님의 정보와 일치하는 아이디입니다.</div>
		</div>
		<div id="user_info">
			<div class="user_id"><?if($data['p_id']==''){echo("일치하는 정보가 없습니다.");}else{echo $data['p_id'];}?></div><div class="anything">&nbsp</div>
			<div class="join_date">(가입&nbsp;:&nbsp;<?echo substr($data['p_joinDate'],0,10)?>)</div><div class="anything">&nbsp</div>
		</div>
		<div id="clickbox_area">
			<div id="clickbox_house">
				<a href="./index.php"><div class="rightblue">로그인하기</div></a>
				<div class="empty_space">&nbsp</div>
				<a href="./pwFind1.php?email=<?echo $data['p_id']?>"><div class="gray">비밀번호 찾기</div></a>
			</div>
		</div>
	</div>
</div>



<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>
