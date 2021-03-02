<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/mvc/views/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<form class="container" action="<?php echo APPLICATION_PATH ?>index.php" method="post">
    <section class="logo">
        <h1>rm</h1>
        <h6>Movie grader platform</h6>
    </section>
    <input name="username" placeholder="username" autocomplete="off">
    <input type="password" name="password" placeholder="password" autocomplete="off">
    <input type="submit" value="Login"/>
    <a href="<?php echo APPLICATION_PATH ?>index.php?register=true">No registration?</a>
</form>
</body>
</html>