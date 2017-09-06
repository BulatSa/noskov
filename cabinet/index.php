<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кабинет доверителя");
?>

<header class="page-header page-header--cabinet">
	<div class="container">
		<p class="page-header__title">Кабинет доверителя</p>
		<p class="page-header__goldtext">Доступ к своему личному делу и документам 24 часа в сутки</p>
		<p class="page-header__descr">После того, как мы заключим соглашение, Вам будет предоставлен доступ к личному кабинету. Он нужен для того, чтобы Вы могли посмотреть статус своего дела в удобное для Вас время. Также в личном кабинете Вы сможете ознакомиться со всеми документами, подготовленными по Вашему делу.</p>
		<a href="http://casepro.pro" class="btn btn--white">Войти в личный кабинет</a>
		<div class="page-header__cabinet-icons">
			<div class="page-header__cabinet-icon">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-clock.svg" alt="">
				<p>Вы получите круглосуточный доступ к личному делу</p>
			</div>
			<div class="page-header__cabinet-icon">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-geo.svg" alt="">
				<p>Вы сможете просматривать личные документы из любой точки мира</p>
			</div>
			<div class="page-header__cabinet-icon">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-document.svg" alt="">
				<p>Все документы будут хранится в одном месте и не потеряются</p>
			</div>
			<div class="page-header__cabinet-icon">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-doc-refresh.svg" alt="">
				<p>Информация регулярно обновляется. У Вас всегда будут актуальные документы</p>
			</div>
			<div class="page-header__cabinet-icon">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-comment.svg" alt="">
				<p>Вам не придется звонить или писать мне, чтобы узнать статус Вашего дела.</p>
			</div>
		</div>
	</div>
</header>

<section class="s-about-man">
	<div class="container">
		<p class="h1 title-lines">Носков Игорь юрьевич</p>
		<div class="row-bg">

			<div class="grid-6 grid-7_l grid-12_m">
				<div class="user-content">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/spec/ab_text.php"
					));?>
				</div>
				<div class="about-icon-list">
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-graph-board.svg" alt="">
						</div>
						<div class="user-content">
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/spec/ab_text_1.php"
								));?>
							</p>
						</div>
					</div>
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-hat-uni.svg" alt="">
						</div>
						<div class="user-content">
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/spec/ab_text_2.php"
								));?>
							</p>
						</div>
					</div>
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-judge-hammer.svg" alt="">
						</div>
						<div class="user-content">
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/spec/ab_text_3.php"
								));?>
							</p>
						</div>
					</div>
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-book-pencil.svg" alt="">
						</div>
						<div class="user-content">
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/spec/ab_text_4.php"
								));?>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="grid-6 grid-5_l grid-12_m user-content">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/cabinet-about.jpg" alt="Носков Игорь юрьевич">
			</div>

		</div>
	</div>
</section>


<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/includes/order_small_section.php"
));?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>