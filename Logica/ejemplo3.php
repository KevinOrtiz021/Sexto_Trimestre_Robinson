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