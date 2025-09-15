<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    header("Location:dashboard.php");
}

if (isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

if ($username=="Humam Shadiq" && $password=="123"){
     $_SESSION['username']=$username;
     $_SESSION['password']=$password;

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
    <title>Login Session</title>
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
            <div class="col-12 text-center py-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-lock"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="col-12">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="Input-Password"><i class="bi bi-unlock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Input Password" aria-describedby="basic-addon1">
                  </div>
            <button type="submit" name="login" class="btn-outline-white btn-sm btn btn-primary"><i class="bi bi-door-open"></i>Login</button>
        </form>
        </div>
</div>
</div>
</body>
</html>