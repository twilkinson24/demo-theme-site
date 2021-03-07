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

$perch_post_count = 1;



while ( $perch_case_study_query->have_posts() ) : $perch_case_study_query->the_post(); 
    
    // ACF variables
    $perch_live_or_coming_soon = get_field('perch_live_or_coming_soon');
    $perch_case_study_background_color = get_field('perch_case_study_background_color');
    $perch_case_study_button_text = get_field('perch_case_study_button_text');

    if ($perch_post_count % 2 == 0) {
      $even_or_odd_class = "even";
    } else {
        $even_or_odd_class = "odd";
    }


    if($perch_case_study_background_color) : ?>

        <article class="case-study <?php echo $even_or_odd_class; ?>" style="background-color: <?php echo $perch_case_study_background_color; ?>">
            <?php echo $even_or_odd_class; ?>
            <div class="row">

                <?php if(has_post_thumbnail()) : ?>
                    <div class="col-md-6">
                <?php else : ?>
                    <div class="col-12">
                <?php endif; ?>

                    <header>
                        <h3>
                            <?php echo get_the_title(); ?>
                        </h3>
                        <p>Category</p>
                    </header>
                    <ul class="tags d-flex">
                        <li class="text-sm text-uppercase">Design</li>
                        <li class="text-sm text-uppercase">Development</li>
                        <li class="text-sm text-uppercase">Strategy</li>
                    </ul>
                    <p class="excerpt">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <?php if($perch_case_study_button_text) : ?>
                        <p>
                            <button class="cta-btn"><?php echo $perch_case_study_button_text; ?></button>
                        </p>
                    <?php endif; ?>
                    </div>

                <?php if(has_post_thumbnail()) : ?>
                    <div class="featured-img col-md-6">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                
            </div>
        </article>

        <?php $perch_post_count++; ?>

    <?php endif; // if($perch_case_study_background_color) 
endwhile;
wp_reset_postdata(); 


