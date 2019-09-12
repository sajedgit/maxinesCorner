<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

 
 
 add_action("after_setup_theme", "storefront_child_header_remove");
function storefront_child_header_remove()
{
    //remove_action("storefront_header","storefront_site_branding",20);
    ///remove_action("storefront_header","storefront_secondary_navigation",30);
    //remove_action("storefront_header","storefront_product_search",40);
   // remove_action("storefront_header","storefront_primary_navigation_wrapper",42);
    //remove_action("storefront_header","storefront_primary_navigation",50);
    //remove_action("storefront_header","storefront_header_cart",60);
   // remove_action("storefront_header","storefront_primary_navigation_wrapper_close",68);
}
 
 
 
/*  add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
function jk_storefront_header_content() { ?>
	<div style="clear: both; text-align: right;">
		Have questions about our products? <em>Give us a call:</em> <strong>0800 123 456</strong>
	</div>
	<?php
} */


add_action( 'storefront_header' , 'custom_storefront_header', 1 );
function custom_storefront_header () {
    remove_action( 'storefront_header' , 'storefront_site_branding', 20 );
    add_action( 'storefront_header' , 'custom_site_branding', 20 );
    function custom_site_branding() {
        // HERE set the link of your logo or site title
        $link = home_url( '/my-custom-link/' );
        ?>
         
            <div class="navbar-header page-scroll">         
			 <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">   
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_thumb.png"  alt=""  style="height:75px;"   />     
			 </a>   
		 </div>  
         
        <?php
    }
	
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
    add_action( 'storefront_header', 'storefront_product_search', 20 );
	
	
	remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
    add_action( 'storefront_header', 'storefront_primary_navigation', 30 );
	
	
	
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
    add_action( 'storefront_header', 'storefront_header_cart', 30 );
	
	
}


 


