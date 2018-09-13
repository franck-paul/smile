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

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "Smile",                                                                 // Name
    "Smile (based on eponym Wordpress theme designed by Stephen Dickinson)", // Description
    "Franck Paul",                                                           // Author
    '1.2',                                                                   // Version
    [
        'requires'             => [['core', '2.13']],                    // Dependencies
        'type'                 => 'theme',                               // Type
        'tplset'               => 'dotty',                               // tplset
        'widgettitleformat'    => '<h1 class="widget-title">%s</h1>',    // Widget title
        'widgetsubtitleformat' => '<h2 class="widget-subtitle">%s</h2>' // Widget subtitle
    ]
);
