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
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);
$first = false;
//echo '<pre>'; print_R($arResult);
?>


	<div class="typeMenuSection ">
		<div class="cont">
			<div class="miniWrap <?if($first == false):?>open<?$first=true;?><?endif?>">
				<h3 class="title"><?=$arResult['NAME']?></h3>
						<div class="item tabletatle">
							<div class="name flex flex-just_space">
								<div class="title">Наименование</div>

								<div class="price">
									<div class="deco">

										<div class="line"></div>									
									</div>
									<span>До 4 часов</span>
									<span>От 4 до 8 часов</span>
								</div>
							</div>
							<div class="desc">
								<?=$item['PREVIEW_TEXT']?>
							</div>
						</div>
				<div class="items">

					<?foreach($arResult['ITEMS'] as $item):?>

						<div class="item">
							<div class="name flex flex-just_space">
								<div class="title"><?=$item['NAME']?></div>

								<div class="price">
									<div class="deco">

										<div class="line"></div>									
									</div>
									<span><?= number_format($item['PROPERTIES']['PRICE']['VALUE'], 0, '', ' '); ?> р</span> <?if($item['PROPERTIES']['COUNT']['VALUE']):?>/ <span class='count'>	<?=$item['PROPERTIES']['COUNT']['VALUE']?></span><?endif?>
									<?if(!empty($item['PROPERTIES']['PRICE2']['VALUE'])):?>	<span><?= number_format($item['PROPERTIES']['PRICE2']['VALUE'], 0, '', ' '); ?> р</span> <?if($item['PROPERTIES']['COUNT']['VALUE']):?>/ <span class='count'>	<?=$item['PROPERTIES']['COUNT']['VALUE']?></span><?endif?><?endif?>
								</div>
							</div>
							<div class="desc">
								<?=$item['PREVIEW_TEXT']?>
							</div>
						</div>
					

					<?endforeach?>



				</div>
			</div>
		</div>
	</div>

* Все цены указаны с учетом НДС