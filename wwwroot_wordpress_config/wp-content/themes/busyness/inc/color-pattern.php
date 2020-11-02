<?php
/**
 * Busyness: Color Patterns
 *
 * @package Busyness
 */

/**
 * Generate the CSS for the current custom color scheme.
 */
function busyness_custom_colors_css() {
  	$options= busyness_get_theme_options();

	$blue_color_value = $options['colorscheme_hue'];
	$red_color_value = $options['secondary_colorscheme_hue'];

	$css = '
	/*--------------------------------------------------------------
	## Blue Background Color
	--------------------------------------------------------------*/
	#respond input[type="submit"]:hover,
	#respond input[type="submit"]:focus,
	.pagination .page-numbers,
	.pagination .page-numbers.dots:hover,
	.pagination .page-numbers.dots:focus,
	.widget_search form.search-form .search-submit,
	input[type="submit"]:hover,
	input[type="submit"]:focus,
	.jetpack_subscription_widget input[type="submit"]:hover,
	.jetpack_subscription_widget input[type="submit"]:focus,
	.jetpack_subscription_widget button[type="submit"]:hover,
	.jetpack_subscription_widget button[type="submit"]:focus,
	.reply a:hover,
	.reply a:focus,
	.overlay,
	#introduction-section,
	#our-portfolio .btn:hover,
	#our-portfolio .btn:focus,
	.slick-arrow,
	.slick-arrow:hover,
	.slick-arrow:focus,
	.filtering-posts .slick-arrow:hover,
	.filtering-posts .slick-arrow:focus,
	#testimonial-section,
	.secondary-footer-item-wrapper .more-link a,
	.secondary-footer .more-link a,
	#call-to-action .read-more .btn {
	    background-color: '. esc_attr( $blue_color_value ) .';
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	a:hover,
	a:focus,
	a:active,
	.site-title a,
	.main-navigation ul.sub-menu li a,
	.main-navigation ul.nav-menu > li > a,
	.main-navigation a,
	#secondary a,
	.comment-meta .url,
	.comment-meta .fn,
	.comment-metadata a,
	.comment-metadata a time,
	.service-item .entry-title a,
	.portfolio-slider .entry-title a,
	#our-contribution .entry-header .entry-title a,
	#about-us .entry-header .entry-title a,
	.archive-blog-wrapper .entry-title a,
	.post-categories a:hover,
	.post-categories a:focus,
	.posted-on a:hover,
	.posted-on a:focus,
	.single .post-categories a:hover,
	.single .post-categories a:focus,
	.single .byline a:hover,
	.single .byline a:focus,
	#colophon .widget-title,
	#colophon .widgettitle,
	.post-navigation a,
	.posts-navigation a {
		color: '. esc_attr( $blue_color_value ) .';
	}

	svg.icon-close,
	svg.icon-menu,
	.post-navigation a,
	.posts-navigation a,
	.navigation.posts-navigation svg,
	.navigation.post-navigation svg,
	#colophon .social-icons li a svg {
	    fill: '. esc_attr( $blue_color_value ) .';
	}

	.filtering-posts .slick-arrow {
		border-color: '. esc_attr( $blue_color_value ) .';
	}

	/*--------------------------------------------------------------
	## Red Background Color
	--------------------------------------------------------------*/
	.backtotop,
	#respond input[type="submit"],
	#masthead .login-register a:hover,
	#masthead .login-register a:focus,
	.pagination .page-numbers.current,
	.pagination .page-numbers:hover,
	.pagination .page-numbers:focus,
	.widget_search form.search-form .search-submit:hover,
	.widget_search form.search-form .search-submit:focus,
	input[type="submit"],
	.jetpack_subscription_widget input[type="submit"],
	.jetpack_subscription_widget button[type="submit"],
	#secondary .jetpack_subscription_widget input[type="submit"]:hover,
	#secondary .jetpack_subscription_widget input[type="submit"]:focus,
	.tags-links a:hover,
	.tags-links a:focus,
	.reply a,
	.btn:hover,
	.btn:focus,
	#our-portfolio,
	.slick-dots li.slick-active button,
	#about-us .btn:hover,
	#about-us .btn:focus,
	#latest-posts,
	.archive-blog-wrapper article .btn:hover,
	.archive-blog-wrapper article .btn:focus,
	#call-to-action .read-more .btn:hover,
	#call-to-action .read-more .btn:focus,
	.single .posted-on a,
	.secondary-footer .more-link a:hover,
	.secondary-footer .more-link a:focus,
	#call-to-action .read-more .btn:hover,
	#call-to-action .read-more .btn:focus {
	    background-color: '. esc_attr( $red_color_value ) .';
	}

	a,
	.site-title a:hover,
	.site-title a:focus,
	.main-navigation ul#primary-menu li.current-menu-item > a,
	.main-navigation ul#primary-menu li:hover > a,
	.main-navigation a:hover,
	.main-navigation ul.nav-menu > li > a:hover,
	.post-navigation a:hover,
	.posts-navigation a:hover,
	.post-navigation a:focus,
	.posts-navigation a:focus,
	.widget_popular_post h3 a:hover,
	.widget_popular_post h3 a:focus,
	.widget_popular_post a:hover time,
	.widget_popular_post a:focus time,
	.widget_latest_post h3 a:hover,
	.widget_latest_post h3 a:focus,
	.widget_latest_post a:hover time,
	.widget_latest_post a:focus time,
	.widget_featured_post h3 a:hover,
	.widget_featured_post h3 a:focus,
	.widget_featured_post a:hover time,
	.widget_featured_post a:focus time,
	.widget_popular_post a time,
	.widget_popular_post time,
	.widget_latest_post a time,
	.widget_latest_post time,
	.widget_featured_post a time,
	.widget_featured_post time,
	#secondary a:hover,
	#secondary a:focus,
	ul.post-categories li:after,
	.comment-meta .url:hover,
	.comment-meta .url:focus,
	.comment-metadata a,
	.comment-metadata a time,
	.comment-metadata a:hover,
	.comment-metadata a:focus,
	.comment-metadata a:hover time,
	.comment-metadata a:focus time,
	.section-subtitle,
	.btn,
	#introduction-section .entry-title a:hover,
	#introduction-section .entry-title a:focus,
	.service-item .entry-title a:hover,
	.service-item .entry-title a:focus,
	.portfolio-slider .entry-title a:hover,
	.portfolio-slider .entry-title a:focus,
	ul.filter-tabs li.active a,
	ul.filter-tabs li a:hover,
	ul.filter-tabs li a:focus,
	#our-contribution .entry-header .entry-title a:hover,
	#our-contribution .entry-header .entry-title a:focus,
	#about-us .entry-header p,
	#about-us .entry-header .entry-title a:hover,
	#about-us .entry-header .entry-title a:focus,
	#about-us .btn,
	.archive-blog-wrapper .entry-title a:hover,
	.archive-blog-wrapper .entry-title a:focus,
	#latest-posts .section-header-wrapper .btn:hover,
	#latest-posts .section-header-wrapper .btn:focus,
	#latest-posts .archive-blog-wrapper + .read-more .btn:hover,
	#latest-posts .archive-blog-wrapper + .read-more .btn:focus,
	#our-portfolio .btn:hover,
	#our-portfolio .btn:focus,
	.archive-blog-wrapper .entry-meta > span:not(:first-child):before,
	.post-categories a,
	.posted-on a,
	.single .post-categories a,
	.single .byline a,
	#colophon .footer-widgets-area a:hover,
	#colophon .footer-widgets-area a:focus,
	.secondary-footer ul li a:hover,
	.secondary-footer ul li a:focus {
		color: '. esc_attr( $red_color_value ) .';
	}

	.loader-container svg,
	.main-navigation ul#primary-menu li:hover > svg,
	.main-navigation li.menu-item-has-children:hover > a > svg,
	.main-navigation li.menu-item-has-children > a:hover > svg,
	.main-navigation ul#primary-menu > li.current-menu-item > a > svg,
	.main-navigation ul.nav-menu > li > a.search:hover svg.icon-search,
	.main-navigation ul.nav-menu > li > a.search:focus svg.icon-search,
	.main-navigation li.search-menu a:hover svg,
	.main-navigation li.search-menu a:focus svg,
	.main-navigation li.search-menu a.search-active svg,
	.widget svg,
	.navigation.posts-navigation a:hover svg,
	.navigation.post-navigation a:hover svg,
	.navigation.posts-navigation a:focus svg,
	.navigation.post-navigation a:focus svg {
		fill: '. esc_attr( $red_color_value ) .';
	}

	#respond input:focus,
	#respond textarea:focus,
	.wpcf7 input:focus,
	.wpcf7 textarea:focus,
	#masthead .login-register a:hover,
	#masthead .login-register a:focus,
	.tags-links a:hover,
	.tags-links a:focus {
		border-color: '. esc_attr( $red_color_value ) .';
	}

	/*--------------------------------------------------------------
	## Responsive Color
	--------------------------------------------------------------*/

	@media screen and (min-width: 1024px) {
		.main-navigation li.menu-item-has-children:hover > a > svg,
		.main-navigation li.menu-item-has-children > a:hover > svg,
		.main-navigation ul#primary-menu > li.current-menu-item > a > svg {
			fill: '. esc_attr( $red_color_value ) .';
		}
		#masthead .main-navigation ul#primary-menu li.current-menu-item > a,
		#masthead .main-navigation ul.nav-menu > li > a:hover,
		.main-navigation ul#primary-menu li:hover > a {
			color: '. esc_attr( $red_color_value ) .';
		}
		.main-navigation ul.sub-menu li:hover > a,
		.main-navigation ul.sub-menu li:focus > a {
			background-color: '. esc_attr( $red_color_value ) .';
			color: #fff;
		}
	}

	@media screen and (min-width: 1200px) {
		.box {
		    background-color: '. esc_attr( $red_color_value ) .';
		}
	}

	@media screen and (max-width: 1023px) {
		.main-navigation a {
			color: '. esc_attr( $blue_color_value ) .';
		}
		#masthead .main-navigation .login-register a:hover,
		#masthead .main-navigation .login-register a:focus {
			background-color: '. esc_attr( $red_color_value ) .';
		}
		#masthead .main-navigation .login-register a:hover,
		#masthead .main-navigation .login-register a:focus {
			border-color: '. esc_attr( $red_color_value ) .';
		}
	}

	.btn,
	#about-us .btn {
		background-color: #eee;
	}

	/*--------------------------------------------------------------
	## Preloader
	--------------------------------------------------------------*/
	@keyframes preloader {
	    0% {height:5px;transform:translateY(0px);background: '. esc_attr( $red_color_value ) .';}
	    25% {height:30px;transform:translateY(15px);background: '. esc_attr( $red_color_value ) .';}
	    50% {height:5px;transform:translateY(0px);background: '. esc_attr( $red_color_value ) .';}
	    100% {height:5px;transform:translateY(0px);background: '. esc_attr( $red_color_value ) .';}
	}
	';

	/**
	 * Filters Busyness custom colors CSS.
	 *
	 * @since Busyness 1.0.0
	 *
	 * @param string $css        Base theme colors CSS.
	 */
	return apply_filters( 'busyness_custom_colors_css', $css );
}
