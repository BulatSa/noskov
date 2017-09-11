<?
if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])):
	$og_img = $_SERVER['HTTP_HOST'].$arResult["PREVIEW_PICTURE"]["SRC"];
endif;
$APPLICATION->SetPageProperty("ogimage", $og_img);
?>