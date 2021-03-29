<?php
global $APPLICATION
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?=SITE_TEMPLATE_PATH?>/styles/style.css" rel="stylesheet">
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
    <header>
        <h1>Я хедер</h1>
    </header>

