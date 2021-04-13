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

    public function search($topic) {
        return $this->movieRepository->getAllByTopic($topic);
    }

    public function update($data)
    {
        return $this->movieRepository->update($data);
    }

    public function delete($id)
    {
        return $this->movieRepository->delete($id);
    }
}