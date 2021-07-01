<?php

/**
 * @package footPersonalise
 * @version 1.0.0
 */
/*
Plugin Name: Footer personnalisé
Plugin URI: http://wordpress/plugins/footer-personnalisé/
Description: le meilleur plugin pour personnalisé votre footer.
Author: Edd Ouissal
Version: 1.0.0
Author URI: http://ma.tt/
*/

add_action('admin_menu', 'my_admin_menu');


function my_admin_menu () {
	//parameters details
	 //add_management_page( $page_title, $menu_title, $capability, $menu_slug, $function );
	 //add a new setting page udner setting menu
  //add_management_page('Footer Text', 'Footer Text', 'manage_options', __FILE__, //'footer_text_admin_page');
  //add new menu and its sub menu 
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options',
 'parametre_footer', 'mt_settings_page', 'dashicons-buddicons-groups');

}

function footer_text_admin_page () {
  echo 'this is where we will edit the variable';
}

// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('paramettre_footer.php');
}
add_action( 'wp_footer', 'FooterPersonalise' );

function FooterPersonalise() {
echo '

    <div style="display:flex ; flex-direction:row; background:#1c1c1c; align-items:center; justify-content:center; gap:12%;">

   <div style="display:flex; flex-direction:column">
   <h5 style=" font-size:20px; color:white;" >'.get_option('contact').'</h5>
   <p style=" font-size:17px; color:white;">'.get_option('numero').'</p>
   <p style=" font-size:17px; color:white;">'.get_option('adresse').'</p>
   <p style=" font-size:17px; color:white;"> Email'.get_option('emaill').'</p>
   </div>

   <div style="display:flex; flex-direction:column">
   <h5 style=" font-size:20px; color:white;" >'.get_option('page').'</h5>
   <p style=" font-size:17px; color:white;">'.get_option('cart').'</p>
   <p style=" font-size:17px; color:white;"> '.get_option('account').'</p>
   <p style=" font-size:17px; color:white;"> '.get_option('categorie').'</p>
   </div>

   <div style="display:flex; flex-direction:column ; padding-bottom: 4%;">
   <h5 style=" font-size:20px; color:white;">Reseau</h5>
   <div style=" font-size:17px; color:white;" > <a style="color:white; text-decoration: none;  padding: 5px;" href="'.get_option('fb').'">
   <i class="fab fa-facebook-f"></i>
     </a>  : Facebook</div>
   <div style=" font-size:17px; color:white;" > <a style="color:white; text-decoration: none;  padding: 5px;" href="'.get_option('insta').'">
   <i class="fab fa-instagram"></i>
     </a> : Instagrame </div>
   <div style=" font-size:17px; color:white;"> <a style="color:white; text-decoration: none;  padding: 5px;" href="'.get_option('twitt').'">
   <i class="fab fa-twitter"></i>
     </a> : Twitter </div>

   
      </div>
   
   
   </div>
';



}


?>