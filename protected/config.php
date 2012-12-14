<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-11-26
 * Time: 下午2:02
 * To change this template use File | Settings | File Templates.
 */

include_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

define('APPLICATION', __DIR__);
define('COMPONENTS_PATH', APPLICATION . DIRECTORY_SEPARATOR . 'components');

// user defined WebUser class
define('WEB_USER_CLASS', 'CWebUser');

// db config
define('TABLE_PREFIX', 'z_');
if (getenv('VCAP_SERVICES')) { // when hosted in appfog.com
    $services_json = json_decode(getenv("VCAP_SERVICES"), true);
    $mysql_config = $services_json["mysql-5.1"][0]["credentials"];
    $username = $mysql_config["username"];
    $password = $mysql_config["password"];
    $hostname = $mysql_config["hostname"];
    $port = $mysql_config["port"];
    $db = $mysql_config["name"];

    define('DB_ADAPTER', 'mysql');
    define('DB_HOST', $hostname);
    define('DB_PORT', $port);
    define('DB_NAME', $db);
    define('DB_USER', $username);
    define('DB_PASS', $password);
    define('DB_CHARSET', 'utf8');
} else { // default config
    define('DB_ADAPTER', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_PORT', 3306);
    define('DB_NAME', 'zblog');
    define('DB_USER', 'root');
    define('DB_PASS', '123456');
    define('DB_CHARSET', 'utf8');
}

autoload_dir(APPLICATION . DIRECTORY_SEPARATOR . 'private');
autoload_dir(COMPONENTS_PATH);
autoload_dir(APPLICATION . DIRECTORY_SEPARATOR . 'models');

include_once Common::path(APPLICATION, 'lib', 'Smarty', 'Smarty.class.php');

define('DEBUG', true);

define('TEMPLATE_DIR', 'templates');
define('LAYOUT_DIR', 'layouts');
define('TEMPLATE_COMPILE_DIR', APPLICATION . DIRECTORY_SEPARATOR . 'templates_c');
define('TEMPLATE_CACHE_DIR', APPLICATION . DIRECTORY_SEPARATOR . 'templates_cache');
define('TEMPLATE_CACHE_LIFETIME', 120);
define('TEMPLATE_CONFIG_DIR', Common::path(APPLICATION, 'lib', 'Smarty', 'config'));

