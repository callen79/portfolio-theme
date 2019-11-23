<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article class="post" id="post-<?php the_ID(); ?>">  

    <div class="grid-x grid-margin-x">
        <div class="cell auto">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">  
                <div class="ipad">
                    <figure>
                        <?php the_post_thumbnail('fp-xlarge'); ?>
                    </figure>
                </div>
            </a>
        </div>
    
        <div class="cell small-12 medium-12 large-4">
            <div class="post-content">

                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                
                <div class="post-meta">
                    <span>C:
                    <?php $mykey_values = get_post_custom_values( 'Client' );
                        foreach ( $mykey_values as $key => $value ) {
                        echo "<strong>$value</strong>"; 
                        }
                    ?></span>

                    <span>Y:
                    <?php $mykey_values = get_post_custom_values( 'Year' );
                        foreach ( $mykey_values as $key => $value ) {
                        echo "<strong>$value</strong>"; 
                        }
                    ?></span>
                </div> 
                        
                <?php the_excerpt(); ?>
                
                <aside>
                    <a href="<?php the_permalink() ?>" class="button primary round wacom hollow" data-text="View project">View project</a>
                </aside>
            </div> 
        </div>
    </div>      

</article>
