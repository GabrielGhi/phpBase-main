<?php

include 'connect.php';

if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:index.php');
   }
   else{
    echo  "<script>alert('Nome de usuário ou senha estão incorretos ou não estão cadastrados!');</script>";
   }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0\AdminLTE-3.2.0\plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE-3.2.0\AdminLTE-3.2.0\plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0\AdminLTE-3.2.0\dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Diamond</b>TECH</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça login para iniciar sua sessão como Administrador</p>

      <form method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
              Lembre de mim
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block" name="sub">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OU -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Faça o login usando o Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Faça o login usando o Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="esqueciSenha.php">Esqueci minha senha</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0\AdminLTE-3.2.0\plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0\AdminLTE-3.2.0\plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0\AdminLTE-3.2.0\dist/js/adminlte.min.js"></script>
</body>
</html>
