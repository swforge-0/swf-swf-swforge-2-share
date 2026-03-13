<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php 
    use Bitrix\Main\Localization\Loc;
?>
<?php
    //Соглашения
    $APPLICATION->IncludeComponent(
        "swf:designer",
        "agreements",
        [
            "IBLOCK_ID"=>$_SESSION["arSettings"]["IB"]["content-agreements"],
            "FILTER_PROPS"=>[
                "PROPERTY_URL"=>$_GET["PAGE_CODE"],
            ],
        ],
    );
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>