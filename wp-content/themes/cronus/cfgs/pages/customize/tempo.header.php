<?php

	/**
	 *	Appearance / Customize / Header Settings - config settings
	 */

	$headers = (array)tempo_cfgs::get( 'headers' );

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
		'tempo-header' => array(
			'sections'		=> array(
				'tempo-header-appearance' => array(
					'fields'		=> array(
						'header-top-space' => array(
							'input'			=> array(
								'default' 		=> 310
							)
						),
						'header-bottom-space' => array(
							'input'			=> array(
								'default' 		=> 200
							)
						),
						'header-text-align' => array(
							'title'			=> __( 'Text Align ', 'cronus' ),
							'description'	=> __( 'Horizontal align Headline and Description. This options is available only if is enable Headline or Description', 'cronus' ),
							'priority'		=> 11,
							'callback'		=> function(){
								return tempo_options::get( 'header-headline' ) || tempo_options::get( 'header-description' );
							},
							'input'			=> array(
								'type'			=> 'select',
								'default'		=> 'center',
								'options'		=> array(
									'left'			=> __( 'Left', 'cronus' ),
									'center'		=> __( 'Center', 'cronus' ),
									'right'			=> __( 'Right', 'cronus' )
								)
							)
						),
						'header-buttons-space' => array(
							'title'			=> __( 'Buttons Space', 'cronus' ),
							'priority'		=> 12,
							'callback'		=> function(){
								return
								tempo_options::get( 'header-headline' ) || tempo_options::get( 'header-description' ) ||
								tempo_options::get( 'header-btn-1' ) || tempo_options::get( 'header-btn-2' );
							},
							'input'			=> array(
								'type'			=> 'range',
								'min'       	=> $headers[ 'min' ],
								'max'       	=> 400,
								'step'      	=> 1,
								'unit' 			=> 'px',
								'default' 		=> 80
							)
						),
						'header-buttons-align' => array(
							'title'			=> __( 'Buttons Align ', 'cronus' ),
							'description'	=> __( 'Horizontal align the buttons. This options is available only if is enable First Button or Second Button', 'cronus' ),
							'priority'		=> 13,
							'callback'		=> function(){
								return tempo_options::get( 'header-btn-1' ) || tempo_options::get( 'header-btn-2' );
							},
							'input'			=> array(
								'type'			=> 'select',
								'default'		=> 'center',
								'options'		=> array(
									'left'			=> __( 'Left', 'cronus' ),
									'center'		=> __( 'Center', 'cronus' ),
									'right'			=> __( 'Right', 'cronus' )
								)
							)
						),
						'header-mask-color' => array(
							'input'			=> array(
	                        	'default' 		=> $headers[ 'mask-color' ],
							)
						),
						'header-mask-transp' => array(
							'input'			=> array(
	                        	'default' 		=> $headers[ 'mask-transp' ]
							)
						),
					)
				),
				'tempo-header-btn-1' => array(
					'title' 	=> __( 'First Button', 'cronus' ),
					'description'	=> tempo_free_vs_premium(),
					'priority'	=> 30,
					'fields'	=> array(
						'header-btn-1' => array(
							'title'			=> __( 'Display First Button', 'cronus' ),
							'description'	=> __( 'enable / disable first Button', 'cronus' ),
							'priority'		=> 5,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> false
							)
						),
						'header-btn-1-text' => array(
							'title'			=> __( 'Text', 'cronus' ),
							'priority'		=> 10,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'First Button', 'cronus' )
							)
						),
						'header-btn-1-description' => array(
							'title'			=> __( 'Description', 'cronus' ),
							'priority'		=> 15,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'first button description', 'cronus' )
							)
						),
						'header-btn-1-url' => array(
							'title'			=> __( 'URL', 'cronus' ),
							'transport'		=> 'postMessage',
							'priority'		=> 20,
							'input'			=> array(
								'type'			=> 'url'
							)
						),
						'header-btn-1-target' => array(
							'title'			=> __( 'Open url in new window', 'cronus' ),
							'description'	=> __( 'enable / disable link attribut target="_blank"', 'cronus' ),
							'transport'		=> 'postMessage',
							'priority'		=> 25,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> true
							)
						),
						'header-btn-1-text-color' => array(
							'title'			=> __( 'Text Color', 'cronus' ),
							'priority'		=> 30,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#ffffff'
							)
						),
						'header-btn-1-text-transp' => array(
							'title'			=> __( 'Text Transparency', 'cronus' ),
							'priority'		=> 35,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						),
						'header-btn-1-text-h-color' => array(
							'title'			=> __( 'Text Color ( over )', 'cronus' ),
							'description'	=> __( 'the Text Color when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 40,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#ffffff'
							)
						),
						'header-btn-1-text-h-transp' => array(
							'title'			=> __( 'Text Transparency ( over )', 'cronus' ),
							'description'	=> __( 'the Text Transparency when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 45,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						),
						'header-btn-1-bkg-color' => array(
							'title'			=> __( 'Background Color', 'cronus' ),
							'priority'		=> 50,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#9e7dd3'
							)
						),
						'header-btn-1-bkg-transp' => array(
							'title'			=> __( 'Background Transparency', 'cronus' ),
							'priority'		=> 55,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						),
						'header-btn-1-bkg-h-color' => array(
							'title'			=> __( 'Background Color ( over )', 'cronus' ),
							'description'	=> __( 'the Background Color when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 60,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#9476c4'
							)
						),
						'header-btn-1-bkg-h-transp' => array(
							'title'			=> __( 'Background Transparency ( over )', 'cronus' ),
							'description'	=> __( 'the Background Transparency when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 65,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						)
					)
				),
				'tempo-header-btn-2' => array(
					'title' 	=> __( 'Second Button', 'cronus' ),
					'description'	=> tempo_free_vs_premium(),
					'priority'	=> 35,
					'fields'	=> array(
						'header-btn-2' => array(
							'title'			=> __( 'Display Second Button', 'cronus' ),
							'description'	=> __( 'enable / disable second Button', 'cronus' ),
							'priority'		=> 5,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> false
							)
						),
						'header-btn-2-text' => array(
							'title'			=> __( 'Text', 'cronus' ),
							'priority'		=> 10,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'Second Button', 'cronus' )
							)
						),
						'header-btn-2-description' => array(
							'title'			=> __( 'Description', 'cronus' ),
							'priority'		=> 15,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'second button description', 'cronus' )
							)
						),
						'header-btn-2-url' => array(
							'title'			=> __( 'URL', 'cronus' ),
							'priority'		=> 20,
							'input'			=> array(
								'type'			=> 'url'
							)
						),
						'header-btn-2-target' => array(
							'title'			=> __( 'Open url in new window', 'cronus' ),
							'description'	=> __( 'enable / disable link attribut target="_blank"', 'cronus' ),
							'priority'		=> 25,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> true
							)
						),
						'header-btn-2-text-color' => array(
							'title'			=> __( 'Text Color', 'cronus' ),
							'priority'		=> 30,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#ffffff'
							)
						),
						'header-btn-2-text-transp' => array(
							'title'			=> __( 'Text Transparency', 'cronus' ),
							'priority'		=> 35,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						),
						'header-btn-2-text-h-color' => array(
							'title'			=> __( 'Text Color ( over )', 'cronus' ),
							'description'	=> __( 'the Text Color when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 40,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#ffffff'
							)
						),
						'header-btn-2-text-h-transp' => array(
							'title'			=> __( 'Text Transparency ( over )', 'cronus' ),
							'description'	=> __( 'the Text Transparency when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 45,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						),
						'header-btn-2-bkg-color' => array(
							'title'			=> __( 'Background Color', 'cronus' ),
							'priority'		=> 50,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#36d678'
							)
						),
						'header-btn-2-bkg-transp' => array(
							'title'			=> __( 'Background Transparency', 'cronus' ),
							'priority'		=> 55,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						),
						'header-btn-2-bkg-h-color' => array(
							'title'			=> __( 'Background Color ( over )', 'cronus' ),
							'description'	=> __( 'the Background Color when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 60,
							'input'			=> array(
								'type'			=> 'color',
								'default'		=> '#32c770'
							)
						),
						'header-btn-2-bkg-h-transp' => array(
							'title'			=> __( 'Background Transparency ( over )', 'cronus' ),
							'description'	=> __( 'the Background Transparency when the mouse cursor is over the button', 'cronus' ),
							'priority'		=> 65,
							'input'			=> array(
								'type'			=> 'percent',
								'default'		=> 100
							)
						)
					)
				),
			)
		)
	));

	tempo_cfgs::set( 'customize', $cfgs );
?>
