 (function($){

    {   //- SITE IDENTITY APPEARANCE -//

        {   //- SITE TITLE -//

            wp.customize( 'header-image-site-title-color' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = newval;
                        var transp      = parseInt( wp.customize.instance( 'header-image-site-title-transp' ).get() ) / 100;
                        var transp_h    = parseInt( wp.customize.instance( 'header-image-site-title-h-transp' ).get() ) / 100;

                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';
                        var rgba_h      = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp_h + ' )';

                        jQuery( 'style#header-image-site-title-color').html(
                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title{' +
                            'color: ' + rgba + ';' +
                            '}' +

                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title:hover{' +
                            'color: ' + rgba_h + ';' +
                            '}'
                        );
                    }
                });
            });

            wp.customize( 'header-image-site-title-transp' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = wp.customize.instance( 'header-image-site-title-color' ).get();
                        var transp      = parseInt( newval ) / 100;
                        var transp_h    = parseInt( wp.customize.instance( 'header-image-site-title-h-transp' ).get() ) / 100;

                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';
                        var rgba_h      = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp_h + ' )';

                        jQuery( 'style#site-title-color').html(
                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title{' +
                            'color: ' + rgba + ';' +
                            '}' +

                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title:hover{' +
                            'color: ' + rgba_h + ';' +
                            '}'
                        );
                    }
                });
            });

            wp.customize( 'header-image-site-title-h-transp' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = wp.customize.instance( 'header-image-site-title-color' ).get();
                        var transp      = parseInt( wp.customize.instance( 'header-image-site-title-transp' ).get() ) / 100;
                        var transp_h    = parseInt( newval ) / 100;

                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';
                        var rgba_h      = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp_h + ' )';

                        jQuery( 'style#header-image-site-title-color').html(
                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title{' +
                            'color: ' + rgba + ';' +
                            '}' +

                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title:hover{' +
                            'color: ' + rgba_h + ';' +
                            '}'
                        );
                    }
                });
            });
        }

        {   //- TAGLINE -//

            wp.customize( 'header-image-tagline-color' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = newval;
                        var transp      = parseInt( wp.customize.instance( 'header-image-tagline-transp' ).get() ) / 100;
                        var transp_h    = parseInt( wp.customize.instance( 'header-image-tagline-h-transp' ).get() ) / 100;

                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';
                        var rgba_h      = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp_h + ' )';

                        jQuery( 'style#header-image-tagline-color').html(
                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description{' +
                            'color: ' + rgba + ';' +
                            '}' +

                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description:hover{' +
                            'color: ' + rgba_h + ';' +
                            '}'
                        );
                    }
                });
            });

            wp.customize( 'header-image-tagline-transp' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = wp.customize.instance( 'header-image-tagline-color' ).get();
                        var transp      = parseInt( newval ) / 100;
                        var transp_h    = parseInt( wp.customize.instance( 'header-image-tagline-h-transp' ).get() ) / 100;

                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';
                        var rgba_h      = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp_h + ' )';

                        jQuery( 'style#header-image-tagline-color').html(
                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description{' +
                            'color: ' + rgba + ';' +
                            '}' +

                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description:hover{' +
                            'color: ' + rgba_h + ';' +
                            '}'
                        );
                    }
                });
            });

            wp.customize( 'header-image-tagline-h-transp' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = wp.customize.instance( 'header-image-tagline-color' ).get();
                        var transp      = parseInt( wp.customize.instance( 'header-image-tagline-transp' ).get() ) / 100;
                        var transp_h    = parseInt( newval ) / 100;

                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';
                        var rgba_h      = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp_h + ' )';

                        jQuery( 'style#header-image-tagline-color').html(
                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description{' +
                            'color: ' + rgba + ';' +
                            '}' +

                            'body.tempo-has-header header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-description:hover{' +
                            'color: ' + rgba_h + ';' +
                            '}'
                        );
                    }
                });
            });
        }
    }

    {   //- BACKGROUND IMAGE -//

        wp.customize( 'background_image' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = newval;
                    var repeat      = wp.customize.instance( 'background_repeat' ).get();
                    var position    = wp.customize.instance( 'background_position_x' ).get();
                    var attchment   = wp.customize.instance( 'background_attachment' ).get();

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'background_repeat' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = wp.customize.instance( 'background_image' ).get();
                    var repeat      = newval;
                    var position    = wp.customize.instance( 'background_position_x' ).get();
                    var attchment   = wp.customize.instance( 'background_attachment' ).get();

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'background_position_x' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = wp.customize.instance( 'background_image' ).get();
                    var repeat      = wp.customize.instance( 'background_repeat' ).get();
                    var position    = newval;
                    var attchment   = wp.customize.instance( 'background_attachment' ).get();

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'background_attachment' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = wp.customize.instance( 'background_image' ).get();
                    var repeat      = wp.customize.instance( 'background_repeat' ).get();
                    var position    = wp.customize.instance( 'background_position_x' ).get();
                    var attchment   = newval;

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });
    }

    {   //- COLORS -//

        // background color

        wp.customize( 'background_color' , function( value ){
            value.bind(function( newval ){
                if( newval ){
                    jQuery( 'style#background-color').html(
                        'body div.tempo-website-wrapper{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                }
            });
        });

        // first color

        wp.customize( 'first-color' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    jQuery( 'style#first-color' ).html(
                        'a,' +
                        'aside div.widget.zeon_widget_infobox .widget-title i,' +
                        'aside.tempo-footer.light-sidebars div.widget.widget_pages ul li:before,' +
                        'aside.tempo-footer.light-sidebars div.widget.widget_nav_menu ul li:before{' +
                        'color: ' + newval + ';' +
                        '}' +

                        'input[type="submit"],' +
                        'input[type="button"],' +
                        'input[type="reset"],' +
                        'button,' +
                        '.button,' +
                        '.tempo-btn,' +
                        '.btn,' +
                        'button.btn-search,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]{' +
                        'background-color: ' + newval + ';' +
                        'border-color: ' + newval + ';' +
                        '}' +

                        'input[type="submit"].btn-hover-empty:hover,' +
                        'input[type="submit"].btn-hover-empty:focus,' +
                        'input[type="submit"].btn-hover-empty:active,' +

                        'input[type="button"].btn-hover-empty:hover,' +
                        'input[type="button"].btn-hover-empty:focus,' +
                        'input[type="button"].btn-hover-empty:active,' +

                        'input[type="reset"].btn-hover-empty:hover,' +
                        'input[type="reset"].btn-hover-empty:focus,' +
                        'input[type="reset"].btn-hover-empty:active,' +

                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:hover,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:focus,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:active,' +

                        'button.btn-hover-empty:hover,' +
                        'button.btn-hover-empty:focus,' +
                        'button.btn-hover-empty:active,' +

                        '.button.btn-hover-empty:hover,' +
                        '.tempo-btn.btn-hover-empty:hover,' +
                        '.btn.btn-hover-empty:hover{' +
                        'border-color: ' + newval + ';' +
                        'color: ' + newval + ';' +
                        '}' +

                        'article.tempo-article.classic div.tempo-categories:before{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );

                    jQuery( 'style#first-color-header-btn' ).html(
                        'header.tempo-header div.tempo-header-partial .tempo-header-buttons .tempo-btn.btn-1{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'first-h-color' , function( value ){
            value.bind(function( newval ){
                if( newval ){
                    jQuery( 'style#first-h-color' ).html(
                        'a:hover,' +
                        'aside.header-sidebar div.widget.zeon_widget_comments ul li h5 a:hover,' +
                        'aside.header-sidebar div.widget.zeon_widget_posts ul li h5 a:hover,' +
                        'aside.header-sidebar div.widget.zeon_widget_posts_list ul li h5 a:hover,' +

                        'aside.sidebar-content-wrapper div.widget.zeon_widget_comments ul li h5 a:hover,' +
                        'aside.sidebar-content-wrapper div.widget.zeon_widget_posts ul li h5 a:hover,' +
                        'aside.sidebar-content-wrapper div.widget.zeon_widget_posts_list ul li h5 a:hover,' +

                        'aside.tempo-footer.light-sidebars div.widget.zeon_widget_comments ul li h5 a:hover,' +
                        'aside.tempo-footer.light-sidebars div.widget.zeon_widget_posts ul li h5 a:hover,' +
                        'aside.tempo-footer.light-sidebars div.widget.zeon_widget_posts_list ul li h5 a:hover{' +
                        'color: ' + newval + ';' +
                        '}' +

                        'article.tempo-article.classic a.more-link:hover,' +
                        '.pagination-wrapper a:hover,' +
                        '.pagination-wrapper span,' +
                        'input[type="submit"]:hover,' +
                        'input[type="button"]:hover,' +
                        'input[type="reset"]:hover,' +
                        'button.btn-search:hover,' +
                        'button:hover,' +
                        '.button:hover,' +
                        '.tempo-btn:hover,' +
                        '.btn:hover,' +
                        'input[type="submit"]:focus,' +
                        'input[type="button"]:focus,' +
                        'input[type="reset"]:focus,' +
                        'button.btn-search:focus,' +
                        'button:focus,' +
                        '.button:focus,' +
                        '.tempo-btn:focus,' +
                        '.btn:focus,' +
                        'input[type="submit"].focus,' +
                        'input[type="button"].focus,' +
                        'input[type="reset"].focus,' +
                        'button.btn-search.focus,' +
                        'button.focus,' +
                        '.button.focus,' +
                        '.tempo-btn.focus,' +
                        '.btn.focus,' +
                        'input[type="submit"]:active,' +
                        'input[type="button"]:active,' +
                        'input[type="reset"]:active,' +
                        'button.btn-search:active,' +
                        'button:active,' +
                        '.button:active,' +
                        '.tempo-btn:active,' +
                        '.btn:active,' +
                        'input[type="submit"].active,' +
                        'input[type="button"].active,' +
                        'input[type="reset"].active,' +
                        'button.btn-search.active,' +
                        'button.active,' +
                        '.button.active,' +
                        '.tempo-btn.active,' +
                        '.btn.active{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );

                    jQuery( 'style#first-h-color-header-btn' ).html(
                        'header.tempo-header div.tempo-header-partial .tempo-header-buttons .tempo-btn.btn-1:hover{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                }
            });
        });

        // second color

        wp.customize( 'second-color' , function( value ){
            value.bind(function( newval ){
                if( newval ){
                    jQuery( 'style#second-color' ).html(
                        'aside.tempo-footer.dark-sidebars div.widget.widget_pages ul li:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_meta ul li:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_categories ul li:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_archive ul li:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_nav_menu ul li:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_infobox h5.widget-title i,' +

                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_comments ul li h5 a:hover,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_posts ul li h5 a:hover,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_posts_list ul li h5 a:hover{' +
                        'color: ' + newval + ';' +
                        '}' +

                        'aside.tempo-footer.dark-sidebars div.widget select:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget textarea:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="tel"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="url"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="text"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="email"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="phone"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="number"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="password"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget select:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget textarea:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="tel"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="url"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="text"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="email"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="phone"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="number"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="password"]:active{' +
                        'border-color:  ' + newval + ';' +
                        '}' +

                        'hr.tempo-meta-delimiter,' +
                        'button.btn-newsletter,' +
                        'aside.sidebar-content-wrapper div.widget h4.widget-title:before,' +


                        '.tempo-hentry .mejs-controls .mejs-time-rail .mejs-time-current,' +
                        'div#jp-relatedposts.jp-relatedposts h3.jp-relatedposts-headline:before,' +

                        // February 2, 2018
                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children>span,' +
                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children.collapse-children>span:hover{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );

                    var hex         = newval;
                    var transp      = parseInt( wp.customize.instance( 'header-image-menu-link-h-transp' ).get() ) / 100;

                    var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                    jQuery( 'style#second-color-menu' ).html(
                        'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-ancestor > a,' +
                        'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-item > a,' +
                        'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li:hover > a,' +
                        'body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse:hover{' +
                        'color: ' + rgba +';' +
                        '}'
                    );

                    jQuery( 'style#second-color-header-btn' ).html(
                        'header.tempo-header div.tempo-header-partial .tempo-header-buttons .tempo-btn.btn-2{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'second-h-color', function( value ){
            value.bind(function( newval ){
                if( newval ){
                    jQuery( 'style#second-h-color' ).html(
                        'aside.sidebar-content-wrapper div.widget:hover h4.widget-title:before,' +
                        'body div.nav-collapse.tempo-navigation-wrapper nav.tempo-navigation ul li.current-menu-item>a,' +
                        'div.tempo-comments-wrapper ol.tempo-comments-list li.comment header span.tempo-comment-meta cite span.tempo-author-tag,' +

                        'button.btn-newsletter:hover,' +
                        'button.btn-newsletter:focus,' +
                        'button.btn-newsletter:active,' +

                        'header.tempo-header div.tempo-header-partial.tempo-audio:hover hr,' +
                        'header.tempo-header div.tempo-header-partial.tempo-portfolio h1.tempo-headline:hover:before,' +
                        '.tempo-shortcode.posts.grid .pagination-wrapper a:hover,' +
                        '.tempo-shortcode.posts.portfolio .pagination-wrapper a:hover,' +

                        // February 2, 2018
                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children>span:hover,' +
                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children.collapse-children>span{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );

                    jQuery( 'style#second-h-color-header-btn' ).html(
                        'header.tempo-header div.tempo-header-partial .tempo-header-buttons .tempo-btn.btn-2:hover{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                }
            });
        });
    }

    {   //- MENU -//

        {   //- LINK MENU COLOR -//

            wp.customize( 'header-image-menu-link-color' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = newval;
                        var transp      = parseInt( wp.customize.instance( 'header-image-menu-link-transp' ).get() ) / 100;
                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                        jQuery( 'style#header-image-menu-link-color').html(
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li > a,' +
                            'body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse{' +
                            'color: ' + rgba + ';' +
                            '}'
                        );
                    }
                });
            });

            wp.customize( 'header-image-menu-link-transp' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = wp.customize.instance( 'header-image-menu-link-color' ).get();
                        var transp      = parseInt( newval ) / 100;
                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                        jQuery( 'style#header-image-menu-link-color').html(
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li > a,' +
                            'body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse{' +
                            'color: ' + rgba + ';' +
                            '}'
                        );
                    }
                });
            });
        }

        {   //- LINK MENU COLOR (OVER) -//

            wp.customize( 'header-image-menu-link-h-color' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = newval;
                        var transp      = parseInt( wp.customize.instance( 'header-image-menu-link-h-transp' ).get() ) / 100;
                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                        jQuery( 'style#header-image-menu-link-h-color').html(
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-ancestor > a,' +
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-item > a,' +
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li:hover > a,' +
                            'body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse:hover{' +
                            'color: ' + rgba + ';' +
                            '}'
                        );
                    }
                });
            });

            wp.customize( 'header-image-menu-link-h-transp' , function( value ){
                value.bind(function( newval ){
                    if( newval ){

                        var hex         = wp.customize.instance( 'header-image-menu-link-h-color' ).get();
                        var transp      = parseInt( newval ) / 100;
                        var rgba        = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                        jQuery( 'style#header-image-menu-link-h-color').html(
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-ancestor > a,' +
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li.current-menu-item > a,' +
                            'body.tempo-has-header header.tempo-header nav ul.tempo-menu-list > li:hover > a,' +
                            'body.tempo-has-header header.tempo-header nav button.tempo-btn-collapse:hover{' +
                            'color: ' + rgba + ';' +
                            '}'
                        );
                    }
                });
            });

            wp.customize( 'menu-phone-text' , function( value ){
                value.bind(function( newval ){
                    if( newval ){
                        var tel = jQuery( 'div.tempo-navigation-wrapper div.tempo-phone a span' );

                        if( jQuery( tel ).length )
                            jQuery( tel ).html( '<i class="tempo-icon-mobile-4"></i> ' + newval );
                    }
                });
            });
        }
    }

    {   // HEADER IMAGE

        //header_image
        wp.customize( 'header_image' , function( value ){
            value.bind(function( newval ){
                if( newval ){
                    setTimeout(function(){
                        tempo_images.loaded( '.wp-custom-header', function(){
                            jQuery('.wp-custom-header').parallax();
                        });
                    }, 1000 );
                }
            });
        });
    }
})(jQuery);
