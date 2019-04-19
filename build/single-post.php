
<?php get_header(); ?>


	<main class="main">
		<section class="article">
			<div class="container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="article__banner">
						<div class="article__title">
							<h1>
								<?php the_title(); ?>
							</h1>
							<a href="#"><b>Ко всем новостям</b></a>
						</div>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>

					<?php the_content(); ?>

				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>
	</main>


<?php get_footer(); ?>