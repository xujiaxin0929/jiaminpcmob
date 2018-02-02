$(document).ready(function(){
  cut_title();

  $('.public-index-53').resizeimgSize({
    proportion: 1.257,
    img_item:"first_img"
  });


  $(window).resize(function() {
    $('.public-index-53').resizeimgSize({
      proportion: 1.257,
      img_item:"first_img"
    });
  });
  
});