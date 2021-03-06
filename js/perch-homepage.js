(function($){

   console.log('hi working')

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
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left text-yellow' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right text-yellow' aria-hidden='true'></i></button>",
            customPaging : function(slider, i) {
                var thumb = $(slider.$slides[i]).data();
                return '<a class="dot">'+i+'</a>';
            },
        })


   }
  
  
  })(jQuery);