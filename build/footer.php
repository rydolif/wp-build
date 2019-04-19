
	<nav class="bottom__nav nav" id="bottom__nav">
		<div class="container">

			<div class="nav__container">
				<?php 
					wp_nav_menu( array(
						'menu'=>'menu',
					    'theme_location'=>'menu',
					) );
				?>
			</div>

		</div>
	</nav>


	<footer class="footer">
		<div class="container">

			<div class="footer__container">
				<a href="<?php echo get_home_url(); ?>" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="logo">
				</a>
				<ul class="footer__list">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/place.png" alt=""><span><?php the_field('place', 'option'); ?></span></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/tel-footer.png" alt=""><b><a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option'); ?></a></b></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/footer-mail.png" alt=""><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/footer-time.png" alt=""><span><?php the_field('time', 'option'); ?></span></li>
				</ul>
				<div class="footer__up click"><a href="#header"></a></div>
				<div class="footer__soc">
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-fb.svg" alt=""></a>
					<a href="<?php the_field('what', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-what.svg" alt=""></a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-vk.svg" alt=""></a>
					<a href="tel:<?php the_field('tel', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-call.svg" alt=""></a>
					<a href="<?php the_field('od', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-od.svg" alt=""></a>
					<a href="<?php the_field('telegram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-tele.svg" alt="" width="30"></a>
				</div>
			</div>

		</div>
	</footer>

	<!-- 	modal -->
		<div class="modal" id="order">
			<div class="wrapper">
				<form action="sendmail.php" class="form" method="post">
					<button class="close order_close" type="button"></button>
					<h3>Оставьте заявку, <br>мы свяжемся с Вами</h3>
					<input type="hidden" name="subject" value="Узнать подробнее!">
					<div class="form__line">
						<input type="text" name="name" placeholder="Имя" required>
					</div>
					<div class="form__line">
						<input type="tel" name="phone" required placeholder="Телефон">
					</div>
					<div>
						<button type="submit" class="btn form__btn" name="submit" value="отправить">Отправить</button>
					</div>
				</form>
			</div>
		</div>

		<div class="modal" id="thanks">
			<button class="close thanks_close" type="button"></button>

			<h3>Спасибо <br>за доверие!</h3>
			<p>Мы обязательно с вами свяжемся!</p>
		</div>
	<!-- 	modal end-->

	<script>
    	function initMap() {
	      	var uluru = {lat: 51.8114303, lng: 55.0662659};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 15,
	          center: uluru,
	          styles: [
				    {
				        "featureType": "all",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "weight": "2.00"
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#9c9c9c"
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "labels.text",
				        "stylers": [
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape.man_made",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#eeeeee"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#7b7b7b"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#c8d7d4"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#070707"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    }
				]
	        });

	        <?php if(get_field('location', 'option')): ?>
				<?php while(has_sub_field('location', 'option')): ?>
					<?php
						$location = get_sub_field('map');
						if( !empty($location) ):
					?>

						var marker = new google.maps.Marker({
							position: {lat: <?php echo $location['lat']; ?>, lng: <?php echo $location['lng']; ?>},
							map: map,
							icon: '<?php echo get_template_directory_uri(); ?>/img/marker.png'
						});

					<?php endif; ?>

				<?php endwhile; ?>
			<?php endif; ?>

        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnk4RCDwjSucIJ2WXRnLkuCrsWR4DUM4&callback=initMap"></script>
	
	<?php wp_footer();?>

</body>
</html>
