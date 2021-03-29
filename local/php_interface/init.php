<?php
AddEventHandler('iblock', 'OnBeforeIBlockElementUpdate', function (&$arFields){
    if ($arFields['IBLOCK_ID'] == 4) {
        $arFields['DETAIL_TEXT'] = date("Y-M-d H:m:s");
    }
});
