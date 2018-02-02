$(function(){
	var oInnerWidth_159;

	// 点击发表评论效果
	function public_commont_159(){
		if(true){
			location.href = "http://www.baidu.com";
		}else{

		}
	}
	$(".public_list_159 .commont .publish_commont .bottom .write_article textarea").focus(function(){
		public_commont_159();
	});
	$(".public_list_159 .commont .publish_commont .bottom .submit_article").click(function(){
		public_commont_159();
	});


	if($(".public_list_159 .commont .publish_commont .commont_phone .commont_phone_submit").length > 0){
		$(".public_list_159 .commont .publish_commont .commont_phone .commont_phone_submit").click(function(){
			$(".public_list_159 .fabiao_commonts").show();
			$(".public_list_159 .fabiao_commonts .fabiao_commonts_box textarea").focus();
		})
		$(".public_list_159 .fabiao_commonts").click(function(){
			$(this).hide();
		});
		$(".public_list_159 .fabiao_commonts .fabiao_commonts_box").click(function(ev){
			var ev = ev||event;
			ev.stopPropagation();
		});
		
	}
	
	

    $(window).resize(function(){
  	  if(window.innerWidth){
        oInnerWidth_159 = window.innerWidth;
      }else{
        oInnerWidth_159 = document.documentElement.clientWidth||document.body.clientWidth;
      } 
      if(oInnerWidth_159 <= 767){
      	if($(".public_list_159 .commont .more_commont_box").length > 0){
      		$(".public_list_159 .commont .published_commont").css("paddingBottom", "0.4rem");
      	}else{
      		$(".public_list_159 .commont .published_commont").css("paddingBottom", "0.66rem");
      	}
      }else{
      	$(".public_list_159 .commont .published_commont").css("paddingBottom", 0);
      }
    });

	// 计算.public_list_159 .commont .published_commont .published_commont_one .content的宽度
	$(".public_list_159 .commont .published_commont .published_commont_one .content").css("width", $(".public_list_159 .commont .published_commont .published_commont_one").width()-$(".public_list_159 .commont .published_commont .published_commont_one .pic").width()-parseInt($(".public_list_159 .commont .published_commont .published_commont_one .pic").css("marginRight"))-4+"px");
	$(window).resizeEnd({
		delay : 50	
	}, function(){
		$(".public_list_159 .commont .published_commont .published_commont_one .content").css("width", $(".public_list_159 .commont .published_commont .published_commont_one").width()-$(".public_list_159 .commont .published_commont .published_commont_one .pic").width()-parseInt($(".public_list_159 .commont .published_commont .published_commont_one .pic").css("marginRight"))-4+"px");
	});
	$(window).resizeEnd();

})