<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Специализация");
?>
	<div class="page-header page-header--specialization">
	<div class="container">
		<div class="page-header__title">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/spec/title.php"
				)
			); ?>
		</div>
		<div class="page-header__goldtext">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/spec/subtitle.php"
				)
			); ?>
		</div>
		<div class="order-block order-block--mini">
			<p class="lead order-block__subtitle">
				Оставьте заявку и&nbsp;я&nbsp;с&nbsp;вами свяжусь
			</p>
			<form class="ajax-form vertical-form">
				<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
				<input type="tel" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
				<textarea type="text" placeholder="Краткая суть проблемы*" rows="1" data-req="true"></textarea>
				<input type="hidden" value="Новая заявка" name="form_subject">
				<label class="style-checkbox">
					<input type="checkbox" name="user_agree" value="yes" data-label="Пользователь согласился с условиями"
						data-req="true" checked=""> <span>Я согласен с <a href="/upload/policy.docx" target="_blank" rel="nofollow">условиями обработки персональных данных</a></span>
				</label>
				<button type="submit" class="btn">Оставить заявку</button>
			</form>
		</div>
	</div>
	</div>
	<section class="s-about-man">
		<div class="container">
			<div class="h1 title-lines">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/spec/ab_title.php"
					)
				); ?>
			</div>
			<div class="row-bg">
				<div class="grid-6 grid-7_l grid-12_m">
					<div class="user-content">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/spec/ab_text.php"
							)
						); ?>
					</div>
					<div class="about-icon-list">
						<div class="about-icon-list__item">
							<div class="about-icon-list__item-img">
								<img src="/local/templates/noskov/img/svg/icons/icon-graph-board.svg" alt="">
							</div>
							<div class="user-content">
								<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => "/includes/spec/ab_text_1.php"
										)
									); ?>
							</div>
						</div>
						<div class="about-icon-list__item">
							<div class="about-icon-list__item-img">
								<img src="/local/templates/noskov/img/svg/icons/icon-hat-uni.svg" alt="">
							</div>
							<div class="user-content">
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/includes/spec/ab_text_2.php"
									)
								); ?>
							</div>
						</div>
						<div class="about-icon-list__item">
							<div class="about-icon-list__item-img">
								<img src="/local/templates/noskov/img/svg/icons/icon-judge-hammer.svg" alt="">
							</div>
							<div class="user-content">
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/includes/spec/ab_text_3.php"
									)
								); ?>
							</div>
						</div>
						<div class="about-icon-list__item">
							<div class="about-icon-list__item-img">
								<img src="/local/templates/noskov/img/svg/icons/icon-book-pencil.svg" alt="">
							</div>
							<div class="user-content">
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/includes/spec/ab_text_4.php"
									)
								); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-6 grid-5_l grid-12_m user-content">
					<img alt="Носков Игорь Юрьевич" src="/local/templates/noskov/img/specialization-about.jpg">
				</div>
			</div>
		</div>
	</section>
	<section class="s-solutions">
		<div class="container">
			<div class="h1 title-lines">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/spec/faq_title.php"
					)
				); ?>
			</div>
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
					"PARENT_SECTION" => "8",
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
			<div class="center-btn">
				<a href="#" class="btn btn--gold fancy" data-src="#modal-order">Решить мою проблему <i
						class="i-ar-right"></i></a>
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
	<section class="s-analitic-intros"><img alt="logo" src="/local/templates/noskov/img/logo-sym-white.svg"
	                                        class="s-analitic-intros__bg">
		<div class="container">
			<p class="h1 title-lines title-lines--gold ">
				Сотрудничая со мной, вы получаете:
			</p>
			<div class="row">
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="analitic-intro ">
						<div class="analitic-intro__title">
							<img src="/local/templates/noskov/img/svg/icons/icon-horse.svg" alt="">
							<h3 class="h3">Четкий план действий</h3>
						</div>
						<div class="case-intro__preview">
							Детальная проработка стратегии и тактики&nbsp;ведения судебного дела позволяет достигнуть
							поставленной цели в&nbsp;короткие сроки и избежать лишних затрат, что особенно актуально, если
							бюджет ограничен.
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="analitic-intro ">
						<div class="analitic-intro__title">
							<img src="/local/templates/noskov/img/svg/icons/icon-target.svg" alt="">
							<h3 class="h3">Работу только на результат</h3>
						</div>
						<div class="case-intro__preview">
							Дело считаю выигранным только тогда, когда мой Доверитель получил&nbsp;то, чего хотел добиться с
							помощью&nbsp;судебного разбирательства. Судебный акт, который не исполнен Оппонентом, не является
							целью.
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="analitic-intro ">
						<div class="analitic-intro__title">
							<img src="/local/templates/noskov/img/svg/icons/icon-bowl.svg" alt="">
							<h3 class="h3">Уверенность в успехе</h3>
						</div>
						<div class="case-intro__preview">
							Правильная оценка существующего положения и использование всех возможных средств позволяет
							объективно оценить достижимость поставленной цели и выбрать оптимальный путь.
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="analitic-intro ">
						<div class="analitic-intro__title">
							<img src="/local/templates/noskov/img/svg/icons/icon-time.svg" alt="">
							<h3 class="h3">Экономию времени</h3>
						</div>
						<div class="case-intro__preview">
							Судебное разбирательство - это десятки часов, потраченных на подготовку документов и участие в
							судебных заседаниях. Найдите своему времени более ценное предназначение.
						</div>
					</div>
				</div>
			</div>
			<div class="center-btn ">
				<a href="#" class="btn btn--gold fancy" data-src="#modal-order">Решить мою проблему <i
						class="i-ar-right"></i></a>
			</div>
		</div>
	</section>
<? $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/includes/intros_section.php"
	)
); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>