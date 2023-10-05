<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 3</title>
</head>
<body>
    <h1>ENDEVINA EL NOMBRE</h1>
    
        <?php
        session_start();       
        function createForms() {
            echo '<form method="POST">';
                echo '<input type="number" name="endevina">';
                echo '<button>Endevinar</button>';
            echo '</form>';
        }
        function showErrors() {
            foreach ($_SESSION["historial"] as $errores) {
                echo "$errores ";
                
            }
        }
        if (!isset($_POST['endevina'])) {
            createForms();
        } else {
            if ($_POST['endevina'] === $_SESSION["ocult"]) {
                echo "<h3>Felicitats</h3>";
                echo "<p>Intentos finales:". $_SESSION["intentos"]."</p>";
                echo '<a href="ex41pagina1.php">Pagina 1</a>';
                $_SESSION["historial"] = [];
                $_SESSION["intentos"] = 1;
            } elseif ($_POST['endevina'] < $_SESSION['ocult']) {
                echo "<h3>El numero que esteu buscant es major</h3>";          
                array_push($_SESSION["historial"],$_POST['endevina']);
                $_SESSION["intentos"]+=1;
                createForms();
                showErrors();
            } elseif ($_POST['endevina'] > $_SESSION['ocult']) {
                echo "<h3>El numero que esteu buscant es menor</h3>";
                array_push($_SESSION["historial"],$_POST['endevina']);
                $_SESSION["intentos"]+=1;
                createForms();    
                showErrors();   
            } 
        
        }
        ?>
    
</body>
</html>