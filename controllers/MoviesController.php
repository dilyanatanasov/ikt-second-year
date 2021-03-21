<?php


class MoviesController extends BaseController
{
    private $movieModel;

    function __construct() {
        $this->movieModel = new MovieModel();
    }

    public function listAll() {
        return $this->movieModel->listAll();
    }
}