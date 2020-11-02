<?php
if( get_theme_mod( 'elation-social-email' ) ) :
    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'elation-social-email' ), 1 ) ) . '" title="' . esc_attr__( 'Send Us an Email', 'elation' ) . '" class="social-icon social-email"><i class="far fa-envelope"></i></a>';
endif;

if( get_theme_mod( 'elation-social-skype' ) ) :
    echo '<a href="skype:' . esc_html( get_theme_mod( 'elation-social-skype' ) ) . '?userinfo" title="' . esc_attr__( 'Contact Us on Skype', 'elation' ) . '" class="social-icon social-skype"><i class="fab fa-skype"></i></a>';
endif;

if( get_theme_mod( 'elation-social-phone' ) ) :
    echo '<a href="' . esc_url( 'tel:' . antispambot( get_theme_mod( 'elation-social-phone' ), 1 ) ) . '" title="' . esc_attr__( 'Call Us', 'elation' ) . '" class="social-icon social-phone"><i class="fas fa-phone"></i></a>';
endif;

if( get_theme_mod( 'elation-social-whatsapp' ) ) :
    echo '<a href="https://wa.me/' . esc_html( get_theme_mod( 'elation-social-whatsapp' ) ) . '" title="' . esc_attr__( 'Contact Us on Whatsapp', 'elation' ) . '" class="social-icon social-whatsapp"><i class="fab fa-whatsapp"></i></a>';
endif;

