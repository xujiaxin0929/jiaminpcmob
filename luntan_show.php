<?php include "public/top.php";?><!--start_template_plugin_self_css-->



<link href="plugin/16/css/style.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/bxslider/4.2.5/jquery.bxslider.min.css" rel="stylesheet">
<link href="plugin/8/css/style.css" rel="stylesheet">

<link href="http://cdn.bootcss.com/jQuery.mmenu/5.7.8/css/jquery.mmenu.all.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/jQuery.mmenu/5.7.8/wrappers/bootstrap/jquery.mmenu.bootstrap.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/hamburgers/0.7.0/hamburgers.min.css" rel="stylesheet">
<link href="plugin/7/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="plugin/191/css/style.css" />
<link rel="stylesheet" type="text/css" href="/plugin/191/css/jquery.mmenu.all.css" />
<link href="plugin/159/css/iconfont/iconfont.css" rel="stylesheet">
<link href="plugin/159/css/iconfont2/iconfont.css" rel="stylesheet">
<link href="plugin/159/css/iconfont3/iconfont.css" rel="stylesheet">
<link href="plugin/159/css/style.css" rel="stylesheet">
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
				<div class="bread_cont w1200"><a href="/">首页</a> &gt; <a href="/Index/Index/luntan_index.html">论坛</a></div>
			</div>
			<!--面包屑        END-->

			<div class="release">
				<div class="forum_deta">
					<h4>111111</h4>
					<div class="date"><span>时间：2017-09-07</span><span>用户：111522</span></div>
					<div class="cont_txt">2222222</div>
				</div>
			</div>

			<form class="date_text">
				你需要登录后才可以回帖 <a href="/User/Login/login.html">登录</a> | <a href="/User/Login/regist.html">注册</a>
				<textarea class="pc_textarea" name="" rows="" cols="" placeholder='马上发表'></textarea>
				<input type="button" class="pc_btn" value="提交">
			</form>


			<div class="public_list_159">
				<div class="commont">

					<div class="publish_commont">
						<!-- 手机端评论 -->
						<div class="commont_phone clearfix">
							<button class="commont_phone_submit" type="button">
				          <span class="iconfont_159 icon-fabiao"></span>评一下
				        </button>
							<div class="publiced_commont_phone">
								<span class="iconfont icon-liuyan"></span>1998
							</div>
						</div>
					</div>

					<div class="published_commont">
						<div class="lists"></div>
					</div>

					<div class="more_commont_box">
						<div class="more_commont"><span class="iconfont_159 icon-jiahao"></span>查看更多评论</div>
					</div>

				</div>

				<div class="fabiao_commonts">
					<div class="fabiao_commonts_box">
						<textarea class="mobile_textarea"></textarea>
						<div class="fabiao_commonts_send">发送</div>
					</div>
				</div>
			</div>

			<script>
				function changeTime(timeStamp) {
					var date = new Date(Number(timeStamp));
					return checkTime(date.getMonth() + 1) + '-' + checkTime(date.getDate()) + " " + checkTime(date.getHours()) + ":" + checkTime(date.getMinutes()) + ":" + checkTime(date.getSeconds());
				}
				function checkTime(num) {
					var num = Number(num);
					if (num < 10) {
						return '0' + num;
					} else {
						return num;
					}
				}




				$(function () {
					//存储添加好数据的变量
					var str = '';
					//声明一个存储后台获取的res的变量
					var data_159;
					var luntanId = 44;

					//进入页面展示评论
					showTxt(1)

					//评论数据的长度
					var listLength = data_159.list ? data_159.list.length : 0;
					//模板字符串 pc端判断user是否登录用
					var token_html = `<textarea class="pc_textarea" name="" rows="" cols="" placeholder='马上发表'></textarea>
				<input type="button" class="pc_btn" value="提交">`
					var token_txt = `你需要登录后才可以回帖 <a href="/User/Login/login.html">登录</a> | <a href="/User/Login/regist.html">注册</a>
				<textarea class="pc_textarea" name="" rows="" cols="" placeholder='马上发表'></textarea>
				<input type="button" class="pc_btn" value="提交"> `

					//判断用户信息是否登录
					var token_pd = $.cookie('token');
					if (token_pd != '') {
						$('.date_text').html(token_html)
						$('.pc_btn').addClass('pc_btn_change')
					}
					if (!token_pd) {
						$('.date_text').html(token_txt)
					}


					// pc端发送评论内容
					$('.pc_btn').click(function () {
						var URL_LOGIN = "/index.php?m=User&c=login&a=login";
						var URL_FABU = '/Index/Index/luntan_fabu.html';
						var token_obj = $.cookie('token');
						if (!token_obj) {
							token_obj = "";
							alert('请登录后再回帖!');
							return false;
						}

						if ($('.pc_textarea').val() == '') {
							alert('请输入需要评论的内容')
						} else {
							var formData = $('.pc_textarea').val();
							var data = {
								'content': formData,
								"luntan_id": luntanId
							}
							var res = function (res) {
								// console.log(res)
								$('.pc_textarea').val('');
								location.reload([true])

							}

							var err=function(res){
								// console.log(res)
							}

							model_api.get_json(" /Api/Index/luntan_insert", data, res, err)
						}

					})

					//移动端发送评论内容
					$('.fabiao_commonts_send').click(function () {
						// console.log('进来了')
						if ($('.mobile_textarea').val() == '') {
							alert('请输入需要评论的内容')
						} else {

							var formData = $('.mobile_textarea').val();
							var data = {
								'content': formData,
								"luntan_id": luntanId
							}
							var res = function (res) {
								// console.log(res)
								$('.pc_textarea').val('');
								location.reload([true])

							}

							model_api.get_json(" /Api/Index/luntan_insert", data, res, err)
						}
					})

					//如果当前页等于总页数 删除查看更多按钮并添加全部加载完成按钮
					if (data_159.page.now_page == data_159.page.total_pages) {
						$(".public_list_159 .commont .more_commont_box").remove();
						$(".public_list_159 .commont .published_commont").append('<p class="noCommont">全部评论加载完成</p>');
					}
					add_data()

					//PC端点击加载
					var num = 1;
					$('.public_list_159 .commont .more_commont_box .more_commont').click(function () {
						num += 1;
						var data = {
							'luntan_id': luntanId,
							'page': num
						}
						var res = function (res) {
							console.log('----------------------------')
							console.log(res)
							console.log('-----------------------------')
							data_159 = res.data
							add_data()
							//如果已经加载完全部数据 删除加载更多 添加加载完成
						if (data_159.page.now_page == data_159.page.total_pages) {
							$(".public_list_159 .commont .more_commont_box").remove();
							$(".public_list_159 .commont .published_commont").append('<p class="noCommont">全部评论加载完成</p>');
						}
							$(".public_list_159 .commont .published_commont .published_commont_one .content").css("width", $(".public_list_159 .commont .published_commont .published_commont_one").width() - $(".public_list_159 .commont .published_commont .published_commont_one .pic").width() - parseInt($(".public_list_159 .commont .published_commont .published_commont_one .pic").css("marginRight")) - 4 + "px");
						}
						
						

						var err = function (err) {
							console.log('点击获取数据失败啦')
						}
						model_api.get_json("/Api/Index/luntan_pinglun", data, res, err)
					});









					//获取数据的方法

					function showTxt(pageNum) {
						var data = {
							'luntan_id': luntanId,
							"page": pageNum
						}
						var res = function (res) {

							data_159 = res.data
							if (data_159.list) {
							}
						}
						var err = function (err) {
							console.log('123');
						}
						model_api.get_json("/Api/Index/luntan_pinglun", data, res, err)
					}






					//从后端获取数据展示到前端的模板
					function add_data() {

						var str='';
						for (var i = 0; i <  data_159.list.length; i++) {
							str +=
								'<div class="published_commont_one clearfix">'
								+ '<div class="pic">'
								+ '<img src=' + data_159.list[i].user_pic + ' alt="">'
								+ '</div>'
								+ '<div class="content">'
								+ '<div class="title clearfix">'
								+ '<span class="nicheng">' + data_159.list[i].user_name + '</span>'
								+ '<span class="data">发表于&nbsp&nbsp' + changeTime(data_159.list[i].time) + '</span>'
								+ '</div>'
								+ '<div class="text">' + data_159.list[i].content + '</div>'
								+ '<div class="huifu" style="display: ' + data_159.list[i].hf + ';">回复：' + data_159.list[i].huifu + '</div>'
								+ '</div>'
								+ '</div>';
						}
						console.log($(str));
						$(".public_list_159 .commont .published_commont .lists").append(str);
						var oInnerWidth_159_2;
						if (window.innerWidth) {
							oInnerWidth_159_2 = window.innerWidth;
						} else {
							oInnerWidth_159_2 = document.documentElement.clientWidth || document.body.clientWidth;
						}
						if (oInnerWidth_159_2 <= 767) {
							if ($(".public_list_159 .commont .more_commont_box").length > 0) {
								$(".public_list_159 .commont .published_commont").css("paddingBottom", "0.4rem");
							} else {
								$(".public_list_159 .commont .published_commont").css("paddingBottom", "0.66rem");
							}
						} else {
							$(".public_list_159 .commont .published_commont").css("paddingBottom", 0);
						}

					}




				})
			</script>

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


