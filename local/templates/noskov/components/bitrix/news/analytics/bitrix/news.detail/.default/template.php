<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<section class="details">
	<div class="container">
		<h1 class="details__title"><?=$arResult["NAME"]?></h1>

		<div class="details__content user-content">
			<?=$arResult["DETAIL_TEXT"]?>
		</div>

		<div class="details__bottom fade-top">
			<p class="h2">РАССКАЗАТЬ ДРУЗЬЯМ</p>
			<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
			<script src="//yastatic.net/share2/share.js"></script>
			<div class="ya-share2" data-services="vkontakte,facebook,twitter"></div>
			<a href="/infobase/analytics/" class="btn btn--gold">Перейти к списку аналитики</a>
		</div>

	</div>
</section>