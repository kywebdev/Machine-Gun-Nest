$(document).ready(function(){

  buildFullpage();

	//methods
	//$.fn.fullpage.setAllowScrolling(false);


  // change the burger color on the second section of the homepage
  $(window).on( 'load', function() {
      if ($('#scrollspy .nav-item:nth-child(2) .nav-link').hasClass('active')) {
          $('header').addClass('is-section-2');
      } else {
          $('header').removeClass('is-section-2');
      }
  });

});
function buildFullpage() {
  $('#fullpage').fullpage({
		//options here
    licenseKey: '0A8F3336-38644568-93986E56-70B16000',
		//autoScrolling:true,
		//scrollHorizontally: false,
    scrollOverflow:true,
    fadingEffect: true,
    fadingEffectKey: 'dGhlbWFjaGluZWd1bm5lc3QuY29tX3Y0UVptRmthVzVuUldabVpXTjBDS3o=',
    normalScrollElements: '.navigation',
    anchors: ['s1', 's2', 's3', 's4', 's5', 's6'],
    scrollingSpeed: 500,
	responsiveWidth: 900,
    onLeave: function(origin, destination, direction){
      $("#scrollspy a.active").removeClass("active");
    },
  	afterLoad: function(origin, destination, direction){
      var toID = $(destination.item).attr("data-anchor");
      $("#scrollspy a.active").removeClass("active");
      $("#scrollspy a[href='#"+toID+"']").addClass("active");
      if ($('#scrollspy .nav-item:nth-child(2) .nav-link').hasClass('active')) {
          $('header').addClass('is-section-2');
      } else {
          $('header').removeClass('is-section-2');
      }
    },
  	afterRender: function(){  },
  	afterResize: function(width, height){  },
  	afterReBuild: function(){  },
  	afterResponsive: function(isResponsive){ },
  	afterSlideLoad: function(section, origin, destination, direction){  },
  	onSlideLeave: function(section, origin, destination, direction){  }
	});
}
