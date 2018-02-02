$(document).ready(function(){
	
	var oInnerWidth_30,
	    oSlidesBetween = 20,
	    oSlidesPerView = 6, 
	    oSlidesPerGroup = 6;
	if(window.innerWidth){
		oInnerWidth_30 = window.innerWidth;
	}else{
		oInnerWidth_30 = document.documentElement.clientWidth||document.body.clientWidth;
	}

	if(oInnerWidth_30 >= 992){
		oSlidesBetween = 20;
		oSlidesPerView = 6;
		oSlidesPerGroup = 6;
	}else if(oInnerWidth_30>=768 && oInnerWidth_30<=991){
		oSlidesBetween=10;
		oSlidesPerView = 6;
		oSlidesPerGroup = 6;
	}else if(oInnerWidth_30 <= 767){
		oSlidesBetween = 10;
		oSlidesPerView = 2;
		oSlidesPerGroup = 2;
	}

	var mySwiper_30 = new Swiper('.public_index_30 .swiper-container',{
		slidesPerView: oSlidesPerView,
		slidesPerColumn: 2,
		slidesPerGroup: oSlidesPerGroup,
		spaceBetween : oSlidesBetween,
		pagination: '.public_index_30 .swiper-pagination',
		paginationClickable :true,
		onInit: function(){
			$(".public_index_30").resizeimgSize({
				proportion: 182/104
			});
		}
	});


	$(window).resize(function(){
		
		$(".public_index_30").resizeimgSize({
			proportion: 182/104
		});

		if(window.innerWidth){
			oInnerWidth_30 = window.innerWidth;
		} else{
			oInnerWidth_30 = document.documentElement.clientWidth||document.body.clientWidth;
		}

		if(oInnerWidth_30>=992){
			mySwiper_30.params.slidesPerView = 6;
			mySwiper_30.params.slidesPerGroup = 6;
			mySwiper_30.params.spaceBetween = 20;
		}else if(oInnerWidth_30>=768 && oInnerWidth_30<=991){
			mySwiper_30.params.slidesPerView = 6;
			mySwiper_30.params.slidesPerGroup = 6;
			mySwiper_30.params.spaceBetween = 10;
		}else if(oInnerWidth_30 <= 767){
			mySwiper_30.params.slidesPerView = 2;
			mySwiper_30.params.slidesPerGroup = 2;
			mySwiper_30.params.spaceBetween = 10;
		}

		mySwiper_30.init();
	});



});


