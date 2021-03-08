<?php
/**
 * Partial template for content in loop-templates/content-homepagepage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php
        /*
        * Check for ACF 
        */
        if (!class_exists('ACF')) {
            //  The ACF class doesn't exist, so you can probably redefine your functions here
            echo '<p>Please (a) install and/or activate the ACF plugin or (B) use a different page template.'; 
        } else {
            /*
            * Homepage sections
            */
           echo get_template_part('template-parts/homepage/home-section-one'); 
           echo get_template_part('template-parts/homepage/home-section-two'); 
           echo get_template_part('template-parts/homepage/home-section-three'); 
           echo get_template_part('template-parts/homepage/home-section-four'); 

            // for fixed footer
           echo '<div id="home-footer-anchor"></div>';
        }
    ?>

</article>