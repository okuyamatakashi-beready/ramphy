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
$('.header_nav ul.gnav li a').on('click',function(){
	$('body').removeClass('open');
	});
$('.tab_content > dl.menu_headline').on('click',function(){
	$(this).toggleClass('active');
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

if(navigator.userAgent.match(/(iPhone|iPod|Android)/)){
	$(function(){    
		$('.news_list').slick({
			autoplay:false,
			autoplaySpeed:2000,
			dots:false,
			infinite:true,
			arrows: true, 
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: true,
			centerPadding: "15.5%",
		});
	});
}
if(!navigator.userAgent.match(/(iPhone|iPod|Android)/)){
	
	$(function(){    
		$('.blog_list').slick('unslick');
	});
}
$(function(){    
	$('.howto_slider').slick({
		autoplay:true,
		autoplaySpeed:2000,
		dots:false,
		infinite:true,
		arrows: true, 
		slidesToShow: 2.4,
		slidesToScroll: 1,
		responsive: [
			{
			  	breakpoint: 768, // 399px以下のサイズに適用
				settings: {
				slidesToShow: 1,
				adaptiveHeight: true,
				},
			},
		],
	});
});


/*********************************
	モーダル
*********************************/

$(function () {
	$('.interview_open').click(function () {
		$("body").addClass("no_scroll");
		var id = $(this).data('id-interview');
		$('#overlay_interview, .interview_modal_inner[data-id-interview="modal' + id + '"]').fadeIn().css('display','block');
	});
		
	$('.js-close , #overlay_interview').click(function () {
		$("body").removeClass("no_scroll");
		$('#overlay_interview, .interview_modal_inner').fadeOut();
	});
});

$(function(){
	$('.interview_modal_inner').each(function(i){
		$(this).attr('data-id-interview','modal' + (i+1));
	});
  });
  $(function(){
	$('ul.staff_list li .staff_text .interview_open').each(function(i){
		$(this).attr('data-id-interview', + (i+1));
	});
  });


  /*********************************
	クロストーク
*********************************/

$(function () {
	$('.crosstalk_open').click(function () {
		$("body").addClass("no_scroll");
		var id = $(this).data('id-crosstalk');
		$('#overlay_crosstalk, .crosstalk_modal_inner[data-id-crosstalk="modal' + id + '"]').fadeIn().css('display','block');
	});
		
	$('.js-close , #overlay_crosstalk').click(function () {
		$("body").removeClass("no_scroll");
		$('#overlay_crosstalk, .crosstalk_modal_inner').fadeOut();
	});
});

$(function(){
	$('.crosstalk_modal_inner').each(function(i){
		$(this).attr('data-id-crosstalk','modal' + (i+1));
	});
  });
  $(function(){
	$('ul.staff_list li .staff_text .crosstalk_open').each(function(i){
		$(this).attr('data-id-crosstalk', + (i+1));
	});
  });