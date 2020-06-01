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
<div class='tabs-conf flex'>
<?foreach($arResult["ITEMS"] as $key=>$count):?>
	<div data-count="<?=$key+1?>" class='conf-tab <?if($key == 0):?>active<?endif?>'><?=$key+1?> зал</div>
<?endforeach?>
</div>
<?foreach($arResult["ITEMS"] as $key=>$arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="zals zal<?=$key+1?> <?if($key == 0):?>active<?endif?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class='zal-info'>
			<div class='zal-name'><?=$arItem['NAME']?></div>
			<img src="<?=$arItem['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE']['SRC']?>">
			<div class='zal-text'><?=$arItem['PREVIEW_TEXT']?></div>
		</div>
		<div class='rassadka-title'>Варианты рассадки</div>
			<div class='flex'>
				<?foreach($arItem['DISPLAY_PROPERTIES']['RASSADKA']['FILE_VALUE'] as $k=>$foto):?>
				<div >
					<?=$arItem['DISPLAY_PROPERTIES']['NAME']['VALUE'][$k]?><br>
					<img src="<?=$foto['SRC']?>"><br>

					<?=$arItem['DISPLAY_PROPERTIES']['RASSADKA']['DESCRIPTION'][$k]?>
				</div>
				<?endforeach?>

			</div>
	</div>
<?endforeach;?>

