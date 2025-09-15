<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cookie</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height:100vh">
        <div class="card p-3 col-lg-6" style="border-radius:15px;">
            <div class="row">
                <div class="kiri col-lg-4">
                <img src="../img/1.jpg" class="img-fluid col-12 rounded">
                </div>
                <div class="kanan col-lg-8">
                <h2 class="fw-bold mb-0"><?= $_COOKIE['user']?></h2>
                <small>He's a Programmer, and Calon sukses</small>
                <div class="col-12 py-3">
                    <small>Dia Seorang:</small><br>
                    <span class="badge rounded-pill text-bg-primary">GITARIS</span>
                    <span class="badge rounded-pill text-bg-danger">PROGRAMMER</span>
                    <span class="badge rounded-pill text-bg-warning">MURID TELADAN</span>
                </div>
                <div class="row">
                <div class="col-8">
                    <a href="#" class="btn rounded-pill btn-dark col-12">Edit Profile</a>
                </div>
                <div class="col-4">
                    <a href="logout.php" class="btn rounded-pill btn-danger col-12">Logout</a>
            </div>
                </div>
</div>
</div>
</div>
</div>
</body>
</html>