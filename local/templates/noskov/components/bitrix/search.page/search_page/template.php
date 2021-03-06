<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>

<section class="s-search-page">
	<div class="container container">

		<form action="" method="get">
			<input type="hidden" name="tags" value="<? echo $arResult["REQUEST"]["TAGS"] ?>"/>
			<input type="hidden" name="how" value="<? echo $arResult["REQUEST"]["HOW"] == "d" ? "d" : "r" ?>"/>
			<input class="search-query" type="text" name="q" value="<?= $arResult["REQUEST"]["QUERY"] ?>"/>
			<input class="btn" type="submit" value="<? echo GetMessage("CT_BSP_GO") ?>"/>
		</form>

	<? if (isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):
		?>
		<div class="search-language-guess">
			<? echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#" => '<a href="' . $arResult["ORIGINAL_QUERY_URL"] . '">' . $arResult["REQUEST"]["ORIGINAL_QUERY"] . '</a>')) ?>
		</div><br/><?
	endif; ?>

	<div class="search-result">
		<? if ($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false): ?>
		<? elseif ($arResult["ERROR_CODE"] != 0): ?>
			<p><?= GetMessage("CT_BSP_ERROR") ?></p>
			<? ShowError($arResult["ERROR_TEXT"]); ?>
			<p><?= GetMessage("CT_BSP_CORRECT_AND_CONTINUE") ?></p>
			<br/><br/>
			<p><?= GetMessage("CT_BSP_SINTAX") ?><br/><b><?= GetMessage("CT_BSP_LOGIC") ?></b></p>
			<table border="0" cellpadding="5">
				<tr>
					<td align="center" valign="top"><?= GetMessage("CT_BSP_OPERATOR") ?></td>
					<td valign="top"><?= GetMessage("CT_BSP_SYNONIM") ?></td>
					<td><?= GetMessage("CT_BSP_DESCRIPTION") ?></td>
				</tr>
				<tr>
					<td align="center" valign="top"><?= GetMessage("CT_BSP_AND") ?></td>
					<td valign="top">and, &amp;, +</td>
					<td><?= GetMessage("CT_BSP_AND_ALT") ?></td>
				</tr>
				<tr>
					<td align="center" valign="top"><?= GetMessage("CT_BSP_OR") ?></td>
					<td valign="top">or, |</td>
					<td><?= GetMessage("CT_BSP_OR_ALT") ?></td>
				</tr>
				<tr>
					<td align="center" valign="top"><?= GetMessage("CT_BSP_NOT") ?></td>
					<td valign="top">not, ~</td>
					<td><?= GetMessage("CT_BSP_NOT_ALT") ?></td>
				</tr>
				<tr>
					<td align="center" valign="top">( )</td>
					<td valign="top">&nbsp;</td>
					<td><?= GetMessage("CT_BSP_BRACKETS_ALT") ?></td>
				</tr>
			</table>
		<? elseif (count($arResult["SEARCH"]) > 0): ?>
			<? if ($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
			<? foreach ($arResult["SEARCH"] as $arItem): ?>
				<div class="search-item">
					<h4><a href="<? echo $arItem["URL"] ?>"><? echo $arItem["TITLE_FORMATED"] ?></a></h4>
					<div class="search-preview"><? echo $arItem["BODY_FORMATED"] ?></div>
					<? if (
						($arParams["SHOW_ITEM_DATE_CHANGE"] != "N")
						|| ($arParams["SHOW_ITEM_PATH"] == "Y" && $arItem["CHAIN_PATH"])
						|| ($arParams["SHOW_ITEM_TAGS"] != "N" && !empty($arItem["TAGS"]))
					): ?>
						<div class="search-item-meta">
							<? if (
								$arParams["SHOW_RATING"] == "Y"
								&& strlen($arItem["RATING_TYPE_ID"]) > 0
								&& $arItem["RATING_ENTITY_ID"] > 0
							): ?>
								<div class="search-item-rate">
									<?
									$APPLICATION->IncludeComponent(
										"bitrix:rating.vote", $arParams["RATING_TYPE"],
										Array(
											"ENTITY_TYPE_ID" => $arItem["RATING_TYPE_ID"],
											"ENTITY_ID" => $arItem["RATING_ENTITY_ID"],
											"OWNER_ID" => $arItem["USER_ID"],
											"USER_VOTE" => $arItem["RATING_USER_VOTE_VALUE"],
											"USER_HAS_VOTED" => $arItem["RATING_USER_VOTE_VALUE"] == 0 ? 'N' : 'Y',
											"TOTAL_VOTES" => $arItem["RATING_TOTAL_VOTES"],
											"TOTAL_POSITIVE_VOTES" => $arItem["RATING_TOTAL_POSITIVE_VOTES"],
											"TOTAL_NEGATIVE_VOTES" => $arItem["RATING_TOTAL_NEGATIVE_VOTES"],
											"TOTAL_VALUE" => $arItem["RATING_TOTAL_VALUE"],
											"PATH_TO_USER_PROFILE" => $arParams["~PATH_TO_USER_PROFILE"],
										),
										$component,
										array("HIDE_ICONS" => "Y")
									); ?>
								</div>
							<? endif; ?>
							<? if ($arParams["SHOW_ITEM_TAGS"] != "N" && !empty($arItem["TAGS"])): ?>
								<div class="search-item-tags"><label><? echo GetMessage("CT_BSP_ITEM_TAGS") ?>: </label><?
									foreach ($arItem["TAGS"] as $tags):
										?><a href="<?= $tags["URL"] ?>"><?= $tags["TAG_NAME"] ?></a> <?
									endforeach;
									?></div>
							<? endif; ?>

							<? if ($arParams["SHOW_ITEM_DATE_CHANGE"] != "N"): ?>
								<div class="search-item-date"><label><? echo GetMessage("CT_BSP_DATE_CHANGE") ?>
										: </label><span><? echo $arItem["DATE_CHANGE"] ?></span></div>
							<? endif; ?>
						</div>
					<? endif ?>
				</div>
			<? endforeach; ?>
			<? if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
			<? if ($arParams["SHOW_ORDER_BY"] != "N"): ?>
				<div class="search-sorting"><label><? echo GetMessage("CT_BSP_ORDER") ?>:</label>&nbsp;
					<? if ($arResult["REQUEST"]["HOW"] == "d"): ?>
						<a href="<?= $arResult["URL"] ?>&amp;how=r"><?= GetMessage("CT_BSP_ORDER_BY_RANK") ?></a>&nbsp;
						<b><?= GetMessage("CT_BSP_ORDER_BY_DATE") ?></b>
					<? else: ?>
						<b><?= GetMessage("CT_BSP_ORDER_BY_RANK") ?></b>&nbsp;<a
							href="<?= $arResult["URL"] ?>&amp;how=d"><?= GetMessage("CT_BSP_ORDER_BY_DATE") ?></a>
					<? endif; ?>
				</div>
			<? endif; ?>
		<? else: ?>
			<? ShowNote(GetMessage("CT_BSP_NOTHING_TO_FOUND")); ?>
		<? endif; ?>

	</div>
	</div>
</section>