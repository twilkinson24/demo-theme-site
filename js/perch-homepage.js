(function($){

   console.log('hi working')


   // initialize tooltips if there are any
    $('[data-toggle="tooltip"]').tooltip()


   if($('section.about .about-slider').length > 0) {

        var aboutSlider = $('section.about .about-slider')

        aboutSlider.on('init', function(event, slick, direction){
            console.log('init');
            // left
        });


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
                return '<span class="dot">'+slideNo+ ' / ' + $('.about-slider__slide').length + '</span>';
            },
        })


   }
  
  
  })(jQuery);