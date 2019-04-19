
<?php get_header(); ?>


	<main class="main">
		<section class="portfolio portfolio--page">
			<div class="container">


			<div class="title">
				<h2><?php the_title(); ?></h2>
			</div>
				<div class="grid">

					<?php if( have_rows('list') ): 
						while( have_rows('list') ): the_row(); 
							
							$img = get_sub_field('img');
					?>
						<a href="<?php echo $img['url']; ?>" class="element-item" data-fancybox="gallery">
							<img src="<?php echo $img['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</a>
						
					<?php endwhile; endif; ?>

				</div>

			</div>
		</section>
	</main>


<?php get_footer(); ?>