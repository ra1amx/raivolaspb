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

<div class="conferenc-gall">
<?foreach($arResult['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE'] as $item):?>
<a data-fancybox="gallery" class='gallery-photo' href="<?=$item['SRC']?>"><img  src="<?=$item['SRC']?>" ></a>
<?endforeach?>
</div>


