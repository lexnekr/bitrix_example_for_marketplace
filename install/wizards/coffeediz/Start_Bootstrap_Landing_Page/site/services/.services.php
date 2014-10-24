<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	
	'main' => Array(
		'NAME' => GetMessage("SERVICE_MAIN_SETTINGS"),
		'STAGES' => Array(
			"files.php",
			"template.php",
			"settings.php",
            "import.php",
		),
	),
	"iblock"	=> array(
		"NAME"		=> GetMessage("SERVICE_IBLOCK"),
		"STAGES"	=> array(
			"types.php",
			"Template_Bootstrap_Landing.php",
			"TEMPLATE_BOOTSTRAP_LANDING_GALERY.php",
			"TEMPLATE_BOOTSTRAP_LANDING_GALERY_LITE.php",
			"material.php",
            "sizes.php",
            "vendor.php",
			"products.php",
			"offers.php",
			"orders.php",
		),
	),
);
?>
