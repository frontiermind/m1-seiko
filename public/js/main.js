// ページトップしゅるるーん


$(function() {
	$('.pagetop').hide();

	$(window).scroll(function() {
	// $('#pos').text($(this).scrollTop());
	// console.log($(this).scrollTop());
	if ($(this).scrollTop() > 100) {
	$('.pagetop').fadeIn();
	} else {
	$('.pagetop').fadeOut();
	}
	});

	// $('a[href^=#]').click(function(){
	// 	var speed = 500;
	// 	var href= $(this).attr("href");
	// 	var target = $(href == "#" || href == "" ? 'html' : href);
	// 	var position = target.offset().top;
	// 	$("html, body").animate({scrollTop:position}, speed, "swing");
	// 	return false;
	// });
$('a[href^=#]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });

});


// グローバルメニュー
$(function(){
  $(".gnav-toggle").click(function(){
    $(".gnav-inner").slideToggle();
    return false;
  });

  $(".menu-btn").click(function(){
    //$(".sub-menu").slideToggle();
    $("#gnav-sp").slideToggle();
    $(this).toggleClass('dropdown');
    return false;
  });

  $(".question dt").click(function(){
    $(this).next().slideToggle('fast');
    $(this).toggleClass('dropdown');
    return false;
  });

  $(window).resize(function(){
    var win = $(window).width();
    var p = 980;
    if(win > p){
      $(".gnav-inner").show();
    } else {
      $(".gnav-inner").hide();
    }
  });

});
