;(function($){
	$(document).ready(function(){
		// home page banner slider
        $('.home-banner').owlCarousel({
            items: 1,
            nav: false,
            loop: true,
            navText: false,
            animateOut: 'fadeOut',
            autoplay: true
        });

        // home page ripple effect slider
        $('.ripple-mobile').owlCarousel({
            items: 2,
            nav: true,
            loop: true,
            navText: false,
            // animateOut: 'fadeOut',
            autoplay: true,
            responsive : {
                569 : {
                    items : 2,
                },
                0 : {
                    items : 1,
                }
            }
        });

        // home page programs slider
        var owl = $('.mobile-programs');

        owl.owlCarousel({
            items: 1,
            nav: true,
            // loop: true,
            navText: false,
            // animateOut: 'fadeOut',
            // autoplay: true,
            responsive : {
                768 : {
                    items : 1,
                },
                569 : {
                    items : 2,
                },
                0 : {
                    items : 1,
                }
            }
        });

        // Go to the next item
        $('.program-right').click(function(e) {
            e.preventDefault();
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.program-left').click(function(e) {
            e.preventDefault();
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            // owl.trigger('prev.owl.carousel', [300]);
            owl.trigger('prev.owl.carousel');
        })

        // home page blogs slider
        $('.blogs-slide').owlCarousel({
            items: 1,
            nav: true,
            // loop: true,
            navText: false,
            // animateOut: 'fadeOut',
            // autoplay: true,
            responsive : {
                768 : {
                    items : 1,
                },
                569 : {
                    items : 2,
                },
                0 : {
                    items : 1,
                }
            }
        });

        // home page programs preview on hover
        $('.program-slide').mouseenter(function() {
            var this_data = $(this).find('.preview-images').data('program');
            var current_data = $('.programs-content').find('.preview-images').data('program');

            if(this_data != current_data) {
                var this_content = $(this).find('.preview-content').html();
                $('.programs-content').fadeOut('400', function () {
                    $('.programs-content').html(this_content);
                    $('.programs-content').fadeIn('400');
                });
            }
        });

        // slide mobile nav
        $('.mobile-menu').on('click', function() {
            if($(this).hasClass('pushed')) {
                $(this).removeClass('pushed');
                $('body').removeClass('push-right');
            } else {
                $(this).addClass('pushed');
                // $('#navbar').css('width', '250px');
                $('body').addClass('push-right');
            }
        });

        // add opacity on mobile nav slide
        $('.mobile-overlay').on('click', function() {
            $('body').removeClass('push-right');
            $('.mobile-menu').removeClass('pushed');
        });

        // mobile footer nav collapse
        $('.footer-mid h3').on('click', function() {
            $this = $(this);

            if($(this).next('ul').hasClass('toggled')) {
                $this.next('ul').removeClass('toggled');
                $this.find('span').removeClass('glyphicon-minus').addClass('glyphicon-plus');
                $this.next('ul').slideToggle();
            } else {
                $('.toggled').slideToggle();
                $('.toggled').removeClass('toggled').prev('h3').find('span').removeClass('glyphicon-minus').addClass('glyphicon-plus');

                $this.next('ul').addClass('toggled');
                $this.find('span').removeClass('glyphicon-plus').addClass('glyphicon-minus');
                $this.next('ul').slideToggle();
            }

        });

	});

})(jQuery);