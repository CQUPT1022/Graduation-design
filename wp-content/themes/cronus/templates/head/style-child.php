<style type="text/css" id="background-color">
    <?php $color = esc_attr( '#' . get_theme_mod( 'background_color', 'ffffff' ) ); ?>

    body div.tempo-website-wrapper{
        background-color: <?php echo esc_attr( $color ); ?>;
    }
</style>

<style type="text/css" id="background-image">
    body div.tempo-website-wrapper{

        <?php $image = esc_url( get_theme_mod( 'background_image' ) ); ?>

        <?php if( !empty( $image ) ) : ?>

            background-image: url(<?php echo esc_url( $image ); ?>);
            background-repeat: <?php echo esc_attr( get_theme_mod( 'background_repeat' , 'repeat' ) ); ?>;
            background-position: <?php echo esc_attr( get_theme_mod( 'background_position_x' , 'center' ) ); ?>;
            background-attachment: <?php echo esc_attr( get_theme_mod( 'background_attachment' , 'scroll' ) ); ?>;

        <?php endif; ?>
    }
</style>

<style type="text/css" id="first-color">

    <?php
        if( tempo_options::is_set( 'first-color' ) ) :

            $color = tempo_options::get( 'first-color' );
    ?>
            a,
            aside div.widget.zeon_widget_infobox .widget-title i,
            aside.tempo-footer.light-sidebars div.widget.widget_pages ul li:before,
            aside.tempo-footer.light-sidebars div.widget.widget_nav_menu ul li:before{
                color: <?php echo esc_attr( $color ); ?>;
            }

            input[type="submit"],
            input[type="button"],
            input[type="reset"],
            button,
            .button,
            .tempo-btn,
            .btn,
            button.btn-search,
            div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]{
                background-color: <?php echo esc_attr( $color ); ?>;
                border-color: <?php echo esc_attr( $color ); ?>;
            }

            input[type="submit"].btn-hover-empty:hover,
            input[type="submit"].btn-hover-empty:focus,
            input[type="submit"].btn-hover-empty:active,

            input[type="button"].btn-hover-empty:hover,
            input[type="button"].btn-hover-empty:focus,
            input[type="button"].btn-hover-empty:active,

            input[type="reset"].btn-hover-empty:hover,
            input[type="reset"].btn-hover-empty:focus,
            input[type="reset"].btn-hover-empty:active,

            div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:hover,
            div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:focus,
            div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:active,

            button.btn-hover-empty:hover,
            button.btn-hover-empty:focus,
            button.btn-hover-empty:active,

            .button.btn-hover-empty:hover,
            .tempo-btn.btn-hover-empty:hover,
            .btn.btn-hover-empty:hover{
                border-color: <?php echo esc_attr( $color ); ?>;
                color: <?php echo esc_attr( $color ); ?>;
            }

            article.tempo-article.classic div.tempo-categories:before{
                background-color: <?php echo esc_attr( $color ); ?>;
            }

    <?php endif; ?>
</style>

<style type="text/css" id="first-h-color">
    <?php
        if( tempo_options::is_set( 'first-h-color' ) ) :

            $color = tempo_options::get( 'first-h-color' );
    ?>
            a:hover,
            aside.header-sidebar div.widget.zeon_widget_comments ul li h5 a:hover,
            aside.header-sidebar div.widget.zeon_widget_posts ul li h5 a:hover,
            aside.header-sidebar div.widget.zeon_widget_posts_list ul li h5 a:hover,

            aside.sidebar-content-wrapper div.widget.zeon_widget_comments ul li h5 a:hover,
            aside.sidebar-content-wrapper div.widget.zeon_widget_posts ul li h5 a:hover,
            aside.sidebar-content-wrapper div.widget.zeon_widget_posts_list ul li h5 a:hover,

            aside.tempo-footer.light-sidebars div.widget.zeon_widget_comments ul li h5 a:hover,
            aside.tempo-footer.light-sidebars div.widget.zeon_widget_posts ul li h5 a:hover,
            aside.tempo-footer.light-sidebars div.widget.zeon_widget_posts_list ul li h5 a:hover{
                color: <?php echo esc_attr( $color ); ?>;
            }

            article.tempo-article.classic a.more-link:hover,
            .pagination-wrapper a:hover,
            .pagination-wrapper span,
            input[type="submit"]:hover,
            input[type="button"]:hover,
            input[type="reset"]:hover,
            button.btn-search:hover,
            button:hover,
            .button:hover,
            .tempo-btn:hover,
            .btn:hover,
            input[type="submit"]:focus,
            input[type="button"]:focus,
            input[type="reset"]:focus,
            button.btn-search:focus,
            button:focus,
            .button:focus,
            .tempo-btn:focus,
            .btn:focus,
            input[type="submit"].focus,
            input[type="button"].focus,
            input[type="reset"].focus,
            button.btn-search.focus,
            button.focus,
            .button.focus,
            .tempo-btn.focus,
            .btn.focus,
            input[type="submit"]:active,
            input[type="button"]:active,
            input[type="reset"]:active,
            button.btn-search:active,
            button:active,
            .button:active,
            .tempo-btn:active,
            .btn:active,
            input[type="submit"].active,
            input[type="button"].active,
            input[type="reset"].active,
            button.btn-search.active,
            button.active,
            .button.active,
            .tempo-btn.active,
            .btn.active,
            .tempo-shortcode.posts.grid .pagination-wrapper span,
            .tempo-shortcode.posts.portfolio .pagination-wrapper span,
            .tempo-shortcode.posts.grid .pagination-wrapper a:hover,
            .tempo-shortcode.posts.portfolio .pagination-wrapper a:hover{
                background-color: <?php echo esc_attr( $color ); ?>;
            }

    <?php endif; ?>

