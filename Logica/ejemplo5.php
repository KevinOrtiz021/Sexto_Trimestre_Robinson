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
    <h3>Tabla de multiplicación de un número</h3>

    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            echo "<h3>Tabla de multiplicación del número $numero:</h3>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        }
        ?>
</body>
</html>