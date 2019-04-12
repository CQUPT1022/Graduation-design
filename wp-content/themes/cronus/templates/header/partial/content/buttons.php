<?php
    $btn_1          = tempo_options::get( 'header-btn-1' );
    $btn_2          = tempo_options::get( 'header-btn-2' );

	if( !( $btn_1 || $btn_2 ) )
        return;
?>
    <!-- header buttons -->
	<div class="<?php echo esc_attr(apply_filters( 'tempo_header_buttons_classes', 'tempo-header-buttons ' . tempo_options::get( 'header-buttons-align' ) )); ?>">
		<?php
			if( $btn_1 ){

				$btn_1_text 		= tempo_options::get( 'header-btn-1-text' );
				$btn_1_description	= tempo_options::get( 'header-btn-1-description' );
				$btn_1_url			= tempo_options::get( 'header-btn-1-url' );
				$btn_1_target		= tempo_options::get( 'header-btn-1-target' ) ? 'target="_blank"' : '';

				echo '<a href="' . esc_url( $btn_1_url ) . '" title="' . esc_attr( $btn_1_description ) . '" ' . $btn_1_target . ' class="tempo-btn btn-header btn-1">' . esc_html( $btn_1_text ) . '</a>';
			}

			if( $btn_2 ){

				$btn_2_text 		= tempo_options::get( 'header-btn-2-text' );
				$btn_2_description	= tempo_options::get( 'header-btn-2-description' );
				$btn_2_url			= tempo_options::get( 'header-btn-2-url' );
				$btn_2_target		= tempo_options::get( 'header-btn-2-target' ) ? 'target="_blank"' : '';

				echo '<a href="' . esc_url( $btn_2_url ) . '" title="' . esc_attr( $btn_2_description ) . '" ' . $btn_2_target . ' class="tempo-btn btn-header btn-2">' . esc_html( $btn_2_text ) . '</a>';
			}
		?>
	</div><!-- end header buttons -->
