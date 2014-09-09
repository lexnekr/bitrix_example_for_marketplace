<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (!defined("WIZARD_SITE_ID"))
    return;

if (!defined("WIZARD_SITE_DIR"))
    return;

$path = str_replace("//", "/", WIZARD_ABSOLUTE_PATH . "/site/public/" . LANGUAGE_ID . "/");

$handle = @opendir($path);
if ($handle) {
    while ($file = readdir($handle)) {
        if (in_array($file, array(
            ".",
            "..",
            "bitrix_messages",
            "bitrix_admin",
            "bitrix_php_interface",
            "bitrix_js",
            "bitrix_images",
            "bitrix_themes"
        ))
        ) continue;


        if ($file == 'bitrix_php_interface_init')
            $to = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/' . WIZARD_SITE_ID;
        elseif ($file == 'upload')
            $to = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
        else
            $to = WIZARD_SITE_PATH . "/" . $file;

        CopyDirFiles(
            $path . $file,
            $to,
            $rewrite = true,
            $recursive = true,
            $delete_after_copy = false
        );
    }

}
copy(WIZARD_THEME_ABSOLUTE_PATH . "/favicon.ico", WIZARD_SITE_PATH . "favicon.ico");

CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array(
"SITE_TITLE" => htmlspecialcharsbx($wizard->GetVar("siteSeoTitle")),
"SITE_SEO_DESCRIPTION" => htmlspecialcharsbx($wizard->GetVar("siteSeoDescription")),
"SITE_SEO_KEYWORDS" => htmlspecialcharsbx($wizard->GetVar("siteSeoKeywords")),
));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/sect_slide_1.php", array("SITE_TITLE" => htmlspecialcharsbx($wizard->GetVar("siteName"))));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/local/templates/".WIZARD_TEMPLATE_ID."/include/logo.php", array("SITE_TITLE" => htmlspecialcharsbx($wizard->GetVar("siteName"))));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/sect_slide_1.php", array("SITE_SLOGAN" => htmlspecialcharsbx($wizard->GetVar("siteDescription"))));

//START CREATE 1 SOCIAL MENU POINT
$social_link_1=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_1"));
$social_link_1_type=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_1_type"));
if (!empty($social_link_1) and $social_link_1_type!="N") {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_1" => $social_link_1,
	"SOCIAL_LINK_1_TYPE" => $social_link_1_type,
	"SOCIAL_LINK_1_ACTIVE" => "true",	
	));
}
else {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_1" => "http://twitter.com",
	"SOCIAL_LINK_1_TYPE" => "twitter",
	"SOCIAL_LINK_1_ACTIVE" => "false",	
	));
}
//END CREATE 1 SOCIAL MENU POINT


$social_link_2=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_2"));
$social_link_2_type=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_2_type"));
if (!empty($social_link_2) and $social_link_2_type!="N") {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_2" => $social_link_2,
	"SOCIAL_LINK_2_TYPE" => $social_link_2_type,
	"SOCIAL_LINK_2_ACTIVE" => "true",	
	));
}
else {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_2" => "http://github.com",
	"SOCIAL_LINK_2_TYPE" => "github",
	"SOCIAL_LINK_2_ACTIVE" => "false",	
	));
}


$social_link_3=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_3"));
$social_link_3_type=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_3_type"));
if (!empty($social_link_3) and $social_link_3_type!="N") {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_3" => $social_link_3,
	"SOCIAL_LINK_3_TYPE" => $social_link_3_type,
	"SOCIAL_LINK_3_ACTIVE" => "true",	
	));
}
else {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_3" => "http://linkedin.com",
	"SOCIAL_LINK_3_TYPE" => "linkedin",
	"SOCIAL_LINK_3_ACTIVE" => "false",	
	));
}

?>