<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
  if (isset($arParams["IB"])) {
    if ($arParams["IB"]!="") {
      $arResult["arIb"]=swf_bitrix_util::ib_get_elem([
        "arFilter"=>[
          "IB"=>$arParams["IB"],
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