<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pengulangan</h1>
    <h2>For</h2>
    <?php
        for ($i = 1; $i <=5; $i++) {
            echo "Hello Worlod <br>";
        }
    ?>

        <h2>While</h2>
        <?php
            $i = -2;
            while ($i <= 5) {
                echo "Hello world <br>";
                $i++;
            }
        ?>

        <h2>Do While</h2>
        <?php
            $i = 6;
            do {
                echo "Hello world <br>";
                $i++;
            } while ($i <= 5);
        ?>
</body>
</html>