<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<? $next = false; $selected = false;?>
<div class="h1">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($next == true):?> <a href="<?=$arItem["LINK"]?>" class="nextpage"></a> <? break;?><?endif?>
<?if($arItem["SELECTED"] && $arItem["LINK"] !== '/' ):?>
	<? $selected = true;?>
	<?if($prev):?><a href="<?=$prev["LINK"]?>" class="prevpage"></a><?endif?>	<?=$arItem["TEXT"]?> <? $next = true; continue;?>
	<?else:?>

	<?endif?>
	<? $prev = $arItem; ?>
<?endforeach?>
	<?if($selected == false):?>
<?$APPLICATION->ShowTitle(false);?>
<?endif?>
</div>
<?endif?>

