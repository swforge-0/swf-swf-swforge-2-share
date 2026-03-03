<?php
  class swf_bitrix_util {
    //Получение элементов инфоблока
    public static function ib_get_elem($arParams) {
      CModule::IncludeModule("iblock");
      
      $arResult=[];
      
      //Делаем выборку
      $res=CIBlockElement::GetList($arParams["arSort"], $arParams["arFilter"], false, false, $arParams["arSelect"]);
      while($ob=$res->GetNextElement()){
        $arFields=[];
        $arProps=[];
        
        $arFields=$ob->GetFields();
        if ($arParams["NO_PROP"]!="Y") {
          $arProps=$ob->GetProperties();
        }
        
        if ($arParams["INDEX_CODE"]=="Y") {
          $arResult[$arFields["CODE"]]=[
            "arFields"=>$arFields,
            "arProps"=>$arProps,
          ];
        } else {
          if ($arParams["INDEX_ID"]=="Y") {
            $arResult[$arFields["ID"]]=[
              "arFields"=>$arFields,
              "arProps"=>$arProps,
            ];
          } else {
            $arResult[]=[
              "arFields"=>$arFields,
              "arProps"=>$arProps,
            ];
          }
        }
      }
      
      return $arResult;
    }
  }
?>