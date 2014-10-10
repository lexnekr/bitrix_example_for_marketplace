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
		$siteSlideImg2 = "/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/site/public/ru/include/slide2.png";
		$siteSlideImg3 = "/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/site/public/ru/include/slide3.png";
		$siteSlideImg4 = "/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/site/public/ru/include/slide4.png";
		$banner_carusel_lite_img_1 = "/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/images/ru/carousel/1.jpg";
		$banner_carusel_lite_img_2 = "/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/images/ru/carousel/2.png";

		
		$wizard->SetDefaultVars(
			Array(
				"siteName" => GetMessage("wiz_name"),
				"siteDescription" => GetMessage("wiz_slogan"), 
				"siteSeoTitle" => GetMessage("wiz_name"), 
				"siteSeoDescription" => GetMessage("wiz_slogan"),
				"siteSeoKeywords" => GetMessage("wiz_keywords"),  
				"siteSlideImg1" => $siteSlideImg1,  
				"siteCopyright" => GetMessage("wisCopyright"), 
				"wiz_social_link_1_type" =>"twitter",
				"wiz_social_link_2_type" =>"github",
				"wiz_social_link_3_type" =>"linkedin",
				"wiz_social_link_1"=>GetMessage("wiz_social_link_1"),
				"wiz_social_link_2"=>GetMessage("wiz_social_link_2"),
				"wiz_social_link_3"=>GetMessage("wiz_social_link_3"),
				"wiz_social_link_6_name"=>GetMessage("wiz_social_link_6_text"),
				"wiz_content_checkbox"=>"N",
				"wiz_slide_2_title_text"=>GetMessage("wiz_slide_2_title_text"),
				"wiz_slide_2_text_text"=>GetMessage("wiz_slide_2_text_text"),
				"wiz_slide_2_img"=>GetMessage("wiz_slide_2_img"),
				"siteSlideImg2" => $siteSlideImg2,  
				"wiz_slide_3_title_text"=>GetMessage("wiz_slide_3_title_text"),
				"wiz_slide_3_text_text"=>GetMessage("wiz_slide_3_text_text"),
				"wiz_slide_3_img"=>GetMessage("wiz_slide_3_img"),
				"siteSlideImg3" => $siteSlideImg3,  
				"wiz_slide_4_title_text"=>GetMessage("wiz_slide_4_title_text"),
				"wiz_slide_4_text_text"=>GetMessage("wiz_slide_4_text_text"),
				"wiz_slide_4_img"=>GetMessage("wiz_slide_4_img"),
				"siteSlideImg4" => $siteSlideImg4,  
				"wiz_banner_carusel_switcher" =>"1",
				"wiz_galery_carusel_switcher" =>"1",
				"banner_carusel_lite_img_1"=>$banner_carusel_lite_img_1,
				"banner_carusel_lite_img_2"=>$banner_carusel_lite_img_2,
				"banner_carusel_lite_img_1_link"=>GetMessage("banner_carusel_lite_img_1_link_text"),
				"banner_carusel_lite_img_2_link"=>GetMessage("banner_carusel_lite_img_2_link_text"),
			)
		);		
	}

	function OnPostForm()
	{
		$wizard =& $this->GetWizard();
		$res = $this->SaveFile("siteSlideImg1", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 1270, "max_width" => 1900, "make_preview" => "Y"));
		$res = $this->SaveFile("siteSlideImg2", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 900, "max_width" => 696, "make_preview" => "Y"));
		$res = $this->SaveFile("siteSlideImg3", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 900, "max_width" => 753, "make_preview" => "Y"));
		$res = $this->SaveFile("siteSlideImg4", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 900, "max_width" => 753, "make_preview" => "Y"));
		$res = $this->SaveFile("banner_carusel_lite_img_1", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 900, "max_width" => 1600, "make_preview" => "Y"));
		$res = $this->SaveFile("banner_carusel_lite_img_2", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 900, "max_width" => 1600, "make_preview" => "Y"));
		}
	
	function ShowStep()
	{
		$wizard =& $this->GetWizard();
		$siteLogo = $wizard->GetVar("siteLogo", true);
		$siteCopyright = $wizard->GetVar("siteCopyright", true);
		$this->content = $this->ShowInputField('text', 'wiz_social_link_6_name', array("id" => "wiz_social_link_6_name", "style" => "display: none;"));
		
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
		

		//START Add BG to the 1st slide
		$siteSlideImg1 = $wizard->GetVar("siteSlideImg1", true);

		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("WIZ_SLIDE_IMG_1").'</div>';
		$this->content .= CFile::ShowImage($siteSlideImg1, 419, 280, "border=0 vspace=15");
		$this->content .= "<br />".$this->ShowFileField("siteSlideImg1", Array("show_file_info" => "N", "id" => "siteSlideImg1")).'</div>';
		//END Add BG to the 1st slide
		
	
		//INTRO (create array) INPUT SOCIAL MENU POINTS
		$arConditions = array(
			"N" => GetMessage("wiz_social_link_0_text"),
			"twitter" => GetMessage("wiz_social_link_1_text"),
			"github" => GetMessage("wiz_social_link_2_text"),
			"linkedin" => GetMessage("wiz_social_link_3_text"),
			"facebook" => GetMessage("wiz_social_link_4_text"),
			"google-plus" => GetMessage("wiz_social_link_5_text"),
			"vk" => GetMessage("wiz_social_link_6_text"),
			
		);

		foreach($arConditions as $conditionID => $conditionName)
		{
			$arReserveConditions[$conditionID] = $conditionName;
		}
		//START INPUT SOCIAL MENU POINTS
		$this->content .= 
			'<div class="wizard-catalog-title">'.GetMessage("wiz_social").'</div>'
				
			.'<table class="wizard-input-table"><tbody>'
				//START INPUT 1 SOCIAL MENU POINT
				.'<tr>'
					.'<td class="wizard-input-table-left">'.$this->ShowSelectField("wiz_social_link_1_type", $arReserveConditions, Array("id" => "wiz_social_link_1_type")).'</td>'				
					.'<td class="wizard-input-table-left"><label id="wiz_social_link_1_mess">'.GetMessage("wiz_social_link").'</label></td>'
					.'<td class="wizard-input-table-right">'.$this->ShowInputField('text', 'wiz_social_link_1', array("id" => "wiz_social_link_1", "class" => "wizard-field")).'</td>'
				.'</tr>'
				//END INPUT 1 SOCIAL MENU POINT
				.'<tr>'
					.'<td class="wizard-input-table-left">'.$this->ShowSelectField("wiz_social_link_2_type", $arReserveConditions, Array("id" => "wiz_social_link_2_type")).'</td>'
					.'<td class="wizard-input-table-left"><label id="wiz_social_link_2_mess">'.GetMessage("wiz_social_link").'</label></td>'
					.'<td class="wizard-input-table-right">'.$this->ShowInputField('text', 'wiz_social_link_2', array("id" => "wiz_social_link_2", "class" => "wizard-field")).'</td>'
				.'</tr>'
				.'<tr>'
					.'<td class="wizard-input-table-left">'.$this->ShowSelectField("wiz_social_link_3_type", $arReserveConditions, Array("id" => "wiz_social_link_3_type")).'</td>'
					.'<td class="wizard-input-table-left"><label id="wiz_social_link_3_mess">'.GetMessage("wiz_social_link").'</label></td>'
					.'<td class="wizard-input-table-right">'.$this->ShowInputField('text', 'wiz_social_link_3', array("id" => "wiz_social_link_3", "class" => "wizard-field")).'</td>'
				.'</tr>'
			.'</tbody></table>'
			
			//START FIDE SOCIAL MENU POINTS
			.'<script>
			document.getElementById("wiz_social_link_1_type").onchange = function(){
				if (this.value == "N") {
				document.getElementById("wiz_social_link_1").style.display="none";
				document.getElementById("wiz_social_link_1_mess").style.display="none";
				}
				else {
				document.getElementById("wiz_social_link_1").style.display="block";
				document.getElementById("wiz_social_link_1_mess").style.display="block";
				}
			}
			document.getElementById("wiz_social_link_2_type").onchange = function(){
				if (this.value == "N") {
				document.getElementById("wiz_social_link_2").style.display="none";
				document.getElementById("wiz_social_link_2_mess").style.display="none";
				}
				else {
				document.getElementById("wiz_social_link_2").style.display="block";
				document.getElementById("wiz_social_link_2_mess").style.display="block";
				}
			}
			document.getElementById("wiz_social_link_3_type").onchange = function(){
				if (this.value == "N") {
				document.getElementById("wiz_social_link_3").style.display="none";
				document.getElementById("wiz_social_link_3_mess").style.display="none";
				}
				else {
				document.getElementById("wiz_social_link_3").style.display="block";
				document.getElementById("wiz_social_link_3_mess").style.display="block";
				}
			}
			</script>'
			//END FIDE SOCIAL MENU POINTS
		; 
		//END INPUT SOCIAL MENU POINTS

		
		//START CHECKBOX FOR HIDING
		$this->content .= '<br/>
			<div class="wizard-input-form-block">
				<div>
					<div class="wizard-catalog-form-item">
						'.$this->ShowCheckboxField("wiz_content_checkbox", "Y", array("id" => "wiz_content_checkbox", "onclick"=>"showMe(this)"))
						.'<label for="use-store-control">'.GetMessage("wiz_content_checkbox").'</label>
					</div>';
		$this->content .= '<script type="text/javascript">

		function showMe (box) {
		var vis = (box.checked) ? "block" : "none";
		document.getElementById("wiz_content_edit_block").style.display = vis;
		}

		</script>';
		//END CHECKBOX FOR HIDING
		
		// START HIDING BLOCK
		$this->content .= '<div id="wiz_content_edit_block" style="display: none;">';
		
				$siteSlideImg2 = $wizard->GetVar("siteSlideImg2", true);
				$siteSlideImg3 = $wizard->GetVar("siteSlideImg3", true);
				$siteSlideImg4 = $wizard->GetVar("siteSlideImg4", true);
		
			//START INPUT SLIDE 2
			$this->content .= '
			<div class="wizard-input-form-block">
				<div class="wizard-metadata-title">'.GetMessage("wiz_slide_2").'</div>
					<label for="wiz_slide_2_title" class="wizard-input-title">'.GetMessage("wiz_slide_2_title").'</label><br/>
					'.$this->ShowInputField('textarea', 'wiz_slide_2_title_text', array("rows"=>"2", "id" => "wiz_slide_2_title_text", "class" => "wizard-field")).'
					<br/>
					<label for="wiz_slide_2_text" class="wizard-input-title">'.GetMessage("wiz_slide_2_text").'</label><br/>
					'.$this->ShowInputField('textarea', 'wiz_slide_2_text_text', array("rows"=>"4", "id" => "wiz_slide_2_text_text", "class" => "wizard-field")).'
					<br/>
					<label for="wiz_slide_2_img" class="wizard-input-title">'.GetMessage("wiz_slide_2_img").'</label>
				'.CFile::ShowImage($siteSlideImg2, 419, 324, "border=0 vspace=15").'<br/>
				'.$this->ShowFileField("siteSlideImg2", Array("show_file_info" => "N", "id" => "siteSlideImg2")).'</div>
			';	
			//END INPUT SLIDE 2
			
			
			//INTRO (create array) GALERY-CARUSEL
			$arConditionsGaleryCarusel = array(
				"N" => GetMessage("wiz_galery_carusel_0_text"),
				"1" => GetMessage("wiz_galery_carusel_1_text"),
				"2" => GetMessage("wiz_galery_carusel_2_text"),
				
			);

			foreach($arConditionsGaleryCarusel as $conditionID => $conditionName)
			{
				$arReserveConditionsGaleryCarusel[$conditionID] = $conditionName;
			}
			//START SWITCH GALERY-CARUSEL
			$this->content .= '
			<div class="wizard-input-form-block">
				<div class="wizard-metadata-title">'.GetMessage("wiz_galery_carusel").'</div>
				
					<label for="wiz_slide_3_title" class="wizard-input-title">'.GetMessage("wiz_galery_carusel_title").'</label><br/>
					'.$this->ShowSelectField("wiz_galery_carusel_switcher", $arReserveConditionsGaleryCarusel, Array("id" => "wiz_galery_carusel_switcher")).'
					<br/>'.CFile::ShowImage("/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/images/ru/galery-carusel.jpg", 600, 264, "border=0 vspace=15").'
			</div>';	
			//END SWITCH GALERY-CARUSEL
			
			
			//START INPUT SLIDE 3
			$this->content .= '
			<div class="wizard-input-form-block">
				<div class="wizard-metadata-title">'.GetMessage("wiz_slide_3").'</div>
				
					<label for="wiz_slide_3_title" class="wizard-input-title">'.GetMessage("wiz_slide_3_title").'</label><br/>
					'.$this->ShowInputField('textarea', 'wiz_slide_3_title_text', array("rows"=>"2", "id" => "wiz_slide_3_title_text", "class" => "wizard-field")).'
					<br/>
					<label for="wiz_slide_3_text" class="wizard-input-title">'.GetMessage("wiz_slide_3_text").'</label><br/>
					'.$this->ShowInputField('textarea', 'wiz_slide_3_text_text', array("rows"=>"4", "id" => "wiz_slide_3_text_text", "class" => "wizard-field")).'
					<br/>
					<label for="wiz_slide_3_img" class="wizard-input-title">'.GetMessage("wiz_slide_3_img").'</label>
				'.CFile::ShowImage($siteSlideImg3, 419, 351, "border=0 vspace=15").'<br/>
				'.$this->ShowFileField("siteSlideImg3", Array("show_file_info" => "N", "id" => "siteSlideImg3")).'
			</div>';	
			//END INPUT SLIDE 3

			
			//INTRO (create array) BANNER CARUSEL
			$arConditionsCarusel = array(
				"N" => GetMessage("wiz_banner_carusel_0_text"),
				"1" => GetMessage("wiz_banner_carusel_1_text"),
				"2" => GetMessage("wiz_banner_carusel_2_text"),
				
			);
			$banner_carusel_lite_img_1 = $wizard->GetVar("banner_carusel_lite_img_1", true);
			$banner_carusel_lite_img_2 = $wizard->GetVar("banner_carusel_lite_img_2", true);

			foreach($arConditionsCarusel as $conditionID => $conditionName)
			{
				$arReserveConditionsCarusel[$conditionID] = $conditionName;
			}
			//START SWITCH BANNER CARUSEL
			$this->content .= '
			<div class="wizard-input-form-block">
				<div class="wizard-metadata-title">'.GetMessage("wiz_banner_carusel").'</div>
				
					<label for="wiz_slide_3_title" class="wizard-input-title">'.GetMessage("wiz_banner_carusel_title").'</label><br/>
					'.$this->ShowSelectField("wiz_banner_carusel_switcher", $arReserveConditionsCarusel, Array("id" => "wiz_banner_carusel_switcher")).'
					<br/>'.CFile::ShowImage("/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/images/ru/carusel.jpg", 600, 264, "border=0 vspace=15").'
			</div>	
			
			<script>
			document.getElementById("wiz_banner_carusel_switcher").onchange = function(){
				if (this.value != "2") {
				document.getElementById("wiz_banner_carusel_lite_box").style.display="none";
				}
				else {
				document.getElementById("wiz_banner_carusel_lite_box").style.display="block";
				}
			}
			</script>
			<div class="wizard-input-form-block" id="wiz_banner_carusel_lite_box" style="display: none; border: 1px solid black;">
				<label for="wiz_banner_carusel_lite_img_title" class="wizard-input-title"><b>'.GetMessage("wiz_banner_carusel_lite_img_title").'</b></label><br/>
				
				<table class="wizard-input-table"><tbody>
					<tr>
						<td class="wizard-input-table-left">'.CFile::ShowImage($banner_carusel_lite_img_1, 300, 125, "border=0 vspace=15").'</td>
						<td class="wizard-input-table-right">
							'.GetMessage("wiz_banner_carusel_lite_img_1_name").'
							<br/>
							'.$this->ShowFileField("banner_carusel_lite_img_1", Array("show_file_info" => "N", "id" => "banner_carusel_lite_img_1")).'
							<br/>
							'.GetMessage("wiz_banner_carusel_lite_img_1_link_name").'
							<br/>
							'.$this->ShowInputField('text', 'banner_carusel_lite_img_1_link', array("id" => "banner_carusel_lite_img_1_link", "class" => "wizard-field")).'
						</td>
					</tr>
					<tr>
						<td class="wizard-input-table-left">'.CFile::ShowImage($banner_carusel_lite_img_2, 300, 125, "border=0 vspace=15").'</td>
						<td class="wizard-input-table-right">
							'.GetMessage("wiz_banner_carusel_lite_img_1_name").'
							<br/>
							'.$this->ShowFileField("banner_carusel_lite_img_2", Array("show_file_info" => "N", "id" => "banner_carusel_lite_img_2")).'
							<br/>
							'.GetMessage("wiz_banner_carusel_lite_img_1_link_name").'
							<br/>
							'.$this->ShowInputField('text', 'banner_carusel_lite_img_2_link', array("id" => "banner_carusel_lite_img_2_link", "class" => "wizard-field")).'
						</td>
					</tr>
				</tbody></table>
				
			</div>
			';
			//END SWITCH BANNER CARUSEL
			
			
			//START INPUT SLIDE 4
			$this->content .= '
			<div class="wizard-input-form-block">
				<div class="wizard-metadata-title">'.GetMessage("wiz_slide_4").'</div>
				
					<label for="wiz_slide_4_title" class="wizard-input-title">'.GetMessage("wiz_slide_4_title").'</label><br/>
					'.$this->ShowInputField('textarea', 'wiz_slide_4_title_text', array("rows"=>"2", "id" => "wiz_slide_4_title_text", "class" => "wizard-field")).'
					<br/>
					<label for="wiz_slide_4_text" class="wizard-input-title">'.GetMessage("wiz_slide_4_text").'</label><br/>
					'.$this->ShowInputField('textarea', 'wiz_slide_4_text_text', array("rows"=>"4", "id" => "wiz_slide_4_text_text", "class" => "wizard-field")).'
					<br/>
					<label for="wiz_slide_4_img" class="wizard-input-title">'.GetMessage("wiz_slide_4_img").'</label>
				'.CFile::ShowImage($siteSlideImg4, 419, 277, "border=0 vspace=15").'<br/>
				'.$this->ShowFileField("siteSlideImg4", Array("show_file_info" => "N", "id" => "siteSlideImg4")).'
			</div>';	
			//END INPUT SLIDE 4
		
			// START SEO BLOCK
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
			// END SEO BLOCK
			
		$this->content .= '</div>';
		// END HIDING BLOCK
		
		
		
		
		
	
		
		
		
		
		
		
		
		
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


        //$this->content .= "<br clear=\"all\"><a href=\"/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&site_id=".$siteID."&wizardName=bitrix:eshop.mobile&".bitrix_sessid_get()."\" class=\"button-next\"><span id=\"next-button-caption\">".GetMessage("wizard_store_mobile")."</span></a>";
		$this->content .= GetMessage("FINISH_STEP_COMPOSITE");
		$this->content .= '<br/><center><a href="/bitrix/admin/composite.php?lang=ru">'.CFile::ShowImage("/bitrix/wizards/coffeediz/Start_Bootstrap_Landing_Page/images/ru/composite.gif", 600, 250, "border=0 vspace=15").'</a></center>';
		$this->content .= '<center><b><a href="/bitrix/admin/composite.php?lang=ru">'.GetMessage("FINISH_STEP_COMPOSITE_LINK").'</a></b></center>';
		
		$this->content .= '<br/><br/><b>'.GetMessage("FINISH_STEP_CONTENT").'</b>';
		
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