<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (CModule::IncludeModule('iblock')) {

    // создать новый раздел инфоблока

    $obj = new CIBlockSection;
    $fields = [
        'NAME' => 'test1',
        'IBLOCK_ID' => 2,
        'CODE' => 'TEST1',
    ];

    $result = $obj->Add($fields);

    /*$newElem = $obj->Add($fields);
    var_dump($obj->LAST_ERROR());*/

    // взять раздел инфоблока

    $get = CIBlockSection::GetList(
        ['SORT'=>'ASC'],
        ['ID' => 17, 'ACTIVE' => 'Y'],
        false,
        ['ID', 'NAME', 'IBLOCK_ID'],
        ['nPageSize' => 20]
    );

    while ($result = $get->GetNext()) {
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }

    // обновить элемент инфоблока

    $obj = new CIBlockElement;
    $fields = [
        'IBLOCK_ID' => 4,
        'NAME' => 'тест обработчика',
        'CODE' => 'testEvent',
    ];
    $result = $obj->Update(317, $fields);
    var_dump($result);

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");