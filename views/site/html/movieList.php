<?php

echo "
<form action='" . APPLICATION_PATH . "index.php?controller=movies&action=create' method='post'>
    <button>Create</button>
</form>
<section>
    <h1>Movies</h1>
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

foreach ($data as $movie) {
    echo "<tr>
             <td>$movie->title</td>
             <td>$movie->rating</td>
             <td><img width='100px' src='$movie->thumbnail'/></td>
             <td>
                <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=view' method='post'>
                    <button name='movie_id' value='$movie->id'>View</button>
                </form>
             </td>
          </tr>";
}

echo "  </tbody>
    </table>
</section>";