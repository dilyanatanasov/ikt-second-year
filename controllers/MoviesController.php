<?php


class MoviesController extends BaseController
{
    private $movieModel;

    function __construct() {
        $this->movieModel = new MoviesModel();
    }

    public function listAll() {
        return $this->movieModel->listAll();
    }
}