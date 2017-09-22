<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="top-nav">
	<?if (!empty($arResult)):?>
		<?$previousLevel = 0;?>
		<?foreach($arResult as $arItem):?>

			<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
				<?=str_repeat("</ul></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
			<?endif?>

			<?if ($arItem["IS_PARENT"]):?>

				<div class="top-nav__link-wrap">
					<?if($arItem["SELECTED"]):?>
						<a class="top-nav__link-main active" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<?else:?>
						<a class="top-nav__link-main" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<?endif?>
					<i class="top-nav__link-arrow i-right"></i>
					<ul class="top-nav__link-list">

			<?else:?>

				<?if($arItem["DEPTH_LEVEL"] == 1): //если корневой пункт?>
					<?if($arItem["SELECTED"]):?>
						<div class="top-nav__link-wrap">
							<a class="top-nav__link-main active" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
						</div>
					<?else:?>
						<div class="top-nav__link-wrap">
							<a class="top-nav__link-main" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
						</div>
					<?endif?>
				<?else: //если меню второго уровня?>
					<?if($arItem["SELECTED"]):?>
						<li><a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
						<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
					<?endif?>
				<?endif?>

			<?endif?>

			<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

		<?endforeach?>

		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></div>", ($previousLevel-1) );?>
		<?endif?>

	<?endif?>
</nav>

<? echo '<pre>'; print_r($arResult); echo '</pre>'; ?>