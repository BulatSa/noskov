<?
if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])):
	$og_img = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$arResult["PREVIEW_PICTURE"]["SRC"];
endif;
$APPLICATION->SetPageProperty("ogimage", $og_img);
?>