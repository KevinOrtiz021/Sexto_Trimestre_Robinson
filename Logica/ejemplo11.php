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
        input[type="text"] {
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
            input[type="text"], input[type="submit"] {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <h3>Palabra palindroma</h3>
    <form method="post">
        <label for="palabra">Ingrese una palabra:</label>
        <input type="text" id="palabra" name="palabra" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if (isset($_POST['palabra'])) {
        $palabra = $_POST['palabra'];
        $palabra = preg_replace('/[^a-zA-Z]/', '', $palabra);
        $palabra = strtolower($palabra);
        $palabra_reverse = strrev($palabra);
        if ($palabra == $palabra_reverse) {
            echo "<h3>La palabra $palabra es palindroma.</h3>";
        } else {
            echo "<h3>La palabra $palabra no es palindroma.</h3>";
        }
    } else {
        echo "<h3>Por favor, ingrese una palabra para verificar si es palindroma.</h3>";
    }
    ?>
</body>
</html>