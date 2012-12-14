<?php

$temp = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/'));
define('APPLICATION_NAME', $temp === '' ? '' : $temp); // if you want the web app runs faster, change it to static string
unset($temp);

include_once './protected/config.php';
include_once './protected/init.php';

BP::modules(load_modules());

$route_result = route(); // TODO: when web browser submit a list of controller/action/data request, we should handler each action and puush result back as json/xml
if ($route_result === false) {
    Common::redirect('404.php');
}
if (!is_null($route_result)) {
    echo $route_result;
    exit;
}
