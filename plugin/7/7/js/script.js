/**
    * [get_scss_name_value 根据name获取scss文件内值
    * @param  {[type]} scss [scss文件内容]
    * @param  {[type]} name [变量名(不含$)]
    * @return {[type]}      [返回变量文件内值]
*/
function get_scss_name_value(scss,name) {
    var scss_array = [];
    var scss_array2 = [];
    scss_array = scss.split('/**');
    for (var i = 0; i < scss_array.length; i++) {
        var q = scss_array[i].indexOf('*/');
        var v;
        if(q >= 0) {
            v = scss_array[i].substring(q+2);
            v = v.replace(/[ ]/g, "");    //去掉空格
            v = v.replace(/[\r\n]/g, ""); //去掉回车换行
            v = v.substring(0,v.length-1);
            var s = v.split(':');
            if(s[0] == ("$"+name)){
                return s[1];
            }
        }
    }
}

function fixed_head() {
    $.get('plugin/public_head_7/config.scss').success(function(content) {
        var public_wrap_div = '.'+get_scss_name_value(content,'public_wrap_div');
        var public_wrap_div_inner_box = '.'+get_scss_name_value(content,'public_wrap_div_inner_box');

        if(public_wrap_div != '' || public_wrap_div != null) {
            if($(window).width() > 767) {
                if($(window).scrollTop() > (parseInt($(public_wrap_div).outerHeight()) * 1.2)) {
                    var this_scrolltop = $(window).scrollTop();
                    if($(public_wrap_div).hasClass('fixed')) {
                        $(public_wrap_div).addClass('fixed');
                    } else {
                        $(public_wrap_div).stop().animate({
                            top: this_scrolltop
                        }, 600, function() {
                            $(public_wrap_div).removeAttr('style');
                            $(public_wrap_div).addClass('fixed');
                        });
                    }
                } else if($(window).scrollTop() < $(public_wrap_div).outerHeight()) {
                    var now_offset_top = $(public_wrap_div).offset().top;
                    $(public_wrap_div).removeClass('fixed');
                    $(public_wrap_div).css('top', now_offset_top);
                    $(public_wrap_div).stop().animate({
                        top: 0
                    }, 600, function() {
                        $(public_wrap_div).removeAttr('style');
                    });
                }
            } else {
                $(public_wrap_div).removeAttr('style');
                $(public_wrap_div).addClass('fixed');
            }
        }
    });
}

$(function() {
    fixed_head();
    $(window).scroll(function() {
        fixed_head();
    });
    $(window).resize(function() {
        fixed_head();
    });

    var nav_hover_ob = $('.ph7-pc-nav-box li');
    var nav_sub = ".nav-item-sub";

    if(nav_hover_ob.length > 0) {
        nav_hover_ob.hover(function() {
            if($(this).find(nav_sub).length > 0) {
                $(this).addClass('open');
                $(this).find(nav_sub).stop(false,true).slideDown();
            }
        }, function() {
            if($(this).find(nav_sub).length > 0) {
                $(this).removeClass('open');
                $(this).find(nav_sub).stop(false,true).slideUp();
            }
        });
    }

    var orgInitMenu = $.mmenu.defaults.initMenu;
	var $menu = $('#menu'),
		$form = $menu.find('.navbar-form'),
        $hamburger = $("#hamburger");

    if($menu.length > 0) {
        var $mmenu_ob = $menu.mmenu({
    		navbars: [{
    			content: 'searchfield'
    		}, true],
    		searchfield: {
    			search: false
    		},
            offCanvas: {
                position: 'right'
            },
            extensions: [
                'effect-listitems-slide'
            ],
    		initMenu: function($menu, $orig) {
    			$menu.find('.navbar-form').remove();
    			orgInitMenu.call(this, $menu, $orig);
    		}
    	}, {
    		clone: true,
    		searchfield: {
    			form 	: {
    				action 	: $form.attr( 'action' ),
    				method 	: $form.attr( 'method' )
    			},
    			input 	: {
    				name 	: $form.find( 'input' ).attr( 'name' )
    			},
    			submit 	: true
    		}
    	});

        var $mmenu_api = $mmenu_ob.data("mmenu");

        $hamburger.on("click", function() {
			if($(this).hasClass("is-active")) {
				$mmenu_api.close();
			} else {
				$mmenu_api.open();
			}
		});

		//绑定导航关闭和开启事件，给图标添加class才能启用动画
		$mmenu_api.bind("opened", function() {
			$hamburger.addClass("light");
			setTimeout(function() {
				$hamburger.addClass("is-active");
			}, 100);
		});
		$mmenu_api.bind("closed", function() {
			$hamburger.removeClass("light");
			setTimeout(function() {
				$hamburger.removeClass("is-active");
			}, 100);
		});
    }
});
