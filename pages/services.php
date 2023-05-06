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

    <div class="services-container">
        <div class="card-container">
            <div class="card">
                <img src="../public/face_treatment.jpg" alt="">
                <div class="content">
                <div class="title">
                    <h3>Face Treatment</h3>
                </div>
                <div class="price">
                    <h3>20$</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="../public/hair_color.jpg" alt="">
                <div class="content">
                <div class="title">
                    <h3>Hair Color</h3>
                </div>
                <div class="price">
                    <h3>15$</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="../public/manicure.jpg" alt="">
                <div class="content">
                <div class="title">
                    <h3>Manicure</h3>
                </div>
                <div class="price">
                    <h3>9$</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="../public/pedicure.jpg" alt="">
                <div class="content">
                <div class="title">
                    <h3>Pedicure</h3>
                </div>
                <div class="price">
                    <h3>13$</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="../public/shampoo.jpg" alt="">
                <div class="content">
                <div class="title">
                    <h3>Shampoo</h3>
                </div>
                <div class="price">
                    <h3>5$</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="../public/wax.jpg" alt="">
                <div class="content">
                <div class="title">
                    <h3>Wax</h3>
                </div>
                <div class="price">
                    <h3>18$</h3>
                </div>
                </div>
            </div>
        </div>
        
    </div>

    <?php
    require  "../components/footer.php"
    ?>
</body>

</html>