<?php

class MovieModel extends BaseModel
{
    private $moviesRepository;

    function __construct()
    {
        $this->moviesRepository = new MoviesRepository();
    }

    public function view($id)
    {
        // TODO: Implement view() method.
    }

    public function listAll()
    {
        return $this->moviesRepository->getAll();
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