<script src="plugin/191/js/jquery.mmenu.all.min.js"></script>
<script src="plugin/191/js/script.js"></script>
<script src="js/index.js"></script>
<script src="plugin/136_3/js/swiper.min.js"></script>
<script src="plugin/136_3/js/script.js"></script>
<script src="plugin/30_1/js/script.js"></script>
<script src="plugin/16/js/script.js"></script>
<script src="plugin/8/js/jquery.bxslider.js"></script>
<script src="plugin/8/js/script.js"></script>
	<script src="plugin/159/js/jquery.raty.min.js"></script>
	<script src="plugin/159/js/script.js"></script>
<!--end_template_plugin_self_js-->
<!-- 
<script src="/xc/User/View/Common/js/Base64.js"></script>

<script src="/xc/User/View/Common/lib/js/jquery.cookie.js"></script>

<script src="/xc/User/View/Common/js/config.js"></script>

<script src="/xc/User/View/Common/js/public.js"></script>

<script src="/xc/User/View/Common/js/ApiCommonModel.js"></script>

<script src="/xc/User/View/Common/js/UserCenterModel.js"></script>

<script src="/xc/User/View/Common/js/UserModel.js"></script> -->

<script>
  $('.fb,.m_fb_btn').on('click',function(){
  	test_user();
  })
	function  test_user(){
	    var URL_LOGIN="/index.php?m=User&c=login&a=login";
	    var URL_FABU='{:U('Index/Index/luntan_fabu')}';
	    var token_obj = $.cookie('token');
	    if(!token_obj){
	      token_obj = "";
	        Bomb_box('该操作需要登录！',0,1);
	        setTimeout(function(){
	          location.href = URL_LOGIN;
	        },1000);
	    }
	    else{
	    	   location.href = URL_FABU;
	    }
	}
</script>
