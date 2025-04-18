function smart_cleaning_openNav() {
  jQuery(".sidenav").addClass('show');
}
function smart_cleaning_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function smart_cleaning_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const smart_cleaning_nav = document.querySelector( '.sidenav' );

      if ( ! smart_cleaning_nav || ! smart_cleaning_nav.classList.contains( 'show' ) ) {
        return;
      }

      const elements = [...smart_cleaning_nav.querySelectorAll( 'input, a, button' )],
        smart_cleaning_lastEl = elements[ elements.length - 1 ],
        smart_cleaning_firstEl = elements[0],
        smart_cleaning_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && smart_cleaning_lastEl === smart_cleaning_activeEl ) {
        e.preventDefault();
        smart_cleaning_firstEl.focus();
      }

      if ( shiftKey && tabKey && smart_cleaning_firstEl === smart_cleaning_activeEl ) {
        e.preventDefault();
        smart_cleaning_lastEl.focus();
      }
    } );
  }
  smart_cleaning_keepFocusInMenu();
} )( window, document );

jQuery(document).ready(function() {
  var slider_loop = jQuery('#top-slider').attr('slider-loop');
	var owl = jQuery('#top-slider .owl-carousel');
		owl.owlCarousel({
			margin: 0,
			nav: false,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			loop: slider_loop == 0 ? false : slider_loop,
      dots:false,
      rtl: true,
			navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
			responsive: {
			  0: {
			    items: 1
			  },
			  600: {
			    items: 1
			  },
			  1024: {
			    items: 1
			}
		}
	});
})

window.addEventListener('load', (event) => {
  jQuery(".loading").delay(2000).fadeOut("slow");
  jQuery(".loading2").delay(2000).fadeOut("slow");
});

var btn = jQuery('#button');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

jQuery(window).scroll(function() {
  var data_sticky = jQuery('.menu-header').attr('data-sticky');

  if (data_sticky == "true") {
    if (jQuery(this).scrollTop() > 1){
      jQuery('.menu-header').addClass("stick_header");
    } else {
      jQuery('.menu-header').removeClass("stick_header");
    }
  }
});
