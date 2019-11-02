<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>

		<img class="featured-hero" role="banner" data-interchange="[<?php echo $images['fp-small'] ?>, small], [<?php echo $images['fp-medium'] ?>, medium], [<?php echo $images['fp-large'] ?>, large], [<?php echo $images['fp-xlarge'] ?>, xlarge]" />

<?php endif; ?>
