<?php
require_once "navigation.php";
?>

<section>
    <h1>Movies</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Main Actor</th>
                <th>Duration</th>
                <th>Rating</th>
                <th>Thumbnail</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $movie) {
                echo "<tr>
                         <td>$movie->title</td>
                         <td>$movie->description</td>
                         <td>$movie->main_actor</td>
                         <td>$movie->duration</td>
                         <td>$movie->rating</td>
                         <td><img width='100px' src='$movie->thumbnail'/></td>
                      </tr>";
            }
        ?>
        </tbody>
    </table>
</section>

<?php
require_once "footer.php";
?>
