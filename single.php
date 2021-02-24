<?php
/*  Single posts and attachments with Cool Navigation */
?>
  
<?php get_header(); ?>
  
    <div class="container-fluid w-100">
        <div class="row"">
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
        	<div class="container-fluid text-center py-5 bg-warning d-flex flex-column justify-content-end align-items-center" style="min-height: 320px;">
        		<h1><?php the_title(); ?></h1>
        	</div>

        	<div class="container mt-5 py-5">
        		<?php the_content(); ?>
        	</div>            
        	
            
  		
            <!-- Previous/next post navigation -->
            <div class="container mt-5 py-5 px-0" style="border-top: 1px solid #efefef;">
            
	            <div class="row">
	            	<div class="col-5">
	            	    <?php next_post_link( '%link', '<i class="fas fa-angle-double-left"></i>  %title', TRUE ); ?>         
		            </div>
		            
		            <div class="col-2 text-center">
	            	    <a href="<?php echo get_option("siteurl"); ?>/blog">
	            	    	<i class="fas fa-th-large"></i>
	            	    </a>       
		            </div>

		            <div class="col-5 text-right">
		            	<?php previous_post_link( '%link', '%title <i class="fas fa-angle-double-right"></i>', TRUE ); ?>
		            </div>
	            </div>
            </div> 
            <!-- //end Previous/next post navigation -->
  

  		<?php
        // End the loop.
        endwhile;
        ?>
  
        </div>
    </div>
  
<?php get_footer(); ?>