<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arMenu = GetMenuTypes($site);

$arType = array (
"N"=>GetMessage("BLOCK_Type_0"),
"H"=>GetMessage("BLOCK_Type_1"),
"H+"=>GetMessage("BLOCK_Type_2"),
"HTML"=>GetMessage("BLOCK_Type_3"),
"MENU"=>GetMessage("BLOCK_Type_4"),
"IMG"=>GetMessage("BLOCK_Type_5"),
);

$arSize = array (
"7"=>GetMessage("Size7"),
"6"=>GetMessage("Size6"),
"5"=>GetMessage("Size5"),
"4"=>GetMessage("Size4"),
"3"=>GetMessage("Size3"),
"2"=>GetMessage("Size2"),
"1"=>GetMessage("Size1"),
);

if ($arCurrentValues["STRING_2_TYPE"] == "1")
{
$arType1 = array (
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}
else
{
$arType1 = array (
"H1"=>GetMessage("Type1"),
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}
if ($arCurrentValues["STRING_1_TYPE"] == "1")
{
$arType2 = array (
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}
else
{
$arType2 = array (
"H1"=>GetMessage("Type1"),
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}


$arComponentParameters = array(
	"GROUPS" => array(
		"BLOCK_1" => array(
			"NAME" => GetMessage("BLOCK_1"),
			"SORT" => "110",
		),
		"BLOCK_2" => array(
			"NAME" => GetMessage("BLOCK_2"),
			"SORT" => "120",
		),
		"BLOCK_3" => array(
			"NAME" => GetMessage("BLOCK_3"),
			"SORT" => "130",
		),
		"BLOCK_4" => array(
			"NAME" => GetMessage("BLOCK_4"),
			"SORT" => "140",
		),
		"BLOCK_5" => array(
			"NAME" => GetMessage("BLOCK_5"),
			"SORT" => "150",
		),
	),

	"PARAMETERS" => array(
		"BLOCK_1_TYPE" => Array(
			"PARENT" => "BLOCK_1",
			"NAME" => GetMessage("BLOCK_1_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H",
		),
		"BLOCK_2_TYPE" => Array(
			"PARENT" => "BLOCK_2",
			"NAME" => GetMessage("BLOCK_2_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H+",
		),
		"BLOCK_3_TYPE" => Array(
			"PARENT" => "BLOCK_3",
			"NAME" => GetMessage("BLOCK_3_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "MENU",
		),
		"BLOCK_4_TYPE" => Array(
			"PARENT" => "BLOCK_4",
			"NAME" => GetMessage("BLOCK_4_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "IMG",
		),
		"BLOCK_5_TYPE" => Array(
			"PARENT" => "BLOCK_5",
			"NAME" => GetMessage("BLOCK_5_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H",
		),
		"SLIDE_LINK_ID" => Array(
			"NAME" => GetMessage("SLIDE_LINK_ID"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"PARENT" => "BASE",
		),
	),
);

//
// BLOCK 1 START
//
if ($arCurrentValues["BLOCK_1_TYPE"] == "H")
{
	$arComponentParameters["PARAMETERS"]["STRING_1_SIZE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_1_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType1,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H1",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_1_TEXT"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "H+")
{
	$arComponentParameters["PARAMETERS"]["STRING_1_SIZE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_1_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType1,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H1",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_1_TEXT"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "MENU")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_1_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_1_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arComponentParameters["PARAMETERS"]["BLOCK_1_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_1_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arComponentParameters["PARAMETERS"]["BLOCK_1_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_1",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_1_AREA_FILE_SHOW"] == "file")
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_1_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_1",
		);
	}
	else
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_1_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_1",
		);

		if ($arCurrentValues["BLOCK_1_AREA_FILE_SHOW"] == "sect")
		{
			$arComponentParameters["PARAMETERS"]["BLOCK_1_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_1",
			);
		}
	}

	$arComponentParameters["PARAMETERS"]["BLOCK_1_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_1",
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "IMG")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_1_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_1_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_1_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_1_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
}

$arComponentParameters["PARAMETERS"]["BLOCK_1_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_1",
);
//
// BLOCK 1 END
//

//
// BLOCK 2 START
//
if ($arCurrentValues["BLOCK_2_TYPE"] == "H")
{
	$arComponentParameters["PARAMETERS"]["STRING_2_SIZE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_2_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_2_TEXT"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "H+")
{
	$arComponentParameters["PARAMETERS"]["STRING_2_SIZE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_2_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_2_TEXT"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "MENU")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_2_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_2_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arComponentParameters["PARAMETERS"]["BLOCK_2_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_2_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arComponentParameters["PARAMETERS"]["BLOCK_2_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_2",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_2_AREA_FILE_SHOW"] == "file")
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_2_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_2",
		);
	}
	else
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_2_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_2",
		);

		if ($arCurrentValues["BLOCK_2_AREA_FILE_SHOW"] == "sect")
		{
			$arComponentParameters["PARAMETERS"]["BLOCK_2_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_2",
			);
		}
	}

	$arComponentParameters["PARAMETERS"]["BLOCK_2_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_2",
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "IMG")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_2_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_2_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_2_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_2_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
}

$arComponentParameters["PARAMETERS"]["BLOCK_2_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_2",
);
//
// BLOCK 2 END
//

//
// BLOCK 3 START
//
if ($arCurrentValues["BLOCK_3_TYPE"] == "H")
{
	$arComponentParameters["PARAMETERS"]["STRING_3_SIZE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_3_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_3_TEXT"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "H+")
{
	$arComponentParameters["PARAMETERS"]["STRING_3_SIZE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_3_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_3_TEXT"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "MENU")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_3_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_3_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arComponentParameters["PARAMETERS"]["BLOCK_3_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_3_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arComponentParameters["PARAMETERS"]["BLOCK_3_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_3",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_3_AREA_FILE_SHOW"] == "file")
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_3_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_3",
		);
	}
	else
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_3_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_3",
		);

		if ($arCurrentValues["BLOCK_3_AREA_FILE_SHOW"] == "sect")
		{
			$arComponentParameters["PARAMETERS"]["BLOCK_3_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_3",
			);
		}
	}

	$arComponentParameters["PARAMETERS"]["BLOCK_3_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_3",
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "IMG")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_3_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_3_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_3_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_3_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
}

$arComponentParameters["PARAMETERS"]["BLOCK_3_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_3",
);
//
// BLOCK 3 END
//

//
// BLOCK 4 START
//
if ($arCurrentValues["BLOCK_4_TYPE"] == "H")
{
	$arComponentParameters["PARAMETERS"]["STRING_4_SIZE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_4_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_4_TEXT"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "H+")
{
	$arComponentParameters["PARAMETERS"]["STRING_4_SIZE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_4_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_4_TEXT"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "MENU")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_4_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_4_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arComponentParameters["PARAMETERS"]["BLOCK_4_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_4_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arComponentParameters["PARAMETERS"]["BLOCK_4_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_4",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_4_AREA_FILE_SHOW"] == "file")
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_4_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_4",
		);
	}
	else
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_4_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_4",
		);

		if ($arCurrentValues["BLOCK_4_AREA_FILE_SHOW"] == "sect")
		{
			$arComponentParameters["PARAMETERS"]["BLOCK_4_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_4",
			);
		}
	}

	$arComponentParameters["PARAMETERS"]["BLOCK_4_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_4",
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "IMG")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_4_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_4_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_4_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_4_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
}

