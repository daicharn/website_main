//テキストタイピング風に文字をアニメーション化する関数
function animationTextTyping(){
    $('.texttyping').each(function(){
        let elempos = $(this).offset().top - 50;
        let scroll = $(window).scrollTop();
        let windowheight = $(window).height();
        let thischild = $(this).children();
        if(scroll >= elempos - windowheight){
            thischild.each(function(i){
                let time = 100;
                $(this).delay(time * i).fadeIn(time);
            });
        }
        else{
            thischild.each(function(){
                $(this).stop();
                $(this).css("display", "none");
            });
        }
    });
}

/*
$(window).on('load',() =>{
    //spanタグの追加
    let element = $('.texttyping');
    element.each(function(){
        let text = $(this).html();
        let textbox = "";
        text.split('').forEach((t) => {
            if(t !== " "){
                textbox += '<span>' + t + '</span>';
            }
            else{
                textbox += t;
            }
        });
        $(this).html(textbox);
    });
    //アニメーション化の実行
    animationTextTyping();
});
*/