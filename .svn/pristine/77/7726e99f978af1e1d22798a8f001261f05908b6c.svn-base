(function($) {
    $.fn.resizeimgSize = function(options) {
        //默认参数
        var defaults = {
            select_wrapper: "li",
            img_item: "",
            proportion: 842/595
        };

        //覆盖默认参数
        var opts = $.extend(defaults, options);
        var el = this;

        var start = function() {
            el.each(function() {
                var obj = $(this);
                var initwidth = 0;

                obj.find(opts.select_wrapper).each(function(index) {
                    if(index == 0) {
                        initwidth = $(this).innerWidth();
                    }
                    if(opts.img_item == '') {
                        $(this).find("img").height((Number(initwidth) / opts.proportion));
                    } else {
                        $(this).find("."+opts.img_item).height(Number(Number(initwidth) / opts.proportion));
                    }
                });
            });
        }
        return start();
    }
})(jQuery);
