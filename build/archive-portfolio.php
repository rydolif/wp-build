
<?php get_header(); ?>

<main class="main main--achive">

	<section class="portfolio" id="portfolio">
		<div class="container">

			<div class="title">
				<h2>Портфолио</h2>
				<b>Наши работы</b>
			</div>

			<div class="filter__nav">
				<span>Выберите тип работ, что<br>Вас интересуют</span>

				<div id="filters" class="button-group"> 
					<button class="button btn is-checked" data-filter="*">Все</button>
					<button class="button btn" data-filter=".building">Строительство</button>
					<button class="button btn" data-filter=".repairs">Ремонт</button>
					<button class="button btn" data-filter=".network">Инженерные сети</button>
					<button class="button btn" data-filter=".electrical">Електромонтаж</button>
				</div>
			</div>

			<div class="grid">

				<?php
		              $args = array(
		                'post_type' => 'portfolio',
		                'posts_per_page' => -1,
		              );

		              $query = new WP_Query( $args );

		              while ( $query->have_posts() ): $query->the_post();
		        ?>
					<a href="<?php the_permalink(); ?>" class="element-item <?php the_field('id'); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						<span><?php the_field('text'); ?></span>
					</a>

				<?php
		            endwhile; wp_reset_postdata();
		        ?>
			</div>
			
		</div>
	</section>

	<?php get_template_part( 'parts/question' ); ?>

</main>

<?php get_footer(); ?>