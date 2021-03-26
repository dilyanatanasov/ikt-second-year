<?php


class MovieModel extends BaseModel
{
    private $movieRepository;

    function __construct() {
        $this->movieRepository = new MoviesRepository();
    }

    public function create($data)
    {
        return $this->movieRepository->create($data);
    }

    public function view($id)
    {
        return $this->movieRepository->getById($id);
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