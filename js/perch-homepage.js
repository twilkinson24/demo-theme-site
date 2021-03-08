(function($){

   // initialize tooltips if there are any
   var mediaQuery = window.matchMedia( "(min-width: 769px)" );

   function initTooltips() {
        if (mediaQuery.matches) {
            // window width is at least 769px
            $('[data-toggle="tooltip"]').tooltip()
        } 
   }
   initTooltips()

    $(window).on('resize', initTooltips)


   // Homepage About Section Slider
   if($('section.about .about-slider').length > 0) {

        var aboutSlider = $('section.about .about-slider')

        aboutSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            infinite: true, 
            fade: true,
            speed: 400,
            cssEase: 'linear',
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left text-yellow' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right text-yellow' aria-hidden='true'></i></button>",
            customPaging : function(slider, i) {
                var slideNo = i + 1
                var thumb = $(slider.$slides[i]).data();
                return '<span class="dot">'+slideNo+ ' / ' + $('.about-slider .slider__slide').length + '</span>';
            },
        })
   }


   // Homepage About Section Slider
   if($('section.our-team .team-slider').length > 0) {

        var teamSlider = $('section.our-team .team-slider')

        teamSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            infinite: true, 
            fade: true,
            speed: 400,
            cssEase: 'linear',
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left text-yellow' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right text-yellow' aria-hidden='true'></i></button>",
            customPaging : function(slider, i) {
                var slideNo = i + 1
                var thumb = $(slider.$slides[i]).data();
                return '<span class="dot">'+slideNo+ ' / ' + $('.team-slider .slider__slide').length + '</span>';
            },
        })
    }


    // Smooth Scrolling 
    // from https://css-tricks.com/snippets/jquery/smooth-scrolling/
    // Select all links with hashes
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
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
            return false;
            } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
            };
        });
        }
    }
    });
  
  
  })(jQuery);