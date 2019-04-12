<?php

	/**
	 *	All functions, actions and filters to customize the picture for Thumbnails
	 */

	// article picture
	function cronus_article_picture( $picture, $post, $cols, $media )
	{
		global $tempo_layout;

		$thumbnail = get_post( get_post_thumbnail_id( $post ) );

		$media = array(
			// 0, width: 1140px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-full' ),

			// 1, width: 991px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-classic' ),

			// 2, width: 785px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-tablet' ),

			// 3, width: 555px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-grid' ),

			// 4, width: 480px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-480' ),

			// 5, width: 360px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-small' )
	    );

		if( $cols == 1 ){

			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 421px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

			    $picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
			    $picture .= '</picture>';
			}

			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

			    $picture .= '<img src="' . esc_url( $media[ 0 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
			    $picture .= '</picture>';
			}
		}

		// 2 columns
		else if( $cols == 2 ){

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 4 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 3 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
		        $picture .= '</picture>';
			}
		}

		// 3 columns
		else{

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){

				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 5 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

			    $picture .= '<img src="' . esc_url( $media[ 5 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
			    $picture .= '</picture>';
			}
		}

		return $picture;
	}

	add_filter( 'tempo_article_picture', 'cronus_article_picture', 10, 4 );


	// single post or page picture
	function cronus_single_picture( $picture, $post, $media )
	{
		global $tempo_layout;

		$thumbnail = get_post( get_post_thumbnail_id( $post ) );

		$media = array(
			// 0, width: 1140px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-full' ),

			// 1, width: 991px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-classic' ),

			// 2, width: 785px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-tablet' ),

			// 3, width: 555px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-grid' ),

			// 4, width: 480px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-480' ),

			// 5, width: 360px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-small' )
		);

		if( $tempo_layout -> layout !== 'full' ){
			$picture  = '<picture>';
			$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		    $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		    $picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 421px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
		    $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

		    $picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
		    $picture .= '</picture>';
		}

		else{
			$picture  = '<picture>';
			$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 421px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

			$picture .= '<img src="' . esc_url( $media[ 0 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
			$picture .= '</picture>';
		}

		return $picture;
	}

	add_filter( 'tempo_single_picture', 'cronus_single_picture', 10, 3 );

	// single post or page picture
	function cronus_portfolio_picture( $picture, $post, $cols, $media )
	{
		global $tempo_layout;

		$thumbnail = get_post( get_post_thumbnail_id( $post ) );

		$media = array(
			// 0, width: 785px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-portfolio-tablet' ),

			// 1, width: 555px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-portfolio' ),

			// 2, width: 480px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-portfolio-480' )
	    );

		// 2 columns
		if( $cols == 2 ){

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 2 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}
		}

		// 3 columns
		else{

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){

				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 2 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

			    $picture .= '<img src="' . esc_url( $media[ 2 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
			    $picture .= '</picture>';
			}
		}

		return $picture;
	}

	add_filter( 'tempo_portfolio_picture', 'cronus_portfolio_picture', 10, 4 );

	// gallery picture
	function cronus_gallery_picture( $picture, $thumbnail, $cols, $media )
	{
		return $picture;

		global $tempo_layout;

		$media = array(
			// 0, default width: 1140px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-full' ),

			// 1, default width: 991px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-classic' ),

			// 2, default width: 785px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-tablet' ),

			// 3, default width: 555px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-grid' ),

			// 4, default width: 480px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-480' ),

			// 5, default width: 315px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-small' )
		);

		if( $cols == 1 ){

			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}

			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 0 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}
		}

		else if( $cols == 2 ){
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 4 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}

			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 3 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}
		}

		else {
			$picture  = '<picture>';
			$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';

			$picture .= '<img src="' . esc_url( $media[ 5 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
			$picture .= '</picture>';
		}

		return $picture;
	}

	add_filter( 'tempo_gallery_picture', 'cronus_gallery_picture', 10, 4 );
?>
