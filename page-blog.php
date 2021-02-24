<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




<div class="col spacer-top"></div>





<!-- Flexible Content -->
<?php /*include('flexible-content.php');*/ ?>
<!-- //end Flexible Content -->


<div class="container-fluid text-center py-5 bg-light  d-flex flex-column justify-content-end align-items-center" style="min-height: 320px;">
	<h1><?php the_title(); ?></h1>
</div>


<!-- Cool Loop with pagination -->
      <div class="container mt-5 p-5">
        <div class="row">


        	<?php 
        	$args = array( 'cat' => '', 'posts_per_page' => 2, 'order' => 'DESC', 'paged' => $paged, );

        	// the query
        	$the_query = new WP_Query( $args ); ?>
        	 
        	<?php if ( $the_query->have_posts() ) : ?>
        	 
        	    <!-- pagination here -->
        	 
        	    <!-- the loop -->
        	    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        	        <div class="col-12 mb-3">
	        	        <a class="text-dark" href="<?php echo get_permalink(); ?>">
	        	        <h3><?php the_title(); ?></h3>
	        	        </a>
	        	        <?php the_excerpt(); ?>
        	        </div>

        	    <?php endwhile; ?>
        	    <!-- end of the loop -->
        	 
        	    <!-- pagination here -->



                <!-- Previous/next post navigation -->
                <div class="container mt-5 py-5 px-0" style="border-top: 1px solid #efefef;">
                
    	            <div class="row">
    	            	<div class="col-6">
    	            	    <?php previous_posts_link( __( '<i class="fas fa-angle-double-left"></i> Newer Entries', 'textdomain' ) ); ?>         
    		            </div>

    		            <div class="col-6 text-right"> 
    		            	<?php next_posts_link( __( 'Older Entries <i class="fas fa-angle-double-right"></i>', 'textdomain' ), $the_query->max_num_pages ); ?>
    		            </div>
    	            </div>
                </div> 
                <!-- //end Previous/next post navigation -->



        	 
        	    <?php wp_reset_postdata(); ?>
        	 
        	<?php else : ?>
        	    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        	<?php endif; ?>


        </div>
      </div>
<!-- //end Cool Loop with pagination -->





<?php endwhile; endif; ?>
<?php get_footer(); ?>