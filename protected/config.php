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
define('TABLE_PREFIX', 'z_');

define('DB_ADAPTER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'zblog');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_CHARSET', 'utf8');

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

