<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<div class="sect-1 color-1">
</div>
<?php
  //Сквозная большая форма 1
  $APPLICATION->IncludeComponent(
    "swf:form-1",
    "big-1",
    [
    ],
  );
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>