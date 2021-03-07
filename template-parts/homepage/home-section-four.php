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
$perch_home_team_section_content = get_field('perch_home_team_section_content');

if($perch_home_team_section_content) : ?>

    <section class="our-team">
        <?php echo $perch_home_team_section_content; ?>
    </section>

<?php endif; ?>


