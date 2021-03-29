<?php

echo '<pre>';
print_r($arParams);
echo '</pre>';

$desc = [
    '#f00' => 'red',
    '#0f0' => 'green',
    '#f0f' => 'pink'
];

$paramColor = $arParams['COLOR'];
// здесь $paramColor = #f0f

if (array_key_exists($paramColor, $desc)) {
    $colorName = $desc[$paramColor];
}
else {
    $colorName = 'не знаю';
}

$arResult['COLOR_NAME'] = $colorName;

$this->IncludeComponentTemplate();
