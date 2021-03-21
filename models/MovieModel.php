<?php


class MovieModel extends BaseModel
{
    private $movieRepository;

    function __construct() {
        $this->movieRepository = new MoviesRepository();
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function view($id)
    {
        // TODO: Implement view() method.
    }

    public function listAll()
    {
        return $this->movieRepository->getAll();
    }

    public function update($data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}