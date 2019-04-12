<?php

    $items = tempo_cfgs::get( 'social' );

    $has_social_items   = false;
    $nr_social_items    = 0;

    foreach( $items as $item ){
        $url = tempo_options::get( $item );
        $has_social_items = $has_social_items || !empty( $item );

        if( !empty( $url ) )
            $nr_social_items++;
    }

    if( tempo_options::get( 'display-rss' ) ){
        $rss = tempo_options::get( 'rss' );

        $has_social_items = $has_social_items || !empty( $rss );

        if( !empty( $rss ) )
            $nr_social_items++;
    }

    if( !$has_social_items )
        return;
?>

    <!-- social items wrapper -->
    <div class="cronus-social">

        <?php
            foreach( $items as $item ){
                $url = tempo_options::get( $item );

                if( !empty( $url ) ){
                    echo '<div class="cronus-social-item" style="width: ' . number_format( floatval( 100/$nr_social_items), 8 ) . '%;">';
                    echo '<a href="' . esc_url( $url ) . '" class="tempo-icon-' . esc_attr( $item ) . '" target="_blank" rel="nofollow"></a>';
                    echo '</div>';
                }
            }

            if( tempo_options::get( 'display-rss' ) ){
                $rss = tempo_options::get( 'rss' );

                if( !empty( $rss ) ){
                    echo '<div class="cronus-social-item" style="width: ' . number_format( floatval( 100/$nr_social_items), 8 ) . '%;">';
                    echo '<a href="' . esc_url( $rss ) . '" class="tempo-icon-rss" target="_blank" rel="nofollow"></a>';
                    echo '</div>';
                }
            }
        ?>

    </div><!-- end social items wrapper -->
