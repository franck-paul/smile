<?php
/**
 * @brief smile, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "Smile",                                                                 // Name
    "Smile (based on eponym Wordpress theme designed by Stephen Dickinson)", // Description
    "Franck Paul",                                                           // Author
    '1.1',                                                                   // Version
    array(
        'type'                 => 'theme',                               // Type
        'tplset'               => 'dotty',                               // tplset
        'widgettitleformat'    => '<h1 class="widget-title">%s</h1>',    // Widget title
        'widgetsubtitleformat' => '<h2 class="widget-subtitle">%s</h2>' // Widget subtitle
    )
);
