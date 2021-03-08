<?php
/**
 * Partial template for content in loop-templates/content-homepagepage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* 
* Homepage template - This part appears directly Above the Footer and Below the "Our Clients" section
*/


// ACF Fields 
$perch_home_team_section_content = get_field('perch_home_team_section_content');
$perch_home_show_team_slider = get_field('perch_home_show_team_slider');

if($perch_home_team_section_content) : ?>

    <section class="our-team" id="people">
        <div class="row">
            <div class="col-xl-6 p-0 d-flex justify-content-end align-items-center">
                <div class="our-team__text-content">
                    <?php echo $perch_home_team_section_content; ?>
                </div>
            </div>

            <!-- Team Slider -->
            <?php if($perch_home_show_team_slider) : ?>

                <?php // Query Team CPT

                $perch_team_slider_args = array(  
                    'post_type' => 'team',
                    'post_status' => 'publish',
                    'orderby' => 'id', 
                    'order' => 'ASC', 
                );
                $perch_team_slider_query = new WP_Query( $perch_team_slider_args );

                if($perch_team_slider_query->have_posts()) : ?>

                    <div class="col-xl-6 p-0">
                        <div class="our-team__slider-wrap"> 
                            <ul class="team-slider">
                            
                            <?php
                            while ( $perch_team_slider_query->have_posts() ) : $perch_team_slider_query->the_post(); 

                                // Team Member ACF 
                                $perch_team_member_name= get_field('perch_team_member_name');
                                $perch_team_member_job_title= get_field('perch_team_member_job_title');
                                $perch_team_member_description= get_field('perch_team_member_description');
                                $perch_team_member_image= get_field('perch_team_member_image');
                                $perch_team_member_avatar= get_field('perch_team_member_avatar');
                                // Social media 
                                $perch_team_member_twitter= get_field('perch_team_member_twitter');
                                $perch_team_member_fb = get_field('perch_team_member_fb');
                                $perch_team_member_instagram= get_field('perch_team_member_instagram');
                            ?>
                                <li class="slider__slide position-relative">
                                    <div class="slider__slide-text">

                                        <?php if($perch_team_member_avatar) : ?>
                                            <div class="member-avatar">
                                                <?php echo wp_get_attachment_image( $perch_team_member_avatar, 'thumbnail', "", ["class" => "rounded-circle"] );  ?>
                                            </div>
                                        <?php endif;?>

                                        <h4><?php echo $perch_team_member_name; ?></h4>

                                        <?php if($perch_team_member_job_title) : ?>
                                            <h5 class="job-title"><?php echo $perch_team_member_job_title; ?></h5>
                                        <?php endif; ?>

                                        <?php if($perch_team_member_description) : ?>
                                            <div class="description d-none d-md-block"><?php echo $perch_team_member_description; ?></div>
                                        <?php endif; ?>

                                        <!-- social media -->
                                        <p class="d-flex mb-0 mt-4">
                                            <?php if($perch_team_member_twitter) : ?>
                                                <a href="<?php echo $perch_team_member_twitter; ?>" class="social-link">
                                                    <span class="sr-only">Twitter account</span>
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if($perch_team_member_fb) : ?>
                                                <a href="<?php echo $perch_team_member_fb; ?>" class="social-link">
                                                    <span class="sr-only">Facebook account</span>
                                                    <i class="fa fa-facebook-f"></i>
                                                    
                                                </a>
                                                <?php else : echo 'no'; ?>
                                            <?php endif; ?>
                                            <?php if($perch_team_member_instagram) : ?>
                                                <a href="<?php echo $perch_team_member_instagram; ?>" class="social-link">
                                                    <span class="sr-only">Instagram account</span>
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            <?php endif; ?>
                                        </p>

                                    </div>
                                    
                                    <?php if($perch_team_member_image) : ?>
                                        <div class="member-image position-absolute">
                                            <?php echo wp_get_attachment_image( $perch_team_member_image, 'large' );  ?>
                                        </div>
                                    <?php endif;?>
                                </li>

                            <?php
                                endwhile;
                                wp_reset_postdata(); 
                            ?>


                            </div><!-- end .team-slider -->
                        </div><!-- end .our-team__slider-wrap -->
                    </div><!-- end .col -->
                </div> <!-- end .row -->
                <?php endif; // if have posts ?>
                
            <?php endif; // if slider turned on ?>
    </div>
</section>
<?php endif; ?>


