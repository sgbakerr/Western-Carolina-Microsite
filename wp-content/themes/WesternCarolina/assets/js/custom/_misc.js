Project.miscScripts = function () {  
  $('document').ready(function(){
    $('.card.form .two-col p:empty, .card.form .two-col br').remove();
    $('.wpcf7-form p > *').unwrap();
  });
  // $(function(){
    
  // });


  // var formBannerHeight = $('.form-banner').innerHeight();
  // $(window).on('load resize', function(){
  //   if($(this).innerWidth() > 1024) {
  //     $('.form-banner figure img').css({
  //       height: formBannerHeight, 
  //       objectFit: 'cover'
  //     })
  //   }
  // });

};