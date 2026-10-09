<?php
include("conexion.php");

$mensaje = "";
$exito = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "¡Registro guardado exitosamente en la base de datos!";
        $exito = true;
    } else {
        $mensaje = "Error al guardar: " . $conexion->error;
    }
}
$conexion->close();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Confirmación de Registro</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <style>
            .card-confirm {
                background: rgba(255, 255, 255, 0.15);
                border-radius: 12px;
                padding: 30px;
                max-width: 400px;
                margin: 20px auto;
                border: 1px solid rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(8px);
            }
            .card-confirm h2 {
                color: #fff;
                font-size: 1.5em;
                margin-bottom: 15px;
            }
            .btn-volver {
                display: inline-block;
                margin-top: 15px;
                padding: 10px 25px;
                background: #ffffff;
                color: #333 !important;
                font-weight: bold;
                border-radius: 6px;
                text-decoration: none;
                transition: background 0.3s;
            }
            .btn-volver:hover {
                background: #e0e0e0;
            }
        </style>
    </head>
    <body class="is-preload">
        <div id="wrapper">
            <div id="bg"></div>
            <div id="overlay"></div>
            <div id="main">
                <header id="header">
                    <div class="card-confirm">
                        <h2><?php echo $mensaje; ?></h2>
                        <a href="index.html" class="btn-volver">Volver al inicio</a>
                    </div>
                </header>
                <footer id="footer">
                    <span class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</span>
                </footer>
            </div>
        </div>
        <script>
            window.onload = function() { document.body.classList.remove('is-preload'); }
            window.ontouchmove = function() { return false; }
            window.onorientationchange = function() { document.body.scrollTop = 0; }
        </script>
    </body>
</html>