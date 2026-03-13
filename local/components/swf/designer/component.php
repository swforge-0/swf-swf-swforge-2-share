<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
    if (isset($arParams["IBLOCK_ID"])) {
        if ($arParams["IBLOCK_ID"]!="") {
            
            $arFilter=[
                "IBLOCK_ID"=>$arParams["IBLOCK_ID"],
                "ACTIVE"=>"Y",
            ];
            
            //Клеим фильтр по свойствам, если есть
            if (is_array($arParams["FILTER_PROPS"])) {
                foreach($arParams["FILTER_PROPS"] AS $key=>$val) {
                    $arFilter[$key]=$val;
                }
            }
            
            $arResult["arIb"]=swf_bitrix_util::ib_get_elem([
                "arFilter"=>$arFilter,
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