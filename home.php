<?php
    require_once 'steamauth/steamauth.php';

    $title_num = rand(0, count($translations->login->titles)-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <title><?= $translations->website_name; ?> - login</title>
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
            <h2><?= $translations->login->header; ?></h2>
            <h1><a title="<?= $translations->login->titles[$title_num]->hover; ?>" href="<?= $translations->login->titles[$title_num]->link; ?>"><?= $translations->login->titles[$title_num]->name; ?></a></h1>
            <h3><?= $translations->login->footer; ?></h3>
            <?php loginbutton(); ?>
        </div>
    </body>
</html>