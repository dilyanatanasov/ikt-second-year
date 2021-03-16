<?php
require_once "navigation.php";
?>

    <header>
        <p>Welcome <?php if (!empty($_SESSION) && !empty($_SESSION["full_name"])) echo $_SESSION["full_name"];?></p>
    </header>

<?php
require_once "footer.php";
?>