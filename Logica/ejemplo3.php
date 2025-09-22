<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        nav a {
            text-decoration: none;
            display: inline-block;
            padding: 10px;
            background-color: #4CAF50;
            border-radius: 50px;
            margin-bottom: 20px;
            color: white;
            font-size: 20px;
            text-align: center;
            width: 30px;
            height: 30px;
            line-height: 30px;
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 5px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h3 {
            color: #555;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        </a>
    </nav>
<h3>Area de un Triangulo</h3>

<form method="post"">
    DIGETE BASE DEL TRIANGULO: <input type="number" name="base" required><br><br>
    DIGETE ALTURA DEL TRIANGULO: <input type="number" name="altura" required><br><br>
    <input type="submit" value="CALCULAR AREA">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["base"]) && isset($_POST["altura"])) {
        $b = $_POST["base"];
        $h = $_POST["altura"];

        $area = ($b * $h) / 2;
        echo "<h3>El area del triangulo con base $b y altura $h es: $area</h3>";
    }
   }
?>
</body>
</html>