<?php
namespace Mvc\Lib\Config;
// Directories
defined('APP_PATH') ? null : define('APP_PATH', __DIR__ . '/../');
defined('VIEW_PATH') ? null : define('VIEW_PATH', APP_PATH . 'views/');
defined('TEMPLATE_PATH') ? null : define('TEMPLATE_PATH', APP_PATH . 'tpl/');
defined('LANGUAGE_PATH') ? null : define('LANGUAGE_PATH', APP_PATH . 'languages/');
defined('DEFAULT_LANGUAGE') ? null : define('DEFAULT_LANGUAGE', 'en');
defined('CSS') ? null : define('CSS', '/css/');
defined('JS') ? null : define('JS', '/js/');
// Session
defined('SESSION_SAVE_PATH') ? null : define('SESSION_SAVE_PATH', APP_PATH . '../sessions');
defined('SALT') ? null : define('SALT', '$2y$10$PyE0eGxMEwjcFUxFR27ufe2bbfqXYUpT8dvY2do6ZodHu9.7lWiq2');
// Database Credentials
defined('DATABASE_HOST_NAME') ? null : define('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME') ? null : define('DATABASE_USER_NAME', 'yghonem');
defined('DATABASE_PASSWORD') ? null : define('DATABASE_PASSWORD', '123');
defined('DATABASE_DB_NAME') ? null : define('DATABASE_DB_NAME', 'store');
defined('DATABASE_PORT_NUMBER') ? null : define('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER') ? null : define('DATABASE_CONN_DRIVER', 1);
// Messages
defined('MESSAGE_SUCCESS') ? null : define('MESSAGE_SUCCESS', 1);
defined('MESSAGE_INFO') ? null : define('MESSAGE_INFO', 2);
defined('MESSAGE_WARNING') ? null : define('MESSAGE_WARNING', 3);
defined('MESSAGE_ERROR') ? null : define('MESSAGE_ERROR', 4);
defined('CHECK_ACCESS') ? null : define('CHECK_ACCESS', 1);
defined('UPLOADE_FOLDER') ? null : define('UPLOADE_FOLDER', APP_PATH . '../public/uploads/');
defined('IMAGE_FOLDER') ? null : define('IMAGE_FOLDER', UPLOADE_FOLDER . 'images/');
defined('DOCUMENT_FOLDER') ? null : define('DOCUMENT_FOLDER', APP_PATH . 'documents/');
defined('MAX_SIZE_UPLOAD') ? null : define('MAX_SIZE_UPLOAD', ini_get('upload_max_filesize'));