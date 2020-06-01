<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="footer-menu">
<ul class="main">
<?
foreach($arResult as $arItem):
	if($arItem['IS_PARENT'] != 1 && $arItem['DEPTH_LEVEL'] == 1):?>

		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

	<?endif?>
<?endforeach?>
</ul>

<?
$start = false;
foreach($arResult as $arItem):?>
	<?if($arItem['IS_PARENT'] == 1 && $start = true):?>
		</ul>
		<? $start = false;?>
	<?endif?>
	<?if($arItem['IS_PARENT'] == 1):?>
		<ul>
		<? $start = true;?>
	<?endif?>
	<?if($arItem['IS_PARENT'] == 1 || $arItem['DEPTH_LEVEL'] == 2):?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>

<?endforeach?>
</ul>
</div>
<?endif?>