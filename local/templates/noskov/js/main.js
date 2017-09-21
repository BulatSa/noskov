/***********************
 отправка формы в php BEGIN
***********************/
$(document).ready(function(){

	$(".ajax-form").on("submit", function(event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')){
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')){
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label');
			form_data.append(input_label__name,input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function(result) {
					console.log(result);
					$.fancybox.close();
					$.fancybox.open({src  : '#modal-thanks'});
					setTimeout(function() {$.fancybox.close();},4500);
					form[0].reset();
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
***********************/


/***********************
Input mask BEGIN
***********************/
$(function($){
	$("input[type='tel']").mask("+7 (999) 999-99-99");
});
/***********************
Input mask END
***********************/


/***********************
 fancybox BEGIN
 ***********************/
function init_fancy() {
	$('.fancy').fancybox({
		fullScreen: false,
		slideShow: false,
		thumbs: false,
		transitionEffect : "slide",
		autoFocus : false,
		backFocus : false,
		animationDuration : 400,
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		},
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn : true,
		transitionEffect : "slide",
		autoFocus : false,
		backFocus : false,
		animationDuration : 400,
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		},
	});
}
function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn : true,
		fullScreen: false,
		thumbs: false,
		youtube: {
			controls : 1,
			showinfo : 0,
			autoplay: 1
		},
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		},
		onUpdate : function( instance, current ) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if ( video ) {
				video.hide();
				width  = current.$slide.width() - 30;
				height = current.$slide.height() - 100;
				if ( height * ratio > width ) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width  : width,
					height : height
				}).show();
			}
		}
	});
}
$(document).ready(function(){
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(document).ready(function(){
	$('.scrollto').click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop:destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Submenu BEGIN
 ***********************/
$(document).ready(function(){

	$('.top-nav__link-wrap').on('click', function(){
		$(this).toggleClass('opened');
	});

	$(document).on('click touchstart',function (e) {
		var container = $(".top-nav__link-wrap");
		if (container.has(e.target).length === 0){
			container.removeClass('opened');
		}
	});

});
/***********************
 Submenu END
 ***********************/


/***********************
 Mobile menu BEGIN
 ***********************/
$(document).ready(function(){
	$('.menu-btn').click(function() {
		$(this).toggleClass('active');
		$('.top-nav').toggleClass('opened');
	});

	$(window).on('scroll',function () {
		if ($(this).scrollTop() > 40){
			$('.menu-btn').addClass('to-top');
		} else {
			$('.menu-btn').removeClass('to-top');
		}
	});

	$(document).on('click touchstart',function (e) {
		var container = $(".s-top-nav");
		if (container.has(e.target).length === 0){
			$('.menu-btn').removeClass('active');
			$('.top-nav').removeClass('opened');
		}
	});
});
/***********************
 Mobile menu END
 ***********************/


/***********************
Circles home BEGIN
***********************/
$(document).ready(function() {
	$('[data-percent]').on('click',function (e) {
		e.preventDefault();
		var index = $(this).parent('li').index();
		var circle = $(this).parents('.home-param').find('.blue-circle');
		draw_circle(circle,index);
	});

	$('.home-param').each(function () {
		var index = 0;
		var circle = $(this).find('.blue-circle');
		draw_circle(circle,index);
	});

	function draw_circle(circle,index) {
		var parent = circle.parents('.home-param');
		var this_li = parent.find('li').eq(index);

		var percent = this_li.find('span').data('percent');
		var from = this_li.find('span').data('from');
		var to = from + percent;

		var segment = new Segment(circle[0]);

		parent.find('li').removeClass('active');
		this_li.addClass('active');
		parent.find('figure strong').text(percent);

		segment.draw(from+'%', from+'%' , 0);
		segment.draw(from+'%', to+'%', 0.1 ,{});
	}
});
/***********************
Circles home END
***********************/


/**************************************************
  Show Visible Elements
***************************************************/
	/**
		 * Проверяет элемент на попадание в видимую часть экрана.
		 * Для попадания достаточно, чтобы верхняя или нижняя границы элемента были видны.
		 */
	function isVisible(elem) {
		var coords = elem.getBoundingClientRect();
		var windowHeight = document.documentElement.clientHeight;

		// верхняя граница elem в пределах видимости ИЛИ нижняя граница видима
		var topVisible = coords.top > 0 && coords.top < windowHeight;
		var bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;

		return topVisible || bottomVisible;
	}

	function showVisible() {
		var elements = document.querySelectorAll('.fade-top');

		for (var i = 0; i < elements.length; i++) {
			var element = elements[i];
			if (isVisible(element)) {
				if (!($(element).hasClass('fade-top--active'))) {
					var thisClass = element.getAttribute('class');
					element.setAttribute( 'class', thisClass + ' fade-top--active');
				}
				
			}
		}
	}

	window.onscroll = showVisible;
	showVisible();
/**************************************************
  End Show Visible 
***************************************************/


/**************************************************
  Segment Circle About
***************************************************/
	$(document).ready(function() {

		if ($('[data-segment-category]').length) {
			function linkPathDescr($path, $descr, $circleSpan, thisPercent) {
				$descr.on('mouseenter', function(event) {
					$path.addClass('active');
					$circleSpan.text(thisPercent + '%');
				});
				$descr.on('mouseleave', function(event) {
					$path.removeClass('active');
					$circleSpan.text('');
				});

				$path.on('mouseenter', function(event) {
					$descr.addClass('active');
					$circleSpan.text(thisPercent + '%');
				});
				$path.on('mouseleave', function(event) {
					$descr.removeClass('active');
					$circleSpan.text('');
				});
			}

			function segmentCircleAbout() {
				// Массив по категории деятельности, для обхода списка
				var $segmentCategories = [];
				$('[data-segment-category]').each(function(index, el) {
					$segmentCategories.push($(el));
				});

				// Исходные данные для круга
				var strokeWidth = '20';
				var strokeStep = 3;

				// Обход категорий деятельности
				for (var i = 0; i < $segmentCategories.length; i++) {
					// Данные от деятельности
					var initPercent = 0;
					// Текущая категория
					var $thisSegment = $segmentCategories[i];
					// Данные от svg
					var $thisSegmentCircle = $thisSegment.siblings('.about-stat__circle');
					var $thisSegmentSvg = $thisSegmentCircle.find('svg');
					var $thisSegmentSvgSpan = $thisSegmentSvg.find('span');

					// Пример path для копирования и добавления сегментов
					var $exampleSvgPath = $thisSegmentSvg.find('path');
					// Массив путей для инициализации плагина Segment
					var arrSegmentsCircles = [];
					// Настраиваем параметры круга
					var thisStrokeWidth = strokeWidth;

					// Обход описаний с процентами
					$thisSegment.find('.about-stat__info-item').each(function(index, el) {
						// Получаем проценты без %
						var thisPercent = $(el).find('span').text();
						thisPercent = +thisPercent.slice(0, thisPercent.length-1);

						// Копируем исходный path
						var $thisPercentPath = $exampleSvgPath.clone();
						$thisPercentPath.attr({
							class: 'blue-segment',
							id: $thisSegment.data('segment-category') + '-' + index,
							'stroke-width': thisStrokeWidth
						});

						// Добавляем path в svg
						$thisPercentPath.appendTo($thisSegmentSvg);

						// Линкуем path и описание
						$(el).attr('data-segment-path', $thisSegment.data('segment-category') + '-' + index);
						linkPathDescr($thisPercentPath, $(el), $thisSegmentSvgSpan, thisPercent);

						// Список всех path
						arrSegmentsCircles.push($thisSegmentSvg.find($thisPercentPath));

						// Инициализируем segment
						arrSegmentsCircles[index] = new Segment($thisPercentPath[0]);
						arrSegmentsCircles[index].draw(initPercent + "%", initPercent+thisPercent-0.5 + "%", 2.5);
						initPercent = initPercent + thisPercent;

						// Уменьшаем ширину для след path
						thisStrokeWidth = thisStrokeWidth - strokeStep;

					}); // Конец Обхода описаний с процентами

					// Удаления примера path
					$exampleSvgPath.remove();
				} // Конец Обхода категорий деятельности
			}

			segmentCircleAbout();

		}
	});
/**************************************************
  End Segment Circle About
***************************************************/


/**************************************************
  Footer Fixed
***************************************************/
	function footerFixed(gWindowWidth) {
		if (gWindowWidth > 740) {
			var footerHeight = $('.s-site-footer').innerHeight();
			$('.s-site-footer').addClass('fixed').addClass('compensate-for-scrollbar');
			$('body').css('padding-bottom', footerHeight-1);
		} else {
			$('.s-site-footer').removeClass('fixed').removeClass('compensate-for-scrollbar');
			$('body').css('padding-bottom', 0);
		}
	}

	// Данные окна браузера
	var gWindowWidth = $(window).width();
	$(window).on('resize', function(event) {
		gWindowWidth = $(window).width();
	});

	$(window).on('load', function(event) {
		footerFixed(gWindowWidth);
	});
	$(window).on('resize',  function(event) {
		footerFixed(gWindowWidth);
	});
/**************************************************
  End Footer Fixed
***************************************************/


/**************************************************
	About FAQ
***************************************************/
	$(document).ready(function(){
		if ($('.solutions-item__title').length){
			$('.solutions-item__title').on('click', function(event) {
				var this_faq = $(this).parent('.solutions-item');
				if (this_faq.hasClass('active')) {
					this_faq.removeClass('active')
				} else {
					$('.solutions-item').removeClass('active');
					this_faq.addClass('active');
				}
			});

			$(document).on('click touchstart',function (e){
				var div = $(".solutions-list");
				if (!div.is(e.target) && div.has(e.target).length === 0){
					$('.solutions-item').removeClass('active');
				}
			});
		}
	});
/**************************************************
	End About FAQ
***************************************************/


/**************************************************
  Contact Map sliding
***************************************************/
$(document).ready(function() {
	if($('.page-header__geo-icon-link').length) {
		var geoMapIcon = $('.page-header__geo-icon-link');
		var geoMapWrapper = $('.page-header--contact');

		geoMapIcon.on('click', function(event) {
			event.preventDefault();
			geoMapWrapper.toggleClass('open-map');
		});
	}
});
/**************************************************
  End Contact Map sliding
***************************************************/


/**************************************************
  Flickity
***************************************************/
$(document).ready(function() {
	if ($('.about-slider').length) {
		var $aboutSlider = $('.about-slider');
		var $thisSliderDescr = $('.about-slider-descr');

		var aboutSliderFlickity = new Flickity(document.querySelector('.about-slider'), {
			cellAlign: 'center',
			lazyLoad: true,
			adaptiveHeight: true,
			initialIndex: 1,
			imagesLoaded: true,
			pageDots: false,
			arrowShape: 'M50.89 1.78L49.11 0 0 49.11l.89.89-.89.89L49.11 100l1.78-1.78L2.67 50 50.89 1.78'
		});

		$aboutSlider.on('select.flickity', function(event) {
			var $thisSlide = $(aboutSliderFlickity.selectedElement);

			if ($thisSlide.find('span').length) {
				var $thisItemDescr = $thisSlide.find('span');

				$thisSliderDescr.removeClass('active');
				$thisSliderDescr.html($thisItemDescr.html());

				setTimeout(function(){
					//$thisSliderDescr.css('height', $thisSliderDescr.height());
					$thisSliderDescr.addClass('active')
				}, 300);
			} else {
				$thisSliderDescr.html('');
				//$thisSliderDescr.css('height', 0);
				$thisSliderDescr.removeClass('active')
			}
		});
	}
});
/**************************************************
  End Flickity
***************************************************/

/**************************************************
	Google Maps
***************************************************/
$(document).ready(function(){
	if ($('#googlemap').length) {

		google.maps.event.addDomListener(window, 'load', initMap);

		function initMap() {
			var mapOptions = {
				zoom: 16,
				scrollwheel: false,
				zoomControlOptions: {
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				mapTypeControl: false,
				center: new google.maps.LatLng(55.705287, 37.682112),
				styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#8b9198"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#323336"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#414954"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#2e2f31"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7a7c80"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#242427"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#202022"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#393a3f"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#202022"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#393a3f"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#202022"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#202124"}]}]
			};

			var mapElement = document.getElementById('googlemap');

			var map = new google.maps.Map(mapElement, mapOptions);

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(55.705287, 37.682112),
				map: map,
				title: '115193, г. Москва, ул. Петра Романова, д. 14, стр. 1',
				icon: '/local/templates/noskov/img/svg/icons/icon-map-marker.svg'
			});
		}
		initMap();

	}
});
/**************************************************
	End Google Maps
***************************************************/


/***********************
CASE COUNTER BEGIN
***********************/
function number_to(element,from,to,duration){
	var start = new Date().getTime();
	setTimeout(function() {
		var now = (new Date().getTime()) - start;
		var progress = now / duration;
		var result = Math.floor((to - from) * progress + from);
		var text_to_show = progress < 1 ? result : to;
		element.text(text_to_show);
		if (progress < 1) setTimeout(arguments.callee, 10);
	}, 10);
	element.addClass('finished');
}

function start_counter() {
	$('.details-param').each(function () {
		if ((isVisible($(this)[0])) && (!$(this).find('strong').hasClass('finished'))) {
			var to = $(this).data('num');
			number_to($(this).find('strong'), 0, to, 2000);
		}
	});
}


$(document).ready(function() {
	start_counter();
});

$(window).on('scroll',function () {
	start_counter();
});
/***********************
CASE COUNTER END
***********************/