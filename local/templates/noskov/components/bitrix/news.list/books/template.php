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

<section class="s-books">
	<div class="container books">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>


			<div class="row-bg books__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="grid-7 grid-12_s">
					<div class="books__info">
						<p class="h1 details__title details__title--lefted"><?=$arItem["NAME"];?></p>
						<div class="user-content">
							<?=$arItem["DETAIL_TEXT"];?>
						</div>
						<div class="books__info-gray-wrap">
							<? if (!empty($arItem["PROPERTIES"]["GREY_TEXT"]["VALUE"])) : ?>
								<div class="books__info-quote user-content">
									<p><?=$arItem["PROPERTIES"]["GREY_TEXT"]["VALUE"]["TEXT"]?></p>
								</div>
							<? endif; ?>
							<? if (!empty($arItem["PROPERTIES"]["SCREENS"]["VALUE"])) : ?>
								<div class="books__info-chapters">
									<p><span>Оглавление</span></p>
									<? foreach ($arItem["PROPERTIES"]["SCREENS"]["VALUE"] as $scren_id) : ?>
										<?
										$screen_s = CFile::ResizeImageGet($scren_id, array("width" => 180, "height" => 180), BX_RESIZE_IMAGE_PROPORTIONAL, true);
										$screen_b = CFile::ResizeImageGet($scren_id, array("width" => 1920, "height" => 1080), BX_RESIZE_IMAGE_PROPORTIONAL, true);
										?>
										<a href="<?=$screen_b['src']?>" class="fancy" data-fancybox="book-chapters-1"><img src="<?=$screen_s['src']?>" alt="<?=$arItem["NAME"];?>"></a>
									<? endforeach; ?>
								</div>
							<? endif; ?>
							<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="btn">заказать <i class="i-ar-right"></i></a>
						</div>

					</div>
				</div>
				<div class="grid-5 grid-12_s">
					<div class="books__img ">
						<? if (!empty($arItem["DETAIL_PICTURE"])) : ?>
							<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"];?>">
						<? endif; ?>
					</div>
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
						<span>Я согласен с <a href="/upload/policy.docx" target="_blank" rel="nofollow" download>условиями обработки персональных данных</a></span>
					</label>
					<input type="hidden" value="Заявка на книгу '<?=$arItem["NAME"]?>'" name="form_subject">
					<button type="submit" class="btn">Отправить</button>
				</form>
			</div>

		<?endforeach;?>
	</div>

	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<div class="container pagination-wrap">
			<?=$arResult["NAV_STRING"]?>
		</div>
	<?endif;?>
</section>
