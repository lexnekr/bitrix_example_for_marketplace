<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "coffeediz.carusel_iblock", Array(
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
		0 => $arParams['LIST_PROPERTY_CODE'],
		1 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",	
	"AJAX_MODE" => "N",	
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",	
	"PARENT_SECTION" => $arParams['PARENT_SECTION'],
	"PARENT_SECTION_CODE" => $arParams['PARENT_SECTION'],
	"INCLUDE_SUBSECTIONS" => "N",
	"DISPLAY_TOP_PAGER" => "N",	
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_SHOW_ALWAYS" => "N",	
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "N",
	"DISPLAY_NAME" => "N",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "N",

	"BACKGROUND" => $arParams['BACKGROUND'],
	"BACKGROUND_COLOR" => $arParams['BACKGROUND_COLOR'],

	),
	false
);?>



