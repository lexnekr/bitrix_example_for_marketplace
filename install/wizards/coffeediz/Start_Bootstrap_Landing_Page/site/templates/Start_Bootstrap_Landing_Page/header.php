<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>-<?=strtoupper(LANGUAGE_ID);?>">

<head>

<?$APPLICATION->ShowHead();

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css'); 
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/landing-page.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/font-awesome/css/font-awesome.min.css');
$APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic');
?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?$APPLICATION->ShowTitle()?></title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>
<?$APPLICATION->ShowPanel();?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"><?=GetMessage('NAV_TITLE_MOBILE');?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<?$APPLICATION->IncludeComponent( 
"bitrix:main.include", 
"", 
Array( 
"AREA_FILE_SHOW" => "file", 
"PATH" => SITE_TEMPLATE_PATH."/include/logo.php", 
"EDIT_TEMPLATE" => "" 
), 
false 
);?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",	
		"MENU_CACHE_GET_VARS" => array(	
			0 => "",
		),
		"MAX_LEVEL" => "1",	
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "N",
		"DELAY" => "N",	
		"ALLOW_MULTI_SELECT" => "N",
	),
	false
);?>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>





