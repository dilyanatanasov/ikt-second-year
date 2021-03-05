<?php

class Pager
{
    public static function load($page = "welcome")
    {
        $controller = false;
        if (!empty($_GET)) {
            if (!empty($_GET["controller"])) {
                $page = $_GET["controller"];
                switch ($_GET["controller"]) {
                    case "blog":
                        $controller = new BlogController();
                        break;
                    case "movies":
                        $controller = new MoviesController();
                        break;
                    default:
                        $page = "404";
                        break;
                }
            }

            if (!empty($_GET["action"])) {
                $name = $_GET["action"];
                if (method_exists($controller, $name)) {
                    $data = $controller->$name();
                }
            }
        }
        return require_once VIEW_PATH . $page . ".php";
    }

    public static function loadLogin()
    {
        $page = "login";
        return require_once VIEW_PATH . $page . ".php";
    }

    public static function loadRegister()
    {
        $page = "register";
        return require_once VIEW_PATH . $page . ".php";
    }
}