</style>

<style type="text/css" id="second-color">
    <?php
        if( tempo_options::is_set( 'second-color' ) ) :

            $color = tempo_options::get( 'second-color' );
    ?>
            aside.tempo-footer.dark-sidebars div.widget.widget_pages ul li:before,
            aside.tempo-footer.dark-sidebars div.widget.widget_meta ul li:before,
            aside.tempo-footer.dark-sidebars div.widget.widget_categories ul li:before,
            aside.tempo-footer.dark-sidebars div.widget.widget_archive ul li:before,
            aside.tempo-footer.dark-sidebars div.widget.widget_nav_menu ul li:before,
            aside.tempo-footer.dark-sidebars div.widget.zeon_widget_infobox h5.widget-title i,

            aside.tempo-footer.dark-sidebars div.widget.zeon_widget_comments ul li h5 a:hover,
            aside.tempo-footer.dark-sidebars div.widget.zeon_widget_posts ul li h5 a:hover,
            aside.tempo-footer.dark-sidebars div.widget.zeon_widget_posts_list ul li h5 a:hover{
                color: <?php echo esc_attr( $color ); ?>;
            }

            aside.tempo-footer.dark-sidebars div.widget select:focus,
            aside.tempo-footer.dark-sidebars div.widget textarea:focus,
            aside.tempo-footer.dark-sidebars div.widget input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):focus,
            aside.tempo-footer.dark-sidebars div.widget input[type="tel"]:focus,
            aside.tempo-footer.dark-sidebars div.widget input[type="url"]:focus,
            aside.tempo-footer.dark-sidebars div.widget input[type="text"]:focus,
            aside.tempo-footer.dark-sidebars div.widget input[type="email"]:focus,
            aside.tempo-footer.dark-sidebars div.widget input[type="phone"]:focus,
            aside.tempo-footer.dark-sidebars div.widget input[type="number"]:focus,
            aside.tempo-footer.dark-sidebars div.widget input[type="password"]:focus,
            aside.tempo-footer.dark-sidebars div.widget select:active,
            aside.tempo-footer.dark-sidebars div.widget textarea:active,
            aside.tempo-footer.dark-sidebars div.widget input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):active,
            aside.tempo-footer.dark-sidebars div.widget input[type="tel"]:active,
            aside.tempo-footer.dark-sidebars div.widget input[type="url"]:active,
            aside.tempo-footer.dark-sidebars div.widget input[type="text"]:active,
            aside.tempo-footer.dark-sidebars div.widget input[type="email"]:active,
            aside.tempo-footer.dark-sidebars div.widget input[type="phone"]:active,
            aside.tempo-footer.dark-sidebars div.widget input[type="number"]:active,
            aside.tempo-footer.dark-sidebars div.widget input[type="password"]:active{
                border-color:  <?php echo esc_attr( $color ); ?>;
            }

            hr.tempo-meta-delimiter,
            button.btn-newsletter,
            body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children>span,
            body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children.collapse-children>span:hover,
            aside.sidebar-content-wrapper div.widget h4.widget-title:before,


            .tempo-hentry .mejs-controls .mejs-time-rail .mejs-time-current,
            div#jp-relatedposts.jp-relatedposts h3.jp-relatedposts-headline:before{
                background-color: <?php echo esc_attr( $color ); ?>;
            }

    <?php endif; ?>
