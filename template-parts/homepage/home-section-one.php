<?php
/* 
* Homepage template - This part appears directly below the Hero
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// ACF variables
$perch_home_about_section_content = get_field('perch_home_about_section_content');
$perch_home_about_tablet_section = get_field('perch_home_about_tablet_section');
// slider text content
$perch_home_about_show_slider = get_field('perch_home_about_show_slider');




$perch_featured_cs_args = array(  
    'post_type' => 'case-studies',
    'post_status' => 'publish',
	'category_name' => 'featured',
    'posts_per_page' => 1, 
);

// Query the Case Studies 
$perch_ft_case_study_query = new WP_Query( $perch_featured_cs_args );


if($perch_ft_case_study_query->have_posts()) : 

while ( $perch_ft_case_study_query->have_posts() ) : $perch_ft_case_study_query->the_post(); ?>

<div class="hero-featured-case-study d-flex position-absolute">
	<div class="text d-flex align-items-end">
		<div>
			<p class="text-right m-0 mb-2"><i class="fa fa-arrow-right text-black"></i></p>
			<h3 class="text-md text-right m-0"><?php echo get_the_title(); ?></h3>
			<p class="m-0 text-right"><a class="cta-btn text-primary">See What We Did.</a></p>
		</div>
	</div>
	<?php if(has_post_thumbnail()) {
		echo get_the_post_thumbnail($post_id,'medium');
	} ?>
</div>


<?php endwhile;
wp_reset_postdata(); 

endif; 

// Main Section below Hero
if($perch_home_about_section_content) : ?>

	<section class="about" id="about">
		<div class="row">

				<?php if($perch_home_about_show_slider) {
					echo '<div class="about-text-wrap col-xl-6 d-flex justify-content-center align-items-center p-0">';
				} ?>

				<div class="about-section__text">
					<?php echo $perch_home_about_section_content; ?>
				</div>

				<?php if($perch_home_about_show_slider) :
					echo '</div>'; // END .col-lg-6
					

					// ACF Fields for Slider
					$perch_home_about_slide_content_1 = get_field('perch_home_about_slide_content_1');
					$perch_home_about_slide_content_2 = get_field('perch_home_about_slide_content_2');
					$perch_home_about_slide_content_3 = get_field('perch_home_about_slide_content_3');
					$perch_home_about_slide_content_4 = get_field('perch_home_about_slide_content_4');
					// slide images
					$perch_home_about_slide_img_1 = get_field('perch_home_about_slide_img_1');
					$perch_home_about_slide_img_2 = get_field('perch_home_about_slide_img_2');
					$perch_home_about_slide_img_3 = get_field('perch_home_about_slide_img_3');
					$perch_home_about_slide_img_4 = get_field('perch_home_about_slide_img_4');
				?>
					<div class="col-xl-6 p-0 about-slider-col">
						
						<?php if($perch_home_about_tablet_section) : ?>
							<div class="tablet-section position-absolute">
								<?php echo $perch_home_about_tablet_section; ?>
							</div>
						<?php endif; ?>
						
						<div class="about-slider-wrap">
						
							<ul class="about-slider">

								<?php if($perch_home_about_slide_content_1) : ?>
									<li class="slider__slide">
										<div class="slider__slide-text">
											<?php echo $perch_home_about_slide_content_1; ?>
										</div>

										<?php if($perch_home_about_slide_img_1) {
											echo wp_get_attachment_image( $perch_home_about_slide_img_1, 'large', "", ["class" => "about-slider__slide-image"] ); 
										} ?>

									</li>
								<?php endif; ?><!-- Slide -->

								<?php if($perch_home_about_slide_content_2) : ?>
									<li class="slider__slide">
										<div class="slider__slide-text">
											<?php echo $perch_home_about_slide_content_2; ?>
										</div>

										<?php if($perch_home_about_slide_img_2) {
											echo wp_get_attachment_image( $perch_home_about_slide_img_2, 'large', "", ["class" => "about-slider__slide-image"] ); 
										} ?>
									</li>
								<?php endif; ?><!-- Slide -->

								<?php if($perch_home_about_slide_content_3) : ?>
									<li class="slider__slide">
										<div class="slider__slide-text">
											<?php echo $perch_home_about_slide_content_3; ?>
										</div>

										<?php if($perch_home_about_slide_img_3) {
											echo wp_get_attachment_image( $perch_home_about_slide_img_3, 'large', "", ["class" => "about-slider__slide-image"] ); 
										} ?>
									</li>
								<?php endif; ?><!-- Slide -->

								<?php if($perch_home_about_slide_content_4) : ?>
									<li class="slider__slide">
										<div class="slider__slide-text">
											<?php echo $perch_home_about_slide_content_4; ?>
										</div>

										<?php if($perch_home_about_slide_img_4) {
											echo wp_get_attachment_image( $perch_home_about_slide_img_4, 'large', "", ["class" => "about-slider__slide-image"] ); 
										} ?>
									</li>
								<?php endif; ?><!-- Slide -->

							</ul>
						</div>
					</div> <!-- END .col -->

				<?php endif; // end if $perch_home_about_show_slider ?>

		</div><!-- END .row -->

	</section>

<?php endif; ?>

