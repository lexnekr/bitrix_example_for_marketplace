<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "#SITE_SEO_KEYWORDS#");
$APPLICATION->SetPageProperty("description", "#SITE_SEO_DESCRIPTION#");
$APPLICATION->SetTitle("#SITE_SEO_TITLE#");
$APPLICATION->SetPageProperty("telephonetech", "#TECH_PHONE#");
$APPLICATION->SetPageProperty("telephone", "#PHONE#");
$APPLICATION->SetPageProperty("Headerlogo", "#SITE_TITLE#");
?>


<?$APPLICATION->IncludeComponent("coffeediz:slide", "intro", array(
	"SLIDE_LINK_ID" => "",
	"BACKGRAUND_IMG" => "#SLIDE_1_IMG_URL#",
	"BLOCK_1_TYPE" => "H",
	"STRING_1_SIZE" => "5",
	"STRING_1_TYPE" => "H1",
	"STRING_1_TEXT" => "#SITE_TITLE#",
	"BLOCK_1_HR" => "N",
	"BLOCK_2_TYPE" => "H+",
	"STRING_2_SIZE" => "2",
	"STRING_2_TYPE" => "H3",
	"STRING_2_TEXT" => "#SITE_SLOGAN#",
	"BLOCK_2_HR" => "Y",
	"BLOCK_3_TYPE" => "MENU",
	"BLOCK_3_MENU_TEMPLATE" => "social",
	"BLOCK_3_MENU_TYPE" => "social",
	"BLOCK_3_MENU_MAX_LEVEL" => "1",
	"BLOCK_3_MENU_CHILD_MENU_TYPE" => "left",
	"BLOCK_3_HR" => "N",
	"BLOCK_4_TYPE" => "N",
	"BLOCK_4_HR" => "N",
	"BLOCK_5_TYPE" => "N",
	"BLOCK_5_HR" => "N"
	),
	false
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
			

#GALERY_CARUSEL_CODE#



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



#CARUSEL_CODE#



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


#FEEDBACK_FORM#


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