<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="menu">
		<span></span>
		<a href="#"></a>
		<div class="hidden-menu">
<ul> 
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	<?if($arItem["TEXT"] == 'Детям'):?>
			</ul>
			<div class="menu-line"></div>
			<ul>
	<?endif?>
<?endforeach?>
</ul>
		</div>
	</div>

<?endif?>