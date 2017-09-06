<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Виды споров");
?>

<header class="page-header page-header--disputs">
	<div class="container">
		<p class="page-header__title">От небольшого долга до&nbsp;крупного банкротства</p>
		<p class="page-header__goldtext">Помогу решить вопрос, если он связан с&nbsp;деньгами или&nbsp;недвижимостью</p>
	</div>
</header>


<section class="s-disput-list">
	<div class="container">

		<div class="row-ng disput-list">
			<div class="grid-4 grid-6_m grid-12_xs">
				<a href="/disputs/podrjad/" class="disput">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/disputs/2.jpg" alt="2" class="disput__img">
					<div class="disput__info">
						<p class="h4">Споры в сфере подряда</p>
						<i class="i-right"></i>
					</div>
				</a>
			</div>
			<div class="grid-4 grid-6_m grid-12_xs">
				<a href="/disputs/nedv/" class="disput">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/disputs/2.jpg" alt="2" class="disput__img">
					<div class="disput__info">
						<p class="h4">Споры в сфере недвижимости</p>
						<i class="i-right"></i>
					</div>
				</a>
			</div>
			<div class="grid-4 grid-6_m grid-12_xs">
				<a href="/disputs/services/" class="disput">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/disputs/3.jpg" alt="2" class="disput__img">
					<div class="disput__info">
						<p class="h4">Споры в сфере оказания услуг и&nbsp;торговли</p>
						<i class="i-right"></i>
					</div>
				</a>
			</div>
			<div class="grid-4 grid-6_m grid-12_xs">
				<a href="/disputs/money/" class="disput">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/disputs/4.jpg" alt="2" class="disput__img">
					<div class="disput__info">
						<p class="h4">Споры в сфере денежных обязательств</p>
						<i class="i-right"></i>
					</div>
				</a>
			</div>
			<div class="grid-4 grid-6_m grid-12_xs">
				<a href="/disputs/bankrot/" class="disput">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/disputs/5.jpg" alt="2" class="disput__img">
					<div class="disput__info">
						<p class="h4">Споры в сфере банкротства</p>
						<i class="i-right"></i>
					</div>
				</a>
			</div>
			<div class="grid-4 grid-6_m grid-12_xs">
				<a href="/disputs/other/" class="disput">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/disputs/6.jpg" alt="2" class="disput__img">
					<div class="disput__info">
						<p class="h4">Иные споры</p>
						<i class="i-right"></i>
					</div>
				</a>
			</div>
		</div>

	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>