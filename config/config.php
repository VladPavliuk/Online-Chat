<?php

/**
 * DIFFERENT CONFIGURATIONS.
 */




// Show more info
define('DEVELOPER_MODE', true);

// If true ASOC order, if false DESOC order.
define('SIZE_SORT_ORDER', true);

// Path to script witch contains parameters for Data Base:
// (host, data base, user, password).
define('DB_PARAMETERS_PATH', '../config/dbconfig.php');

// Path to script, witch defines connection to Data Base.
define('DB_CONNECT_PATH', '../app/models/DataBase.php');

// Path to folder with controllers.
define('CONTROLLERS_PATH', '../app/controllers/');

// Path to folder with models.
define('MODELS_PATH','../app/models/');

// Set ending of controller file.
define('CONTROLLER_POSTFIX', 'Controller');

// Set ending on action method.
define('ACTION_POSTFIX', 'Action');

// Path to Router script file
define('ROUTER_PATH', '../app/router/Router.php');

// Path to script witch contains all routes.
define('ROUTES_PATH', '../app/router/routes.php');

/**
 * Include Smarty configuration.
 *
 */
require_once('smarty_config.php');

/**
 * Define path to PHPMailer class
 *
 */
define('PHPMAILER_PATH', '../vendor/phpmailer/class.phpmailer.php');

// Define email of admin
define('EMAIL_ADMIN', "pavliuk.vlad@gmail.com");