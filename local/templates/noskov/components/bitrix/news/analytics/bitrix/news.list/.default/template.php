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


<div class="row">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div class="grid-3 grid-6_m grid-12_xs"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="analitic-intro ">
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="analitic-intro__title"><h3 class="h3"><?=$arItem["NAME"]?></h3></a>
				<div class="case-intro__preview">
					<?=$arItem["PREVIEW_TEXT"]?>
				</div>
				<div class="analitic-intro__footer">
					<time datetime="<?=FormatDate("Y-m-d", MakeTimeStamp($arItem["DISPLAY_ACTIVE_FROM"]))?>"> <?=$arItem["DISPLAY_ACTIVE_FROM"]?></time>
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="link link--gold">Подробнее <i class="i-ar-right"></i></a>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>