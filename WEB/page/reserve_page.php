<?
	include("./include_head.php");
	include('include.php');
	print_r($_POST);
	//게임정보 호출
	$sql="select * from game where g_idx='".$_POST['g_idx']."'";
	$q=mysql_query($sql);
	$data=mysql_fetch_array($q);
?>
<body>
	<div style="width:80%;margin-left:10%;border:1px solid;margin-top:5px;margin-bottom:20px;">
		<div style="border:1px solid;width:100%;height:35px;font-size:19px;padding:5px;">
			예약하기
		</div>
		<div style="width:100%;height:560px;background-color:#eee;">
			<div style="background-color:#fff;width:490px;height:140px;border:1px solid;float:left;margin-left:32px;margin-top:15px;display:inline-block;">
<style>
 td{
	border:1px solid red;
 }
 </style>
				<table style="width:390px;height:106px;margin-left:50px;margin-top:17px;">
					<tr>
						<td>업체명_게임명</td><td>XXX_<?echo $data['g_name']?></td>
					</tr>
					<tr>
						<td>날짜 및 시간</td><td>XXXX.XX.XX - <?echo $_POST['gr_time']?></td>
					</tr>
					<tr>
						<td>인원</td><td>2명</td>
					</tr>
				</table>
			</div>
			<div style="background-color:#fff;width:490px;height:240px;border:1px solid;float:left;margin-left:32px;margin-top:15px;display:inline-block;">
				<table style="width:390px;height:100px;margin-left:50px;margin-top:10px;">
					<tr>
						<td width="30px">ㅁ</td><td>방탈출카페 이용안내 동의</td>
					<tr>
						<td></td><td>-인원 추가 요금은 현장결제입니다.<br>-제공 정보는 업체 사정에 따라 변경될 수 있습니다.<br>-업체 현장에서 게임 컨디션 및 서비스로 인해 발생된 분쟁은 탈출러에서 책임지지 않습니다</td>
					</tr>
					<tr>
						<td>ㅁ</td><td>예약 취소 및 환불규정 동의</td>
					</tr>
					<tr>
						<td></td><td>-업체 사정에 의해 취소 발생 시 100% 환불이 가능합니다.<br>-예약카페 별 정보에 기재된 취소,환불 규정을 반드시 확인 후 이용해주시기 바랍니다.<br>-예약 이후의 취소는 취소/환불규정에 의거하여 적용됩니다.<br>-취소,변경 불가상품은 규정과 상관없이 취소,변경이 불가합니다.</td>
					</tr>
				</table>						

			</div>

			<div style="background-color:#fff;width:490px;height:120px;border:1px solid;float:left;margin-left:32px;margin-top:-85px;display:inline-block;">
				<table style="width:390px;height:100px;margin-left:50px;margin-top:10px;">
					<tr>
						<td>예약자 아이디</td><td><?echo $_SESSION['user_email']?></td>
					</tr>
					<tr>
						<td>휴대폰 번호</td><td>XXX-XXXX-XXXX</td>
					</tr>
				</table>						
			</div>

			<div style="background-color:#fff;width:490px;height:120px;border:1px solid;float:left;margin-left:32px;margin-top:15px;">
				<table style="width:390px;height:100px;margin-left:50px;margin-top:10px;">
					<tr>
						<td>최종 결제금액</td><td>22,000원</td>
					</tr>
					<tr>
						<td></td><td>업소에서 정한 예약금을 결제합니다</td>
					</tr>
				</table>						
			
			</div>

			<div style="background-color:#fff;width:490px;height:160px;border:1px solid;float:left;margin-left:32px;margin-top:-85px;">
				<table style="width:390px;height:100px;margin-left:50px;margin-top:30px;">
					<tr>
						<td height="50px">ㅁ</td><td>현장에서 결제</td><td>방탈출카페에서 직접 결제</td>
					</tr>
					<tr>
						<td height="50px">ㅁ</td><td>바로 결제</td><td>앱에서 지금 결제</td>
					</tr>

				</table>			
			
			</div>
			
			<div style="background-color:#4edcfe;width:90%;height:50px;border:1px solid;float:left;margin-left:32px;margin-top:20px;font-size:18px;font-weight:bold;text-align:center;line-height:45px;">예약 하기
			</div>
		</div>

		
	</div>
</body>
<?
	include("./include_footer.php");
?>

