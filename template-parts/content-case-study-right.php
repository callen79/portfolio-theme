<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article class="post right" id="post-<?php the_ID(); ?>">  
	<div class="grid-x grid-margin-x">
	    <div class="cell small-12 medium-12 large-4">
	        <div class="post-content">

	            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	                    
	                    <?php the_excerpt(); ?>

	            <a href="<?php the_permalink() ?>" class="button primary round wacom hollow" data-text="View project">View project</a>
	        </div> 
	    </div>

	    <div class="cell auto">
	        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">  
	            <div class="ipad">
	                <figure>
	                    <?php the_post_thumbnail('fp-xlarge'); ?>
	                </figure>
	            </div>
	        </a>
	    </div>
	</div>      
</article>
