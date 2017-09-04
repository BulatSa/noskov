<?$this->setFrameMode(true);?>

<?
	$phone = file_get_contents($arResult['FILE']);
	$phone_formatted = preg_replace("/[^+0-9]/","",$phone);
?>
<a href="tel:<?=$phone_formatted?>" class="site-phone" rel="nofollow"><? include($arResult['FILE']); ?></a>
