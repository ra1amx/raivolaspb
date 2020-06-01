<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
    use Bitrix\Main\Page\Asset; 
$slide = explode('/',$APPLICATION->GetCurPage())[1]; 
?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" /> 	
<?

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js"); 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js"); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fonts.css"); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/slick.css"); 
if($APPLICATION->GetCurDir()=="/"){
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fullpage.min.css"); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css"); 

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css"); 


Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/fullpage.min.js"); 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.textillate.js"); 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.lettering.js"); 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js"); 
} else {

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css"); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css"); 


}
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery.fancybox.min.css"); 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.min.js"); 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/slick.min.js"); 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js"); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/media.css"); 

?>
	</head>
	<body class='<?=$slide?>'>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(43640099, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43640099" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main", 
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
		"COMPONENT_TEMPLATE" => "main"
	),
	false
);?>
		<?if($APPLICATION->GetCurDir()=="/"):?>
		<div class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></div>
	<div id="fullpage">
		<div class="section " id='page-1' >
<div class='fixedblock' style='position:absolute; right:25px; top:90px;'>
	<div class="phone" style='margin-right:10px;'><a href="tel:+7 (812) 322-50-60">+7 (812) 322-50-60</a><br><a href="tel:+7 (921) 425-25-00">+7 (921) 425-25-00</a><br><a href="mailto:reserve@raivola.spb.ru">reserve@raivola.spb.ru</a><br><a href="">Рощино, Песочная д. 1</a></div>

			<a href="/bronirovanie/" class="bron" >Забронировать</a>
			</div>

			<h1>Загородный отдых в отеле<br>
			<span>“RAIVOLA”</span></h1>
			<div class='button-cont'>
				<a href='/action/' class='button-action'>Акции</a>
				<a href='/virus/' class='button-virus'>О коронавирусе</a>
			</div>
			<div class="mouse"><span>для просмотра<br>
									листайте вниз</span></div>
	<a href='#director' class='messdir openPopUp' data-link="#director">Написать директору</a>
		</div>
		<div class="section" id='page-2'>
			
			
			<div class="arrow"></div>
			<div class="bg-section"  style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/korporativ.jpg')"></div>
			<div class="color-tab">
				<div class="color-tab-cont">
					<div class="sect-head">
					<a href="/bronirovanie/" class="bron">Забронировать</a>
					<div class="phone"><a href="tel:+7 (812) 322-50-60">+7 (812) 322-50-60</a></div>
					<div class="phone"><a href="mailto:reserve@raivola.spb.ru">reserve@raivola.spb.ru</a></div>
					<div class="social-button">
						<a href="https://www.instagram.com/hotelraivola/" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram.png" alt=""></a>
						<a href="https://vk.com/hotelraivola" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.png" alt=""></a>

					</div>

				</div>
				 <div class="section-content">
				<div class="section-title" data-in-effect="fadeInLeft">
					1.&nbsp;Конференции, семинары, тренинги
				</div>
				<div class="section-description">«Загородный отель Райвола – это полное погружение участников в бизнес-мероприятие. Наши удобные и отлично оснащенные конференц-залы станут оптимальным выбором</div>
					<a href="/korporativ/" class="section-link">Перейти</a>
				 </div>
				 <div class="other-link">
				<a href="/gallery/"><img src="<?=SITE_TEMPLATE_PATH?>/img/gall.png" alt="">Галерея</a>
					 <?/*<a href="https://vkusnayakarta.ru"><img src="<?=SITE_TEMPLATE_PATH?>/img/vkk.png" alt="">Вкусная карта</a>*/?>
				 </div>				
				</div>
			</div>
		</div>
		<div class="section" id='page-3'>
				<div class="arrow"></div>
			<div class="bg-section" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/nomera.jpg')"></div>
			<div class="color-tab">
								<div class="color-tab-cont">
					<div class="sect-head">
						<a href="/bronirovanie/" class="bron">Забронировать</a>
					<div class="phone"><a href="tel:+7 (812) 322-50-60">+7 (812) 322-50-60</a></div>
					<div class="phone"><a href="mailto:reserve@raivola.spb.ru">reserve@raivola.spb.ru</a></div>
					<div class="social-button">
						<a href="https://www.instagram.com/hotelraivola/" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram.png" alt=""></a>
						<a href="https://vk.com/hotelraivola" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.png" alt=""></a>

					</div>

				</div>
				 <div class="section-content">
				<div class="section-title" data-in-effect="fadeInLeft">
					2.&nbspОтель
				</div>
				<div class="section-description">В парковой зоне отеля расположены пять спальных корпусов, представляющие собой уютные здания с балконами и мансардами и имеющие разнообразный номерной фонд, от одноместных стандартных номеров до номеров класса «ЛЮКC»</div>
					<a href="/nomera/" class="section-link">Перейти</a>
				 </div>
				 <div class="other-link">
				 	<a href="/gallery/"><img src="<?=SITE_TEMPLATE_PATH?>/img/gall.png" alt="">Галерея</a>
					 <?/*<a href="https://vkusnayakarta.ru"><img src="<?=SITE_TEMPLATE_PATH?>/img/vkk.png" alt="">Вкусная карта</a>*/?>
				 </div>				
				</div>
			</div>			
		</div>
		<div class="section" id='page-4'>
			
				<div class="arrow"></div>
			<div class="bg-section" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/slides.jpg')"></div>
			<div class="color-tab">
								<div class="color-tab-cont">
					<div class="sect-head">
						<a href="/bronirovanie/" class="bron">Забронировать</a>
					<div class="phone"><a href="tel:+7 (812) 322-50-60">+7 (812) 322-50-60</a></div>
					<div class="phone"><a href="mailto:reserve@raivola.spb.ru">reserve@raivola.spb.ru</a></div>
					<div class="social-button">
						<a href="https://www.instagram.com/hotelraivola/" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram.png" alt=""></a>
						<a href="https://vk.com/hotelraivola" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.png" alt=""></a>

					</div>

				</div>
				 <div class="section-content">
				<div class="section-title" data-in-effect="fadeInLeft">
					3.&nbsp;Cвадьбы, банкеты
				</div>
				<div class="section-description">Организацией и проведением всех мероприятий занимается специально обученная команда профессионалов во главе с арт-директором. 
