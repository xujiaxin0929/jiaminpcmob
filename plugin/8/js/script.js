$(function() {
    var public_slide_8 = $("#public_slide_8");//获取轮换图对象
    var public_slide_8_img = $(".public-slide-8-img");//获取轮换图图片class
    var public_slide_8_text = $(".public-slide-8-text");//获取轮换图文字对象
    var web_width = 0;
    var web_height = 0;
    if(window.innerWidth){
      web_width = window.innerWidth;
      web_height = window.innerHeight;
    }else{
      web_width = document.documentElement.clientWidth||document.body.clientWidth;
      web_height = document.documentElement.clientHeight||document.body.clientHeight;
    }
    $(".public-slide-8 .bx-wrapper").css("height", "436");
    $(".public-slide-8 ul li").css("height", "436");
    

    if(public_slide_8.length > 0) {
        public_slide_8.bxSlider({
            pause: 5000,
            auto: false,//自动播放 true 或 false
            infiniteLoop: true,//循环播放 true 或 false
            pager: true,//开启小点点 true 或 fasle
            controls: true,//开启左右控制 true 或 fasle
            autoHover: true,//鼠标悬停是否暂停滚动 true 或 false
            onSliderLoad: function(currentIndex) {//轮换图初始化回调函数
                public_slide_8_img.removeClass("ps8i-in").eq(currentIndex).addClass("ps8i-in");
                public_slide_8_text.removeClass("ps8t-show").eq(currentIndex).addClass("ps8t-show");
            },
            onSlideAfter: function($slideElement, oldIndex, newIndex) {//轮换图滑动到下一张后的回调函数
                public_slide_8_img.removeClass("ps8i-in").eq(newIndex).addClass("ps8i-in");
                public_slide_8_text.removeClass("ps8t-show").eq(newIndex).addClass("ps8t-show");
            }
		});
    }
});




var slide_8_pagination = 1920 / 436;        // 填入图片的宽、高比例
$(window).resize(function(){ 
  if(window.innerWidth){
    web_width = window.innerWidth;
    web_height = window.innerHeight;
  }else{
    web_width = document.documentElement.clientWidth||document.body.clientWidth;
    web_height = document.documentElement.clientHeight||document.body.clientHeight;
  }
  $(".public-slide-8 ul li").css("height", "436");

  if(web_width/web_height > slide_8_pagination){
    
    $(".public-slide-8 ul li").css("backgroundSize", "100% auto").css("backgroundPosition", "center center");
  }else{
    $(".public-slide-8 ul li").css("backgroundSize", "auto 100%").css("backgroundPosition", "center center");
  }
});





