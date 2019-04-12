<?php
	
	/**
	 *	Appearance / Customize / Breadcrumbs - config settings
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
	 	'tempo-breadcrumbs' => array(
			'fields'	=> array(
				'breadcrumbs-space' => array(
					'input'		=> array(
						'default'	=> 40
					)
				)
			)
		)
	));

	tempo_cfgs::set( 'customize', $cfgs );
?>