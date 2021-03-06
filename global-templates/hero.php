<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) || is_active_sidebar( 'herocanvas' ) ) : ?>

	<div class="wrapper" id="wrapper-hero">

        <div class="inner-hero h-100">

            <header>

                <?php get_template_part( 'sidebar-templates/sidebar', 'hero' ); ?>

                <?php get_template_part( 'sidebar-templates/sidebar', 'herocanvas' ); ?>

                <?php get_template_part( 'sidebar-templates/sidebar', 'statichero' ); ?>

            </header>

        </div>

	</div>

<?php endif; ?>
