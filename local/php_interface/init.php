<?php
  session_start();

  use Bitrix\Main\Localization\Loc;
  
  //Грузим общий языковой файл
  Loc::loadMessages(__FILE__);
  
  //Грузим глобальные переменные
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/global_var.php");
  
  //Грузим ходовые битрикс утилиты
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/swf_bitrix_util.php");
?>