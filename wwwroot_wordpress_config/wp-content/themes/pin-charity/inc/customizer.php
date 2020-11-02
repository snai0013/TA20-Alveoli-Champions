<?php
/**
 * Correct Lite Theme Customizer
 *
 * @package Pin Charity
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pin_charity_customize_register( $wp_customize ) {
	//Add a class for titles
    class pin_charity_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3 style="text-decoration: underline; color: #DA4141; text-transform: uppercase;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#ed3b58',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => esc_html__('Color Scheme','pin-charity'),			
			 'description'	=> esc_html__('More color options in PRO Version','pin-charity'),	
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	// Slider Section		
	$wp_customize->add_section( 'slider_section', array(
            'title' => esc_html__('Slider Settings', 'pin-charity'),
            'priority' => null,
            'description'	=> esc_html__('Slider Display When Frontpage Is Selected. Featured Image Size Should be ( 1400 X 830 ) More slider settings available in PRO Version','pin-charity'),		
        )
    );
	
	$wp_customize->add_setting('page-setting10',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting10',array(
			'type'	=> 'dropdown-pages',
			'label'	=> esc_html__('Select page for slide one:','pin-charity'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting11',array(
			'default' => '0',
			'capability' => 'edit_theme_options',			
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting11',array(
			'type'	=> 'dropdown-pages',
			'label'	=> esc_html__('Select page for slide two:','pin-charity'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting12',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting12',array(
			'type'	=> 'dropdown-pages',
			'label'	=> esc_html__('Select page for slide three:','pin-charity'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('slide_button',array(
			'default'	=> null,
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_button',array(
			'label'	=> esc_html__('Add Slide Button Title Here','pin-charity'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_button'
	));	
	
	//Slider hide
	$wp_customize->add_setting('hide_slides',array(
			'sanitize_callback' => 'wp_validate_boolean',
			'default' => true,
	));	 

	$wp_customize->add_control( 'hide_slides', array(
    	   'section'   => 'slider_section',    	 
		   'label'	=> esc_html__('Check To Hide Slider','pin-charity'),
    	   'type'      => 'checkbox'
     )); // Slider Section	

}
add_action( 'customize_register', 'pin_charity_customize_register' );
//setting inline css.
function pin_charity_custom_css() {
    wp_enqueue_style(
        'pin-charity-custom-style',
        get_template_directory_uri() . '/css/custom_script.css'
    );
        $color = esc_html(get_theme_mod( 'color_scheme' )); //E.g. #FF0000
		$header_text_color = esc_attr(get_header_textcolor());
		
        $custom_css = "
                #sidebar ul li a:hover,
					.cols-3 ul li a:hover, .cols-3 ul li.current_page_item a,					
					.phone-no strong,					
					.left a:hover,
					.blog_lists h4 a:hover,
					.recent-post h6 a:hover,
					.postmeta a:hover,
					.sitenav ul li a:hover, .sitenav ul li.current_page_item a,
					.sitenav ul li:hover > ul li a:hover,
					.sitenav .sub-menu li a:hover,
					.recent-post .morebtn:hover{
                        color: {$color};
                }
				
                .pagination .nav-links span.current, .pagination .nav-links a:hover,
					#commentform input#submit:hover,
					.slide_info .slide_more,													
					.wpcf7 input[type='submit'],					
					.social-icons a:hover,
					.benefitbox-4:hover .benefitbox-title,
					.nivo-controlNav a.active,
					input.search-submit{
                        background-color: {$color};
                }
				
				.logo h2, .logo p{
					color: #$header_text_color;
				}
				";
        wp_add_inline_style( 'pin-charity-custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'pin_charity_custom_css' );         

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pin_charity_customize_preview_js() {
	wp_enqueue_script( 'pin_charity_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'pin_charity_customize_preview_js' );