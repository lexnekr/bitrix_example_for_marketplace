<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
//$this->createFrame()->begin("«агрузка"); 
?>
<div>
	<div id="myFilesCarousel" class="carousel slide" style="
    background: url('<?=$arParams["BACKGROUND"]?>') no-repeat top center <?=$arParams["BACKGROUND_COLOR"]?>;">


    <div class="carousel-inner">
	<?$i=0;?>
	<?foreach($arParams["BANNERS"] as $arItem):?>
		<?if (empty($arItem)) break;?>
		<div class="item <?if($i==0):?>active<?endif?>">
            <img src="<?=$arItem?>" class="img-responsive center">
        </div>
	<?$i++;?>
	<?endforeach;?>

    </div>
<a class="left carousel-control" href="#myFilesCarousel" data-slide="prev">Л</a>
<a class="right carousel-control" href="#myFilesCarousel" data-slide="next">Ы</a>
</div></div>


