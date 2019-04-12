<?php

	/**
	 *	All functions, actions and filters to customize the header image srcset
	 */

	function cronus_header_sizes( $sizes )
	{
		$sizes = array(
			'tempo-header',
			'tempo-full',
			'tempo-classic',
			'tempo-tablet',
			'tempo-grid',
			'tempo-480'
		);

		return $sizes;
	}

	add_filter( 'tempo_header_sizes', 'cronus_header_sizes' );
?>
