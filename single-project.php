<?php
/**
 * Single Project CPT Template File
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section single-project-section">
	<div class="container" style="max-width: 960px;">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<header class="project-header" style="margin-bottom: 2.5rem; text-align: center;">
				<?php if ( function_exists( 'tintora_breadcrumbs' ) ) tintora_breadcrumbs(); ?>
				<h1 class="entry-title" style="margin-top: 1rem;"><?php the_title(); ?></h1>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div style="margin-bottom: 2.5rem; border-radius: var(--tintora-radius-md); overflow: hidden;">
					<?php the_post_thumbnail( 'tintora-hero' ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<?php
		endwhile;
		?>
	</div>
</div>

<?php get_template_part( 'template-parts/sections/cta' ); ?>

<?php
get_footer();
