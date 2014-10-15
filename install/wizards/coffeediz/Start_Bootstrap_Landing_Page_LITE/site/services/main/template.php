<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (!defined("WIZARD_TEMPLATE_ID"))
    return;

$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . WIZARD_TEMPLATE_ID;

CopyDirFiles(
    $_SERVER["DOCUMENT_ROOT"] . WizardServices::GetTemplatesPath(WIZARD_RELATIVE_PATH . "/site") . "/" . WIZARD_TEMPLATE_ID,
    $bitrixTemplateDir,
    $rewrite = true,
    $recursive = true,
    $delete_after_copy = false
);


CWizardUtil::ReplaceMacros(
	$bitrixTemplateDir."/Start_Bootstrap_Landing_Page/include/logo.php",
 Array(
    "SITE_TITLE" => htmlspecialcharsbx($wizard->GetVar("siteName")),
 )
);

CWizardUtil::ReplaceMacros(
 $bitrixTemplateDir."Start_Bootstrap_Landing_Page/include/copyright.php",
 Array(
	"siteCopyright" => htmlspecialcharsbx($wizard->GetVar("siteCopyright")),
 )
);


//Attach template to default site
$obSite = CSite::GetList($by = "def", $order = "desc", Array("LID" => WIZARD_SITE_ID));
if ($arSite = $obSite->Fetch()) {

    $arTemplates = Array();
    $arTemplates[] = Array("CONDITION" => "", "SORT" => 1, "TEMPLATE" => "Start_Bootstrap_Landing_Page");

    $arFields = Array(
        "TEMPLATE" => $arTemplates,
        "NAME" => $arSite["NAME"],
    );

    $obSite = new CSite();
    $obSite->Update($arSite["LID"], $arFields);
}
COption::SetOptionString("main", "wizard_template_id", WIZARD_TEMPLATE_ID, false, WIZARD_SITE_ID);

//START Template Name+Description
CWizardUtil::ReplaceMacros(
	$bitrixTemplateDir."/Start_Bootstrap_Landing_Page/description.php",
 Array(
    "TEMPLATE_BOOTSTRAP_LANDING_NAME" => htmlspecialcharsbx(GetMessage("TEMPLATE_BOOTSTRAP_LANDING_NAME")),
    "TEMPLATE_BOOTSTRAP_LANDING_DESCRIPTION" => htmlspecialcharsbx(GetMessage("TEMPLATE_BOOTSTRAP_LANDING_DESCRIPTION")),
 )
);
// END Template Name+Description

?>
