<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>




<?$APPLICATION->IncludeComponent("bitrix:news.list", "coffeediz.galery_carusel_lite", array(
	"IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
	"IBLOCK_ID" => $arParams['IBLOCK_ID'],
	"NEWS_COUNT" => $arParams['BANNERS_COUNT'],
	"SORT_BY1" => "",
	"SORT_ORDER1" => "",
	"SORT_BY2" => "",
	"SORT_ORDER2" => "",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => $arParams['PROPERTY_CODE_BUTTON_TEXT'],
		2 => $arParams['PROPERTY_CODE_BUTTON_LINK'],
		5 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => $arParams['CACHE_TYPE'] ,
	"CACHE_TIME" => $arParams['CACHE_TIME'],
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => $arParams['PARENT_SECTION'],
	"PARENT_SECTION_CODE" => $arParams['PARENT_SECTION_CODE'],
	"INCLUDE_SUBSECTIONS" => "N",
	"PAGER_TEMPLATE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"PROPERTY_CODE_BUTTON_TEXT" => $arParams['PROPERTY_CODE_BUTTON_TEXT'],
	"PROPERTY_CODE_BUTTON_LINK" => $arParams['PROPERTY_CODE_BUTTON_LINK'],
	"DISPLAY_PAGINATION" => $arParams['DISPLAY_PAGINATION'],
	"PROPERTY_CODE_BUTTON_COLOR" => $arParams['PROPERTY_CODE_BUTTON_COLOR'],
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>