<?php
  require_once ("libros.php");


 ?>

<!doctype html>

<html lang="es">

    <head>

        <meta charset="utf-8">
        <title>Examen ej 1</title>
        <link rel="stylesheet" href="estilos.css">
    </head>

    <body>

        <header>

<<<<<<< HEAD
            <h1>Biblioteca</h1>
            <h2>Nueva version en rama master</h2>
=======

>>>>>>> otra

        </header>

        <nav>

            <h2>Libros disponibles</h2>


              <?php
                $seleccion=0;
            		if(isset($_GET['pos'])) {
                  $seleccion = $_GET['pos'];
                }

                echo "<ul>";
                foreach ($libros as $tit => $res) {
                    $url = urlencode($tit);
                    echo "<li><a href='index.php?pos=$url'>{$res['titulo']}</a></li>";

                }
                echo "</ul>";

               ?>
        </nav>

        <main>
            <h1>Archivo modificado para la rama otra</h1>

            <p>Modificacion en la rama master</p>

            <section>

            <?php
                    if (!isset ($libros[$seleccion])){
                      echo "<p>El libro requerido no existe</p>";

                    }else{
                      echo "<h3>Titulo</h3>";
                      echo $libros[$seleccion]['titulo'];
                      echo "<h3>Autor</h3>";

                    }

            ?>

            </section>


        </main>

    </body>

</html>
