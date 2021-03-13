<?php


class UserModel extends BaseModel
{
    private $userRepository;

    function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function create($data)
    {
        return $this->userRepository->create($data);
    }

    public function view($id)
    {
        // TODO: Implement view() method.
    }

    public function viewByUsernameAndPassword($username, $password) {
        return $this->userRepository->getByUsernameAndPassword($username, $password);
    }

    public function listAll()
    {
        // TODO: Implement listAll() method.
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