$arComponentParameters["PARAMETERS"]["BLOCK_4_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_4",
);
//
// BLOCK 4 END
//

//
// BLOCK 5 START
//
if ($arCurrentValues["BLOCK_5_TYPE"] == "H")
{
	$arComponentParameters["PARAMETERS"]["STRING_5_SIZE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_5_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_5_TEXT"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "H+")
{
	$arComponentParameters["PARAMETERS"]["STRING_5_SIZE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arComponentParameters["PARAMETERS"]["STRING_5_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["STRING_5_TEXT"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "MENU")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_5_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_5_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arComponentParameters["PARAMETERS"]["BLOCK_5_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_5_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arComponentParameters["PARAMETERS"]["BLOCK_5_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_5",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_5_AREA_FILE_SHOW"] == "file")
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_5_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_5",
		);
	}
	else
	{
		$arComponentParameters["PARAMETERS"]["BLOCK_5_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_5",
		);

		if ($arCurrentValues["BLOCK_5_AREA_FILE_SHOW"] == "sect")
		{
			$arComponentParameters["PARAMETERS"]["BLOCK_5_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_5",
			);
		}
	}

	$arComponentParameters["PARAMETERS"]["BLOCK_5_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_5",
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "IMG")
{
	$arComponentParameters["PARAMETERS"]["BLOCK_5_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_5_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_5_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
	$arComponentParameters["PARAMETERS"]["BLOCK_5_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
}

$arComponentParameters["PARAMETERS"]["BLOCK_5_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_5",
);
//
// BLOCK 5 END
//


?>