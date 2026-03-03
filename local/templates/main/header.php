<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php 
  use Bitrix\Main\Localization\Loc;
  use Bitrix\Main\Page\Asset;
  
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/object_def.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css");
  
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.5.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
  
  //Galery_1
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/plugins/galery_1/modernizr.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/plugins/galery_1/classie.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/plugins/galery_1/photostack.js");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/plugins/galery_1/component.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/plugins/galery_1/normalize.css");
  
  $APPLICATION->SetTitle(Loc::getMessage("TITLE"));
?>
<!DOCTYPE html>
<html>
  <head>
    <?php $APPLICATION->ShowHead();?>
    <title><?php $APPLICATION->ShowTitle(false);?></title>
    <meta name="viewport" content="initial-scale=1.0" />
  </head>
  <body>
    <div class="container-big">
      <div class="head-0">
        <div class="container he_100p">
          <div class="menu-0 flex flex-col flex-a-start he_100p">
            <?php $APPLICATION->IncludeComponent(
              "bitrix:menu",
              "menu_uni",
              Array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "top",
                "USE_EXT" => "Y"
              )
            );
            ?>
          </div>
        </div>
      </div>
      <div class="head">
        <div class="container">
          <div class="flex flex-col flex-a-start z-index-20">
            <a href="/" class="img-logo">
            </a>
            <div class="menu-1 flex flex-col flex-a-start">
              <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu_uni",
                Array(
                  "ROOT_MENU_TYPE" => "left",
                  "MAX_LEVEL" => "1",
                  "CHILD_MENU_TYPE" => "left",
                  "USE_EXT" => "Y"
                )
              );
              ?>
            </div>
          </div>
          <div id="1C_integ" class="cont-1 z-index-15">
            <div class="title-1 margin-top-25">
              <?php echo Loc::getMessage("TITLE_ABOUT_1");?>
            </div>
            <div class="p-1 margin-top-20 width_90proc">
              <?php echo Loc::getMessage("TITLE_ABOUT_1_1");?>
            </div>
            <div class="flex flex-row flex-a-start margin-top-30 padding-left-30">
              <div class="flex flex-col flex-a-start">
                <div class="width-fit">
                  <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/about_1_1.svg" />
                </div>
                <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
                  <?php echo Loc::getMessage("TITLE_ABOUT_1_2");?>
                </div>
              </div>
              <div class="flex flex-col flex-a-start margin-top-10">
                <div class="width-fit">
                  <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/about_1_2.svg" />
                </div>
                <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
                  <?php echo Loc::getMessage("TITLE_ABOUT_1_3");?>
                </div>
              </div>
              <div class="flex flex-col flex-a-start margin-top-10">
                <div class="width-fit">
                  <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/about_1_3.svg" />
                </div>
                <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
                  <?php echo Loc::getMessage("TITLE_ABOUT_1_4");?>
                </div>
              </div>
            </div>
            <div class="but_1 margin-top-50 go_to_link_ya" p_link="#id_form_1">
              <?php echo Loc::getMessage("BUT_LEAD_1");?>
            </div>
          </div>
          <div class="bg-1 z-index-12">
          </div>
        </div>
        <div class="bg-2 z-index-10">
        </div>
      </div>
      <div class="body">