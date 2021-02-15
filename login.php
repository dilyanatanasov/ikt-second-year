<?php
// Logic for login

function pre($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$db_username = "dilyan";
$db_password = "1234";

function login($db_u, $db_p) {
    if (isset($_POST) && !empty($_POST)) {
        if (
            isset($_POST["username"]) &&
            !empty($_POST["username"]) &&
            isset($_POST["password"]) &&
            !empty($_POST["password"])
        ) {
            if (
                $_POST["username"] === $db_u &&
                $_POST["password"] === $db_p
            ) {
                header("Location: welcome.php");
            } else {
                header("Location: login.php");
            }
        } else {
            header("Location: login.php");
        }
    }
}
// login($db_username, $db_password);

class Authentication {
    private $db_username = "dilyan";
    private $db_password = "1234";

    public function login() {
        if (isset($_POST) && !empty($_POST)) {
            if (
                isset($_POST["username"]) &&
                !empty($_POST["username"]) &&
                isset($_POST["password"]) &&
                !empty($_POST["password"])
            ) {
                if (
                    $_POST["username"] === $this->db_username &&
                    $_POST["password"] === $this->db_password
                ) {
                    header("Location: welcome.php");
                } else {
                    header("Location: login.php");
                }
            } else {
                header("Location: login.php");
            }
        }
    }
}

$auth = new Authentication();
$auth->login();

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navigation">
    <h2>IKT 2018</h2>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</div>

<div id="id01" class="modal">

    <form class="modal-content animate" action="login.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img/avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                Cancel
            </button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<script src="login.js">
</script>

</body>
</html>
