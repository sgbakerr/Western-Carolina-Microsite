Project.sliderInit = function () {


  $(window).on('load', function () {
    $('.video-hero').addClass('fadeIn');
  });

  $(window).keyup(function (e) {
    // console.log()
    if (e.originalEvent.key === 'Escape') {
      $('.video-wrap').find('video')[0].pause();
      $('.modal').removeClass('active')
    }
  });

  function showModal() {
    $('.modal .close').on('click', function () {
      $(this).parent('.modal').removeClass('active')
      $(this).siblings('.video-wrap').find('video')[0].pause();
    });



    $('.modal-show').on('click', function () {
      $(`#${$(this).attr('data-modal')}`).addClass('active')
      var vid = $(`#${$(this).attr('data-modal')}`).find('video');
      vid[0].play();
    });


  }
  showModal();
  if ($('.slider').length > 0) {
    var slider = tns({
      container: '.slider',
      items: 1,
      controls: false,
      nav: false,
      edgePadding: 0,
      slideBy: 1,
      mouseDrag: true,
      autoplay: false,
      responsive: {
        "768": {
          center: true,
          items: 2
        },
        "1024": {
          items: 4,
          center: true,
        },
        "1580": {
          items: 3,
          center: true,
        }
      }
    });

    $(window).on('load resize', function () {
      slideHeight = $('.slide.center').innerHeight();
      $('.slider').css({
        minHeight: slideHeight
      })
    });
    sliderInfo = slider.getInfo();
    var slides = sliderInfo.slideItems;
    $(slides[sliderInfo.index]).addClass('center')
    var slideWidth = [];
    for (var i = 0; i < slides.length; i++) {
      if (!$(slides[i]).hasClass('center')) {
        // console.log()
        slideWidth.push($(slides[i]).innerWidth())
      }
    }
    $(slides[sliderInfo.index]).css({ width: slideWidth[0] * 1.15 })

    slider.events.on('indexChanged', function (e) {
      var slides = e.slideItems;
      $(slides[e.index]).addClass('center')
      $(slides[e.index]).find('.play').show();
      $(slides[e.indexCached]).removeClass('center')
      $(slides[e.index]).css({ width: slideWidth[0] * 1.15 })
      $(slides[e.indexCached]).attr('style', '')
      $(slides[e.indexCached]).find('video').hide()
      $(slides[e.indexCached]).find('video')[0].pause()
      $(slides[e.indexCached]).find('img').removeClass('hide')

      slidePlay();
      slidePause();
    });

    function slidePlay() {
      $('.slide.center .play').on('click', function () {
        console.log($(this))
        $(this).siblings('video')[0].play()
        $(this).siblings('video').show();
        $(this).siblings('img').addClass('hide')
        var vid = $(this).siblings('video')
        vid.addClass('show')
        $(this).fadeOut()
        console.log($(this).siblings('video')[0].paused)


      });
    }

    function slidePause() {

      $('.slide.center video').on('click', function () {
        // $(this)[0].pause
        if ($(this)[0].paused) {
          $(this)[0].play();
        } else {
          $(this).siblings('button').show();
          $(this)[0].pause();
        }
      })

    }

    slidePause()


    slidePlay();
    $('.previous-button').on('click', function () {
      slider.goTo('prev');
      // slidePlay();
    });
    $('.next-button').on('click', function () {
      slider.goTo('next');
      // slidePlay();
    });
  }
  // info.slideItems[indexPrev].classList.remove('active');
  // info.slideItems[indexCurrent].classList.add('active');
}