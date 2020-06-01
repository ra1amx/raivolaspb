<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$start = false;
$first = false;
//echo '<pre>';
//print_R($arResult);
?>

<?foreach($arResult['ITEMS'] as $item):?>
<?if($item['TYPE'] == "S" && $start == true):?>
				</div>
			</div>
		</div>
	</div>
<?endif?>
<?if($item['TYPE'] == "S"):?>
	<!-- Раздел меню -->
	<div class="typeMenuSection">
<?$renderImage = CFile::ResizeImageGet($item['PICTURE']['ID'], array("height" => 320,"width" => 1320), BX_RESIZE_IMAGE_EXACT); ?>
		<div class="heading">
			<? if($renderImage['src']) { ?>
				<img src="<?=$renderImage['src']?>" alt="" class="full">
			<? } ?>
		</div>

		<div class="cont">
			<div class="miniWrap <?if($first == false):?>open<?$first=true;?><?endif?>">
				<h3 class="title"><?=$item['NAME']?></h3>
						<div class="item tabletatle">
							<div class="name flex flex-just_space">
								<div class="title">Наименование</div>

								<div class="price">
									<div class="deco">

										<div class="line"></div>									
									</div>
									<span>Цена / <span>Кол-во</span></span>
								</div>
							</div>
							<div class="desc">
								<?=$item['PREVIEW_TEXT']?>
							</div>
						</div>
				<div class="items">
					<? $start = true; $count = 0;  continue;?>
					<?endif?>
					<?if($item['TYPE'] == "E"):?>

						<div class="item">
							<div class="name flex flex-just_space">
								<div class="title"><?=$item['NAME']?></div>

								<div class="price">
									<div class="deco">

										<div class="line"></div>									
									</div>
									<span><?= number_format($item['PROPERTY_PRICE_VALUE'], 0, '', ' '); ?> р</span> <?if($item['PROPERTY_COUNT_VALUE']):?>/ <span class='count'>	<?=$item['PROPERTY_COUNT_VALUE']?></span><?endif?>
								</div>
							</div>
							<div class="desc">
								<?=$item['PREVIEW_TEXT']?>
							</div>
						</div>
					

					<?endif?>

<?endforeach?>
<?if($start == true):?>
				</div>
			</div>
		</div>
	</div>

<?endif?>

* Все цены указаны с учетом НДС