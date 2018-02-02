$(".p_go_top").click(function(){
		$("body , html").animate({scrollTop:'0'},'slow');
});
	
$(".floating .li_2").hover(function(){
	  var style=$(this);
	  cfsj = setTimeout(function(){
		  style.find('div').css({'background':'#3e444d'});
		  style.find('div').animate({'left':'-80px','width':'140px'});
		  style.find('div p').show();
	  },300);
  },function(){
  clearTimeout(cfsj);
  $(this).find('div').animate({'left':'0px','width':'49px'},300,function(){$(this).css({'background':'none'});});
  $(this).find('div p').hide(500);
});

$(".floating .li_3").hover(function(){
	  $(this).find('div').fadeIn(300);
  },function(){
	  $(this).find('div').fadeOut();
});
