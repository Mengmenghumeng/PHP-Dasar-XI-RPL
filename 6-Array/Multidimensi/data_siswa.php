<?php
$students = [["32561" ,"Najril", "XI RPL", "Cipunagara", "Laki-laki", "1.jpg"],
                ["59672", "Sulthan", "XI RPL", "Pagaden", "Laki-laki","2.jpg"],
                ["99999", "Humam", "XI RPL", "Ciheuleut", "Laki-laki", "3.jpg"],
                ["85974", "Arkan", "XI RPL", "Cigadung", "Laki-laki", "4.jpg"],
                ["12346", "Herman", "XI RPL", "Cijambe", "Laki-laki", "5.jpg"],
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
      <td><img src="../img/<?=$students ['5'] ?>"></td>
      <td><?php echo $students['0']?></td>
      <td><?php echo $students['1']?></td>
      <td><?php echo $students['2']?></td>
      <td><?php echo $students['3']?></td>
      <td><?php echo $students['4']?></td>
      <td>
        <a href="edit.php?photo=<?=$students ['5']?>&nisn=<?=$students['0']?>&nama=<?=$students['1']?>&kelas=<?=$students['2']?>&alamat=<?=$students['3']?>&kelamin=<?=$students['4']?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
        <a href="detail.php?photo=<?=$students ['5']?>&nisn=<?=$students['0']?>&nama=<?=$students['1']?>&kelas=<?=$students['2']?>&alamat=<?=$students['3']?>&kelamin=<?=$students['4']?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
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