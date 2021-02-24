<?php get_header(); ?>
<main id="content">
<article id="post-0" class="post not-found">
<header class="header">

</header>




<!-- retrieve the featured image  -->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', array( 'class' => '' ) );?>

<div class="jumbotron m-0 p-0">

<div class="" style="position:absolute; width: 100%; height: 500px; background-color: rgba(0,0,0,0.3);">
	<div class="m-0 p-0 w-100 h-100 d-flex align-items-center">
		<div class="text-center w-100"><h1 class="text-white">404</br>We couldn't find this page</h1></div>
	</div>
</div>

<?php if ( has_post_thumbnail() ) : ?>
<div class="d-flex align-items-center" style="height:500px; background: url('<?php echo $backgroundImg[0]; ?>') center ; background-size: cover;">
<?php else : ?>
<div class="m-0 p-0 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/aerial-adelaide.jpg'); background-position: center; background-size: cover; height:500px; ">
<?php endif; ?>
</div>
</div>
<!-- //end retrieve the featured image  -->




  <!-- Content -->
  		<div class="container-fluid mb-5">
  			<div class="col-md-8 offset-md-2 text-center">


          <h3><?php esc_html_e( 'The page you are looking for may have been removed or relocated.', 'broucek' ); ?></h3>
          <h6 class="text-dark my-4"><?php esc_html_e( 'From here you can use the top menu or try a search instead.', 'broucek' ); ?></h6>

          <div class="pb-3 mb-5"><?php get_search_form(); ?></div>



  			</div>
  		</div>
  <!-- end// Content -->






</article>
</main>

<?php get_footer(); ?>
