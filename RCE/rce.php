<!DOCTYPE html>
<!-- Set cookie for user -->
<?php
$cookie_name = "User";
$cookie_value = "madiisec-challenge";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCE challenge</title>
    <!-- Design page -->
    <style>
        .container {
            width: 550px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, let me tell you a secret</h1>
        <p>
        Well, as you are thinking, there are two entrances, one is easy and the other is difficult. Try. Well done
        </p>
        <p>Enter your name:</p>
        <p>Enter your uri:</p>
        <?php 
        // challenge 1 
        $code1 = $_GET['name'];
        $code1 = stripslashes($code1);
        eval($code1);
        system("code1");
        $code2 = $_GET['uri'];
        $code2 = stripslashes($code2);
        eval("print('$code2');");
        ?>
    </div>
</body>
</html>