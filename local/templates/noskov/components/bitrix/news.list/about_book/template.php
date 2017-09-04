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


<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


	<div class="book-intro book-intro--wide book-intro--top-bordered" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<? if (!empty($arItem["PREVIEW_PICTURE"])) : ?>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"];?>" class="book-intro__img">
		<? endif; ?>
		<div class="book-intro__content">
			<a href="#" class="book-intro__title fancy" data-src="#modal-book-<?=$arItem["ID"]?>" rel="nofollow"><h3 class="h3"><?=$arItem["NAME"];?></h3></a>
			<div class="book-intro__preview">
				<?=$arItem["PREVIEW_TEXT"];?>
			</div>
			<a href="#" class="btn fancy" data-src="#modal-book-<?=$arItem["ID"]?>" rel="nofollow">заказать <i class="i-ar-right"></i></a>
		</div>
	</div>

	<div id="modal-book-<?=$arItem["ID"]?>" class="modal">
		<p class="h3 modal__title">Заказать книгу<br>"<?=$arItem["NAME"]?>"</p>
		<p class="modal__subtitle">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form vertical-form">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
			<input type="email" name="user_email" placeholder="Введите e-mail*" data-label="Email" data-req="true">
			<input type="tel" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			<label class="style-checkbox">
				<input type="checkbox" name="user_agree" value="yes" data-label="Пользователь согласился с условиями" data-req="true" checked>
				<span>Я согласен с <a href="#" target="_blank" rel="nofollow">условиями обработки персональных данных</a></span>
			</label>
			<input type="hidden" value="Заявка на книгу '<?=$arItem["NAME"]?>'" name="form_subject">
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>

<?endforeach;?>