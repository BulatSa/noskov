<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<? if ($arResult["NavPageCount"] > 1) : ?>

	<?$page = $arResult["nStartPage"]?>

	<nav class="pagination">
		<?if($arResult["NavPageNomer"] > 1) : // Если страница не первая ?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="i-left"></i></a>
		<? else: ?>
			<a href="#" class="pagination__inactive"><i class="i-left"></i></a>
		<? endif; ?>

		<?while($page <= $arResult["nEndPage"]): // Цикл для пробежки по страницам ?>
			<?if ($page == $arResult["NavPageNomer"]): // Если страница текущая ?>
				<a href="#" class="active"><?=$page?></a>
			<?else: // Если страница не текущая ?>
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$page?>"><?=$page?></a>
			<?endif?>
			<?$page++?>
		<?endwhile?>

		<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]) : // Если страница не последняя ?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="i-right"></i></a>
		<? else:?>
			<a href="#" class="pagination__inactive"><i class="i-right"></i></a>
		<? endif ?>
	</nav>

<? endif; ?>
