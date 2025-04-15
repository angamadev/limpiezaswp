/*
** Scripts within the customizer controls window.
*/

(function( $ ) {
	wp.customize.bind( 'ready', function() {

	/*
	** Reusable Functions
	*/
		var optPrefix = '#customize-control-smart_cleaning_options-';
		
		// Label
		function smart_cleaning_customizer_label( id, title ) {

			// Colors

			if ( id === 'smart_cleaning_theme_color_one' || id === 'background_color' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Site Identity

			if ( id === 'custom_logo' || id === 'site_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			//  Header

			if ( id === 'smart_cleaning_topbar_email_icon' || id === 'smart_cleaning_topbar_text1' || id === 'smart_cleaning_header_location_icon' || id === 'smart_cleaning_header_phone_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Social Icon

			if ( id === 'smart_cleaning_facebook_icon' || id === 'smart_cleaning_twitter_icon' || id === 'smart_cleaning_intagram_icon'|| id === 'smart_cleaning_linkedin_icon'|| id === 'smart_cleaning_pintrest_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// General setting

			if ( id === 'smart_cleaning_preloader_hide' || id === 'smart_cleaning_sticky_header' || id ===  'smart_cleaning_scroll_hide' || id === 'smart_cleaning_products_per_row' || id === 'smart_cleaning_woocommerce_related_product_show_hide' || id === 'smart_cleaning_woo_product_sale_border_radius') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider

			if ( id === 'smart_cleaning_blog_slider_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Header Image

			if ( id === 'header_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
			// Services

			if ( id === 'smart_cleaning_blog_service_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// What We Do

			if ( id === 'smart_cleaning_company_services_category_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Footer

			if ( id === 'smart_cleaning_show_hide_footer' || id === 'smart_cleaning_show_hide_copyright') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Post Setting

			if ( id === 'smart_cleaning_post_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Setting

			if ( id === 'smart_cleaning_single_post_thumb' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Comment Setting

			if ( id === 'smart_cleaning_single_post_comment_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Page Setting

			if ( id === 'smart_cleaning_single_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-smart_cleaning_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		}


	/*
	** Tabs
	*/

		// Colors
		smart_cleaning_customizer_label( 'smart_cleaning_theme_color_one', 'Theme Color' );
		smart_cleaning_customizer_label( 'background_color', 'Colors' );
		smart_cleaning_customizer_label( 'background_image', 'Image' );

		// Site Identity
		smart_cleaning_customizer_label( 'custom_logo', 'Logo Setup' );
		smart_cleaning_customizer_label( 'site_icon', 'Favicon' );

		// Header
		smart_cleaning_customizer_label( 'smart_cleaning_topbar_email_icon', 'Email Address' );
		smart_cleaning_customizer_label( 'smart_cleaning_topbar_text1', 'Text' );
		smart_cleaning_customizer_label( 'smart_cleaning_header_location_icon', 'Location' );
		smart_cleaning_customizer_label( 'smart_cleaning_header_phone_icon', 'Phone Number' );

		// Social Icon
		smart_cleaning_customizer_label( 'smart_cleaning_facebook_icon', 'Facebook' );
		smart_cleaning_customizer_label( 'smart_cleaning_twitter_icon', 'Twitter' );
		smart_cleaning_customizer_label( 'smart_cleaning_intagram_icon', 'Intagram' );
		smart_cleaning_customizer_label( 'smart_cleaning_linkedin_icon', 'Linkedin' );
		smart_cleaning_customizer_label( 'smart_cleaning_pintrest_icon', 'Pintrest' );


		// Genaral Setting
		smart_cleaning_customizer_label( 'smart_cleaning_preloader_hide', 'Preloader' );
		smart_cleaning_customizer_label( 'smart_cleaning_sticky_header', 'Sticky Header' );
		smart_cleaning_customizer_label( 'smart_cleaning_scroll_hide', 'Scroll To Top' );
		smart_cleaning_customizer_label( 'smart_cleaning_products_per_row', 'Woocommerce Setting' );
		smart_cleaning_customizer_label( 'smart_cleaning_woo_product_sale_border_radius', 'Woocommerce Product Sale');
		smart_cleaning_customizer_label( 'smart_cleaning_woocommerce_related_product_show_hide', 'Woocommerce Related Products' );

		//Slider
		smart_cleaning_customizer_label( 'smart_cleaning_blog_slider_setting', 'Slider' );

		//Header Image
		smart_cleaning_customizer_label( 'header_image', 'Header Image' );

		//Services
		smart_cleaning_customizer_label( 'smart_cleaning_blog_service_setting', 'Services' );

		//What We Do
		smart_cleaning_customizer_label( 'smart_cleaning_company_services_category_title', 'What We Do' );

		//Footer
		smart_cleaning_customizer_label( 'smart_cleaning_show_hide_footer', 'Footer' );
		smart_cleaning_customizer_label( 'smart_cleaning_show_hide_copyright', 'Copyright' );

		//Post Setting
		smart_cleaning_customizer_label( 'smart_cleaning_post_page_title', 'Post Setting' );

		//Single Post Setting
		smart_cleaning_customizer_label( 'smart_cleaning_single_post_thumb', 'Single Post Setting' );
		smart_cleaning_customizer_label( 'smart_cleaning_single_post_comment_title', 'Single Post Comment' );

		// Page Setting
		smart_cleaning_customizer_label( 'smart_cleaning_single_page_title', 'Page Setting' );
	

	}); // wp.customize ready

})( jQuery );
