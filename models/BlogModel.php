<?php

class BlogModel extends BaseModel
{
    private $blogRepo;

    function __construct()
    {
        $this->blogRepo = new BlogRepository();
    }

    public function view($id)
    {
        return $this->blogRepo->getById($id);
    }

    public function listAll()
    {
        return $this->blogRepo->getAll();
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}