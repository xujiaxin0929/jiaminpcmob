<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title id="title"></title>

		<!--start_template_plugin_common_css-->






		<link href="lib/css/config.css" rel="stylesheet">
		<script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
		var oInnerWidth_font;
		if(window.innerWidth){
			oInnerWidth_font = innerWidth;
		}else {
			oInnerWidth_font = document.documentElement.clientWidth||document.body.clientWidth;
		}
		if(oInnerWidth_font <= 991){
			document.documentElement.style.fontSize = innerWidth/7.5+"px";
		}else{
			document.documentElement.style.fontSize = "14px";
		}

		onresize=function(){
			if(window.innerWidth){
				oInnerWidth_font = innerWidth;
			}else {
				oInnerWidth_font = document.documentElement.clientWidth||document.body.clientWidth;
			}
			if(oInnerWidth_font <= 991){
				document.documentElement.style.fontSize = innerWidth/7.5+"px";
			}else{
				document.documentElement.style.fontSize = "14px";
			}
			console.log('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx')
		}
		
		</script>
		<!--end_template_plugin_common_css-->
		<!--[if lt IE 9]>
			<script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
		<![endif]-->
		<!--[if (gte IE 6)&(lte IE 8)]>
			<script src="http://cdn.bootcss.com/selectivizr/1.0.2/selectivizr-min.js"></script>
		<![endif]-->
	
