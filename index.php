<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php 
  use Bitrix\Main\Localization\Loc;
?>
<div class="sect-1 flex flex-col flex-a-sb">
  <?php
    //Карусель готовых проектов
    $APPLICATION->IncludeComponent(
      "swf:designer",
      "karusel",
      [
        "IBLOCK_ID"=>$_SESSION["arSettings"]["IB"]["content-works"],
      ],
    );
  ?>
  <div class="flex flex-row flex-a-start margin-top-m100 width_40proc color-1">
    <div id="develop_site_bitrix" class="title-1 width_100proc ta_left padding-top-40 padding-left-50">
      <?php echo Loc::getMessage("TITLE_ABOUT_2");?>
    </div>
    <div class="p-1 padding-left-50 width_60proc margin-top-35">
      <?php echo Loc::getMessage("TITLE_DEV_BITRIX_1");?>
    </div>
    <div class="p-1 padding-left-50 width_60proc margin-top-25">
      <?php echo Loc::getMessage("TITLE_DEV_BITRIX_2");?>
    </div>
    <div class="flex flex-col flex-a-start width_60proc margin-top-25 padding-left-50">
      <div class="width-fit">
        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/bitrix_dev_1.svg" />
      </div>
      <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
        <?php echo Loc::getMessage("TITLE_DEV_BITRIX_3");?>
      </div>
    </div>
    <div class="flex flex-col flex-a-start width_60proc margin-top-25 padding-left-50">
      <div class="width-fit">
        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/bitrix_dev_2.svg" />
      </div>
      <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
        <?php echo Loc::getMessage("TITLE_DEV_BITRIX_4");?>
      </div>
    </div>
    <div class="flex flex-col flex-a-start width_60proc margin-top-25 padding-left-50">
      <div class="width-fit">
        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/bitrix_dev_3.svg" />
      </div>
      <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
        <?php echo Loc::getMessage("TITLE_DEV_BITRIX_5");?>
      </div>
    </div>
    <div class="flex flex-col flex-a-start width_60proc margin-top-25 padding-left-50">
      <div class="width-fit">
        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/bitrix_dev_4.svg" />
      </div>
      <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
        <?php echo Loc::getMessage("TITLE_DEV_BITRIX_6");?>
      </div>
    </div>
    <div class="flex flex-col flex-a-start width_60proc margin-top-50 padding-left-50">
      <div class="width-fit">
        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/bitrix_dev_5.svg" />
      </div>
      <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
        <?php echo Loc::getMessage("TITLE_DEV_BITRIX_7");?>
      </div>
    </div>
  </div>
</div>

<div class="sect-2 color-3 flex flex-col flex-a-sb">
  <div class="container flex flex-col flex-a-sb z-index-20">
    <div class="flex flex-row flex-a-start width_70proc">
      <div id="tehpodder" class="title-1 width_100proc ta_left margin-left-30">
        <?php echo Loc::getMessage("TITLE_TEHPODDER_I_PROCHEE_1");?>
      </div>
      <div class="flex flex-col flex-a-start width_70proc margin-top-40 padding-left-50">
        <div class="width-fit">
          <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/tp_1.svg" />
        </div>
        <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
          <?php echo Loc::getMessage("TITLE_TEHPODDER_1");?>
        </div>
      </div>
      <div class="flex flex-col flex-a-start width_70proc margin-top-30 padding-left-50">
        <div class="width-fit">
          <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/tp_2.svg" />
        </div>
        <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
          <?php echo Loc::getMessage("TITLE_TEHPODDER_2");?>
        </div>
      </div>
      <div class="flex flex-col flex-a-start width_70proc margin-top-30 padding-left-50">
        <div class="width-fit">
          <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/tp_3.svg" />
        </div>
        <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
          <?php echo Loc::getMessage("TITLE_TEHPODDER_3");?>
        </div>
      </div>
      <div class="flex flex-col flex-a-start width_70proc margin-top-30 padding-left-50">
        <div class="width-fit">
          <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/tp_4.svg" />
        </div>
        <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
          <?php echo Loc::getMessage("TITLE_TEHPODDER_4");?>
        </div>
      </div>
    </div>
    <div class="width_30proc">
      <div id="prochinteg" class="title-1 width_100proc ta_left">
        <?php echo Loc::getMessage("TITLE_TEHPODDER_I_PROCHEE_2");?>
      </div>
      <div class="p-1 width_100proc margin-top-40">
        <?php echo Loc::getMessage("TITLE_PROCHEE_1");?>
      </div>
    </div>
  </div>
  <div class="bg-4 z-index-10">
  </div>
  <div class="bg-3 z-index-10">
  </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>