<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;


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




		"PROPERTY_CODE_BUTTON_1_TEXT" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_1_TEXT"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_1_TEXT",
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_BUTTON_1_LINK" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_1_LINK"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_1_LINK",
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_BUTTON_1_COLOR" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_1_COLOR"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_1_COLOR",
			"ADDITIONAL_VALUES" => "Y",
		),


		"PROPERTY_CODE_BUTTON_2_TEXT" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_2_TEXT"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_2_TEXT",
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_BUTTON_2_LINK" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_2_LINK"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_2_LINK",
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_BUTTON_2_COLOR" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_2_COLOR"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "BUTTON_2_COLOR",
			"ADDITIONAL_VALUES" => "Y",
		),


		"PROPERTY_CODE_BUTTON_3_TEXT" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_3_TEXT"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "",
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_BUTTON_3_LINK" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_3_LINK"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "",
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_BUTTON_3_COLOR" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("PROPERTY_CODE_BUTTON_3_COLOR"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"DEFAULT" => "",
			"ADDITIONAL_VALUES" => "Y",
		),


);?>