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
$count = 1; $start = false; $start2 = false;
?>

<div class='flex gallerycategory'>
<?foreach($arResult['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE'] as $item):?>
<?if($count == 7|| $count ==3):?></div><?$start2 = false;?><?endif?>
		<?if($count == 7):?></div><? $count = 1; $start = false;?><?endif?>
		<?if($count == 1):?><div class='gline flex'><?$start = true;?><?endif?>
		<?if($count == 4):?></div><div class='gline flex'><?$start = true;?><?endif?>
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
