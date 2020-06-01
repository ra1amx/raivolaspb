<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
	<?if($APPLICATION->GetCurDir()!=="/"):?>
		</div>
</div>
<?$APPLICATION->IncludeComponent("bitrix:news.list", ".default", array(
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
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => "raivola",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "15",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
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
		"SORT_BY1" => "RAND",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?><div id="maps"></div>
<footer >
	<div class="centerWrap">
<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
	</div>
	<div class="copyright">
		<div class="left">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""><a href="/politic/">Политика конфиденциальности</a>
		</div>
								<div class="social-button">
						<a href="https://www.instagram.com/hotelraivola/" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram.png" alt=""></a>
						<a href="https://vk.com/hotelraivola" target='_blank'><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.png" alt=""></a>
						<a class="wbstudio" href="https://weblst.ru" ><img  alt='Сайт разработан студией wbstudio' style="filter: brightness(0) invert(1);" src="<?=SITE_TEMPLATE_PATH?>/img/WbStudio.svg"></a>
						</div>
	</div>
</footer>
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8dfc0614c00076bac5aaea14928ae6a2e5450302afc25f53b5feb9da8138b1f3&amp;width=100%25&amp;height=315&amp;lang=ru_RU&amp;scroll=false&amp;id=maps"></script>
<?endif?>
	<div class="popUp" id="director" >
					<div class="popUp_wrap">
						<div class="popUp_content wrap__feedback">
							<img src="/local/templates/main/img/close.svg" class="closePopUp" alt="">
							<div class="popUp_wrapFrom">

								<form action="" method="post" name="form-1" class='form'>
									<div class="form__title pasteParams__form-title"><span>Написать директору</span></div>
									
									<div class="flex flex-just_space feedBaclFrom">
											<label>Имя:</label>
											<input name="name" type="text" class="formInput" >

											<label>Телефон:</label>
											<input name="phone" type="tel" class="formInput tellmask" placeholder="+7(___) ___-__-__" required="">
											<label>Текст обращения:</label>
											<textarea name='text'></textarea>
									</div>
								<center>
									<button class="feedback btn btn-success fillBTN XL" type='submit'><span>Отправить</span></button>
								</center>
									<label class="checkbox">
										
										<div class="flex flex-align_center row">
											<input type="checkbox" required="" checked="checked">
											<div class="text">Даю согласие на <a href="#" data-link="#" class="openPopUp">обработку персональных данных</a></div>
										</div>
									</label>							
								</form>

							</div>
						</div>
						<div class="popUp_shade"></div>
					</div>
				</div>
		<!-- popup -->
				<div class="popUp" id="thanks">
				    <div class="popUp_wrap">
				        <div class="popUp_content wrap__base">
				            <img src="/local/templates/main/img/close.svg" class="closePopUp" alt="">
				            <div class="popUp_wrapFrom">
				                <h2 class="line">Благодарим вас, наш менеджер свяжется с вами в ближайшее время</h2>

				                <div class="btnWrap flex flex-just_end">
				                    <div class="fillBTN L closePopUp_link"><span>Спасибо</span></div>
				                </div>
				            </div>
				        </div>
				        <div class="popUp_shade"></div>
				    </div>
</div> 
<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-464345-dZYkO"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-464345-dZYkO" style="position:fixed; left:-999px;" alt=""/></noscript>
<!-- StreamWood code -->
<link href="https://clients.streamwood.ru/StreamWood/sw.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://clients.streamwood.ru/StreamWood/sw.js" charset="utf-8"></script>
<script type="text/javascript">
  swQ(document).ready(function(){
    swQ().SW({
      swKey: '29283a26f60fd8d7ae82d7698a90e53c',
      swDomainKey: '07ccfabf50bea98a52874be464a91a81'
    });
    swQ('body').SW('load');
  });
</script>
<!-- /StreamWood code -->
	</body>
</html>