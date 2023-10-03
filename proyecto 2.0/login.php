<?php
    session_start();
?>
<?php
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $conexion = mysqli_connect("localhost", "root", "", "administradores");

    $consulta = "SELECT * FROM personal WHERE usuario = '$usuario' AND password = '$password'";

    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    // echo <script>
    //         function texto($password){
    //         const pass = document.getElementById("mostrar_contra")
    //         pass.textContent = $password
            
    //         setTimeout(texto, 2000)
    //     }
    // </script>;

    if($filas > 0){
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
        
        if($usuario == true){
            header("location: table.php");
        }
    }else{
        header("Refresh:3; url=index.php");
        ?>
        <?php
            include("index.php");
        ?>
            <h1 style =
            "color: black;
            font-family: arial;
            text-align: center;
            font-size: 20px;">
            Su usuario o contraseña es incorrecto. Vuelva a ingresarlos.
            <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>