<?php

/**
 * Include Smarty 3 library.
 *
 */
require_once(SMARTY_LIB_PATH);

class SmartyRun
{
    public static function connect()
    {
        /**
         * Initialization template.
         *
         */
        $smarty = new Smarty();

        $smarty->template_dir = TEMPLATE_FOLDER;
        $smarty->compile_dir = TEMPLATE_COMPILED;
        $smarty->cache_dir = TEMPLATE_CACHE;
        $smarty->config_dir = TEMPLATE_CONFIG;

        return $smarty;
    }
}