<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

	 <div class="main-wrap" id="page" role="main">
		<?php get_template_part( 'template-parts/featured-image' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		    <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		    <div class="entry-content">
		      <?php the_content(); ?>

		      <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		    </div>
		  </article>
	</div>
    <?php endwhile;?>
        
<?php get_footer();?>

