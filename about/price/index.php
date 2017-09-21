<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Цены");
?>


<header class="page-header page-header--pattern page-header--price">
	<div class="container">
		<p class="page-header__title">Цены</p>
	</div>
</header>


<section class="s-price">
	<div class="container">
		<div class="user-content">
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/price/content.php"
			));?>
		</div>
	</div>
</section>


<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/includes/order_small_section.php"
));?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>