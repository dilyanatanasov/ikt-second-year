<?php

class MoviesController extends BaseController
{
    private $movieModel;
    private $uploadManager;

    function __construct() {
        $this->movieModel = new MovieModel();
        $this->uploadManager = new UploadManager();
    }

    public function create() {
        if (!empty($_POST) && !empty($_POST["create"])) {
            if (empty($_FILES["file_to_upload"]["error"])) {
                $file_name = $this->uploadManager->uploadImg(); // 12321321_duck.jpg | false
                if (!$file_name) {
                    return false;
                } else {
                    $_POST["thumbnail"] = $file_name;
                }
            }

            $this->movieModel->create($_POST);
            header("Location: index.php?controller=movies&action=listAll");
        } else {
            return true;
        }
    }

    public function listAll() {
        if (!empty($_POST) && !empty($_POST["search"])) {
            $searchResults = $this->movieModel->search($_POST["topic"]);
            if (sizeof($searchResults) > 0) {
                return $searchResults;
            } else {
                return true;
            }
        } else {
            return $this->movieModel->listAll();
        }
    }

    public function view() {
        if (!empty($_POST) && !empty($_POST["movie_id"])) {
            return $this->movieModel->view($_POST["movie_id"]);
        } else {
            return false;
        }
    }

    public function update() {
        if (!empty($_POST) && !empty($_POST["update"])) {
            $this->movieModel->update($_POST);
            header("Location: index.php?controller=movies&action=update&movie_id=" . $_POST["id"]);
        } else if (!empty($_GET) && !empty($_GET["movie_id"])) {
            return $this->movieModel->view($_GET["movie_id"]);
        }
    }

    public function delete() {
        if (!empty($_POST) && !empty($_POST["movie_id"])) {
            $this->movieModel->delete($_POST["movie_id"]);
            header("Location: index.php?controller=movies&action=listAll");
        } else {
            return false;
        }
    }
}