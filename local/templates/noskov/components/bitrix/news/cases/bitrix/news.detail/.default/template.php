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
		<div class="details__meta">
			<time datetime="<?=FormatDate("Y-m-d", MakeTimeStamp($arResult["DISPLAY_ACTIVE_FROM"]))?>"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
			/ <span>номер дела</span>
		</div>

		<div class="details__content user-content">
			<?=$arResult["DETAIL_TEXT"]?>
		</div>

		<? if (!empty($arResult["PROPERTIES"]["DOCS"]["VALUE"])) : ?>
			<div class="details__docs">
				<p class="h2">Документы и судебные акты</p>

				<? foreach ($arResult["PROPERTIES"]["DOCS"]["VALUE"] as $key => $doc_id) : ?>
					<? $file_path = CFile::GetPath($doc_id)?>
					<a href="<?=$file_path?>" class="doc" target="_blank" rel="nofollow" download="<?=$arResult["PROPERTIES"]["DOCS"]["DESCRIPTION"][$key]?>">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/doc.svg" alt="doc" class="doc__icon">
						<span><?=$arResult["PROPERTIES"]["DOCS"]["DESCRIPTION"][$key]?></span>
					</a>
				<? endforeach; ?>
			</div>
		<? endif; ?>

		<div class="details__bottom fade-top">
			<p class="h2">РАССКАЗАТЬ ДРУЗЬЯМ</p>
			<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
			<script src="//yastatic.net/share2/share.js"></script>
			<div class="ya-share2" data-services="vkontakte,facebook,twitter"></div>
			<a href="/infobase/cases/" class="btn btn--gold">Перейти к списку проектов</a>
		</div>

	</div>
</section>