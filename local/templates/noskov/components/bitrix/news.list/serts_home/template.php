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

<div class="row-ng s-home-about__serts">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?
		$sert_s = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 92, "height" => 136), BX_RESIZE_IMAGE_EXACT, true);
		?>

		<div class="grid-3 grid-3_l grid-6_xs">
			<div class="sert">
				<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="fancy" data-fancybox="serts"><img src="<?=$sert_s['src']?>" alt="1"></a>
			</div>
		</div>

	<?endforeach;?>
</div>