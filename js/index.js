function dialogPop(dlgId) {
    var scrWidth = $(window).width();
    var scrHeight = $(window).height();
    var dlgWidth = $("#" + dlgId).width();
    var dlgHeight = $("#" + dlgId).height();
    var pLeft = (scrWidth - dlgWidth) / 2;
    var pTop = (scrHeight - dlgHeight) / 2;
    $("#transBg").width(scrWidth);
    $("#transBg").height(scrHeight);
    $("#transBg").show();
    console.info(pTop);
    console.info(pLeft);
    $("#" + dlgId).css({
        "bottom": pTop,
        "left": pLeft
    });
    $("#" + dlgId).show();
    if (($("#" + dlgId).length > 0) && ($("#transBg").length > 0)) {
        $("#" + dlgId).click(function() {
            $(this).hide();
            $("#transBg").hide();
        });
        $("#transBg").click(function() {
            $("#" + dlgId).hide();
            $(this).hide();
        });
    }
}
