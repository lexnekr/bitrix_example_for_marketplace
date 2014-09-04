<a name="3"></a>


    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Связаться с нами:</h2>
                </div>
                <div class="col-lg-6">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"social",
	Array(
		"ROOT_MENU_TYPE" => "social",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	)
);?>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->