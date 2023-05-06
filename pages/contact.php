<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.
    0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../styles.css" rel="stylesheet">
    <title>Beauty Saloon</title>
</head>
<body>
    <?php
    require "../components/header.php"
    ?>

    <div class="contact-container">
        <div class="contact-form">
            <form action=""id="contact-form">
                <h1>Contact Us</h1>
                <input type="text" name="name" placeholder="Name:">
                <input type="text" name ="email" placeholder="Email:">
                <textarea placeholder="Type your message here..."></textarea>
                <input type="submit" name="button" value="Submit">
            </form>
        </div>
    </div>

    <?php
    require  "../components/footer.php"
    ?>
</body>
</html>