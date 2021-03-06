<?php
/**
 * Partial template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// ACF variables

/* About Section */
$perch_home_about_section_content = get_field('perch_home_about_section_content');
// slider text content
$perch_home_about_show_slider = get_field('perch_home_about_show_slider');
?>


<?php // echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

<?php if($perch_home_about_section_content) : ?>

	<section class="about">
		<div class="row">

				<?php if($perch_home_about_show_slider) {
					echo '<div class="col-lg-6 d-flex justify-content-center">';
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
					<div class="col-lg-6">
						<div class="about-slider-wrap">
							<ul class="about-slider">

								<?php if($perch_home_about_slide_content_1) : ?>
									<li class="about-slider__slide position-relative">
										<div class="about-slider__slide-text">
											<?php echo $perch_home_about_slide_content_1; ?>
										</div>

										<?php if($perch_home_about_slide_img_1) {
											echo wp_get_attachment_image( $perch_home_about_slide_img_1, 'large', "", ["class" => "about-slider__slide-image"] ); 
										} ?>

									</li>
								<?php endif; ?><!-- Slide -->

								<?php if($perch_home_about_slide_content_2) : ?>
									<li class="about-slider__slide">
										<div class="about-slider__slide-text">
											<?php echo $perch_home_about_slide_content_2; ?>
										</div>

										<?php if($perch_home_about_slide_img_2) {
											echo wp_get_attachment_image( $perch_home_about_slide_img_2, 'large', "", ["class" => "about-slider__slide-image"] ); 
										} ?>
									</li>
								<?php endif; ?><!-- Slide -->

								<?php if($perch_home_about_slide_content_3) : ?>
									<li class="about-slider__slide">
										<div class="about-slider__slide-text">
											<?php echo $perch_home_about_slide_content_3; ?>
										</div>

										<?php if($perch_home_about_slide_img_3) {
											echo wp_get_attachment_image( $perch_home_about_slide_img_3, 'large', "", ["class" => "about-slider__slide-image"] ); 
										} ?>
									</li>
								<?php endif; ?><!-- Slide -->

							</ul>
						</div>
					</div> <!-- END .col-lg-6 -->

				<?php endif; // end if $perch_home_about_show_slider ?>

		</div><!-- END .row -->

	</section>

<?php endif; ?>

