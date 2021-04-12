<?php
require_once "navigation.php";

if (!empty($data)) {
    if (!empty($_GET["action"])) {
        switch ($_GET["action"]) {
            case "create":
                require_once "html/movieCreate.php";
                break;
            case "listAll":
                require_once "html/movieList.php";
                break;
            case "view":
                require_once "html/movieView.php";
                break;
            case "update":
                require_once "html/movieUpdate.php";
                break;
            default:
                require_once "html/movieList.php";
                break;
        }
    }
}

require_once "footer.php";
?>
