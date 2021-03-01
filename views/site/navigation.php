<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <!--<link rel="stylesheet" type="text/css" href="/ikt-second-year/views/css/main.css">-->
</head>
<body>
<nav>
    <ul>
        <section class="logo">
            <a href="/ikt-second-year/index.php"><h1>rate me</h1></a>
        </section>
        <li><a href="/ikt-second-year/index.php?controller=blog&action=list">Blog</a></li>
        <li><a href="/ikt-second-year/index.php?controller=about">About</a></li>
        <?php
        echo "<li>
                    <form action='/ikt-second-year/index.php?login=true' method='post'>
                        <input type='submit' value='";
        echo (!empty($_SESSION["uid"])) ? "Logout" : "Login";
        echo "'>
                    </form>
                </li>";
        ?>
    </ul>
</nav>
<main>
    <section class="cover">
        <section class="spinner">
            <span class="dot1"></span>
            <span class="dot2"></span>
        </section>
    </section>
    <section class="content">
