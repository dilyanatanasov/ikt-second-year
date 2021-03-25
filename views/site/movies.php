<?php
require_once "navigation.php";

if (!empty($data)) {
    if (!empty($_GET["action"])) {
        switch ($_GET["action"]) {
            case "listAll":
                require_once "html/movieList.php";
                break;
            default:
                require_once "html/movieList.php";
                break;
        }
    }
}

require_once "footer.php";
?>
