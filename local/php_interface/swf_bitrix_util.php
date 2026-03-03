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
    //Получение значений свойств инфоблока в зависимости от их типа
    public static function ib_get_elem_props_value($arProps) {
      $arResult=[];
      foreach ($arProps AS $key=>$val) {
        $value="";
        //Текст или html
        if ($val["PROPERTY_TYPE"]=="S") {
          if (!is_array($val["VALUE"])) {
            $value=htmlspecialcharsBack($val["VALUE"]);
          } else {
            if (isset($val["VALUE"]["TEXT"])) {
              $value=htmlspecialcharsBack($val["VALUE"]["TEXT"]);
            } else {
              $value=[];
              foreach($val["VALUE"] AS $key_1=>$val_1) {
                if (isset($val_1["TEXT"])) {
                  $value[]=htmlspecialcharsBack($val_1["TEXT"]);
                } else {
                  $value[]=htmlspecialcharsBack($val_1);
                }
              }
            }
          }
        }
        //Файл
        if ($val["PROPERTY_TYPE"]=="F") {
          if (!is_array($val["VALUE"])) {
            $value=CFile::GetPath($val["VALUE"]);
          } else {
            $value=[];
            foreach($val["VALUE"] AS $key_1=>$val_1) {
              $value[]=CFile::GetPath($val_1);
            }
          }
        }
        //Привязка к элементам
        if ($val["PROPERTY_TYPE"]=="E") {
          if (!is_array($val["VALUE"])) {
            $value=$val["VALUE"];
          } else {
            $value=[];
            foreach($val["VALUE"] AS $key_1=>$val_1) {
              $value[]=$val_1;
            }
          }
        }
        //Привязка к разделам
        if ($val["PROPERTY_TYPE"]=="G") {
          if (!is_array($val["VALUE"])) {
            $value=$val["VALUE"];
          } else {
            $value=[];
            foreach($val["VALUE"] AS $key_1=>$val_1) {
              $value[]=$val_1;
            }
          }
        }
        //Чекбоксы
        if ($val["PROPERTY_TYPE"]=="L") {
          if (!is_array($val["VALUE"])) {
            $value=$val["VALUE"];
          } else {
            $value=[];
            foreach($val["VALUE"] AS $key_1=>$val_1) {
              $value[]=$val_1;
            }
          }
        }
        
        $arResult[$key]=$value;
      }
      
      return $arResult;
    }
  }
?>