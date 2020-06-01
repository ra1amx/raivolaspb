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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="action-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>

				<div class='action-name'><?echo $arItem["NAME"]?></div>
<br>
<?$count = 1; $start = false; $start2 = false;
if($arParams['COUNT']) { $count = $arParams['COUNT'];}
?>

<div class='flex gallerycategory <?if($arParams['COUNT']):?>undo<?endif?>'>
<?foreach($arItem['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE'] as $item):?>
<?if($count == 7|| $count ==3):?></div><?$start2 = false;?><?endif?>
		<?if($count == 7):?></div><? $count = 1; $start = false;?><?endif?>
		<?if($count == 1):?><div class='gline flex'><?$start = true;?><?endif?>
			<?if($count == 4):?><?if($start == true):?></div><?endif?><div class='gline flex'><?$start = true;?><?endif?>
		<?if($count == 1 || $count == 5):?><div class='gcoll'><?$start2 = true;?><?endif?>
			<?if($count == 3 || $count == 4):?>
<?	$renderImage = CFile::ResizeImageGet($item["ID"], array("width" => 800, "height" => 530),  BX_RESIZE_IMAGE_EXACT);?>
			<?else:?>
<?	$renderImage = CFile::ResizeImageGet($item["ID"], array("width" => 380, "height" => 255),  BX_RESIZE_IMAGE_EXACT);?>
<?endif?>
<a data-fancybox="gallery" class='gallery-photo' href="<?=$item['SRC']?>"><img  src="<?=$renderImage['src']?>" ></a>

<? $count++;?>
<?endforeach?>
<?if($start2):?></div><?endif?>
<?if($start):?></div><?endif?>
</div>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
