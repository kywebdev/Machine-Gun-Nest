var rentals = {};
rentals["loadGun"] = function(id) {
  var guns = rentals.cur_term.guns;
  for(var j=0; j<guns.length; j++) {
    var g = guns[j];
    if( g.id == id ) {

      $(".gun-image img").attr("src", g.image);

      $(".gun-image .marker-tooltip-container").empty();
      $(".gun-image .marker-modal-container").empty();

      for(var i=0; i<g.markers.length; i++) {
        var m = g.markers[i];
        $(".gun-image .marker-tooltip-container").append("<button type='button' id='marker"+i+"-tooltip' class='gun-image__marker marker-tooltip' data-toggle='tooltip' data-placement='"+m.position+"' data-html='true' title='<span>"+m.title+"</span><p>"+m.body+"</p>' style='top:"+m.top+"; left:"+m.left+";'></button>");
        $(".gun-image .marker-modal-container").append("<button type='button' id='marker"+i+"-modal' class='gun-image__marker marker-modal' data-toggle='modal' data-target='#marker-modal' data-heading='"+m.title+"' data-content='"+m.body+"' style='top:"+m.top+"; left:"+m.left+";'></button>");
      }

      rentals.getGunImgSize();

      $('[data-toggle="tooltip"]').tooltip('dispose');
      $('[data-toggle="tooltip"]').tooltip();

      $(".gun-description h2").text(g.title);
      $(".gun-description p").text(g.description);
      $(".gun-description .video-btn").attr("data-url", g.video);

      $("#gun-information").empty();
      for(var i=0; i<g.infoblocks.length; i++) {
        var b = g.infoblocks[i];
        var target = b.title.replace(" ", "_").toLowerCase();

        $("#gun-information").append("<div class='gun-information__item'><button type='button' data-toggle='collapse' data-target='#"+target
        +"' aria-expanded='false' aria-controls='"+target+"'>"+b.title+"</button><div class='gun-information__item__details collapse' id='"+target
        +"' data-parent='#gun-information'><div><p>"+b.body+"</p></div></div></div>");
      }
      if( rentals.mouse != undefined )
        rentals.mouse.setOrigin(rentals.container);

    }
  }
};


rentals["loadCategory"] = function(id, transition=true) {
  if( transition ) {
    $('.select-category').fadeOut();
    $('.all-guns-mobile').fadeOut();
    setTimeout(function() {
      $('.select-gun').show();
      $('.all-guns-mobile').fadeIn();
      $('body').addClass('select-gun-animate-in');
      $('.gun-select-slider').slick('setPosition');
      $('.gun-image-slider').slick('setPosition');
      $('.gun-overview-slider').slick('setPosition');
    }, 1000);
  } else {
    $('.select-category').hide();
    $('.all-guns-mobile').hide();

    $('.select-gun').show();
    $('.all-guns-mobile').show();
    $('body').addClass('select-gun-animate-in');
    $('.gun-select-slider').slick('setPosition');
    $('.gun-image-slider').slick('setPosition');
    $('.gun-overview-slider').slick('setPosition');
  }


  /*$(".category-dropdown .dropdown-menu").empty();
  for(var i = 0; i<terms.length; i++) {
    if( terms[i].id == id ) {
      rentals.cur_term = terms[i];

      while($('.gun-select-slider').slick("getSlick").slideCount != 0) {
        $('.gun-select-slider').slick('slickRemove',0);
        $('.gun-image-slider').slick('slickRemove',0);
        $('.gun-overview-slider').slick('slickRemove',0);
      }
      while($('.more-guns-slider').slick("getSlick").slideCount != 0) {
        $('.more-guns-slider').slick('slickRemove',0);
      }

      var guns = rentals.cur_term.guns;
      for(var j=0; j<guns.length; j++) {
        var g = guns[j];
        $('.gun-select-slider').slick('slickAdd',"<div class='slide'><a data-id='"+g.id+"'><p>"+g.title+"</p></a></div>");
        $('.gun-image-slider').slick('slickAdd',"<div class='slide'><a data-id='"+g.id+"'><img src='"+g.image+"' alt='' /></a></div>");
        $('.gun-overview-slider').slick('slickAdd',"<div class='slide'><div class='row'><div class='col-md-9 offset-md-2 gun-overview'><h2>"+g.title+"</h2><p>"+g.overview+"</p></div></div></div>");

        $('.more-guns-slider').slick('slickAdd',"<div class='slide' data-id='"+g.id+"'><a data-id='"+g.id+"' class='gun-btn'><div class='gun-img'><img src='"+g.thumbnail+"' alt='' /></div><span>"+g.title+"</span></a></div>");
      }

      $("#dropdownMenuLink").text(rentals.cur_term.name);
    } else {
      $(".category-dropdown .dropdown-menu").append("<a class='dropdown-item' data-id='"+terms[i].id+"'>"+terms[i].name+"</a>");
    }
  }*/

  // reanimate the gun select view when a different category is selected from the dropdown
  $('.category-dropdown .dropdown-item').on('click', function() {
	  var id = $(this).attr('data-id');
		$('.select-gun').fadeOut({
			complete:function() {
				rentals.loadCategory(id);
				$('body').removeClass('select-gun-animate-in');
				$('.select-gun').css('display', 'block');
				$('.gun-select-slider').slick('setPosition');
				$('.gun-image-slider').slick('setPosition');
				$('.gun-overview-slider').slick('setPosition');
				setTimeout(function() {
					$('body').addClass('select-gun-animate-in');
				}, 200);
			}
		});
  });

  // open the gun details
  $('.gun-select-slider a, .gun-image-slider a').on('click', function(e) {
      e.preventDefault();
      $('.all-guns-mobile').fadeOut();
      $('body').addClass('select-gun-animate-out');
      setTimeout(function() {
        $('body').removeClass('select-gun-animate-in');
        $('body').removeClass('select-gun-animate-out');
        $('body').addClass('gun-details-animate-in');
        $('.select-gun').hide();
        $('.gun-details').show();
        $('.all-guns-mobile').fadeIn();
        $('.more-guns-slider').slick('setPosition');
        rentals.getGunImgSize();
      }, 1500);
      rentals.loadGun($(this).attr('data-id'));
  });

  // make discover more follow mouse
	function discoverMore(width) {
        if (width <= 885) {
            $(document).on('mousemove', function(e) {
				var moveY = e.pageY;
				$('#discover').css({
				   left:  e.pageX,
				   top:   moveY - 125
				});
			});
        } else {
            $(document).on('mousemove', function(e) {
				var moveY = e.pageY;
				$('#discover').css({
				   left:  e.pageX,
				   top:   moveY - 185
				});
			});
        }
    }
    discoverMore( $(window).width() );
    $(window).on('resize', function() {
        discoverMore( $(this).width() );
	});

  // only show discover more when hovering over the gun image slider
	$('.gun-image-slider a').hover(
		function() {
			$('#discover').addClass('is-visible');
		},
		function() {
			$('#discover').removeClass('is-visible');
		},
	);

  // set the active class on the clicked slide
  $('.more-guns-slider .slide').on('click', function() {
    $('.more-guns-slider .slide').removeClass('active-slide');
    $(this).addClass('active-slide');
    var id = $(this).attr('data-id');
    $('.gun-details').fadeOut({
      complete:function() {
        rentals.loadGun(id);
        $('body').removeClass('gun-details-animate-in');
  			$('.gun-details').css('display', 'block');
  			$('.more-guns-slider').slick('setPosition');
  			$('body').addClass('gun-details-animate-in');
      }
    });


  });

};

