<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai 2</title>
</head>
<body>
    <?php
    $nilai = 80;
    if ($nilai >= 80) {
        echo "Nilai Anda $nilai, Anda Lulus";
    } elseif ($nilai >= 60) {
        echo "Nilai anda $nilai, Anda Remedial";
    } else {
        echo "Nilai Anda $nilai, Anda tidak lulus";
    }
    ?>
</body>
</html>