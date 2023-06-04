<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>

    <?php
        include('assets\php\nav.php');
    ?>

    <div class="container">
        <div class="logContent">
            <div class="login">
                <form action="assets\php\logUser.php" method="get">
                    <input type="email" name="mail" placeholder="Entrer votre Email" id="inputMail">
                    
                </form>
            </div>
            <div class="shopAccess">
                <h3 style="padding-top: 40%;">Access to Shop</h3>
                <input id="ShopBtn" type="button" value="Shop">
            </div>
        </div>
    </div>
</body>
</html>