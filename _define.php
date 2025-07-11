<?php

/**
 * @brief smile, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */
$this->registerModule(
    'Smile',
    'Smile (based on eponym Wordpress theme designed by Stephen Dickinson)',
    'Franck Paul',
    '6.1',
    [
        'date'                 => '2025-06-30T10:28:59+0200',
        'requires'             => [['core', '2.35']],
        'type'                 => 'theme',
        'tplset'               => 'dotty',
        'widgettitleformat'    => '<h1 class="widget-title">%s</h1>',
        'widgetsubtitleformat' => '<h2 class="widget-subtitle">%s</h2>',
        'overload'             => true,

        'details'    => 'https://open-time.net/?q=smile',
        'support'    => 'https://github.com/franck-paul/smile',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/smile/main/dcstore.xml',
        'license'    => 'gpl2',
    ]
);
