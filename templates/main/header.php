<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>    <?
    use Bitrix\Main\Page\Asset; 
    ?>
<!DOCTYPE html>

<html lang="ru">
<head>
	<title><?=$APPLICATION->ShowTitle();?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="favicon.png" />
	<?
		$APPLICATION->ShowHead();
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/bootstrap/bootstrap-grid-3.3.1.min.css"); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/font-awesome-4.2.0/css/font-awesome.min.css"); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/fancybox/jquery.fancybox.min.css"); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/owl-carousel/owl.carousel.css"); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/countdown/jquery.countdown.css"); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fonts.css"); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css"); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/media.css"); 



		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/jquery/jquery-1.11.1.min.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/jquery-mousewheel/jquery.mousewheel.min.js"); 
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/fancybox/jquery.fancybox.min.js"); 
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/waypoints/waypoints-1.6.2.min.js"); 
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/scrollto/jquery.scrollTo.min.js"); 
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/owl-carousel/owl.carousel.min.js"); 
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.inputmask.js"); 
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/countdown/jquery.plugin.js"); 
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/landing-nav/navigation.js"); 
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/common.js"); 

?>

</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-9">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top"
	),
	false
);?>

				</div>
						<div class="col-xs-3">
				<?/*	<div class="social">
<?

    $APPLICATION->IncludeFile("/local/include/social.php", Array(), Array(
    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
    "NAME"      => "Социальные кнопки",      // текст всплывающей подсказки на иконке
    "TEMPLATE"  => "social.php"                    // имя шаблона для нового файла
    ));
?>

					</div>*/?>
							<div style='text-align:center;'>
							<a href="http://raivola.spb.ru"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="" style='height:50px;'></a><br>
							<span style='text-align:center; margin:0 auto; display:block;color:#FFF;opacity:.6;'>Наш партнер</span>
							</div>
