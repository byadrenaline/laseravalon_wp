jQuery(function ($) {

var documento = $(document);
var ventana = $(window);


/* Slick Slider
–––––––––––––––––––––––––––––––––––––––––––––––––– */

documento.on('ready',function(){
	$('.slider').slick({
		autoplay: true,
		arrows: false,
		dots: true,
	});

});

documento.on('ready', byadr_zonas_responsive);
ventana.on('resize', byadr_zonas_responsive);

function byadr_zonas_responsive(){
	if (ventana.width() < 1024) {
		$('.zonas-module--nav-content').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.zonas-module--nav'
		});

		$('.zonas-module--nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.zonas-module--nav-content',
			dots: false,
			arrows: false,
			//centerMode: true,
			focusOnSelect: true
		});	
	}

    if (ventana.width() > 1024) {
        $('.zonas-module--nav').slick('unslick');
        $('.zonas-module--nav-content').slick('unslick');
    }
}

	


/* Grilla Imagenes
–––––––––––––––––––––––––––––––––––––––––––––––––– */

documento.on('ready', byadr_add_grilla_class);
ventana.on('resize', byadr_add_grilla_class);

function byadr_add_grilla_class() {
    if (ventana.width() < 768) {
        $('.grilla-module--container').slick({
		  	autoplay: true,
		  	arrows: false,
		  	dots: false,
		});
    }
    if (ventana.width() > 768) {
        $('.grilla-module--container').slick('unslick');
    }

}


/* Tabs - zonas depilacion
–––––––––––––––––––––––––––––––––––––––––––––––––– */
var tab = $('.zonas-module--tab');
var tab_img = $('.zonas-module--content-wrap');

$('.zonas-module--tab:first-child').addClass('zonas-module--tab__active');
$('.zonas-module--content-wrap:first-child').addClass('zonas-module--content-wrap__active');


tab.on('click', byadr_tabs);

function byadr_tabs(){
	var index = $(this).index();

	tab.removeClass('zonas-module--tab__active');
	$(this).addClass('zonas-module--tab__active');

	tab_img.removeClass('zonas-module--content-wrap__active');
	tab_img.eq(index).addClass('zonas-module--content-wrap__active');
	

	//console.log(index);

}

/* Menu Mobile
–––––––––––––––––––––––––––––––––––––––––––––––––– */

$('.nav-menu__mobile').on('click', byadr_show_menu);

function byadr_show_menu(){
	$('.nav-menu__mobile .menu-container').slideToggle();
};



/* Tabs FAQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */

var dt = $('.faq dt');
var dd = $('.faq dd');

dt.on('click', byadr_faqs);

function byadr_faqs(){

	if( $(this).hasClass('dt__active') ) {
		$(this).removeClass('dt__active').next('dd').slideUp();
		

	}else{
		dd.slideUp();
		dt.removeClass('dt__active');
		$(this).addClass('dt__active').next('dd').slideDown();


	}

}

/*
var tab = $('.zonas-module--tab');




tab.on('click', byadr_tabs);

function byadr_tabs(){
	var index = $(this).index();

	tab.removeClass('zonas-module--tab__active');
	$(this).addClass('zonas-module--tab__active');

	tab_img.removeClass('zonas-module--image__active');
	tab_img.eq(index).addClass('zonas-module--image__active');
	

	//console.log(index);

}
*/


/* Masonry
–––––––––––––––––––––––––––––––––––––––––––––––––– 

// Gallery
documento.on('ready', function(){
	$('.gallery-wrapper').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.gallery-item',
	  // use element for option
	  columnWidth: '.gallery-sizer',
	  percentPosition: true
	});


	// Blog Archive

	$('.blog--wrapper').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.blog--item',
	  // use element for option
	  columnWidth: '.blog--sizer',
	  percentPosition: true
	});
});

*/
/* Magnific PopUp
–––––––––––––––––––––––––––––––––––––––––––––––––– 
$(function () {
	$('.btn--popup').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	documento.on('click', '.btn--popup__dismiss', function(e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});

*/


/* Menu Mobile
–––––––––––––––––––––––––––––––––––––––––––––––––– 

$('.mobileNav').on('click', byadr_show_menu);

function byadr_show_menu(){
	$('.mobileNav > div').slideToggle();
};
*/


/* Ancla Top
–––––––––––––––––––––––––––––––––––––––––––––––––– 

$('.ancla').on('click',function(event){
	event.preventDefault();
	$( "html , body" ).stop().animate( { scrollTop: 0 } , 2400 , "easeInOutCubic") ;
});

*/


/* Problemas padding bloques texto
–––––––––––––––––––––––––––––––––––––––––––––––––– */

documento.on('ready', function(){
	$('.text-module > .column.column__half:nth-of-type(2n+3)').before('</div><div class="clearfix">');

	$('.text-module > .column.column__third:nth-of-type(3n+4)').before('</div><div class="clearfix">');

	$('.text-module > .column.column__fourth:nth-of-type(4n+5)').before('</div><div class="clearfix">');
});





/* Evitar scroll en pop up
––––––––––––––––––––––––––––––––––––––––––––––––––

documento.on('ready', deshabilitamos_scroll_popup);

function deshabilitamos_scroll_popup(){
	var estadoPopup = $('.popup').css("display");

	if( estadoPopup === 'block' ){
		$('body').addClass('noscroll');
	}
	if( estadoPopup === 'none' ){
		$('body').removeClass('noscroll');
	}
}
 */




/* Google Maps
–––––––––––––––––––––––––––––––––––––––––––––––––– */

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

documento.ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});


}); // Fin de jQuery function