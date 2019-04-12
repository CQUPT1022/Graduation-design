<?php

	/**
	 *	Appearance / Tempo FAQ - config settings
	 */

	$link = '<a href="' . esc_url( tempo_core::theme( 'premium-link' ) ) . '" title="' . esc_attr( sprintf( __( '%1$s - Upgrade %2$s to Premium', 'cronus' ), tempo_core::author( 'name' ), tempo_core::theme( 'Name' ) ) )  . '" target="_blank">' . __( 'Cronus Premium Solution', 'cronus' ) . '</a>';

	$settings = tempo_cfgs::merge( (array)tempo_cfgs::get( 'settings' ), array(
		'appearance' => array(
			'tempo-faq' => array(
			    'sections' 	=> array(
					'zeon' => array(
						'id'			=> 'theme-differences',
						'title' 		=> __( 'Cronus Premium', 'cronus' ),
						'description'	=> sprintf( __( 'Activate premium features and get extended core functionality without the risk of loosing any data or settings %1$s with our %2$s that upgrades our Cronus WordPress theme.', 'cronus' ) , '<br/>', $link ),
						//'template'  	=> 'templates/admin/appearance/faq/premium'
					),
				)
			)
		)
	));

	if( tempo_core::is_active_premium() )
		unset( $settings['appearance']['tempo-faq']['sections']['zeon'] );

	tempo_cfgs::set( 'settings', $settings );
?>
