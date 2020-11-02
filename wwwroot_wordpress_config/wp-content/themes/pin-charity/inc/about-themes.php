<?php
// about theme info
add_action('admin_menu', 'pin_charity_abouttheme');
function pin_charity_abouttheme()
	{
	add_theme_page(esc_html__('Theme Info', 'pin-charity') , esc_html__('Theme Info', 'pin-charity') , 'edit_theme_options', 'pin_charity_guide', 'pin_charity_mostrar_guide');
	}
// guidline for about theme
function pin_charity_mostrar_guide()
	{
// custom function about theme customizer
	$return = add_query_arg(array());
?>
<style type="text/css">
@media screen and (min-width: 800px) {
.col-left {float:left; width: 99%; text-align:center;}
}
</style>
<div class="wrapper-info">
	<div class="col-left">
   		   <div style="font-size:16px; font-weight:bold; padding-bottom:10px; border-bottom:1px solid #ccc; margin-bottom:15px; margin-top:10px;">
			  <?php esc_html_e('Theme Info', 'pin-charity'); ?>
		   </div>
           <div style="text-align:center; font-weight:bold;">
				<a href="<?php echo esc_url(PIN_CHARITY_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'pin-charity'); ?></a> | 
				<a href="<?php echo esc_url(PIN_CHARITY_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'pin-charity'); ?></a> | 
				<a href="<?php echo esc_url(PIN_CHARITY_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'pin-charity'); ?></a>
                <div style="height:5px"></div>
			</div>
          <p><?php
	esc_html_e('Pin Charity is a NGO, non profit, volunteer, fundraising, church, conservation, trust, foundation, donation, welfare activities, campaigns, activism, change in society, community support, old age, foster home, caretaker, philanthropy, amnesty, disaster relief template. Gutenberg editor used. Demo content and import available. WooCommerce friendly for accepting donations.', 'pin-charity'); ?></p>
	<a href="<?php
	echo esc_url(PIN_CHARITY_PRO_THEME_URL); ?>"><img src="<?php
	echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.jpg" alt="" /></a>
	</div><!-- .col-left -->
	<!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>