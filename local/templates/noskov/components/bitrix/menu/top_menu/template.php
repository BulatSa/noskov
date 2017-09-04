<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="top-nav">
	<?if (!empty($arResult)):?>
		<?foreach($arResult as $arItem):?>
			<?if($arItem["SELECTED"]):?>
				<a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a>
			<?else:?>
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?endif?>
		<?endforeach?>
	<?endif?>
</nav>

<? //echo '<pre>'; print_r($arResult); echo '</pre>'; ?>