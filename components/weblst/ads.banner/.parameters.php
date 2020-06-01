<? if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");
$arWhereTakeData = array(
    "0" => 'не выбрано',
    "iblock" => 'инфорблоки'
);

if (CModule::IncludeModule("advertising")) {
    $arWhereTakeData['advert'] = 'реклама';
}
$arIBlockType = array("" => GetMessage("BISEXPERT_OWLSLIDER_VSE_TIPY"));
$rsIBlockType = CIBlockType::GetList(array("sort"=>"asc"), array("ACTIVE"=>"Y"));
while ($arr=$rsIBlockType->Fetch()) {
	if($ar=CIBlockType::GetByIDLang($arr["ID"], LANGUAGE_ID)) {
		$arIBlockType[$arr["ID"]] = "[".$arr["ID"]."] ".$ar["NAME"];
	}
}
// getting all iblocks
$arIBlock=array(0 => GetMessage("BISEXPERT_OWLSLIDER_VYBRATQ"));
$IBlockFilter = array("ACTIVE"=>"Y");
if ($arCurrentValues["IBLOCK_TYPE"]) $IBlockFilter["TYPE"] = $arCurrentValues["IBLOCK_TYPE"];
$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), $IBlockFilter);
while($arr=$rsIBlock->Fetch()) {
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}


$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
$arFilter = Array("TYPE_ID" => $arCurrentValues["EVENT_NAME"], "ACTIVE" => "Y");
if($site !== false)
	$arFilter["LID"] = $site;

$arEvent = Array();
if($arCurrentValues["EVENT_NAME"]){
	$dbType = CEventMessage::GetList($by="ID", $order="DESC", $arFilter);
	while($arType = $dbType->GetNext()){
		$arEvent[$arType["ID"]] = "[".$arType["ID"]."] ".$arType["SUBJECT"];
	}

}
$arComponentParameters = array(
	"GROUPS" => array(
		"BASE" => array(
			"NAME" => 'Основные параметры',
		),
		"DATA_SOURCE" => array(
			"NAME" => 'Выбор Инфоблока',
		),        
	),
    'PARAMETERS' => array(      
        'EMAIL' => array(
            'NAME' => 'E-mail адрес',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'PARENT' => 'BASE',
            ),
        'TIMER' => array(
            'NAME' => 'Время через которое появится окно',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'PARENT' => 'BASE',
			"DEFAULT" => '30'
            ),
          'EVENT_NAME' => array(
            'NAME' => 'Тип почтового события',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'PARENT' => 'BASE',
            "REFRESH" => "Y",
            ),
          "EVENT_MESSAGE_ID" => Array(
			"NAME" => 'Почтовые шаблоны для отправки письма', 
			"TYPE"=>"LIST", 
			"VALUES" => $arEvent,
			"DEFAULT"=>"", 
			"MULTIPLE"=>"Y", 
			"COLS"=>25, 
			"PARENT" => "BASE",
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),

         "MAIN_TYPE" => array(
            "PARENT" => "BASE",
            "NAME" => 'Использовать инфоблоки',
            "TYPE" => "CHECKBOX",
            "VALUES" => 'N',
            "REFRESH" => "Y",
        ), 

        
    ),
);

if ($arCurrentValues['MAIN_TYPE']=='Y') {
     $arComponentParameters['PARAMETERS']['IBLOCK_TYPE'] = array(
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Выберете тип инфоблока',
        "TYPE" => "LIST",
        "VALUES" => $arIBlockType,
        "REFRESH" => "Y",
    );
        $arComponentParameters['PARAMETERS']['IBLOCK_ID'] = array(
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Выберете инфоблок',
        "TYPE" => "LIST",
        "MULTIPLE" => "N",
        "ADDITIONAL_VALUES" => "N",
        "VALUES" => $arIBlock,
        "REFRESH" => "Y",
    );
    }
   
?>