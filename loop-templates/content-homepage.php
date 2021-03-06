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

    // ACF variables

    /* About Section */
    $perch_home_about_section_content = get_field('perch_home_about_section_content');
    // slider text content
    $perch_home_about_show_slider = get_field('perch_home_about_show_slider');
    $perch_home_about_slide_content_1 = get_field('perch_home_about_slide_content_1');
    $perch_home_about_slide_content_2 = get_field('perch_home_about_slide_content_2');
    $perch_home_about_slide_content_3 = get_field('perch_home_about_slide_content_3');
    $perch_home_about_slide_content_4 = get_field('perch_home_about_slide_content_4');
    // slide images
    $perch_home_about_slide_img_1 = get_field('perch_home_about_slide_img_1');
    $perch_home_about_slide_img_2 = get_field('perch_home_about_slide_img_2');
    $perch_home_about_slide_img_3 = get_field('perch_home_about_slide_img_3');
    $perch_home_about_slide_img_4 = get_field('perch_home_about_slide_img_4');
}


?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
