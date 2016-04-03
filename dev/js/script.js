$(document).ready(function(e){
    $(".fancybox").fancybox();
    
    $(".fancybox")
    .fancybox({
        padding : 0
    });
    
    var $headerVideo = $("header video");
    var $header = $("header");
    var $headerContainer = $(".header-bg-container");
    var $window = $(window);
    
    if($headerVideo.get(0)){
        $headerVideo.get(0).addEventListener('loadeddata', function() {
           resize();
        }, false);
    }

    $window.scroll(function(e){
        $headerVideo.css("top", $window.scrollTop() / 3);
    });
    $window.resize(resize);
    
    function resize(e){
        var headerRatio = $headerContainer.width() / $headerContainer.height();
        var videoRatio = $headerVideo.width() / $headerVideo.height();
        
        $headerVideo.css("width", headerRatio > videoRatio ? "100%":"auto");
        $headerVideo.css("height", headerRatio > videoRatio ? "auto":"100%");

        $headerVideo.css("left", -($headerVideo.width() - $headerContainer.width()) / 2);
        $headerVideo.css("top", -($headerVideo.height() - $headerContainer.height()) / 2);
    }
});
