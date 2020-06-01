<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);
?>
<div class="menu-block">
						<div class="row ">
							<div class="col-xs-3">
								<ul class="sect-list">
									<?foreach($arResult['SECTION'] as $key=>$sect):?>
									<li <?if($key == 0):?>class='active'<? $select= $sect['ID']?><?endif?> data-id="sect<?=$sect['ID']?>"><?=$sect['NAME']?></li>

									<?endforeach?>
								</ul>
							</div>
						
							<div class="col-xs-4">
								<img src="<?=($arResult['MENU'][$select]['0']['PREVIEW_PICTURE'])?$arResult['MENU'][$select]['0']['PREVIEW_PICTURE']['SRC']:'/local/templates/main/components/bitrix/catalog.section/catalog/images/no_photo.png'?>" alt="" class="item-img">
								<div class="item-info">
									<div class="weight"><?=$arResult['MENU'][$select]['0']['PROPERTIES']['WEIGHT']['VALUE']?> гр.</div>
									<div class="price"><?=$arResult['MENU'][$select]['0']['PROPERTIES']['PRICE']['VALUE']?> р</div>
								</div>
							</div>
							<div class="col-xs-4">
								<?foreach($arResult['MENU'] as $key=>$i):?>
								<ul class="item-list <?if($select== $key):?>active<?endif?>" id='sect<?=$key?>'>
									<?foreach($i as $k=>$item):?>
										<li <?if($select == $key && $k == 0):?> class='active'<?endif?> data-img="<?=($item['PREVIEW_PICTURE'])?$item['PREVIEW_PICTURE']['SRC']:'/local/templates/main/components/bitrix/catalog.section/catalog/images/no_photo.png'?>" data-price="<?=trim($item['PROPERTIES']['PRICE']['VALUE'])?>" data-weight="<?=$item['PROPERTIES']['WEIGHT']['VALUE']?>"><div class="additem" >+</div><span><?=$item['NAME']?></span></li>
									<?endforeach?>
								</ul>
								<?endforeach?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<div class="linemenublock"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
								<ul class="order-list">

								</ul>
								<div class="order-value">
									Итого: <span data-val='0'>0 р.</span>
								</div>
								Бесплатная доставка по Рощино от 600 руб. Пицца - до 1 часа, пироги до 4х часов.
								<div class="center">
									<div class="order-button" data-types="zakaz" data-fancybox data-src="#form" data-modal="true" >Отправить заказ</div>			
								</div>
							</div>
						</div>
			</div>