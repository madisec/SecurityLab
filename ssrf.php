<!DOCTYPE html>
<?php
header("Access-Control-Allow-Origin: *");
$cookie_name = "User";
$cookie_value = "madiisec-challenge";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSRF</title>
    <style>
        body {
            background-color: black;
        }
        .container {
            width: 550px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1><br>
        <p>Can you read my pass:</p><br>
        <?php 
        $url = $_GET['url'];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 5);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
        $data = curl_exec ($curl);
        if(curl_error($curl)){
            echo curl_error($curl);
        }else{
        echo "<pre>" . $data . "</pre>";
         }
         curl_close ($curl);
        ?>
    </div>
</body>
</html>
<?php

    

    

        
?>