rentals["getGunImgSize"] = function () {
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

rentals["setupSkew"] = function () {
  // Init
  var container = $(".gun-image"),
    inner = $(".gun-image img");

  // Mouse
  var mouse = {
    _x: 0,
    _y: 0,
    x: 0,
    y: 0,
    updatePosition: function(event) {
      var e = event || window.event;
      this.x = e.clientX - this._x;
      this.y = (e.clientY - this._y) * -1;
    },
    setOrigin: function(e) {
      this._x = e.offset().left + Math.floor(e.width() / 2);
      this._y = e.offset().top + Math.floor(e.height() / 2);
    },
    show: function() {
      return "(" + this.x + ", " + this.y + ")";
    }
  };
  rentals.mouse = mouse;
  rentals.container = container;
  // Track the mouse position relative to the center of the container.
  mouse.setOrigin(container);

  //-----------------------------------------

  var counter = 0;
  var updateRate = 10;
  var entered = false;
  var isTimeToUpdate = function() {
    return counter++ % updateRate === 0;
  };

  //-----------------------------------------

  var onMouseEnterHandler = function(event) {
    entered = true;
    rentals.mouse.setOrigin(rentals.container);
    update(event);
  };

  var onMouseLeaveHandler = function() {
    entered = false;
    updateTransformStyle(0,0);
    inner.style = "";
  };

  var onMouseMoveHandler = function(event) {
    if (isTimeToUpdate()) {
      update(event);
    }
  };

  //-----------------------------------------

  var update = function(event) {
    if( !entered ) return;
    mouse.updatePosition(event);
    updateTransformStyle(
      (mouse.y / inner.height() / 2 * .8).toFixed(2),
      (mouse.x / inner.width() / 2 * .8).toFixed(2)
    );
  };

  var updateTransformStyle = function(x, y) {
    var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
    inner.css({
      "transform":style,
      "webkitTransform":style,
      "mozTransform":style,
      "msTransform":style,
      "oTransform":style
    });
  };

  //-----------------------------------------

  container.mouseenter(onMouseEnterHandler);
  container.mouseleave(onMouseLeaveHandler);
  container.mousemove(onMouseMoveHandler);

  	// get the gun image width and height


  $(window).resize(rentals.getGunImgSize);
  $(".gun-image img").on("load", rentals.getGunImgSize);
}
