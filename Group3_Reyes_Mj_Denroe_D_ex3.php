<?php


$filename = 'hello_world.html';


echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>File Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .message-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        .success {
            background-color: #e7f3fe;
            color: #31708f;
            border: 1px solid #bce8f1;
        }
        .exists {
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
        }
        a {
            color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>";



if (!file_exists($filename)) {


    $htmlContent = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hello World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 3em;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Hello World</h1>
    </div>
</body>
</html>";


    file_put_contents($filename, $htmlContent);



    echo "<div class='message-container success'>
            <strong>File created successfully!</strong> Click <a href='$filename'>here</a> to open it.
          </div>";
} else {


    echo "<div class='message-container exists'>
            <strong>File already exists!</strong> Click <a href='$filename'>here</a> to view it.
          </div>";
}

echo "</body></html>";
?>
