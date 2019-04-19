
<?php
	/**
		* Template name: Partners
	*/
?>

<?php get_header(); ?>

<main class="main main--achive">

	<section class="partners"  id="partners">
		<div class="container">
			<div class="title">
				<h2>Cотрудничество</h2>
				<b>Мы сотрудничаем</b>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

			<div class="title">
				<h2>Наши партнеры</h2>
				<b>Мы сотрудничаем</b>
			</div>

			<div class="partners__slider">
				<?php
	              $args = array(
	                'post_type' => 'partners',
	                'posts_per_page' => -1,
	              );

	              $query = new WP_Query( $args );

	              while ( $query->have_posts() ): $query->the_post();

	            ?>
					<div class="partners__slider_slide">
						<?php echo get_the_post_thumbnail(); ?>
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn">
							Подробнее...
						</a>
					</div>
				<?php
                	endwhile; wp_reset_postdata();
          		?>
			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/question' ); ?>

</main>

<?php get_footer(); ?>