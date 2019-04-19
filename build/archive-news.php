
<?php get_header(); ?>

<main class="main main--achive">

	<section class="news news--arhive repairs" id="news">
		<div class="container">

			<div class="title">
				<h2>Новости и Акции</h2>
				<b>Горячие предложения</b>
			</div>


                <?php
	                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	                $args = array(
	                    'post_type'=>'news', // Your post type name
	                    'posts_per_page' => 4,
	                    'paged' => $paged,
	                );

	                $loop = new WP_Query( $args );
	                if ( $loop->have_posts() ) {
	                    while ( $loop->have_posts() ) : $loop->the_post();

                ?>
					
				<div class="row news--arhive__row">
					<div class="col-md-4">
						<?php echo get_the_post_thumbnail(); ?>
					</div>
					<div class="col-md-8">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>"><b>Подробнее</b></a>
					</div>
				</div>

			 	<?php
                    endwhile;
                ?>

                </div>

                <div class="pagination">
                    <?php

                    $total_pages = $loop->max_num_pages;

                    if ($total_pages > 1){
                        $current_page = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('<'),
                            'next_text'    => __('>'),
                        ));
                    }    
	                }
	                wp_reset_postdata();
	                ?> 
                </div> 

        </div>
	</section>

	<?php get_template_part( 'parts/question' ); ?>

</main>

<?php get_footer(); ?>