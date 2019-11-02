<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer id="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
</footer>


<div class="reveal contact" id="contact" data-close-on-click="true" data-animation-in="slide-in-right" data-animation-out="slide-out-right" data-reveal>
  	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Desktop nav widgets") ) : ?>
	<?php endif;?>
	<button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	</button>
</div>


<script>


    
</script>

<?php wp_footer(); ?>

</body>
</html>