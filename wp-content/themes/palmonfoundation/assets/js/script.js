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

        // long tile every 3rd post
        $('.blog-posts .news-item:nth-child(3n)').addClass('news-item2');

        // posts filter
        $( function() {
            var str = document.URL;
            var category = str.indexOf('#');
            var criteria = str.substring(str.indexOf('#'));
            criteria = criteria.substr(1);

            // init Isotope
            var $grid = $('.main-blog .blog-posts').isotope({
                itemSelector: '.news-item',
                layoutMode: 'masonry',
                masonry: {
                    columnWidth: '.news-item',
                    gutter: 15
                },
            });

            // bind filter button click
            $('.posts-filter button').on( 'click', function() {
                var filterValue = $( this ).attr('data-filter');
                // use filterFn if matches value
                // filterValue = filterFns[ filterValue ] || filterValue;
                $grid.isotope({ filter: filterValue });
                $grid.isotope('shuffle');

                // display message box if no filtered items
                var noItems = $('<div class="no-results"><h1 class="page-title">No posts found.</h1></div>');
                var yesItems = $('.no-results');
                if ( $grid.data('isotope').filteredItems.length < 1 ) {
                    if ($grid.find(yesItems)) {
                        yesItems.remove();
                    }
                    $grid.append(noItems).isotope( 'appended', noItems );
                    $grid.css({"height": "300px"});
                } else {
                    // $grid.isotope( 'remove', noItems);
                    yesItems.remove();
                }

            });

            $('.posts-filter button').each(function() {
                
                if ($(this).data('filter').substr(1) == criteria) {
                    $(this).trigger('click');
                    $('.posts-filter button').removeClass('post-filter-active');
                    $(this).addClass('post-filter-active');
                }

            });
            
            // change is-checked class on buttons
            $('.button-group').each( function( i, buttonGroup ) {
                var $buttonGroup = $( buttonGroup );
                $buttonGroup.on( 'click', 'button', function() {
                    $buttonGroup.find('.post-filter-active').removeClass('post-filter-active');
                    $( this ).addClass('post-filter-active');
                });
            });
          
        });

        // toggle mobile posts filter
        $('.posts-filter.mobile-post-filter h2').on('click', function() {
            $('.posts-filter.mobile-post-filter .button-group').slideToggle(function() {
                $('.posts-filter.mobile-post-filter h2 span').toggle();
            });
        });

        $(function() {
            $('a.smooth[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                    }
                }
            });
        });

	});

})(jQuery);