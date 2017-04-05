<?
include('./HeadTab_Module.php');
?>

<style>
.Head_left{float:left;margin-left:4%;margin-bottom:10px;margin-top:20px;font-size:25px;}
.Head_right{float:right;margin-right:4%;margin-bottom:10px;margin-top:20px;}
.Head_right_inner{float:left;}

hr{width:80%;margin-bottom:0px;}
input{padding:3px;}

.policy{float:left;display:block;width:80%;height:140px;margin-left:4%;margin-bottom:5px;padding:3px;border:1px solid;}
.agree{float:left;display:block;width:80%;height:50px;margin-left:4%;margin-bottom:5px;background-color:#ddd;padding:3px;}
.certify{float:left;display:block;width:80%;height:200px;margin-left:4%;margin-bottom:5px;margin-top:20px;padding:3px;}
.btn_bottom{padding:3px;padding-left:10px;padding-right:10px;margin-left:40px;margin-right:40px;}
.btn_div{float:left;display:block;width:80%;height:50px;margin-left:4%;margin-top:20px;text-align:center;}
table {width:50%;}
table td{height:50px;}
</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
	<div style="height:80%;overflow:hidden;">
		<div class="Head_left">회원가입</div>
		<div class="Head_right">
			<div class="Head_right_inner"><b>1.약관동의 >&nbsp;</b></div>
			<div class="Head_right_inner">2.회원정보입력 >&nbsp;</div>
			<div class="Head_right_inner">3.가입완료&nbsp;</div>
		</div>
		<br>
		<hr>
		
		<div class="policy" style="margin-top:20px;">서비스 이용약관</div>
		<div class="policy">개인정보 수집 이용약관</div>
		<div class="agree">
			<button style="width:20px;height:20px;float:left"></button>
			탈출러 서비스 이용약관 [필수], 개인정보 수집 및 이용 [필수], 에 모두 동의합니다<br>
			회원가입을 위해 이용약관 및 개인정보 수집 및 이용에 관한 안내문 읽고 동의해주세요.
		</div>
		<div class="certify">
			<font size="5pt"><b>회원인증</b>&nbsp;</font>안전한 회원가입을 위해 사업체 정보를 입력하신 후 회원인증 해주세요.<br>
			<table>
				<tr>
					<td style="width:20%">대표자인증</td>
					<td style="width:55%"><button>휴대폰 인증</button><button style="margin-left:10px;">아이핀 인증</button></td>
				</tr>
				<tr>
					<td style="width:20%">상호</td>
					<td style="width:55%"><input type="text" /></td>
				</tr>
				<tr>
					<td style="width:20%">사업자등록번호</td>
					<td style="width:55%"><input type="text" size="4"/>&nbsp;-&nbsp;<input type="text" size="4"/>&nbsp;-&nbsp;<input type="text" size="4"/><button style="margin-left:10px;">중복확인</button></td>
				</tr>
			</table>
		</div>
		<div class="btn_div">
			<button class="btn_bottom" onclick="location.href='./index.php'">이전</button>
			<button class="btn_bottom" onclick="location.href='./register2.php'">다음</button>
		</div>
		<br><br>
	</div>
	
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>

<!--
		<div class="certify">

		</div>
-->