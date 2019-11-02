<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article class="post cell small-6 medium-3" id="post-<?php the_ID(); ?>">
	 <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="project">
	      <div class="work-img">
		  	<?php the_post_thumbnail( 'home-work-size' ); ?>
	      </div>
	      <div class="work-info">
	          <h3><?php the_title_attribute(); ?></h3>	
	          <span class="divider"></span>
	            <span class="info">
	              <strong>C:</strong> <?php
	                $mykey_values = get_post_custom_values( 'Client' );
	                  foreach ( $mykey_values as $key => $value ) {
	                    echo "$value"; 
	                }
	              ?><br />
	              <strong>T:</strong> <?php
	                $mykey_values = get_post_custom_values( 'project-type' );
	                  foreach ( $mykey_values as $key => $value ) {
	                    echo "$value"; 
	                }
	              ?>
	            </span>
	      </div>
	 </a>
</article>
