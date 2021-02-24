<!-- Swiper -->
<?php
// Check value exists.

if( have_rows('header_slider') ):
// Loop through rows.
?>

<div class="swiper-container swiper-home bg-success panel swiper_header swiper-slider swiper-scale-effect"><!-- fx -->
<div class="swiper-wrapper">
	<?php while( have_rows('header_slider') ): the_row();

	$video = get_sub_field('video');
	$image = get_sub_field('image');
	$headline = get_sub_field('headline');
	$tagline = get_sub_field('tagline');
	$link = get_sub_field('link');
	$button_name = get_sub_field('button_name');
	?>
	<div class="swiper-slide">
		<div class="" style="position:absolute; width: 100%; height: 100%; background-color: rgba(0,0,0,0.15); z-index:9;">
			
				
					
						<div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
							
							<?php if( $headline ): ?>
							<div class="swiper-headline pt-5 text-center">
								<?php echo $headline; ?>
							</div>
							<?php endif; ?>

							<?php if( $tagline ): ?>
							<div class="swiper-description mt-3 mb-3 mb-md-4 px-5 d-none d-md-block">
								<?php echo $tagline; ?>
							</div>
							<?php endif; ?>

							<?php if( $link ): ?>
							<div class="swiper-button">
								<a href="<?php echo esc_url( $link['url'] ); ?>"><button type="button" class="btn btn-outline-light btn-lg rounded-pill px-4"><?php if( $button_name ): ?><?php echo $button_name; ?><?php endif; ?></button></a>
							</div>
							<?php endif; ?>

						</div>
			
		</div>
		
		<div class="swiper-slide-cover" style="width: 100%; height: auto;">
			<?php if($video): //prioritise video over image ?>
			<video playsinline autoplay muted loop>
				<source src="<?php echo $video['url']; ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<?php else: ?>
			
				<?php if($image): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
				<?php else: ?>
					<div style="width:400px, height: 400px, background: red:"></div>
					<!-- <img src="<?php echo get_template_directory_uri() ?>/img/australian-grape-wine-harvest.jpg" alt="Australian Grape & Wine"/> -->
				<?php endif; ?>

			<?php endif; ?>
		</div>
	</div>
	<?php endwhile; ?>
</div>
<!-- Add Pagination -->
<div class="swiper-pagination"></div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<?php
else :
// Do something...
endif;
?>




</div>
<!-- //end Swiper -->