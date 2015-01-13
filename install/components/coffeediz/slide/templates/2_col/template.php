<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>








<div class="<?=$arParams['CONTEINER_CLASS'];?>" style="
	color: <?=$arParams['TEXT_COLOR'];?>;
	background: url(<?=$arParams['BACKGRAUND_IMG'];?>) no-repeat center center;
">

	<a <?if (!empty($arParams["SLIDE_LINK_ID"])):?>id="<?=$arParams['SLIDE_LINK_ID'];?>"<?endif?>></a>

	<div<?if($arParams['CONTEINER_OFF']!='Y'):?> class="container"<?endif?>>

		<div<?if($arParams['ROW_OFF']!='Y'):?> class="row"<?endif?>>
			<div class="
				col-lg-<?=$arParams['BLOCK_LG_1'];?>
				<?if (!empty($arParams["BLOCK_MD_1"])):?> col-mg-<?=$arParams['BLOCK_MD_1'];?><?endif?>
				<?if (!empty($arParams["BLOCK_SM_1"])):?> col-sm-<?=$arParams['BLOCK_SM_1'];?><?endif?>
				<?if (!empty($arParams["BLOCK_XS_1"])):?> col-xs-<?=$arParams['BLOCK_XS_1'];?><?endif?>
				<?if (!empty($arParams["BLOCK_OFFSET_1"])):?> col-lg-offset-<?=$arParams['BLOCK_OFFSET_1'];?><?endif?>
				<?if (!empty($arParams["BLOCK_OFFSET_1_MD"])):?> col-mg-offset-<?=$arParams['BLOCK_OFFSET_1_MD'];?><?endif?>
				<?if (!empty($arParams["BLOCK_OFFSET_1_SM"])):?> col-sm-offset-<?=$arParams['BLOCK_OFFSET_1_SM'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PUSH_1_LG"])):?> col-lg-push-<?=$arParams['BLOCK_PUSH_1_LG'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PUSH_1_MD"])):?> col-mg-push-<?=$arParams['BLOCK_PUSH_1_MD'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PUSH_1_SM"])):?> col-sm-push-<?=$arParams['BLOCK_PUSH_1_SM'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PULL_1_LG"])):?> col-lg-pull-<?=$arParams['BLOCK_PULL_1_LG'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PULL_1_MD"])):?> col-mg-pull-<?=$arParams['BLOCK_PULL_1_MD'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PULL_1_SM"])):?> col-sm-pull-<?=$arParams['BLOCK_PULL_1_SM'];?><?endif?>
			"
			style="text-align: <?=$arParams['TEXTALIGN_1'];?>;"
			>

				
				<?if ($arParams["BLOCK_1_TYPE"]=="H" or $arParams["BLOCK_1_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_1_TEXT"])):?>
						<<?=$arParams['STRING_1_TYPE'];?> 
							style="
							<?if ($arParams['STRING_1_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_1_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_1_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_1_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_1_SIZE'];?>em;">
								<?=$arParams['~STRING_1_TEXT'];?>
						</<?=$arParams['STRING_1_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_1_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_1_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_1_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_1_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_1_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_1_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_1_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_1_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_1_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_1_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_1_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_1_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_1_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_1_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_1_IMG_URL'];?>" alt="<?=$arParams['BLOCK_1_IMG_ALT'];?>" title="<?=$arParams['BLOCK_1_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_1_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_1_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_2_TYPE"]=="H" or $arParams["BLOCK_2_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_2_TEXT"])):?>
						<<?=$arParams['STRING_2_TYPE'];?> 
							style="
							<?if ($arParams['STRING_2_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_2_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_2_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_2_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_2_SIZE'];?>em;">
								<?=$arParams['~STRING_2_TEXT'];?>
						</<?=$arParams['STRING_2_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_2_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_2_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_2_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_2_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_2_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_2_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_2_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_2_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_2_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_2_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_2_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_2_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_2_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_2_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_2_IMG_URL'];?>" alt="<?=$arParams['BLOCK_2_IMG_ALT'];?>" title="<?=$arParams['BLOCK_2_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_2_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_2_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_3_TYPE"]=="H" or $arParams["BLOCK_3_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_3_TEXT"])):?>
						<<?=$arParams['STRING_3_TYPE'];?> style="
							<?if ($arParams['STRING_3_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_3_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_3_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_3_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_3_SIZE'];?>em;"
							>
							<?=$arParams['~STRING_3_TEXT'];?>
						</<?=$arParams['STRING_3_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_3_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_3_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_3_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_3_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_3_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_3_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_3_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_3_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_3_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_3_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_3_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_3_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_3_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_3_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_3_IMG_URL'];?>" alt="<?=$arParams['BLOCK_3_IMG_ALT'];?>" title="<?=$arParams['BLOCK_3_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_3_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_3_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_4_TYPE"]=="H" or $arParams["BLOCK_4_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_4_TEXT"])):?>
						<<?=$arParams['STRING_4_TYPE'];?> style="
							<?if ($arParams['STRING_4_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_4_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_4_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_4_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_4_SIZE'];?>em;"
						>
							<?=$arParams['~STRING_4_TEXT'];?>
						</<?=$arParams['STRING_4_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_4_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_4_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_4_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_4_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_4_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_4_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_4_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_4_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_4_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_4_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_4_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_4_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_4_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_4_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_4_IMG_URL'];?>" alt="<?=$arParams['BLOCK_4_IMG_ALT'];?>" title="<?=$arParams['BLOCK_4_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_4_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_4_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_5_TYPE"]=="H" or $arParams["BLOCK_5_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_5_TEXT"])):?>
						<<?=$arParams['STRING_5_TYPE'];?> style="
							<?if ($arParams['STRING_5_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_5_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_5_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_5_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_5_SIZE'];?>em;"
						>
							<?=$arParams['~STRING_5_TEXT'];?>
						</<?=$arParams['STRING_5_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_5_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_5_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_5_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_5_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_5_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_5_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_5_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_5_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_5_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_5_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_5_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_5_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_5_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_5_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_5_IMG_URL'];?>" alt="<?=$arParams['BLOCK_5_IMG_ALT'];?>" title="<?=$arParams['BLOCK_5_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_5_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_5_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				

			</div>

			<div class="
				col-lg-<?=$arParams['BLOCK_LG_2'];?>
				<?if (!empty($arParams["BLOCK_MD_2"])):?> col-mg-<?=$arParams['BLOCK_MD_2'];?><?endif?>
				<?if (!empty($arParams["BLOCK_SM_2"])):?> col-sm-<?=$arParams['BLOCK_SM_2'];?><?endif?>
				<?if (!empty($arParams["BLOCK_XS_2"])):?> col-xs-<?=$arParams['BLOCK_XS_2'];?><?endif?>
				<?if (!empty($arParams["BLOCK_OFFSET_2"])):?> col-lg-offset-<?=$arParams['BLOCK_OFFSET_2'];?><?endif?>
				<?if (!empty($arParams["BLOCK_OFFSET_2_MD"])):?> col-mg-offset-<?=$arParams['BLOCK_OFFSET_2_MD'];?><?endif?>
				<?if (!empty($arParams["BLOCK_OFFSET_2_SM"])):?> col-sm-offset-<?=$arParams['BLOCK_OFFSET_2_SM'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PUSH_2_LG"])):?> col-lg-push-<?=$arParams['BLOCK_PUSH_2_LG'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PUSH_2_MD"])):?> col-mg-push-<?=$arParams['BLOCK_PUSH_2_MD'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PUSH_2_SM"])):?> col-sm-push-<?=$arParams['BLOCK_PUSH_2_SM'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PULL_2_LG"])):?> col-lg-pull-<?=$arParams['BLOCK_PULL_2_LG'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PULL_2_MD"])):?> col-mg-pull-<?=$arParams['BLOCK_PULL_2_MD'];?><?endif?>
				<?if (!empty($arParams["BLOCK_PULL_2_SM"])):?> col-sm-pull-<?=$arParams['BLOCK_PULL_2_SM'];?><?endif?>
			"
			style="text-align: <?=$arParams['TEXTALIGN_2'];?>;"
			>

				
				<?if ($arParams["BLOCK_2_1_TYPE"]=="H" or $arParams["BLOCK_2_1_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_2_1_TEXT"])):?>
						<<?=$arParams['STRING_2_1_TYPE'];?> 
							style="
							<?if ($arParams['STRING_2_1_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_2_1_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_2_1_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_2_1_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_2_1_SIZE'];?>em;">
								<?=$arParams['~STRING_2_1_TEXT'];?>
						</<?=$arParams['STRING_2_1_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_2_1_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_2_1_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_2_1_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_2_1_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_2_1_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_2_1_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_2_1_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_2_1_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_2_1_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_2_1_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_2_1_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_2_1_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_2_1_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_2_1_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_2_1_IMG_URL'];?>" alt="<?=$arParams['BLOCK_2_1_IMG_ALT'];?>" title="<?=$arParams['BLOCK_2_1_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_2_1_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_2_1_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_2_2_TYPE"]=="H" or $arParams["BLOCK_2_2_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_2_2_TEXT"])):?>
						<<?=$arParams['STRING_2_2_TYPE'];?> 
							style="
							<?if ($arParams['STRING_2_2_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_2_2_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_2_2_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_2_2_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_2_2_SIZE'];?>em;">
								<?=$arParams['~STRING_2_2_TEXT'];?>
						</<?=$arParams['STRING_2_2_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_2_2_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_2_2_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_2_2_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_2_2_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_2_2_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_2_2_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_2_2_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_2_2_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_2_2_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_2_2_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_2_2_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_2_2_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_2_2_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_2_2_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_2_2_IMG_URL'];?>" alt="<?=$arParams['BLOCK_2_2_IMG_ALT'];?>" title="<?=$arParams['BLOCK_2_2_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_2_2_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_2_2_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_2_3_TYPE"]=="H" or $arParams["BLOCK_2_3_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_2_3_TEXT"])):?>
						<<?=$arParams['STRING_2_3_TYPE'];?> style="
							<?if ($arParams['STRING_2_3_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_2_3_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_2_3_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_2_3_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_2_3_SIZE'];?>em;"
						>
							<?=$arParams['~STRING_2_3_TEXT'];?>
						</<?=$arParams['STRING_2_3_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_2_3_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_2_3_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_2_3_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_2_3_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_2_3_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_2_3_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_2_3_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_2_3_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_2_3_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_2_3_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_2_3_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_2_3_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_2_3_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_2_3_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_2_3_IMG_URL'];?>" alt="<?=$arParams['BLOCK_2_3_IMG_ALT'];?>" title="<?=$arParams['BLOCK_2_3_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_2_3_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_2_3_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_2_4_TYPE"]=="H" or $arParams["BLOCK_2_4_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_2_4_TEXT"])):?>
						<<?=$arParams['STRING_2_4_TYPE'];?> style="
							<?if ($arParams['STRING_2_4_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_2_4_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_2_4_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_2_4_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_2_4_SIZE'];?>em;"
						>
							<?=$arParams['~STRING_2_4_TEXT'];?>
						</<?=$arParams['STRING_2_4_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_2_4_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_2_4_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_2_4_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_2_4_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_2_4_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_2_4_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_2_4_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_2_4_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_2_4_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_2_4_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_2_4_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_2_4_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_2_4_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_2_4_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_2_4_IMG_URL'];?>" alt="<?=$arParams['BLOCK_2_4_IMG_ALT'];?>" title="<?=$arParams['BLOCK_2_4_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_2_4_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_2_4_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_2_5_TYPE"]=="H" or $arParams["BLOCK_2_5_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_2_5_TEXT"])):?>
						<<?=$arParams['STRING_2_5_TYPE'];?> style="
							<?if ($arParams['STRING_2_5_FONT']=='None'):?>font-weight: normal; font-style: normal; 
							<?elseif ($arParams['STRING_2_5_FONT']=='Bold'):?>font-weight: bold; font-style: normal; 
							<?elseif ($arParams['STRING_2_5_FONT']=='Italic'):?>font-weight: normal; font-style: italic; 
							<?elseif ($arParams['STRING_2_5_FONT']=='BoldItalic'):?>font-weight: bold; font-style: italic;
							<?endif?>
							font-size: <?=$arParams['STRING_2_5_SIZE'];?>em;"
						>
							<?=$arParams['~STRING_2_5_TEXT'];?>
						</<?=$arParams['STRING_2_5_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_2_5_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_2_5_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_2_5_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_2_5_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_2_5_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_2_5_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_2_5_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_2_5_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_2_5_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_2_5_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_2_5_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_2_5_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_2_5_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_2_5_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_2_5_IMG_URL'];?>" alt="<?=$arParams['BLOCK_2_5_IMG_ALT'];?>" title="<?=$arParams['BLOCK_2_5_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_2_5_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_2_5_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				

			</div>

		</div>

	</div>
	<!-- /.container -->

</div>