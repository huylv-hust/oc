<?php
// HTTP
define('HTTP_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/');

// HTTPS
define('HTTPS_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/');

// DIR
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('DIR_APPLICATION', DOCUMENT_ROOT.'/catalog/');
define('DIR_SYSTEM', DOCUMENT_ROOT.'/system/');
define('DIR_LANGUAGE', DOCUMENT_ROOT.'/catalog/language/');
define('DIR_TEMPLATE', DOCUMENT_ROOT.'/catalog/view/theme/');
define('DIR_CONFIG', DOCUMENT_ROOT.'/system/config/');
define('DIR_IMAGE', DOCUMENT_ROOT.'/image/');
define('DIR_CACHE', DOCUMENT_ROOT.'/system/storage/cache/');
define('DIR_DOWNLOAD', DOCUMENT_ROOT.'/system/storage/download/');
define('DIR_LOGS', DOCUMENT_ROOT.'/system/storage/logs/');
define('DIR_MODIFICATION', DOCUMENT_ROOT.'/system/storage/modification/');
define('DIR_UPLOAD', DOCUMENT_ROOT.'/system/storage/upload');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'u895826785_root');
define('DB_PASSWORD', '123456789');
define('DB_DATABASE', 'u895826785_oc');
define('DB_PORT', '3306');
define('DB_PREFIX', '');
