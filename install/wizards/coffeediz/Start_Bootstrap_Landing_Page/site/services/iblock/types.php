<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;

$arTypes = Array();



if ($wizard->GetVar("wiz_banner_carusel_switcher")!="N" or $wizard->GetVar("wiz_galery_carusel_switcher")!="N")
{
// IF SWITCHER install CARUSEL != N
// OR
// IF SWITCHER install GALERY CARUSEL != N
// INSTAL Type of IBlock for it
$arTypeTemplate = Array(
		"ID" => "TEMPLATE_BOOTSTRAP_LANDING",
		"SECTIONS" => "Y",
		"IN_RSS" => "N",
		"SORT" => 50,
		"LANG" => Array(),
);
array_push($arTypes, $arTypeTemplate);
}


$arLanguages = Array();
$rsLanguage = CLanguage::GetList($by, $order, array());
while($arLanguage = $rsLanguage->Fetch())
	$arLanguages[] = $arLanguage["LID"];

$iblockType = new CIBlockType;
foreach($arTypes as $arType)
{
	$dbType = CIBlockType::GetList(Array(),Array("=ID" => $arType["ID"]));
	if($dbType->Fetch())
		continue;

	foreach($arLanguages as $languageID)
	{
		WizardServices::IncludeServiceLang("type.php", $languageID);

		$code = strtoupper($arType["ID"]);
		$arType["LANG"][$languageID]["NAME"] = GetMessage($code."_TYPE_NAME");
		$arType["LANG"][$languageID]["ELEMENT_NAME"] = GetMessage($code."_ELEMENT_NAME");

		if ($arType["SECTIONS"] == "Y")
			$arType["LANG"][$languageID]["SECTION_NAME"] = GetMessage($code."_SECTION_NAME");
	}

	$iblockType->Add($arType);
}
?>