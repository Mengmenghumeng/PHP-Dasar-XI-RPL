<?php
    session_start();
        // ketika button buat di klik
    if (isset($_POST['buat'])){
        // nama dari inputan
        $namaSession=$_POST['session'];
        // membuat session
        $_SESSION['isi']= $namaSession;

        header("Location:session.php");
    }
    if (isset($_POST['hapus'])){

        // Menghapus session
        session_unset();

        header("Location:session.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Nanti Session muncul di bawah</h1>
    <?php if (isset($_SESSION['isi'])): ?>
        <h4>Sekarang makan kue <?= $_SESSION ['isi']?></h4>
<?php endif?>
    <form method="post" action="">
        <input type="text" name="session"></button>
        <button type="submit" name="buat">Buat</button>
        <button type="submit" name="hapus">Hapus</button>
    </form>
</body>
</html>