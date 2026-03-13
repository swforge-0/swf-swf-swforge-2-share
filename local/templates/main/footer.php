<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php
    use Bitrix\Main\Localization\Loc;
?>
                <?php if($_SESSION["sett_view_cap"]):?>
                    <?php
                        //Сквозная большая форма 1
                        $APPLICATION->IncludeComponent(
                            "swf:form-1",
                            "big-1",
                            [
                            ],
                        );
                    ?>
                <?php endif;?>
            <?php //.body ?>
            </div>
            <?php if($_SESSION["sett_view_cap"]):?>
                <div class="foot" id="y_foot">
                    <div class="container flex flex-col flex-a-sb bg-6">
                        <div class="width-fit flex flex-row flex-a-start">
                            <a href="/" class="img-logo-foot">
                            </a>
                            <div class="p-2 padding-left-5 margin-top-10">
                                <?php echo Loc::getMessage("COPYRIGHT");?>
                            </div>
                            <?php /*
                            <div class="padding-left-5 margin-top-35 flex flex-col flex-a-start">
                                <div class="width-fit">
                                    <img class="icon-2" src="<?php echo SITE_TEMPLATE_PATH;?>/img/soc_phone.svg" />
                                </div>
                                <a class="link_contact margin-left-15" href="tel:<?php echo Loc::getMessage("PHONE");?>">
                                    <?php echo Loc::getMessage("PHONE_TEXT");?>
                                </a>
                            </div>
                            */ ?>
                            <div class="padding-left-5 margin-top-35 flex flex-col flex-a-start">
                                <div class="width-fit">
                                    <img class="icon-2" src="<?php echo SITE_TEMPLATE_PATH;?>/img/soc_email.svg" />
                                </div>
                                <a class="link_contact margin-left-15" href="mailto:<?php echo Loc::getMessage("EMAIL");?>">
                                    <?php echo Loc::getMessage("EMAIL");?>
                                </a>
                            </div>
                            <div class="padding-left-5 margin-top-10 flex flex-col flex-a-start">
                                <div class="width-fit">
                                    <img class="icon-2" src="<?php echo SITE_TEMPLATE_PATH;?>/img/soc_tg.svg" />
                                </div>
                                <a class="link_contact margin-left-15" href="<?php echo Loc::getMessage("TG_LINK");?>" target="_blank">
                                    <?php echo Loc::getMessage("TG");?>
                                </a>
                            </div>
                        </div>
                        <div class="menu-2 flex flex-row flex-a-end">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "menu_uni",
                                Array(
                                    "ROOT_MENU_TYPE" => "bottom",
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "bottom",
                                    "USE_EXT" => "Y",
                                    "TARGET" => "_blank",
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        <?php //.container-big ?>
        </div>
    </body>
</html>