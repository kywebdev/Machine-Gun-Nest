import * as THREE from 'three';
import { OBJLoader } from 'three/examples/jsm/loaders/OBJLoader.js'; 
import { MTLLoader } from 'three/examples/jsm/loaders/MTLLoader.js';
import { OrbitControls } from "three/examples/jsm/controls/OrbitControls";

$(window).on('load', function() {

	// disable scrolling while the preloader is showing
	var scrollPosition = [
		self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
		self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
	];
	var html = $('html');
	html.data('scroll-position', scrollPosition);
	html.data('previous-overflow', html.css('overflow'));
	html.css('overflow', 'hidden');
	window.scrollTo(scrollPosition[0], scrollPosition[1]);

    setTimeout(function() {
		// remove the preloader
		$('.preloader').fadeOut();

		// init locomotive scroll
		if (!$('body').hasClass('home')) {
			const scroll = new LocomotiveScroll({
				el: document.querySelector('[data-scroll-container]'),
				smooth: true,
				smoothMobile: true
			});
		}
	}, 1000);
	setTimeout(function() {
		// allow page animations to start
		$('body').addClass('animations-start first-load gun-details-animate-in');
		lineAnimations.slideInAll();
	}, 1500);
	setTimeout(function() {
		// allow page animations to start
		$('body').removeClass('first-load');
		if ($('body').hasClass('home')) {
			$('body').addClass('keep-header-visible');
		}
	}, 3700);

});

