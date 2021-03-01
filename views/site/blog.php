<?php
require_once "navigation.php";
?>
    <header>
        <p>Blog</p>
    </header>
<?php
if (isset($data)) {
    if (is_array($data)) {
        echo "<ul>";
        foreach ($data as $blog) {
            echo "<li>$blog->username</li>";
        }
        echo "</ul>";
    } else {
        echo $data->username;
    }
}
?>
<?php
require_once "footer.php";
?>