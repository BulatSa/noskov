<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Споры в сфере оказания услуг и торговли");
?>
<div class="page-header page-header--disput-trade">
	<div class="container">
		<div class="page-header__title">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/services/title.php"
				)
			); ?>
		</div>
		<div class="page-header__descr">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/services/head_text.php"
				)
			); ?>
		</div>
		<a href="#" class="btn btn--white fancy" data-src="#modal-order">Оставить заявку на решение спора</a>
	</div>
</div>
<section class="s-about-man">
	<div class="container">
		<div class="row-bg">
			<div class="grid-6 grid-7_l grid-12_m">
				<div class="h1">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/services/help_title.php"
						)
					); ?>
				</div>
				<div class="about-icon-list">
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="/local/templates/noskov/img/svg/icons/icon-no-money.svg" alt="">
						</div>
						<div class="user-content">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/services/help_1.php"
								)
							); ?>
						</div>
					</div>
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="/local/templates/noskov/img/svg/icons/icon-wineglass.svg" alt="">
						</div>
						<div class="user-content">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/services/help_2.php"
								)
							); ?>
						</div>
					</div>
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="/local/templates/noskov/img/svg/icons/icon-calendar.svg" alt="">
						</div>
						<div class="user-content">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/services/help_3.php"
								)
							); ?>
						</div>
					</div>
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="/local/templates/noskov/img/svg/icons/icon-money-bag.svg" alt="">
						</div>
						<div class="user-content">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/services/help_4.php"
								)
							); ?>
						</div>
					</div>
					<div class="about-icon-list__item">
						<div class="about-icon-list__item-img">
							<img src="/local/templates/noskov/img/svg/icons/icon-doc-wrong.svg" alt="">
						</div>
						<div class="user-content">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/services/help_5.php"
								)
							); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-6 grid-5_l grid-12_m user-content">
				<img alt="Носков Игорь юрьевич" src="/local/templates/noskov/img/disput-trade-about.jpg">
			</div>
		</div>
	</div>
</section>
<section class="s-cases-intros">
	<div class="container">
		<p class="h1 title-lines">
			Завершенные проекты
		</p>
		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"infobase_cases",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPONENT_TEMPLATE" => "infobase_cases",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(0 => "", 1 => "",),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "4",
				"IBLOCK_TYPE" => "infobase",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "4",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "pagination",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(0 => "", 1 => "",),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N"
			)
		); ?>
		<div class="center-btn ">
			<a href="/infobase/cases/" class="btn btn--gold">Смотреть все проекты <i class="i-ar-right"></i></a>
		</div>
	</div>
</section>


<section class="disput-text-sec">
	<div class="container">
		<div class="disput-text">
			<div class="row">
				<div class="grid-12">
					<div class="user-content">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/services/disput_text.php"
						));?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-disput-order">
	<div class="container">
		<div class="row-bg disput-order">
			<div class="grid-6 grid-5_l grid-12_m disput-order__man-wrap">
				<img src="/local/templates/noskov/img/disput-man-long.jpg" class="disput-order__man" alt="">
			</div>
			<div class="grid-6 grid-7_l grid-12_m disput-order__info">
				<div class="user-content">
					<div class="h1">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/services/por_title.php"
							)
						); ?>
					</div>
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/services/por_text.php"
						)
					); ?>
				</div>
				<div class="details__docs">
					<p class="lead-gold">
						Необходимые документы
					</p>
					<div class="doc">
						<img alt="doc" src="/local/templates/noskov/img/doc.svg" class="doc__icon"> <br>
						Договор поставки/оказания услуг
					</div>
					<div class="doc">
						<img alt="doc" src="/local/templates/noskov/img/doc.svg" class="doc__icon">&nbsp; &nbsp; &nbsp;
						&nbsp;Переписка сторон договора
					</div>
					<div class="doc">
						<img alt="doc" src="/local/templates/noskov/img/doc.svg" class="doc__icon">&nbsp; &nbsp; &nbsp;
						&nbsp;Документы, подтверждающие претензии
					</div>
					<div class="doc">
						<img alt="doc" src="/local/templates/noskov/img/doc.svg" class="doc__icon"> <br>
						Иная документация
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<? $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/includes/order_small_section.php"
	)
); ?>
<section class="s-solutions">
<div class="container">
	<p class="h1 title-lines">
		Часто задаваемые вопросы
	</p>
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"faq",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "faq",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(0 => "", 1 => "",),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "9",
			"IBLOCK_TYPE" => "site_info",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "pagination",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "11",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(0 => "", 1 => "",),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "ACTIVE_FROM",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "DESC",
			"STRICT_SECTION_CHECK" => "N"
		)
	); ?>
	<div class="center-btn fade-top">
		<a href="#" class="btn btn--gold fancy" data-src="#modal-order" rel="nofollow">Решить мою проблему <i
				class="i-ar-right"></i></a>
	</div>
</div>
</section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>