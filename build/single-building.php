
<?php get_header(); ?>


	<main class="main">
		<section class="portfolio portfolio--page">
			<div class="container">


			<div class="title">
				<h2><?php the_title(); ?></h2>
			</div>
			
			<div class="page--partners">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
	

			</div>
		</section>
	</main>


<?php get_footer(); ?>