<br>
При этом, помимо традиционной аренды

банкетного зала или ресторана, организации гала-ужинов и банкетов, отель может разрабатывать
и эксклюзивные развлекательные программы длительностью от 2 до 4 дней.</div>
					<a href="/torzhestvennye-meropriyatiya/" class="section-link">Перейти</a>
				 </div>
				 <div class="other-link">
				 	<a href="/gallery/"><img src="<?=SITE_TEMPLATE_PATH?>/img/gall.png" alt="">Галерея</a>
					 <?/*<a href="https://vkusnayakarta.ru"><img src="<?=SITE_TEMPLATE_PATH?>/img/vkk.png" alt="">Вкусная карта</a>*/?>
				 </div>				
				</div>
			</div>			
		</div>
		<div class="section" id='page-5'>
				<div class="arrow"></div>
			
			<div class="bg-section" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/detyam.jpg')"></div>
			<div class="color-tab">
								<div class="color-tab-cont">
					<div class="sect-head">
						<a href="/bronirovanie/" class="bron">Забронировать</a>
					<div class="phone"><a href="tel:+7 (812) 322-50-60">+7 (812) 322-50-60</a></div>
					<div class="phone"><a href="mailto:reserve@raivola.spb.ru">reserve@raivola.spb.ru</a></div>
					<div class="social-button">
						<a href="https://www.instagram.com/hotelraivola/" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram.png" alt=""></a>
						<a href="https://vk.com/hotelraivola" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.png" alt=""></a>

					</div>

				</div>
				 <div class="section-content">
				<div class="section-title" data-in-effect="fadeInLeft">
					4.&nbspДетям
				</div>
				<div class="section-description">Лето в семейном загородном отеле «Райвола» — это:<br>

— полноценный отдых вдали от шума, пыли и стрессов больших городов;<br>

— организованный опытными аниматорами досуг, который не даст скучать детям и взрослым! </div>
					 <a href="/detyam/" class="section-link">Перейти</a>
				 </div>
				 <div class="other-link">
				 	<a href="/gallery/"><img src="<?=SITE_TEMPLATE_PATH?>/img/gall.png" alt="">Галерея</a>
					 <?/*	<a href="https://vkusnayakarta.ru"><img src="<?=SITE_TEMPLATE_PATH?>/img/vkk.png" alt="">Вкусная карта</a>*/?>
				 </div>				
				</div>
			</div>			
		</div>
	</div>

		<?else:?>
<header >
	<div class="logo"><a href='/'><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a></div>
					<div class="sect-head">
						<a href="/bronirovanie/" class="bron">Забронировать</a>
					<div class="phone"><a href="tel:+7 (812) 322-50-60">+7 (812) 322-50-60</a><br><a href="mailto:reserve@raivola.spb.ru">reserve@raivola.spb.ru</a></div>
					<div class="phone"></div>
						<div class="social-button">
						<a href="https://www.instagram.com/hotelraivola/" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram.png" alt=""></a>
						<a href="https://vk.com/hotelraivola" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.png" alt=""></a>
						</div>
					</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"h1", 
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
		"ROOT_MENU_TYPE" => "title",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "h1"
	),
	false
);?>

	<?  if(!file_exists($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/img/'.$slide.'.jpg')){ $slide = 'slide1';} ?>
					<div class="header-bg" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg-<?=$slide?>.jpg)"></div>
</header>
<?$APPLICATION->IncludeComponent("bitrix:menu", "second_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<div class='page'>
	<div class="centerWrap">
<?endif?>