<?php get_header(); ?>
<main id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="col spacer-top"></div>		

		<!-- Swiper slider -->
		<?php include('inc-slider-home.php'); ?>

		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-8">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

	</article>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>