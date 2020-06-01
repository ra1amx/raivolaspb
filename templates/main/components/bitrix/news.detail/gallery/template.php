		<div class="carousel  ">

<?foreach($arResult['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE'] as $item):?>


			<div  class='carousel-item'><div class="text-image"><?=$item['DESCRIPTION']?></div><img   src="<?=$item['SRC']?>" alt=""></div>

<?endforeach?>
		</div>
