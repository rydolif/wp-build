

<?php get_header(); ?>

<main class="main">

	<section class="hero" id="hero">

		<div class="container hero-content__slider">
			<div>
				<div class="hero__title">
					<h1>Делаем все:</h1>
				</div>
				<div class="hero__pagination swiper-pagination"></div>
			</div>
			<div>
				<div class="hero__title">
					<h1>Делаем все:</h1>
				</div>
				<div class="hero__pagination swiper-pagination"></div>
			</div>
			<div>
				<div class="hero__title">
					<h1>Делаем все:</h1>
				</div>
				<div class="hero__pagination swiper-pagination"></div>
			</div>
            <div>
				<div class="hero__title">
					<h1>Делаем все:</h1>
				</div>
				<div class="hero__pagination swiper-pagination"></div>
			</div>
		</div>

		<div class="hero__slider">
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
			</div>
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
			</div>
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="">
			</div>
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="">
				<span>...все кроме кошки</span>
			</div>
		</div>
	</section>

	<section class="why" id="why">
		<div class="container">

			<div class="title">
				<h2>Почему мы?</h2>
				<b>Наши преимущества</b>
			</div>
			
			<div class="why__list">
				<div class="why__item">
					<div class="why__item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/why-1.svg" alt="">
					</div>
					<p>
						<b>Профессионально!</b>
						<br>Опыт работы мастеров
						<br>более десяти лет
					</p>
				</div>
				<div class="why__item">
					<div class="why__item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/why-2.svg" alt="">
					</div>
					<p>
						Работа <b>по официальному
						<br> договору</b> со сметой и графиком
						<br> работ. После подписания договора
						<br> <b>стоимость работ</b> под ключ
						<br> <b>не изменится</b>
					</p>
				</div>
				<div class="why__item">
					<div class="why__item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/why-3.svg" alt="">
					</div>
					<p>
						<b>Гарантия</b>
						<br> на выполненные работы
					</p>
				</div>
				<div class="why__item">
					<div class="why__item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/why-4.svg" alt="">
					</div>
					<p>
						<b>Отсутствие рисков.</b>
						<br>Вы платите только 
						<br>за сделанную работу
					</p>
				</div>
				<div class="why__item">
					<div class="why__item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/why-5.svg" alt="">
					</div>
					<p>
						<b>Экономия ваших денег.</b>
						<br>Материал со скидкой.
					</p>
				</div>
				<div class="why__item">
					<div class="why__item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/why-6.svg" alt="">
					</div>
					<p>
						<b>Согласуем с соседями</b>
						<br> все шумные работы
					</p>
				</div>
			</div>

		</div>
	</section>

	<section class="repairs" id="repairs">

		<div class="container repairs-content__slider">

	            <?php
                  $args = array(
                    'post_type' => 'repairs',
                    'posts_per_page' => 4,
                  );

                  $query = new WP_Query( $args );

                  while ( $query->have_posts() ): $query->the_post();

                ?>

					<div>
						<div class="title">
							<h2>Ремонт</h2>
							<b><?php the_title(); ?></b>
						</div>
						<div class="row">
							<div class="offset-lg-8 col-lg-4">
								<p><?php the_content(); ?></p>
								<a href="<?php the_permalink(); ?>"><b>Подробнее</b></a>
								<div class="repairs__pagination swiper-pagination"></div>
							</div>
						</div>
					</div>

                <?php
                  endwhile; wp_reset_postdata();
                ?>

		</div>

		<div class="repairs__slider">
			<?php
                  $args = array(
                    'post_type' => 'repairs',
                    'posts_per_page' => 4,
                  );

                  $query = new WP_Query( $args );

                  while ( $query->have_posts() ): $query->the_post();

            ?>
				<div class="img">
					<?php echo get_the_post_thumbnail(); ?>
				</div>
			<?php
                  endwhile; wp_reset_postdata();
               ?>
		</div>
	</section>

	<section class="building repairs" id="building">

		<div class="container building-content__slider">

			<?php
              $args = array(
                'post_type' => 'building',
                'posts_per_page' => 4,
              );

              $query = new WP_Query( $args );

              while ( $query->have_posts() ): $query->the_post();

            ?>
				<div>
					<div class="title">
						<h2>Строительство</h2>
						<b><?php the_title(); ?></b>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<p><?php the_content(); ?></p>
							<a href="<?php the_permalink(); ?>"><b>Подробнее</b></a>
						</div>
					</div>
				</div>
			<?php
                endwhile; wp_reset_postdata();
            ?>
		</div>

		<div class="building__slider">
			<?php
              $args = array(
                'post_type' => 'building',
                'posts_per_page' => 4,
              );

              $query = new WP_Query( $args );

              while ( $query->have_posts() ): $query->the_post();

            ?>
				<div class="img">
					<?php echo get_the_post_thumbnail(); ?>
				</div>
			<?php
                endwhile; wp_reset_postdata();
            ?>
		</div>
	</section>

	<section class="step" id="step">
		<div class="container">
			
			<div class="title">
				<h2>Как мы работаем?</h2>
				<b>Этапы сотрудничества</b>
			</div>

			<div class="step__list">
				<div class="step__item">
					<div class="step__item_number">1</div>
					<p>Ваш звонок, <br>заявка на почту <br>и встреча на <br>объекте.</p>
				</div>
				<div class="step__item">
					<div class="step__item_number">2</div>
					<p>Составление сметы <br>и графика ведения <br>работ</p>
				</div>
				<div class="step__item">
					<div class="step__item_number">3</div>
					<p>Согласование и <br>заключение <br>договора</p>
				</div>
				<div class="step__item">
					<div class="step__item_number">4</div>
					<p>Поставка <br>материала <br>на объект и <br>начало работ</p>
				</div>
				<div class="step__item">
					<div class="step__item_number">5</div>
					<p>Поэтапное <br>выполнение <br>работ</p>
				</div>
				<div class="step__item">
					<div class="step__item_number">6</div>
					<p>Вы оплачиваете <br>работы <br>поэтапно, согласно <br>договора, на <br>основании актов <br>выполненных работ</p>
				</div>
				<div class="step__item">
					<div class="step__item_number">7</div>
					<p>Уборка <br>помещения и <br>вывоз <br>строительного <br>мусора</p>
				</div>
				<div class="step__item">
					<div class="step__item_number">8</div>
					<p>Подписание акта <br>приемки. <br>Предоставление <br>гарантии</p>
				</div>

			</div>
		</div>
	</section>

	<section class="news repairs" id="news">

		<div class="container repairs-content__slider">

			<?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 4,
              );

              $query = new WP_Query( $args );

              while ( $query->have_posts() ): $query->the_post();

            ?>
				<div>
					<div class="title">
						<h2>Новости и Акции</h2>
						<b>Горячие предложения</b>
					</div>
					<div class="row">
						<div class="offset-lg-8 col-lg-4">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>"><b>Подробнее</b></a>
							<div class="repairs__pagination swiper-pagination"></div>
						</div>
					</div>
				</div>
			<?php
                endwhile; wp_reset_postdata();
            ?>

		</div>

		<div class="repairs__slider">
			<?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 4,
              );

              $query = new WP_Query( $args );

              while ( $query->have_posts() ): $query->the_post();

            ?>
				<div class="img">
					<?php echo get_the_post_thumbnail(); ?>
				</div>
			<?php
                endwhile; wp_reset_postdata();
            ?>
		</div>
	</section>

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

	<section class="reviews" id="reviews">
		<div class="container">
			
			<div class="title">
				<h2>Отзывы</h2>
				<b>О нас говорят клиенты</b>
			</div>

		</div>

		<div class="reviews__slider">
			<?php
              $args = array(
                'post_type' => 'reviews',
                'posts_per_page' => -1,
              );

              $query = new WP_Query( $args );

              while ( $query->have_posts() ): $query->the_post();
	        ?>
	        <div>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="col-md-8">
							<h3><?php the_title(); ?></h3>
							<p>Заказчик: <b><?php the_field('name'); ?></b></p>
							<p>Место положения: <?php the_field('place'); ?></p>
							<p>Дата завершения робот: <?php the_field('date'); ?></p>
							<br>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>"><b>Подробнее...</b></a>
						</div>
				    </div>
				</div>
			</div>

			<?php
	            endwhile; wp_reset_postdata();
	        ?>
		</div>	
	</section>

	<section class="partners"  id="partners">

		<div class="container">
			
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
							Далее
						</a>
					</div>
				<?php
                	endwhile; wp_reset_postdata();
          		?>
			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/question' ); ?>

	<section class="contacts"  id="contacts">

		<div id="map"></div>

		<div class="container">
			<div class="title">
				<h2>Наши обьекты</h2>
				<b>Карта наших работ</b>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>