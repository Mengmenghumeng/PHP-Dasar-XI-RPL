<?php
$students = [
  [
    "nisn"=>"32561",
    "nama"=>"Najril", 
    "kelas"=>"XI RPL",
    "alamat"=>"Cipunagara",
    "kelamin"=>"Laki-laki",
    "foto"=>"1.jpg"],

    ["nisn"=>"59672",
    "nama"=>"Sulthan", 
    "kelas"=>"XI RPL",
    "alamat"=>"Pagaden",
    "kelamin"=>"Laki-laki",
    "foto"=>"2.jpg"],

    ["nisn"=>"99999",
    "nama"=>"Humam", 
    "kelas"=>"XI RPL",
    "alamat"=>"Ciheuleut",
    "kelamin"=>"Laki-laki",
    "foto"=>"3.jpg"],

    ["nisn"=>"85974",
    "nama"=>"Arkan", 
    "kelas"=>"XI RPL",
    "alamat"=>"Cigadung",
    "kelamin"=>"Laki-laki",
    "foto"=>"4.jpg"],

    ["nisn"=>"12346",
    "nama"=>"Herman", 
    "kelas"=>"XI RPL",
    "alamat"=>"Cijambe",
    "kelamin"=>"Laki-laki",
    "foto"=>"5.jpg"],
  ];
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- menghubungkan CDN bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-primary-subtle py-5">
        <div class="container">

        <!-- card -->
         <div class="card">
            <div class="card-header">
                Data Siswa
            </div>
            <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Foto</th>
      <th scope="col">NISN</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Gender</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($students as $students ): ?>
    <tr>
      <th scope="row"><?= $no?></th>
      <td><img src="img/<?=$students ['foto'] ?>"></td>
      <td><?php echo $students['nisn']?></td>
      <td><?php echo $students['nama']?></td>
      <td><?php echo $students['kelas']?></td>
      <td><?php echo $students['alamat']?></td>
      <td><?php echo $students['kelamin']?></td>
      <td>
        <a href="edit.php?foto=<?= $students ['foto']?>&nisn=<?=$students['nisn']?>&nama=<?=$students['nama']?>&kelas=<?=$students['kelas']?>&alamat=<?=$students['alamat']?>&kelamin=<?=$students['kelamin']?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
        <a href="detail.php?foto=<?=$students ['foto']?>&nisn=<?=$students['nisn']?>&nama=<?=$students['nama']?>&kelas=<?=$students['kelas']?>&alamat=<?=$students['alamat']?>&kelamin=<?=$students['kelamin']?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
    </td>
    </tr>
      <?php $no++?>
      <?php endforeach ?>
    </tr>
  </tbody>
</table>
            </div>
         </div>
        </div>
    </div>
</body>
</html>