</style>

<style type="text/css" id="second-h-color">
    <?php
        if( tempo_options::is_set( 'second-h-color' ) ) :

            $color = tempo_options::get( 'second-h-color' );
    ?>
            aside.sidebar-content-wrapper div.widget:hover h4.widget-title:before,
            body div.nav-collapse.tempo-navigation-wrapper nav.tempo-navigation ul li.current-menu-item > a,
            div.tempo-comments-wrapper ol.tempo-comments-list li.comment header span.tempo-comment-meta cite span.tempo-author-tag,

            button.btn-newsletter:hover,
            button.btn-newsletter:focus,
            button.btn-newsletter:active,

            header.tempo-header div.tempo-header-partial.tempo-audio:hover hr,
            header.tempo-header div.tempo-header-partial.tempo-portfolio h1.tempo-headline:hover:before,


            body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children>span:hover,
            body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children.collapse-children>span{
                background-color: <?php echo esc_attr( $color ); ?>;
            }

    <?php endif; ?>
</style>

<style type="text/css" id="first-color-header-btn">
    <?php if( tempo_options::is_set( 'first-color' ) ) : ?>
        header.tempo-header div.tempo-header-partial div.tempo-header-btns-wrapper a.tempo-btn.btn-1{
            background-color: <?php echo esc_attr( tempo_options::get( 'first-color' ) ); ?>;
        }
    <?php endif; ?>
</style>

<style type="text/css" id="first-h-color-header-btn">
    <?php if( tempo_options::is_set( 'first-h-color' ) ) : ?>
        header.tempo-header div.tempo-header-partial div.tempo-header-btns-wrapper a.tempo-btn.btn-1:hover{
            background-color: <?php echo esc_attr( tempo_options::get( 'first-h-color' ) ); ?>;
        }
    <?php endif; ?>
</style>

<style type="text/css" id="second-color-header-btn">
    <?php if( tempo_options::is_set( 'second-color' ) ) : ?>
        header.tempo-header div.tempo-header-partial div.tempo-header-btns-wrapper a.tempo-btn.btn-2{
            background-color: <?php echo esc_attr( tempo_options::get( 'second-color' ) ); ?>;
        }
    <?php endif; ?>
</style>

<style type="text/css" id="second-h-color-header-btn">
    <?php if( tempo_options::is_set( 'second-h-color' ) ) : ?>
        header.tempo-header div.tempo-header-partial div.tempo-header-btns-wrapper a.tempo-btn.btn-2:hover{
            background-color: <?php echo esc_attr( tempo_options::get( 'second-h-color' ) ); ?>;
        }
    <?php endif; ?>
</style>

