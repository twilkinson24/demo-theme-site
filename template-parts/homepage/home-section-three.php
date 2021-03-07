<?php
/**
 * Partial template for content in loop-templates/content-homepagepage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* 
* Homepage template - This part appears directly below the Case Studies Section
*/


// ACF Fields 
$perch_home_our_clients_text = get_field('perch_home_our_clients_text');

if($perch_home_our_clients_text) : ?>

    <section class="our-clients">
        <?php echo $perch_home_our_clients_text; ?>
    </section>

<?php endif; ?>


