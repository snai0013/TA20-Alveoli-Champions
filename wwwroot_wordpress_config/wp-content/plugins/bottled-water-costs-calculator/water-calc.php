<?php
/*
Plugin Name: Bottled Water Costs Calculator
Plugin URI: 
Description: This plugin displays functional bottled water costs calculator
Version: 1.0
Author: Bledar Ramo
Author URI: http://coveredwpservices.com/
License: GPL2

    Copyright 2012  Bledar Ramo  (email: serviceramo@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/






class WaterWidget extends WP_Widget {
    /** constructor */
    function WaterWidget() {
        parent::WP_Widget(false, $name = 'WaterWidget');
    }
 
    // ovpredct_options() displays the page content for the Ovpredct Options submenu
    function form() 
    {
        // Read in existing option values from database
        $waterwidget_price = stripslashes( get_option( 'waterwidget_price' ) );
        $waterwidget_company = stripslashes( get_option( 'waterwidget_company' ) );
        $waterwidget_text = stripslashes( get_option( 'waterwidget_text' ) );
        
        // See if the user has posted us some information
        // If they did, this hidden field will be set to 'Y'
        if( $_POST[ 'waterwidget_update' ] == 'Y' ) 
        {
            // Read their posted values
            $waterwidget_price = $_POST[ 'waterwidget_price' ];
            $waterwidget_company = $_POST[ 'waterwidget_company' ];              
            $waterwidget_text = $_POST[ 'waterwidget_text' ];       
            
            // Save the posted values in the database
            update_option( 'waterwidget_price', $waterwidget_price );
            update_option( 'waterwidget_company', $waterwidget_company );
            update_option( 'waterwidget_text', $waterwidget_text );
            
            // Put an options updated message on the screen
    		?>
    		<div class="updated"><p><strong><?php _e('Options saved.', 'wlc_domain' ); ?></strong></p></div>
    		<?php		
    	 }
    		
    		 // Now display the options editing screen
    		    echo '<div class="wrap">';		
    		    // header
    		    echo "<h2>" . __( 'Bottled Water Costs Calculator', 'waterwidget_domain' ) . "</h2>";		
    		    // options form		    
    		    ?>
    		<div>
    		<form name="form1" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
    		<input type="hidden" name="waterwidget_update" value="Y">
    		
    		<p><?php _e("Your price per month", 'waterwidget_domain' ); ?> 
    		<input type="text" name="waterwidget_price" value="<?php echo stripslashes ($waterwidget_price); ?>">
    		</p><hr />
    		
    		<p><?php _e("Your company name", 'waterwidget_domain' ); ?> 
            <input type="text" name="waterwidget_company" value="<?php echo stripslashes ($waterwidget_company); ?>">
            </p><hr />
            
            <p><?php _e("Text when there are no savings:", 'waterwidget_domain' ); ?> 
            <textarea rows="5" cols="25" name="waterwidget_text"><?php echo stripslashes ($waterwidget_text); ?></textarea>
            </p><hr />
    		
    		<p class="submit">
    		<input type="submit" name="Submit" value="<?php _e('Update Options', 'waterwidget_domain' ) ?>" />
    		</p>
    		
    		</form>
    		</div>
    		<?php
    }
    
    // This just echoes the text
    function widget($args, $instance) 
    {	
    	
    	//construct the calculator page		
    	$inline_style="style='margin:auto;padding:5px;width:200px;text-align:left;'";
    	
    	// initialize vars
    	$_SESSION['calc_num_bottles']=isset($_SESSION['calc_num_bottles'])?$_SESSION['calc_num_bottles']:0;
    	$_SESSION['calc_bottle_cost']=isset($_SESSION['calc_bottle_cost'])?$_SESSION['calc_bottle_cost']:0;
    	$_SESSION['calc_num_coolers']=isset($_SESSION['calc_num_coolers'])?$_SESSION['calc_num_coolers']:0;
    	$_SESSION['calc_monthly_cost']=isset($_SESSION['calc_monthly_cost'])?$_SESSION['calc_monthly_cost']:0;
    	
    	// Read in existing option values from database
        $waterwidget_price = stripslashes( get_option( 'waterwidget_price' ) );
        $waterwidget_company = stripslashes( get_option( 'waterwidget_company' ) );
        $waterwidget_text = stripslashes( get_option( 'waterwidget_text' ) );
    		
    	if(!empty($_POST['watercalc_ok']))
    	{
    		// save in session to be used when the link "calculate again" is clicked
    		foreach($_POST as $key=>$var) $_SESSION["calc_".$key]=$var;
    	
    		// calculate annual cost
    		$annual_bottles=$_POST['num_bottles']*12;
    		$annual_cost_water=$annual_bottles*$_POST['bottle_cost'];
    		$annual_coolers=$_POST['num_coolers']*12;
    		$annual_cost_coolers=$annual_coolers*$_POST['monthly_cost'];
    		$total_cost=$annual_cost_water+$annual_cost_coolers;
    	}
    	
    	$waterwidget_calc="<h1>Bottled Water Costs Calculator</h1>";
    	
    	$waterwidget_calc.=<<<WATER_CALC
            <style type="text/css">
            .watercalc_response
            {
                border:1pt solid black;
                padding:10px;
                background:#EEE;    
            }
            .water_calc {
                width:200px;
            }
            .water_calc label
            {
                width:150px;
                display:block;                
            }
            </style>
    		<form method="post" onsubmit="return validateCalculator(this);">
    		<div class="water_calc">
    		    <div><label>Number of 5 gallon water bottles used per month:</label>
    		    <input type="text" name="num_bottles" size="8" value="$_SESSION[calc_num_bottles]"></div>   
    		    <div><label>Cost per water bottle:</label>
                <input type="text" name="bottle_cost" size="8" value="$_SESSION[calc_bottle_cost]"></div>   
                <div><label>Number of water coolers in use:</label>
                <input type="text" name="num_coolers" size="8" value="$_SESSION[calc_num_coolers]"></div>
                <div><label>Monthly rental cost per water cooler:</label>
                <input type="text" name="monthly_cost" size="8" value="$_SESSION[calc_monthly_cost]"></div>  
                <div align="center"><input type="submit" value="Calculate Savings" name="watercalc_ok"></div>
    		</div>
    		</form>					
    		
    		<script language="javascript">
    		function validateCalculator(frm)
    		{
    			num_bottles=frm.num_bottles.value;	        		
    			bottle_cost=frm.bottle_cost.value;
    			num_coolers=frm.num_coolers.value;
    			monthly_cost=frm.monthly_cost.value;
    			
    			if(num_bottles=='' || isNaN(num_bottles))
    			{
                    alert("Please enter number of bottles, numbers only");
                    frm.num_bottles.focus();
                    return false;
    			}
    			
    			if(bottle_cost=='' || isNaN(bottle_cost))
                {
                    alert("Please enter costs per water bottle");
                    frm.bottle_cost.focus();
                    return false;
                }
                
                if(num_coolers=='' || isNaN(num_coolers))
                {
                    alert("Please enter number of water coolers, numbers only");
                    frm.num_coolers.focus();
                    return false;
                }
                
                if(monthly_cost=='' || isNaN(monthly_cost))
                {
                    alert("Please enter monthly rental cost per cooler");
                    frm.monthly_cost.focus();
                    return false;
                }
    			
    			return true;
    		}		
    		</script>
WATER_CALC;
    	
    	// now display info
    	if(!empty($_POST['watercalc_ok']))
    	{
            $compare_cost=$waterwidget_price*12;
            
            if($total_cost>$compare_cost)
            {
                $diff=$total_cost-$compare_cost;
                
                $waterwidget_calc.="<p class='watercalc_response water_calc'>Based on the information you entered, you currently spend $".number_format($total_cost)." annually on bottled water. <b>$waterwidget_company</b> can save you $".number_format($diff)." per year!</p>";
            }
            else
            {
                $waterwidget_calc.="<p class='watercalc_response water_calc'>Based on the information you entered, you currently spend $".number_format($total_cost)." annually on bottled water. $waterwidget_text</p>";
            }
    	}   	
    	
    	echo $waterwidget_calc;
    	
    }
}    

# add_filter('the_content', 'watercalc');
add_action('widgets_init', create_function('', 'return register_widget("WaterWidget");'));
?>