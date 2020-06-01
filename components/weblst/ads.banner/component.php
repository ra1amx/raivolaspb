<? if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application;
CModule::IncludeModule("iblock");
$request = Application::getInstance()->getContext()->getRequest();
if($_SERVER['REQUEST_METHOD'] == 'POST' && check_bitrix_sessid()){
$GLOBALS['APPLICATION']->RestartBuffer(); 

		if(empty($arResult["ERROR_MESSAGE"])){
    		$arEventFields = array(
			"EVENT" => $request['event'],
    		"NAME" => $request['name'],
    		"PHONE" =>$request['phone'],
   			 );  

		if(!empty($arParams["EVENT_MESSAGE_ID"])){
			foreach($arParams["EVENT_MESSAGE_ID"] as $v){
				if(IntVal($v) > 0){
					 $send = CEvent::Send($arParams['EVENT_NAME'],SITE_ID, $arEventFields, "N", IntVal($v));
				}
			}
		}
		if(!empty($send)){

			echo 'Спасибо за заявку, вскоре менеджер бронирования с Вами свяжется';
		}
	}
die();
}

if($this->startResultCache($arParams['CACHE_TIME'], false)) {

$el = new CiblockElement();

$res= $el->GetList(array('RAND'=>'ASC'),array('IBLOCK_ID'=>$arParams['IBLOCK_ID'],'IBLOCK_TYPE'=>$arParams['IBLOCK_TYPE'],'ACTIVE'=>'Y'),false,array('nTopCount'=>1),array('NAME','PREVIEW_TEXT','PREVIEW_PICTURE','PROPERTY_DATE'))->Fetch();

$arResult['DATE'] = $date = date('Y-m-d',strtotime($res['PROPERTY_DATE_VALUE']."+1 day"));;
$arResult['TIMER'] = $arParams['TIMER']*1000;
$arResult['NAME'] = $res['NAME'];
$arResult['TEXT'] = $res['PREVIEW_TEXT'];
$arResult['IMG'] = CFile::GetFileArray($res['PREVIEW_PICTURE']);
$arResult['LINK'] = $arParams['LINK'];


$this->IncludeComponentTemplate();

}