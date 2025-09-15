<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>
<body>
    <?php
    $n = 10;
    $i = 5;
        echo ("== OPERATOR PERBANDINGAN ==");
        echo "<br>";
        echo "Nilai N=10";
        echo "<br>";
        echo "Nilai I=5";
        echo "<br>";
        echo "N==I :"; var_dump($n==$i);
        echo "<br>";
        echo "N>=I :"; var_dump($n>$i);
        echo "<br>";
        echo "N<=I :"; var_dump($n<$i);
        echo "<br>";
        echo "N>=I :"; var_dump($n>=$i);
        echo "<br>";
        echo "I<=N :"; var_dump($n<=$i);
        echo "<br>";
        echo "I=N :"; var_dump($n!=$i);
        echo "<br>";
    ?>
</body>
</html>