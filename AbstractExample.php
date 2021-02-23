<?php
































abstract class Model
{
    public abstract function viewItem();
    public abstract function listItems();
    public abstract function updateItem();
    public abstract function deleteItem();
}

class UserModel extends Model {
    public function viewItem()
    {
        return "test";
    }

    public function listItems()
    {
        return "test";
    }

    public function updateItem()
    {
        return "test";
    }

    public function deleteItem()
    {
        return "test";
    }

    public function alterItem() {
        return "test2";
    }
}