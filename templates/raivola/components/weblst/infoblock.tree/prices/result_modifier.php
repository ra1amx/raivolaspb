<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach($arResult['ITEMS'] as $key=>$item){

	if(!empty($item['PICTURE'])){
		$arResult['ITEMS'][$key]['PICTURE'] = CFILE::GetFileArray($item['PICTURE']);
	}
}