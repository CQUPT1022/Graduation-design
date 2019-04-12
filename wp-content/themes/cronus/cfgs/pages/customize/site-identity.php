<?php

	/**
	 *	Appearance / Customize / Site Identity - config settings
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
		'title_tagline' => array(
			'fields'		=> array(
				'site-title-color' => array(
					'callback'	=> function(){
						return !tempo_has_header();
					},
					'input' 	=> array(
						'default' => '#233141'
					)
				),
				'site-title-transp' => array(
					'callback'	=> function(){
						return !tempo_has_header();
					},
					'input' 	=> array(
						'default' => 90
					)
				),
				'site-title-h-transp'			=> array(
					'callback'	=> function(){
						return !tempo_has_header();
					}
				),
				'tagline-color' => array(
					'callback'	=> function(){
						return !tempo_has_header();
					},
					'input' 	=> array(
						'default' => '#233141'
					)
				),
				'tagline-transp' => array(
					'callback'	=> function(){
						return !tempo_has_header();
					},
					'input' 	=> array(
						'default' => 80
					)
				),
				'tagline-h-transp' => array(
					'callback'	=> function(){
						return !tempo_has_header();
					}
				),

				'header-image-site-title-color' => array(
					'title'			=> __( 'Site Title Color', 'cronus' ),
					'priority' 		=> 81,
					'callback'		=> function(){
							return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#ffffff'
					)
				),
				'header-image-site-title-transp' => array(
					'title'			=> __( 'Site Title Transparency', 'cronus' ),
					'priority' 		=> 82,
					'callback'		=> function(){
							return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'percent',
						'default' 		=> 80
					)
				),
				'header-image-site-title-h-transp' => array(
					'title'			=> __( 'Site Title Transparency (over)', 'cronus' ),
					'description'	=> __( 'When the mouse is over the Title Link.', 'cronus' ),
					'priority' 		=> 83,
					'callback'		=> function(){
							return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'percent',
						'default' 		=> 100
					)
				),
				'header-image-tagline-color' => array(
					'title'			=> __( 'Tagline Color', 'cronus' ),
					'priority' 		=> 84,
					'callback'		=> function(){
							return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#ffffff'
					)
				),
				'header-image-tagline-transp' => array(
					'title'			=> __( 'Tagline Transparency', 'cronus' ),
					'priority' 		=> 85,
					'callback'		=> function(){
							return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'percent',
						'default' 		=> 80
					)
				),
				'header-image-tagline-h-transp' => array(
					'title'			=> __( 'Tagline Transparency (over)', 'cronus' ),
					'description'	=> __( 'When the mouse is over the Title Link.', 'cronus' ),
					'priority' 		=> 86,
					'callback'		=> function(){
							return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'percent',
						'default' 		=> 100
					)
				)
			),
		)
	));

	tempo_cfgs::set( 'customize', $cfgs );
?>