$(document).ready(function() {

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
      	if( $(this).parents("#scrollspy").length != 0 )
			return;
		if( $(this).parents(".more-guns-slider").length != 0 )
        	return;

        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
	});

	const scroll = new LocomotiveScroll();

    // toggle nav menu
    $('.target-burger').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('toggled');
		$('body').toggleClass('nav-open');
        if ($.fn.fullpage != undefined) {
			if ($(this).hasClass('toggled')) {
				$.fn.fullpage.destroy('all');
			} else {
				buildFullpage();
			}
        }
		if ($('body').hasClass('nav-open')) {
			setTimeout(function() {
				$('.header-navigation').prependTo('body');
				$('body').addClass('nav-open-animate-in');
			}, 1000);
		} else {
			$('body').addClass('nav-open-animate-out');

			setTimeout(function() {
				$('.header-navigation').prependTo('div[data-scroll-container]');
				$('body').removeClass('nav-open-animate-in');
				$('body').removeClass('nav-open-animate-out');
			}, 1000);
		}
    });

    // force page to reload when gun type is clicked
    /*$('.rentals .navigation .nav-area .main-nav ul li:nth-child(5) ul li a').on('click', function() {
        setTimeout(function() {
            window.location.reload();
        }, 100);
    });*/

    // move footer address
    moveAddress();
    $(window).resize(moveAddress);

    function moveAddress(){
        if ($('header .col-md-8 nav').css('display') == 'none' ){
            $('.address').prependTo('.addr');
        } else {
            $('.address').insertAfter('.about-mgn');
        }
    }

    // homepage slider
    $('.event-type-slider').slick({
        slidesToShow: 3,
        prevArrow: '<button type="button" class="slick-prev"><img src="'+basePath+'img/prev-arrow.svg" alt="" /></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="'+basePath+'img/next-arrow.svg" alt="" /></button>',
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // play/pause the video and show/hide the poster image
    var playButton = $('#play-button');
    var videoPlayer = $('video');

    playButton.on('click', function() {
        if (video.paused == true) {
            video.play();
            $('.video__poster').fadeOut();
            $('header').css('opacity', '.2');
            $('h1').css('opacity', '.1');
            $('.video h1').css('opacity', '0');
        }
    });
    videoPlayer.on('pause', function() {
        $('.video__poster').fadeIn();
        $('header').css('opacity', '1');
        $('h1').css('opacity', '1');
        $('.video h1').css('opacity', '1');
    });

    // pricing slider
    $('.pricing-slider').slick({
        prevArrow: '<button type="button" class="slick-prev"><img src="'+basePath+'img/prev-arrow.svg" alt="" /></button>',
		nextArrow: '<button type="button" class="slick-next"><img src="'+basePath+'img/next-arrow.svg" alt="" /></button>',
		adaptiveHeight: true,
		asNavFor: '.pricing-image-slider'
	});

	// pricing image slider
    $('.pricing-image-slider').slick({
		arrows: false,
		fade: true,
		swipe: false,
		draggable: false
    });

    // gun category and info sliders
    var hash = window.location.hash;
    var initialSlide = 0;

    if (hash == "#fullauto") {
      initialSlide = 0;
    }
    if (hash == "#longguns") {
			$('body').addClass('longguns');
      initialSlide = 1;
    }
    if (hash == "#handguns") {
			$('body').addClass('handguns');
      initialSlide = 2;
    }

    $('.gun-category-slider').slick({
        prevArrow: '<button type="button" class="slick-prev"><img src="'+basePath+'img/prev-arrow.svg" alt="" /></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="'+basePath+'img/next-arrow.svg" alt="" /></button>',
        centerMode: true,
        asNavFor: '.gun-category-info-slider',
        initialSlide: initialSlide,
        useCSS: false,
        easing: 'easeOutElastic',
		useTransform: true,
		speed: 1000,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    vertical: true,
                    verticalSwiping: true,
                    centerMode: true
                }
            }
        ]
    });
    $('.gun-category-info-slider').slick({
        fade: true,
        arrows: false,
        asNavFor: '.gun-category-slider',
        draggable: false,
        swipe: false,
        initialSlide: initialSlide
    });


    // select gun, image and info sliders
    $('.gun-select-slider').slick({
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        vertical: true,
        verticalSwiping: true,
        centerMode: true,
        slidesToShow: 3,
        asNavFor: '.gun-image-slider, .gun-overview-slider',
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    prevArrow: '<button type="button" class="slick-prev"><img src="'+basePath+'img/prev-arrow.svg" alt="" /></button>',
                    nextArrow: '<button type="button" class="slick-next"><img src="'+basePath+'img/next-arrow.svg" alt="" /></button>'
                }
            }
        ]
    });
    $('.gun-image-slider').slick({
        prevArrow: '<button type="button" class="slick-prev"><img src="'+basePath+'img/prev-arrow.svg" alt="" /></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="'+basePath+'img/next-arrow.svg" alt="" /></button>',
        fade: true,
        asNavFor: '.gun-select-slider, .gun-overview-slider',
        draggable: false,
        swipe: false,
		adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 900,
                settings: {
					arrows: false
                }
            }
        ]
	});
    $('.gun-overview-slider').slick({
        fade: true,
        arrows: false,
        asNavFor: '.gun-select-slider, .gun-image-slider',
        draggable: false,
        swipe: false
    });

    // more guns slider
    $('.more-guns-slider').slick({
        prevArrow: '<button type="button" class="slick-prev"><img src="'+basePath+'img/prev-arrow.svg" alt="" /></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="'+basePath+'img/next-arrow.svg" alt="" /></button>',
        slidesToShow: 5,
        infinite: false,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // open the guns list
    $('.gun-category-slider a, .gun-category-info-slider .discover a').on('click', function(e) {
        e.preventDefault();
				rentals.loadCategory($(this).attr("data-id"));
		});

		// open the category select
    $('.gun-details-back').on('click', function(e) {
      e.preventDefault();
			$('.all-guns-mobile').fadeOut();
			$('.gun-details').fadeOut();
      setTimeout(function() {
				$('body').removeClass('gun-details-animate-in');
        $('.select-category').show();
        $('.all-guns-mobile').fadeIn();
				$('.gun-category-slider').slick('setPosition');
				$('.gun-category-info-slider').slick('setPosition');
      }, 800);
    });

    // generate tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    // enable/disable tooltips based on screen size
    function tooltips(width) {
        if (width <= 885) {
            $('.gun-image__marker').tooltip('disable');
            $('.gun-image__marker').blur();
        } else {
            $('.gun-image__marker').tooltip('enable');
        }
    }
    tooltips( $(window).width() );
    $(window).on('resize', function() {
        tooltips( $(this).width() );
    });

    // show the gun video overlay
    $('.video-btn').on('click', function(e) {
        e.preventDefault();
        $('.gun-video-overlay').fadeIn();
    });

    // custom fullscreen button
    if ($('.player').length > 0) {
        const player = document.querySelector('.player');
        const video = player.querySelector('.video-js');
        const fullscreen = player.querySelector('.video-fullscreen');

        function toggleFullscreen() {
            if (video.requestFullScreen) {
                video.requestFullScreen();
            } else if (video.webkitRequestFullScreen) {
                video.webkitRequestFullScreen();
            } else if (video.mozRequestFullScreen) {
                video.mozRequestFullScreen();
            } else if (video.webkitEnterFullscreen) {
                video.webkitEnterFullscreen();
            } else if (video.msRequestFullscreen) {
                video.msRequestFullscreen();
            }
        }
        fullscreen.addEventListener('click', toggleFullscreen);
    }

    // hide the fullscreen icon on iOS
    var isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    if (isIOS) {
        $('.video-fullscreen').hide();
    } else {
        $('.video-fullscreen').show();
    }

    // close the gun video
    var gunVideo = document.getElementById('gun-video_html5_api');

    $('.video-close').on('click', function() {
        gunVideo.pause();
        $('.gun-video-overlay').fadeOut();
    });

    // all guns toggle display type
    $('.display-types__grid').on('click', function() {
        $(this).addClass('is-visible').removeClass('is-hidden');
        $('.display-types__list').addClass('is-hidden').removeClass('is-visible').css('pointer-events', 'none');
        $('.all-guns__list-view').fadeOut();
        setTimeout(function() {
            $('.all-guns__grid-view').fadeIn();
            $('.display-types__list').css('pointer-events', 'auto');
        }, 1000);
    });
    $('.display-types__list').on('click', function() {
        $(this).addClass('is-visible').removeClass('is-hidden');
        $('.display-types__grid').addClass('is-hidden').removeClass('is-visible').css('pointer-events', 'none');
        $('.all-guns__grid-view').fadeOut();
        setTimeout(function() {
            $('.all-guns__list-view').fadeIn();
            $('.display-types__grid').css('pointer-events', 'auto');
        }, 1000);
    });

    // all guns grid view filtering
    if ($('.all-guns__grid-view').length > 0) {
        var config = {
            selectors: {
                control: 'button.dropdown-item'
            },
            animation: {
                duration: 500,
                nudge: false,
                reverseOut: false,
                effects: "fade scale(0.01)"
            },
            multifilter: {
                enable: true
            }
        };
        var mixer = mixitup('.all-guns__grid-view .row', config);
    }

    // all guns list view filtering
    if ($('.all-guns__list-view').length > 0) {
        var config = {
            selectors: {
                control: 'button.dropdown-item'
            },
            animation: {
                "effects": "fade"
            },
            multifilter: {
                enable: true
            }
        };
        var mixer = mixitup('.all-guns__list-view .list-of-guns', config);
    }


		const urlParams = new URLSearchParams(window.location.search);
		const gunID = urlParams.get('gunID');
    // show the gun details if at #gun-details hash
    if (gunID != null && gunID != undefined && terms != undefined) {
			for(var i = 0; i<terms.length; i++) {
				var guns = terms[i].guns;
			  for(var j=0; j<guns.length; j++) {
					var gun = guns[j];
					if( gun.id == gunID ) {
						rentals.cur_term = terms[i];
					}
				}
			}
			if( rentals.cur_term != undefined ) {
				rentals.loadGun(gunID);
				$('body').addClass('show-gun-details');
				setTimeout(function() {
					$('body').addClass('gun-details-animate-in');
				}, 1500);
			}
		}

		const categoryID = urlParams.get('categoryID');
		// show the gun details if at #gun-details hash
		if (categoryID != null && categoryID != undefined && terms != undefined) {
		for(var i = 0; i<terms.length; i++) {
			var category = terms[i];
			if( category.id == categoryID ){
				rentals.cur_term = category;
			}
		}
		if( rentals.cur_term != undefined ) {
			setTimeout(function(){
				rentals.loadCategory(categoryID);
			}, 500);

		}
	}

    // init and remove hash tracking from search modal
    $('[data-remodal-id="search-modal"]').remodal({
        hashTracking: false
    });

    // move Rental page elements based on screen size
    function moveRentalPageElements(width) {
        if (width <= 885) {
            $('.all-guns').prependTo('.all-guns-mobile');
            $('.search').prependTo('.search-mobile');
            $('.category-dropdown').prependTo('.category-dropdown-mobile');
            $('.gun-information').insertBefore('.gun-image');
        } else {
            $('.all-guns').appendTo('header .page-wrapper .col-md-8');
            $('.search').prependTo('.mobile-nav');
            $('.category-dropdown').prependTo('.select-gun .page-wrapper .col-md-2');
            $('.gun-information').prependTo('.gun-description + .offset-lg-4');
        }
    }
    moveRentalPageElements( $(window).width() );
    $(window).on('resize', function() {
        moveRentalPageElements( $(this).width() );
    });

    // switch out gun marker modal content based on what button was clicked
    $('#marker-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var heading = button.data('heading');
        var content = button.data('content');
        var modal = $(this);
        modal.find('.modal-title').text(heading);
        modal.find('.modal-body p').text(content);
    });

    // add or remove the gun image marker dot
    $('.marker-modal').on('click', function() {
        $(this).addClass('show-dot');
    });
    $('#marker-modal').on('hide.bs.modal', function() {
        $('.marker-modal').removeClass('show-dot');
    });

    // retail page filtering
    if ($('.retail-filters').length > 0) {
        var config = {
            load: {
                filter: '.gen3'
            }
        };
        var mixer = mixitup('.retail-filters .row', config);
	}

	// gun image skew effect
  if( $(".gun-image").length != 0 ) {

		rentals.setupSkew();

	}

	// instagram slider
	if ($('.js-slideshow').length > 0) {
		instagramSlider();
	}


	lineAnimations.setup();

	// show accordion item content after hovering for 3 seconds
	$('.accordion__item').hover(
		function() {
			var id = $(this).children('button').attr('data-target');
			console.log(id);
			$(this).addClass('is-timer-started');
			timer = setTimeout(function() {
				$(id).collapse('show');
			}, 3000)
		},
		function() {
			$(this).removeClass('is-timer-started');
			clearTimeout(timer);
		},
	)

	function getGunImgSize() {
		var gunImgWidth = $('.gun-image-holder img').width();
		var gunImgHeight = $('.gun-image-holder img').height();
	
		$('.marker-tooltip-container').css({
			width: gunImgWidth,
			height: gunImgHeight
		});
		$('.marker-modal-container').css({
			width: gunImgWidth,
			height: gunImgHeight
		});
	}
	getGunImgSize();

});

