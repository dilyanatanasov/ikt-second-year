<?php
echo "
<form action='" . APPLICATION_PATH . "index.php?controller=movies&action=create' method='post'>
    <button>Create</button>
</form>
<section>
    <h1>Movies</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=listAll' method='post'>
        <input id='topic' type='text' name='topic'>
        <button name='search' value='true'>Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Rating</th>
                <th>Thumbnail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>";

if (is_array($data)) {
    foreach ($data as $movie) {
        echo "<tr>
             <td>$movie->title</td>
             <td>$movie->rating</td>        
             <td><img width='100px' src='" . IMG_PATH . "$movie->thumbnail'/></td>
             <td>
                <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=view' method='post'>
                    <button name='movie_id' value='$movie->id'>View</button>
                </form>
                <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=delete' method='post'>
                    <button name='movie_id' value='$movie->id'>Delete</button>
                </form>
             </td>
          </tr>";
    }
}

echo "  </tbody>
    </table>
</section>";