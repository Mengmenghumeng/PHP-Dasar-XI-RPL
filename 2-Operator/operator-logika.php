<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator logika</title>
</head>
<body>
    <?php
    $n = true;
    $i = false;

     echo (" == operator logika AND ==");
     echo "<br>";
        echo (": N && I");var_dump($n && $i);
        echo "<br>";
        echo (": N && N");var_dump($i && $i);
        echo "<br>";
        echo "<br>";

     echo (" == operator logika OR ==");
     echo "<br>";
        echo ("N || I :");var_dump($n||$i);
        echo "<br>";
        echo ("N || N :");var_dump($n||$n);
        echo "<br>";
        echo "<br>";

        
        echo (" == Operator Negasi ==");
        echo "<br>";
        echo ("Nagasi I :");var_dump(!$i);
        echo "<br>";
        echo ("Nagasi N :");var_dump(!$n);

    ?>
</body>
</html>