<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : ?>
<header class="header">

</header>


<div class="col spacer-top"></div>


<!-- retrieve the featured image  -->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', array( 'class' => '' ) );?>

<div class="jumbotron m-0 p-0">

<div class="" style="position:absolute; width: 100%; height: 500px; background-color: rgba(0,0,0,0.3);">
	<div class="m-0 p-0 w-100 h-100 d-flex align-items-center">
		<div class="text-center w-100"><h1 class="text-white"> <?php printf( esc_html__( 'Search Results for: %s', 'broucek' ), get_search_query() ); ?> </h1></div>
	</div>
</div>

<?php if ( has_post_thumbnail() ) : ?>
<div class="d-flex align-items-center" style="height:500px; background: url('<?php echo $backgroundImg[0]; ?>') center ; background-size: cover;">
<?php else : ?>
<div class="m-0 p-0 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-cello.png'); background-position: center; background-size: cover; height:500px; ">
<?php endif; ?>
</div>
</div>
<!-- //end retrieve the featured image  -->



<!-- Content -->
    <div class="container-fluid  contentGutemberg edge--both mb-5">
      <div class="col-md-8 offset-md-2 my-5 py-5">


<?php while ( have_posts() ) : the_post(); ?>

<div>

  <div>
    <a href="<?php echo get_page_link(); ?>">
    <h3 class=""><?php the_title(); ?></h3>
    </a>
  </div>


  <div class="gridbox-2-2">
  <span><?php echo the_excerpt(); ?></span>
  </div>

</div>


<?php endwhile; ?>

<?php else : ?>





  <div class="col spacer-top"></div>


  <!-- retrieve the featured image  -->
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', array( 'class' => '' ) );?>

  <div class="jumbotron m-0 p-0">

  <div class="" style="position:absolute; width: 100%; height: 500px; background-color: rgba(0,0,0,0.3);">
  	<div class="m-0 p-0 w-100 h-100 d-flex align-items-center">
  		<div class="text-center w-100"><h1 class="text-white"> <?php printf( esc_html__( 'Search Results for: %s', 'broucek' ), get_search_query() ); ?> </h1></div>
  	</div>
  </div>

  <?php if ( has_post_thumbnail() ) : ?>
  <div class="d-flex align-items-center" style="height:500px; background: url('<?php echo $backgroundImg[0]; ?>') center ; background-size: cover;">
  <?php else : ?>
  <div class="m-0 p-0 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-cello.png'); background-position: center; background-size: cover; height:500px; ">
  <?php endif; ?>
  </div>
  </div>






<article id="post-0" class="post no-results not-found">
<header class="header">


</header>

<!-- Content -->
    <div class="container-fluid  mb-5">
      <div class="col-md-8 offset-md-2 mb-5 pb-2 text-center">


        <h1 class="my-5"><?php esc_html_e( 'Nothing Found', 'broucek' ); ?></h1>


        <h6 class="text-dark mt-3"><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'broucek' ); ?></h6>

        <div class="py-5"><?php get_search_form(); ?></div>

</article>

<?php endif; ?>


      </div>
    </div>
<!-- end// Content -->

</main>

<?php get_footer(); ?>
