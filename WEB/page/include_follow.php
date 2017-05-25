

<script type="text/javascript">
	$(function(){
		$('#side_fixed_banner').css({'height':($(window).height())+'px'});
		$(window).resize(function(){
			$('#side_fixed_banner').css({'height':($(window).height())+'px'});
		});
	});
</script>

<style>
	#side_fixed_banner{
		position:fixed;
		top:0;
		right:1%;
		overflow:visible;
		z-index:1000;
	}
	
	#side_fixed_banner .wrap{
		position:relative;
		width:130px;
		height:100%;
	}

	#side_fixed_banner img{
		width:130px;
		height:auto;
		position:absolute;
		top:0%;
		bottom:0;
		margin:auto;
	}

@media all and (max-width:1041px){
	#side_fixed_banner{display:none;}
	
	/*
	#side_fixed_banner .wrap{
		width:80px;
	}
	#side_fixed_banner img{
		width:80px;
	}
	*/
}


</style>


	<div id="side_fixed_banner">
		<div class="wrap">
		<img src="../images/banner/fixedbanner_kakaotalk.jpg"/>
		</div>
	</div>