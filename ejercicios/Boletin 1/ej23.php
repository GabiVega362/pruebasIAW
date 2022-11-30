<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $si = 25;
        $no = 40;
        $total = ($si + $no);
        $porSi = ($si / $total) * 100 ;
        $porNo = ($no / $total) * 100;

            echo "<p> Porcentaje si: ". $porSi . "%</p>\n";
            echo "<p> Porcentaje no: ". $porNo . "%</p>\n";

    ?>
</body>
</html>