<?php if( tempo_has_header() ) : ?>

    <style type="text/css" id="second-color-menu">
        <?php
            if( tempo_options::is_set( 'second-color' ) ||
                tempo_options::is_set( 'header-image-menu-link-h-transp' ) ) :

                $hex        = tempo_options::get( 'second-color' );
                $transp     = tempo_options::get( 'header-image-menu-link-h-transp' );
                $rgba       = 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';

        ?>

            body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-ancestor > a,
            body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-item > a,
            body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li:hover > a,
            body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse:hover{
                color: <?php echo esc_attr( $rgba ); ?>;
            }

        <?php endif; ?>
    </style>

    <style type="text/css" id="header-image-site-title-color">
        <?php
            if( tempo_options::is_set( 'header-image-site-title-color' ) ||
                tempo_options::is_set( 'header-image-site-title-transp' ) ||
                tempo_options::is_set( 'header-image-site-title-h-color' ) ) :

                $hex        = tempo_options::get( 'header-image-site-title-color' );
                $transp     = tempo_options::get( 'header-image-site-title-transp' );
                $transp_h   = tempo_options::get( 'header-image-site-title-h-transp' );

                $rgba       = 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';
                $rgba_h     = 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp_h / 100 ), 2 ) . ' )';
        ?>
                body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title{
                    color: <?php echo esc_attr( $rgba ); ?>;
                }
                body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title:hover{
                    color: <?php echo esc_attr( $rgba_h ); ?>;
                }

        <?php endif; ?>
    </style>

    <style type="text/css" id="header-image-tagline-color">
        <?php
            if( tempo_options::is_set( 'header-image-tagline-color' ) ||
                tempo_options::is_set( 'header-image-tagline-transp' ) ||
                tempo_options::is_set( 'header-image-tagline-h-color' ) ) :

                $hex        = tempo_options::get( 'header-image-tagline-color' );
                $transp     = tempo_options::get( 'header-image-tagline-transp' );
                $transp_h   = tempo_options::get( 'header-image-tagline-h-transp' );

                $rgba       = 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';
                $rgba_h     = 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp_h / 100 ), 2 ) . ' )';
        ?>

                body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description{
                    color: <?php echo esc_attr( $rgba ); ?>;
                }
                body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description:hover{
                    color: <?php echo esc_attr( $rgba_h ); ?>;
                }

        <?php endif; ?>
    </style>

	<style type="text/css" id="header-image-menu-link-color">
	    <?php
	        if( tempo_options::is_set( 'header-image-menu-link-color' ) ||
	            tempo_options::is_set( 'header-image-menu-link-transp' ) ) :

	            $hex        = tempo_options::get( 'header-image-menu-link-color' );
	            $transp     = tempo_options::get( 'header-image-menu-link-transp' );
	            $rgba       = 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';
	    ?>
	            body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li > a,
	            body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse{
	                color: <?php echo esc_attr( $rgba ); ?>;
	            }

	    <?php endif; ?>
	</style>

	<style type="text/css" id="header-image-menu-link-h-color">
	    <?php
	        if( tempo_options::is_set( 'header-image-menu-link-h-color' ) ||
	            tempo_options::is_set( 'header-image-menu-link-h-transp' ) ) :

	            $hex        = tempo_options::get( 'header-image-menu-link-h-color' );
	            $transp     = tempo_options::get( 'header-image-menu-link-h-transp' );
	            $rgba       = 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';
	    ?>

	            body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-ancestor > a,
	            body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-item > a,
	            body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li:hover > a,
	            body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse:hover{
	                color: <?php echo esc_attr( $rgba ); ?>;
	            }

	    <?php endif; ?>
	</style>

<?php endif; ?>


<!-- HEADER SPACE AREA -->
<?php
	if( tempo_options::is_set( 'header-height' ) ) :

		$height = tempo_options::get( 'header-height' );
        //header-top-space
        //header-bottom-space
?>
		<style type="text/css" id="header-height">
			body.tempo-has-header header.tempo-header div.tempo-header-partial{
			}
			header.tempo-header div.tempo-header-partial{
			}

			@media (max-width: 1024px ){
	            body.tempo-has-header header.tempo-header div.tempo-header-partial{
	            }
				header.tempo-header div.tempo-header-partial{
	            }
	        }

            @media (max-width: 991px ){
                /* 106 */
                body.tempo-has-header header.tempo-header div.tempo-header-partial{
                }
                header.tempo-header div.tempo-header-partial{
                }
            }

	        @media (max-width: 767px ){
                /* 106 */
	            body.tempo-has-header header.tempo-header div.tempo-header-partial{
	            }
				header.tempo-header div.tempo-header-partial{
	            }
	        }

	        @media (max-width: 520px ){
                /* 106 */
	            body.tempo-has-header header.tempo-header div.tempo-header-partial{
	            }
				header.tempo-header div.tempo-header-partial{
	            }
	        }

			@media (max-width: 480px ){
                /* 106 */
				body.tempo-has-header header.tempo-header div.tempo-header-partial{
				}
				header.tempo-header div.tempo-header-partial{
				}
			}
		</style>

<?php endif; ?>


<!-- SOCIAL ITEMS WIDTH -->
<?php
	$items = array(
        'evernote', 'vimeo', 'twitter', 'skype', 'renren', 'github', 'rdio', 'linkedin', 'behance', 'dropbox',
        'flickr', 'instagram', 'vkontakte', 'facebook', 'tumblr', 'picasa', 'dribbble', 'stumbleupon', 'lastfm',
        'gplus', 'google-circles', 'youtube-play', 'youtube', 'pinterest', 'smashing', 'soundcloud', 'flattr',
        'odnoklassniki', 'mixi', 'rss'
    );

    $nr_social_items = 0;

    foreach( $items as $item ){
        $url = tempo_options::get( $item );

        if( !empty( $url ) )
        	$nr_social_items++;
    }

    if( $nr_social_items ){
?>

	<style type="text/css" id="cronus-footer-social-items">
		footer.tempo-footer div.cronus-social div.cronus-social-item{
			width: <?php echo number_format( floatval( 100/$nr_social_items), 8 ); ?>%;
		}
	</style>

<?php
	}
?>
