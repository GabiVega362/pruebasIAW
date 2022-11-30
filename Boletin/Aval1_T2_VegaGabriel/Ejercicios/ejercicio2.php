<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="GabiVega">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../Plantilla.css">
</head>

<body>
    <div class="container">
        <header class="center">
            <h1>
                Implantacion de Aplicaciones Web
            </h1>
        </header>
        <div class="center">
            <div class="card">
                <div class="effect">
                    <div class="enun">
                        <h2>Dada	un	día	e	o	número	de	mes,	devolver	a	estación	do	ano	de	acordo	á	seguinte	
táboa:</h2>
                        <p>Inverno Do 21 de decembro ao 20 de marzo
Primavera Do 21 de marzo oao 21 de xuño
Verán Do 22 de xuño ao 22 de setembro
Outono Do 23 de setembro ao 20 de decembro</p>
                    </div>
                    <div class="result">
                        <h2>Resultado: </h2>
                        <?php
                            $dia = 23;
                            $mes = 4;

                            echo "<p> Día $dia y mes $mes</p>";
                            if (($dia >= 21) && ($mes >= 3) && ($dia <= 20) && ($mes <= 6)){
                                echo "<p>Estás en Primavera</p>";
                            } /*
                            if ((($dia >= 22) && ($mes >= 6)) && (($dia >= 22) && ($mes >= 9))){
                                    echo "<p>Estás en Verano</p>";
                            } 
                            if ((($dia >= 23) && ($mes >= 9)) && (($dia >= 20) && ($mes >= 12))){
                                        echo "<p>Estás en Otoño</p>";
                            }
                             if ((($dia >= 21) && ($mes >= 12)) && (($dia >= 20) && ($mes >= 3))){
                                         echo "<p>Estás en Invierno</p>";
                            }
                        
                          */
                            
                        ?>
                    </div>
                </div>
                <!--.effect-->
                <div class="border"></div>
            </div>
            <!--.card-->
        </div>
        <!--.center-->

        <footer class="center">
            <span>Gabriel Vega Menendez</span>
            <span>09 - Noviembre - 2022</span>
        </footer>
    </div>
    <!--.container-->

</body>

</html>