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

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<? if (($key == 0) && ($arResult["NAV_RESULT"]->PAGEN == 1)) : ?>
		<div class="preview-first" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<time class="timepanel" datetime="<?=FormatDate("Y-m-d", MakeTimeStamp($arItem["DISPLAY_ACTIVE_FROM"]))?>"><strong><?=FormatDate("d", MakeTimeStamp($arItem["DISPLAY_ACTIVE_FROM"]))?></strong><?=FormatDate("m.Y", MakeTimeStamp($arItem["DISPLAY_ACTIVE_FROM"]))?></time>
			<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="preview-first__title" target="_blank" rel="nofollow"><?=$arItem["NAME"];?></a>
			<div class="preview-first__preview"><?=$arItem["PREVIEW_TEXT"];?></div>
			<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="link" target="_blank" rel="nofollow">Подробнее <i class="i-ar-right"></i></a>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/pub-first.png" alt="1" class="preview-first__dekor">
		</div>
	<? endif; ?>

<?endforeach;?>


<div class="row-bg">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?
		$start_count = -1;
		if ($arResult["NAV_RESULT"]->PAGEN == 1) :
			$start_count = 0;
		endif;
		?>

		<? if ($key > $start_count) : ?>
			<div class="grid-4 grid-6_m grid-12_xs">
				<div class="smi-intro" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
						<div class="smi-intro__logo">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
						</div>
					<? endif; ?>
					<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="smi-intro__title" target="_blank" rel="nofollow"><p class="h3"><?=$arItem["NAME"];?></p></a>
					<div class="smi-intro__preview">
						<?=$arItem["PREVIEW_TEXT"];?>
					</div>
					<footer class="smi-intro__footer">
						<time datetime="<?=FormatDate("Y-m-d", MakeTimeStamp($arItem["DISPLAY_ACTIVE_FROM"]))?>"> <?=$arItem["DISPLAY_ACTIVE_FROM"]?></time>
						<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="link" target="_blank" rel="nofollow">Подробнее <i class="i-ar-right"></i></a>
					</footer>
				</div>
			</div>
		<? endif; ?>

	<?endforeach;?>
</div>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>