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
			<? if (!empty($arResult["PROPERTIES"]["CASENUMBER"]["VALUE"])) : ?>
				/ <span><?=$arResult["PROPERTIES"]["CASENUMBER"]["VALUE"]?></span>
			<? endif; ?>
		</div>

		<div class="details__content user-content">
			<? if (!empty($arResult["PROPERTIES"]["FABULA"]["VALUE"])) : ?>
				<h2>Фабула дела</h2>
				<?=$arResult["PROPERTIES"]["FABULA"]["~VALUE"]["TEXT"]?>
			<? endif; ?>
		</div>

		<div class="details__params row">
			<? if (!empty($arResult["PROPERTIES"]["CASE_PARAM_1"]["VALUE"])) : ?>
				<div class="grid-4">
					<div class="details-param" data-num="<?=$arResult["PROPERTIES"]["CASE_PARAM_1"]["VALUE"]?>">
						<strong class="h1">0</strong>
						<small>страниц</small>
						<span>Подготовлено документов</span>
					</div>
				</div>
			<? endif; ?>
			<? if (!empty($arResult["PROPERTIES"]["CASE_PARAM_2"]["VALUE"])) : ?>
				<div class="grid-4">
					<div class="details-param" data-num="<?=$arResult["PROPERTIES"]["CASE_PARAM_2"]["VALUE"]?>">
						<strong class="h1">0</strong>
						<small>часов</small>
						<span>Затрачено</span>
					</div>
				</div>
			<? endif; ?>
			<? if (!empty($arResult["PROPERTIES"]["CASE_PARAM_3"]["VALUE"])) : ?>
				<div class="grid-4">
					<div class="details-param" data-num="<?=$arResult["PROPERTIES"]["CASE_PARAM_3"]["VALUE"]?>">
						<strong class="h1">0</strong>
						<small>рублей</small>
						<span>Выгода Доверителя</span>
					</div>
				</div>
			<? endif; ?>
		</div>

		<div class="details__content user-content">
			<? if (!empty($arResult["PROPERTIES"]["SUD"]["VALUE"])) : ?>
				<h2>Сопровождение спора в суде</h2>
				<?=$arResult["PROPERTIES"]["SUD"]["~VALUE"]["TEXT"]?>
			<? endif; ?>
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