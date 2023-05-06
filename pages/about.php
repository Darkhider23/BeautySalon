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

    <div class="about-container">
        <div class="content">
        <h4>Enhance your natural<br> beauty with us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magni beatae, doloremque quidem unde eaque nobis ipsa est incidunt veritatis?</p>
        </div>
        <img src="../public/about.png" alt="">
    </div>

    <?php
    require  "../components/footer.php"
    ?>
</body>

</html>