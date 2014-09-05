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

		$siteSlideImg1 = "/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/site/templates/Start_Bootstrap_Landing_Page/img/intro-bg.jpg";


		
		
			$siteBanner = $this->GetFileContentImgSrc(WIZARD_SITE_PATH."include/banner.php", "/bitrix/wizards/bitrix/corp_services/site/templates/corp_services/images/banner.png");
	
		
		
		$wizard->SetDefaultVars(
			Array(
				"siteName" => GetMessage("wiz_name"),
				"siteDescription" => GetMessage("wiz_slogan"), 
				"siteSeoTitle" => GetMessage("wiz_name"), 
				"siteSeoDescription" => GetMessage("wiz_slogan"),
				"siteSeoKeywords" => GetMessage("wiz_keywords"),  
				"siteSlideImg1" => $siteSlideImg1,  
				"siteCopyright" => GetMessage("wisCopyright"), 
				
				
				
								"siteBanner" => $siteBanner, 
			)
		);
	}

	function OnPostForm()
	{
		$wizard =& $this->GetWizard();
		$res = $this->SaveFile("siteLogo", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 80, "max_width" => 90, "make_preview" => "Y"));
		$res = $this->SaveFile("siteSlideImg1", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 1270, "max_width" => 1900, "make_preview" => "Y"));
		$res = $this->SaveFile("siteBanner", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 600, "max_width" => 600, "make_preview" => "Y"));

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
		
		
		
		$this->content .= '
		<div class="wizard-metadata-title">'.GetMessage("wiz_seo").'</div>
		<div class="wizard-upload-img-block">
			<label for="siteMetaTitle" class="wizard-input-title">'.GetMessage("wiz_seo_title").'</label>
			'.$this->ShowInputField('text', 'siteSeoTitle', array("id" => "siteSeoTitle", "class" => "wizard-field")).'
		</div><div class="wizard-upload-img-block">
			<label for="siteMetaDescription" class="wizard-input-title">'.GetMessage("wiz_seo_description").'</label>
			'.$this->ShowInputField('text', 'siteSeoDescription', array("id" => "siteSeoDescription", "class" => "wizard-field")).'
		</div><div class="wizard-upload-img-block">
			<label for="siteMetaKeywords" class="wizard-input-title">'.GetMessage("wiz_seo_keywords").'</label>
			'.$this->ShowInputField('text', 'siteSeoKeywords', array("id" => "siteSeoKeywords", "class" => "wizard-field")).'
		</div>';
		
		
		
		
		$siteSlideImg1 = $wizard->GetVar("siteSlideImg1", true);

		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("WIZ_SLIDE_IMG_1").'</div>';
		$this->content .= CFile::ShowImage($siteSlideImg1, 419, 280, "border=0 vspace=15");
		$this->content .= "<br />".$this->ShowFileField("siteSlideImg1", Array("show_file_info" => "N", "id" => "siteSlideImg1")).'</div>';

		
		
		
		
		

		
		
		
		
		
		
		
		
		
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