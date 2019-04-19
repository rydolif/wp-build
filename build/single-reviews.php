
<?php get_header(); ?>


	<main class="main">
		<section class="portfolio portfolio--page">
			<div class="container">


			<div class="title">
				<h2><?php the_title(); ?></h2>
			</div>
			
			<div class="page--partners">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				<p>Заказчик: <b><?php the_field('name'); ?></b></p>
				<p>Место положения: <?php the_field('place'); ?></p>
				<p>Дата завершения робот: <?php the_field('date'); ?></p>
				<br><br>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
				<div class="reviews__slider">
					<?php if( have_rows('gallery') ): ?>

						<?php while( have_rows('gallery') ): the_row(); 
							$image = get_sub_field('image');
						?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
	

			</div>
		</section>
	</main>


<?php get_footer(); ?>