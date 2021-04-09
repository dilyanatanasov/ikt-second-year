<?php

class MoviesController extends BaseController
{
    private $movieModel;

    function __construct() {
        $this->movieModel = new MovieModel();
    }

    public function create() {
        if (!empty($_POST) && !empty($_POST["create"])) {
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

    public function delete() {
        if (!empty($_POST) && !empty($_POST["movie_id"])) {
            $this->movieModel->delete($_POST["movie_id"]);
            header("Location: index.php?controller=movies&action=listAll");
        } else {
            return false;
        }
    }
}