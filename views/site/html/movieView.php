<?php

echo "
<h1>$data->title</h1>
<p>$data->description</p>
<p>$data->main_actor</p>
<p>$data->duration</p>
<p>$data->rating</p>
<p><img width='300px' src='$data->thumbnail'></p>
<form action='" . APPLICATION_PATH . "index.php?controller=movies&action=update&movie_id=$data->id' method='post'>
    <button type='submit'>Update</button>
</form>
";