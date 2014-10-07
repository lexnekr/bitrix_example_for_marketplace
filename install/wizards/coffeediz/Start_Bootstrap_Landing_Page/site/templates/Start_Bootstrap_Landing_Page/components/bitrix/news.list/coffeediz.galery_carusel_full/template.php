<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>






<div class="content-section-b wrapper">
	<div class="container jcarousel-wrapper">
		<div class="row jcarousel" style="margin: 0 auto;">
			<ul>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<li class="col-sm-6 col-md-4" style="list-style-type: none;" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="thumbnail">
      <img alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
      <div class="caption">
        <h3><?echo $arItem["NAME"]?></h3>
		<p style="font-weight: normal;">
			<?echo $arItem["PREVIEW_TEXT"];?>
		</p>

		<p style="text-align:  center;">
<?if (!empty($arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_1_TEXT']]['VALUE'])):?><a href="<?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_1_LINK']]['VALUE']?>" class="btn <?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_1_COLOR']]['VALUE_XML_ID']?>" role="button"><?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_1_TEXT']]['VALUE']?></a> <?endif?>
<?if (!empty($arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_2_TEXT']]['VALUE'])):?><a href="<?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_2_LINK']]['VALUE']?>" class="btn <?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_2_COLOR']]['VALUE_XML_ID']?>" role="button"><?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_2_TEXT']]['VALUE']?></a> <?endif?>
<?if (!empty($arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_3_TEXT']]['VALUE'])):?><a href="<?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_3_LINK']]['VALUE']?>" class="btn <?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_3_COLOR']]['VALUE_XML_ID']?>" role="button"><?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE_BUTTON_3_TEXT']]['VALUE']?></a> <?endif?>
		</p>

      </div>
    </div>
</li>
<?endforeach;?>
			</ul>
		</div>
		<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
		<a href="#" class="jcarousel-control-next">&rsaquo;</a>
		<?if ($arParams['DISPLAY_PAGINATION']=="Y"):?><p class="jcarousel-pagination"></p><?endif?>
	</div>
</div>














