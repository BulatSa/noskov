<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Об адвокате");
?>


<section class="s-about-man">
	<div class="container">
		<div class="row-bg">

			<div class="grid-6 grid-7_l grid-12_m">
				<div class="user-content">
					<h1>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/about/title.php"
						));?>
					</h1>
					<p class="lead-gold">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/about/subtitle.php"
						));?>
					</p>
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/about/top_text.php"
					));?>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"about_book",
					array(
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
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_DATE" => "Y",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(
							0 => "SORT",
							1 => "",
							2 => "",
							3 => "",
						),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "5",
						"IBLOCK_TYPE" => "infobase",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "Y",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "1",
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
						"PROPERTY_CODE" => array(
							0 => "",
							1 => "",
							2 => "",
						),
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
						"STRICT_SECTION_CHECK" => "N",
						"COMPONENT_TEMPLATE" => "about_book",
						"COMPOSITE_FRAME_MODE" => "A",
						"COMPOSITE_FRAME_TYPE" => "AUTO"
					),
					false
				);?>
			</div>

			<div class="grid-6 grid-5_l grid-12_m user-content">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/about-lawyer.jpg" alt="Носков Игорь юрьевич">
			</div>

		</div>
	</div>
</section>


<section class="s-about-stat">
	<div class="container">
		<div class="h1 title-lines fade-top">
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/about/params_title.php"
			));?>
		</div>
		<div class="row-bg row_l">
			<div class="grid-4 grid-12_s about-stat-wrap">
				<div class="about-stat fade-top">
					<p class="about-stat__title">Судебные проекты по&nbsp;судам Российской Федерации:</p>
					<div class="about-stat__circle">
						<span></span>
						<svg width="205" height="205">
							<path class="blue-segment" id="my-path" stroke="#232780" stroke-width="20" fill="none" d="M102.5,16A86.5,86.5,0,1,1,16,102.5,86.5,86.5,0,0,1,102.5,16"></path>
						</svg>
					</div>
					<div class="about-stat__info" data-segment-category="industry">
						<div class="about-stat__info-item">
							<span>72%</span>
							<p>Арбитражные суды</p>
						</div>
						<div class="about-stat__info-item">
							<span>19%</span>
							<p>Суды общей юрисдикции</p>
						</div>
						<div class="about-stat__info-item">
							<span>9%</span>
							<p>Третейские суды</p>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-4 grid-12_s about-stat-wrap">
				<div class="about-stat fade-top">
					<p class="about-stat__title">Судебные проекты по&nbsp;категориям Доверителей:</p>
					<div class="about-stat__circle">
						<span></span>
						<svg width="205" height="205">
							<path class="blue-segment" id="my-path" stroke="#232780" stroke-width="20" fill="none" d="M102.5,16A86.5,86.5,0,1,1,16,102.5,86.5,86.5,0,0,1,102.5,16"></path>
						</svg>
					</div>
					<div class="about-stat__info" data-segment-category="law">
						<div class="about-stat__info-item">
							<span>57%</span>
							<p>Юридические лица</p>
						</div>
						<div class="about-stat__info-item">
							<span>24%</span>
							<p>Индивидуальные предприниматели</p>
						</div>
						<div class="about-stat__info-item">
							<span>19%</span>
							<p>Физические лица </p>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-4 grid-12_s about-stat-wrap">
				<div class="about-stat fade-top">
					<p class="about-stat__title">Судебные проекты по&nbsp;сфере правоотношений:</p>
					<div class="about-stat__circle">
						<span></span>
						<svg width="205" height="205">
							<path class="blue-segment" id="my-path" stroke="#232780" stroke-width="20" fill="none" d="M102.5,16A86.5,86.5,0,1,1,16,102.5,86.5,86.5,0,0,1,102.5,16"></path>
						</svg>
					</div>
					<div class="about-stat__info" data-segment-category="money">
						<div class="about-stat__info-item">
							<span>26%</span>
							<p>Сфера подряда</p>
						</div>
						<div class="about-stat__info-item">
							<span>14%</span>
							<p>Сфера недвижимости</p>
						</div>
						<div class="about-stat__info-item">
							<span>18%</span>
							<p>Сфера оказания услуг и торговли</p>
						</div>
						<div class="about-stat__info-item">
							<span>19%</span>
							<p>Сфера денежных обязательств</p>
						</div>
						<div class="about-stat__info-item">
							<span>11%</span>
							<p>Сфера банкротства</p>
						</div>
						<div class="about-stat__info-item">
							<span>12%</span>
							<p>Иные сферы</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-intros">
	<div class="container">
		<div class="row-bg">

			<div class="grid-4 grid-12_m fade-top">

				<div class="h1 title-lines">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-hat-uni.svg" alt="">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/about/col_1_title.php"
					));?>
				</div>
				<div class="user-content">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/about/col_1_text.php"
					));?>
				</div>
			</div>

			<div class="grid-4 grid-12_m fade-top">
				<div class="h1 title-lines">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-judge-hammer.svg" alt="">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/about/col_2_title.php"
					));?>
				</div>
				<div class="user-content">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/about/col_2_text.php"
					));?>
				</div>
			</div>

			<div class="grid-4 grid-12_m fade-top">
				<div class="h1 title-lines">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-lion.svg" alt="">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/about/col_3_title.php"
					));?>
				</div>
				<div class="user-content">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/about/col_3_text.php"
					));?>
				</div>
			</div>

		</div>
	</div>
</section>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"about_slider", 
	array(
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "site_info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
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
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "about_slider",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>


<section class="s-about-sert">
	<div class="container">
		<div class="h1 title-lines">
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/about/serts_title.php"
			));?>
		</div>

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"serts_about",
			array(
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
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "7",
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
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
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
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "serts_about",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO"
			),
			false
		);?>

	</div>
</section>


<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/includes/order_section.php"
));?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>