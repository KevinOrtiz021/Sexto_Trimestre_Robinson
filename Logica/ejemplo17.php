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
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] {
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
            input[type="text"], input[type="password"], input[type="submit"] {
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
    <h3>Login de un usuario</h3>
    <form method="post">
        <label for="usuario">Ingrese su usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="password">Ingrese su contraseña:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
    </form>
    <h3>Registrar nuevo usuario</h3>
    <form method="post">
        <label for="registrar_usuario">Nuevo usuario:</label>
        <input type="text" id="registrar_usuario" name="registrar_usuario" required>
        <label for="registrar_password">Nueva contraseña:</label>
        <input type="password" id="registrar_password" name="registrar_password" required>
        <input type="submit" value="Registrar">
    </form>
    <?php
    session_start();
    if (!isset($_SESSION['usuarios'])) {
        $_SESSION['usuarios'] = [
            'admin' => '1234',
            'user' => 'abcd'
        ];
    }
    if (isset($_POST['registrar_usuario']) && isset($_POST['registrar_password'])) {
        $nuevo_usuario = trim($_POST['registrar_usuario']);
        $nuevo_password = trim($_POST['registrar_password']);
        if ($nuevo_usuario !== "" && $nuevo_password !== "") {
            if (!array_key_exists($nuevo_usuario, $_SESSION['usuarios'])) {
                $_SESSION['usuarios'][$nuevo_usuario] = $nuevo_password;
                echo "<h3>Usuario '$nuevo_usuario' registrado correctamente.</h3>";
            } else {
                echo "<h3>El usuario '$nuevo_usuario' ya existe.</h3>";
            }
        }
    }
    if (isset($_POST['usuario']) && isset($_POST['password'])) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        if (array_key_exists($usuario, $_SESSION['usuarios']) && $_SESSION['usuarios'][$usuario] === $password) {
            echo "<h3>Bienvenido, $usuario. Login exitoso.</h3>";
        } else {
            echo "<h3>Usuario o contraseña incorrectos.</h3>";
        }
    }
    ?>
</body>
</html>