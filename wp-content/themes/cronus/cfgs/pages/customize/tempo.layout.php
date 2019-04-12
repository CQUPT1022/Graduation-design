<?php

    /**
     *  Appearance / Customize / Layout - config settings
     */

    $default = array(
        'main'          => __( 'Main Sidebar' , 'cronus' ),
        'front-page'    => __( 'Front Page Sidebar' , 'cronus' ),
        'page'          => __( 'Page Sidebar' , 'cronus' ),
        'post'          => __( 'Single Post Sidebar' , 'cronus' )
    );

    $sidebars   = $default;
    $custom     = tempo_validator::get_json( tempo_options::val( 'custom-sidebars' ) );

    if( !empty( $custom ) && is_array( $custom ) )
        $sidebars = array_merge( $default,  $custom );


    $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
    	'tempo-layout' => array(
    		'title'		=> __( 'Layout' , 'cronus' ),
            'description'	=> tempo_free_vs_premium(),
    		'priority' 	=> 47,
    		'sections'	=> array(
                'tempo-layout-general' => array(
                    'title'             => __( 'General' , 'cronus' ),
                    'priority' 	        => 5,
                    'description'       => sprintf( __( '%1$s: On the premium version, the content width for layout with sidebars is 945 pixels.' , 'cronus' ), '<b>' . __( 'IMPORANT', 'cronus' ) . '</b>' ),
                    'fields'            => array(
                        'content-width' => 'unsupport'
                    )
                ),
    			'tempo-layout' => array(
    				'title'             => __( 'Blog & Archives' , 'cronus' ),
                	'description'       => __( 'Default Layout is used for the next templates: Blog, Archives, Categories, Tags, Author and Search Results.' , 'cronus' ),
                    'priority' 	        => 10,
                	'fields'			=> array(
                		'layout'	=> array(
                			'title'             => __( 'Layout' , 'cronus' ),
                            'priority' 	        => 5,
                			'input'				=> array(
                				'type'		=> 'select',
                				'default'	=> 'right',
                				'options'	=> array(
                					'left'  => __( 'Left Sidebar', 'cronus' ),
                    				'full'  => __( 'Full Width', 'cronus' ),
                    				'right' => __( 'Right Sidebar', 'cronus' )
                				)
                			)
                		),
                		'sidebar'	=> array(
                			'title'             => __( 'Sidebar' , 'cronus' ),
                            'callback'          => function(){
                                return 'full' !== tempo_options::get( 'layout' );
                            },
                            'priority' 	        => 10,
                			'input'				=> array(
                				'type'		=> 'select',
                				'default'	=> 'main',
                				'options'	=> $sidebars
                			)
                		)
                	)
    			),
    			'tempo-front-page-layout' => array(
    				'title'             => __( 'Front Page' , 'cronus' ),
                    'description'       => __( 'In order to use this option set you need to activate a static page on Front Page from - "Static Front Page" tab.' , 'cronus' ),
                    'priority' 	        => 15,
                	'fields'			=> array(
                		'front-page-layout' => array(
                			'title'             => __( 'Layout' , 'cronus' ),
                            'priority' 	        => 5,
                			'input'				=> array(
                				'type'		=> 'select',
                				'default'	=> 'full',
                				'options'	=> array(
                					'left'  => __( 'Left Sidebar', 'cronus' ),
                    				'full'  => __( 'Full Width', 'cronus' ),
                    				'right' => __( 'Right Sidebar', 'cronus' )
                				)
                			)
                		),
                		'front-page-sidebar' => array(
                			'title'             => __( 'Sidebar' , 'cronus' ),
                            'callback'          => function(){
                                return 'full' !== tempo_options::get( 'front-page-layout' );
                            },
                            'priority' 	        => 10,
                			'input'				=> array(
                				'type'		=> 'select',
                				'default'	=> 'front-page',
                				'options'	=> $sidebars
                			)
                		)
                	)
    			),
    			'tempo-post-layout' => array(
    				'title'             => __( 'Post' , 'cronus' ),
                    'description'       => tempo_free_vs_premium(),
                    'priority' 	        => 20,
                	'fields'			=> array(
                        'post-layout'   => array(
                            'title'     => __( 'Layout' , 'cronus' ),
                            'priority'  => 5,
                			'input'		=> array(
                				'type'		=> 'select',
                				'default'	=> 'right',
                				'options'	=> array(
                					'left'  => __( 'Left Sidebar', 'cronus' ),
                    				'full'  => __( 'Full Width', 'cronus' ),
                    				'right' => __( 'Right Sidebar', 'cronus' )
                				)
                			)
                		),
                		'post-sidebar' => array(
                			'title'             => __( 'Sidebar' , 'cronus' ),
                            'callback'          => function(){
                                return 'full' !== tempo_options::get( 'post-layout' );
                            },
                            'priority' 	        => 10,
                			'input'				=> array(
                				'type'		=> 'select',
                				'default'	=> 'post',
                				'options'	=> $sidebars
                			)
                		)
                	)
    			),
                'tempo-page-layout' => array(
                    'title'         => __( 'Page' , 'cronus' ),
                    'description'	=> tempo_free_vs_premium(),
                    'priority'      => 25,
                    'fields'        => array(
                        'page-layout'   => array(
                            'title'         => __( 'Layout' , 'cronus' ),
                            'priority'      => 5,
                            'input'         => array(
                                'type'      => 'select',
                                'default'   => 'full',
                                'options'   => array(
                                    'left'  => __( 'Left Sidebar', 'cronus' ),
                                    'full'  => __( 'Full Width', 'cronus' ),
                                    'right' => __( 'Right Sidebar', 'cronus' )
                                )
                            )
                        ),
                        'page-sidebar' => array(
                            'title'             => __( 'Sidebar' , 'cronus' ),
                            'callback'          => function(){
                                return 'full' !== tempo_options::get( 'page-layout' );
                            },
                            'priority' 	        => 10,
                            'input'             => array(
                                'type'      => 'select',
                                'default'   => 'page',
                                'options'   => $sidebars
                            )
                        )
                    )
                )
    		)
    	)
    ));

    tempo_cfgs::set( 'customize', $cfgs );
?>
