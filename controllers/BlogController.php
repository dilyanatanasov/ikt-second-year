<?php

class BlogController extends BaseController
{
    private $blogModel;
    private $blogId;

    function __construct() {
        $this->blogModel = new BlogModel();

        $this->blogId = (!empty($_GET["blog_id"])) ? $_GET["blog_id"] : "";
    }

    public function view() {
        if (!empty($this->blogId)) {
            return $this->blogModel->view($this->blogId);
        } else {
            return "";
        }
    }

    public function listAll() {
        return $this->blogModel->listAll();
    }
}