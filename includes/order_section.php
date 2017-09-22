<section class="s-order">
	<img src="<?=SITE_TEMPLATE_PATH?>/img/order-man.png" alt="1" class="s-order__man">

	<div class="container">

		<div class="order-block">
			<p class="order-block__title">Запишитесь на&nbsp;консультацию</p>
			<p class="lead order-block__subtitle">Оставьте заявку и&nbsp;я&nbsp;с&nbsp;вами свяжусь</p>
			<form class="ajax-form vertical-form">
				<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
				<input type="tel" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
				<textarea type="text" placeholder="Краткая суть проблемы*" rows="1" data-req="true"></textarea>
				<input type="hidden" value="Новая заявка" name="form_subject">
				<label class="style-checkbox">
					<input type="checkbox" name="user_agree" value="yes" data-label="Пользователь согласился с условиями" data-req="true" checked>
					<span>Я согласен с <a href="/upload/policy.docx" target="_blank" rel="nofollow">условиями обработки персональных данных</a></span>
				</label>
				<button type="submit" class="btn">Оставить заявку</button>
			</form>
		</div>

	</div>
</section>