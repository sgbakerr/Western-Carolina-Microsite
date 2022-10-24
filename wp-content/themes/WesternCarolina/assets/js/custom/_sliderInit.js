

Project.sliderInit = function () {

  var slider = tns({
    container: '.slider',
    items: 1,
    controls: false,
    nav: false,
    edgePadding: 60,
    slideBy: 1,
    mouseDrag: true,
    autoplay: false,

    // gutter: 30,
    // center: true,
    responsive: {
      "768": {
        center: true,
        edgePadding: 80,
        items: 2
      },
      "1024": {
        edgePadding: 80,
        items: 3
      },
      "1580": {
        items: 3
      }
    }
  });



  sliderInfo = slider.getInfo();

  sliderInfo.slideItems[sliderInfo.index].classList.add('center')


  function showModal() {

    $('.modal .close').on('click', function () {
      $(this).parent('.modal').removeClass('active')
      $(this).siblings('.video-wrap').find('video')[0].pause();


    });

    $('.slide.center .play').on('click', function () {
      $(`#${$(this).parent('.slide').attr('data-modal')}`).addClass('active')
    });

    $('.modal-show').on('click', function () {
      $(`#${$(this).attr('data-modal')}`).addClass('active')
      var vid = $(`#${$(this).attr('data-modal')}`).find('video');
      vid[0].play();
    });
  }
  showModal();

  $(window).on('load resize', function () {
    slideHeight = $('.slide.center').innerHeight();
    $('.slider').css({
      minHeight: slideHeight
    })
  });

  slider.events.on("transitionStart", function (info) {

    info.slideItems[info.indexCached].classList.remove('center');
    info.slideItems[info.index].classList.add('center');

    showModal();

  });

  $('.previous-button').on('click', function () {
    slider.goTo('prev');
  });

  $('.next-button').on('click', function () {
    slider.goTo('next');


  });

  // info.slideItems[indexPrev].classList.remove('active');
  // info.slideItems[indexCurrent].classList.add('active');
}