<?php

	/**
	 *	Appearance / Customize / Menu Appearance - config settings
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
		'tempo-menu'		=> array(
			'fields'		=> array(
				'menu-visible' 		=> null,
				'collapse-submenu' => array(
					'title'			=> __( 'Collapse Submenu', 'cronus' ),
					'description'	=> __( 'enable / disable submenu collapsing for mobile devices', 'cronus' ),
					'priority' 		=> 8,
					'input'		=> array(
						'type'		=> 'checkbox',
						'default'	=> false
					)
				),
				'menu-link-color' 	=> array(
					'callback'		=> function(){
						return !tempo_has_header();
					},
					'input' 		=> array(
						'default' => '#8a95a6'
					)
				),
				'menu-link-transp'	=> array(
					'callback'		=> function(){
						return !tempo_has_header();
					},
					'input'			=> array(
						'default' 		=> 100
					)
				),
				'menu-link-h-color' => array(
					'callback'		=> function(){
						return !tempo_has_header();
					},
					'input'			=> array(
						'default' => '#1c2633'
					)
				),
				'menu-link-h-transp' => array(
					'callback'		=> function(){
						return !tempo_has_header();
					}
				),

				'header-image-menu-link-color'			=> array(
					'title'			=> __( 'Link Color', 'cronus' ),
					'priority'      => 10,
					'callback'		=> function(){
						return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#ffffff'
					)
				),
				'header-image-menu-link-transp'			=> array(
					'title'			=> __( 'Link Transparency', 'cronus' ),
					'priority'      => 15,
					'callback'		=> function(){
						return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'percent',
						'default' 		=> 60
					)
				),
				'header-image-menu-link-h-color'			=> array(
					'title'			=> __( 'Link Color (over)', 'cronus' ),
					'description'   => __( 'When the mouse is over the Menu Link.', 'cronus' ),
					'priority'      => 20,
					'callback'		=> function(){
						return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#36d678'
					)
				),
				'header-image-menu-link-h-transp' => array(
					'title'         => __( 'Link Transparency (over)', 'cronus' ),
	                'description'	=> __( 'When the mouse is over the Menu Link.', 'cronus' ),
	                'priority'      => 25,
	                'callback'		=> function(){
						return tempo_has_header();
					},
					'input'			=> array(
						'type'			=> 'percent',
						'default' 		=> 100
					)
				)
			)
		)
	));

	tempo_cfgs::set( 'customize', $cfgs );
?>
