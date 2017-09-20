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

            <h1>Biblioteca</h1>
            <h2>Nueva version</h2>

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
            <h1>Información sobre el libro</h1>

            <section>

            <?php
                    if (!isset ($libros[$seleccion])){
                      echo "<p>El libro requerido no existe</p>";

                    }else{
                      echo "<h3>Titulo</h3>";
                      echo $libros[$seleccion]['titulo'];
                      echo "<h3>Autor</h3>";
                      echo $libros[$seleccion]['autor'];
                      echo "<h3>Genero</h3>";
                      echo $libros[$seleccion]['genero'];
                      echo "<h3>Resumen</h3>";
                      echo $libros[$seleccion]['resumen'];
                    }

            ?>

            </section>


        </main>

    </body>

</html>