// instagram slider
function instagramSlider() {
	imagesLoaded( document.querySelector('.js-slideshow'), function( instance ) {

		// Variables
		// Play with this value to change the speed
		let tickerSpeed = 2;

		let flickity = null;
		let isPaused = false;
		const slideshowEl = document.querySelector('.js-slideshow');

		// Functions
		const update = () => {
			if (isPaused) return;
			if (flickity.slides) {
				flickity.x = (flickity.x - tickerSpeed) % flickity.slideableWidth;
				flickity.selectedIndex = flickity.dragEndRestingSelect();
				flickity.updateSelectedSlide();
				flickity.settle(flickity.x);
			}
			window.requestAnimationFrame(update);
		};

		const pause = () => {
			isPaused = true;
		};

		const play = () => {
			if (isPaused) {
				isPaused = false;
				window.requestAnimationFrame(update);
			}
		};

		// Create Flickity
		flickity = new Flickity(slideshowEl, {
			autoPlay: false,
			prevNextButtons: false,
			pageDots: false,
			draggable: true,
			wrapAround: true,
			cellAlign: 'left',
			freeScroll: true,
			freeScrollFriction: 0.03
		});
		flickity.x = 0;

		// Add Event Listeners
		slideshowEl.addEventListener('mouseenter', pause, false);
		slideshowEl.addEventListener('focusin', pause, false);
		slideshowEl.addEventListener('mouseleave', play, false);
		slideshowEl.addEventListener('focusout', play, false);

		flickity.on('dragStart', () => {
			isPaused = true;
		});

		// Start Ticker
		update();

	});
}

