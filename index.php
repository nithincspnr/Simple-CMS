<?php//Start the Sessionsession_start(); // Definesdefine('ROOT_DIR', realpath(dirname(__FILE__)) .'/');define('APP_DIR', ROOT_DIR .'application/');// Includesrequire_once(APP_DIR .'config/config.php');require_once(APP_DIR .'config/constants.php');require_once(ROOT_DIR .'system/model.php');require_once(ROOT_DIR .'system/view.php');require_once(ROOT_DIR .'system/controller.php');require_once(ROOT_DIR .'system/pip.php');// Define base URLglobal $config, $constants;define('BASE_URL', $config['base_url']);pip();?>