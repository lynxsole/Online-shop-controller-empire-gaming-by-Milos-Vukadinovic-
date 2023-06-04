<!DOCTYPE html>
<html lang="fr">
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
                <h2>
                    Your Ultimate<br> Destination For The Game.
                </h2>
            </div>
            <div class="desc">
                <p>
                    nesciunt sint aut quo reiciendis saepe voluptates vel fugiat! Qui, fugiat libero ipsum quidem officia neque commodi.
                </p>
            </div>
            <div class="EnterBtn">
                <input onclick="shopAccess()" id="ShopBtn" type="submit" value="Shop Now">
            </div>

            <div class="controller">
                <img style="position: relative;" src="assets\content\img\index\Ps5-controller.webp" alt="ps4-conttroller">
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>