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
	<div class="room-item" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
		<h2><?=$arResult['NAME']?></h2>
			<div class="slider slider-for-<?=$key?>">
				<?foreach($arResult['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE'] as $item):?>
					<div>
						<img src="<?=$item['SRC']?>">
					</div>
				<?endforeach?>
			</div>
			<div class="slidern slider-nav-<?=$key?> ">
				<?foreach($arResult['DISPLAY_PROPERTIES']['FOTO']['FILE_VALUE'] as $item):?>
					<div>
						<img src="<?=$item['SRC']?>">
					</div>
				<?endforeach?>
			</div>
		<div class='room-price'>	<?=$arResult['PROPERTIES']['PRICE']['~VALUE']['TEXT']?></div>
		<div class='room-text'>	
		<?=$arResult['PREVIEW_TEXT']?></div>
	</div>
	<script>
	 $('.slider-for-<?=$key?>').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-nav-<?=$key?>'
	});
	$('.slider-nav-<?=$key?>').slick({
		  slidesToShow: 10,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for-<?=$key?>',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
		arrows:false,
	});
		</script>