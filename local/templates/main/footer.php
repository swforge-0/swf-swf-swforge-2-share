<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php
  session_start();
  
  use Bitrix\Main\Localization\Loc;
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