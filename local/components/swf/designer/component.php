<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
  if (isset($arParams["IBLOCK_ID"])) {
    if ($arParams["IBLOCK_ID"]!="") {
      $arResult["arIb"]=swf_bitrix_util::ib_get_elem([
        "arFilter"=>[
          "IBLOCK_ID"=>$arParams["IBLOCK_ID"],
          "ACTIVE"=>"Y",
        ],
        "arSort"=>[
          "SORT"=>"ASC",
        ],
        "arSelect"=>[
          "*",
        ],
      ]);
    }
  }

  //Дергаем шаблон
  $this->IncludeComponentTemplate();
?>