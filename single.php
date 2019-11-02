<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
            <?php do_action('foundationPress_post_before_entry_content'); ?>
            <div class="entry-content">  
			    <header <?php $mykey_values = get_post_custom_values( 'case-study' );
                                  foreach ( $mykey_values as $key => $value ) {
                                    echo "class='work-case-study'"; 
                                  }
                            ?>>
                    <hgroup>
                        <h1 class="entry-title"><?php the_title(); ?></h1>

                        <div id="project-details">
                            <span class="project-label">Client:</span>

                            <?php
                                $mykey_values = get_post_custom_values( 'Client' );
                                  foreach ( $mykey_values as $key => $value ) {
                                    echo "$value"; 
                                  }
                            ?>&nbsp;&nbsp;&nbsp;

                            <span class="project-label">Role:</span>


                            <?php
                                $mykey_values = get_post_custom_values( 'Roles' );
                                  foreach ( $mykey_values as $key => $value ) {
                                    echo "$value"; 
                                  }
                            ?>&nbsp;&nbsp;&nbsp;

                            <span class="project-label">Year:</span>


                            <?php
                                $mykey_values = get_post_custom_values( 'Year' );
                                  foreach ( $mykey_values as $key => $value ) {
                                    echo "$value"; 
                                  }
                            ?>

                            <?php
                                $mykey_values = get_post_custom_values( 'case-study' );
                                  foreach ( $mykey_values as $key => $value ) {
                                    echo "<div class='case-study'>$value</div>"; 
                                  }
                            ?>
                        </div>
                    </hgroup>


                    <?php if ( has_post_thumbnail() ): ?>
                    	<div class='featured-img-frame <?php
                            $mykey_values = get_post_custom_values( 'Template' );
                              foreach ( $mykey_values as $key => $value ) {
                                echo "$value"; 
                              }
                        ?>' id='featured-1'>
                        	<?php get_template_part( 'template-parts/featured-image' ); ?>
                    	</div>
                    <?php endif; ?>

                    <?php if( class_exists('Dynamic_Featured_Image') ):
					    global $dynamic_featured_image;
					    global $post;
					     $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );

					     if ( $featured_images ): ?>

					            <?php foreach( $featured_images as $images ): ?>
					            	<div class="secondary-screen">
						                 <div class='featured-img-frame mobile support' id='featured-2'>
						                   <img src="<?php echo $images['full'] ?>" alt="">
						                 </div>
						            </div>
					            <?php endforeach; ?>
					        <?php
					        endif;
					endif; ?>

                    <?php previous_post_link('%link', '', TRUE, '6'); ?>
                    <?php next_post_link( '%link', '', TRUE, '6' ); ?>
                    
                </header>

                <div class="screen-details">
                    <div class="grid-x">
                      <div class="cell medium-12">
                          <h6>Featured screen:</h6>

                            <?php
                                $screen = get_post_custom_values( 'screen' );
                                  foreach ( $screen as $key => $value ) {
                                    echo "$value"; 
                                  }
                            ?>

                          <h6>Project Colors:</h6>

                          <?php
                            $colors = get_post_meta($post->ID, "hex", false);
                            if ($colors[0]=="") { ?>
                                                    
                            <?php } else { ?>
                                                                        
                                <?php foreach($colors as $colors) {
                                echo '<div class="color" style="background:'.$colors.';"></div>';
                                } ?>
                                                               
                          <?php } ?>
                      </div>
                    </div>
                </div>

            
    			<div class="row description">
    				<div class="grid-container">
					  <div class="grid-x grid-margin-x">
					    <div class="cell medium-3">
					    	<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
					    </div>
					  </div>
					</div>
                    

                	<div class="large-12 text-left columns">
                		<?php the_content(); ?>
                     </div>
                </div>
        </article>
    <?php endwhile;?>
        
<?php get_footer();?>