var lineAnimations = {
	setup:function() {
		lineAnimations.animating = false;
		$("svg.line").on("mouseenter", function(){  lineAnimations.flick(this); });
	},
	flick:function(line) {

		if( !lineAnimations.animating ) {
			lineAnimations.animating = true;
			$(line).animate(
				{'foo':25},
				{
					step: function(foo){
						$(line).find("path").attr('d', "M 0,0	 Q 250,"+foo+" 500,0");
					},
					duration: 500,
					easing: 'easeOutBounce',
					complete: function() {
						$(line).animate(
							{'foo':0},
							{
								step: function(foo){
									$(line).find("path").attr('d', "M 0,0	 Q 250,"+foo+" 500,0");
								},
								duration: 500,
								easing: 'easeOutBounce',
								complete: function() {
									lineAnimations.animating = false;
								}
							}
						);
					}
				}
			);
		}
	},
	slideInAll:function() {
		$("svg.line").each(function(){
			lineAnimations.slideIn(this, 1000);
		});
	},
	slideIn:function(line, delay) {
		lineAnimations.animating = true;

		$(line).find("path").attr('d', "M 0,0	 Q 0,0 0,0");
		setTimeout(function(){
			$(line).animate(
				{'foo1':500},
				{
					step: function(foo){
						//console.log(foo,"M 0,0	 Q 0,0 "+foo+",0");
						$(line).find("path").attr('d', "M 0,0	 Q 0,0 "+foo+",0");
					},
					duration: 500,
					easing: 'linear',
					complete: function() {

						lineAnimations.animating = false;
						$(line).find("path").attr('d', "M 0,0	 Q 250,0 500,0");
					}
				}
			);
		}, delay);
	}
};

