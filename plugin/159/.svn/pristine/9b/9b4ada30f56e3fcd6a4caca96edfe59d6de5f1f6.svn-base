<div class="public_list_159">
  <div class="commont">

    <div class="publish_commont">
      <div class="top clearfix">
        <div class="xingping" id="star_commont"></div>
        <div class="commont_num">已有<span>1998</span>人评价</div>
      </div>
      <div class="bottom clearfix">
        <div class="write_article">
          <textarea placeholder="马上发表"></textarea>
        </div>
        <div class="login_public_article">
          <form action="">
            <!-- 未登录的HTML  -->
            <!-- <input type="text" placeholder="账号">
            <input type="password"  placeholder="密码">
            <ul>
              <a href="">注册</a>
            </ul>
            <button class="submit_article_login">登录并发贴</button> -->
            <!-- 未登录的HTML结束  -->
              
            <!-- 已登录的HTML -->
            <!-- <div class="pic">
              <img src="<?php echo PLUGIN_ID_PATH?>images/user_pic_159.jpg" alt="">
            </div>
            <div class="name">有态度的网易评论</div>
            <ul>
              <a href="">退出</a>
            </ul>
            <button class="submit_article_login">马上发表</button> -->
            <!-- 已登录的HTML结束 -->
          </form>
        </div>
        <div class="submit_article">
          <span class="iconfont_159 icon-fabiao"></span>发表评论
        </div>
      </div>


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
      <!-- 一条评论 -->
      <!-- <div class="published_commont_one clearfix">
        <div class="pic">
          <img src="<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg" alt="">
        </div>
        <div class="content">
          <div class="title clearfix">
            <span class="nicheng">万年寒冰</span>
            <span class="data">发表于  05-25  14:34:58</span>
            <span class="evaluate"></span>
          </div>
          <div class="text">发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的</div>
          <div class="huifu">回复：很感谢您的评价！</div>
        </div>
      </div> -->
      <!-- 一条评论结束 -->
    </div> 
    
    <div class="more_commont_box">
      <div class="more_commont"><span class="iconfont_159 icon-jiahao"></span>查看更多评论</div>
    </div>

  </div>

  <div class="fabiao_commonts">
    <div class="fabiao_commonts_box">
      <textarea></textarea>
      <div class="fabiao_commonts_send">发送</div>
    </div>
  </div>
</div>

