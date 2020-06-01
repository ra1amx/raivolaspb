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

?>

<?
if (count($arResult["ITEMS"]) > 0) {
	//		echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";
$start = false; $start2 = false; $start3 = false; 
	?>

 	<!-- Контент -->
 	<div class="CATALOG">
 		<div class="center_bloker">
		<?foreach ($arResult['ITEMS'] as &$arItem):?>


			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 1 && $start == false):?>
			<!-- Главная категория цены -->

 			<div class="CATALOG_wrap priceMainCategory">
		 		<div class="CATALOG_header">
		 			<div class="CATALOG_header_content">
		 				<div class="CATALOG_header_content_title"><?=$arItem['NAME']?></div>
		 				<div class="CATALOG_header_content_descript">
							<?=TruncateText(HTMLToTxt($arItem['DESCRIPTION']), 500);?>
		 				</div>
		 			</div>
		 			<div class="CATALOG_header_bg" style="background-image: url(<?=$arItem['PICTURE']['SRC']?>)"></div>
		 		</div>
		 		<div class="CATALOG_content">
					<div class="price_item flex">
						<div class="price_item_content">


			<? $start= true; continue;?>

			<?endif?>
			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 2 && $start3 == true):?>

											</div>
										</div>

			<? $start3 =false;?>
			<?endif?>
			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 1 && $start3 == true):?>

											</div>

										</div>

			<? $start3 =false;?>
			<?endif?>


			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 1 && $start2 == true):?>
											</div>
											</div>


			<? $start2= false; ?>
			<?endif?>




			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 1 && $start == true):?>
			</div>
			</div>
				<div class="hidePrice flex"><img src="<?=SITE_TEMPLATE_PATH?>/f/hiddenSub.svg"><span>Развернуть все цены</span></div>
			</div>

			</div>

			<!-- Главная категория цены -->
 			<div class="CATALOG_wrap priceMainCategory">
		 		<div class="CATALOG_header">
		 			<div class="CATALOG_header_content">
		 				<div class="CATALOG_header_content_title"><?=$arItem['NAME']?></div>
		 				<div class="CATALOG_header_content_descript">
							<?=TruncateText(HTMLToTxt($arItem['DESCRIPTION']), 500);?>
		 				</div>
		 			</div>
		 			<div class="CATALOG_header_bg" style="background-image: url(<?=$arItem['PICTURE']['SRC']?>)"></div>
		 		</div>
		 		<div class="CATALOG_content">
					<div class="price_item flex">
						<div class="price_item_content">


			<? continue;?>
			<?endif?>



			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 2 && $start2 == false):?>

							<div class="price_item_level1">
								<div class="price_item_level1_title flex">
									<div class="price_item_level1_title_left">
										<div class="serviceItems_left_icon" style="background-image: url(<?=$arItem['PICTURE']['SRC']?>);background-size: 28px auto;"></div>
									</div>
									<div class="price_item_level1_title_right">
										<span class="price_item_level1_title_name"><?=$arItem['NAME']?></span><span class="show_hide-big saleAndBlog_blog_top_more">развернуть</span>
									</div>
								</div>
								<div class="price_item_level1_content">

			<? $start2 = true; continue;?>
			<?endif?>




			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 2 && $start2 == true):?>
									</div>

								</div>
							<div class="price_item_level1">
								<div class="price_item_level1_title flex">
									<div class="price_item_level1_title_left">
										<div class="serviceItems_left_icon" style="background-image: url(<?=$arItem['PICTURE']['SRC']?>);background-size: 28px auto;"></div>
									</div>
									<div class="price_item_level1_title_right">
										<span class="price_item_level1_title_name"><?=$arItem['NAME']?></span><span class="show_hide-big saleAndBlog_blog_top_more">развернуть</span>
									</div>
								</div>
								<div class="price_item_level1_content">

			<?endif?>




			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 3 && $start3 == false):?>

									<div class="price_item_level2">
										<div class="price_item_level2_title flex"><span class="price_item_level2_title_name"><?=$arItem['NAME']?></span><span class="show_hide-smal">развернуть</span></div>
										<div class="price_item_level2_content">

				<? $start3 = true; continue;?>
			<?endif?>




			<?if ($arItem['TYPE'] == "S" && $arItem['DEPTH_LEVEL'] == 3 && $start3 == true):?>
											</div>
										</div>
									<div class="price_item_level2">
										<div class="price_item_level2_title flex"><span class="price_item_level2_title_name"><?=$arItem['NAME']?></span><span class="show_hide-smal">развернуть</span></div>
										<div class="price_item_level2_content">
			<?endif?>




			<?if ($arItem['TYPE'] == "E" && $arItem['DEPTH_LEVEL'] == 4):?>
											<div class="price_item_content_line flex">
												<div class="price_item_content_line_name"><?=$arItem['NAME']?></div>
												<div class="price_item_content_line_price"><span><?=$arItem['PROPERTY_PRICE_VALUE']?></span> р.</div>
											</div>

			<?endif?>
			<?if ($arItem['TYPE'] == "E" && $arItem['DEPTH_LEVEL'] == 3 && $start3 == true):?>
											</div>
										</div>
											<div class="price_item_content_line flex">
												<?if(!empty($arItem['PROPERTY_SERVICE'])):?>
												<a href="<?=$arItem['PROPERTY_SERVICE']['DETAIL_PAGE_URL']?>" class="price_item_content_line_name"><?=$arItem['NAME']?></a>
												<?else:?>
											<div class="price_item_content_line_name"><?=$arItem['NAME']?></div>
											<?endif?>
												<div class="price_item_content_line_price"><span><?=$arItem['PROPERTY_PRICE_VALUE']?></span> р.</div>
											</div>
	<? $start3 = false; continue; ?>
			<?endif?>
			<?if ($arItem['TYPE'] == "E" && $arItem['DEPTH_LEVEL'] == 3 && $start3 == false):?>
											<div class="price_item_content_line flex">

												<?if(!empty($arItem['PROPERTY_SERVICE'])):?>
												<a href="<?=$arItem['PROPERTY_SERVICE']['DETAIL_PAGE_URL']?>" class="price_item_content_line_name"><?=$arItem['NAME']?></a>
												<?else:?>
											<div class="price_item_content_line_name"><?=$arItem['NAME']?></div>
											<?endif?>
												<div class="price_item_content_line_price"><span><?=$arItem['PROPERTY_PRICE_VALUE']?></span> р.</div>
											</div>

			<?endif?>

		<?endforeach?>
			</div>
			</div>
				<div class="hidePrice flex"><img src="<?=SITE_TEMPLATE_PATH?>/f/hiddenSub.svg"><span>Развернуть все цены</span></div>
			</div>

			</div>


			</div>
			</div>
			</div>
			</div>
			</div>
		</div>
 	</div>
<? } ?>

