<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php
  use Bitrix\Main\Localization\Loc;
?>
        <?php
          //Сквозная большая форма 1
          $APPLICATION->IncludeComponent(
            "swf:form-1",
            "big-1",
            [
            ],
          );
        ?>
      <?php //.body ?>
      </div>
      <div class="foot flex-spec-a-center">
        <?php echo Loc::getMessage("COPYRIGHT");?>
      </div>
    <?php //.container-big ?>
    </div>
  </body>
</html>