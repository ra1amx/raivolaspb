
<? $count = 1;?>
<?foreach($arResult['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE'] as $item):?>
<?if($count == 1):?>
<div class="row">
<?endif?>
<div class="col-xs-6"><img src="<?=$item['SRC']?>" alt=""></div>
<? $count++;?>
<?if($count == 3):?>
</div>
<?$count = 1;?>
<?endif?>
<?endforeach?>

