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
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 7px;
            margin-bottom: 15px;
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
        h3 {
            color: #555;
            text-align: center;
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
    <h3>El mayor de tres números</h3>

    <form method="post">
        <label for="numero1">Ingrese el primer número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">Ingrese el segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <label for="numero3">Ingrese el tercer número:</label>
        <input type="number" id="numero3" name="numero3" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if (isset($_POST['numero1'], $_POST['numero2'], $_POST['numero3'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];            
            if ($numero1 > $numero2 && $numero1 > $numero3) {
                $mayor = $numero1;
            } elseif ($numero2 > $numero1 && $numero2 > $numero3) {
                $mayor = $numero2;
            } else {
                $mayor = $numero3;
            }
            if ($mayor) {
                echo "<h3>El mayor de los tres números es: $mayor</h3>";
            } else {
                echo "<h3>Los tres números son iguales.</h3>";
            }
        } else {
            echo "<h3>Por favor, ingrese los tres números.</h3>";
        }
        ?>
</body>
</html>