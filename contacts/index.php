<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>


<header class="page-header page-header--contact">

	<div class="container">
		<div class="page-header__title-wrap">
			<p class="page-header__title">Контактная информация</p>
			<address class="page-header__goldtext">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/address.php"
				));?>
			</address>
		</div>
		<div class="page-header__geo-icon-wrap">
			<a href="#" class="page-header__geo-icon-link">
				<img class="page-header__geo-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-geo.svg" alt="">
				<img class="page-header__geo-close" src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-close-mini.svg" alt="">
				<span>Схема проезда</span>
			</a>
		</div>
	</div>

	<div class="page-header__googlemap" id="googlemap"></div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDybbqjrNjB4JMkoCyUUEGIUthFVXY6htA" type="text/javascript"></script>

</header>


<section class="s-contact-info">
	<div class="container">
		<div class="row contact-info">

			<div class="grid-7 grid-12_l contact-info__column ">
				<p class="h1 title-lines title-lines--lefted">КОНТАКТЫ</p>
				<div class="row contact-info__content">
					<div class="contact-info__content-column">
						<div class="contact-info__content-callback">
							<span class="contact-info__content-title">Телефон:</span>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","cont_phone",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/phone.php"
							));?>
						</div>

						<div class="contact-info__content-callback">
							<span class="contact-info__content-title">E-mail:</span>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","cont_email",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/email.php"
							));?>
						</div>
					</div>
					<div class="contact-info__content-column">
						<div class="contact-info__content-callback">
							<span class="contact-info__content-title">Вконтакте:</span>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","cont_vk",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/contacts/vk.php"
							));?>
						</div>

						<div class="contact-info__content-callback">
							<span class="contact-info__content-title">Facebook:</span>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","cont_facebook",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/contacts/facebook.php"
							));?>
						</div>

						<div class="contact-info__content-callback">
							<span class="contact-info__content-title">Instagram:</span>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","cont_insta",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/contacts/insta.php"
							));?>
						</div>
					</div>
				</div>
			</div>

			<div class="grid-5 grid-12_l contact-info__column ">
				<p class="h1 title-lines title-lines--lefted">Реквизиты</p>
				<div class="contact-info__content">
					<div class="user-content">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/contacts/reqv.php"
						));?>
					</div>
					<div class="contact-info__palata">
						<a href="http://fparf.ru" target="_blank" rel="nofollow" title="Федеральная палата адвокатов"><img src="<?=SITE_TEMPLATE_PATH?>/img/contact-palata.png" alt=""></a>
						<a href="http://www.advgazeta.ru" target="_blank" rel="nofollow" title="Адвокатская газета"><img src="<?=SITE_TEMPLATE_PATH?>/img/contact-ag.jpg" alt=""></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>