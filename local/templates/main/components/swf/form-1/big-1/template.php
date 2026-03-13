<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
    use Bitrix\Main\Localization\Loc;
?>
<div class="sect-form color-1">
    <div class="container">
        <div class="form-1_flex_container flex flex-col flex-a-center padding-bottom-30">
            <div class="bg-5">
            </div>
            <div class="form-1">
                <form id="id_form_1">
                    <div class="title-2 margin-top-25">
                        <?php echo Loc::getMessage("TITLE_FORM_1_1");?>
                    </div>
                    <div class="title-3 margin-top-25">
                        <?php echo Loc::getMessage("TITLE_FORM_1_2");?>
                    </div>
                    <div class="flex flex-col flex-a-start margin-top-25">
                        <input name="f_phone" placeholder="<?php echo Loc::getMessage("FORM_FIELD_PHONE");?>" />
                        <input name="f_name" placeholder="<?php echo Loc::getMessage("FORM_FIELD_NAME");?>" />
                    </div>
                    <div class="title-3 margin-top-25">
                        <input name="f_sogl" type="checkbox" value="1" checked/>
                        <?php echo Loc::getMessage("TITLE_FORM_1_3");?>
                    </div>
                    <div id="id_but_form_1" class="but_1 margin-top-35">
                        <?php echo Loc::getMessage("BUT_LEAD_1");?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>