$(function($) {
    var scrolltop = $('.btn_scrolltop');
    $(window).scroll(function(){
        const scrollAmount = $(window).scrollTop();
        $('.item').each(function(){
            const targetPosition = $(this).offset().top;
            if(scrollAmount > targetPosition - 600){
                $(this).addClass("item-fadein");
            }
            else{
                $(this).removeClass("item-fadein");
            }
        });
        if(scrollAmount > 300){
            scrolltop.addClass("btn_scrolltop_fadein");
        }
        else{
            scrolltop.removeClass("btn_scrolltop_fadein");
        }
    });
    scrolltop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        //a要素のリンクを無効化
        return false;
    });
});