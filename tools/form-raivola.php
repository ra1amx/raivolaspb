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
			"COUNT"=> $_REQUEST['count'],
			"CAT"=> $_REQUEST['category'],
			"COMMENT"=> $_REQUEST['comment'],
			"TO"=> $_REQUEST['to'],
			"FROM"=> $_REQUEST['from'],
			"NAMEORG"=> $_REQUEST['name_org'],
			'TEXT' => $_REQUEST['text'],
            );
if($_REQUEST['text']){
				   if(!CEvent::Send("FEEDBACK_FORM", SITE_ID, $arEventFields,'Y',19)){
					   $answer['error'] = true;
					}
} else{

				   if(!CEvent::Send("FEEDBACK_FORM", SITE_ID, $arEventFields,'Y',10)){
					   $answer['error'] = true;
					}
}

echo json_encode($answer);