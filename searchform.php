<?php
/**
 * Template for displaying search forms in Four Oh Five
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="form-inline my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text">
      <?php echo _x( 'Search for:', 'label', 'four-oh-five' ); ?>
    </span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="form-control mr-sm-2" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'four-oh-five' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="btn btn-primary my-2 my-sm-0">
    <?php echo _x( 'Search', 'submit button', 'four-oh-five' ); ?>
  </button>
</form>
