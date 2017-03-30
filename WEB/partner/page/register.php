<html>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<style>
body{
	margin:0;
	padding:0;
}
.Head{
	width:100%;
	height:68px;
	border:1px solid;	
}
.Tab{
	float:left;
	width:220px;
	height:100%;
	border:1px solid;
}
.Main{
	border:1px solid;
	width:100%;
	height:100%;
}
./*body*/{
	width:100%;
	margin-top:-20px; /*기본 셋팅에 20px이 들어가있기때문에 빼준다*/
}
.Head_left{float:left;margin-left:4%;margin-top:20px;margin-bottom:10px;font-size:25px;}
.Head_right{float:right;margin-right:4%;margin-top:20px;margin-bottom:10px;}
.Head_right_inner{float:left;}
hr{width:80%;margin-bottom:0px;}
table{width:80%; margin-left:16%;}
table td{height:50px;text-align:left;border:1px solid;}
input{padding:3px;}
.btn_bottom{padding:3px;padding-left:10px;padding-right:10px;margin-left:40px;margin-right:40px;}
</style>
<body>
	<div class="Head">
		헤드 부분입니다.
	</div>
	<div class="Tab">
		탭 부분입니다.
	</div>
	<!--*body*-->
	<div class="">
		<div class="Head_left">회원가입</div>
		<div class="Head_right">
			<div class="Head_right_inner">1.약관동의 >&nbsp;</div>
			<div class="Head_right_inner">2.회원정보입력 >&nbsp;</div>
			<div class="Head_right_inner">3.가입완료&nbsp;</div>
		</div>
		<br>
		<hr><br>

		<table>
		<tr></tr>		
		<tr><td></td><td></td><td></td><td></td></tr>
		<tr><td>대표자</td><td><input type="text"/></td><td>성별</td><td><input type="text"/></td></tr>
		<tr><td>생년월일</td><td><input type="text"/></td><td>휴대폰 번호</td><td><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/></td></tr>
		<tr><td>브랜드명</td><td><input type="text"/></td><td>대표번호</td><td><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/></td></tr>
		<tr><td>지점명</td><td><input type="text"/></td><td>영업시간</td><td><input type="text"/>~<input type="text"/></td></tr>
		<tr><td>사업자등록번호</td><td><input type="text"/></td><td>홈페이지</td><td><input type="text"/></td></tr>
		<tr><td>사업장소재지</td><td colspan="3"><input type="text"/></td></tr>

		<tr><td rowspan="2" style="vertical-align:top">카페로고 등록</td><td rowspan="2" style="vertical-align:top;"><input type="text" style="height:90%;"/></td><td colspan="2"><button>등록</button></td></tr>
		<tr><td colspan="2">JPG,PNG,500*400PX 권장.(900kb 미만)<br>권장 사이즈와 비율이 다르면 이미지가 왜곡되어 보이실 수 있습니다.</td></tr>

		<tr><td>아이디</td><td colspan="2"><input type="text"/><br>영문/숫자 조합 4자리~16자리</td><td></td></tr>
		<tr><td>비밀번호</td><td colspan="2"><input type="text"/>암호 보안수준 : <br>영문 대소문자/숫자/특수문자 중 두가지 이상 조합으로 8~16자리</td><td></td></tr>
		<tr><td>비밀번호확인</td><td><input type="text"/></td><td></td><td></td></tr>
		<tr><td>이메일</td><td colspan="2"><input type="text"/> @ <input type="text"/></td><td></td></tr>
		<tr><td></td><td colspan="2"><button>v</button>탈출러의 다양한 이벤트 및 소식을 받아보실 수 있습니다.</td><td></td></tr>
		</table>
		<br>
		<center><button class="btn_bottom">이전</button><button class="btn_bottom">다음</button></center>
		
	</div>
	<br><br>
	<div class="Footer">
		<?
		include("../page/include_footer.php");
		?>
	</div>
</body>
</html>