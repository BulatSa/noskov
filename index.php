<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "⚖ Адвокат Носков Игорь Юрьевич — Защита интересов в суде🛡 Кандидат юридических наук ☎ +7 (495) 646-80-88");
$APPLICATION->SetTitle("Адвокат Носков Игорь Юрьевич — оказание юридических услуг адвоката в Москве");
?>


<header class="page-header page-header--home">
	<div class="container">
		<div class="page-header__goldtext">
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/home/head_gold.php"
			));?>
		</div>
		<div class="page-header__title">
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/home/head_title.php"
			));?>
		</div>
		<a href="#" class="btn btn--gold fancy" data-src="#modal-order">Задайте вопрос Носкову Игорю</a>
	</div>
</header>


<section class="s-home-about">
	<div class="container">
		<div class="row-bg">

			<div class="grid-6 grid-7_l grid-12_m">
				<div class="user-content">
					<h1 class="h1">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/home/about_title.php"
						));?>
					</h1>
					<p class="lead-gold">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/home/about_subtitle.php"
						));?>
					</p>
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/home/about_text.php"
					));?>
				</div>

				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"serts_home",
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
						"COMPONENT_TEMPLATE" => "serts_home",
						"COMPOSITE_FRAME_MODE" => "A",
						"COMPOSITE_FRAME_TYPE" => "AUTO"
					),
					false
				);?>

			</div>

			<div class="grid-6 grid-5_l grid-12_m">
				<div class="home-about-photo">
					<p class="h3">Ваш личный адвокат в&nbsp;суде</p>
					<a href="/about/" class="link link--gold">Узнать больше <i class="i-ar-right"></i></a>
				</div>
			</div>

		</div>
	</div>
</section>


<section class="s-disput-list">
	<div class="container">

		<div class="row-ng disput-list">
			<div class="grid-4 grid-6_m grid-12_xs">
				<a href="/disputs/podrjad/" class="disput">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/disputs/1.jpg" alt="1" class="disput__img">
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


<section class="s-home-params">
	<div class="container">
		<div class="row-bg">

			<div class="grid-4 grid-12_m">
				<div class="home-param">
					<header class="home-param__header">
						<svg width="168" height="168">
							<circle cx="84" cy="84" r="80" stroke="#f2f2f2" stroke-width="8" fill="#FFF" />
							<path class="blue-circle" stroke="#232780" stroke-width="8" fill="none" d="M4,84a80,80 0 1,0 160,0a80,80 0 1,0 -160,0"/>
						</svg>
						<figure><strong>19</strong>%</figure>
					</header>
					<p class="lead-gold">Стадии достижения цели с&nbsp;помощью суда:</p>
					<ul class="home-param__list">
						<li class="active"><span data-percent="19" data-from="0">19&nbsp;% – на&nbsp;стадии досудебных переговоров</span></li>
						<li><span data-percent="16" data-from="19">16&nbsp;% – до&nbsp;вынесения судебного акта</span></li>
						<li><span data-percent="47" data-from="35">47&nbsp;% – после вынесения судебного акта без принудительного его исполнения</span> </li>
						<li><span data-percent="18" data-from="82">18&nbsp;% – после вынесения судебного акта</span></li>
					</ul>
				</div>
			</div>

			<div class="grid-4 grid-12_m">
				<div class="home-param">
					<header class="home-param__header">
						<svg width="168" height="168">
							<circle cx="84" cy="84" r="80" stroke="#f2f2f2" stroke-width="8" fill="#FFF" />
							<path class="blue-circle" stroke="#232780" stroke-width="8" fill="none" d="M4,84a80,80 0 1,0 160,0a80,80 0 1,0 -160,0"/>
						</svg>
						<figure><strong>15</strong>%</figure>
					</header>
					<p class="lead-gold">Сроки достижения цели с&nbsp;помощью суда:</p>
					<ul class="home-param__list">
						<li class="active"><span data-percent="15" data-from="0">15&nbsp;% – до&nbsp;3-х месяцев</span></li>
						<li><span data-percent="47" data-from="15">47&nbsp;% – от&nbsp;3-х месяцев до&nbsp;1&nbsp;года</span></li>
						<li><span data-percent="24" data-from="62">24&nbsp;% – от&nbsp;1&nbsp;года до&nbsp;2-х&nbsp;лет</span> </li>
						<li><span data-percent="14" data-from="86">14&nbsp;% – более 2-х лет</span></li>
					</ul>
				</div>
			</div>

			<div class="grid-4 grid-12_m">
				<div class="home-param">
					<header class="home-param__header">
						<svg width="168" height="168">
							<circle cx="84" cy="84" r="80" stroke="#f2f2f2" stroke-width="8" fill="#FFF" />
							<path class="blue-circle" stroke="#232780" stroke-width="8" fill="none" d="M4,84a80,80 0 1,0 160,0a80,80 0 1,0 -160,0"/>
						</svg>
						<figure><strong>29</strong>%</figure>
					</header>
					<p class="lead-gold">Трудозатратность достижения цели с&nbsp;помощью суда:</p>
					<ul class="home-param__list">
						<li class="active"><span data-percent="29" data-from="0">29&nbsp;% – сбор доказательной базы и&nbsp;информации</span></li>
						<li><span data-percent="31" data-from="29">31&nbsp;% – подготовка процессуальных документов</span></li>
						<li><span data-percent="26" data-from="60">26&nbsp;% – участие в&nbsp;судебном разбирательстве</span> </li>
						<li><span data-percent="14" data-from="86">14&nbsp;% – исполнение судебного акта (без&nbsp;банкротства)</span></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>



<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/includes/intros_section.php"
));?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>