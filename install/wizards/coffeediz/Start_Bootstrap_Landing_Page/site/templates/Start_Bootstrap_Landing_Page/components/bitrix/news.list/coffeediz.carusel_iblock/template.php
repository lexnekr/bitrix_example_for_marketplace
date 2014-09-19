<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div>
	<div id="myIBlockCarousel" class="carousel slide" style="
    background: url('<?=$arParams["BACKGROUND"]?>') no-repeat top center <?=$arParams["BACKGROUND_COLOR"]?>;">


    <div class="carousel-inner">
	<?$i=0;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
<?if (empty($arItem)) break;?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>



		<div class="item <?if($i==0):?>active<?endif?>">

			<?if (!empty($arItem['PROPERTIES'][$arParams['PROPERTY_CODE'][0]]['VALUE'])):?>
		<a href="<?=$arItem['PROPERTIES'][$arParams['PROPERTY_CODE'][0]]['VALUE']?>">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="img-responsive">
		</a>
			<?else:?>
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="img-responsive">
			<?endif;?>
        </div>


<?$i++;?>
<?endforeach;?>




    </div>
<a class="left carousel-control" href="#myIBlockCarousel" data-slide="prev"><?=GetMessage("LEFT_CONTROL");?></a>
<a class="right carousel-control" href="#myIBlockCarousel" data-slide="next"><?=GetMessage("RIGHT_CONTROL");?></a>
</div></div>


