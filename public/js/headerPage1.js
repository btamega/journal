jQuery(document).ready(function($) {
    var ua = navigator.userAgent,
    _device = (ua.match(/iPad/i)||ua.match(/iPhone/i)||ua.match(/iPod/i)) ? "smartphone" : "desktop";

    if(_device == "desktop") {
        $(".mod-login").bind('hover', function() {
            $(this).children(".dropdown-toggle").addClass(function(){
                if($(this).hasClass("open")){
                    $(this).removeClass("open");
                    return "";
                }
                return "open";
            });
            $(this).stop().children(".dropdown-menu").slideToggle('300');
        });
    }else{
        $('.mod-login .dropdown-toggle').bind('touchstart', function(){
            $('.mod-login .dropdown-menu').toggle();
        });
    }
});