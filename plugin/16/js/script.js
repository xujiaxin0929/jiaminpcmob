$(function(){
	cut_title();
	$(".public-list-16").resizeimgSize({
		select_wrapper: ".news_img",
		proportion: 842/595
	})
})
$(window).resize(function(){
	$(".public-list-16").resizeimgSize({
		select_wrapper: ".news_img",
		proportion: 842/595
	})
})

