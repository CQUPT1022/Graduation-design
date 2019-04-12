<?php

	/**
	 *	Appearance / Customize / Colors - config settings
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
		'colors' => array(
			'title' 		=> __( 'Colors', 'cronus' ),
			'priority'      => 11,
			'fields'		=> array(
				'first-color' => array(
					'title'			=> __( 'First Color', 'cronus' ),
					'priority' 		=> 10,
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#a483d6'
					)
				),
				'first-h-color' => array(
					'title'			=> __( 'First Color (over)', 'cronus' ),
					'description'	=> __( 'When the mouse is over the Title Link.', 'cronus' ),
					'priority' 		=> 15,
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#9073bc'
					)
				),
				'second-color' => array(
					'title'			=> __( 'Second Color', 'cronus' ),
					'priority' 		=> 20,
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#36d678'
					)
				),
				'second-h-color' => array(
					'title'			=> __( 'Second Color (over)', 'cronus' ),
					'description'	=> __( 'When the mouse is over the Title Link.', 'cronus' ),
					'priority' 		=> 25,
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#32c770'
					)
				)
			)
		)
	));

	tempo_cfgs::set( 'customize', $cfgs );
?>
