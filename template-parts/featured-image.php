<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>

		<img class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'fp-small' ); ?>, small], [<?php the_post_thumbnail_url( 'fp-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'fp-large' ); ?>, large], [<?php the_post_thumbnail_url( 'fp-xlarge' ); ?>, xlarge]" />

<?php endif; ?>
