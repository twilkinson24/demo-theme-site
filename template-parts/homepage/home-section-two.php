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
    'order' => 'ASC', 
);

// Query the Case Studies 
$perch_case_study_query = new WP_Query( $perch_cs_args );

$perch_post_count = 1;


if($perch_case_study_query->have_posts()) : ?>

<section class="case-studies" id="work"> 
    
<?php

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

        <article class="case-study d-flex align-items-center" style="background-color: <?php echo $perch_case_study_background_color; ?>">
            <div class="w-100 h-100 overlay">
                <div class="case-study-wrap">
                    <div class="row <?php echo $even_or_odd_class; ?>">       

                    <?php if(has_post_thumbnail()) : ?>
                        <div class="col-sm-6 p-0">
                            <div class="featured-img">
                                <?php echo get_the_post_thumbnail(); ?>
                            </div>
                        </div> <!-- end .col -->
                        <div class="col-sm-6 d-flex align-items-center p-0">

                    <?php else : ?>
                        <div class="col-12 p-0">
                    <?php endif; ?>      

                        <div class="case-study__text-content">
                            <header>
                                <h3>
                                    <?php echo get_the_title(); ?>
                                </h3>

                                <?php 
                                    $perch_categories = get_the_category();
        
                                    if ( ! empty( $perch_categories ) ) {
                                        if($perch_categories[0]->name !== 'Featured') {
                                            echo '<p class="text-black font-weight-bold text-md">' . esc_html( $perch_categories[0]->name ) . '</p>';   
                                        } else {
                                            echo '<p class="text-black font-weight-bold text-md">' . esc_html( $perch_categories[1]->name ) . '</p>';  
                                        }
                                    }
                                ?>
                            </header>

                            <ul class="tags d-flex list-unstyled text-black">    
                            <?php
                                $tags = get_tags('post_tag'); //taxonomy=post_tag
                                
                                if ( $tags ) :
                                    foreach ( $tags as $tag ) : ?>
                                        <li class="text-sm text-uppercase"><span class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></span></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>



                            <p class="excerpt">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <?php if($perch_case_study_button_text) : ?>
                                <p>
                                    <button class="cta-btn text-black"><?php echo $perch_case_study_button_text; ?></button>
                                </p>
                            <?php endif; ?>
                            </div>
                        </div><!-- end .col -->
                    </div>
                </div> <!-- end .case-study__wrap -->
            </div> <!-- end overlay -->
        </article>

        <?php $perch_post_count++; ?>

    <?php endif; // if($perch_case_study_background_color) 
endwhile;
wp_reset_postdata(); 
?>

</section>

<?php 
endif; 
