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
                        <h2>Ejercicio 1:</h2>
                        <p> Dada a	hora,	minuto	e	segundo,	atopar	a	hora	do	seguinte	segundo.</p>
                    </div>
                    <div class="result">
                        <h2></h2>
                        <?php
                            $hora = 12;
                            $min = 59;
                            $seg = 50;
                            
                            do{
                                if($seg == 60){
                                    $seg = 0;
                                    $min++;
                                } else {
                                    $seg++;
                                    echo "<p>Un minuto más: $hora : $min : $seg</p>\n";
                                }
                                if ($min == 60){
                                    $min = 0;
                                    $hora++;
                                    echo "<p>Una hora más: $hora : $min : $seg</p>\n";
                                }
                            } while($hora < 13);
                            
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