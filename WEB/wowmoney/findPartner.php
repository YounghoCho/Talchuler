<?
include('./include.php');
include('./HeadTab_Module_Owner.php');
?>

<style>

#Main{
	/*Tab 크기 뺴줌*/
	width : -webkit-calc(100% - 240px); /* for Chrome, Safari */
    width :    -moz-calc(100% - 240px); /* for Firefox */
    width :         calc(100% - 240px); /* for IE */
	/*height:100%; Main의 높이를 90%로 조절합니다.*/
	overflow:hidden;
	float:left;
}
table{margin-top:30px;}
td{border: 1px solid #aaa;}
</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->

<div id="Main">
	<form action="./findPartner.php" method="POST" name="form">
	<table style="width:80%;">
		<tr>
			<td width="10%">회원검색</td>
			<td width="70%">
				<input type="checkbox" name="id" style="width:30px;height:30px;">아이디&nbsp;
				<input type="checkbox" name="name" style="width:30px;height:30px;">성명&nbsp;
				<input type="checkbox" name="shopName" style="width:30px;height:30px;">업체명&nbsp;
				<input type="checkbox" name="phone" style="width:30px;height:30px;">핸드폰번호&nbsp;
				<input type="checkbox" name="date" style="width:30px;height:30px;">가입일(ex: 2017-xx-xx)&nbsp;
				<br>
				<input type="text" name="search" style="width:70%;">&nbsp;
				<button type="submit" style="width:80px;height:50px;">검색</button>
			</td>
		</tr>
	</table>
	</form>

	<table style="width:80%;">
		<tr>
			<td>등록일</td><td>아이디</td><td>업체명(지점명)</td><td>이메일</td><td>성명</td><td>연락처</td><td>상태</td>
		</tr>
		<?
		if(!$_POST['id']=="")
			$sql="select * from partner where p_id like '%".$_POST['search']."%';";
		elseif(!$_POST['name']=="")
			$sql="select * from partner where p_name like '%".$_POST['search']."%';";
		elseif(!$_POST['shopName']=="")
			$sql="select * from partner where p_shopName like '%".$_POST['search']."%';";
		if(!$_POST['phone']=="")
			$sql="select * from partner where p_phone like '%".$_POST['search']."%';";
		elseif(!$_POST['date']=="")
			$sql="select * from partner where p_joinDate like '%".$_POST['search']."%';";

		$q=mysql_query($sql);

		while($data=mysql_fetch_array($q)){		
		?>

		<tr>
			<td><?echo $data['p_joinDate']?></td>
			<td><?echo $data['p_id']?></td>
			<td><?echo $data['p_shopName']?><?if(!$data['p_localName']=="")echo("(".$data['p_localName'].")")?><img src="./images/icon/right.png" style="margin-left:5px;"height="10px"></td>
			<td><?echo $data['p_email']?></td>
			<td><?echo $data['p_name']?></td>
			<td><?echo $data['p_phone']?></td>
			<td></td>
		</tr>
		<?
		}
		?>
	</table>
</div>
<style>
.btn{
	border:0px;
}
</style>

<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div> <!--body를 닫는 태그입니다.-->
<?
include('./Footer_Module.php');
?>

