<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "#SITE_SEO_KEYWORDS#");
$APPLICATION->SetPageProperty("description", "#SITE_SEO_DESCRIPTION#");
$APPLICATION->SetTitle("#SITE_TITLE#");
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "sect",
		"EDIT_TEMPLATE" => "",
		"AREA_FILE_SUFFIX" => "slide_1",
		"AREA_FILE_RECURSIVE" => "Y"
	)
);?>



<?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
"AREA_FILE_SHOW" => "sect",
"EDIT_TEMPLATE" => "",
"AREA_FILE_SUFFIX" => "slide_2",
"AREA_FILE_RECURSIVE" => "Y"
)
);?>
			





<?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
"AREA_FILE_SHOW" => "sect",
"EDIT_TEMPLATE" => "",
"AREA_FILE_SUFFIX" => "slide_3",
"AREA_FILE_RECURSIVE" => "Y"
)
);?>



<?$APPLICATION->IncludeComponent("coffeediz:carusel", "iblock", array(
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"BACKGROUND" => "#SITE_PATH#",
	"BACKGROUND_COLOR" => "#e84ba5",
	"IBLOCK_TYPE" => "Template_Bootstrap_Landing",
	"IBLOCK_ID" => "#CARUSEL_IBLOCK_ID#",
	"PARENT_SECTION" => "mian",
	"BANNERS_COUNT" => "20",
	"LIST_PROPERTY_CODE" => "TEMPLATE_BOOTSTRAP_LANDING_CARUSEL_LINK"
	),
	false
);?>



<?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
"AREA_FILE_SHOW" => "sect",
"EDIT_TEMPLATE" => "",
"AREA_FILE_SUFFIX" => "slide_4",
"AREA_FILE_RECURSIVE" => "Y"
)
);?>



<?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
"AREA_FILE_SHOW" => "sect",
"EDIT_TEMPLATE" => "",
"AREA_FILE_SUFFIX" => "slide_5",
"AREA_FILE_RECURSIVE" => "Y"
)
);?>



<?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
"AREA_FILE_SHOW" => "sect",
"EDIT_TEMPLATE" => "",
"AREA_FILE_SUFFIX" => "slide_6",
"AREA_FILE_RECURSIVE" => "Y"
)
);?>







<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>