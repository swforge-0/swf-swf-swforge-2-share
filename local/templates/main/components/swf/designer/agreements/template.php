<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
  use Bitrix\Main\Localization\Loc;
  
  $arProps=swf_bitrix_util::ib_get_elem_props_value($arResult["arIb"][0]["arProps"]);
?>
<div class="container">
    <?php print_r($arProps["TEXT"]);?>
</div>
