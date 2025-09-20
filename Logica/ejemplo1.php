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
        hr {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        h3 {
            color: #555;
        }
    </style>
</head>
<body>
    <h2> ALGORITMOS SUMAR DOS NUMEROS </h2>
    <form method="post">
        Numero 1: <input type="number" name="n1" required><br><br>
        Numero 2: <input type="number" name="n2" required><br><br>
        <input type="submit" value="SUMAR">
    </form>
    <hr>
    
    <?php
    if (isset($_POST['n1']) && isset($_POST['n2'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        $suma = $n1 + $n2;
        echo "<h3>La suma de $n1 y $n2 es: $suma</h3>";
    }
    ?>
</body>
</html>