<?php
	/**
		* Template name: Remont
	*/
?>


<?php get_header(); ?>

	<main class="main">

		<section class="remont" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<div class="container">
				
				<div class="remont__list">

					<?php if( have_rows('block') ): 

						while( have_rows('block') ): the_row(); 
							
							$title = get_sub_field('title');
							$content = get_sub_field('content');
							$img = get_sub_field('img');
							
							?>

						<div class="remont__item">
							<div class="remont__item_title"><b><?php echo $title; ?></b></div>
							<div class="remont__item_content">
								<img src="<?php echo $img['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<p>
									<?php echo $content; ?>
								</p>
							</div>
						</div>

						<?php endwhile; ?>
						
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="price wow bounceInLeft" data-wow-duration="2s">
			<div class="container">

				<div class="title">
					<h2>Прайс</h2>
					<b>Цены на наши услуги</b>
				</div>

				<div class="row">

					<div class="col-md-3">
						<div class="filter click">
							<?php if( have_rows('price') ): 
								while( have_rows('price') ): the_row(); 
									$id = get_sub_field('id');
									$name = get_sub_field('name');
							?>
								<a href="#<?php echo $id; ?>" class="button btn"><?php echo $name; ?></a>
							<?php endwhile; endif; ?>

						</div>
					</div>

					<div class="col-md-9">

						
					<?php if( have_rows('price') ): 

						while( have_rows('price') ): the_row(); 
							
							$name = get_sub_field('name');
							$id = get_sub_field('id');
							$img = get_sub_field('type');
							
					?>
						<div class="element" id="<?php echo $id ?>">

							<div class="price__top">
								<b>Наименование работ</b>
								<b>Единицы измерения</b>
								<b>Цена, руб.</b>
							</div>


							<?php if( have_rows('type') ): 

								while( have_rows('type') ): the_row(); 
									
									$title = get_sub_field('title');
									$list = get_sub_field('list');
									
									?>
									
									<div class="price__center">
										<h3><?php echo $title; ?></h3>

										<?php 
											
										// child loop
										if( have_rows('list') ): ?>
											
											<ul>
										
										    <?php while( have_rows('list') ) : the_row(); ?>
	 											<li>
													<span><?php the_sub_field('name'); ?></span>
													<span><?php the_sub_field('m2'); ?></span>
													<span><?php the_sub_field('price'); ?></span>
												</li>
											<?php endwhile; ?>
											
											</ul>
										
										<?php endif;
										// end child loop
										
										?>

									</div>

								<?php endwhile; ?>
								
							<?php endif; ?>
						</div>

					<?php endwhile; endif; ?>

					</div>

				</div>
			</div>
		</section>

		<?php get_template_part( 'parts/question' ); ?>

	</main>


<?php get_footer(); ?>
