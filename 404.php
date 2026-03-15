<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
    
    use Bitrix\Main\Localization\Loc;

    CHTTP::SetStatus("404 Not Found");
    @define("ERROR_404","Y");

    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

    $APPLICATION->SetTitle("404 Not Found");
?>
<div class="container">
    <div class="title-1 margin-top-50">
        <?php echo Loc::getMessage("TITLE_404");?>
    </div>
    <div class="but_1 margin-top-50" onclick="location.href='/';">
        <?php echo Loc::getMessage("TITLE_404_BUT");?>
    </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>