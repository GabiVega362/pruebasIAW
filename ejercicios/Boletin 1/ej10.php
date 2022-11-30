<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercici0 10</title>
</head>
<body>
    <?php
        $hora="122";
        $modulo="IAW";
        $dias="martes , miercoles, jueves y viernes";

        echo"El modulo $modulo se imparte $hora h. los dias $dias";
    ?>

    <!-- Tabla -->
    <table align="center" class="tabla" border="1">
                <tr>
                    <th>H</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>modulo</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                </tr>
                <tr>
                <th>8:10-9</th>
                    <td rowspan="2">ASXBD</td>
                    <td rowspan="3">SRI</td>
                    <td rowspan="2">SAD</td>
                    <td rowspan="3">ASO</td>
                    <td rowspan="3">ASO</td>
                </tr>
                
                <tr>
                <th>9-9:50</th>
            
                </tr>

                <tr>
                <th>9:50-10:40</th>
                    <td rowspan="2">ASO</td>
                    
                    <td rowspan="2">IAW</td>
                </tr>
                <tr>
                <th>10.40-11:30</th>
                    <td rowspan="1">SAD</td>
                    <td>IAW</td>
                    <td>ASXBD</td>
                </tr>
                <tr>
                <th>11:30-12</th>
                    <td colspan="5" align="center">RECREO</td>
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
                    <td rowspan="3">SRI</td>
                    <td rowspan="2">EIE</td>
                    <td rowspan="2">SRI</td>
                    <td rowspan="2">SAD</td>
                    <td rowspan="2">IAW</td>
                </tr>

                <tr>
                <th>13:40-14:30</th>
                </tr>
                <tr>
                <th>14.30-15:20</th>
                </tr>

</body>
</html>