<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>

<header class="page-header page-header--pattern page-header--reviews">
	<div class="container">
		<p class="page-header__title">Отзывы</p>
	</div>
</header>


<section class="s-about-man">
	<div class="container">
		<div class="row-bg">

			<div class="grid-6 grid-7_l grid-12_m">
				<div class="user-content">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/reviews/content.php"
					));?>
				</div>
			</div>

			<div class="grid-6 grid-5_l grid-12_m user-content">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/disput-money-about.jpg" alt="Носков Игорь юрьевич">
			</div>

		</div>
	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>