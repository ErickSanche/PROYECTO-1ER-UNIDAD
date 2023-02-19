<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Leer el archivo de usuarios
    $file = fopen("users.txt", "r") or die("No se pudo abrir el archivo");
    $valid = false;

    while (!feof($file)) {
        $line = trim(fgets($file));
        list($user, $pass) = explode(":", $line);

        if ($user == $username && $pass == $password) {
            $valid = true;
            break;
        }
    }

    fclose($file);

    if ($valid) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        // Mostrar un mensaje de error
        echo "Nombre de usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../proyecto1/syles/css/login2.css">
</head>
<body style="background-image: url(../proyecto1/imagenes/shop.png)";>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form  class="login-form" method="post" action="login.php">
                        <label for="username">Nombre de usuario:</label>
                        <input type="text" id="username" name="username" required><br><br>
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required><br><br>
                        <input type="submit" name="submit" value="Iniciar sesión">
                    </form>

                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo">
                        <input type="text" placeholder="Correo Electronico">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="../proyecto1/syles/js/script.js"></script>
</body>
</html>