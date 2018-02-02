  $(window).load(function(){
    $(".public-index-191 .menu").append('<div class="line"></div>');

   
   $(".public-index-191 .menu>li").bind("mouseenter",function() {
      var line = $(".public-index-191 .menu .line");
     
      if (line.css("display") == "none") line.show();
      line.stop().animate({
        width: $(this).width(),
        left: parseInt($(this).position().left) + 0 + "px"
      }, 300)

    })
    $(".public-index-191 .menu>li").bind("mouseleave", function() {
      //没有当前状态时，离开导航，跟随线消失
      //
      //$(".public-index-191 li.cur").trigger("mouseenter");

      if($('.public-index-191 .menu li.cur').length==0){
        $(".public-index-191 .menu .line").hide();
      }else{

      		var line = $(".public-index-191 .menu .line");
    	 line.stop().animate({
	        width: $('.public-index-191 .menu li.cur').width(),
	        left: parseInt($('.public-index-191 .menu li.cur').position().left) + 0 + "px"
	      }, 300);


      }
    }).trigger("mouseleave");


    if($('.public-index-191 .menu li.cur').length>0){
    	 var line = $(".public-index-191 .menu .line");
    	 line.stop().animate({
	        width: $('.public-index-191 .menu li.cur').width(),
	        left: parseInt($('.public-index-191 .menu li.cur').position().left) + 0 + "px"
	      }, 300);
    }

  })
  










$(function() {
	
	//初始化手机端导航
	if($("nav#menu").length > 0) {
		$("nav#menu").mmenu({
			"extensions": ["theme-blue"],
			"slidingSubmenus": true,
			"offCanvas": {
            	"position": "right"
        	},
        	"navbar": {
	        	"title": "MENU"
        	}
		});
	}

	//电脑端导航下拉菜单效果
	$(".web-menu li").hover(function() {
		$(this).find(".web-menu-subnav").slideDown(200);
	}, function() {
		$(this).find(".web-menu-subnav").stop(true,true).slideUp(200);
	});
	
	//手机端banner导航效果
	if($(".cb-main ul li").length > 0) {
		$(".cb-main ul").animate({scrollLeft: $(".cb-main ul li.active").offset().left}, 1000);
	}
});


var nav_81_bool = false;    // 控制是否启用header下划线
if(nav_81_bool){
	$(window).scroll(function(){
		var nav_81_scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
		var nav_81_innerHeight = 0;

		if(window.innerHeight){
			nav_81_innerHeight = window.innerHeight;
		}else{
			nav_81_innerHeight = document.documentElement.clientHeight||document.body.clientHeight;
		}

		if(nav_81_scrollTop >= nav_81_innerHeight){
			$("#header_web").css("border-bottom", "1px solid #000000");
		}else{
			$("#header_web").css("border-bottom", "none");
		}
		
	});
}





$(".menu li").hover(function(){
	$(this).find(".show_sec").stop(true,true).slideDown()
},function(){
	$(this).find(".show_sec").slideUp()
})
