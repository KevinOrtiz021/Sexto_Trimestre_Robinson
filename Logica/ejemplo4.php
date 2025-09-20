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
    <h3>Perímetro de un círculo</h3>

    <form method="post">
        <label for="radio">Ingrese el radio del círculo:</label>
        <input type="number" id="radio" name="radio" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if (isset($_POST['radio'])) {
            $radio = $_POST['radio'];
            $per = 2 * pi() * $radio;
            echo "<h3>El perímetro del círculo es: $per</h3>";
        }
    ?>
</body>
</html>