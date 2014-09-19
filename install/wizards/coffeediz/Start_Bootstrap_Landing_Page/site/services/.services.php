<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	
	'main' => Array(
		'NAME' => GetMessage("SERVICE_MAIN_SETTINGS"),
		'STAGES' => Array(
			"files.php",
			"template.php",
            "import.php",
		),
	),
	"iblock"	=> array(
		"NAME"		=> GetMessage("SERVICE_IBLOCK"),
		"STAGES"	=> array(
			"types.php",
			"Template_Bootstrap_Landing.php",
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
