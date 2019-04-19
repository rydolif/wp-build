<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
	<meta name="theme-color" content="#000">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;subset=cyrillic-ext" rel="stylesheet">
</head>

<?php wp_head(); ?>

<body>

	<div class="preloader">
		 <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 296.096 296.096" style="enable-background:new 0 0 296.096 296.096;" xml:space="preserve" data-llp-composed="true" class="lazy-line-painter">
		<g>
			<path d="M101.15,175.142c6.966,0,14.634,0.68,21.634,1.966v-20.969h51v37.424c6,2.203,10.381,4.579,14.494,7.567&#10;&#9;&#9;c7.797,5.664,12.082,13.099,12.339,21.254c9.925-2.345,19.028-6.321,26.905-11.737c2.846-1.956,6.262-3.668,8.262-5.137v-58.243&#10;&#9;&#9;L148.047,49.23l-89.263,98.628v35.247c6-1.521,11.468-3.156,17.806-4.884C84.086,176.178,92.405,175.142,101.15,175.142z" data-llp-id="logo-0" data-llp-duration="1030" data-llp-delay="0" fill-opacity="0" style=""/>
			<polygon points="148.446,25.313 247.63,136.139 270.251,136.139 148.247,0 97.784,55.572 97.784,33.139 60.784,33.139 &#10;&#9;&#9;60.784,96.454 25.201,136.139 48.144,136.139 &#9;" data-llp-id="logo-1" data-llp-duration="1030" data-llp-delay="1030" style="" fill-opacity="0"/>
			<path d="M259.083,214.931c-5.494,0-12.89,2.44-22.289,8.901c-17.182,11.811-38.215,17.012-57.433,17.012&#10;&#9;&#9;c-15.623,0-30.045-3.435-40.23-9.546c-5.046-3.028-5.031-4.039-2.104-4.039c5.878,0,23.504,4.079,35.449,4.079&#10;&#9;&#9;c5.878,0,10.379-0.987,11.432-3.934c4.867-13.628-14.001-18.016-33.73-26c-14.444-5.848-32.073-10.262-48.861-10.263&#10;&#9;&#9;c-6.999,0-13.914,0.767-20.332,2.517c-29.141,7.945-50.199,13.93-56.199,15.873v76.48c12-4.413,25.9-8.642,33.81-8.642&#10;&#9;&#9;c14.516,0,73.253,18.726,106.51,18.726c4.658,0,8.829-0.367,12.298-1.204c28.227-6.814,77.232-46.725,90.533-60.351&#10;&#9;&#9;C274.323,227.998,271.797,214.931,259.083,214.931z" data-llp-id="logo-2" data-llp-duration="1030" data-llp-delay="2060" style="" fill-opacity="0"/>
		</g>
	</div>

	
    <script type="text/javascript">

      (function(){ 

        document.onreadystatechange = () => {

          if (document.readyState === 'complete') {
                    
            /**
             * Setup your Lazy Line element.
             * see README file for more settings
             */

            let el = document.querySelector('#logo');
            let myAnimation = new LazyLinePainter(el, {"ease":"easeInOutQuad","strokeWidth":10,"strokeOpacity":1,"strokeColor":"#000000","reverse":true}); 
            myAnimation.paint(); 
          }
        }

      })();

    </script>

	<span id="header"></span>

	<header class="header">
		<div class="container">

				<p class="header__text">
					<b>Ремонт и строительство в Оренбургской области</b>
				</p>
				
			<div class="header__container">


				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>
		
				<a href="<?php echo get_home_url(); ?>" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
				</a>

				<div class="info">
					<b><img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt=""><a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option'); ?></a></b>
					<span> <img src="<?php echo get_template_directory_uri(); ?>/img/time.svg" alt=""><?php the_field('time', 'option'); ?></span>
				</div>

				<div class="chat">
					<b>Онлайн чат</b>
					<a href="tel:<?php the_field('chat1', 'option'); ?>"><?php the_field('chat1', 'option'); ?></a>
					<a href="tel:<?php the_field('chat2', 'option'); ?>"><?php the_field('chat2', 'option'); ?></a>
				</div>

				<div class="soc">
					<a href="<?php the_field('od', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/od.svg" alt=""></a>
					<a href="<?php the_field('what', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whot.svg" alt=""></a>
					<a href="tel:<?php the_field('tel', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/call.svg" alt=""></a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" alt=""></a>
					<a href="<?php the_field('telegram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt=""></a>
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a>
				</div>

				<a href="#" class="btn order_open">Написать нам</a>

			</div>
		</div>
	</header>

	<nav class="nav">
		<div class="container">

			<div class="nav__container">
				<?php 
					wp_nav_menu( array(
						'menu'=>'menu',
					    'theme_location'=>'menu',
					) );
				?>
				<div class="info">
					<b><img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt=""><a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option'); ?></a></b>
					<span> <img src="<?php echo get_template_directory_uri(); ?>/img/time.svg" alt=""><?php the_field('time', 'option'); ?></span>
				</div>

				<div class="chat">
					<b>Онлайн чат</b>
					<a href="tel:<?php the_field('chat1', 'option'); ?>"><?php the_field('chat1', 'option'); ?></a>
					<a href="tel:<?php the_field('chat2', 'option'); ?>"><?php the_field('chat2', 'option'); ?></a>
				</div>

				<div class="soc">
					<a href="<?php the_field('od', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/od.svg" alt=""></a>
					<a href="<?php the_field('what', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whot.svg" alt=""></a>
					<a href="tel:<?php the_field('tel', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/call.svg" alt=""></a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" alt=""></a>
					<a href="<?php the_field('telegram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt=""></a>
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a>
				</div>

			</div>

		</div>
	</nav>