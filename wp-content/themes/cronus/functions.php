<?php

	/**
     *  Load Widgets classes
     */

    function cronus_autoload_widgets( $class_name )
    {
        if( preg_match( "/^cronus_widget_/", $class_name ) ){

            $class_file  = str_replace( '_', '-', str_replace( 'cronus_widget_', '', $class_name ) );
            $class_path  = get_stylesheet_directory() . '/widgets/cronus.' . esc_attr( $class_file ) . '.class.php';

            if( is_file( $class_path ) ){
                include_once  $class_path;
            }
        }
    }

    spl_autoload_register( 'cronus_autoload_widgets' );


    /**
	 *	Register Widgets
	 */

    function cronus_register_widgets()
	{
		register_widget( 'cronus_widget_post_categories' );
		register_widget( 'cronus_widget_post_tags' );
		register_widget( 'cronus_widget_post_meta' );
	}

	add_action( 'widgets_init', 'cronus_register_widgets' );


	function cronus_preload_configs()
	{
		include_once get_stylesheet_directory() . '/cfgs/main.php';
	}

	add_action( 'tempo_preload_cfgs', 'cronus_preload_configs' );


    /**
     *	Extends parent Theme Settings
     */

    function cronus_load_configs()
    {
		include_once get_stylesheet_directory() . '/cfgs/pages/appearance/faq.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/site-identity.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/colors.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.menu.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.header.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.breadcrumbs.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.layout.php';

	    include_once get_stylesheet_directory() . '/cfgs/sidebars/cfgs.php';
	}

    add_action( 'tempo_load_cfgs', 'cronus_load_configs' );


    function cronus_setup_theme()
    {
        /**
         *  Internationalizations and Localization
         */

        load_child_theme_textdomain( 'cronus', get_stylesheet_directory() . '/languages' );
    }

    add_action( 'after_setup_theme', 'cronus_setup_theme', 1 );


    /**
     *	Include child Styles and Scripts
     */

    function cronus_enqueue_styles()
	{
		$ver = tempo_core::theme( 'Version' );

		// disable parent fontS AND SETTINGS
		wp_deregister_style( 'tempo-google-font-1' );
		wp_dequeue_style( 'tempo-google-font-1' );

		wp_deregister_style( 'tempo-settings-google-font-1' );
		wp_dequeue_style( 'tempo-settings-google-font-1' );


		$font = 'Montserrat:400,700';

		wp_register_style( 'tempo-google-font-1',           	'//fonts.googleapis.com/css?family=' . esc_attr( $font ), null, $ver );

		wp_register_style( 'cronus-typography',					get_stylesheet_directory_uri() . '/media/css/typography.min.css', null, $ver );
		wp_register_style( 'cronus-menu',						get_stylesheet_directory_uri() . '/media/css/menu.min.css', null, $ver );
		wp_register_style( 'cronus-header',						get_stylesheet_directory_uri() . '/media/css/header.min.css', null, $ver );
		wp_register_style( 'cronus-blog',						get_stylesheet_directory_uri() . '/media/css/blog.min.css', null, $ver );
		wp_register_style( 'cronus-forms',						get_stylesheet_directory_uri() . '/media/css/forms.min.css', null, $ver );
		wp_register_style( 'cronus-single',						get_stylesheet_directory_uri() . '/media/css/single.min.css', null, $ver );
		wp_register_style( 'cronus-comments',					get_stylesheet_directory_uri() . '/media/css/comments.min.css', null, $ver );
		wp_register_style( 'cronus-widgets',					get_stylesheet_directory_uri() . '/media/css/widgets.min.css', null, $ver );

		wp_register_style( 'cronus-footer',						get_stylesheet_directory_uri() . '/media/css/footer.min.css', null, $ver );
		wp_register_style( 'cronus-jetpack',					get_stylesheet_directory_uri() . '/media/css/jetpack.min.css', null, $ver );

		// include child font settings
		wp_register_style( 'tempo-settings-google-font-1', 		get_stylesheet_directory_uri() . '/media/css/settings-google-font-1.min.css', null, $ver );


		$dependency = array(
			'tempo-style',

			'tempo-google-font-1',

			'cronus-typography',
			'cronus-menu',
			'cronus-header',
			'cronus-blog',
			'cronus-forms',
			'cronus-single',
			'cronus-comments',
			'cronus-widgets',

			'cronus-footer',
			'cronus-jetpack',

			'tempo-settings-google-font-1'
		);

		wp_enqueue_style( 'cronus-style', 						get_stylesheet_uri(), $dependency, $ver );

		// Load the Internet Explorer specific stylesheet.
        wp_enqueue_style( 'cronus-ie',                       	get_stylesheet_directory_uri() . '/media/css/ie.min.css', null, $ver );
        wp_style_add_data( 'cronus-ie', 'conditional', 'IE' );


		wp_register_script( 'cronus-functions', 				get_stylesheet_directory_uri() . '/media/js/functions.js', array( 'jquery' ), $ver, true );
        wp_enqueue_script( 'cronus-functions' );
	}

	add_action( 'wp_enqueue_scripts', 'cronus_enqueue_styles' );

	// HOOKS
	include_once get_stylesheet_directory() . '/hooks/images.php';
	include_once get_stylesheet_directory() . '/hooks/picture.php';


	{	////	LAYOUT


		/**
		 *	Define website Content width
		 */

		function cronus_content_width( $width ){
    		return 1140;
    	}

    	add_filter( 'tempo_content_width', 'cronus_content_width' );

		/**
		 *	Content Length
		 */

		function cronus_content_length( $length )
		{
			return 'col-lg-12';
		}

		add_filter( 'tempo_content_length', 'cronus_content_length' );


	    /**
	     *	Front Page Section Length
	     */

	    function cronus_front_page_section_length( $length )
	    {
	        $layout = new tempo_layout( 'front-page' );
	        return $layout -> classes();
	    }

	    add_filter( 'tempo_front_page_section_length', 'cronus_front_page_section_length' );


	    /**
	     *	Singular Post / Page Section Length
	     */

	    function cronus_singular_section_length( $length, $post_id )
	    {
	    	if( empty( $post_id ) )
	    		return;

	    	$post = get_post( $post_id );

	        $layout = new tempo_layout( $post -> post_type );
	        return $layout -> classes();
	    }

	    add_filter( 'tempo_page_section_length', 'cronus_singular_section_length', 10, 2 );
	    add_filter( 'tempo_single_section_length', 'cronus_singular_section_length', 10, 2 );

	    /**
	     *	Loop Section Length + Blog View Class
	     */

	    function cronus_loop_section_length( $layout )
	    {
	        $layout = new tempo_layout();
	        return esc_attr( $layout -> classes() . ' tempo-blog-' . tempo_options::get( 'blog-view' ) );
	    }

	    add_filter( 'tempo_loop_section_length', 'cronus_loop_section_length' );



	    ///// SIDEBARS ACTIONS /////

	    /**
	     *	Left Sidebars
	     */

	    function cronus_left_sidebar( $slug, $name )
	    {
			global $tempo_layout;

	    	if( is_404() )
	    		return;

		    /**
		     *	get sidebar
		     */

	    	$tempo_layout = new tempo_layout( $name );

	    	if( is_singular() && !( is_front_page() || is_home() ) ){
	    		global $post;

	    		$tempo_layout = new tempo_layout( $name );
	    	}

			// left sidebar
	        $tempo_layout -> sidebar( 'left' );
	    }

	    add_action( 'get_template_part_templates/section/before', 'cronus_left_sidebar', 10, 2 );

	    /**
	     *	Right Sidebars
	     */

	    function cronus_right_sidebar( $slug, $name )
	    {
			global $tempo_layout;

	    	if( is_404() )
	    		return;

		    /**
		     *	get sidebar
		     */

	    	$tempo_layout = new tempo_layout( $name );

	    	if( is_singular() && !( is_front_page() || is_home() ) ){
	    		global $post;

	    		$tempo_layout = new tempo_layout( $name );
	    	}

	    	// right sidebar
	        $tempo_layout -> sidebar( 'right' );
	    }

	    add_action( 'get_template_part_templates/section/after', 'cronus_right_sidebar', 10, 2 );
	}


	{	////	HEADER


		/**
    	 *	Disable default parent custom style
    	 */

    	function cronus_not_has_header()
	    {
	    	return !tempo_has_header();
	    }

 		add_filter( 'tempo_site_identity_style', 'cronus_not_has_header' );
    	add_filter( 'tempo_menu_style', 'cronus_not_has_header' );


    	function cronus_customize_js_files( $files )
	    {
	    	$files[ 'cronus-customize' ] = get_stylesheet_directory_uri() . '/media/admin/js/customize.js';

	    	return $files;
	    }

    	add_filter( 'tempo_customize_js_files', 'cronus_customize_js_files' );
	}


	/**
	 *	Comments Submit button Classes
	 */

	function cronus_submi_comment_class( $classes )
	{
		return 'tempo-btn btn-hover-empty icon-left';
	}

	add_filter( 'tempo_submi_comment_class', 'cronus_submi_comment_class' );

	/**
	 *	Footer Social
	 */

	function cronus_footer_social( $slug, $name )
    {
    	tempo_get_template_part( 'templates/footer/prepend-social' );
    }

    add_action( 'get_template_part_templates/footer/prepend', 'cronus_footer_social', 10, 2 );
?>
