<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>
<body>
    <h1>ENREGISTRA NOMBRE</h1>
    <form action="ex41pagina2.php" method="POST">
        <input type="number" name="ocult">
        <button>Enviar</button>
        <?php
            session_start();
            if (!isset($_SESSION["historial"])) {
                $historial = array();
                $_SESSION["historial"] = $historial;
            } if (!isset($_SESSION["intentos"])) {
                $intentos = 1;
                $_SESSION["intentos"] = $intentos;
            }
        ?>
    </form>
</body>
</html>