<?php
    require_once 'steamauth/steamauth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
    <body>
        <div>
            <div style="display: flex; margin-bottom: 35px;">
                <img src="images/bg-quest.jpg" width="500" alt="quest lan house"/>
            </div>
            <div style="display: flex;">
                <img src="images/foto-1.jpg" height="210" />
                <img src="images/foto-2.jpg" height="210" />
                <img src="images/foto-3.jpg" height="210" />
                <img src="images/foto-4.jpg" height="210" />
                <img src="images/foto-5.jpg" height="210" />
                <img src="images/foto-6.jpg" height="210" />
                <img src="images/foto-7.jpg" height="210" />
                <img src="images/foto-8.jpg" height="210" />
                <img src="images/foto-9.jpg" height="210" />
                <img src="images/foto-10.jpg" height="210" />
            </div>
            <?php loginbutton(); ?>
        </div>
    </body>
</html>