<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('assets/php/nav.php');
    ?>
    <div class="Hero">
        <div class="Container">
            <div class="Intro">
                <h2 class="ShowText">
                    Your Ultimate<br> Destination For The Game.
                </h2>
            </div>
            <div class="desc ShowDesc">
                <p>
                    nesciunt sint aut quo reiciendis saepe voluptates vel fugiat! Qui, fugiat libero ipsum quidem officia neque commodi.
                </p>
            </div>
            <div class="EnterBtn ShowBtn">
                <input onclick="shopAccess()" id="ShopBtn" type="submit" value="Shop Now">
            </div>

            <div class="controller ShowController">
                <img class="pictureController" style="position: absolute; " src="assets\content\img\index\Ps5-controller.webp" alt="ps5-conttroller">
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>