/*global $:true*/
/**
 * Init JavaScript - This script is executed first in the final compiled app.js
 * @package WordPress
 * @subpackage BakerDesign
 * @since 2.0
**/

$ = jQuery;
var Project = Project || {};
/**
 * Extensions and Overrides for existing JS methods/objects
 *
 * @package WordPress
 * @subpackage BakerDesign
 * @since 2.0
 **/

/**
 * Make jQuery's next function loop to first child element if this is the last child
 *
 * @return Object [jQuery type 'object'] - next $(element) if it exists, or returns first $(element) child if subject is last-child
 * @uses $('.selector').Next();
 */
$.fn.Next = function() {
    if ($(this).is(':last-child')) {
        return ($(this).siblings().first());
    } else {
        return ($(this).next());
    }
};

/**
 * Make jQuery's prev function loop to last child element if this is the first child
 *
 * @return Object [jQuery type 'object'] - prev $(element) if it exists, or returns last $(element) child if subject is first-child
 * @uses $('.selector-items').find(:Contains("text-to-find"));
 */
$.fn.Prev = function() {
    if ($(this).is(':first-child')) {
        return ($(this).siblings().last());
    } else {
        return ($(this).prev());
    }
};

/**
 * Make jQuery's Contains non-case-sensitive
 *
 * @return Boolean
 * @uses $('.items-to-search').find(:Contains("text-to-find"));
 */
$.expr[":"].Contains = $.expr.createPseudo(function(arg) {
    return function(elem) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >=
            0;
    };
});

/**
 * Replace all occurrences of a string
 *
 * @param String search string to be replaced
 * @param String replacement string to replace with
 * @return String
 * @uses str.replaceAll(' ', '')
 */
String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};

/**
 * Extend Array with new 'containsAny' function for comparing two arrays
 *
 * @return Boolean
 * @uses array1.containsAny(array2);
 */
Array.prototype.containsAny = function(arr) {
    return this.some(function(v) {
        return arr.indexOf(v) >= 0;
    });
};

/**
 * Convert string to title case with JavaScript
 *
 * @return String
 */
String.prototype.toProperCase = function() {
    return this.replace(/\w\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
};

Project.igFeed = function () {

//   (function($){
//     $(window).on('load', function(){
//       //
//       axios({
//         method: 'get',
//         url: ' https://graph.instagram.com/me/media?fields=id,username,media_url&access_token=IGQVJYTnBBdWYxZAWIwWXB0Ry1kMTR5TGZAiY1FmNUFpemNmbjdQWld4TXBJcDhvdzRwV2JSQWNPNWgtUG1JZAUctdUdVTXY1NmsxOEJkRXpyNmVMZAy1PM185VjgwcHpIOXA0em0xVFVWc1hYcnF4N2wyYk1RMEdzVXcyR3I4',
//         responseType: 'stream'
//       })
//         .then(function (response) {
//           // console.log()
//           var images = JSON.parse(response.data).data;
//           images.forEach(element => {
//               console.log(element.media_url)
//           });

//           // JSON.parse(response.data).data
        
//           // response.data.map()
        
//         });
//     });
// })(jQuery)

}
Project.miscScripts = function () {
  $('document').ready(function () {
    $('.card.form .two-col p:empty, .card.form .two-col br').remove();
    $('.wpcf7-form p > *').unwrap();
    // remove form embed css
    var styles = document.getElementsByTagName('link')
    for (let i = 0; i < styles.length; i++) {

      if (styles[i].href.indexOf('https://slate-technolutions-net.cdn.technolutions.net') > -1) {
        $(styles[i]).remove()
      }
    }

    $('.form-banner figure').css({
      height: $('.form-banner').innerHeight() + 'px'
    })
  });




};
/**
 * General JavaScripture
 * @package WordPress
 * @subpackage BakerDesign
 * @since 2.0
 **/


 Project.mobileNav = function() {
  $('.hamburger').on('click',function(){
    $(this).toggleClass('active');
    $('#site-nav').toggleClass('active');
  });

  // $('menu-toggle').
  
  
  

  $('.menu-toggle').on('click',function(){
    $(this).toggleClass('active');
    $(this).siblings('.inline-page-nav').toggleClass('active');
  });
};
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
      $(slides[e.indexCached]).removeClass('center')
      $(slides[e.index]).css({ width: slideWidth[0] * 1.15 })
      $(slides[e.indexCached]).attr('style', '')
      $(slides[e.indexCached]).find('video').removeClass('show')
      $(slides[e.indexCached]).find('video')[0].pause()
      $(slides[e.indexCached]).find('img').removeClass('hide')
    });
    $('.slide.center .play').on('click', function () {
      console.log($(this))
      $(this).siblings('video')[0].play()
      $(this).siblings('img').addClass('hide')
      var vid = $(this).siblings('video')
      vid.addClass('show')
      $(this).fadeOut()
    });
    $('.previous-button').on('click', function () {
      slider.goTo('prev');
    });
    $('.next-button').on('click', function () {
      slider.goTo('next');
    });
  }
  // info.slideItems[indexPrev].classList.remove('active');
  // info.slideItems[indexCurrent].classList.add('active');
}
/**
 * Init JavaScript - This script is executed last in the final compiled app.js
 *
 * @package WordPress
 * @subpackage BakerDesign
 * @since 2.0
 **/

$ = jQuery;

// Variables
var mobileNav = new Project.mobileNav();
var sliderInit = new Project.sliderInit();
var misc = new Project.miscScripts();
// var ig = new Project.igFeed();
