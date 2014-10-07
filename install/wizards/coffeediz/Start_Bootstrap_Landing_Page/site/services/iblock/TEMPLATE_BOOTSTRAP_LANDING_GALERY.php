<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;
	
	
	
	
if ($wizard->GetVar("wiz_galery_carusel_switcher")=="1")
{
	// IF SWITCHER install GALERY CARUSEL == FULL (1)
	// INSTALL IBlock

	$iblockXMLFile = WIZARD_SERVICE_RELATIVE_PATH."/xml/".LANGUAGE_ID."/TEMPLATE_BOOTSTRAP_LANDING_GALERY.xml"; 
	$iblockCode = "TEMPLATE_BOOTSTRAP_LANDING_GALERY_".WIZARD_SITE_ID; 
	$iblockType = "TEMPLATE_BOOTSTRAP_LANDING"; 

	$rsIBlock = CIBlock::GetList(array(), array("CODE" => $iblockCode, "TYPE" => $iblockType));
	$iblockID = false; 
	if ($arIBlock = $rsIBlock->Fetch())
	{
		$iblockID = $arIBlock["ID"]; 
		if (WIZARD_INSTALL_DEMO_DATA)
		{
			CIBlock::Delete($arIBlock["ID"]); 
			$iblockID = false; 
		}
	}

	if($iblockID == false)
	{
		$permissions = Array(
				"1" => "X",
				"2" => "R"
			);
		$dbGroup = CGroup::GetList($by = "", $order = "", Array("STRING_ID" => "content_editor"));
		if($arGroup = $dbGroup -> Fetch())
		{
			$permissions[$arGroup["ID"]] = 'W';
		};
		$iblockID = WizardServices::ImportIBlockFromXML(
			$iblockXMLFile,
			"TEMPLATE_BOOTSTRAP_LANDING_GALERY",
			$iblockType,
			WIZARD_SITE_ID,
			$permissions
		);

		if ($iblockID < 1)
			return;
		
		//WizardServices::SetIBlockFormSettings($iblockID, Array ( 'tabs' => GetMessage("W_IB_GROUP_PHOTOG_TAB1").$REAL_PICTURE_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB2").$rating_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB3").$vote_count_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB4").$vote_sum_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB5").$APPROVE_ELEMENT_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB6").$PUBLIC_ELEMENT_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB7"), ));
		
		//IBlock fields
		$iblock = new CIBlock;
		$arFields = Array(
			"ACTIVE" => "Y",
			"FIELDS" => array ( 'IBLOCK_SECTION' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'ACTIVE' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => 'Y', ), 'ACTIVE_FROM' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '=today', ), 'ACTIVE_TO' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'SORT' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'NAME' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => '', ), 'PREVIEW_PICTURE' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => array ( 'FROM_DETAIL' => 'N', 'SCALE' => 'N', 'WIDTH' => '', 'HEIGHT' => '', 'IGNORE_ERRORS' => 'N', ), ), 'PREVIEW_TEXT_TYPE' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => 'text', ), 'PREVIEW_TEXT' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'DETAIL_PICTURE' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => array ( 'SCALE' => 'N', 'WIDTH' => '', 'HEIGHT' => '', 'IGNORE_ERRORS' => 'N', ), ), 'DETAIL_TEXT_TYPE' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => 'text', ), 'DETAIL_TEXT' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'XML_ID' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'CODE' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'TAGS' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), ), 
			"CODE" => $iblockCode, 
			"XML_ID" => $iblockCode,
			"NAME" => "[".WIZARD_SITE_ID."] ".$iblock->GetArrayByID($iblockID, "NAME")
		);
		
		$iblock->Update($iblockID, $arFields);
	}
	else
	{
		$arSites = array(); 
		$db_res = CIBlock::GetSite($iblockID);
		while ($res = $db_res->Fetch())
			$arSites[] = $res["LID"]; 
		if (!in_array(WIZARD_SITE_ID, $arSites))
		{
			$arSites[] = WIZARD_SITE_ID;
			$iblock = new CIBlock;
			$iblock->Update($iblockID, array("LID" => $arSites));
		}
	}
	
	// IF SWITCHER install GALERY CARUSEL == FULL (1)
	// INSTALL CARUSEL COMPONENT TO PAGE

	$Galery_carusel_code = '
		<?$APPLICATION->IncludeComponent("coffeediz:galery-carusel", "full", array(
		"IBLOCK_TYPE" => "TEMPLATE_BOOTSTRAP_LANDING",
		"IBLOCK_ID" => "#CARUSEL_IBLOCK_ID#",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "Benefits",
		"BANNERS_COUNT" => "20",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DISPLAY_PAGINATION" => "N",
		"PROPERTY_CODE_BUTTON_1_TEXT" => "BUTTON_1_TEXT",
		"PROPERTY_CODE_BUTTON_1_LINK" => "BUTTON_1_LINK",
		"PROPERTY_CODE_BUTTON_1_COLOR" => "BUTTON_1_COLOR",
		"PROPERTY_CODE_BUTTON_2_TEXT" => "BUTTON_2_TEXT",
		"PROPERTY_CODE_BUTTON_2_LINK" => "BUTTON_2_LINK",
		"PROPERTY_CODE_BUTTON_2_COLOR" => "BUTTON_2_COLOR",
		"PROPERTY_CODE_BUTTON_3_TEXT" => "BUTTON_3_TEXT",
		"PROPERTY_CODE_BUTTON_3_LINK" => "BUTTON_3_LINK",
		"PROPERTY_CODE_BUTTON_3_COLOR" => "BUTTON_3_COLOR"
		),
		false
		);?>
	';
	
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array("GALERY_CARUSEL_CODE" => $Galery_carusel_code));
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array("CARUSEL_IBLOCK_ID" => $iblockID));
	
}

?>
