<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>

<html>
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <?php

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/browser.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/breakpoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/util.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');

    ?>

</head>

<body class="is-preload">

<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <header id="header">
                <a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                </ul>
            </header>