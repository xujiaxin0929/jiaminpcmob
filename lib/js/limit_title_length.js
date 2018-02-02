// // 在需要的div内加 cut_title class名，        必加
// // data-cut-full-title=""属性，              必加
// // data-cut-num=""代表>1200显示字数，        必加(只有该参数时，所有的设备都按>1200限制的字数显示)
// // data-cut-num-pad=""代表992-1200显示字数， 可有可无，没有时按>1200限制的字数显示 
// // data-cut-num-pad2=""代表768-992显示字数， 可有可无，没有时按>1200限制的字数显示
// // data-cut-num-phone=""代表<768显示字数。      可有可无，没有时按>1200限制的字数显示    
// data-cut-full-title="" data-cut-num="" data-cut-num-pad="" data-cut-num-pad2="" data-cut-num-phone=""


// <script>
// cut_title();   // 只需调用该函数即可
// </script>



var cut_innerwidth = 0;

function cut_title(){
  if($(".cut_title[data-cut-full-title]")){
    media_cut_title(".cut_title[data-cut-full-title]");
    $(window).resize(function(){
      media_cut_title(".cut_title[data-cut-full-title]");
    });
  }
}


function media_cut_title(eles_cut){
  if(window.innerWidth){
    cut_innerwidth = window.innerWidth;
  }else{
    cut_innerwidth = document.documentElement.clientWidth||document.body.clientWidth;
  }
  $(eles_cut).each(function(index, ele){
    if($(ele).attr("data-cut-full-title") == ""){
      $(ele).attr("data-cut-full-title", $(ele).text());
    }
    var pc_length = Number($(ele).attr("data-cut-num")),
        pad_length_cut = Number($(ele).attr("data-cut-num-pad")),
        pad2_length_cut = Number($(ele).attr("data-cut-num-pad2")),
        phone_length_cut = Number($(ele).attr("data-cut-num-phone"));
    var data_cut_full_title = $(ele).attr("data-cut-full-title");
    if(pc_length){
      if(cut_innerwidth >= 1200){
        if(data_cut_full_title.length > pc_length){
          $(ele).text($(this).attr("data-cut-full-title").substr(0, pc_length) + "...");
        }else{
          $(ele).text($(this).attr("data-cut-full-title"));
        }
      }else if(cut_innerwidth>=992 && cut_innerwidth<1200){
        if(pad_length_cut){
          if(data_cut_full_title.length > pad_length_cut){
            $(ele).text($(this).attr("data-cut-full-title").substr(0, pad_length_cut) + "...");
          }else{
            $(ele).text($(this).attr("data-cut-full-title"));
          }
        }else{
          if(data_cut_full_title.length > pc_length){
            $(ele).text($(this).attr("data-cut-full-title").substr(0, pc_length) + "...");
          }else{
            $(ele).text($(this).attr("data-cut-full-title"));
          }
        }
      }else if(cut_innerwidth>=768 && cut_innerwidth<992){
        if(pad2_length_cut){
          if(data_cut_full_title.length > pad2_length_cut){
            $(ele).text($(this).attr("data-cut-full-title").substr(0, pad2_length_cut) + "...");
          }else{
            $(ele).text($(this).attr("data-cut-full-title"));
          }
        }else{
          if(data_cut_full_title.length > pc_length){
            $(ele).text($(this).attr("data-cut-full-title").substr(0, pc_length) + "...");
          }else{
            $(ele).text($(this).attr("data-cut-full-title"));
          }
        }
      }else{
        if(phone_length_cut){
          if(data_cut_full_title.length > phone_length_cut){
            $(ele).text($(this).attr("data-cut-full-title").substr(0, phone_length_cut) + "...");
          }else{
            $(ele).text($(this).attr("data-cut-full-title"));
          }
        }else{
          if(data_cut_full_title.length > pc_length){
            $(ele).text($(this).attr("data-cut-full-title").substr(0, pc_length) + "...");
          }else{
            $(ele).text($(this).attr("data-cut-full-title"));
          }
        }
      }
    }
  });
}


$(document).ready(function(){
  cut_title();
});
