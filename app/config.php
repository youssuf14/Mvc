<?php

// Directories
defined('APP_PATH') ? NULL : define('APP_PATH',__DIR__ . '/');
defined('VIEW_PATH') ? NULL : define('VIEW_PATH', APP_PATH . 'views/');

// Database Credentials
defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'youssef');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', 'rebo');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'storedb');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);