<?php
/**
 * 
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<header>
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x"> 
            <div class="post cell small-12">
                <h1>Work</h1>
            </div>
        </div>
    </div>
</header>

<section id="more-work" class="work-row" >
  <div class="grid-container fluid">
      <div class="grid-x grid-margin-x"> 
          <div class="post cell small-12">
              <h2>Case Studies</h2>
          </div>
      </div>
  </div>

  <div class="grid-container fluid">
      <div class="grid-x grid-margin-x">              
         <?php $thePostID = 49;
      
              $args3 = array (
                   'category_name'      => 'featured',
              );
      
           // The Query
           $query = new WP_Query( $args3 ); ?>
           <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            
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
              
               <?php endwhile; 
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
               <?php endif; ?>
                      
            </div>
      </div>
</section>

<section id="more-work" class="work-row" >
  <div class="grid-container fluid">
      <div class="grid-x grid-margin-x"> 
          <div class="post cell small-12">
              <h2>Web Design</h2>
          </div>
      </div>
  </div>

  <div class="grid-container fluid">
      <div class="grid-x grid-margin-x">              
         <?php $thePostID = 49;
      
              $args3 = array (
                   'category_name'      => 'Web Design',
                   'offset'      => '1',
                   'post__not_in' => array(39)
              );
      
           // The Query
           $query = new WP_Query( $args3 ); ?>
           <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            
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
              
               <?php endwhile; 
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
               <?php endif; ?>
                      
            </div>
      </div>
</section>

<section id="more-work" class="work-row" >
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x"> 
            <div class="post cell small-12">
                <h2>UX Design</h2>
            </div>
        </div>
    </div>

    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x">              
           <?php
        
                $args4 = array (
                     'category_name'      => 'UX Design',
                );
        
             // The Query
             $query = new WP_Query( $args4 ); ?>
             <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              
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
                
                 <?php endwhile; 
                 wp_reset_postdata();
                 else : ?>
                 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                 <?php endif; ?>
                        
              </div>
        </div>
</section>



<?php get_footer();
