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
					<p>Вы будете удивлены, но на данном сайте Вы не найдете отзывов Доверителей по той простой причине, что каждый на своем сайте может сам себе написать много положительных отзывов.</p>
					<p>Кроме того, обращающиеся за юридической помощью Доверители погружены исключительно в свою проблему и им «нет дела» до отзывов других доверителей и нет времени их читать.</p>
					<p>Собственно, по этой причине, я не указываю на своем сайте отзывы доверителей ввиду нецелесообразности, а также отсутствия реальной возможности установить действительно ли данный положительный отзыв был оставлен определенным доверителем или же напечатан собственноручно создателем сайта.</p>
				</div>
			</div>

			<div class="grid-6 grid-5_l grid-12_m user-content">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/disput-money-about.jpg" alt="Носков Игорь юрьевич">
			</div>

		</div>
	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>