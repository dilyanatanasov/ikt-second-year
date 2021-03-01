<?php

class Autoload
{
    public static function run($class_name)
    {
        require_once "configs/const.php";
        require_once "core/Authentication.php";
        require_once "core/Pager.php";
        require_once "core/Router.php";
        require_once "core/Db.php";
        require_once "helpers/Debug.php";

        if (preg_match('/Controller$/', $class_name)) {
            $folder = CONTROLLERS_PATH;
        } elseif (preg_match('/Model$/', $class_name)) {
            $folder = MODEL_PATH;
        } elseif (preg_match('/Repository$/', $class_name)) {
            $folder = REPOSITORY_PATH;
        } elseif (preg_match('/View$/', $class_name)) {
            $folder = VIEW_PATH;
        }

        if (!empty($folder)) {
            if (file_exists($folder . $class_name . '.php')) {
                require_once $folder . $class_name . '.php';
                return true;
            }
        }
    }
}