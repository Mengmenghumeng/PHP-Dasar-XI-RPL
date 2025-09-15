<?php
    $hasil=0;

        if(isset($_POST['tambah']) || isset($_POST['kurang']) || isset($_POST['kali']) || isset($_POST['bagi'])) {
           
           
            $a1=$_POST['angka1'];
            $a2=$_POST['angka2'];

            function tambah(){
                global $a1 , $a2;
                return $a1+$a2;
            }
            function kurang(){
                global $a1 , $a2;
                return $a1-$a2;
            }
            function kali(){
                global $a1 , $a2;
                return $a1*$a2;
            }
            function bagi(){
                global $a1 , $a2;
                return $a1/$a2;
            }
            if(isset($_POST['tambah'])){
                $hasil = tambah();
            }
            elseif(isset($_POST['kurang'])){
                $hasil = kurang();
            }
            elseif(isset($_POST['kali'])){
                $hasil = kali();
            }
            elseif(isset($_POST['bagi'])){
                $hasil = bagi();
            }
            
           
        }
        // if(isset($_POST['tambah'])) {
        //     $a1=$_POST['angka1'];
        //     $a2=$_POST['angka2'];
        //     $hasil= $a1+$a2;
        // }

        // if(isset($_POST['kurang'])) {
        //     $a1=$_POST['angka1'];
        //     $a2=$_POST['angka2'];
        //     $hasil= $a1-$a2;
        // }

        // if(isset($_POST['kali'])) {
        //     $a1=$_POST['angka1'];
        //     $a2=$_POST['angka2'];
        //     $hasil= $a1*$a2;
        // }

        // if(isset($_POST['bagi'])) {
        //     $a1=$_POST['angka1'];
        //     $a2=$_POST['angka2'];
        //     $hasil= $a1/$a2;
        // }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container-fluid bg-primary-subtle d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="card bg-white py-5 px-4 text-center">
        <h5>Calculator</h5>
    
            <form method="post" action="">
            <div class="alert alert-primary mt-4" role="alert">Hasil:<?= $hasil?> 
        </div>
            <input type="number" name="angka1" class="form-control my-2">
            <input type="number" name="angka2" class="form-control my-2">
            <div class="d-flex justify-content-between mt-4">
                <button class="btn btn-secondary" name="tambah" type="submit">+</button>
                <button class="btn btn-secondary" name="kurang" type="submit">-</button>
                <button class="btn btn-secondary" name="kali" type="submit">x</button>
                <button class="btn btn-secondary" name="bagi" type="submit">/</button>

                
            </div>
        </form>
    </div>
    </div>
</body>
</html>