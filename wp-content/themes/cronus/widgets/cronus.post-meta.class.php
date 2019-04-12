<?php

	/**
     *  Post Meta
     *	This widget can be used only for single templates
     */

	if( !class_exists( 'cronus_widget_post_meta' ) ){
		class cronus_widget_post_meta extends WP_Widget
		{
			/**
             *  Widget Constructor
             */

		    function __construct()
		    {
		        parent::__construct( 'cronus_widget_post_meta', esc_html__( 'Post Meta', 'cronus' ) . ' [' . esc_attr( tempo_core::theme( 'Name' ) ) . ']', array(
		            'classname'     => 'tempo_widget_post_meta',
		            'description'   => esc_html__( 'This widget can be used only for single post templates', 'cronus' )
		        ));
		    }

		    /**
             *  Widget Preview
             */

		    function widget( $args, $instance )
		    {
		        global $post;

		        // extract args
		        extract( $args , EXTR_SKIP );

		        $instance = wp_parse_args( (array)$instance, array(
		            'title' => esc_html__( 'Post Meta Details', 'cronus' )
		        ));

		        if( !is_single() ){
		            return;
		        }

		        echo $before_widget;

		        if( !empty( $instance[ 'title' ] ) ) {
		            echo $before_title;
		            echo apply_filters( 'widget_title', esc_attr( $instance[ 'title' ] ), $instance, $this -> id_base );
		            echo $after_title;
		        }

				// date settings
		        $y      	= esc_attr( get_post_time( 'Y', false, $post ) );
		        $m      	= esc_attr( get_post_time( 'm', false, $post ) );
		        $d      	= esc_attr( get_post_time( 'd', false, $post ) );

		        $name   	= esc_attr( get_the_author_meta( 'display_name' , $post -> post_author ) );
		        $time  		= esc_attr( get_post_time( 'Y-m-d', false, $post ) );
		        $wp_time  	= get_post_time( esc_attr( get_option( 'date_format' ) ), false , $post, true );


		        echo '<div>';
		        echo '<ul>';

		        // edit link
		        edit_post_link( '<i class="tempo-icon-pencil"></i>' . __( 'Edit', 'cronus' ) , '<li>', '</li>' );

		        // date link
		        echo '<li><a href="' . esc_url( get_day_link( $y , $m , $d ) ) . '">';
		        echo '<time datetime="' . esc_attr( $time ) . '"><i class="tempo-icon-calendar"></i>' . esc_html( $wp_time ) . '</time>';
		        echo '</a></li>';

		        // author link
		        echo '<li><a href="' . esc_url( get_author_posts_url( $post -> post_author ) ) . '" title="' . sprintf( esc_attr__( 'Written by %1$s', 'cronus' ), esc_attr( $name ) ) . '"><i class="tempo-icon-user-5"></i>' . esc_html( $name ) . '</a></li>';

		        // comments link
		        if( $post -> comment_status == 'open' ) {
		            $nr = get_comments_number( $post -> ID );

		            echo '<li>';
		            echo '<a href="' . esc_url( get_comments_link( $post -> ID ) ) . '">';
		            echo '<i class="tempo-icon-comment"></i>';
		            echo sprintf( _nx( '%1$s Comment', '%1$s Comments', absint( $nr ), '...', 'cronus' ), number_format_i18n( absint( $nr ) ) );
		            echo '</a></li>';
		        }

		        // jetpack nr view details
		        if( function_exists( 'stats_get_csv' ) ) {
		            $args = array(
		                'days'      => -1,
		                'post_id'   => $post -> ID,
		            );

		            $result = stats_get_csv( 'postviews' , $args );
		            $views  = $result[ 0 ][ 'views' ];

		            echo '<li><i class="tempo-icon-eye-2"></i> ' . sprintf( _n( '%1$s view', '%1$s views', absint( $views ), 'cronus' ), number_format_i18n( absint( $views ) ) ) . '</li>';
		        }

		        echo '</ul>';
		        echo '</div>';

		        echo $after_widget;
		    }

		    /**
             *  Widget Update
             */

		    function update( $new_instance, $old_instance )
		    {
		        $instance               = $old_instance;
		        $instance[ 'title' ]    = sanitize_text_field( $new_instance[ 'title' ] );
		        return $instance;
		    }

		    /**
             *  Widget Form ( admin side )
             */

		    function form( $instance )
		    {
		        $instance = wp_parse_args( (array) $instance, array(
		            'title' => null
		        ));

		        echo '<p>';
		        echo '<label for="' . $this -> get_field_id( 'title' ) . '">' . esc_html__( 'Title', 'cronus' );
		        echo '<input type="text" class="widefat" id="' . $this -> get_field_id( 'title' ) . '" name="' . $this -> get_field_name( 'title' ) . '" value="' . esc_attr( sanitize_text_field( $instance[ 'title' ] ) ) . '" />';
		        echo '</label>';
		        echo '</p>';
		    }
		}
	}
?>
