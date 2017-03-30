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
		메인 부분입니다.
	</div>

<br><br>
	<div class="Footer">
		<?
		include("./include_footer.php");
		?>
	</div>
</body>
</html>