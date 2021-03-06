<?php
/**
 * Partial template for content in loop-templates/content-homepagepage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/*
* Check for ACF and retrieve fields
*/

if (!class_exists('ACF')) {
    //  The ACF class doesn't exist, so you can probably redefine your functions here
    echo '<p>Please (a) install and/or activate the ACF plugin or (B) use a different page template.'; 
} else {

    /*
    * Homepage sections
    */
    get_template_part('template-parts/home-section-one'); 

    
}


?>
