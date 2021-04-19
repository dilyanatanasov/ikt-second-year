<?php
require_once dirname(dirname(__FILE__)) . "/configs/const.php";
require_once dirname(dirname(__FILE__)) . "/helpers/Debug.php";
require_once dirname(dirname(__FILE__)) . "/core/Authentication.php";
require_once dirname(dirname(__FILE__)) . "/core/Db.php";
require_once dirname(dirname(__FILE__)) . "/models/BaseModel.php";
require_once dirname(dirname(__FILE__)) . "/models/MovieModel.php";
require_once dirname(dirname(__FILE__)) . "/repositories/MoviesRepository.php";

$_POST = json_decode(file_get_contents('php://input'), true);

class Api
{
    function __construct() {
        if (!empty($_POST)) {
            if (
                !empty($_POST["token"]) &&
                !empty($_POST["action"]) &&
                !empty($_POST["data"])
            ) {
                $token = $_POST["token"];
                $action = $_POST["action"];
                $data = $_POST["data"];

                $authentication = new Authentication();
                if ($authentication->validateToken($token)) {
                    echo $this->request($action, $data);
                } else {
                    echo json_encode("Unauthorized");
                }
            } else {
                echo json_encode("Unauthorized");
            }
        } else {
            echo json_encode("Unauthorized");
        }
    }

    private function request($action, $data) {
        switch ($action) {
            case "comment":
                $movie_id = $data["movie_id"];
                $user_id = $data["user_id"];
                $comment = $data["comment"];
                $movie = new MovieModel();
                $movie->comment($movie_id, $user_id, $comment);
                $response = json_encode([
                    "message" => "Successfully added comment"
                ]);
                break;
            default:
                $response = json_encode("No results");
                break;
        }
        return $response;
    }
}

$api = new Api();