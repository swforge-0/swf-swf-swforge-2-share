<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if(count($arResult)>0):?>
  <?php foreach($arResult AS $key=>$val):?>
    <a href="<?php echo $val["LINK"];?>" class="flex-spec-a-center he_100p <?php echo $val["PARAMS"]["CLASS_ACTIVE"];?>"><?php echo $val["TEXT"];?></a>
  <?php endforeach;?>
<?php endif;?>