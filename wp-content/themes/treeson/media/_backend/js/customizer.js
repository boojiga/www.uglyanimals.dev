function mythemes_hex2rgb( hex )
{
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec( hex );
    var colors = result ? {
        r: parseInt( result[1], 16 ),
        g: parseInt( result[2], 16 ),
        b: parseInt( result[3], 16 )
    } : null;

    var rett = '';

    if( colors.hasOwnProperty( 'r' ) ){
    	rett += colors.r + ' , ';
    }
    else{
    	rett += '255 , ';
    }

    if( colors.hasOwnProperty( 'g' ) ){
    	rett += colors.g + ' , ';
    }
    else{
    	rett += '255 , ';
    }

    if( colors.hasOwnProperty( 'b' ) ){
    	rett += colors.b;
    }
    else{
    	rett += '255';	
    }

    return rett;
}

function mythemes_brightness( hex, steps )
{
    var steps 	= Math.max( -255, Math.min( 255, steps ) );
    var hex 	= hex.toString().replace( /#/g, "" );

    if ( hex.length == 3 ) {
        hex = 
        hex.substring( 0, 1 ) + hex.substring( 0, 1 ) +
        hex.substring( 1, 2 ) + hex.substring( 1, 2 ) +
        hex.substring( 2, 3 ) + hex.substring( 2, 3 );
    }

    var r = parseInt( hex.substring( 0, 2 ).toString() , 16 );
    var g = parseInt( hex.substring( 2, 4 ).toString() , 16 );
    var b = parseInt( hex.substring( 4, 6 ).toString() , 16 );

    r = Math.max( 0, Math.min( 255, r + steps ) ).toString(16).toUpperCase();
    g = Math.max( 0, Math.min( 255, g + steps ) ).toString(16).toUpperCase();  
    b = Math.max( 0, Math.min( 255, b + steps ) ).toString(16).toUpperCase();

	var r_hex = Array( 3 - r.length ).join( '0' ) + r;
	var g_hex = Array( 3 - g.length ).join( '0' ) + g;
	var b_hex = Array( 3 - b.length ).join( '0' ) + b;

    return '#' + r_hex + g_hex + b_hex;
}

(function($){

    /* COLORS */
    wp.customize( 'background_color' , function( value ){
        value.bind(function( newval ){

        	var bg_color 		= newval;
        	var bg_color_rgba 	= 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.91 )';
        	jQuery( 'style#mythemes-custom-style-background' ).html(

        		/* BACKGROUND COLOR */
    			'body > div.content,' +
    			'body footer aside{' +
        		'background-color: ' + bg_color + ';' +
    			'}' +

    			/* MENU NAVIGATION */
    			/* BACKGROUND COLOR */
    			'body.scroll-nav .mythemes-poor{' +
        		'background-color: ' + bg_color_rgba + ';' +
    			'}' +

    			'.mythemes-poor{' +
        		'background-color: ' + bg_color + ';' +
    			'}'
        	);
        });
    });

    wp.customize( 'mythemes-first-color' , function( value ){
        value.bind(function( newval ){

        	var color_1 		= newval;

        	var nav_1			= mythemes_brightness( color_1 ,  60 );
        	var nav_2			= mythemes_brightness( color_1 , -60 );

        	var link_1			= mythemes_brightness( color_1 ,  30 );

        	var btn_border_1	= mythemes_brightness( color_1 , -40 );

        	var footer_p		= mythemes_brightness( color_1 ,  95 );
        	var footer_a 		= mythemes_brightness( color_1 , 150 );
        	var footer_ah		= mythemes_brightness( color_1 , 190 );

        	jQuery( 'style#mythemes-custom-style-color-1' ).html(
        		'nav.base-nav ul li a,' +
    			'div.widget-grofile.grofile a.grofile-full-link{' +
        		'color:' + nav_1 + ';' +
    			'}' +

    			'nav.base-nav ul li:hover > a,' +
    			'nav.base-nav ul li > a:hover,' +
    			'div.widget-grofile.grofile a.grofile-full-link:hover{' +
        		'color:' + nav_2 + ';' +
    			'}' +

    			/* COMMENTS */
    			'div.comments-list > ol li.pingback header cite a:hover,' +
			    'div.comments-list > ol li.comment header cite a:hover{' +
			    'color: ' + link_1 + ';' +
			    '}' +

			    /* BUTTONS */
			    /* CLASSES */
			    '.btn,' +
			    '.button,' +
			    '.mythemes-button,' +

			    /* FORMS */
			    'button,' +
			    'input[type="submit"],' +
			    'input[type="button"],' +


			    /* POST / PAGE CONTENT */
			    '.hentry button,' +
			    '.hentry input[type="button"],' +
			    '.hentry input[type="submit"],' +
			    
			    /* WIDGETS */
			    'div.widget_calendar table th,' +
			    'div.widget_post_meta ul li span.post-tag,' +

			    /* POST META */
			    'article div.post-meta-tags a:hover,' +
			    'article div.post-meta-categories a,' +

			    /* COMMENTS */
                'div.comments-list > ol li.comment header span.comment-meta span.comment-replay a:hover' +
			    'div#comments  p.form-submit input[type="submit"],' +

			    /* PAGINATION */
			    'div.pagination nav span{' +
			    'background-color: ' + color_1 + ';' +
			    '}' +


			    /* BUTTONS */
    			/* BORDER BOTTOM */
    			/* CLASSES */
			    '.btn,' +
			    '.button,' +
			    '.mythemes-button,' +

			    /* FORMS */
			    'button,' +
			    'input[type="submit"],' +
			    'input[type="button"],' +

    			/* POST CONTENT */
    			'.hentry button,' +
    			'.hentry input[type="button"],' +
			    '.hentry input[type="submit"],' +

			    /* POST META */
			    'div.widget_post_meta ul li span.post-tag,' +


			    /* POST META */
			    'article div.post-meta-tags a:hover,' +
			    'article div.post-meta-categories a,' +

			    /* COMMENTS */
			    'div#comments  p.form-submit input[type="submit"],' +

			    /* PAGINATION */
			    'div.pagination nav span{' +
			    'border-bottom: 1px solid ' + btn_border_1 + ';' +
			    '}' +

			    /* BLOG */
			    'div.pagination nav a,' +
			    'article div.meta,' +
			    'article div.meta a,' +
			    'article a.more-link:hover,' +
			    'article div.meta ul.post-categories li a{' +
			    'color: ' + color_1 + ';' +
			    '}' +

			    'article div.meta ul.post-categories li a:hover{' +
			    'background-color: ' + color_1 + ';' +
			    '}' +

			    'article a.more-link:hover{' +
			    'border: 3px solid ' + color_1 + ';' +
			    '}' +

			    /* STIKY */
			    'article.sticky a.more-link{' +
			    'background: ' + color_1 + ';' +
			    'border: 3px solid ' + color_1 + ';' +
			    '}' +

			    'article.sticky a.more-link:hover{' +
			    'color: ' + color_1 + ';' +
			    '}' +

			    /* FOOTER */
			    'footer .mythemes-black-side{' +
			    'background: ' + color_1 + ';' +
			    '}' +

			    'footer .mythemes-black-side .mythemes-copyright p,' +
			    'footer .mythemes-black-side .mythemes-menu a{' +
			    'color: ' + footer_p + ';' +
			    '}' +

			    'footer .mythemes-black-side .mythemes-copyright a,' +
			    'footer .mythemes-black-side .mythemes-menu a:hover{' +
			    'color: ' + footer_a + ';' +
			    '}' +

			    'footer .mythemes-black-side .mythemes-copyright a:hover{' +
			    'color: ' + footer_ah + ';' +
			    '}'
        	);
        });
    });

	wp.customize( 'mythemes-second-color' , function( value ){
        value.bind(function( newval ){

        	var color_2			= newval;
        	var link_2 			= mythemes_brightness( color_2 ,  30 );
        	var btn_border_2	= mythemes_brightness( color_2 , -40 );


        	jQuery( 'style#mythemes-custom-style-color-2' ).html( 

        		/* COLOR 2 */
        		'nav.base-nav ul li.current-menu-item > a{' +
			    'color: ' + link_2 + ';' +
			    '}' +

			    /* HOVER COLOR */
			    'a:hover,' + 

			    /* META */
			    'article div.meta a:hover{' +
			    'color: ' + link_2 + ';' +
			    '}' +

			    /* SECOND BUTTONS */
			    /* CLASSES */
			    '.btn.second-button,' +
			    '.button.second-button,' +
			    '.mythemes-button.second-button,' +

			    /* MENU */
			    '.mythemes-nav-btn button.btn-base-nav,' +

			    /* WIDGETS */
			    'div.widget_post_tags div.tagcloud a,' +
			    'div.widget_tag_cloud div.tagcloud a,' +
			    'div.widget_newsletter form button[type="submit"],' +

			    /* COMMENTS */
			    'div.comment-respond h3.comment-reply-title small a,' +
                'div.comments-list > ol li.comment header span.comment-meta span.comment-replay a,' +
			    
			    /* POST META */
			    'article div.post-meta-categories a:hover,' +
			    'article div.post-meta-tags a{' +
			    'background-color: ' + color_2 + ';' +
			    '}' +

			    /* SECOND BUTTONS */
			    /* BORDER BOTTOM */
			    /* CLASSES */
			    '.btn.second-button,' +
			    '.button.second-button,' +
			    '.mythemes-button.second-button,' +

			    /* MENU */
			    '.mythemes-nav-btn button.btn-base-nav,' +

			    /* WIDGETS */
			    'div.widget_post_tags div.tagcloud a,' +
			    'div.widget_tag_cloud div.tagcloud a,' +
			    'div.widget_newsletter form button[type="submit"],' +

			    /* POST META */
			    'article div.post-meta-tags a,' +
			    'article div.post-meta-categories a:hover,' +

			    /* COMMENTS */
			    'div.comment-respond h3.comment-reply-title small a{' +
			    'border-bottom: 1px solid ' + btn_border_2 + ';' +
			    '}'
        	);
        });
    });

	wp.customize( 'mythemes-third-color' , function( value ){
        value.bind(function( newval ){

        	var color_3			= newval;
        	var link_3         	= mythemes_brightness( color_3 , 30 );

        	jQuery( 'style#mythemes-custom-style-color-3' ).html(
        		/* COLOR 3 */
    			/* LINK */
    			'a,' +

    			/* WIDGETS */
    			'div.widget ul li a:hover,' +
    			'div.widget_calendar table td a:hover,' +
    			'div.widget_categories ul li a:hover,' +
    			'div.widget_recent_comments_with_avatar ul li h5 a:hover{' +
        		'color: ' + link_3 + ';' +
    			'}' +

    			/* POST TITLE HEADLINE */
    			'.hentry h2 a:hover,' +
    			'article h2 a:hover{' +
        		'color: ' + color_3 + ';' +
    			'}'
        	);
        });
    });

    /* HEADER */
    wp.customize( 'mythemes-header-image' , function( value ){
        value.bind(function( newval ){
            if( jQuery( 'div.mythemes-header.parallax-container div.parallax img' ).length ){
                jQuery( 'div.mythemes-header.parallax-container div.parallax img' ).attr( 'src' , newval );
            }
            else{
                jQuery( 'div.mythemes-header.parallax-container div.parallax' ).html( '<img src="' + newval + '"/>' );   
            }
        });
    });

    wp.customize( 'mythemes-header-background-color' , function( value ){
        value.bind(function( newval ){
            jQuery( 'body' ).css( 'background-color' , newval );
            jQuery( 'body' ).css( 'backgroundColor' , newval );
        });
    });

    wp.customize( 'mythemes-header-mask-color' , function( value ){
        value.bind(function( newval ){
            var opacity = parseFloat( wp.customize.instance( 'mythemes-header-mask-opacity' ).get() / 100 ).toString();
            jQuery( 'div.mythemes-header div.valign-cell-wrapper' ).css( 'background-color' , 'rgba(' + mythemes_hex2rgb( newval ) + ' , ' + opacity + ')' );
        });
    });

    wp.customize( 'mythemes-header-mask-opacity' , function( value ){
        value.bind(function( newval ){
            var opacity = parseFloat( newval / 100 ).toString();
            var color   = wp.customize.instance( 'mythemes-header-mask-color' ).get().toString();
            jQuery( 'div.mythemes-header div.valign-cell-wrapper' ).css( 'background-color' , 'rgba(' + mythemes_hex2rgb( color ) + ' , ' + opacity + ')' );
        });
    });

    /* CONTENT */
    wp.customize( 'mythemes-header-title-color' , function( value ){
        value.bind(function( newval ){
        	jQuery( '.mythemes-header a.header-title' ).css( 'color' , newval );
        });
    });

    wp.customize( 'mythemes-header-description-color' , function( value ){
        value.bind(function( newval ){

        	var desc_color 		= 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.5 )';
        	var desc_color_h 	= 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.7 )';

        	jQuery( 'style#mythemes-custom-style-header' ).html( 
        		'.mythemes-header a.header-description{' +
        		'color: ' + desc_color + ';' +
    			'}'+

    			'.mythemes-header a.header-description:hover{' +
        		'color: ' + desc_color_h + ';' +
    			'}'
    		);
        });
    });


    /* FIRST BUTTON */
    wp.customize( 'mythemes-first-btn-color' , function( value ){
        value.bind(function( newval ){

            var hd_btn1_color       = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.4 )';
            var hd_btn1_border      = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.2 )';
            var hd_btn1_bkg         = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.03 )';

            var hd_btn1_color_      = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.9 )';
            var hd_btn1_border_     = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.7 )';

            jQuery( 'style#mythemes-custom-style-color-btn-1' ).html( 
                /* FIRST BUTTON */
                '.header-button-wrapper a.btn.first-btn.header-button{' +
                'color: ' + hd_btn1_color + ';' +
                'border: 1px solid ' + hd_btn1_border + ';' +
                'background: ' + hd_btn1_bkg + ';' +
                '}' +

                '.header-button-wrapper a.btn.first-btn.header-button:hover{' +
                'color: ' + hd_btn1_color_ + ';' +
                'border: 1px solid ' + hd_btn1_border_ + ';' +
                '}'
            );
        });
    });
    wp.customize( 'mythemes-first-btn-url' , function( value ){
        value.bind(function( newval ){
            jQuery( '.header-button-wrapper a.first-btn' ).attr( 'href' , newval );
        });
    });
    wp.customize( 'mythemes-first-btn-label' , function( value ){
        value.bind(function( newval ){
            jQuery( '.header-button-wrapper a.first-btn' ).html( newval );
        });
    });
    wp.customize( 'mythemes-first-btn-description' , function( value ){
        value.bind(function( newval ){
            jQuery( '.header-button-wrapper a.first-btn' ).attr( 'title' , newval );
        });
    });

    /* SECOND BUTTON */
    wp.customize( 'mythemes-second-btn-color' , function( value ){
        value.bind(function( newval ){

            var hd_btn2_color       = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.4 )';
            var hd_btn2_border      = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.2 )';
            var hd_btn2_bkg         = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.03 )';

            var hd_btn2_color_      = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.9 )';
            var hd_btn2_border_     = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.7 )';

            jQuery( 'style#mythemes-custom-style-color-btn-2' ).html( 
                /* FIRST BUTTON */
                '.header-button-wrapper a.btn.second-btn.header-button{' +
                'color: ' + hd_btn2_color + ';' +
                'border: 1px solid ' + hd_btn2_border + ';' +
                'background: ' + hd_btn2_bkg + ';' +
                '}' +

                '.header-button-wrapper a.btn.second-btn.header-button:hover{' +
                'color: ' + hd_btn2_color_ + ';' +
                'border: 1px solid ' + hd_btn2_border_ + ';' +
                '}'
            );
        });
    });
    wp.customize( 'mythemes-second-btn-url' , function( value ){
        value.bind(function( newval ){
            jQuery( '.header-button-wrapper a.second-btn' ).attr( 'href' , newval );
        });
    });
    wp.customize( 'mythemes-second-btn-label' , function( value ){
        value.bind(function( newval ){
            jQuery( '.header-button-wrapper a.second-btn' ).html( newval );
        });
    });
    wp.customize( 'mythemes-second-btn-description' , function( value ){
        value.bind(function( newval ){
            jQuery( '.header-button-wrapper a.second-btn' ).attr( 'title' , newval );
        });
    });


    /* BREADCRUMBS */
    wp.customize( 'mythemes-home-label' , function( value ){
        value.bind(function( newval ){
        	jQuery( 'div.mythemes-page-header li#home-label a span' ).html( newval );
        });
    });

    wp.customize( 'mythemes-home-link-description' , function( value ){
        value.bind(function( newval ){
            jQuery( 'div.mythemes-page-header li#home-label a' ).attr( 'title' , newval );
        });
    });

    wp.customize( 'mythemes-breadcrumbs-space' , function( value ){
        value.bind(function( newval ){
        	jQuery( 'div.mythemes-page-header' ).css({ 'padding-top' : newval + 'px' , 'padding-bottom' : newval + 'px' });
        });
    });

    /* ADDITIONAL */
    wp.customize( 'mythemes-blog-title' , function( value ){
        value.bind(function( newval ){
        	jQuery( 'div.mythemes-page-header h1#blog-title' ).html( newval );
        });
    });
    

    /* SOCIAL */
    wp.customize( 'mythemes-vimeo' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-vimeo' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-vimeo' ).removeClass( 'hidden' );	
        		}
        		
        		jQuery( 'div.mythemes-social a.mythemes-icon-vimeo' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-vimeo' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-vimeo' ).addClass( 'hidden' );	
        		}
        	}
        });
    });
    wp.customize( 'mythemes-twitter' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-twitter' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-twitter' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-twitter' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-twitter' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-twitter' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-skype' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-skype' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-skype' ).removeClass( 'hidden' );	
        		}
        		
        		jQuery( 'div.mythemes-social a.mythemes-icon-skype' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-skype' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-skype' ).addClass( 'hidden' );	
        		}
        	}
        });
    });
    wp.customize( 'mythemes-renren' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-renren' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-renren' ).removeClass( 'hidden' );
        		}
        		
        		jQuery( 'div.mythemes-social a.mythemes-icon-renren' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-renren' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-renren' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-github' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-github' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-github' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-github' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-github' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-github' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-rdio' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-rdio' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-rdio' ).removeClass( 'hidden' );
        		}
        		
        		jQuery( 'div.mythemes-social a.mythemes-icon-rdio' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-rdio' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-rdio' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-linkedin' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-linkedin' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-linkedin' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-linkedin' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-linkedin' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-linkedin' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-behance' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-behance' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-behance' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-behance' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-behance' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-behance' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-dropbox' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-dropbox' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-dropbox' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-dropbox' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-dropbox' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-dropbox' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-flickr' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-flickr' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-flickr' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-flickr' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-flickr' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-flickr' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-tumblr' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-tumblr' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-tumblr' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-tumblr' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-tumblr' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-tumblr' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-instagram' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-instagram' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-instagram' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-instagram' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-instagram' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-instagram' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-vkontakte' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-vkontakte' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-vkontakte' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-vkontakte' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-vkontakte' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-vkontakte' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-facebook' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-facebook' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-facebook' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-facebook' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-facebook' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-facebook' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-evernote' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-evernote' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-evernote' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-evernote' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-evernote' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-evernote' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-flattr' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-flattr' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-flattr' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-flattr' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-flattr' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-flattr' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-picasa' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-picasa' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-picasa' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-picasa' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-picasa' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-picasa' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-dribbble' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-dribbble' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-dribbble' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-dribbble' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-dribbble' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-dribbble' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-mixi' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-mixi' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-mixi' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-mixi' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-mixi' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-mixi' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-stumbleupon' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-stumbleupon' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-stumbleupon' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-stumbleupon' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-stumbleupon' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-stumbleupon' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-lastfm' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-lastfm' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-lastfm' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-lastfm' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-lastfm' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-lastfm' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-gplus' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-gplus' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-gplus' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-gplus' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-gplus' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-gplus' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-google-circles' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-google-circles' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-google-circles' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-google-circles' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-google-circles' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-google-circles' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-pinterest' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-pinterest' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-pinterest' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-pinterest' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-pinterest' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-pinterest' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-smashing' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-smashing' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-smashing' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-smashing' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-smashing' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-smashing' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-soundcloud' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-soundcloud' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-soundcloud' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-soundcloud' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-soundcloud' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-soundcloud' ).addClass( 'hidden' );
        		}
        	}
        });
    });
    wp.customize( 'mythemes-rss' , function( value ){
        value.bind(function( newval ){
        	if( newval.length ){
        		if( jQuery( 'div.mythemes-social a.mythemes-icon-rss' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-rss' ).removeClass( 'hidden' );
        		}

        		jQuery( 'div.mythemes-social a.mythemes-icon-rss' ).attr( 'href' , newval );
        	}
        	else{
        		if( !jQuery( 'div.mythemes-social a.mythemes-icon-rss' ).hasClass( 'hidden' ) ){
        			jQuery( 'div.mythemes-social a.mythemes-icon-rss' ).addClass( 'hidden' );
        		}
        	}
        });
    });

    /* OTHERS */
    wp.customize( 'mythemes-custom-css' , function( value ){
        value.bind(function( newval ){
        	jQuery( 'style#mythemes-custom-css' ).html( newval );
        });
    });

    wp.customize( 'mythemes-copyright' , function( value ){
        value.bind(function( newval ){
        	jQuery( 'div.mythemes-copyright span.copyright' ).html( newval );
        });
    });

    wp.customize( 'mythemes-background_color' , function( value ){
        value.bind(function( newval ){

            var bg_color        = newval;
            var bg_color_rgba   = 'rgba( ' + mythemes_hex2rgb( newval ) + ' , 0.91 )';
            jQuery( 'style#mythemes-custom-style-background' ).html(

                /* BACKGROUND COLOR */
                'body > div.content,' +
                'body footer aside{' +
                'background-color: ' + bg_color + ';' +
                '}' +

                /* MENU NAVIGATION */
                /* BACKGROUND COLOR */
                'body.scroll-nav .mythemes-poor{' +
                'background-color: ' + bg_color_rgba + ';' +
                '}' +

                '.mythemes-poor{' +
                'background-color: ' + bg_color + ';' +
                '}'
            );
        });
    });

    /* BACKGROUND IMAGE */
    wp.customize( 'mythemes-background_image' , function( value ){
        value.bind(function( newval ){
            console.log( newval );
            jQuery( 'body > div.content, body footer aside' ).css( 'background-image' , 'url(' + newval + ')' );
        });
    });

    wp.customize( 'mythemes-background_repeat' , function( value ){
        value.bind(function( newval ){
            console.log( newval );
            jQuery( 'body > div.content, body footer aside' ).css( 'background-repeat' , newval );
        });
    });

    wp.customize( 'mythemes-background_position_x' , function( value ){
        value.bind(function( newval ){
            console.log( newval );
            jQuery( 'body > div.content, body footer aside' ).css( 'background-position' , newval );
        });
    });

    wp.customize( 'mythemes-background_attachment' , function( value ){
        value.bind(function( newval ){
            console.log( newval );
            jQuery( 'body > div.content, body footer aside' ).css( 'background-attachment' , newval );
        });
    });

})(jQuery);