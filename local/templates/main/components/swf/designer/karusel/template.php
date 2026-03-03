<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
  use Bitrix\Main\Localization\Loc;
?>
<div id="photostack-1" class="photostack photostack-start width_60proc">
  <div>
    <?php foreach($arResult["arIb"] AS $key=>$val):?>
      <?php
        $arProps=swf_bitrix_util::ib_get_elem_props_value($val["arProps"]);
      ?>
      <figure>
        <figcaption>
					<h2 class="photostack-title"><?php echo $val["arFields"]["NAME"];?></h2>
        </figcaption>
        
        <a href="<?php echo $arProps["GAL"][0];?>" rel="lightgallery">
          <img class="photostack-img" src="<?php echo $arProps["GAL"][0];?>" style="" />
        </a>
        
        <figcaption>
          <p>
            <a href="<?php echo $arProps["LINK"];?>" target="_blank" class="photostack-link" title="<?php echo Loc::getMessage("CAP_LINK_FOR_NEW_WIN");?>"><?php echo Loc::getMessage("CAP_LINK_FOR_GOTO_SITE");?> <?php echo $arProps["LINK"];?></a>
          </p>
        </figcaption>
      </figure>
    <?php endforeach;?>
    <?php 
      //Фигуры для массивности галереи
      for($i=1;$i<6;$i++):
    ?>
      <figure data-dummy>
        <img class="photostack-img" src="<?php echo SITE_TEMPLATE_PATH;?>/img/portfolio/other/<?php echo $i;?>.jpg" />
      </figure>
    <?php endfor;?>
  </div>
</div>