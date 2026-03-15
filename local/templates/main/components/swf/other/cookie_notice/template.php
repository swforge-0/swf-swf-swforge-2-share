<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
    use Bitrix\Main\Localization\Loc;
?>
<!-- Cookie уведомление -->
<div class="cookie-notice" id="cookieNotice">
    <div class="cookie-content">
        <p><?php echo Loc::getMessage("TITLE_COOKIE_NOTICE");?></p>
        <button class="cookie-btn" id="acceptCookies"><?php echo Loc::getMessage("TITLE_COOKIE_NOTICE_BUT");?></button>
    </div>
</div>