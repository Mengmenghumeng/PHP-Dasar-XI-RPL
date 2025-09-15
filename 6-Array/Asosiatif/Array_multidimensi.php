 <?php
    $students = [["32561" ,"Najril", "XI RPL", "Cipunagara", "Laki-laki", "1.jpg"],
                ["59672", "Sulthan", "XI RPL", "Pagaden", "Laki-laki","2.jpg"],
                ["99999", "Humam", "XI RPL", "Ciheuleut", "Laki-laki", "3.jpg"],
                ["85974", "Arkan", "XI RPL", "Cigadung", "Laki-laki", "4.jpg"],
                ["12346", "Herman", "XI RPL", "Cijambe", "Laki-laki", "5.jpg"],
];
    // var_dump($students[2][1]);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($students as $students ): ?>
        <ul>
            <li><img src="../img/<?php echo $students['5'] ?>"></li>
            <li><?php echo $students['0']?></li>
            <li><?php echo $students['1']?></li>
            <li><?php echo $students['2']?></li>
            <li><?php echo $students['3']?></li>
            <li><?php echo $students['4']?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>