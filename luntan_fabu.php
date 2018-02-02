<?php include "public/top.php";?><!--start_template_plugin_self_css-->



<link rel="stylesheet" type="text/css" href="plugin/191/css/style.css" />
<link rel="stylesheet" type="text/css" href="/plugin/191/css/jquery.mmenu.all.css" />
<link href="plugin/136_3/css/swiper.min.css" rel="stylesheet">
<link href="plugin/136_3/css/style.css" rel="stylesheet">
<link href="plugin/30_1/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/forum.css" />
<!--end_template_plugin_self_css-->
<?php include "public/all_css.php";?>
</head>
<body>
<?php include "public/head.php";?>
    
    	<div class="forum release_box">
		<div class="content">

			<!--面包屑        开始-->
			<div class="bread">
				<div class="bread_cont w1200"><a href="/">首页</a> &gt; <a href="{:U('Index/luntan_index')}">论坛</a></div>
			</div>
			<!--面包屑        END-->

			<div class="release">
				<h4>发布</h4>
				<form action="{:U('Index/luntan_insert')}" method="post" name="form" id="form">
					<select name="category_id">
						<foreach name="category_list" item="v">
						<option value="{$v.id}">{$v.name}</option>
						</foreach>
					</select>
					<input type="" name="title" id="" value="" placeholder="请输入标题" class="fabu_pc_title"/>
					<textarea name="content" rows="" cols="" class="fabu_pc_text"></textarea>
					<button type="submit" class="fabu_btn">发布</button>
				</form>
			</div>
		</div>

	</div>
	<script type="text/javascript">
		
		$('.fabu_btn').click(function(){
			if($('.fabu_pc_text').val() == ''||$('.fabu_pc_title').val() == ''){
				alert('内容不能为空')
				return false;
			}
		})
	</script>



<?php include "public/footer.php";?>
<?php include "public/bottom.php";?>

<!--start_template_plugin_self_js-->






	<script src="plugin/191/js/jquery.mmenu.all.min.js"></script>
	<script src="plugin/191/js/script.js"></script>
	<script src="js/index.js"></script>
	<script src="plugin/136_3/js/swiper.min.js"></script>
	<script src="plugin/136_3/js/script.js"></script>
	<script src="plugin/30_1/js/script.js"></script>
<!--end_template_plugin_self_js-->