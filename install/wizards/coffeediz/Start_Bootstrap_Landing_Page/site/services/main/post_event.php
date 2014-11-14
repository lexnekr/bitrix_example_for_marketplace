<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

$arEventTypes = Array();
$langs = CLanguage::GetList(($b=""), ($o=""));
while($language = $langs->Fetch())
{
	$lid = $language["LID"];
	IncludeModuleLangFile(__FILE__, $lid);
}

IncludeModuleLangFile(__FILE__);




// START ESEY POST TEMPLATE
$arFilter = Array(
    "TYPE_ID"       => "FEEDBACK_FORM",
    "ACTIVE"        => "Y",
    "SUBJECT"       => GetMessage("MF_EVENT_SUBJECT"),
    );

$rsMess = CEventMessage::GetList($by="site_id", $order="desc", $arFilter);
$GetPostTemplateEsey = $rsMess->Fetch();
if (empty($GetPostTemplateEsey))
{
	$emess = new CEventMessage;
	$arMessage = Array(
		"EVENT_NAME" => "FEEDBACK_FORM",
		"LID" => WIZARD_SITE_ID,
		"EMAIL_FROM" => "#DEFAULT_EMAIL_FROM#",
		"EMAIL_TO" => "#EMAIL_TO#",
		"SUBJECT" => GetMessage("MF_EVENT_SUBJECT"),
		"MESSAGE" => GetMessage("MF_EVENT_MESSAGE")
	);
	$PostTemplateID = $emess->Add($arMessage);
	//	echo $PostTemplateID;
}
else
{

	$arFilter2 = Array(
		"TYPE_ID"       => "FEEDBACK_FORM",
		"SITE_ID"       => WIZARD_SITE_ID,
		"ACTIVE"        => "Y",
		"SUBJECT"       => GetMessage("MF_EVENT_SUBJECT"),
		);

	$rsMess = CEventMessage::GetList($by="site_id", $order="desc", $arFilter2);
	$GetPostTemplateEseySite = $rsMess->Fetch();


	if (empty($GetPostTemplateEseySite))
	{


		$replacements = array(LID => array($GetPostTemplateEsey['LID'],WIZARD_SITE_ID));
		$GetPostTemplateEseyAdd = array_replace($GetPostTemplateEsey, $replacements);

		$em = new CEventMessage;
		$PostTemplateIDUp = $em->Update($GetPostTemplateEsey['ID'], $GetPostTemplateEseyAdd);
	}
	$PostTemplateID=$GetPostTemplateEsey['ID'];
	//	echo $PostTemplateID;
}
// END ESEY POST TEMPLATE





$feedback_form='
<?$APPLICATION->IncludeComponent("coffeediz:feedback.main", ".default", array(
	"FORM_TITLE" => "",
	"FORM_TITLE_TYPE" => "H1",
	"FORM_TITLE_SIZE" => "4",
	"USE_CAPTCHA" => "Y",
	"OK_TEXT" => "#OK_TEXT#",
	"EMAIL_TO" => "#MAIL#",
	"USED_FIELDS" => array(
		0 => "NAME",
		1 => "PHONE",
		2 => "EMAIL",
		3 => "MESSAGE",
	),
	"REQUIRED_FIELDS" => array(
		0 => "PHONE",
	),
	"EVENT_MESSAGE_ID" => array(
		0 => "#EMAIL_TEMPLATE_ID#",
	),
	"USE_IN_COMPONENT" => "N",
	"MESSAGE_HIDTH" => "10",
	"BUTTON_MESSAGE" => "#BUTTON_MESSAGE#",
	"PROPERTY_CODE_BUTTON_COLOR" => "btn-warning",
	"NAME_HINT_TITLE" => "#NAME_HINT_TITLE#",
	"NAME_HINT_TEXT" => "#NAME_HINT_TEXT#",
	"EMAIL_HINT_TITLE" => "#EMAIL_HINT_TITLE#",
	"EMAIL_HINT_TEXT" => "email",
	"PHONE_HINT_TITLE" => "#PHONE_HINT_TITLE#",
	"PHONE_HINT_TEXT" => "+7(926)123-45-67",
	"MESSAGE_HINT_TITLE" => "#MESSAGE_HINT_TITLE#"
	),
	false
);?>
';
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array("FEEDBACK_FORM" => $feedback_form));

	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array(
		"EMAIL_TEMPLATE_ID" => htmlspecialcharsbx($PostTemplateID),
		"MAIL" => htmlspecialcharsbx($wizard->GetVar("admins_e_mail")),
		"MESSAGE_HINT_TITLE" => GetMessage('MESSAGE_HINT_TITLE'),
		"PHONE_HINT_TITLE" => GetMessage('PHONE_HINT_TITLE'),
		"EMAIL_HINT_TITLE" => GetMessage('EMAIL_HINT_TITLE'),
		"NAME_HINT_TEXT" => GetMessage('NAME_HINT_TEXT'),
		"NAME_HINT_TITLE" => GetMessage('NAME_HINT_TITLE'),
		"BUTTON_MESSAGE" => GetMessage('BUTTON_MESSAGE'),
		"OK_TEXT" => GetMessage('OK_TEXT'),
	)
	);
//	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array("MAIL" => htmlspecialcharsbx($wizard->GetVar("admins_e_mail"))));










?>