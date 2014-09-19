<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(

	"PARAMETERS" => array(
		"CACHE_TIME"  =>  Array("DEFAULT"=>3600),
		"BACKGROUND" => Array(
			"NAME" => GetMessage("BACKGROUND"),
		),
		"BACKGROUND_COLOR" => Array(
			"NAME" => GetMessage("BACKGROUND_COLOR"),
			"TYPE" => "COLORPICKER",
		),
	),
);
?>