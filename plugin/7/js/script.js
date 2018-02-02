$(function() {

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
            "extensions": ["theme-blue"],
            "slidingSubmenus": true,
            "offCanvas": {
                "position": "right"
            },
            "navbar": {
                "title": ""
            }
        }, {
            clone: true,
            searchfield: {
                form    : {
                    action  : $form.attr( 'action' ),
                    method  : $form.attr( 'method' )
                },
                input   : {
                    name    : $form.find( 'input' ).attr( 'name' )
                },
                submit  : true
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
