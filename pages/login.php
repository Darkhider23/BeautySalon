<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    require "../components/header.php"
    ?>

    <div class="login-container">
    <div class="login-form">
            <form action="" id="login-form">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="Email:">
                <input type="password" name="email" placeholder="Password:">
                <input type="submit" name="button" value="Submit">
            </form>
        </div>
    </div>

<?php
require "../components/footer.php"
?>
</body>
</html>