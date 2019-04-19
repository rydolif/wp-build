
	<section class="question" id="question">
		<div class="container">
			
			<div class="title">
				<h2>Остались вопросы?</h2>
			</div>

			<div class="row">
				<div class="col-lg-5">
					<p>
						Вы можете заказать звонок или вызвать сметчика.
						<br>
						Консультируем <b>абсолютно бесплатно!</b>
						<br>Заполните форму и наш специалист свяжется с
						<br>Вами для консультации.
					</p>
				</div>
				<div class="col-lg-7">
					<form action="sendmail.php" class="form" method="post">
						<input type="hidden" name="subject" value="Узнать подробнее!">
						<div class="form__line form__line--input">
							<div>
								<input type="text" name="name" placeholder="Введите ваше имя" required>
							</div>
							<input type="tel" name="phone" placeholder="Введите ваш телефон" required>
						</div>
						<div class="form__line form__line--textarea">
							<textarea name="question" rows="6" placeholder="Ваше имя" required></textarea>
						</div>
						<div class="form__line form__line--btn">
							<button type="submit" class="btn" name="submit">заказать звонок</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</section>