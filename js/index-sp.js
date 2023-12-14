$(function(){
    $(".contact_tab input").click(function(){
    $(".contact_tab input").removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    
    $(".tab_content").removeClass("show");
    $(".tab_content").eq(index).addClass("show");
});
});

$(function(){
$(".tab_content dl.menu_headline").on("click", function() {
$(this).find('dd.hidden_menu').slideToggle();
});
});

$('#toggle').on('click',function(){
$(this).toggleClass('open');
});
$('#toggle').on('click',function(){
$('body').toggleClass('open');
});
/*********************************
フェードイン
*********************************/
$(function(){
$(window).ready(function (){
    $('.fadeUp_slow').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
            $(this).addClass('slow');
        }
    });
});
});


$(function(){
$(window).scroll(function (){
    $('.fadeUp,.mask-bg').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
            $(this).addClass('run');
        }
    });
});
});
$(function(){
$(window).scroll(function (){
    $('.smooth').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
            $(this).addClass('is-animated');
        }
    });
});
});
$(function(){
$(window).load(function (){
    $('.fade').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
            $(this).addClass('fadeIn');
        }
    });
});
});
$(function(){
$(window).ready(function (){
    $('.fade_op').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
            $(this).addClass('fadeIn');
        }
    });
});
});


/*********************************
contact up
*********************************/

$(function(){
$('a[href^=#]').click(function() {
var speed = 500; // スクロール速度(ミリ秒)
var href = $(this).attr("href");
var target = $(href == "#" || href == "" ? 'html' : href);
var position = target.offset().top;
$('html').animate({scrollTop:position}, speed, 'swing');
return false;
});
});
/*********************************
slider
*********************************/

// $(function(){    
// 	$('.salon_slider').slick({
// 		autoplay:true,
// 		autoplaySpeed:2000,
// 		dots:true,
// 		infinite:true,
// 		arrows: true, 
// 		slidesToShow: 1,
// 		slidesToScroll: 1,
// 	});
// });

$(function(){
$('.slider').slick({
  autoplay: true, // 自動でスクロール
  autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
  speed: 8000, // スライドが流れる速度を設定
  cssEase: "linear", // スライドの流れ方を等速に設定
  slidesToShow: 2, // 表示するスライドの数
  slidesToScroll: 1,
  swipe: false, // 操作による切り替えはさせない
  arrows: false, // 矢印非表示
  pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
  pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
  responsive: [
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1, // 画面幅750px以下でスライド3枚表示
      }
    }
  ]
});
});


$(function(){    
$('.howto_slider').slick({
    autoplay:true,
    autoplaySpeed:2000,
    dots:false,
    infinite:true,
    arrows: true, 
    slidesToShow: 3.3,
    slidesToScroll: 1,
    responsive: [
        {
              breakpoint: 768, // 399px以下のサイズに適用
            settings: {
            slidesToShow: 1,
            centerMode: true,
            centerPadding: "5%",
            adaptiveHeight: true,
            },
        },
    ],
});
});
/*********************************
matchHeight
*********************************/


