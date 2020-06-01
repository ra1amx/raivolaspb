<?php
 define("NO_KEEP_STATISTIC", true);
 define("NOT_CHECK_PERMISSIONS", true);

 require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

 if ( !$_SERVER['HTTP_X_REQUESTED_WITH'] || !$_SERVER['HTTP_USER_AGENT'] ) {
     $APPLICATION->RestartBuffer();
     die();
 }

   $answer = array();
    $answer['error'] = false;

       $arEventFields = array(
			"NAME"=> $_REQUEST['name'],
			"PHONE" => $_REQUEST['phone'],
			"EMAIL" => $_REQUEST['email'],
			"ZAKAZ"=> $_REQUEST['list'],
			"TYPE"=> $_REQUEST['type'],
			"TOTAL"=> $_REQUEST['total'],
			"PROMOCOD" => $_REQUEST['promocode'],
			"WHY"=>$_REQUEST['why']
            );

if($_REQUEST['type'] == 'promocod'){
				   if(!CEvent::Send("FEEDBACK_FORM", SITE_ID, $arEventFields,'Y',17)){
					   $answer['error'] = true;
					}

				   if(!CEvent::Send("FEEDBACK_FORM", SITE_ID, $arEventFields,'Y',18)){
					   $answer['error'] = true;
					}
} else {
				   if(!CEvent::Send("FEEDBACK_FORM", SITE_ID, $arEventFields,'Y',7)){
					   $answer['error'] = true;
					}

}

echo json_encode($answer);