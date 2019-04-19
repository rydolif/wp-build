
<?php get_header(); ?>


	<main class="main">
		<section class="portfolio portfolio--page">
			<div class="container">


			<div class="title">
				<h2><?php the_title(); ?></h2>
			</div>
			
			<div class="page--partners">
				<?php 
					$img = get_field('img');

					if( !empty($img) ): ?>

						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />

				<?php endif; ?>
				<?php the_field('text'); ?>
			</div>

			</div>
		</section>
	</main>


<?php get_footer(); ?>