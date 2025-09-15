<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Get di php </h1>
    <form action="get.php" method="get">
        <input type="text" name="nama" placehorder="Nama">
        <input type="submit" value="submit">
    </form>
    <?php
    echo $_GET['nama'];
    ?>
</body>
</html>