<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!--<nav class="top-nav">
	<?if (!empty($arResult)):?>
		<?foreach($arResult as $arItem):?>
			<?if($arItem["SELECTED"]):?>
				<a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a>
			<?else:?>
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?endif?>
		<?endforeach?>
	<?endif?>
</nav> -->

	<nav class="top-nav">
		<div class="top-nav__link-wrap">
			<a class="top-nav__link-main" href="/about/">Об адвокате</a>
			<i class="top-nav__link-arrow i-right"></i>
			<ul class="top-nav__link-list">
				<li><a href="#">Отзывы</a></li>
				<li><a href="/">Цены</a></li>
				<li><a href="/">Споры в сфере недвижимости</a></li>
			</ul>
		</div>
		<div class="top-nav__link-wrap">
			<a class="top-nav__link-main active" href="/specialization/">Специализация</a>
		</div>
		<div class="top-nav__link-wrap">
			<a class="top-nav__link-main" href="/disputs/">Виды споров</a>
			<i class="top-nav__link-arrow i-right"></i>
			<ul class="top-nav__link-list">
				<li><a href="#">Споры в сфере денежных обязательств</a></li>
				<li><a href="/">Споры в сфере банкротства</a></li>
				<li><a href="/">Споры в сфере недвижимости</a></li>
				<li><a href="/" class="active">Споры в сфере оказания услуг и торговли</a></li>
			</ul>
		</div>
		<div class="top-nav__link-wrap">
			<a class="top-nav__link-main" href="/infobase/">База знаний</a>
			<i class="top-nav__link-arrow i-right"></i>
			<ul class="top-nav__link-list">
				<li><a href="#">Отзывы</a></li>
				<li><a href="/">Цены</a></li>
				<li><a href="/">Споры в сфере недвижимости</a></li>
			</ul>
		</div>
		<div class="top-nav__link-wrap">
			<a class="top-nav__link-main" href="/cabinet/">Кабинет доверителя</a>
		</div>
		<div class="top-nav__link-wrap">
			<a class="top-nav__link-main" href="/contacts/">Контакты</a>
		</div>
	</nav>

<? //echo '<pre>'; print_r($arResult); echo '</pre>'; ?>