export default {
  init() {
    // JavaScript to be fired on the home page
    $(document).ready(function(){
      $('.home-slider').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        dots: true,
        responsive: [{
          breakpoint: 1199,
          settings: 'unslick',
        }],
      });
    });

    // Add key down controls
    $(document).on('keydown', function(e) {
      if(e.keyCode == 38) {
        $('.home-slider').slick('slickPrev');
      }
      if(e.keyCode == 40) {
        $('.home-slider').slick('slickNext');
      }
    });

    // Add scroll controls
    $('body').on('mousewheel DOMMouseScroll', function(e){
      if(typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {
        if(e.originalEvent.detail > 0) {
          $('.home-slider').slick('slickNext');
        } else if(e.originalEvent.detail < 0){
          $('.home-slider').slick('slickPrev');
        }
      } else if (typeof e.originalEvent.wheelDelta == 'number') {
        if(e.originalEvent.wheelDelta < 0) {
          $('.home-slider').slick('slickNext');
        } else if(e.originalEvent.wheelDelta > 0) {
          $('.home-slider').slick('slickPrev');
        }
      }
    });

    $(window).on('resize orientationchange', function() {
      $('.home-slider').slick('resize');
    });

    // JavaScript to be fired on the home page, after the init JS
    var media = $('video')[0];

    media.addEventListener('error', function () {
      var date = new Date();
      var milliSecs = date.getMilliseconds();
      var curr_src = $(media[0]).attr('src');
      var curr_src_arr = curr_src.split('?');
      var new_src = curr_src_arr[0]+'?t='+milliSecs;

      $(media[0]).attr('src',new_src);
      $(media[0]).find('source').attr('src',new_src);
      media[0].load();
      //media[0].play(); /* Here we can not trigger play video/audio without user interaction. */
    }, false);
  },
  finalize() {
    
  },
};
