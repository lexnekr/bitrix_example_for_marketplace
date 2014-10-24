<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (!defined("WIZARD_SITE_ID"))
    return;

if (!defined("WIZARD_SITE_DIR"))
    return;

COption::SetOptionString("fileman", "propstypes", serialize(array(
	"telephonetech"=>GetMessage("MAIN_OPT_TELEPHONETECH"),
	"telephone"=>GetMessage("MAIN_OPT_TELEPHONE")
)), false, $siteID);




?>