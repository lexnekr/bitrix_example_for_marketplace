<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<?if (!empty($arResult)):?>

<ul class="list-inline intro-social-buttons">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>




	<li>		<a href="<?=$arItem["LINK"]?>" class="btn btn-default btn-lg"><i class="fa fa-<?=$arItem["PARAMS"]['SOCIAL'];?> fa-fw"></i> <span class="network-name"><?=$arItem["TEXT"]?></span></a></li>


<?endforeach?>

</ul>
<?endif?>