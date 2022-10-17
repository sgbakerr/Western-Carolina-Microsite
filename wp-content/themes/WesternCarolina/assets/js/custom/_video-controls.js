
Project.videoControls = function () {
  var videoControls = $('.video-controls'),
    video = videoControls.siblings('video')[0],
    playPause = videoControls.find('.play-pause'),
    stop = videoControls.find('.stop'),
    progress = videoControls.find('.progress-bar'),
    progressDisplay = progress.siblings('span'),
    volumeInc = videoControls.find('.volinc'),
    volumeDec = videoControls.find('.voldec'),
    mute = videoControls.find('.mute');

  videoControls.attr('data-state', 'visible')
  // $('.video')

  var supportsProgress = (document.createElement('progress').max !== undefined);
  if (!supportsProgress) {
    progressDisplay.addClass('fake')
    progress.addClass('fake')
  }


  video.addEventListener('timeupdate', () => {
    if (!progress.attr('max')) {
      progress.attr('max', video.duration);
    }

    progress.val(video.currentTime);

    progressDisplay.css({
      width: `${Math.floor(video.currentTime * 100 / video.duration)}%`
    })

  });

  progress.on('click', function(e) {
    // const rect = progress.getBoundingClientRect();
    // console.log($(this).getBoundingClientRect())
    // const pos = (e.pageX - rect.left) / progress.offsetWidth;
    // video.currentTime = pos * video.duration;
  });

  $(volumeInc).on('click', function () {
    alterVolume('+');
  });

  $(volumeDec).on('click', function () {
    alterVolume('-');
  });

  $(mute).on('click', function () {
    video.muted = !video.muted;
  });

  function alterVolume(dir) {
    const currentVolume = Math.floor(video.volume * 10) / 10;
    if (dir === '+' && currentVolume < 1) {
      video.volume += 0.1;
    } else if (dir === '-' && currentVolume > 0) {
      video.volume -= 0.1;
    }
  }


  playPause.on('click', function (e) {
    if (video.paused) {
      video.play();
      $(this).addClass('pause');
      $(this).removeClass('play');
    } else {
      video.pause();
      $(this).addClass('play');
      $(this).removeClass('pause');
    }
  });

  stop.on('click', function (e) {
    video.pause();
    video.currentTime = 0;
    progress.value = 0;
    console.log(video.progress)
    playPause.addClass('play');
    playPause.removeClass('pause');
  });






  // function changeButtonState(type) {
  //   var playPause = $('.play-pause'),
  //  mute = $('.mute');
  //   if (type === 'play-pause') {
  //     // Play/Pause button

  //     if (video.paused || video.ended) {
  //       playPause.addClass('play');
  //     } else {
  //       playPause.addClass('pause');
  //     }
  //   } else if (type === 'mute') {
  //     // Mute button
  //     mute.toggleClass('muted');
  //   }
  // }



}