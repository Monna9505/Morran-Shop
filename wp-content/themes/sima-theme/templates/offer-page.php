<?php
/**
 * Template Name: Offer
 */
include(locate_template('components/shared/header.php'));
?>
<main id="primary" class="offer__page <?php echo WC()->cart->is_empty() ? 'empty__cart' : ''; ?>">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<h1><?php echo __( 'Offer', 'sima-theme' ); ?></h1>
				<?php echo the_content(); ?>
			</div>
		</article>
	</div>
</main>
 <?php include(locate_template('components/shared/footer.php'));