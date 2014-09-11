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
if ($social_link_1_type=="vk"){$social_link_1_name=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_6_name"));}
elseif ($social_link_1_type=="google-plus"){$social_link_1_name="Google+";}
else {$social_link_1_name=$social_link_1_type;}
if (!empty($social_link_1) and $social_link_1_type!="N") {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_1_NAME" => $social_link_1_name,
	"SOCIAL_LINK_1" => $social_link_1,
	"SOCIAL_LINK_1_TYPE" => $social_link_1_type,
	"SOCIAL_LINK_1_ACTIVE" => "true",	
	));
}
else {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_1_NAME" => "twitter",
	"SOCIAL_LINK_1" => "http://twitter.com",
	"SOCIAL_LINK_1_TYPE" => "twitter",
	"SOCIAL_LINK_1_ACTIVE" => "false",	
	));
}
//END CREATE 1 SOCIAL MENU POINT

//START CREATE 2 SOCIAL MENU POINT
$social_link_2=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_2"));
$social_link_2_type=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_2_type"));
if ($social_link_2_type=="vk"){$social_link_2_name=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_6_name"));}
elseif ($social_link_2_type=="google-plus"){$social_link_2_name="Google+";}
else {$social_link_2_name=$social_link_2_type;}
if (!empty($social_link_2) and $social_link_2_type!="N") {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_2_NAME" => $social_link_2_name,
	"SOCIAL_LINK_2" => $social_link_2,
	"SOCIAL_LINK_2_TYPE" => $social_link_2_type,
	"SOCIAL_LINK_2_ACTIVE" => "true",	
	));
}
else {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_2_NAME" => "github",
	"SOCIAL_LINK_2" => "http://github.com",
	"SOCIAL_LINK_2_TYPE" => "github",
	"SOCIAL_LINK_2_ACTIVE" => "false",	
	));
}
//END CREATE 2 SOCIAL MENU POINT

//START CREATE 3 SOCIAL MENU POINT
$social_link_3=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_3"));
$social_link_3_type=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_3_type"));
if ($social_link_3_type=="vk"){$social_link_3_name=htmlspecialcharsbx($wizard->GetVar("wiz_social_link_6_name"));}
elseif ($social_link_3_type=="google-plus"){$social_link_3_name="Google+";}
else {$social_link_3_name=$social_link_3_type;}
if (!empty($social_link_3) and $social_link_3_type!="N") {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_3_NAME" => $social_link_3_name,
	"SOCIAL_LINK_3" => $social_link_3,
	"SOCIAL_LINK_3_TYPE" => $social_link_3_type,
	"SOCIAL_LINK_3_ACTIVE" => "true",	
	));
}
else {
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.social.menu.php", array(
	"SOCIAL_LINK_3_NAME" => "Linkedin",
	"SOCIAL_LINK_3" => "http://linkedin.com",
	"SOCIAL_LINK_3_TYPE" => "linkedin",
	"SOCIAL_LINK_3_ACTIVE" => "false",	
	));
}
//END CREATE 3 SOCIAL MENU POINT


//START FUNK COPY F
$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . WIZARD_TEMPLATE_ID;

CopyDirFiles(
    $_SERVER["DOCUMENT_ROOT"] . WizardServices::GetTemplatesPath(WIZARD_RELATIVE_PATH . "/site") . "/" . WIZARD_TEMPLATE_ID,
    $bitrixTemplateDir,
    $rewrite = true,
    $recursive = true,
    $delete_after_copy = false
);
//END FUNK COPY F


//START Add IMG to the 2nd slide
$siteSlideImg2 = $wizard->GetVar("siteSlideImg2");
if($siteSlideImg2>0)
{
	$ff = CFile::GetByID($siteSlideImg2);
	if($zr = $ff->Fetch())
	{
		$strOldFile = str_replace("//", "/", WIZARD_SITE_ROOT_PATH."/".(COption::GetOptionString("main", "upload_dir", "upload"))."/".$zr["SUBDIR"]."/".$zr["FILE_NAME"]);
		$strNewFile = WIZARD_SITE_PATH."include/slide2.png";
		@copy($strOldFile, $strNewFile);
		CFile::Delete($siteSlideImg2);
	}
}
//CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/sect_slide_2.php", array("SLIDE_2_IMG_URL" => WIZARD_SITE_DIR."include/slide2.png"));
//END Add IMG to the 2nd slide


//START Add text to the 2nd slide
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/sect_slide_2.php", array(
"SLIDE_2_TITLE_TEXT" => nl2br($wizard->GetVar("wiz_slide_2_title_text")), //http://php.net/manual/ru/function.nl2br.php to CREATE <BR/>
"SLIDE_2_TEXT_TEXT"=>nl2br($wizard->GetVar("wiz_slide_2_text_text")),
"SLIDE_2_IMG_URL" => WIZARD_SITE_DIR."include/slide2.png",
));
//END Add text to the 2nd slide


//START Add IMG to the 3rd slide
$siteSlideImg3 = $wizard->GetVar("siteSlideImg3");
if($siteSlideImg3>0)
{
	$ff = CFile::GetByID($siteSlideImg3);
	if($zr = $ff->Fetch())
	{
		$strOldFile = str_replace("//", "/", WIZARD_SITE_ROOT_PATH."/".(COption::GetOptionString("main", "upload_dir", "upload"))."/".$zr["SUBDIR"]."/".$zr["FILE_NAME"]);
		$strNewFile = WIZARD_SITE_PATH."include/slide3.png";
		@copy($strOldFile, $strNewFile);
		CFile::Delete($siteSlideImg3);
	}
}
//END Add IMG to the 3rd slide


//START Add text to the 3rd slide
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/sect_slide_3.php", array(
"SLIDE_3_TITLE_TEXT" => nl2br($wizard->GetVar("wiz_slide_3_title_text")), //http://php.net/manual/ru/function.nl2br.php to CREATE <BR/>
"SLIDE_3_TEXT_TEXT"=>nl2br($wizard->GetVar("wiz_slide_3_text_text")),
"SLIDE_3_IMG_URL" => WIZARD_SITE_DIR."include/slide3.png",
));
//END Add text to the 3rd slide


//START Add IMG to the 4rd slide
$siteSlideImg4 = $wizard->GetVar("siteSlideImg4");
if($siteSlideImg4>0)
{
	$ff = CFile::GetByID($siteSlideImg4);
	if($zr = $ff->Fetch())
	{
		$strOldFile = str_replace("//", "/", WIZARD_SITE_ROOT_PATH."/".(COption::GetOptionString("main", "upload_dir", "upload"))."/".$zr["SUBDIR"]."/".$zr["FILE_NAME"]);
		$strNewFile = WIZARD_SITE_PATH."include/slide4.png";
		@copy($strOldFile, $strNewFile);
		CFile::Delete($siteSlideImg4);
	}
}
//END Add IMG to the 4rd slide


//START Add text to the 4rd slide
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/sect_slide_4.php", array(
"SLIDE_4_TITLE_TEXT" => nl2br($wizard->GetVar("wiz_slide_4_title_text")), //http://php.net/manual/ru/function.nl2br.php to CREATE <BR/>
"SLIDE_4_TEXT_TEXT"=>nl2br($wizard->GetVar("wiz_slide_4_text_text")),
"SLIDE_4_IMG_URL" => WIZARD_SITE_DIR."include/slide4.png",
));
//END Add text to the 4rd slide


?>