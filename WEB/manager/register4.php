<?
session_start();
include('./HeadTab_Module.php');
include('./include.php');
?>

<style>
#Main{
	height:80%;
	overflow:hidden;
 }
.member{
	width:80%;
	margin-left:4%;
	margin-top:1%;
	border-bottom:1px solid black;
}
.member .right{
	text-align:right;
	font-size:15pt;
	
}
.fs{
	font-size:25pt;
}
.done{margin-left:4%;margin-top:20px;width:80%;text-align:center;}

.btndiv{
	width:80%;
	height:30%;
	margin-left:4%;
	margin-top:3%;
}
.donebtn{
	font-size:15px;
	width:200px;
	height:35px;
	background-color:#66ccff;
	border:none;
}
</style>
<?
//트래픽 공격방어1
$sql="select p_id from partner where p_id='".$_POST['id']."';";
$query=mysql_query($sql);
if($data=mysql_fetch_array($query)){
	//이미 가입된 아이디인 경우 insert문을 반복해서 보내지 않도록 중단시킨다.
	?>
	<script>
	//	alert("이미 가입된 상태입니다.");
	//	location.href="./index.php";
	</script>
	<?
}else{
	echo("");
	}
$phone="".$_POST['phone1'].$_POST['phone2'].$_POST['phone3'];
$tele="".$_POST['tele1'].$_POST['tele2'].$_POST['tele3'];
$location="".$_POST['location1'].$_POST['location2'];				
$email="".$_POST['email1']."@".$_POST['email2'];				

if($_POST['agreement1']=='on')
	$_POST['agreement1']='1';
else
	$_POST['agreement1']='0';

if($_POST['agreement2']=='on')
	$_POST['agreement2']='1';
else
	$_POST['agreement2']='0';

if($_POST['agreement6']=='on')
	$_POST['agreement6']='1';
else
	$_POST['agreement6']='0';

if($_POST['agreement3']=='on')
	$_POST['agreement3']='1';
else
	$_POST['agreement3']='0';

//쿼리문전송
$sql="insert into partner (p_idx, p_agreement1, p_id, p_pw, p_name, p_shopName, p_phone, p_tele, p_businessNumber, p_postNumber1, p_location1, p_location2, p_email, p_agreement2, p_agreement6, p_bank, p_bankNumber, p_depositor, p_agreement3, p_agreement4,
p_joinDate, p_localName ) values ('','".$_POST['agreement1']."', '".$_POST['id']."', '".$_POST['pw']."', '".$_POST['name']."', '".$_POST['shopName']."', '".$phone."', '".$tele."', '".$_POST['businessNumber']."', '".$_POST['postNumber1']."', '".$_POST['location1']."','".$_POST['location2']."', '".$email."', '".$_POST['agreement2']."', '".$_POST['agreement6']."', '','','','".$_POST['agreement3']."','',now(),'');";
mysql_query($sql);

?>
<div id="Main">
	<div>
		<table class="member">
			<tr>
			<td class="fs"><b>회원가입</b></td>
			<td class="right">1.약관동의 > 2.회원정보입력 > 3.업체등록요청 > <b>4.가입완료</b></td>
			</tr>
		</table>
	</div>
	<div class="done"><font color="#666"><b><?echo ($_POST['shopName'])?> <br>탈출러매니저 회원가입을 환영합니다.<br><font color="#ccc">가입하신 아이디 : </font><?echo ($_POST['id'])?><br><br></font><font color="#ff0066">[내카페관리]에서 카페정보와 게임정보를 먼저 등록해주세요</font></b></div>
<!--자동로그인-->
<?
$_SESSION['id']=$_POST['id'];
?>
	<div class="btndiv">
		<center>
		<input type="button" class="donebtn" value="[카페정보관리] 바로가기" onclick="location.href='./cafeinfo.php'" style="font-weight:bold;">
		<input type="button" class="donebtn" value="[게임정보관리] 바로가기" onclick="location.href='./gameinfo.php'" style="font-weight:bold;">
		</center>
</div>
</div>
<?
include('./Footer_Module.php');
?>