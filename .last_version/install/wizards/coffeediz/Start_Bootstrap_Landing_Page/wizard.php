<?

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/install/wizard_sol/wizard.php");

class SelectSiteStep extends CSelectSiteWizardStep
{
    function InitStep()
    {
        parent::InitStep();

        $wizard =& $this->GetWizard();
        $wizard->solutionName = "Start_Bootstrap_Landing_Page";

        $this->SetNextStep("site_settings");
    }

}



class SiteSettingsStep extends CSiteSettingsWizardStep 
{

	function InitStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->solutionName = "Start_Bootstrap_Landing_Page";
		parent::InitStep();

		$this->SetTitle(GetMessage("wiz_settings"));
		$this->SetNextStep("data_install");
		$this->SetNextCaption(GetMessage("wiz_install"));

		$siteID = $wizard->GetVar("siteID");
		
		$siteLogo = $this->GetFileContentImgSrc(WIZARD_SITE_PATH."include/company_logo.php", "/bitrix/wizards/bitrix/demo_community/site/templates/taby/images/logo.jpg");
	
		$wizard->SetDefaultVars(
			Array(
				//"siteName" => $this->GetFileContent(WIZARD_SITE_PATH."include/company_name.php", GetMessage("wiz_name")),
				//"siteDescription" => $this->GetFileContent(WIZARD_SITE_PATH."include/company_description.php", GetMessage("wiz_slogan")), 
				"siteName" => GetMessage("wiz_name"),
				"siteDescription" => GetMessage("wiz_slogan"), 
				//"siteLogo" => $siteLogo,
				//"siteMetaDescription" => GetMessage("wiz_slogan"),
				//"siteMetaKeywords" => GetMessage("wiz_keywords")  
				"siteCopyright" => GetMessage("wisCopyright"), 
			)
		);
	}

	function OnPostForm()
	{
		$wizard =& $this->GetWizard();
		$res = $this->SaveFile("siteLogo", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 80, "max_width" => 90, "make_preview" => "Y"));
	}
	
	function ShowStep()
	{
		$wizard =& $this->GetWizard();
		$siteLogo = $wizard->GetVar("siteLogo", true);
		$siteCopyright = $wizard->GetVar("siteCopyright", true);
		
		$this->content .= '<div class="wizard-input-form">';
		$this->content .= '
		<div class="wizard-upload-img-block">
			<div class="wizard-catalog-title">'.GetMessage("wiz_company_name").'</div>
			'.$this->ShowInputField('text', 'siteName', array("id" => "siteName", "class" => "wizard-field")).'
		</div>';
		$this->content .= '
		<div class="wizard-upload-img-block">
			<div class="wizard-catalog-title">'.GetMessage("wiz_company_description").'</div>
			'.$this->ShowInputField('text', 'siteDescription', array("id" => "siteDescription", "class" => "wizard-field")).'
		</div>';
		
		$wizard->SetVar("siteCopyright", GetMessage("wisCopyright"));
		


	}

}




























class DataInstallStep extends CDataInstallWizardStep
{

}

class FinishStep extends CFinishWizardStep
{
    function InitStep()
    {
        $this->SetStepID("finish");
        $this->SetNextStep("finish");
        $this->SetTitle(GetMessage("FINISH_STEP_TITLE"));
        $this->SetNextCaption(GetMessage("wiz_go"));
    }

    function ShowStep()
    {
        global $USER;
        $wizard =& $this->GetWizard();

        $siteID = WizardServices::GetCurrentSiteID($wizard->GetVar("siteID"));

        if (strlen($siteID) > 0 and is_object($USER) and method_exists($USER, 'GetEmail')) {
            $obSite = new CSite();
            $t = $obSite->Update($siteID, array(
                'EMAIL' => $USER->GetEmail(),
                'NAME' => GetMessage('wiz_site_name'),
                'SERVER_NAME' => $this->getSiteUrl()
            ));
        };

        $rsSites = CSite::GetByID($siteID);
        $siteDir = SITE_DIR;
        if ($arSite = $rsSites->Fetch())
            $siteDir = $arSite["DIR"];

        $wizard->SetFormActionScript(str_replace("//", "/", $siteDir . "/?finish"));

        $this->CreateNewIndex();

        COption::SetOptionString("main", "wizard_solution", $wizard->solutionName, false, $siteID);

        $this->content .= GetMessage("FINISH_STEP_CONTENT");
        //$this->content .= "<br clear=\"all\"><a href=\"/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&site_id=".$siteID."&wizardName=bitrix:eshop.mobile&".bitrix_sessid_get()."\" class=\"button-next\"><span id=\"next-button-caption\">".GetMessage("wizard_store_mobile")."</span></a>";

        if ($wizard->GetVar("installDemoData") == "Y")
            $this->content .= GetMessage("FINISH_STEP_REINDEX");


    }

    function getSiteUrl()
    {
        $PARSE_HOST = parse_url(getenv('HTTP_HOST'));
        if (isset($PARSE_HOST['port']) and $PARSE_HOST['port'] == '80') {
            $HOST = $PARSE_HOST['host'];
        }
        elseif (isset($PARSE_HOST['port']) and $PARSE_HOST['port'] == '443') {
            $HOST = $PARSE_HOST['host'];
        }
        elseif(isset($PARSE_HOST['port'])) {
            $HOST = $PARSE_HOST['host'] . ":" . $PARSE_HOST['port'];
        } else {
            $HOST = $PARSE_HOST['host'];
        }
        return $HOST;
    }
}

?>