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
  });




};