if( get_theme_mod( 'elation-social-facebook' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-facebook' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Facebook', 'elation' ) . '" class="social-icon social-facebook"><i class="fab fa-facebook"></i></a>';
endif;

if( get_theme_mod( 'elation-social-twitter' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-twitter' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Twitter', 'elation' ) . '" class="social-icon social-twitter"><i class="fab fa-twitter"></i></a>';
endif;

if( get_theme_mod( 'elation-social-google-plus' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-google-plus' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Google Plus', 'elation' ) . '" class="social-icon social-gplus"><i class="fab fa-google-plus"></i></a>';
endif;

if( get_theme_mod( 'elation-social-snapchat' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-snapchat' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on SnapChat', 'elation' ) . '" class="social-icon social-snapchat"><i class="fab fa-snapchat"></i></a>';
endif;

if( get_theme_mod( 'elation-social-amazon' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-amazon' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Amazon', 'elation' ) . '" class="social-icon social-amazon"><i class="fab fa-amazon"></i></a>';
endif;

if( get_theme_mod( 'elation-social-etsy' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-etsy' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Etsy', 'elation' ) . '" class="social-icon social-etsy"><i class="fab fa-etsy"></i></a>';
endif;

if( get_theme_mod( 'elation-social-yelp' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-yelp' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Yelp', 'elation' ) . '" class="social-icon social-yelp"><i class="fab fa-yelp"></i></a>';
endif;

if( get_theme_mod( 'elation-social-youtube' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-youtube' ) ) . '" target="_blank" title="' . esc_attr__( 'View our YouTube Channel', 'elation' ) . '" class="social-icon social-youtube"><i class="fab fa-youtube"></i></a>';
endif;

if( get_theme_mod( 'elation-social-vimeo' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-vimeo' ) ) . '" target="_blank" title="' . esc_attr__( 'View our Vimeo Channel', 'elation' ) . '" class="social-icon social-vimeo"><i class="fab fa-vimeo-square"></i></a>';
endif;

if( get_theme_mod( 'elation-social-instagram' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-instagram' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Instagram', 'elation' ) . '" class="social-icon social-instagram"><i class="fab fa-instagram"></i></a>';
endif;

if( get_theme_mod( 'elation-social-strava' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-strava' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Strava', 'elation' ) . '" class="social-icon social-strava"><i class="fab fa-strava"></i></a>';
endif;

if( get_theme_mod( 'elation-social-airbnb' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-airbnb' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Airbnb', 'elation' ) . '" class="social-icon social-airbnb"><i class="fab fa-airbnb"></i></a>';
endif;

if( get_theme_mod( 'elation-social-pinterest' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-pinterest' ) ) . '" target="_blank" title="' . esc_attr__( 'Pin Us on Pinterest', 'elation' ) . '" class="social-icon social-pinterest"><i class="fab fa-pinterest"></i></a>';
endif;

if( get_theme_mod( 'elation-social-medium' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-medium' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Medium', 'elation' ) . '" class="social-icon social-medium"><i class="fab fa-medium"></i></a>';
endif;

if( get_theme_mod( 'elation-social-blogger' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-blogger' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Blogger', 'elation' ) . '" class="social-icon social-blogger"><i class="fab fa-blogger"></i></a>';
endif;

if( get_theme_mod( 'elation-social-behance' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-behance' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Behance', 'elation' ) . '" class="social-icon social-behance"><i class="fab fa-behance"></i></a>';
endif;

if( get_theme_mod( 'elation-social-soundcloud' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-soundcloud' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on SoundCloud', 'elation' ) . '" class="social-icon social-soundcloud"><i class="fab fa-soundcloud"></i></a>';
endif;

if( get_theme_mod( 'elation-social-spotify' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-spotify' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Spotify', 'elation' ) . '" class="social-icon social-spotify"><i class="fab fa-spotify"></i></a>';
endif;

if( get_theme_mod( 'elation-social-product-hunt' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-product-hunt' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Product Hunt', 'elation' ) . '" class="social-icon social-product-hunt"><i class="fab fa-product-hunt"></i></a>';
endif;

if( get_theme_mod( 'elation-social-kickstarter' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-kickstarter' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Kickstarter', 'elation' ) . '" class="social-icon social-kickstarter"><i class="fab fa-kickstarter"></i></a>';
endif;

if( get_theme_mod( 'elation-social-slack' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-slack' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Slack', 'elation' ) . '" class="social-icon social-slack"><i class="fab fa-slack"></i></a>';
endif;

if( get_theme_mod( 'elation-social-linkedin' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-linkedin' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on LinkedIn', 'elation' ) . '" class="social-icon social-linkedin"><i class="fab fa-linkedin"></i></a>';
endif;

if( get_theme_mod( 'elation-social-tumblr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Tumblr', 'elation' ) . '" class="social-icon social-tumblr"><i class="fab fa-tumblr"></i></a>';
endif;

if( get_theme_mod( 'elation-social-digg' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-digg' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Digg', 'elation' ) . '" class="social-icon social-digg"><i class="fab fa-digg"></i></a>';
endif;

if( get_theme_mod( 'elation-social-flickr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-flickr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Flickr', 'elation' ) . '" class="social-icon social-flickr"><i class="fab fa-flickr"></i></a>';
endif;

if( get_theme_mod( 'elation-social-houzz' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-houzz' ) ) . '" target="_blank" title="' . esc_attr__( 'Find our profile on Houzz', 'elation' ) . '" class="social-icon social-houzz"><i class="fab fa-houzz"></i></a>';
endif;

if( get_theme_mod( 'elation-social-vine' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-vine' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Vine', 'elation' ) . '" class="social-icon social-vine"><i class="fab fa-vine"></i></a>';
endif;

if( get_theme_mod( 'elation-social-vk' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-vk' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on VK', 'elation' ) . '" class="social-icon social-vk"><i class="fab fa-vk"></i></a>';
endif;

if( get_theme_mod( 'elation-social-xing' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-xing' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Xing', 'elation' ) . '" class="social-icon social-xing"><i class="fab fa-xing"></i></a>';
endif;

if( get_theme_mod( 'elation-social-stumbleupon' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-stumbleupon' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on StumbleUpon', 'elation' ) . '" class="social-icon social-stumbleupon"><i class="fab fa-stumbleupon"></i></a>';
endif;

if( get_theme_mod( 'elation-social-tripadvisor' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-tripadvisor' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on TripAdvisor', 'elation' ) . '" class="social-icon social-tripadvisor"><i class="fab fa-tripadvisor"></i></a>';
endif;

if( get_theme_mod( 'elation-social-github' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-github' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on GitHub', 'elation' ) . '" class="social-icon social-github"><i class="fab fa-github"></i></a>';
endif;

if( get_theme_mod( 'elation-social-500px' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-500px' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on 500px', 'elation' ) . '" class="social-icon social-500px"><i class="fab fa-500px"></i></a>';
endif;

if( get_theme_mod( 'elation-social-odnoklassniki' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-odnoklassniki' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Odnoklassniki', 'elation' ) . '" class="social-icon social-odnoklassniki"><i class="fab fa-odnoklassniki"></i></a>';
endif;

if( get_theme_mod( 'elation-social-custom-class' ) && get_theme_mod( 'elation-social-custom-url' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-custom-url' ) ) . '" target="_blank" class="social-icon social-custom"><i class="fab ' . sanitize_html_class( get_theme_mod( 'elation-social-custom-class' ) ) . '"></i></a>';
endif;

if( get_theme_mod( 'elation-social-custom-class-two' ) && get_theme_mod( 'elation-social-custom-url-two' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-custom-url-two' ) ) . '" target="_blank" class="social-icon social-custom"><i class="fab ' . sanitize_html_class( get_theme_mod( 'elation-social-custom-class-two' ) ) . '"></i></a>';
endif;

if( get_theme_mod( 'elation-social-custom-class-nobrand' ) && get_theme_mod( 'elation-social-custom-url-nobrand' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'elation-social-custom-url-nobrand' ) ) . '" target="_blank" class="social-icon social-custom"><i class="fas ' . sanitize_html_class( get_theme_mod( 'elation-social-custom-class-nobrand' ) ) . '"></i></a>';
endif;
