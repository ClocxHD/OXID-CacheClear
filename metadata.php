<?php

$sMetadataVersion = "2.0";

$aModule = [
    "id" => "OXIDCacheClear",
    "title" => "OXID Cache Clear Module",
    "description" => "Cache Clear Module for OXID eShop 6",
    "version" => "1.0.0",
    "author" => "fthielen",
    "email" => "oxid@fabian-thielen.io",
    "url" => "https://github.com/ClocxHD",
    "extend" => [
        \OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class => \fthielen\OXIDCacheClear\Application\Controller\Admin\OXIDCacheClear_NavigationController::class,
    ],
    "blocks" => [
        ['template' => 'header.tpl', 'block' => 'admin_header_links', 'file' => '/out/blocks/admin/OXIDCacheClear_header.tpl'],
    ],
];