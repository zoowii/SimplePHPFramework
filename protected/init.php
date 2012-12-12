<?php

/**
 * @return array modules names => controller array
 */
function load_modules()
{
    $mods = ls_dirs_in_dir(APPLICATION . DIRECTORY_SEPARATOR . 'modules', true);
    $modules = array();
    foreach ($mods as $mod) {
        $mod_path = $mod['filepath'];
        $mod_name = $mod['filename'];
        $modules[$mod_name] = array('path' => $mod_path, 'controllers' => ls_files_in_dir($mod_path, false, false));
        // load components and models in the module
        $components_dir = $mod_path . DIRECTORY_SEPARATOR . 'components';
        $models_dir = $mod_path . DIRECTORY_SEPARATOR . 'models';
        if (is_dir($components_dir)) {
            autoload_dir($components_dir);
        }
        if (is_dir($models_dir)) {
            autoload_dir($models_dir);
        }
    }
    return $modules;
}

function load_plugins()
{
    // TODO
}

/**
 * @param $controller
 * @param $action
 * @param string $module
 * @return Controller | boolean false
 */
function load_controller($controller, $module = false)
{
    $dir = $module === false ? Common::path(APPLICATION, 'controllers') : Common::path(APPLICATION, 'modules', $module, 'controllers');
    $controller_name = ucfirst($controller) . 'Controller';
    $path = Common::path($dir, $controller_name . '.php');
    if (is_file($path)) {
        if (!class_exists($controller_name)) {
            include $path;
        }
        $c = new $controller_name($module);
        if ($c instanceof Controller) {
            return $c;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// route request to action by m[optional]=module, c=controller, a[optional|default:index]=action
function route($c = false, $a = false, $m = false)
{
    if ($c === false && $a === false && $m === false) {
        $c = isset($_GET['c']) ? $_GET['c'] : 'site';
        $a = isset($_GET['a']) ? $_GET['a'] : 'index';
        $m = isset($_GET['m']) ? $_GET['m'] : false;
    }
    $controller = load_controller($c, $m);
    if (!$controller) {
        return false;
    }
    $action = 'action' . ucfirst($a);
    $cls = new ReflectionClass($controller);
    if ($cls->hasMethod($action)) {
        return $controller->$action();
    } else {
        return false; // can't find the action
    }
}

function initTmpl()
{

}