// WebGL gun model
function initWebGL() {
	var scene = new THREE.Scene();

	let mtlLoader = new MTLLoader();
	
	let objLoader = new OBJLoader();

	var container = document.getElementById('gun-model');

	var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000)
	camera.position.z = 8;

	var renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});

	renderer.setSize($(container).width(), $(container).height());
	container.appendChild(renderer.domElement);

	window.addEventListener('resize', () => {
		renderer.setSize($(container).width(), $(container).height());
		camera.aspect = $(container).width() / $(container).height();

		camera.updateProjectionMatrix();
	})

	mtlLoader.load('img/gun.mtl', (materials) => {
		materials.preload()
		objLoader.setMaterials(materials)
		objLoader.load('img/gun.obj', (object) => {
			object.position.x = .5;
			object.position.y = 1;
			object.position.z = 0;
			object.rotation.x = 0;
			object.rotation.y = 1.5;
			scene.add(object);
		})
	})

	var controls = new OrbitControls(camera, renderer.domElement);
	controls.autoRotate = true;
	controls.autoRotateSpeed = -5;
	controls.target = new THREE.Vector3(.5, .5, .5);
	controls.maxDistance = 30;
	controls.minDistance = 3;
	controls.enableDamping = true;
	controls.dampingFactor = 0.1;

	var frontlight = new THREE.PointLight(0xffffff, .5, 1000)
	frontlight.position.set(0, 15, 15);
	scene.add(frontlight);

	var backlight = new THREE.PointLight(0xffffff, .5, 1000)
	backlight.position.set(0, 15, -15);
	scene.add(backlight);

	var rightlight = new THREE.PointLight(0xffffff, .5, 1000)
	rightlight.position.set(15, 15, 0);
	scene.add(rightlight);

	var leftlight = new THREE.PointLight(0xffffff, .5, 1000)
	leftlight.position.set(-15, 15, 0);
	scene.add(leftlight);

	var render = function() {
		requestAnimationFrame(render);
		controls.update();
		renderer.render(scene, camera);
	}
	render();
	controls.saveState();

	$(document).ready(function() {
		$('.animate-btn').click(function() {
			$(this).text($(this).text() == 'Stop' ? 'Animate' : 'Stop');
			if (controls.autoRotate) {
				controls.autoRotate = false;
			} else {
				controls.autoRotate = true;
			}
		});
		$('.zoom-out').on('click', function() {
			controls.dIn(1.3);
			controls.update();
		});
		$('.zoom-in').on('click', function() {
			controls.dOut(1.3);
			controls.update();
		});
		$('.reset').on('click', function() {
			controls.reset();
		});
	});
}

$(document).ready(function() {
    $('.rotate-btn').on('click', function() {
		$('.gun-model-overlay').fadeIn();
		setTimeout(function() {
			initWebGL();
		}, 400)
	});
	$('.gun-model-close').on('click', function() {
		$('.gun-model-overlay').fadeOut();
		setTimeout(function() {
			$('#gun-model canvas').remove();
		}, 400)
	});
});