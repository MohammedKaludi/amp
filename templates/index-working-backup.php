<!doctype html>
<html amp>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>

	<style amp-custom>
	<?php $this->load_parts( array( 'style' ) ); ?>
	<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
</head>
<body>
<?php $this->load_parts( array( 'header-bar' ) ); ?>

<?php do_action( 'ampforwp_after_header', $this ); ?>

<main>
	<?php if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

		<div class="amp-wp-content">
			<h2 class="amp-wp-title"> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h2>

			<?php $content = get_the_content();?>
	        <p><?php echo wp_trim_words( $content , '15' ); ?></p>

		</div>

	<?php endwhile;  ?>

 
	<div class="amp-wp-content pagination-holder">
		<div id="pagination">
			<div class="next"><?php next_posts_link( 'Next &raquo;', 0 ) ?></div>
			<div class="prev"><?php previous_posts_link( '&laquo; Previous' ); ?></div>
			<div class="clearfix"></div>
		</div>
	</div>

	<?php endif; ?>
</main>

<?php do_action( 'amp_post_template_footer', $this ); ?>
</body>
</html>
