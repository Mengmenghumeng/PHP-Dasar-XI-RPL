<?php

if (isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

if ($username=="Humam Shadiq" && $password=="123"){
     setcookie('login', "berhasil login", time() + 3600);
     setcookie('user', "$username", time() + 3600);

    header("Location:dashboard.php");

}else{
    $pesan="<div class='alert alert-danger mt-4' role='alert'>
            Username dan Password salah!
        </div>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cookie</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height:100vh">
        <div class="card py-5 px-4 align-items-center text-center shadow justify-content-center" style="border-radius:15px;">
            
        <h3>LOGIN</h3>
        
        <?php
            if (isset($pesan)){
                echo $pesan;
            }
        ?>
        
        <form method="post" action="">
            <input type="text" placeholder="Input Username" name="username" class="form-control my-3" aria-label="Username" aria-describedby="basic-addon1">
            <input type="password" placeholder="Input Password" name="password" class="form-control my-3" aria-label="Input Password" aria-describedby="basic-addon1">
            <button type="submit" name="login" class="btn btn-primary btn-sm"><i class="bi bi-person-fill"></i>Login</button>
        </form>
        </div>
</div>
</div>
</body>
</html>