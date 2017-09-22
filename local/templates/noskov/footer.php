</div><!-- body-wrap -->

<footer class="s-site-footer">
	<div class="container">

		<div class="foot-conts">
			<a href="/" class="foot-conts__logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo-white.svg" alt="logotype"></a>
			<address>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/address.php"
				));?>
			</address>
			<nav class="social-links">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/social-links.php"
				));?>
			</nav>
			<?$APPLICATION->IncludeComponent("bitrix:main.include","phone",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/phone.php"
			));?>
			<div class="search-form__col">
				<form action="/search/" class="search-form">
					<button type="submit" title="Начать поиск"><i class="i-search"></i></button>
					<input type="text" name="q" placeholder="Найти" required>
				</form>
			</div>
		</div>

		<nav class="foot-nav">

			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"foot_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "foot_1",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "foot_menu"
				),
				false
			);?>

			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"foot_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "foot_2",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "foot_menu"
				),
				false
			);?>

			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"foot_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "foot_3",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "foot_menu"
				),
				false
			);?>

			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"foot_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "foot_4",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "foot_menu"
				),
				false
			);?>

			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"foot_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "foot_5",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "foot_menu"
				),
				false
			);?>
		</nav>

		<div class="foot-bottom">
			<div class="foot-bottom__policy">Все права защищены, 2017<br><a href="/upload/policy.docx" target="_blank" download>Политика конфиденциальности</a></div>
			<a href="https://penbrain.ru" target="_blank" class="penbrain"><img src="<?=SITE_TEMPLATE_PATH?>/img/penbrain.svg" alt="Pen&Brain"></a>
		</div>

	</div>
</footer>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-callback" class="modal">
		<p class="h3 modal__title">Заказать обратный звонок</p>
		<p class="modal__subtitle">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form vertical-form">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
			<input type="tel" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			<textarea type="text" placeholder="Краткая суть проблемы*" rows="1" data-req="true"></textarea>
			<label class="style-checkbox">
				<input type="checkbox" name="user_agree" value="yes" data-label="Пользователь согласился с условиями" data-req="true" checked>
				<span>Я согласен с <a href="/upload/policy.docx" target="_blank" rel="nofollow" download>условиями обработки</a> персональных данных</span>
			</label>
			<input type="hidden" value="Заказ обртаного звонка" name="form_subject">
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h3 modal__title">Оставить заявку</p>
		<p class="modal__subtitle">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form vertical-form">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
			<input type="tel" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			<textarea type="text" placeholder="Краткая суть проблемы*" rows="1" data-req="true"></textarea>
			<label class="style-checkbox">
				<input type="checkbox" name="user_agree" value="yes" data-label="Пользователь согласился с условиями" data-req="true" checked>
				<span>Я согласен с <a href="/upload/policy.docx" target="_blank" rel="nofollow" download>условиями обработки</a> персональных данных</span>
			</label>
			<input type="hidden" value="Новая заявка" name="form_subject">
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p>Спасибо за заявку!</p>
	</div>

</div>
<!-- Модальные окна -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter45911262 = new Ya.Metrika({
					id:45911262,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45911262" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
