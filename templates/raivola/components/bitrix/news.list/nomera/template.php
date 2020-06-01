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
<h2 style="text-align: center;">Номера</h2>
<div class='rooms flex flex-just_space '>
<?foreach($arResult["ITEMS"] as $key=>$arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class='r-item'>
	<div class='price'><?=$arItem['PROPERTIES']['PRICE_SEC']['VALUE']?> руб. </div>
	<?	$renderImage = CFile::ResizeImageGet($arItem['DISPLAY_PROPERTIES']['FOTO']['VALUE']['0'], array("width" => 520, "height" => 300),  BX_RESIZE_IMAGE_EXACT);?>
	<img src="<?=$renderImage['src']?>">
	<div class='r-item_title'><?=$arItem['NAME']?></div>
	<a href='<?=$arItem["DETAIL_PAGE_URL"]?>'>Подробнее</a>
</div>
<?endforeach;?>
</div>
