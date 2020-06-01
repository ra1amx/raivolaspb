<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 *  Компонент "Дерево инфоблока"
 * @author Николаев Константин <nikolaev@twozebras.ru>
 *
 * @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["ID"] = intval($arParams["ID"]);
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);
$arParams["COUNT_ELEMENTS"] = "Y";
if(! class_exists(infoblockTree)){
class infoblockTree {
	private
		$array,
		$real_array;
	public
		$tree = array();

	function __construct($array) {
		$this->real_array = $array;
		$this->array = $array;
		$this->createTree();
	}

	private function createTree() {

		foreach($this->array as $key => $item) {
			//if (!empty($item['IBLOCK_SECTION_ID'])) {

				if ($item['TYPE'] !== "E") {
								$this->tree[] = $item;
				}
				unset($this->array[$key]);
				$this->branchTree($key);
			//	}
		}
	}

	private function branchTree($id) {
		foreach($this->array as $key => $item) {

			if (!empty($item['IBLOCK_SECTION_ID']) && $id) {
				if ("S".$item['IBLOCK_SECTION_ID'] == $id) {
					if ($item['TYPE'] == "E") {
						$item['DEPTH_LEVEL'] = $this->real_array["S".$item['IBLOCK_SECTION_ID']]['DEPTH_LEVEL'] + 1;
					}

					$this->tree[] = $item;
					unset($this->array[$key]);
					$this->branchTree($key);
				}
			}
		}
	}
}
}
if(!function_exists(GetMixedList)){
function GetMixedList($arOrder=Array("SORT"=>"ASC"), $arFilter=Array(), $bIncCnt = false, $arSelectedFields = false) {
        global $DB;

        $arResult = array();

        $arSectionFilter = array (
            "IBLOCK_ID"        =>$arFilter["IBLOCK_ID"],
		    "?NAME"            =>$arFilter["NAME"],
            ">=ID"            =>$arFilter["ID_1"],
            "<=ID"            =>$arFilter["ID_2"],
            ">=TIMESTAMP_X"        =>$arFilter["TIMESTAMP_X_1"],
            "<=TIMESTAMP_X"        =>$arFilter["TIMESTAMP_X_2"],
            "MODIFIED_BY"        =>$arFilter["MODIFIED_USER_ID"]? $arFilter["MODIFIED_USER_ID"]: $arFilter["MODIFIED_BY"],
            ">=DATE_CREATE"        =>$arFilter["DATE_CREATE_1"],
            "<=DATE_CREATE"        =>$arFilter["DATE_CREATE_2"],
            "CREATED_BY"        =>$arFilter["CREATED_USER_ID"]? $arFilter["CREATED_USER_ID"]: $arFilter["CREATED_BY"],
            "CODE"            =>$arFilter["CODE"],
            "EXTERNAL_ID"        =>$arFilter["EXTERNAL_ID"],
            "ACTIVE"        =>$arFilter["ACTIVE"],

            "CNT_ALL"        =>$arFilter["CNT_ALL"],
            "CNT_ACTIVE"        =>$arFilter["CNT_ACTIVE"],
            "ELEMENT_SUBSECTIONS"    =>$arFilter["ELEMENT_SUBSECTIONS"],
        );
        if (isset($arFilter["CHECK_PERMISSIONS"]))
        {
            $arSectionFilter['CHECK_PERMISSIONS'] = $arFilter["CHECK_PERMISSIONS"];
            $arSectionFilter['MIN_PERMISSION'] = (isset($arFilter['MIN_PERMISSION']) ? $arFilter['MIN_PERMISSION'] : 'R');
        }
        if(array_key_exists("SECTION_ID", $arFilter))
            $arSectionFilter["SECTION_ID"] = $arFilter["SECTION_ID"];

        $obSection = new CIBlockSection;

	//echo "<pre>".print_r($arSectionFilter);"</pre>";
        $rsSection = $obSection->GetList($arOrder, $arSectionFilter, $bIncCnt);
        while($arSection = $rsSection->GetNext())
        {	
            $arSection["TYPE"]="S";
            $arResult[]=$arSection;
			$arElementFilterSect[] = $arSection['ID'];
        }
		$arElementFilterSect[] = $arFilter["SECTION_ID"];
        $arElementFilter = array (
            "IBLOCK_ID"        =>$arFilter["IBLOCK_ID"],
            "?NAME"            =>$arFilter["NAME"],
            "SECTION_ID"        =>$arFilter["SECTION_ID"],
            ">=ID"            =>$arFilter["ID_1"],
            "<=ID"            =>$arFilter["ID_2"],
            "=ID"            => $arFilter["ID"],
            ">=TIMESTAMP_X"        =>$arFilter["TIMESTAMP_X_1"],
            "<=TIMESTAMP_X"        =>$arFilter["TIMESTAMP_X_2"],
            "CODE"            =>$arFilter["CODE"],
            "EXTERNAL_ID"        =>$arFilter["EXTERNAL_ID"],
            "MODIFIED_USER_ID"    =>$arFilter["MODIFIED_USER_ID"],
            "MODIFIED_BY"        =>$arFilter["MODIFIED_BY"],
            ">=DATE_CREATE"        =>$arFilter["DATE_CREATE_1"],
            "<=DATE_CREATE"        =>$arFilter["DATE_CREATE_2"],
            "CREATED_BY"        =>$arFilter["CREATED_BY"],
            "CREATED_USER_ID"    =>$arFilter["CREATED_USER_ID"],
            ">=DATE_ACTIVE_FROM"    =>$arFilter["DATE_ACTIVE_FROM_1"],
            "<=DATE_ACTIVE_FROM"    =>$arFilter["DATE_ACTIVE_FROM_2"],
            ">=DATE_ACTIVE_TO"    =>$arFilter["DATE_ACTIVE_TO_1"],
            "<=DATE_ACTIVE_TO"    =>$arFilter["DATE_ACTIVE_TO_2"],
            "ACTIVE"        =>$arFilter["ACTIVE"],
			"INCLUDE_SUBSECTIONS" =>'Y',
            "?SEARCHABLE_CONTENT"    =>$arFilter["DESCRIPTION"],
            "?TAGS"            =>$arFilter["?TAGS"],
            "WF_STATUS"        =>$arFilter["WF_STATUS"],

            "SHOW_NEW"        => ($arFilter["SHOW_NEW"] !== "N"? "Y": "N"),
            "SHOW_BP_NEW"        => $arFilter["SHOW_BP_NEW"]
        );
        if (isset($arFilter["CHECK_PERMISSIONS"]))
        {
            $arElementFilter['CHECK_PERMISSIONS'] = $arFilter["CHECK_PERMISSIONS"];
            $arElementFilter['MIN_PERMISSION'] = (isset($arFilter['MIN_PERMISSION']) ? $arFilter['MIN_PERMISSION'] : 'R');
        }

        foreach($arFilter as $key=>$value)
        {
            $op = CIBlock::MkOperationFilter($key);
            $newkey = strtoupper($op["FIELD"]);
            if(
                substr($newkey, 0, 9) == "PROPERTY_"
                || substr($newkey, 0, 8) == "CATALOG_"
            )
            {
                $arElementFilter[$key] = $value;
            }
        }

        if(strlen($arFilter["SECTION_ID"])<= 0)
            unset($arElementFilter["SECTION_ID"]);

        if(!is_array($arSelectedFields))
            $arSelectedFields = Array("*");

        if(isset($arFilter["CHECK_BP_PERMISSIONS"]))
            $arElementFilter["CHECK_BP_PERMISSIONS"] = $arFilter["CHECK_BP_PERMISSIONS"];

        $obElement = new CIBlockElement;

        $rsElement = $obElement->GetList($arOrder, $arElementFilter, false, false, $arSelectedFields);
        while($arElement = $rsElement->GetNext())
        {
            $arElement["TYPE"]="E";
            $arResult[]=$arElement;


        }

        $rsResult = new CDBResult;
        $rsResult->InitFromArray($arResult);

        return $rsResult;
    }
}
/*
 * TODO: сделать уровень вложенности
 * TODO: сделать выбор начального раздела
 * TODO: сделать выбор сортировки и параметров фильтра
$arParams["DEPTH_LEVEL"] = intval($arParams["DEPTH_LEVEL"]);
if($arParams["DEPTH_LEVEL"]<=0)
   $arParams["DEPTH_LEVEL"]=1;*/

