<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$res = CIblockSection::GetList(array('SORT'=>'ASC'),array('IBLOCK_ID'=>$arParams['IBLOCK_ID'],'ACTIVE'=>'Y'));

while($sect = $res->GetNext()){
	$arResult['SECTION'][] = $sect;
	$arResult['MENU'][$sect['ID']] = array();
}

foreach($arResult['ITEMS'] as $item){

$arResult['MENU'][$item['IBLOCK_SECTION_ID']][] = $item;
}
