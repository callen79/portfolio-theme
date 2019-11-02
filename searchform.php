<?php
/**
 * The template for displaying search form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


	<div id="search-container">
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			<?php do_action( 'foundationpress_searchform_top' ); ?>
				<input type="text" class="input-group-field" value="" name="s" id="input-search" placeholder="<?php esc_attr_e('Looking for something?', 'foundationpress'); ?>">

				<?php do_action( 'foundationpress_searchform_before_search_button' ); ?>
				<button type="submit" id="searchsubmit" value="<?php esc_attr_e('Search site', 'foundationpress'); ?>">GO</button>

			<?php do_action( 'foundationpress_searchform_after_search_button' ); ?>
		</form>
	</div>