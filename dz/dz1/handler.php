<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

var_dump($_REQUEST);

if (CModule::IncludeModule('iblock')) {

    /*
     CIBlockElement::SetPropertyValues(
 int ELEMENT_ID,
 int IBLOCK_ID,
 array PROPERTY_VALUES,
 string PROPERTY_CODE = false
);
     */

    $obj = new CIBlockElement;
    $fields = [
        'IBLOCK_ID' => 7,
        'NAME' => 'Результат формы ' . date('Y-m-d H:i:s'),
        'CODE' => 'form',
        'PROPERTY_NAME' => $_REQUEST['name'],
        'PROPERTY_SURNAME' => $_REQUEST['surname'],
        'PROPERTY_FILE' => $_REQUEST['file'],
    ];
    $newElem = $obj->Add($fields);
    var_dump($newElem);



}