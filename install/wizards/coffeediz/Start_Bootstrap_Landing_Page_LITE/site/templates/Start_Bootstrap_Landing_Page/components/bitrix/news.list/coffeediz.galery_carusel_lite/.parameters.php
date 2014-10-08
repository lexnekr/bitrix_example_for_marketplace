<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();







$arProperty_LNS = array();
$rsProp = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arCurrentValues["IBLOCK_ID"]));
while ($arr=$rsProp->Fetch())
{
	$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S", "E")))
	{
		$arProperty_LNS[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}










$arTemplateParameters = array(
		"PROPERTY_CODE_BUTTON_TEXT" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_TEXT"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_TEXT",
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_BUTTON_LINK" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_LINK"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_LINK",
			"ADDITIONAL_VALUES" => "Y",
		),
		"DISPLAY_PAGINATION" => Array(
			"NAME" => GetMessage("DISPLAY_PAGINATION"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"PROPERTY_CODE_BUTTON_COLOR" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_COLOR"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"VALUES" => array(
				"btn-primary" => GetMessage("PROPERTY_CODE_BUTTON_COLOR_PRIMARY"),
				"btn-default" => GetMessage("PROPERTY_CODE_BUTTON_COLOR_DEFAULT"),
				"btn-danger" => GetMessage("PROPERTY_CODE_BUTTON_COLOR_DANGER"),
				"btn-warning" => GetMessage("PROPERTY_CODE_BUTTON_COLOR_WARNING"),
				"btn-success" => GetMessage("PROPERTY_CODE_BUTTON_COLOR_SUCCESS"),
				"btn-info" => GetMessage("PROPERTY_CODE_BUTTON_COLOR_INFO"),
			),
			"DEFAULT" => "BUTTON_LINK",
			"ADDITIONAL_VALUES" => "N",
		),


);
?>
