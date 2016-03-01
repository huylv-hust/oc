<?php
// HTTP
define('HTTP_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/oc/admin/');
define('HTTP_CATALOG', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/oc/');

// HTTPS
define('HTTPS_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/oc/admin/');
define('HTTPS_CATALOG', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/oc/');

// DIR
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('DIR_APPLICATION', DOCUMENT_ROOT.'oc/admin/');
define('DIR_SYSTEM', DOCUMENT_ROOT.'oc/system/');
define('DIR_LANGUAGE', DOCUMENT_ROOT.'oc/admin/language/');
define('DIR_TEMPLATE', DOCUMENT_ROOT.'oc/admin/view/template/');
define('DIR_CONFIG', DOCUMENT_ROOT.'oc/system/config/');
define('DIR_IMAGE', DOCUMENT_ROOT.'oc/image/');
define('DIR_CACHE', DOCUMENT_ROOT.'oc/system/storage/cache/');
define('DIR_DOWNLOAD', DOCUMENT_ROOT.'oc/system/storage/download/');
define('DIR_LOGS', DOCUMENT_ROOT.'oc/system/storage/logs/');
define('DIR_MODIFICATION', DOCUMENT_ROOT.'oc/system/storage/modification/');
define('DIR_UPLOAD', DOCUMENT_ROOT.'oc/system/storage/upload/');
define('DIR_CATALOG', DOCUMENT_ROOT.'oc/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'oc');
define('DB_PORT', '3306');
define('DB_PREFIX', '');
