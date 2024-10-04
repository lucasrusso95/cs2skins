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
            <div style="display: flex;justify-content: center;margin: 40px 0;">
                <img src="images/bg-quest.jpg" width="500" alt="quest lan house"/>
            </div>
            <div style="display: flex; gap: 10px; margin: 0 20px;">
                <img src="images/foto-1.jpg" width="210" />
                <img src="images/foto-2.jpg" width="210" />
                <img src="images/foto-3.jpg" width="210" />
                <img src="images/foto-4.jpg" width="210" />
                <img src="images/foto-5.jpg" width="210" />
                <img src="images/foto-6.jpg" width="210" />
                <img src="images/foto-7.jpg" width="210" />
                <img src="images/foto-8.jpg" width="210" />
                <img src="images/foto-9.jpg" width="210" />
                <img src="images/foto-10.jpg" width="210" />
            </div>
            <?php loginbutton(); ?>
        </div>
    </body>
</html>