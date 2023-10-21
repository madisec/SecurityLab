<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Injectio</title>
    <style>
        body {
            background-color: black;
        }
        .container {
            width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
        }
        #heading {
            font-family: monospace;
        }
        p {
            font-family: 'Courier New', Courier, monospace;
        }
        
      
    </style>
    
</head>
<body>
    <br>
    <br>
    <div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 -960 960 960" width="100"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H160v400Zm140-40-56-56 103-104-104-104 57-56 160 160-160 160Zm180 0v-80h240v80H480Z"/></svg>
       <h1 id="heading">Hi baybe, can you ping me?</h1>
        <p>Enter an IP or domain for get ping</p>
        <br>
        <hr>
        <br>
        <?php 
        $ci = $_GET['ci'];
        $runexec = system("ping $ci -c 12");
        echo "<p>$ci</p>"
        
        ?>
        
    </div>
</body>
</html>