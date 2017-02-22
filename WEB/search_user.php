<?
include('./index.php');
?>
<style>
#id02{
	position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
    padding-top: 60px;
	-webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
#pad2{
	width:260px;
	height:165px;
	border:none;
	background-color:#fff;
	color:#595757;
	font-weight: bold;
	overflow:hidden;	
}
</style>

<span id="id02">
	<center>
	<div id="pad2">
	<!--inner S-->
		<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;">
		탈출러 찾기
			<div style="float:right;margin-right:10px;"><button id="close">X</button></div>
		</div>

		<!--데이터 보내기-->
		<form action="./search_user_find.php" method="get" name="searchForm">
		<input name="search" style="width:95%;height:35px;border:1px solid;" value=" 찾으실 탈출러의 닉네임을 입력하세요" onfocus="this.value=''">
		
		<div style="padding-top:40px;">
			<button onclick="search_user()">확인</button>
		</div>
		</form>
		<!--inner E-->
	</div>
	</center>
</span>

<script>
var close= document.getElementById('close');
var modal2= document.getElementById('id02');

window.onclick= function(event){
	if(event.target== close){
		modal2.style.display="none";
	}
}
function search_user(){
	
	var f= getElementById('searchForm');
	f.submit();
}
</script>