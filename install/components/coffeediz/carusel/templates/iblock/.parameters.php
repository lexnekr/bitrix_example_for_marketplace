<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes();

$arIBlocks = Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
{
	$arIBlocks[$arRes["ID"]] = $arRes["NAME"];
}

$arSections=array();
if(intval($arCurrentValues["IBLOCK_ID"])>0){
  $arFilter = Array('IBLOCK_ID'=>$arCurrentValues["IBLOCK_ID"], 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array("LEFT_MARGIN" => "ASC", "NAME"=>"DESC"), $arFilter);
  while($ar_result = $db_list->GetNext())
  {
    //$arSections[$ar_result['ID']] = "[[".$ar_result["DEPTH_LEVEL"]."]]".str_repeat("--", ($ar_result["DEPTH_LEVEL"] - 1)).$ar_result['NAME'];
$arSections[$ar_result['ID']] = "(".$ar_result["DEPTH_LEVEL"].") ".str_repeat("-", $ar_result["DEPTH_LEVEL"])." ".$ar_result['NAME'];
  }
}













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
		"IBLOCK_TYPE"  =>  Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		),

		"IBLOCK_ID" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCKS"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			//"DEFAULT" => '={$_REQUEST["ID"]}',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),
		"PARENT_SECTION" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_SECTION_ID"),
			"TYPE" => "LIST",
			"DEFAULT" => '',
   			"VALUES" => $arSections,
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),
		"BANNERS_COUNT"  =>  Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BANNERS_COUNT"),
			"TYPE" => "STRING",
			"DEFAULT" => "5",
		),



		"LIST_PROPERTY_CODE" => array(
			"PARENT" => "LIST_SETTINGS",
			"NAME" => GetMessage("T_IBLOCK_PROPERTY"),
			"TYPE" => "LIST",
			"MULTIPLE" => "N",
			"VALUES" => $arProperty_LNS,
			"ADDITIONAL_VALUES" => "Y",
		),

);?>