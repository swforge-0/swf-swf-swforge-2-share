<?php
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?php if($_POST["type"]=="send_form_1"):?>
  <?php
    CModule::IncludeModule("iblock");
    
    //Добавляем лид в инфоблок
    $el=new CIBlockElement;
    $PROP=[];
    $PROP[9]=$_POST["name"];
    $PROP[10]=$_POST["phone"];
    $now=new DateTime();
    $PROP[11]=$now->format("d.m.Y H:i:s");
    $PROP[12]=8;
    $arLoadProductArray = [
      "IBLOCK_SECTION_ID" => false,
      "IBLOCK_ID"      => $_SESSION["arSettings"]["IB"]["lids-lids-1"],
      "PROPERTY_VALUES"=> $PROP,
      "NAME"           => "Заявка c формы 1",
      "ACTIVE"         => "Y",
    ];
    
    $id=$el->Add($arLoadProductArray);
  ?>
<?php endif;?>