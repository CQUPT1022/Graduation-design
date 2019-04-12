<?php

    /**
     *  Sidebars - config file
     */

    $cfgs = (array)tempo_cfgs::get( 'sidebars' );

    if( !empty( $cfgs ) )
        return;

    $cfgs = array(

        /**
         *  Header Sidebars
         */

        'header'    => array(),


        /**
         *
         *  Content Sidebars
         *  Main Sidebar        - is used by default for next templates: Blog, Archives, Author, Categories, Tags and Search Results.
         *  Front Page Sidebar  - is used by default for Front Page template.
         *  Single Sidebar      - is used by default for single post template.
         *  Page Sidebar        - is used by default for page template.
         */

        'content' => array(
            'main' => array(
                'id'            => 'main',
                'name'          => __( 'Main Sidebar' , 'cronus' ),
                'description'   => __( 'Main Sidebar - is used by default for next templates: Blog, Archives, Author, Categories, Tags and Search Results.' , 'cronus' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            ),
            'front-page' => array(
                'id'            => 'front-page',
                'name'          => __( 'Front Page - Default Sidebar' , 'cronus' ),
                'description'   => __( 'Front Page Sidebar - is used by default for Front Page template.' , 'cronus' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            ),
            'post' => array(
                'id'            => 'post',
                'name'          => __( 'Single Post - Default Sidebar' , 'cronus' ),
                'description'   => __( 'Default Single Post Sidebar - is used by default for single post template.' , 'cronus' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            ),
            'page' => array(
                'id'            => 'page',
                'name'          => __( 'Page - Default Sidebar' , 'cronus' ),
                'description'   => __( 'Page Sidebar - is used by default for page template.' , 'cronus' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        ),


        /**
         *
         *  Footer Sidebars
         */

        'footer' => array(
            'footer-dark' => array(
                'id'            => 'footer-dark',
                'name'          => __( 'Footer Dark Side' , 'cronus' ),
                'description'   => __( 'Inside of the Sidebar the widgets will be arranged in 4 columns.' , 'cronus' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="widget-title">',
                'after_title'   => '</h5>'
            )
        )
    );

    tempo_cfgs::set( 'sidebars', $cfgs );
?>
