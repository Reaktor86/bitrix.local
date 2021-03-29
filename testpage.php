<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Меню 1");
$APPLICATION->SetPageProperty("description", "Описание 1");
$APPLICATION->SetTitle("Новая страница");
?><b><?$APPLICATION->IncludeComponent(
	"bitrix:furniture.vacancies", 
	".default", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
 </b><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>