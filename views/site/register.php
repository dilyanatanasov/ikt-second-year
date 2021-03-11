<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<form class="container" action="<?php echo APPLICATION_PATH?>index.php" method="post">
    <section class="logo">
        <h1>ikt</h1>
        <h6>Naval Academy</h6>
    </section>
    <input name="username" placeholder="Username" autocomplete="off">
    <input name="first_name" placeholder="First Name" autocomplete="off">
    <input name="last_name" placeholder="Last Name" autocomplete="off">
    <input name="password" type="password"  placeholder="Password" autocomplete="off">
    <input type="submit" name="sign_up" value="Sign Up"/>
    <a href="<?php echo APPLICATION_PATH?>index.php?login=true">Alredy have a registration?</a>
</form>
</body>
</html>