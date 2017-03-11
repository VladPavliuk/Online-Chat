<?php

/**
 * THIS SCRIPT START APPLICATION.
 */

/**
 * Include file with configuration.
 *
 */
require_once('../config/config.php');

/**
 * Include Router class.
 *
 */
require_once('../app/router/Router.php');

/**
 * Connecting to file which connect and start template engine.
 *
 */
require_once(SMARTY_RUN);

/**
 * Start finding controller and action.
 * Based on URI. And execute them.
 *
 */
(new Router());


