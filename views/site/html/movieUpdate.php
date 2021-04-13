<?php

echo "
<form action='" . APPLICATION_PATH . "index.php?controller=movies&action=update' method='post'>
    <input style='display: none' name='id' value='$data->id'>
    <label>Title</label>
    <input type='text' name='title' value='$data->title'><br>
    <label>Description</label>
    <input type='text' name='description' value='$data->description'><br>
    <label>Main Actor</label>
    <input type='text' name='main_actor' value='$data->main_actor'><br>
    <label>Duration</label>
    <input type='number' name='duration' value='$data->duration'><br>
    <label>Rating</label>
    <input type='number' name='rating' value='$data->rating'><br>
    <label>Thumbnail</label>
    <input type='text' name='thumbnail' value='$data->thumbnail'><br>
    <button name='update' value='true'>Update</button>
</form>
";