<?php
/**
 * Partial template for content in loop-templates/content-homepagepage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* 
* Homepage template Case Studies Section
*/

$perch_cs_args = array(  
    'post_type' => 'case-studies',
    'post_status' => 'publish',
    'posts_per_page' => 4, 
    'orderby' => 'id', 
    'order' => 'DESC', 
);

// Query the Case Studies 
$perch_case_study_query = new WP_Query( $perch_cs_args );

while ( $perch_case_study_query->have_posts() ) : $perch_case_study_query->the_post(); 
    
    // ACF variables
    $perch_live_or_coming_soon = get_field('perch_live_or_coming_soon');
    $perch_case_study_background_color = get_field('perch_case_study_background_color');


    if($perch_case_study_background_color) : ?>

        <section class="case-study" style="background-color: <?php echo $perch_case_study_background_color; ?>">
            <?php echo get_the_title(); ?>
        </section>


    <?php endif; // if($perch_case_study_background_color) 
endwhile;
wp_reset_postdata(); 


