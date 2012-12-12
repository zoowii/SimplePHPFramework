<?php

define('APPLICATION_NAME', substr($_SERVER['PHP_SELF'], 1, strrpos($_SERVER['PHP_SELF'], '/') - 1));

include_once './protected/config.php';
include_once './protected/init.php';

BP::modules(load_modules());

$route_result = route(); // TODO: when web browser submit a list of controller/action/data request, we should handler each action and puush result back as json/xml
if ($route_result === false) {
    include '404.php';
    exit;
}
if (!is_null($route_result)) {
    echo $route_result;
    exit;
}
