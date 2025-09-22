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
        h3 {
            color: #555;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 7px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        @media (max-width: 600px) {
            form {
                padding: 10px;
            }
            input[type="number"], input[type="submit"] {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <h3>Reto calculadora Suma, resta, multiplicacion y division</h3>
    <form method="post">
        <label for="numero1">Ingrese el primer numero:</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">Ingrese el segundo numero:</label>
        <input type="number" id="numero2" name="numero2" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        echo "<h3>La suma de $numero1 y $numero2 es: $suma</h3>";
        echo "<h3>La resta de $numero1 y $numero2 es: $resta</h3>";
        echo "<h3>La multiplicación de $numero1 y $numero2 es: $multiplicacion</h3>";
        echo "<h3>La división de $numero1 por $numero2 es: $division</h3>";
    }
    ?>
</body>
</html>