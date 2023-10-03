<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diseño.css">
    <title>Login administradores</title>    
</head>
<body class="inicio">
    <form  class="login" action="login.php" method="post"> 
        <h2 class="title">Administradores</h2>

        <label for="" class="campos">
            <input type="text" name="usuario" id="" placeholder="Usuario" class="varchar">
        </label>

        <label for="" class="campos">
            <input type="password" name="password" id="" placeholder="Contraseña" class="varchar">
        </label>
        <p id="mostrar_contra"></p>
        <button onclick="texto($password)">Ver contraseña</button>

        <a href="#" class="link">Forgout your password?</a>

        <button>Entrar</button>
    </form>
</body>
</html>