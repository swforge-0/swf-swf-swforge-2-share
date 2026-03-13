<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php 
    use Bitrix\Main\Localization\Loc;
    use Bitrix\Main\Page\Asset;
    
    //def настройки стилизации
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/default.css");
    //Шрифты
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/fonts/calibri/style.css");
    //Стили шаблона
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/object_def.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/objects.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/menu.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/mobile.css");
    
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.5.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
    
    //photostack
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/plugins/photostack/modernizr.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/plugins/photostack/classie.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/plugins/photostack/photostack.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/plugins/photostack/component.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/plugins/photostack/normalize.css");
    
    //lightgallery
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/plugins/lightgallery/lightgallery.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/plugins/lightgallery/skins/default/style.css");
    
    $APPLICATION->SetTitle(Loc::getMessage("TITLE_RUS"));
    
    //Исключения для шапки на некоторых страницах
    $view_cap=true;
    if (strpos($_SERVER["REQUEST_URI"],"agreements")!==false) {
        $view_cap=false;
    }
    $_SESSION["sett_view_cap"]=$view_cap;
?>
<!DOCTYPE html>
<html>
    <head>
        <?php $APPLICATION->ShowHead();?>
        <title><?php $APPLICATION->ShowTitle(false);?></title>
        <meta name="viewport" content="initial-scale=1.0" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"    href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo SITE_TEMPLATE_PATH;?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo SITE_TEMPLATE_PATH;?>/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <?php //lightgallery - инициализация?>
        <script>lightgallery.init();</script>
    </head>
    <body>
        <div class="container-big">
            <?php if($view_cap):?>
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
                        <div class="menu-mob">
                            <div class="menu-mob-item"></div>
                            <div class="menu-mob-item"></div>
                            <div class="menu-mob-item"></div>
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
                            <div class="title-1">
                                <?php echo Loc::getMessage("TITLE_ABOUT_1");?>
                            </div>
                            <div class="p-1 margin-top-30 width_90proc">
                                <?php echo Loc::getMessage("TITLE_ABOUT_1_1");?>
                            </div>
                            <div class="flex flex-row flex-a-start margin-top-30">
                                <div class="flex flex-col flex-a-start">
                                    <div class="width-fit">
                                        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/about_1_1.svg?v=1.6" />
                                    </div>
                                    <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
                                        <?php echo Loc::getMessage("TITLE_ABOUT_1_2");?>
                                    </div>
                                </div>
                                <div class="flex flex-col flex-a-start margin-top-20">
                                    <div class="width-fit">
                                        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/about_1_2.svg?v=2.6" />
                                    </div>
                                    <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
                                        <?php echo Loc::getMessage("TITLE_ABOUT_1_3");?>
                                    </div>
                                </div>
                                <div class="flex flex-col flex-a-start margin-top-20">
                                    <div class="width-fit">
                                        <img class="icon-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/about_1_3.svg?v=1.6" />
                                    </div>
                                    <div class="flex-spec-a-center-ta-left margin-left-30 p-1 width_70proc">
                                        <?php echo Loc::getMessage("TITLE_ABOUT_1_4");?>
                                    </div>
                                </div>
                            </div>
                            <div class="but_1 margin-top-70 go_to_link_ya" p_link="#id_form_1">
                                <?php echo Loc::getMessage("BUT_LEAD_1");?>
                            </div>
                        </div>
                        <div class="bg-1 z-index-12">
                        </div>
                    </div>
                    <div class="bg-2 z-index-10">
                    </div>
                </div>
            <?php endif;?>
            <?php
                $dop_class="";
                if(!$view_cap){
                    $dop_class="body_no_margin";
                }
            ?>
            <div class="body <?php echo $dop_class;?>">