<script>
  function changeTime(timeStamp){
    var date = new Date(Number(timeStamp));
    return checkTime(date.getMonth()+1)+'-'+checkTime(date.getDate())+" "+checkTime(date.getHours())+":"+checkTime(date.getMinutes())+":"+checkTime(date.getSeconds());
  }
  function checkTime(num){
    var num = Number(num);
    if(num < 10){
      return '0'+num;
    }else{
      return num;
    }
  }

  $(function(){
    $.fn.raty.defaults.path = "./images";

    function add_commonts(startIndex, length, maxIndex, objs){
      if(startIndex < maxIndex){
        var str = '';
        if(maxIndex-startIndex > length){
          for(var i=startIndex; i<startIndex+length; i++){
            str += 
              '<div class="published_commont_one clearfix">'
                +'<div class="pic">'
                  +'<img src='+data_159[i].src+' alt="">'
                +'</div>'
                +'<div class="content">'
                  +'<div class="title clearfix">'
                    +'<span class="nicheng">'+data_159[i].nicheng+'</span>'
                    +'<span class="data">发表于'+changeTime(data_159[i].time)+'</span>'
                    +'<span class="evaluate"></span>'
                    +'<span class="zan">'
                    	+'<span class="zan_img">'
                    		+'<img src='+data_159[i].zan+' alt="">'
                    	+'</span>'
                    	+'<i>0</i>'
                    +'</span>'
                  +'</div>'
                  +'<div class="text">'+data_159[i].content+'</div>'
                  +'<div class="huifu">回复：'+data_159[i].huifu+'</div>'
                +'</div>'
              +'</div>';
          }
          $(".public_list_159 .commont .published_commont .lists").append(str);
          var objArr = $(objs);
          for(var j=startIndex; j<startIndex+length; j++){
            $(objArr[j]).raty({ 
              readOnly: true,
              score: data_159[j].score
            });
          }
        }else if(maxIndex-startIndex < length){
          for(var i=startIndex; i<maxIndex; i++){
            str += 
              '<div class="published_commont_one clearfix">'
                +'<div class="pic">'
                  +'<img src='+data_159[i].src+' alt="">'
                +'</div>'
                +'<div class="content">'
                  +'<div class="title clearfix">'
                    +'<span class="nicheng">'+data_159[i].nicheng+'</span>'
                    +'<span class="data">发表于'+changeTime(data_159[i].time)+'</span>'
                    +'<span class="evaluate"></span>'
                    +'<span class="zan">'
                    	+'<span class="zan_img">'
                    		+'<img src='+data_159[i].zan+' alt="">'
                    	+'</span>'
                    	+'<i>0</i>'
                    +'</span>'
                  +'</div>'
                  +'<div class="text">'+data_159[i].content+'</div>'
                  +'<div class="huifu">回复：'+data_159[i].huifu+'</div>'
                +'</div>'
              +'</div>';
          }
          $(".public_list_159 .commont .published_commont .lists").append(str);
          $(".public_list_159 .commont .more_commont_box").remove();

          var oInnerWidth_159_2;
          if(window.innerWidth){
            oInnerWidth_159_2 = window.innerWidth;
          }else{
            oInnerWidth_159_2 = document.documentElement.clientWidth||document.body.clientWidth;
          } 
          if(oInnerWidth_159_2 <= 767){
            if($(".public_list_159 .commont .more_commont_box").length > 0){
              $(".public_list_159 .commont .published_commont").css("paddingBottom", "0.4rem");
            }else{
              $(".public_list_159 .commont .published_commont").css("paddingBottom", "0.66rem");
            }
          }else{
            $(".public_list_159 .commont .published_commont").css("paddingBottom", 0);
          }
          $(".public_list_159 .commont .published_commont .lists").append('<p class="noMore">已显示全部数据</p>');


          var objArr = $(objs);
          for(var j=startIndex; j<maxIndex; j++){
            $(objArr[j]).raty({ 
              readOnly: true,
              score: data_159[j].score
            });
          }
        }else{
          for(var i=startIndex; i<startIndex+length; i++){
            str += 
              '<div class="published_commont_one clearfix">'
                +'<div class="pic">'
                  +'<img src='+data_159[i].src+' alt="">'
                +'</div>'
                +'<div class="content">'
                  +'<div class="title clearfix">'
                    +'<span class="nicheng">'+data_159[i].nicheng+'</span>'
                    +'<span class="data">发表于'+changeTime(data_159[i].time)+'</span>'
                    +'<span class="evaluate"></span>'
                    +'<span class="zan">'
                    	+'<span class="zan_img">'
                    		+'<img src='+data_159[i].zan+' alt="">'
                    	+'</span>'
                    	+'<i>0</i>'
                    +'</span>'
                  +'</div>'
                  +'<div class="text">'+data_159[i].content+'</div>'
                  +'<div class="huifu">回复：'+data_159[i].huifu+'</div>'
                +'</div>'
              +'</div>';
          }
          $(".public_list_159 .commont .published_commont .lists").append(str);
          $(".public_list_159 .commont .more_commont_box").remove();
          var oInnerWidth_159_2;
          if(window.innerWidth){
            oInnerWidth_159_2 = window.innerWidth;
          }else{
            oInnerWidth_159_2 = document.documentElement.clientWidth||document.body.clientWidth;
          } 
          if(oInnerWidth_159_2 <= 767){
            if($(".public_list_159 .commont .more_commont_box").length > 0){
              $(".public_list_159 .commont .published_commont").css("paddingBottom", "0.4rem");
            }else{
              $(".public_list_159 .commont .published_commont").css("paddingBottom", "0.66rem");
            }
          }else{
            $(".public_list_159 .commont .published_commont").css("paddingBottom", 0);
          }
          var objArr = $(objs);
          for(var j=startIndex; j<startIndex+length; j++){
            $(objArr[j]).raty({ 
              readOnly: true,
              score: data_159[j].score
            });
          }
        }
      }
    }

    var data_159 = [
      {"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497408680321', "score": "5", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497408680821', "score": "4", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497402680321', "score": "3", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497408690321', "score": "2", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497408680921', "score": "3", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497418680321', "score": "4", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497408620321', "score": "5", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497408686321', "score": "4", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
      ,{"src": "<?php echo PLUGIN_ID_PATH?>images/user_pic.jpg", "nicheng": "万年寒冰", "time": '1497408620321', "score": "5", "zan": "<?php echo PLUGIN_ID_PATH?>images/zan.png", "content": "发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的发布会举行的很成功，展示了很多已前没见过的东西，总而言之这次的发布会展示还是很成功的", "huifu": "很感谢您的评价！"}
    ];
    var initIndex = 0, initLength = 4, maxIndex = data_159.length;

    if(maxIndex == 0){
      $(".public_list_159 .commont .published_commont").append('<p class="noCommont">暂无评论！</p>');
    }
    if(maxIndex-initIndex<=initLength){
      $(".public_list_159 .commont .more_commont_box").remove();
    }
    add_commonts(initIndex, initLength, maxIndex, ".public_list_159 .commont .published_commont .published_commont_one .content .title .evaluate");


    // 电脑端点击加载
    $(".public_list_159 .commont .more_commont_box .more_commont").click(function(){
      initIndex += initLength;
      add_commonts(initIndex, initLength, maxIndex, ".public_list_159 .commont .published_commont_one .content .title .evaluate");
      $(".public_list_159 .commont .published_commont .published_commont_one .content").css("width", $(".public_list_159 .commont .published_commont .published_commont_one").width()-$(".public_list_159 .commont .published_commont .published_commont_one .pic").width()-parseInt($(".public_list_159 .commont .published_commont .published_commont_one .pic").css("marginRight"))-4+"px");
    });

    $("#star_commont").raty({ 
      score: 5
    });
    
    
    
    $("body").delegate(".zan","click",function(){
    	if ($(this).hasClass("active")) {
    		
    	} else{
    		$(this).addClass("active");
	    	var zan_num = $(this).find("i").html();
	    	zan_num++;
	    	zan_num = $(this).find("i").html(zan_num);
    	}
    	
    })
    
  });
  
  

</script>



