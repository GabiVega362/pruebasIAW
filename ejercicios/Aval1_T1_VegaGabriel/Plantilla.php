<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="GabiVega">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link rel="stylesheet" href="Plantilla.css">
</head>

<body>
<?php
// enunciado
echo "
    <div class=\"container\">
        <header class=\"center\">
            <h1>
                Implantacion de Aplicaciones Web
            </h1>
        </header>
";

//tabla

echo "
    
";

//main

echo "
<div class=\"todo\">
        <div class=\"center\">
            <div class=\"card\">
                <div class=\"effect\">
                
                    <div class=\"enun\">
                        <h2>Boletin UD 1:</h2>
                        <p>El servidor WEB interpreta correctamente los scripts em php</p>
                    </div>
                    <div class=\"result\">
                        <h2>Resultado:</h2>
                        <table class=\"tabla\" border='1'>
        <tr>
            <th>H</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
        <th>8:10-9</th>
            <td rowspan=\"2\">ASXBD</td>
            <td rowspan=\"3\">SRI</td>
            <td rowspan=\"2\">SAD</td>
            <td rowspan=\"3\">ASO</td>
            <td rowspan=\"3\">ASO</td>
        </tr>
        
        <tr>
        <th>9-9:50</th>
      
        </tr>

        <tr>
        <th>9:50-10:40</th>
            <td rowspan=\"2\">ASO</td>
            
            <td rowspan=\"2\">IAW</td>
        </tr>
        <tr>
        <th>10.40-11:30</th>
             <td rowspan=\"1\">SAD</td>
             <td>IAW</td>
             <td>ASXBD</td>
        </tr>
        <tr>
        <th>11:30-12</th>
            <td colspan=\"5\">RECREO</td>
        </tr>

        <tr>
        <th>12-12:50</th>
            <td>EIE</td>
            <td>SAD</td>
            <td>IAW</td>
            <td>IAW</td>
            <td>ASXBD</td>
        </tr>

        <tr>
        <th>12:50-13:40</th>
            <td rowspan=\"3\">SRI</td>
            <td rowspan=\"2\">EIE</td>
            <td rowspan=\"2\">SRI</td>
            <td rowspan=\"2\">SAD</td>
            <td rowspan=\"2\">IAW</td>
        </tr>

        <tr>
        <th>13:40-14:30</th>
        </tr>
        <tr>
        <th>14.30-15:20</th>
        </tr>
    </table>
                    </div>
                </div>
                <!--.effect-->
                <div class=\"border\"></div>
            </div>
            <!--.card-->
        </div>
        <!--.center-->

        <footer class=\"center\">
            <span>Gabriel Vega Menendez</span>
            <span>28 - Septiembre - 2022</span>
        </footer>
    </div>
    <!--.container-->
</div>
</body>
";
?>
</html>