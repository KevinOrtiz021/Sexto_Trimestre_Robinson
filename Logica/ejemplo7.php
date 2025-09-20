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
    <h3>Promedio de notas</h3>

    <form method="post">
        <label for="nota1">Ingrese la primera nota:</label>
        <input type="number" id="nota1" name="nota1" required>
        <label for="nota2">Ingrese la segunda nota:</label>
        <input type="number" id="nota2" name="nota2" required>
        <label for="nota3">Ingrese la tercera nota:</label>
        <input type="number" id="nota3" name="nota3" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];

            $promedio = ($nota1 + $nota2 + $nota3) / 3;
            echo "<h3>El promedio de las notas es: $promedio</h3>";
        }
    ?>
</body>
</html>