<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        $x01 = $_GET['x01'];
        echo $x01;
        ?>
    </title>
    <style>
        body {
            background-color: black;
        }
        .container {
            background-color: white;
            color: red;
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 30px;
            text-align: center
        }
        #title {
            color: <?php 
                    $x02 = $_GET['x02'];
                    echo $x02;
                    ?>;
            
        }
        #put {
            background-color: blue;
            color: wheat;
            padding: 10px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <br>
    <dir class="container">
        <h1 id="title">XSS</h1>
        <p id="inject">Inject</p><br>
        <?php 
        $x03 = $_GET['x03'];
        echo $x03;
        ?>
        <!-- <input type="text" id="put" name="" value=""> -->
        <?php
        $x04 = $_GET['x04'];
        echo "<input type='text' id='put' name='$x04' value='usernmae'><br><br>";
        $x05 = $_GET['x05'];
        echo "<input type='text' id='put' name='username' value='$x05'>";
        ?>
    </dir>
</body>
</html>