</div> 
			</div>
		</div>
	</header>
	<div class="banner" id='main'>
		<video width="100%" height="auto" muted autoplay loop playsinline src="<?=SITE_TEMPLATE_PATH?>/video.mp4">

		</video>
		<div class="container">
			<div class="row">
				<div class="col-xs-offset-9 col-xs-3">
					<div class="contacts">
						<a href="tel:8 (921) 914-22-22" class="phone">8 (921) 914-22-22</a>
						<?/*	<div class="address">Рощино, песочная 1, Raivola</div> */?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
			<?/*		<div class="logo">

							<a href="http://raivola.spb.ru"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a>
					</div>
	<span style='text-align:center; margin:0 auto; display:block;opacity:.6;'>	Наш партнер		</span>*/?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="title">Вкусная карта</div>
					<h1>доставка еды в Рощино</h1>
					<div class="line"></div>
				</div>
				<div class="col-xs-12">
					<div class="description">Пора побаловать себя!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="center">				
						<div class="get">По «Вкусной карте» вы получаете:</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="center">
						<div class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-1.png" alt=""></div>
						<div class="icondesc">Доставка еды, тортов на заказ, эксклюзивных блюд</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="center">
						<div class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-2.png" alt=""></div>
						<div class="icondesc">Скидка 12% на услуги столовой</div>	
					</div>
				</div>
				<div class="col-xs-4">
					<div class="center">
						<div class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-3.png" alt=""></div>
						<div class="icondesc">БЕСПЛАТНОЕ участие в кулинарных мастер классах и лекциях сомелье.</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="description">
						Вступай в клуб и становись частью большой семьи!
					</div>
					<div class="center">
						<div class="order-button" data-types='заказать карту' data-fancybox data-src="#form" data-modal="true">Заказать карту</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="menublocks">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="title-menu">
						Меню для доставки
					</div>
				</div>
			</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_SUBSECTIONS" => "A",
		"LABEL_PROP" => array(
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "468",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "PRICE",
			2 => "WEIGHT",
			3 => "PROPERTY_PRICE",
			4 => "PROPERTY_WEIGHT",
			5 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "catalog",
		"PROPERTY_CODE_MOBILE" => array(
		)
	),
	false
);?>
				
			<div class="row" id='bank'>
				<div class="col-xs-12">
					<div class="title-menu">
						Банкетный зал
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="block-text">
						<p>
							Решения под ключ для вашего мероприятия. Главным преимуществом является то что мы оказываем полный комплекс мероприятий: от проживания ваших гостей, до организации досуга (пейнтбол, анимация, тимбилдинги) Банкетные залы в отеле созданы для удовольствия корпоративных гостей. 
							Это идеальное место для проведения корпоративного загородного отдыха.
						</p>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="row">
						<div class="col-xs-6 slideimg">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img1.jpg" alt="">
						</div>
						<div class="col-xs-6 slideimg">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img2.jpg" alt="">
						</div>		
					</div>
					<div class="row">
						<div class="center">
							<div class="viewall" data-id='slide'>Посмотреть все фото</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="hiddenblock">
	<div class='slider' id='slide'>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"gallery",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
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
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "1",
		"FIELD_CODE" => array("", ""),
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("", "FOTO"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>

		<div class="close">закрыть</div>
		<div class="owl-nav">
			<div class="next_button"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt=""></div>
			<div class="prev_button "><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt=""></div>
		</div>
	</div>
</div>
				<?/*
	<div class="menublocks" id='bar'>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="title-menu">
						Бар ZAСпичками
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="row">
						<div class="col-xs-6 slideimg">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img1.jpg" alt="">
						</div>
						<div class="col-xs-6 slideimg">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img2.jpg" alt="">
						</div>		
					</div>
					<div class="row">
						<div class="center">
							<div class="viewall" data-id='slide2'>Посмотреть все фото</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="block-text">
						<p>
							Необычный интерьер бара, созданный в стиле старого финского деревянного дома рыбака или охотника, сочетает европейские и русские традиции. В качестве элементов оформления интерьера использованы сети, рыбацкие снасти, чучела животных и домашняя утварь начала прошлого века.
						</p>
					</div>
				</div>
			</div>			
		</div>
	</div>

	<div class="hiddenblock">
		<div class='slider' id='slide2'>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"gallery",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
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
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "2",
		"FIELD_CODE" => array("", ""),
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("", "FOTO"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>
			<div class="close">закрыть</div>
			<div class="owl-nav">
				<div class="next_button"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt=""></div>
				<div class="prev_button"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt=""></div>
			</div>
		</div>	
	</div>
	<div class="stolovay" id='stolovay'>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="st-title">
						Также вы всегда можете попробовать наши блюда в столовой отеля
					</div>
					<div class="center">
						<div class="viewphoto view">Смотреть фото</div>
					</div>
				</div>
			</div>
			<div class="photos">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"gallery2",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
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
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "3",
		"FIELD_CODE" => array("", ""),
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("", "FOTO"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>

			</div>
			<div class="row">
				<div class="center">
					<div class="viewphoto cl" style='display:none;'>Свернуть</div>
				</div>			
			</div>
		</div>
	</div>
*/?>
	<div class="team">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/team.jpg" alt="">
		<div class="sing">
			Для вашего мероприятия наш <br>
			Шеф-повар <span>Сащенко Андрей</span><br>
			и его команда готовы изготовить эксклюзивные блюда
		</div>
	</div>
	<div class="maps" id='contacts'>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0f09fafa96896451ec94b367d7b9dbe2179280cc676dde6e932b7eb74a1c7d37&amp;width=100%&amp;height=calc(100vh - 176px)&amp;max-height=950&amp;lang=ru_RU&amp;scroll=false;&amp;id=contacts"></script>
	</div>
	<div class="footer">
		<div class="container">
			<div style='float:left'>
							<a href="http://raivola.spb.ru"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="" style='height:50px;'></a><br>
							<span style=' margin:0 auto; display:block;color:#FFF;opacity:.6;'>	Наш партнер	</span>
			</div>
			<div class='politic'><a  data-types="politic" data-fancybox="" data-src="#politic" data-modal="true" href='#politic'>Политика конфиденциальности</a></div>
				<div class="contacts">
					<?/*	Представительство в Санкт-Петербурге<br>*/?>
		<a href="tel:8 (921) 914-22-22" class="phone">8 (921) 914-22-22</a><br>
					<?/*	Рощино, песочная 1, Raivola<br> */?>
					<a href='https://weblst.ru'><img src='<?=SITE_TEMPLATE_PATH?>/img/WbStudio.svg'></a>
				</div>
		</div>
	</div>
	<div id="form" style="display: none;">
		<div class="close"></div>
		<form>
			<label for="">Имя:<br><input type="text" name='name' required></label>
			<label for="">Телефон:<br><input type="text" name='phone' required></label>
			<label for="">Email:<br><input type="text" name='email'></label>
			<input type='hidden' name='type'>
			<label for="" class="checkbox"><input type="checkbox" required="" checked><span>даю согласие на обработку своих персональных данных</span></label>
			<div class="center"><button type='submit' class="order-button">Заказать</button></div>
		</form>
	</div>
	<div id="promocode" style="display: none;">
		<div class="close"></div>
		<div class='title'>Регистрация промокода</div>
		<form>
			<label for="">Промокод:<br><input type="text" name='promocode' required></label>
			<label for="">Имя:<br><input type="text" name='name' required></label>
			<label for="">Телефон:<br><input type="text" name='phone' required></label>
			<label for="">Email:<br><input type="text" name='email' required></label>
			<input type='hidden' name='type' value='promocod'>
			<label for="">Откуда вы узнали о нас:<br><select name='why'>
				<option value='Вконтакте'>Вконтакте</option>
				<option value='Instagram'>Instagram</option>
				<option value='Реклама на улице'>Реклама на улице</option>
				<option value='Флаер'>Флаер</option>
				<option value='Друзья/знакомые'>Друзья/знакомые</option>
			</select></label>
			<label for="" class="checkbox"><input type="checkbox" required="" checked><span>даю согласие на обработку своих персональных данных</span></label>
			<div class="center"><button type='submit' class="order-button">Зарегистрировать</button></div>
		</form>
	</div>
	<div id="okpromocode" style="display: none;">
		<div class="close"></div>
		<div class='thanks'>
		Ваш промо-код зарегистрирован.<br> Спасибо за то, что выбрали нас

		</div>
	</div>
	<div id="thanks" style="display: none;">
		<div class="close"></div>
		<div class='thanks'>
			Спасибо. Заявка принята. В ближайшее время с Вами свяжется наш менеджер

		</div>
	</div>
	<div id="politic" style="display: none;">
		<div class="close"></div>

<div class='pol'>
		<h1>Политика конфиденциальности персональных данных</h1>
		<p>Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в 
		отношении всей информации, которую сайт <strong>Вкусная карта</strong>, (далее – Карта) расположенный на 
		доменном имени <strong><a href="https://vkusnayakarta.ru/" target="_blank">https://vkusnayakarta.ru/</a></strong> (а также его субдоменах), может получить о Пользователе во время использования 
		сайта <a href="https://vkusnayakarta.ru/" target="_blank">https://vkusnayakarta.ru/</a> (а также его субдоменов), его программ и его продуктов.</p>
		
		<h2>1. Определение терминов</h2>
		
		<p><strong>1.1 В настоящей Политике конфиденциальности используются следующие термины:<strong></strong></strong></p>
		
		<p>1.1.1. «<strong>Администрация сайта</strong>» (далее – Администрация) – уполномоченные сотрудники 
		на управление сайтом <strong>Вкусная карта</strong>, действующие от имени отель Райвола,
		которые организуют и (или) осуществляют обработку персональных данных, а также определяет цели обработки персональных 
		данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</p>
		
		<p>1.1.2. «Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному, или определяемому 
		физическому лицу (субъекту персональных данных).</p>

		<p>1.1.3. «Обработка персональных данных» - любое действие (операция) или совокупность действий (операций), совершаемых 
		с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, 
		систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу 
		(распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p>

		<p>1.1.4. «Конфиденциальность персональных данных» - обязательное для соблюдения Оператором или иным получившим доступ 
		к персональным данным лицом требование не допускать их распространения без согласия субъекта персональных данных или 
		наличия иного законного основания.</p>

		<p>1.1.5. «Сайт <strong> Вкусная карта</strong>» - это совокупность связанных между собой веб-страниц, размещенных в сети Интернет по уникальному 
		адресу (URL): <strong><a href="https://vkusnayakarta.ru/" target="_blank">https://vkusnayakarta.ru/</a></strong>, а также его субдоменах.</p>

		<p>1.1.6. «Субдомены»  - это страницы или совокупность страниц, расположенные на доменах третьего уровня, 
		принадлежащие сайту Вкусная карта, а также другие временные страницы, внизу который указана контактная
		информация Администрации</p>
		
		<p>1.1.5. «Пользователь сайта <strong>Вкусная карта</strong> » (далее Пользователь) – лицо, имеющее доступ 
		к сайту <strong>Вкусная карта</strong>, посредством сети Интернет 
		и использующее информацию, материалы и продукты сайта <strong>Вкусная карта</strong>.</p>
		
		<p>1.1.7. «Cookies» — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя, 
		который веб-клиент или веб-браузер каждый раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу 
		соответствующего сайта.</p>

		<p>1.1.8. «IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, через который Пользователь получает доступ на 
		Карта.</p>
		
		<p>1.1.9. «Товар » - продукт, который Пользователь заказывает на сайте и оплачивает через платёжные системы.</p>
		
		<h2>2. Общие положения</h2>
		<p>2.1. Использование сайта Вкусная карта Пользователем означает согласие с настоящей Политикой 
		конфиденциальности и условиями обработки персональных данных Пользователя.</p>

		<p>2.2. В случае несогласия с условиями Политики конфиденциальности Пользователь должен прекратить использование 
		сайта Вкусная карта .</p>

		<p>2.3. Настоящая Политика конфиденциальности применяется к сайту Вкусная карта.
		Карта не контролирует и не несет ответственность за сайты третьих лиц, на которые Пользователь 
		может перейти по ссылкам, доступным на сайте Вкусная карта.</p>

		<p>2.4. Администрация не проверяет достоверность персональных данных, предоставляемых Пользователем.</p>
		
		<h2>3. Предмет политики конфиденциальности</h2>
		
		<p>3.1. Настоящая Политика конфиденциальности устанавливает обязательства Администрации по неразглашению и обеспечению 
		режима защиты конфиденциальности персональных данных, которые Пользователь предоставляет по запросу Администрации при 
		регистрации на сайте Вкусная карта, при подписке на информационную e-mail рассылку или при оформлении заказа.</p>
		
		<p>3.2. Персональные данные, разрешённые к обработке в рамках настоящей Политики конфиденциальности, предоставляются 
		Пользователем путём заполнения форм на сайте Вкусная карта и включают в себя следующую информацию:<br>
		3.2.1. фамилию, имя, отчество Пользователя;<br>
		3.2.2. контактный телефон Пользователя;<br>
		3.2.3. адрес электронной почты (e-mail)<br>
		3.2.4. место жительство Пользователя (при необходимости)<br>
		3.2.5. адрес доставки Товара (при необходимости)
		3.2.6. фотографию (при необходимости).</p>

		<p>3.3. Карта защищает Данные, которые автоматически передаются при посещении страниц:<br>
		- IP адрес;<br>
		- информация из cookies;<br>
		- информация о браузере <br>
		- время доступа;<br>
		- реферер (адрес предыдущей страницы).</p>

		<p>3.3.1. Отключение cookies может повлечь невозможность доступа к частям сайта , требующим 
		авторизации.</p>

		<p>3.3.2. Карта осуществляет сбор статистики об IP-адресах своих посетителей. Данная информация 
		используется с целью предотвращения, выявления и решения технических проблем.</p>
		<p>3.4. Любая иная персональная информация неоговоренная выше (история посещения, используемые браузеры, операционные 
		системы и т.д.) подлежит надежному хранению и нераспространению, за исключением случаев, 
		предусмотренных в п.п. 5.2. и 5.3. настоящей Политики конфиденциальности.</p>
		
		<h2>4. Цели сбора персональной информации пользователя</h2>
		
		<p>4.1. Персональные данные Пользователя Администрация может использовать в целях:<br>
		4.1.1. Идентификации Пользователя, зарегистрированного на сайте Вкусная карта для его дальнейшей авторизации, оформления заказа 
		и других действий.<br>

		4.1.2. Предоставления Пользователю доступа к персонализированным данным сайта Вкусная карта.<br>

		4.1.3. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования 
		сайта Вкусная карта, оказания услуг и обработки запросов и заявок от Пользователя.<br>

		4.1.4. Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.<br>

		4.1.5. Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.<br>

		4.1.6. Создания учетной записи для использования частей сайта Вкусная карта, если Пользователь дал согласие на 
		создание учетной записи.<br>

		4.1.7. Уведомления Пользователя по электронной почте.<br>

		4.1.8. Предоставления Пользователю эффективной технической поддержки при возникновении проблем, связанных с использованием 
		сайта Вкусная карта.<br>

		4.1.9. Предоставления Пользователю с его согласия специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени 
		сайта Вкусная карта.<br>
		4.1.10. Осуществления рекламной деятельности с согласия Пользователя.</p>
		
		<h2>5. Способы и сроки обработки персональной информации</h2>
		
		<p>5.1. Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в 
		том числе в информационных системах персональных данных с использованием средств автоматизации или без использования 
		таких средств.</p>
		<p>5.2. Пользователь соглашается с тем, что Администрация вправе передавать персональные данные третьим лицам, в 
		частности, курьерским службам, организациями почтовой связи (в том числе электронной), операторам электросвязи, 
		исключительно в целях выполнения заказа Пользователя, оформленного на сайте Вкусная карта, включая доставку Товара, 
		документации или e-mail сообщений.</p>
		<p>5.3. Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти Российской 
		Федерации только по основаниям и в порядке, установленным законодательством Российской Федерации.</p>
		
		<p>5.4. При утрате или разглашении персональных данных Администрация вправе не информировать Пользователя об утрате или 
		разглашении персональных данных.</p>
		<p>5.5. Администрация принимает необходимые организационные и технические меры для защиты персональной информации 
		Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, 
		а также от иных неправомерных действий третьих лиц.</p>
		<p>5.6. Администрация совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных 
		отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.</p>
		
		<h2>6. Права и обязанности сторон</h2>
		
		<p><strong>6.1. Пользователь вправе:</strong></p>
		<p>6.1.1. Принимать свободное решение о предоставлении своих персональных данных, необходимых для использования 
		сайта Вкусная карта, и давать согласие на их обработку.</p>

		<p>6.1.2. Обновить, дополнить предоставленную информацию о персональных данных в случае изменения данной информации.</p>
		
		<p>6.1.3. Пользователь имеет право на получение у Администрации информации, касающейся обработки его персональных данных, 
		если такое право не ограничено в соответствии с федеральными законами. Пользователь вправе требовать от Администрации
		уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, 
		устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также 
		принимать предусмотренные законом меры по защите своих прав.</p>

		<p><strong>6.2. Администрация обязана:</strong></p>
		<p>6.2.1. Использовать полученную информацию исключительно для целей, указанных в п. 4 настоящей Политики 
		конфиденциальности.</p>

		<p>6.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного 
		разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными возможными 
		способами переданных персональных данных Пользователя, за исключением п.п. 5.2 и 5.3. настоящей Политики Конфиденциальности.</p>

		<p>6.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, 
		обычно используемого для защиты такого рода информации в существующем деловом обороте.</p>

		<p>6.2.4. Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента 
		обращения или запроса Пользователя, или его законного представителя либо уполномоченного органа по защите прав 
		субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или 
		неправомерных действий.</p>
		
		<h2>7. Ответственность сторон</h2>
		<p>7.1. Администрация, не исполнившая свои обязательства, несёт ответственность за убытки, 
		понесённые Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством 
		Российской Федерации, за исключением случаев, предусмотренных п.п. 5.2., 5.3. и 7.2. настоящей Политики Конфиденциальности.</p>

		<p>7.2. В случае утраты или разглашения Конфиденциальной информации Администрация не несёт ответственность, 
		если данная конфиденциальная информация:<br>
		7.2.1. Стала публичным достоянием до её утраты или разглашения.<br>
		7.2.2. Была получена от третьей стороны до момента её получения Администрацией Ресурса.<br>
		7.2.3. Была разглашена с согласия Пользователя.</p>

		<p>7.3. Пользователь несет полную ответственность за соблюдение требований законодательства РФ, в том числе законов о 
		рекламе, о защите авторских и смежных прав, об охране товарных знаков и знаков обслуживания, но не ограничиваясь 
		перечисленным, включая полную ответственность за содержание и форму материалов.</p>

		<p>7.4. Пользователь признает, что ответственность за любую информацию (в том числе, но не ограничиваясь: файлы с данными, 
		тексты и т. д.), к которой он может иметь доступ как к части сайта Вкусная карта, несет лицо, предоставившее 
		такую информацию.</p>
		
		<p>7.5. Пользователь соглашается, что информация, предоставленная ему как часть сайта Вкусная карта, может 
		являться объектом интеллектуальной собственности, права на который защищены и принадлежат другим Пользователям, 
		партнерам или рекламодателям, которые размещают такую информацию на сайте Вкусная карта. <br>
		Пользователь не вправе вносить изменения, передавать в аренду, передавать на условиях займа, продавать, распространять 
		или создавать производные работы на основе такого Содержания (полностью или в части), за исключением случаев, когда такие 
		действия были письменно прямо разрешены собственниками такого Содержания в соответствии с условиями отдельного соглашения.</p>

		<p>7.6. В отношение текстовых материалов (статей, публикаций, находящихся в свободном публичном доступе на 
		сайте Вкусная карта) допускается их распространение при условии, что будет дана ссылка 
		на Карта.</p>
		
		<p>7.7. Администрация не несет ответственности перед Пользователем за любой убыток или ущерб, понесенный Пользователем 
		в результате удаления, сбоя или невозможности сохранения какого-либо Содержания и иных коммуникационных данных, 
		содержащихся на сайте Вкусная карта или передаваемых через него.</p>

		<p>7.8. Администрация не несет ответственности за любые прямые или косвенные убытки, произошедшие из-за: использования 
		либо невозможности использования сайта, либо отдельных сервисов; несанкционированного доступа к коммуникациям 
		Пользователя; заявления или поведение любого третьего лица на сайте.</p>
		
		<p>7.9. Администрация не несет ответственность за какую-либо информацию, размещенную пользователем на 
		сайте Вкусная карта, включая, но не ограничиваясь: информацию, защищенную авторским правом, без прямого 
		согласия владельца авторского права.</p>
		
		<h2>8. Разрешение споров</h2>
		
		<p>8.1. До обращения в суд с иском по спорам, возникающим из отношений между Пользователем и Администрацией, обязательным 
		является предъявление претензии (письменного предложения или предложения в электронном виде о добровольном урегулировании 
		спора).</p>

		<p>8.2. Получатель претензии в течение 30 календарных дней со дня получения претензии, письменно или в электронном виде 
		уведомляет заявителя претензии о результатах рассмотрения претензии.</p>

		<p>8.3. При не достижении соглашения спор будет передан на рассмотрение Арбитражного суда г. Санкт-Петербург.</p>

		<p>8.4. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией 
		применяется действующее законодательство Российской Федерации.</p>
		
		<h2>9. Дополнительные условия</h2>
		<p>9.1. Администрация вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.</p>

		<p>9.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на сайте Вкусная карта, если 
		иное не предусмотрено новой редакцией Политики конфиденциальности.</p>

		<p>9.3. Все предложения или вопросы касательно настоящей Политики конфиденциальности следует сообщать по 
		адресу: <a href="mailto:reklama@raivola.ru" target="_blank">reklama@raivola.ru</a></p>
		
		<p>9.4. Действующая Политика конфиденциальности размещена на странице по адресу <a href="https://vkusnayakarta.ru/#politic">https://vkusnayakarta.ru/#politic</a></p>

		<p>Обновлено: 01 Апреля 2019 года</p>
		<p>г. Санкт-Петербург, ООО"Райвола", п.Рощино.</p>
		</div>
		</div>
	</div>
</body>
</html>