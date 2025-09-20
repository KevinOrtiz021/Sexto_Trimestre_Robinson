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
    <h2>Par o Impar</h2>
    <form method="post">
        Ingrese un numero
        <input type="number" name="num">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["num"])){
            $n = $_POST["num"];
            if($n % 2 == 0){
                echo "<h3>$n es un numero Par</h3>";
            } else {
                echo "<h3>$n es un numero Impar</h3>";
            }
        }
    }
    ?>
</body>
</html>