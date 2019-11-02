<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>

<header id="homepage-hero" role="banner">	
    <hgroup class="show-for-medium-up">
        <div id="hero-title">
            <h1>UX Design Lead,<br />
              Developer <span>&amp;</span><br />
              Dude With a Vision</h1>
            <a href="about/" class="button primary round wacom hollow" data-text="Who is this dude?">Who is this dude?</a>
        </div>
    </hgroup>
    
</header>

<section id="featured" class="work-featured" role="main">  
    <h2>Case Studies</h2>
  
    <?php while ( have_posts() ) : the_post(); ?>
    
    <?php 
            $args1 = array (
                'category_name'    => 'featured',
                'posts_per_page'   => '1',
            );
            
            // The Query
            $query = new WP_Query( $args1 ); ?>
         <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        
         <article class="post" >
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
                            
                            <?php the_excerpt(); ?>

                      <a href="<?php the_permalink() ?>" class="button primary round wacom hollow" data-text="View project">View project</a>
                  </div> 
              </div>
            </div>
         </article>
        
         <?php endwhile; 
            wp_reset_postdata();
            else : ?>

            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>   

    <?php 
            $args2 = array (
                'category_name'    => 'featured',
                'posts_per_page'   => '1',
                'offset'      => '1'
            );
            
            // The Query
            $query = new WP_Query( $args2 ); ?>
         <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        
         <article class="post right" >
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
        
       <?php endwhile; 
            wp_reset_postdata();
            else : ?>

            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>   

    <?php 
            $args3 = array (
                'category_name'    => 'featured',
                'posts_per_page'   => '1',
                'offset'      => '2'
            );
            
            // The Query
            $query = new WP_Query( $args3 ); ?>
         <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        
         <article class="post" >
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
                            
                            <?php the_excerpt(); ?>

                      <a href="<?php the_permalink() ?>" class="button primary round wacom hollow" data-text="View project">View project</a>
                  </div> 
              </div>
            </div>
         </article>
        
         <?php endwhile; 
            wp_reset_postdata();
            else : ?>

            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>              
</section>

<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer(); ?>

