<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Redirect</title>
    <style>
        body {
            background-color: black;
        }
        .container {
            width: 550px;
            margin: 0 auto;
            padding: 20px;
            background-color: aliceblue;
            border-radius: 20px;
            text-align: center;
        }
        #t1 {
            color: red;
        }
        #p1 {
            color: blue;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <h1 id="t1">Open Redirect</h1>
        <p id="p1">Enter URL</p>
        <?php 
        $redirect_url = $_GET['direct'];
        header('Location: '. $redirect_url);
        ?>
    </div>
</body>
</html>