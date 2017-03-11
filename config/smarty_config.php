<?php
/**
 * This file for Smarty 3 configuration.
 */

/**
 * Choose Smarty 3 theme.
 * As a default enable 2 theme:
 * 1. simple;
 * 2. default;
 */
define('SMARTY_THEME', 'default');

/**
 * Path to Smarty 3 run file.
 */
define('SMARTY_RUN', '../resources/SmartyRun.php');

/**
 * Path to template folder.
 *
 */
define('TEMPLATE_FOLDER', '../resources/views/' . SMARTY_THEME);

/**
 * Path to compile templates folder.
 *
 */
define('TEMPLATE_COMPILED', '../resources/template_c/');

/**
 * Path to template cache.
 *
 */
define('TEMPLATE_CACHE', '../resources/tmp/');

/**
 * Path to Smarty 3 configuration.
 */
define('TEMPLATE_CONFIG', '../resources/smartyDefines');

/**
 * Path to Smarty 3 library.
 *
 */
define('SMARTY_LIB_PATH', '../vendor/smarty/smarty/libs/Smarty.class.php');


