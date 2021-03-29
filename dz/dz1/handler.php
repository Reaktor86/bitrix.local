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
    $props = [
        'NAME' => $_REQUEST['name'],
        'SURNAME' => $_REQUEST['surname'],
        'FILE' => $_REQUEST['file'],
    ];
    $fields = [
        'IBLOCK_ID' => 4,
        'NAME' => 'Результат формы ' . date('Y-m-d H:i:s'),
        'CODE' => 'form',
        'PROPERTY_VALUES' => $props,
    ];
    $newElem = $obj->Add($fields);
    var_dump($obj->LAST_ERROR);

    $arFiles = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/images/");
    

}