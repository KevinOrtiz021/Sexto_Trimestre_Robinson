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
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
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

            input[type="number"],
            input[type="submit"] {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        </a>
    </nav>
    <h3>Calcular el índice de masa corporal</h3>
    <form method="post">
        <label for="peso">Ingrese su peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required>
        <label for="altura">Ingrese su altura (cm):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if (isset($_POST['peso']) && isset($_POST['altura'])) {
        $peso = floatval($_POST['peso']);
        $altura_cm = floatval($_POST['altura']);
        if ($altura_cm > 0) {
            $altura_m = $altura_cm / 100; // Convertir cm a metros
            $imc = $peso / ($altura_m * $altura_m);
            echo "<h3>Su índice de masa corporal es: " . number_format($imc, 2) . "</h3>";
        } else {
            echo "<h3>La altura debe ser mayor a 0.</h3>";
        }
    }
    ?>
</body>

</html>