<?php

    /**
     *  Footer Widgets numbers of Columns
     */

    $asides = (array)tempo_cfgs::get( 'asides' );
    $nr     = apply_filters( 'cronus_footer_dark_sidebar_columns', absint( $asides[ 'footer-dark' ] ) );

    /**
     *  Footer Widgets
     */

    if( !is_active_sidebar( 'footer-dark' ) )
        return;
?>

    <!-- aside -->
    <aside class="content tempo-footer dark-sidebars">

        <!-- container -->
        <div <?php echo tempo_container_class(); ?>>
            <div <?php echo tempo_row_class(); ?>>

                <!-- content -->
                <div <?php echo tempo_content_class(); ?>>
                    <div <?php echo tempo_row_class( 'widgets-row cols-' . absint( $nr ) ); ?>>

                        <?php dynamic_sidebar( 'footer-dark' ); ?>

                    </div>
                </div><!-- end content -->

            </div>
        </div><!-- end container -->

    </aside><!-- end aside -->
