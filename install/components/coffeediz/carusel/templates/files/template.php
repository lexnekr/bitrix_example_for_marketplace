<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div>
	<div id="myFilesCarousel" class="carousel slide" style="
    background: url('<?=$arParams["BACKGROUND"]?>') no-repeat top center <?=$arParams["BACKGROUND_COLOR"]?>;">


    <div class="carousel-inner">
	<?$i=0;?>
	<?foreach($arParams["BANNERS"] as $arItem):?>
		<?if (empty($arItem)) break;?>
		<div class="item <?if($i==0):?>active<?endif?>">
			<?if (!empty($arParams["LINKS"][$i])):?>
				<a href="<?=$arParams["LINKS"][$i];?>"><img src="<?=$arItem?>" class="img-responsive center"></a>
			<?else:?>
				<img src="<?=$arItem?>" class="img-responsive center">
			<?endif?>
        </div>
	<?$i++;?>
	<?endforeach;?>

    </div>
<a class="left carousel-control" href="#myFilesCarousel" data-slide="prev"><?=GetMessage("LEFT_CONTROL");?></a>
<a class="right carousel-control" href="#myFilesCarousel" data-slide="next"><?=GetMessage("RIGHT_CONTROL");?></a>
</div></div>


