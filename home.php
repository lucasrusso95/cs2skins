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
            <div style="display: flex; gap: 20px; flex-wrap: wrap; margin: 0 20px;">
                <img src="images/foto-1.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-2.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-3.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-4.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-5.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-6.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-7.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-8.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-9.jpg" height="200" style="border-radius: 100%;" />
                <img src="images/foto-10.jpg" height="200" style="border-radius: 100%;" />
            </div>
            <div class="bg-primary" style="display: flex;gap: 20px;justify-content: center;align-items: center;margin-top: 1rem;">
                <h2>To choose weapon paints loadout, you need to</h2>
                <?php loginbutton(); ?>
            </div>
        </div>
    </body>
</html>