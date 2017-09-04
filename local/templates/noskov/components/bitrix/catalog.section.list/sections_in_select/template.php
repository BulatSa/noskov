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

<?
$selected_section_id = $_GET['type'];
?>

<div class="style-select">
	<select>
		<? if (!isset($selected_section_id)): ?>
			<option value="0" selected>Все</option>
		<? else :?>
			<option value="0">Все</option>
		<? endif; ?>
		<? foreach ($arResult['SECTIONS'] as &$arSection) : ?>
			<? if ($selected_section_id==$arSection['ID']) : ?>
				<option selected value="<?=$arSection['ID'];?>"><?=$arSection['NAME'];?></option>
			<? else: ?>
				<option value="<?=$arSection['ID'];?>"><?=$arSection['NAME'];?></option>
			<? endif; ?>
		<? endforeach; ?>
	</select>
	<i class="i-down"></i>
</div>


<script>
	$('.style-select select').on('change',function () {
		var href = $(this).val();
		if (href !== "0"){
			location.href = "?type="+href;
		} else {
			location.href = "?";
		}

	})
</script>

