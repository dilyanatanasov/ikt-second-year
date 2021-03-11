<?php

class BlogController extends BaseController
{
    private $moviesModel;

    function __construct() {
        $this->moviesModel = new MoviesModel();
    }

    public function listAll() {
        return $this->moviesModel->listAll();
    }
}