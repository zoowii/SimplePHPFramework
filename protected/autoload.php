<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-11-26
 * Time: 下午2:02
 * To change this template use File | Settings | File Templates.
 */

function ls_dirs_in_dir($dir, $with_path = false)
{
    $d = opendir($dir);
    $dirs = array();
    while ($file = readdir($d)) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
            if ($with_path) {
                $dirs[] = array('filepath' => $dir . DIRECTORY_SEPARATOR . $file, 'filename' => $file);
            } else {
                $dirs[] = $file;
            }
        }
    }
    return $dirs;
}

function ls_files_in_dir($dir, $recur = true, $with_path = false)
{
    $d = opendir($dir);
    $files = array();
    while ($file = readdir($d)) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
            if ($recur) {
                $files = array_merge($files, ls_files_in_dir($dir . DIRECTORY_SEPARATOR . $file, $recur, $with_path));
            }
        } else {
            if ($with_path) {
                $files[] = array('filepath' => $dir . DIRECTORY_SEPARATOR . $file, 'filename' => $file);
            } else {
                $files[] = $dir . DIRECTORY_SEPARATOR . $file;
            }
        }
    }
    return $files;
}

function autoload_dir($dir, $recur = true)
{
    $files = ls_files_in_dir($dir, $recur);
    foreach ($files as $file) {
        require $file;
    }
}