$arResult["ITEMS"] = array();


if($this->StartResultCache(false, $USER->GetGroups())) {
	if(!CModule::IncludeModule("iblock")) {
		$this->AbortResultCache();
	} else {

		if (defined('BX_COMP_MANAGED_CACHE') && is_object($GLOBALS['CACHE_MANAGER'])) {
			$GLOBALS['CACHE_MANAGER']->RegisterTag("infoblocktree");
	   }


		$arItems = array(); //Массив разделов и элементов из API
		$treeItems = array(); //Массив разделов и элементов из API для сортировки
		$tree = array(); //Отсортированный массив разделов и элементов

		//TODO: Поменять на стандартную функцию, когда ее исправит Битрикс
		//$res = CIBlockSection::GetMixedList(


$arFilter = array("IBLOCK_ID" => $arParams['IBLOCK_ID'],"ACTIVE" => "Y","ELEMENT_SUBSECTIONS" => "Y", "CNT_ALL" => "N", "CNT_ACTIVE" => "Y", "CHECK_PERMISSIONS" => "N", "MIN_PERMISSION" => "R");
		if($arParams['SECTION_ID']){
			$arFilter["SECTION_ID"] = $arParams['SECTION_ID'];
		}
		$res = GetMixedList(
			array("SORT" => "ASC","NAME" => "ASC"),
			$arFilter,
			true,
			array("ID", "IBLOCK_ID", "NAME", "TIMESTAMP_X", "DETAIL_PAGE_URL", "PREVIEW_TEXT", "SECTION_ID", "PROPERTY_PRICE","PROPERTY_PRICE2","PROPERTY_PRICE3","PROPERTY_COUNT", "SHOW_COUNTER",'PICTURE','PROPERTY_SERVICE')
		);

		while($res2 = $res->GetNext()) {

			$arItems[$res2['TYPE'].$res2['ID']] = $res2;
		}

		$tree = new infoblockTree($arItems);
		$arResult['ITEMS'] = $tree->tree;

		// standard output
		$this->IncludeComponentTemplate();
	}
}

/**
 * Временная функция т.к. стандартная функция CIBlockSection::GetMixedList не отдает URL разделов и элементов
 *
 * Зарегистрированное в разработке обращение было перенесено из раздела "Ошибки" в раздел "Пожелания".
 * "CIBlockSection::GetMixedList не работает выставление ссылки по шаблону"
 * Номер обращения в разработку: 57712.
 *
 * @param array $arOrder
 * @param array $arFilter
 * @param bool $bIncCnt
 * @param bool $arSelectedFields
 * @return CDBResult
 */

?>