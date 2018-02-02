$(document).ready(function(){
	$(".down_son").click(function(){
		turn_menu($(this));
	});

	$('.first_nav').find('div.active').each(function(){
		turn_menu($(this));
	});

	function turn_menu(obj){
		$(obj).parent().siblings().find("ul:eq(0)").hide();
		$(obj).parent().siblings().find('div:eq(0)').removeClass("active");

		$(obj).next("ul:eq(0)").slideDown();
		$(obj).addClass("active");
	}

})