<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<title><?$APPLICATION->ShowTitle()?></title>

	<!-- og -->
	<meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
	<meta property="og:description" content='<?=$APPLICATION->ShowProperty("description");?>'/>
	<meta property="og:type" content="website" />
	<meta property="og:image" content='<?=$APPLICATION->ShowProperty("ogimage",SITE_TEMPLATE_PATH."/img/og.jpg");?>' />
	<!-- og -->

	<!--fav-->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/manifest.json">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<!--fav-->


	<?
	use Bitrix\Main\Page\Asset;
	Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/assets.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
	?>

	<? $APPLICATION->ShowHead();?>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="body-wrap">


<section class="s-top-panel">
	<div class="container">
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
	</div>
</section>


<section class="s-top-nav">
	<div class="container">
		<a href="/" class="s-top-nav__logo" title="На главную"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo-white.svg" alt="logotype"></a>
		<?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"top_menu",
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
				"ROOT_MENU_TYPE" => "top",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "top_menu"
			),
			false
		);?>
		<div class="menu-btn">
			<figure class="burger"></figure>
		</div>
	</div>
</section>


<? if(!CSite::InDir('/index.php')) :?>
	<section class="s-breadcrumbs">
		<div class="container">
			<? $APPLICATION->IncludeComponent(
				"bitrix:breadcrumb",
				"breadcumbs",
				Array(
					"START_FROM" => "0",
					"PATH" => "",
					"SITE_ID" => "-",
					"COMPONENT_TEMPLATE" => "breadcumbs"
				)
			);?>
		</div>
	</section>
<? endif; ?>