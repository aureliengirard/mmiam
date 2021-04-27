import 'ekko-lightbox/dist/ekko-lightbox.js';

export default {
  init() {
    // JavaScript to be fired on all pages

    // Add dropdown-menu actions
    $('.dropdown a.dropdown-toggle').on('click', function() {
      if ( !$(this).next().hasClass('show') ) {
        $(this).parents('.dropdown').first().find('.show').removeClass('show');
      }

      var $subMenu = $(this).next('.dropdown-menu');
      $subMenu.toggleClass('show');

      $(this).parent('li').toggleClass('show');

      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function () {
        $('.dropdown-menu .show').removeClass('show');
      });

      return false;
    });

    $(function () {
      $('[data-toggle="tooltip"]').tooltip({
        'boundary': 'viewport',
        'offset': '0, 5px',
        'placement': 'bottom',
      });
    });

    // Select all links with hashes
    // https://css-tricks.com/snippets/jquery/smooth-scrolling/
    /*
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          var headerHeight = $('header').height();

          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - headerHeight,
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(':focus')) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            });
          }
        }
      });
      */
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    // Open in lightbox using ekko-lightbox
    // http://ashleydw.github.io/lightbox
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });
  },
};
