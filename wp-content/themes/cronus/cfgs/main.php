<?php

	/**
	 *	General config settings
	 */
	 

	/**
	 *	Custom Logo
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-logo' ), array(
        'height'      	=> 70,
        'width'       	=> 235,
        'flex-height' 	=> true,
		'flex-width'  	=> true,
		'header-text'	=> array( 'tempo-site-title', 'tempo-site-description' )
    ));

    tempo_cfgs::set( 'custom-logo', $cfgs );


    /**
     *	Custom Background
     */

    $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-background' ), array(
        'default-color'         => '#ffffff',
        'default-image'         => null,
        'default-attachment'    => 'scroll'
	));

	tempo_cfgs::set( 'custom-background', $cfgs );


	/**
     *	Custom Header
     */

    $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-header' ), array(
        'default-image' => get_stylesheet_directory_uri() . '/media/img/header.jpg',
		'width'         => 2560,
		'height'        => 1440
    ));

    tempo_cfgs::set( 'custom-header', $cfgs );


	/**
	 *	Images Size
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'images-size' ), array(
		'tempo-header' 	=> array(
			'width' 	=> 2560,
			'height'    => 1440,
			'crop' 		=> true
		),
		'tempo-full' => array(
			'width' 	=> 1140,
			'height'	=> 640,
			'crop' 		=> true
		),
		'tempo-classic'	=> array(
			'width' 	=> 991,
			'height'	=> 560,
			'crop' 		=> true
		),

		// portfolio picture sources
		'tempo-tablet' => array(
			'width' 	=> 785,
			'height'	=> 445,
			'crop' 		=> true
		),
		'tempo-grid' => array(
			'width' 	=> 555,
			'height'	=> 315,
			'crop' 		=> true
		),
		'tempo-480' 	=> array(
			'width' 	=> 480,
			'height'	=> 270,
			'crop' 		=> true
		),

		'tempo-gallery' => array(
			'width' 	=> 420,
			'height'	=> 240,
			'crop' 		=> true
		),
		'tempo-small' 	=> array(
			'width' 	=> 360,
			'height'	=> 210,
			'crop' 		=> true
		),

		// portfolio picture sources
		'tempo-portfolio-tablet' => array(
			'width' 	=> 785,
			'height'	=> 880,
			'crop' 		=> true
		),
		'tempo-portfolio' => array(
			'width' 	=> 555,
			'height'	=> 625,
			'crop' 		=> true
		),
		'tempo-portfolio-480' 	=> array(
			'width' 	=> 480,
			'height'	=> 538,
			'crop' 		=> true
		)
	));

	tempo_cfgs::set( 'images-size', $cfgs );

	/**
	 *	Headers
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'headers' ), array(
		'mask-color'	=> '#1c2633',
		'mask-transp'	=> 60
	));

	tempo_cfgs::set( 'headers', $cfgs );

	/**
	 *	Asides Columns
	 */

	 $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'asides' ), array(
 	   'header-front-page' 	=> 3,
	   'header-blog' 		=> 3,
	   'footer-light' 		=> 4,
	   'footer-dark' 		=> 4
    ));

    tempo_cfgs::set( 'asides', $cfgs );
?>
