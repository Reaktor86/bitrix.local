<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

/*
Создать форму.
Поля формы
 - Имя
- Фамилия
- Документ

Данные формы должны сохраняться в инфоблок. Результат формы = элемент инфоблока.

План действий:
1. Создать новый инфоблок
2. Создать необходимые поля инфоблока
3. Реализовать фронтенд для формы
4. Реализовать бекенд для формы используя апи bitrix

https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/add.php
https://dev.1c-bitrix.ru/api_help/main/reference/cfile/makefilearray.php
 */
?>

<link rel="stylesheet" href="style.css">

<form enctype="multipart/form-data" method="post" action="handler.php">
    <input type="text" name="name" placeholder="имя"><br>
    <input type="text" name="surname" placeholder="фамилия"><br>
    <input type="file" name="file"><br>
    <button type="submit">Отправить</button>
</form>

<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");

