<?
include('./HeadTab_Module.php');
?>

<style>
.Head_left{float:left;margin-left:4%;margin-bottom:10px;margin-top:20px;font-size:25px;}
.Head_right{float:right;margin-right:4%;margin-bottom:10px;margin-top:20px;}
.Head_right_inner{float:left;}
hr{width:80%;margin-bottom:0px;}
table td{height:40px;text-align:left;}
input{padding:3px;}

.content{float:left;display:block;width:80%;margin-left:4%;margin-bottom:5px;padding:3px;}
.btn_bottom{padding:3px;padding-left:10px;padding-right:10px;margin-left:40px;margin-right:40px;}
.btn_div{float:left;display:block;width:80%;height:50px;margin-left:4%;margin-top:20px;text-align:center;}
</style>

<!--여기서부터 메인페이지를 자유롭게 작성하면 됩니다.-->
	<div style="height:90%;overflow:hidden;">
		<div class="Head_left">회원가입</div>
		<div class="Head_right">
			<div class="Head_right_inner">1.약관동의 >&nbsp;</div>
			<div class="Head_right_inner"><b>2.회원정보입력 >&nbsp;</b></div>
			<div class="Head_right_inner">3.가입완료&nbsp;</div>
		</div>
		<br>
		<hr>
		<div class="content">
			<table>
			<tr></tr>		
			<tr><td></td><td></td><td></td><td></td></tr>
			<tr><td>대표자</td><td><input type="text"/></td><td>성별</td><td><input type="text"/></td></tr>
			<tr><td>생년월일</td><td><input type="text"/></td><td>휴대폰 번호</td><td><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/></td></tr>
			<tr><td>브랜드명</td><td><input type="text"/></td><td>대표번호</td><td><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/><input type="text" style="width:80px;margin-right:20px;"/></td></tr>
			<tr><td>지점명</td><td><input type="text"/></td><td>영업시간</td><td><input type="text"/>~<input type="text"/></td></tr>
			<tr><td>사업자등록번호</td><td><input type="text"/></td><td>홈페이지</td><td><input type="text"/></td></tr>
			<tr><td>사업장소재지</td><td colspan="3"><input type="text"/></td></tr>

			<tr><td rowspan="2" style="vertical-align:top">카페로고 등록</td><td rowspan="2" style="vertical-align:top;"><img src="" alt=" " style="height:100%;width:90%"/></td><td colspan="2"><button>등록</button></td></tr>
			<tr><td colspan="2">JPG,PNG,500*400PX 권장.(900kb 미만)<br>권장 사이즈와 비율이 다르면 이미지가 왜곡되어 보이실 수 있습니다.</td></tr>

			<tr><td>아이디</td><td colspan="2"><input type="text"/><br>영문/숫자 조합 4자리~16자리</td><td></td></tr>
			<tr><td>비밀번호</td><td colspan="2"><input type="text"/>암호 보안수준 : <br>영문 대소문자/숫자/특수문자 중 두가지 이상 조합으로 8~16자리</td><td></td></tr>
			<tr><td>비밀번호확인</td><td><input type="text"/></td><td></td><td></td></tr>
			<tr><td>이메일</td><td colspan="2"><input type="text"/> @ <input type="text"/></td><td></td></tr>
			<tr><td></td><td colspan="2"><button>v</button>탈출러의 다양한 이벤트 및 소식을 받아보실 수 있습니다.</td><td></td></tr>
			</table>
		</div>
		<br>
		<div class="btn_div">
			<button class="btn_bottom" onclick="location.href='./register1.php'">이전</button>
			<button class="btn_bottom" onclick="location.href='./register3.php'">다음</button>
		</div>
		<br><br>
	</div>
<!--여기까지만 수정하시면 됩니다. 바깥은 건들지 말아주세요-->
</div>
<?
include('./Footer_Module.php');
?>

