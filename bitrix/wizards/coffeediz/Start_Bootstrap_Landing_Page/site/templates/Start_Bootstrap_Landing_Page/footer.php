

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
	"ROOT_MENU_TYPE" => "bottom",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",	
		"MENU_CACHE_GET_VARS" => "",
		"MAX_LEVEL" => "1",	
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "N",
		"DELAY" => "N",	
		"ALLOW_MULTI_SELECT" => "N",
	),
	false
);?>

<?$APPLICATION->IncludeComponent( 
"bitrix:main.include", 
"", 
Array( 
"AREA_FILE_SHOW" => "file", 
"PATH" => SITE_TEMPLATE_PATH."/include/copyright.php", 
"EDIT_TEMPLATE" => "" 
), 
false 
);?>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>

	<a href="http://<?=GetMessage('TEMPLATE_URL');?>"></a>

</body>

</html>