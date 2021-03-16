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
              echo "<tr>";
              echo "<td>" . $movie->title . "</td>";
              echo "<td>" . $movie->description . "</td>";
              echo "<td>" . $movie->main_actor . "</td>";
              echo "<td>" . $movie->duration . "</td>";
              echo "<td>" . $movie->rating . "</td>";
              echo "<td><img width='100px' src='" . $movie->thumbnail . "'></td>";
              echo "</tr>";
          }
        ?>
        </tbody>
    </table>
</section>

<?php
require_once "footer.php";