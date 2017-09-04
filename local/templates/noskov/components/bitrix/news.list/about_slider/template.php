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

<?php
$archive_dir = $_SERVER['DOCUMENT_ROOT']."/upload/";
$zip = new ZipArchive();
$fileName = $archive_dir."smi_photos.zip";
if(file_exists($fileName)){
	unlink($fileName);
}

if ($zip->open($fileName, ZIPARCHIVE::CREATE) !== true) {
	fwrite(STDERR, "Error while creating archive file");
	exit(1);
}?>

<section class="s-about-slider">
	<div class="about-slider">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<div class="about-slide">
				<?
				$photo = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 1427, "height" => 739), BX_RESIZE_IMAGE_EXACT, true);
				?>
				<img src="<?=$photo['src']?>" alt="<?=$arItem["PREVIEW_TEXT"];?>">
				<span><?=$arItem["PREVIEW_TEXT"];?></span>
			</div>

			<?
			$zip->addFile($_SERVER['DOCUMENT_ROOT'].$arItem['PREVIEW_PICTURE']['SRC'], $arItem['PREVIEW_PICTURE']['FILE_NAME']);
			?>

		<?endforeach;?>
	</div>

	<div class="about-slider-descr"></div>
	<div class="center-btn">
		<a href="/upload/smi_photos.zip" class="btn" target="_blank" download="Фотографии для СМИ.zip">Скачать фотографии для СМИ <i class="i-ar-right"></i></a>
	</div>

</section>

<?$zip->close();?>
